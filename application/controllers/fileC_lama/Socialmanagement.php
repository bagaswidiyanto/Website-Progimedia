<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class SocialManagement extends MY_Controller {
  public function index() {
	  $this->data['socialMediaManagement']=$this->db->get('tbl_social_media_management')->result();
    $this->middle = 'content/v_social_management';
    $this->layout(); 
  }


}