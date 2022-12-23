<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Brand extends MY_Controller
{
	public function index()
	{

		$this->data['brand'] = $this->db->get('tbl_brand_identity')->result();

		$this->middle = 'content/v_brand.php';
		$this->layout();
	}
}
