<?php
class ControllerRechargeMobile extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}
		$data['post'] = $this->request->get;

		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$data['subheader'] = $this->load->controller('common/header/subheader');
		$this->response->setOutput($this->load->view('recharge/mobile', $data));
	}

	public function dth(){
		if ($this->customer->isLogged()) {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}

		$data['action'] = $this->url->link('recharge/mobile/proceeddth', '', true);
		$this->load->model('catalog/api');
		$data['dthOperators'] = $this->model_catalog_api->dthOperators();
	//	$data['circles'] = $this->model_catalog_api->getCirlces();
	//	print_r($data['dthOperators']); die;   
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$data['subheader'] = $this->load->controller('common/header/subheader');	
		$this->response->setOutput($this->load->view('recharge/dth', $data));
	} else {
		$this->response->redirect($this->url->link('common/login', '', true));
	}
}


	public function proceeddth(){
		if(isset($this->request->post)){
			$data['rc'] = $this->request->post;
			$this->document->setTitle($this->config->get('config_meta_title'));
			$this->document->setDescription($this->config->get('config_meta_description'));
			$this->document->setKeywords($this->config->get('config_meta_keyword'));

			if (isset($this->request->get['route'])) {
				$this->document->addLink($this->config->get('config_url'), 'canonical');
			}
			$this->load->model('catalog/api');
			$this->load->model('catalog/api');
			$data['network'] = $this->model_catalog_api->getOperator($data['rc']['op']);
			$data['circle'] = $this->model_catalog_api->getCircle($data['rc']['cr']);
			$data['action'] = $this->url->link('eapi/api/doRc', '', true);
		//	print_r($data['dthOperators']); die;   
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');
			$data['subheader'] = $this->load->controller('common/header/subheader');
			$this->response->setOutput($this->load->view('recharge/proceeddth', $data));
		} else {
			$this->response->redirect($this->url->link('recharge/mobile/dth', '', true));

		}
	}
}
