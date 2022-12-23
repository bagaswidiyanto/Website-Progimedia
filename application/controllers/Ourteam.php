<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ourteam extends MY_Controller

{

  public function index()

  {

    $this->data['team'] = $this->db->get('tbl_team')->result();

    $this->middle = 'content/v_our_team';

    $this->layout();
  }
}