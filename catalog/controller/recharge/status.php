<?php
class ControllerRechargeStatus extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));
		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}
		if ($this->customer->isLogged()) {
			if(isset($this->request->get['id'])){
				$this->load->model('catalog/api');
				$customer = $this->customer->getId();
				$data['trans'] = $this->model_catalog_api->getTransById($this->request->get['id']);

				//print_r($data['trans']); die;
			} else {
				$this->response->redirect($this->url->link('recharge/transaction', '', true));	
			}
		} else {
			$this->response->redirect($this->url->link('common/login', '', true));
		}
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$data['subheader'] = $this->load->controller('common/header/subheader');
		$this->response->setOutput($this->load->view('recharge/status', $data));
	}
}
