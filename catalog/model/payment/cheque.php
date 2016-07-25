<?php
class ModelPaymentCheque extends Model {
	public function getMethod($address, $total) {
		$this->load->language('payment/cheque');
		
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('cheque_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");

		if ($this->config->get('cheque_total') > 0 && $this->config->get('cheque_total') > $total) {
			$status = false;
		} elseif (!$this->config->get('cheque_geo_zone_id')) {
			$status = true;
		} elseif ($query->num_rows) {
			$status = true;
		} else {
			$status = false;
		}

		$method_data = array();
	
		$this->load->model('account/customer');
		$yesno=array();
		$yesno = $this->model_account_customer->getCustomerCheckPayment($this->customer->getId());
	//	echo $this->customer->getId();
		//echo $yesno['paybycheck'];
	//	$query = $this->db->query("SELECT filter_id FROM " . DB_PREFIX . "category_filter WHERE category_id = '" . (int)$category_id . "'");
		
		if(!$yesno['paybycheck'])
		{
			$status=false;
			
		}
		if ($status) {
			$method_data = array(
				'code'       => 'cheque',
				'title'      => $this->language->get('text_title'),
				'terms'      => '',
				'sort_order' => $this->config->get('cheque_sort_order')
			);
		}

		return $method_data;
	}
}