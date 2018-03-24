<?php
class ModelCatalogApi extends Model {
	public function sendCurl($url) {
		$curl = curl_init();
			curl_setopt($curl, CURLOPT_HEADER, false);
			curl_setopt($curl, CURLINFO_HEADER_OUT, true);
			curl_setopt($curl, CURLOPT_USERAGENT, $this->request->server['HTTP_USER_AGENT']);
			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curl, CURLOPT_FORBID_REUSE, false);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_URL, $url);
			//curl_setopt($curl, CURLOPT_POST, true);
			//curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
			//curl_setopt($curl, CURLOPT_COOKIE, session_name() . '=' . $this->session->data['cookie'] . ';');

			$json = curl_exec($curl);

			curl_close($curl);
			return $json;
	}

	public function addTrans($data){
		$customer = $this->customer->getId();
		$transId = getToken(10, 'number');
		$transId = $this->checkTransId($transId);
		$this->db->query("INSERT INTO " . DB_PREFIX . "customer_transaction SET 
							customer_transaction_id = '" . $transId . "',
							customer_id = '" . (int)$customer . "',
							orderType = '" . $this->db->escape($data['type']) . "', 
							amount = '" . $this->db->escape($data['rcAmt']) . "',
							rcNumber = '" . $this->db->escape($data['mn']) . "',
							operator = '" . $this->db->escape($data['op']) . "',
							circle = '" . $this->db->escape($data['cr']) . "',
							api = '" . $this->db->escape('rcPanel') . "',
							ip = '" . $this->db->escape( $this->db->escape($this->request->server['REMOTE_ADDR'])) . "',
							date_added = NOW()");
		return  $transId;
	}

	public function addResp($transId, $resp){
		if(is_array($resp)){
		  $resp = serialize($resp);
		}
		$this->db->query("INSERT INTO " . DB_PREFIX . "response SET 
							transId = '" . $transId . "',
							response = '" . $this->db->escape($resp) . "',
							dateAdded = NOW()");
	}
	
	public function updateTrans($transId, $data, $customer, $post){
		$commissionQry = '';
		if($data['status'] != 2){
			$commission = $this->getCommission($customer, $post['op']);
			if($commission>0){
				$commissionAmt = ($commission/100)* $post['rcAmt'];
			}
			$chargeAmt = $post['rcAmt']-$commissionAmt;
			$this->debitAmount($customer, $chargeAmt);
			$commissionQry = " commission = '" . $commission . "', commissionAmt = '" . $commissionAmt . "',";
		}
		$this->db->query("UPDATE " . DB_PREFIX . "customer_transaction SET 
							
							order_id = '" . $data['id'] . "',
							orderStatus = '" . $data['status'] . "',". $commissionQry."
							dateModified = NOW() 
							WHERE customer_transaction_id = '" .$this->db->escape(  $transId ). "'");
	}

	public function getCommission($c, $op){
		$qry = $this->db->query("select commission FROM " . DB_PREFIX . "commission 
								where customer_id = '$c' and opcode='$op'");
		if($qry->num_rows){
			return $qry->row['commission'];
		} else {
			return 0;
		}

	}
	
	public function debitAmount($customer, $amount){
		$this->db->query("UPDATE " . DB_PREFIX . "customer SET 
							wallet = wallet - $amount
							WHERE customer_id = '" . $customer  . "'");
	}

	public function checkTransId($transId){
		$qry = $this->db->query("select customer_transaction_id FROM " . DB_PREFIX . "customer_transaction where customer_transaction_id = '$transId'");
		if($qry->num_rows){
			$transId = getToken(10, 'number');
			$this->checkTransId($transId);		
		} else {
			return $transId;
		}
	}

	public function getTrans($cid){  //left join circle cr ON cr.circlecode = ct.circle
		$qry = $this->db->query("select * FROM " . DB_PREFIX . "customer_transaction ct
								left join operator op ON op.opcode = ct.operator
								where customer_id = '". $this->db->escape( $cid )."' order by date_added DESC");
		return $qry->rows;
	}

	public function getTransById($tid){  //left join circle cr ON cr.circlecode = ct.circle
		$qry = $this->db->query("select * FROM " . DB_PREFIX . "customer_transaction ct
								left join operator op ON op.opcode = ct.operator
								where customer_transaction_id = '".$this->db->escape( $tid)."'");
			return $qry->row;
	}

	public function dthOperators(){
		$qry = $this->db->query("select * FROM " . DB_PREFIX . "operator 
								where category = 'DTH'");
		return $qry->rows;

	}
	public function getOperator($code){
		$qry = $this->db->query("select newtworkName FROM " . DB_PREFIX . "operator 
								where opcode = '$code'");
		return $qry->row['newtworkName'];
	}
	public function getCircle($code){
		$qry = $this->db->query("select * FROM " . DB_PREFIX . "circle 
								where circlecode = '$code'");
		return $qry->row['name'];
	}
	public function getCirlces(){
		$qry = $this->db->query("select * FROM " . DB_PREFIX . "circle 
								where `status` = 1 ORDER BY `name` ASC");
		return $qry->rows;
	}

	public function getCommissionTotal($c){
		$qry = $this->db->query("select sum(commissionAmt) as comission, sum(amount) as paid 
								 FROM " . DB_PREFIX . "customer_transaction 
								where customer_id = '$c' and orderStatus=1");
		if($qry->num_rows){
			return array("comission"=>$qry->row['comission'], "amount"=>$qry->row['paid']);
		} else {
			return array("comission"=> 0, "amount"=>0);
		}
	}

}