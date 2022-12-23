<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Fotograpi extends MY_Controller
{
    public function index()
    {
        $this->data['fotograpi'] = $this->db->get('tbl_fotograpi')->row();
        $this->data['slider_foto'] = $this->db->get('tbl_fotograpi_slider_page')->result();
        $this->middle = 'content/v_fotograpi';
        $this->layout();
    }
}