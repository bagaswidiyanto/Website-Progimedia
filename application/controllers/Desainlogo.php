<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Desainlogo extends MY_Controller
{
    public function index()
    {

        $this->data['logo'] = $this->db->get('tbl_desain_logo')->row();

        $this->data['silver'] = $this->db->get_where('tbl_price_logo', array('id' => 1))->row();
        $this->data['gold'] = $this->db->get_where('tbl_price_logo', array('id' => 2))->row();
        $this->data['platinum'] = $this->db->get_where('tbl_price_logo', array('id' => 3))->row();
        $this->data['spesial'] = $this->db->get_where('tbl_price_logo', array('id' => 4))->row();

        $this->middle = 'content/v_desain_logo';
        $this->layout();
    }
}