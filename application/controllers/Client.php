<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Client extends MY_Controller
{
	public function index()
	{
		$this->data['client'] = $this->db->get('tbl_client')->result();


		$this->middle = 'content/v_client.php';
		$this->layout();
	}
}