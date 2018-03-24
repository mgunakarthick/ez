<?php
class ControllerCommonLogin extends Controller {
	public function index() {
		if ($this->customer->isLogged()) {
			$this->response->redirect($this->url->link('common/home', '', true));
		}
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));
		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$this->response->setOutput($this->load->view('common/login', $data));
	}

	public function login(){
		$json = array('login'=>0,'error'=>'');
		if ($this->customer->isLogged()) {
			$this->response->redirect($this->url->link('common/home', '', true));
		}
		//print_r($this->request->post);
		if (isset($this->request->post['email']) && isset($this->request->post['password'])) {
			$this->load->model('account/customer');
			$customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);
			if ($customer_info && !$customer_info['status']) {
				$json['error'] = $this->language->get('error_approved');
			}
			if (!$this->error) {
				if (!$this->customer->login($this->request->post['email'], $this->request->post['password'])) {
					$json['error'] = '';
					$this->model_account_customer->addLoginAttempt($this->request->post['email']);
				} else {
					$json['login'] =1;
					$this->model_account_customer->deleteLoginAttempts($this->request->post['email']);
				}
			}
		}
		$this->response->setOutput(json_encode($json));
	}

	public function logout(){
		if ($this->customer->isLogged()) {
			$this->customer->logout();
			$this->response->redirect($this->url->link('common/home', '', true));
		} else {
			$this->response->redirect($this->url->link('common/home', '', true));
		}
	}
}