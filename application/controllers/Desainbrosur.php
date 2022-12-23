<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Desainbrosur extends MY_Controller
{
    public function index()
    {

        $this->data['desain_brosur'] = $this->db->get('tbl_desain_brosur')->row();
        $this->data['price_brosur'] = $this->db->get('tbl_service_price_brosur')->result();
        $this->data['price_brosur_s'] = $this->db->get('tbl_service_price_brosur')->row();

        $this->middle = 'content/v_desain_brosur';
        $this->layout();
    }
}