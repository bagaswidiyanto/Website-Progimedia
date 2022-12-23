<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Campaign extends MY_Controller
{
	public function index()
	{

		$this->data['campaign'] = $this->db->get('tbl_campaign')->row();
		$this->data['our_services'] = $this->db->get('tbl_our_services')->result();
		$this->data['bnefits'] = $this->db->get('tbl_bnefits')->result();

		$this->middle = 'content/v_campaign.php';
		$this->layout();
	}
}