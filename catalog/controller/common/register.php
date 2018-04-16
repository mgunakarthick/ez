<?php
class ControllerCommonRegister extends Controller {
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
		if ($this->customer->isLogged()) {
			$this->response->redirect($this->url->link('common/home', '', true));
		}
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$this->response->setOutput($this->load->view('common/register', $data));
	}

	public function add(){
		$json = array('register'=>0,'error'=>0);
		if ($this->customer->isLogged()) {
			$this->response->redirect($this->url->link('common/home', '', true));
		}
		if (isset($this->request->post['email']) && isset($this->request->post['password'])) {
			$this->load->model('account/customer');
			if ($this->model_account_customer->getTotalCustomersByEmail($this->request->post['email'])) {
				$json['error'] = 1;
			}
			if(!$json['error']){
				$customer_id = $this->model_account_customer->newCustomer($this->request->post);
				// Clear any previous login attempts for unregistered accounts.
				$this->model_account_customer->deleteLoginAttempts($this->request->post['email']);
				$this->customer->login($this->request->post['email'], $this->request->post['password']);
				unset($this->session->data['guest']);
				$json['register'] = 1;
			//	$this->response->redirect($this->url->link('common/home'));
			}
		} else {
			$json['messageg'] = 'Parameter missing';
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