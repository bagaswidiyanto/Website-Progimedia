<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends MY_Controller {
  public function index() {
  	$this->data['slider']=$this->db->get('tbl_slider')->result();
    $this->data['dashboard']=$this->db->get('tbl_info_dashboard')->result();
    $this->data['about_us']=$this->db->get('tbl_about_us')->result();
    $this->data['services']=$this->db->get('tbl_services')->result();
    $this->data['works']=$this->db->get('tbl_works')->result();
    $this->data['team']=$this->db->get('tbl_team')->result();
    $this->data['price']=$this->db->get('tbl_price')->result();
    $this->data['client']=$this->db->get('tbl_client')->result();
    $this->data['testimonials']=$this->db->get('tbl_testimonials')->result();
    print_r($this->data['dashboard']);

    //$this->data['maps']=$this->db->get('tbl_maps')->row();
  	$this->db->limit('3');
  	$this->db->order_by('id','desc');
  	$this->data['posts']=$this->db->get('tbl_posts')->result();
  	//$this->data['brands']=$this->db->get('tbl_brands')->result();
  	//$this->data['branch']=$this->db->get('log_dbranch')->result();
  	//$this->data['gallery']=$this->db->get('tbl_gallery')->result();
	// $this->data['cust']=$this->db->get('tbl_customer')->result();
  // print_r(array_slice($this->data['cust'],1,2));
// print_r($this->data['cust'][0]);
    $this->middle = 'content/home'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout(); 
  }


}