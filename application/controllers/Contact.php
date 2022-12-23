<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Contact extends MY_Controller
{
	public function index()
	{


		$this->middle = 'content/v_contact.php';
		$this->layout();
	}
}