<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MobileApp extends MY_Controller {
  public function index() {
    $this->middle = 'content/v_mobile_apps';
	  $this->data['mobiles']=$this->db->get('tbl_mobile_app_design')->result();
    $this->layout(); 
  }


}