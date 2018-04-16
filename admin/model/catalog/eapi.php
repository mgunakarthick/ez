<?php
class ModelCatalogEapi extends Model {
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
}