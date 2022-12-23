<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Library extends MY_Controller
{
    public function index()
    {
        $this->data['filter'] = $this->db->get('tbl_master_filter_library')->result();


        $this->middle = 'content/v_library';
        $this->layout();
    }
}