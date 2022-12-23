<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Domain extends MY_Controller
{
	public function index()
	{


		$this->middle = 'content/v_domain.php';
		$this->layout();
	}
}