<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Desaincompany extends MY_Controller
{
    public function index()
    {
        $this->data['compro'] = $this->db->get('tbl_desain_compro')->row();
        $this->data['service_compro'] = $this->db->get('tbl_service_price_compro')->row();
        $this->data['slider_compro'] = $this->db->get('tbl_slider_compro')->result();

        $this->middle = 'content/v_desain_company';
        $this->layout();
    }
}