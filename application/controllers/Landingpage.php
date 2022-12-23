<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Landingpage extends MY_Controller
{
    public function index()
    {
        $this->data['landing_page'] = $this->db->get('tbl_landing_page')->row();
        $this->data['konten'] = $this->db->get('tbl_landing_page_kontent')->row();

        $this->data['silver'] = $this->db->get_where('tbl_price_landing_page', array('id' => 1))->row();
        $this->data['gold'] = $this->db->get_where('tbl_price_landing_page', array('id' => 2))->row();
        $this->data['platinum'] = $this->db->get_where('tbl_price_landing_page', array('id' => 3))->row();
        $this->data['spesial'] = $this->db->get_where('tbl_price_landing_page', array('id' => 4))->row();

        $this->middle = 'content/v_landing_page';
        $this->layout();
    }
}
