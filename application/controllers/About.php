<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class About extends MY_Controller
{
  public function index()
  {
    $this->data['aboutus'] = $this->db->get('tbl_about_us')->row();
    $this->middle = 'content/v_about';
    $this->layout();
  }
}
