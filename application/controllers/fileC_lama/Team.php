<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Team extends MY_Controller {
  public function index() {
	  $this->data['team']=$this->db->order_by("urutan", "asc")->get('tbl_team')->result();
    $this->middle = 'content/v_team';
    $this->layout(); 
  }


}