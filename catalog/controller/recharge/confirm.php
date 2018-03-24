<?php
class ControllerRechargeConfirm extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}

		$post = $this->request->get;
		//print_r($post); die;
		$json = array('error'=>'','message'=>'','url'=>'');
		if ($this->customer->isLogged()) {
			if( isset($post['mn']) && isset($post['op']) && isset($post['rcAmt']) && isset($post['cr']) && strlen(trim($post['mn'])) >=10 && $post['rcAmt'] >= 10  ) {
				$wallet = $this->customer->getWallet();
				if($wallet >= $post['rcAmt']){
					$data['rc'] = $post;
					$this->load->model('catalog/api');
					$data['network'] = $this->model_catalog_api->getOperator($post['op']); 
					$data['action'] = $this->url->link('eapi/api/doRc', '', true);
					$json['url'] = $this->url->link('recharge/confirm', '&mn='.$post['mn'].'&op='.$post['op'].'&rcAmt='.$post['rcAmt'].'&cr='.$post['cr'], true);
				} else {
					$json['error'] = 1;
					$json['message'] = 'Your Wallet balance is not sufficient.';
					$this->response->redirect($this->url->link('common/home', '', true));
				}
			} else {
				$this->response->redirect($this->url->link('common/login', '', true));
			}
		} else {
			$json['error'] = 1;
			$json['message'] = 'Please Login.';
		}
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$data['subheader'] = $this->load->controller('common/header/subheader');
		$this->response->setOutput($this->load->view('recharge/confirm', $data));
	}
}
