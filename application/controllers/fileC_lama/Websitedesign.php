<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class WebsiteDesign extends MY_Controller {
  public function index() {
	  $this->data['websiteDesign']=$this->db->get('tbl_website_design')->result();
    $this->middle = 'content/v_website_design';
    $this->layout(); 
  }


}