<?php
class ControllerRechargeReseller extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));
		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}
		$customer = $this->customer->isLogged();
		if ($customer) {
			$this->load->model('catalog/api');
			$customer_group_id = $this->customer->getGroupId();
			$getctype = $this->customer->getctype();
			$data['resellers'] = array();
			if($customer_group_id > 2 && $getctype ==1){
				$data['resellers'] = $this->model_catalog_api->getResellers($customer_group_id);
				//print_r($data['resellers']); die;
			}
		} else {
			$this->response->redirect($this->url->link('common/login', '', true));
		}
		$data['setc'] = $this->url->link('recharge/reseller/setcomission', '', true);
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$data['subheader'] = $this->load->controller('common/header/subheader');
		$this->response->setOutput($this->load->view('recharge/reseller', $data));
	}

	public function add() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));
		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}
		$customer = $this->customer->isLogged();
		$data['actionurl'] = $this->url->link('recharge/reseller/addnew', '', true);
		if ($customer) {
			if (isset($this->request->get['id'])) {
				$customer_group_id = $this->customer->getGroupId();
				if( $customer_group_id > 2 && $this->customer->getctype() ==1){
					$this->load->model('catalog/api');
					$id = $this->request->get['id'];
					$data['reseller'] = $this->model_catalog_api->getReseller($id);
				} else {
					$this->response->redirect($this->url->link('common/login', '', true));
				}
			} else {
				
			}
			
		} else {
			$this->response->redirect($this->url->link('common/login', '', true));
		}
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$data['subheader'] = $this->load->controller('common/header/subheader');
		$this->response->setOutput($this->load->view('recharge/add', $data));
	}

	public function addnew(){

		if(isset($this->request->post) && $this->customer->isLogged()){
			$post = $this->request->post;
			//print_r($post); die;
			$this->load->model('catalog/api');
			$this->session->data['duplicate'] = $this->model_catalog_api->checkReseller($post['email']);
			if($this->session->data['duplicate']){
				$data['resellers'] = $this->model_catalog_api->addReseller($post, $this->customer->getGroupId());
				$this->response->redirect($this->url->link('recharge/reseller', '', true));
			} else {
				$this->response->redirect($this->url->link('recharge/reseller', '', true));
			}				
		}
	}

	public function addMoney(){
		$json = array('success'=>0,'message'=>'');
		if(isset($this->request->post) && $this->customer->isLogged()){
			$post = $this->request->post;
			//print_r($post); die;
			$this->load->model('catalog/api');
			$wallet = $this->customer->getWallet();
			$customer = $this->customer->isLogged();
			$customer_group_id = $this->customer->getGroupId();
			$getctype = $this->customer->getctype();
			if($customer_group_id > 2 && $getctype ==1){
				if($wallet >= $post['amount'] && $post['id']!=''){
					$this->model_catalog_api->credidAmount($post, $customer);
					$json['success'] =  1;
					$json['message'] = 'Updated Successfully';
				} else{
					$json['message'] = 'Sorry Unable to process, Please check your balance!';
				}
			} else {
				$json['message'] = 'Permission Denied';
			}				
		} else {
			$json['message'] = 'Sorry, Unable to process. Please reload the page';
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	public function wreq(){
		if($this->customer->isLogged()){
			$this->load->model('catalog/api');
			$customer = $this->customer->isLogged();
			if(isset($this->request->post['wreq'])){
				$post = $this->request->post;
				$this->model_catalog_api->wreq($this->request->post['wreq'], $customer);
			}
			$data['actionurl'] = $this->url->link('recharge/reseller/wreq', '', true);
			$data['customer'] = $this->model_catalog_api->getCustomer($customer);
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');
			$data['subheader'] = $this->load->controller('common/header/subheader');
			$this->response->setOutput($this->load->view('recharge/wreq', $data));
		} else {
			$this->response->redirect($this->url->link('common/login', '', true));
		}
	}


	public function setcommission(){
		if($this->customer->isLogged()){
			$data['id'] = $this->request->get['id'];
			$this->load->model('catalog/api');
			$customer = $this->customer->isLogged();
			if(isset($this->request->post['op'])){
			//	print_r($this->request->post); die;
				$this->model_catalog_api->setCommission($this->request->post, $data['id']);
			}
			if (isset($this->request->get['id'])) {
				$data['operators'] = $this->model_catalog_api->getAllCommission($data['id'] );
				$data['max'] = $this->model_catalog_api->getAllCommission($customer);
				//print_r($data['max']); die;
				$data['customer'] = $this->model_catalog_api->getCustomer($data['id']);
				$data['actionurl'] = $this->url->link('recharge/reseller/setcommission', '&id='.$data['id'], true);
				$data['footer'] = $this->load->controller('common/footer');
				$data['header'] = $this->load->controller('common/header');
				$data['subheader'] = $this->load->controller('common/header/subheader');
				$this->response->setOutput($this->load->view('recharge/setcommission', $data));
			} else {
				$this->response->redirect($this->url->link('recharge/reseller', '', true));
			}	
		} else {
			$this->response->redirect($this->url->link('common/login', '', true));
		}

	}
}
