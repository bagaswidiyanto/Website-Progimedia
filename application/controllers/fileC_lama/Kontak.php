<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kontak extends MY_Controller {
  public function index() {
 	//  $this->data['maps']=$this->db->get('tbl_maps')->row();
 	 $this->data['webs']=$this->db->get('tbl_website')->row();
    $this->middle = 'content/v_contact_us.php';
    $this->layout();  
  }
}