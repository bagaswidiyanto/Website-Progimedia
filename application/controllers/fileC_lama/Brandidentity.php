<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class BrandIdentity extends MY_Controller {
  public function index() {
	  $this->data['brandIdentity']=$this->db->get('tbl_brand_identity')->result();
    $this->middle = 'content/v_brand_identity';
    $this->layout(); 
  }


}