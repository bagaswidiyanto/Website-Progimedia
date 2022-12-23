<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getresi extends MY_Controller {

  public function index() {  
  
  	$this->data['awb']=$this->input->post('awb');

    $this->load->view('content/v_getresi.php');   


  }

}