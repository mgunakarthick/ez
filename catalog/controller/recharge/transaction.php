<?php
class ControllerRechargeTransaction extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));
		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}
		if ($this->customer->isLogged()) {
			$this->load->model('catalog/api');
			$customer = $this->customer->getId();
			$data['transactions'] = $this->model_catalog_api->getTrans($customer);
			$data['amountTotal']  = 0;
			$data['amountTotal']  = 0;
			$data['showCommission']  = 0;

			if($this->customer->getGroupId() > 1){
				$data['amountTotal'] = $this->model_catalog_api->getCommissionTotal($customer);
				$data['amountTotal'] = $this->model_catalog_api->getCommissionTotal($customer);
				$data['showCommission']  = 1;
			}
			//print_r($data['amountTotal']); die;
		} else {
			$this->response->redirect($this->url->link('common/login', '', true));
		}
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$data['subheader'] = $this->load->controller('common/header/subheader');
		$this->response->setOutput($this->load->view('recharge/transaction', $data));
	}
}
