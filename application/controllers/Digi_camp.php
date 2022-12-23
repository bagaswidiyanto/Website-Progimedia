<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Digi_camp extends MY_Controller
{
    public function index()
    {

        $this->data['undangan'] = $this->db->get('tbl_undangan')->row();

        $this->data['silver'] = $this->db->get_where('tbl_price_undangan', array('nama' => 'Silver'))->row();
        $this->data['gold'] = $this->db->get_where('tbl_price_undangan', array('nama' => 'Gold'))->row();
        $this->data['special'] = $this->db->get_where('tbl_price_undangan', array('nama' => 'Special'))->row();

        $this->middle = 'content/v_digital_camp_soon';
        $this->layout();
    }
}