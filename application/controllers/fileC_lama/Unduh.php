<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Unduh extends MY_Controller {
//   public function index() {
// 	  $this->data['team']=$this->db->order_by("urutan", "asc")->get('tbl_team')->result();
//     $this->middle = 'content/v_team';
//     $this->layout(); 
//   }

    // function __construct(){
    //     parent::__construct();
    //     $this->load->helper(array('url','unduh'));
    // }

    public function index(){		
        $this->load->view('home');
    }

    public function do_download(){	
        echo 'aa';			
        // force_download('https://admin.progimedia.com/upload/proposal/test.docx',NULL);
    }	


}