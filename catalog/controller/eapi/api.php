<?php
class ControllerEapiApi extends Controller {
	public function getNetwork() {
		$json = array('error'=>'','data'=>'');
		if(isset($this->request->post['rcnuber'])){
			$this->load->model('catalog/api');
			$url = 'https://rcpanel.com/network_api.php?number='.trim($this->request->post['rcnuber']);
			$json['data'] = $this->model_catalog_api->sendCurl($url);
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($json));
		}
	}

	public function getPlan() {
		$json = array('error'=>'','data'=>'','txt'=>'');
		if(isset($this->request->post['op']) && isset($this->request->post['cr'])){
			$this->load->model('catalog/api');
			$codes = $this->model_catalog_api->getPlanCode($this->request->post);
			if($codes){
				$json['txt'] = $codes['op']['newtworkName'].' - '.$codes['cr']['name'];
				$url = 'https://www.rcpanel.com/recharge-plan-api/?opcode='.trim($codes['op']['planOpcode']).'&zone='.trim($codes['cr']['palnCircle']);
				//$url = 'https://www.rcpanel.com/recharge-plan-api/?opcode=AT&zone=WB';
				$plans = $this->model_catalog_api->sendCurl($url);
				$plans = json_decode($plans);
				if(isset($plans->status) && $plans->status['0'] ==1 ){
					$data = array();
					$ctr = 0;
					foreach($plans->tp as $key => $tp){
						$tp = strtoupper($tp);
						if(isset($data[$tp])){ 
							$ctr = $ctr+1;
							$data[$tp] .= '<tr><td>'.$ctr.'</td><td>'.$plans->val[$key].'</td><td>'.$plans->des[$key].'</td><td><div class="btn" onclick="fill('.$plans->am[$key].');"><a class="btn" href="javascript:void(0);">Rs.'.$plans->am[$key].'</a></div></td></tr>';
						} else {
							$ctr = 1;
							$data[$tp] = '<tr><td>'.$ctr.'</td><td>'.$plans->val[$key].'</td><td>'.$plans->des[$key].'</td><td><div class="btn">Rs.'.$plans->am[$key].'</div></td></tr>';
						}
					}
					$json['plans'] = $data;
				} else {
					$json['error'] = 1;
					$json['message'] = 'Sorry! unable to get the plans';
				}
			} else {
				$json['error'] = 1;
					$json['message'] = 'Please select your operator and circle';
			}
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($json));
		}
	}

	public function getDthPlan(){
		$json = array('error'=>'','plans'=>'','txt'=>'');
		if(isset($this->request->post['op']) && isset($this->request->post['cr'])){
				$url = 'https://www.rcpanel.com/recharge-plan-api/dth?opcode='.$this->request->post['op'].'&zone='.$this->request->post['cr'].'';
				$this->load->model('catalog/api');
				//$url = 'https://www.rcpanel.com/recharge-plan-api/dth?opcode=SD&zone=TA';
				$plans = $this->model_catalog_api->sendCurl($url);
				$plans = json_decode($plans);
				//print_r($plans); // die;
				if(isset($plans->status) && $plans->status['0'] ==1 ){
					$data = array();
					$ctr = 0;
					foreach($plans->data as $plan){
							$ctr = $ctr+1;
							$json['plans'] .= '<tr><td>'.$ctr.'</td><td>'.$plan->package_name.'</td><td>'.$plan->package_description.'</td><td><div class="btn" onclick="fill('.$plan->package_price.');"><a class="btn" href="javascript:void(0);">Rs.'.$plan->package_price.'</a></div></td></tr>';
					}
				} else {
					$json['error'] = 1;
					if(isset($plans->status['1']) && trim($plans->status['1'])!='' ){
						$json['message'] = $plans->status['1'];
					} else {
						$json['message'] = 'Sorry! unable to get the plans';
					}
				}
			} else {
				$json['error'] = 1;
					$json['message'] = 'Please select your operator and circle';
			}
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($json));
	}

	public function confirm(){
		$json = array('error'=>0,'message'=>'','url'=>'');
		$post = $this->request->post;
		if ($this->customer->isLogged()) {
			if( isset($post['mn']) && isset($post['op']) && isset($post['rcAmt']) && isset($post['cr']) && strlen(trim($post['mn'])) >=10 && $post['rcAmt'] >= 10  ) {
				$wallet = $this->customer->getWallet();
				if($wallet >= $post['rcAmt']){
					/* $json['url'] = $this->url->link('recharge/confirm', '&mn='.$post['mn'].'&op='.$post['op'].'&rcAmt='.$post['rcAmt'].'&cr='.$post['cr'], true); */
					//$json['url'] = $this->url->link('recharge/confirm', '', true);
				} else{
					$json['error'] = 1;
					$json['message'] = 'Your Wallet balance is not sufficient.';
				}		
			}
		} else {
			$json['error'] = 1;
			$json['message'] = 'Please Login.';
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function doRc(){
		$json = array('error'=>'','resp'=>'');
		$data= array();
		$post = $this->request->post;
		$json['resp'][1]='Sorry, Unable to proceed';
		if ($this->customer->isLogged()) {
			$customer = $this->customer->getId();
			if( isset($post['mn']) && isset($post['op']) && isset($post['rcAmt']) && isset($post['cr']) && strlen(trim($post['mn'])) >=10 && $post['rcAmt'] >= 10  ) {
				$wallet = $this->customer->getWallet();
				if($wallet >= $post['rcAmt']){
					if(!isset($post['type'])){
						$post['type'] = 1;
					}
					$this->load->model('catalog/api');
					$transId = $this->model_catalog_api->addTrans($post); 
					if($transId!=''){
						$url = 'http://response.rcpanel.com/api_users/recharge?username=110290&pwd=3q2z3uu2&circlecode='.trim($post['cr']).'&operatorcode='.trim($post['op']).'&number='.trim($post['mn']).'&amount='.trim($post['rcAmt']).'&orderid='.$transId;
						//$respStr = $this->model_catalog_api->sendCurl($url);
						$respStr = rand (1111111111,9999999999)."#Success#OperatorId:188147";
						$this->model_catalog_api->addResp($transId, $respStr);
						$resp = explode('#', $respStr);
						$respData =  array();
						if($resp[1]== 'Success'){
							$respData['status'] = 1;
							//$this->model_catalog_api->debitAmount($customer, $post['rcAmt']);
						} else if($resp[1]== 'Failure') {
							$respData['status'] = 2;  //FAILURE
						} else {
							$respData['status'] = 0;
						}
						if(isset($resp[0])){
							$respData['id'] = $resp[0];
						} else{
							$respData['id'] = '';
						}
						$this->model_catalog_api->updateTrans($transId, $respData, $customer,$post);
						$json['resp'] = $resp;
						$json['transId'] = $transId;
						$this->response->redirect($this->url->link('recharge/status', '&id='.$transId, true)); die;
					} else {
						$json['error'] = 1;
						$json['message'] = 'Sorry, Please try again.';
					}
				} else{
					$json['error'] = 1;
					$json['message'] = 'Your Wallet balance is not sufficient.';
				}
				/* $this->response->addHeader('Content-Type: application/json');
				$this->response->setOutput(json_encode($json)); */
			} else {
				$json['error'] = 1;
				$json['message'] = 'Sorry! Please try again.';
			}
		} else {
			$json['error'] = 1;
			$json['message'] = 'Please Login.';
		}
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$data['subheader'] = $this->load->controller('common/header/subheader');
		$this->response->setOutput($this->load->view('recharge/success', $data));
	}
}