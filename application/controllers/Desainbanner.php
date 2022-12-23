<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Desainbanner extends MY_Controller
{
    public function index()
    {

        $this->data['banner'] = $this->db->get('tbl_desain_banner')->row();


        $this->data['xbanner'] = $this->db->get_where('tbl_price_banner', array('id' => 1))->row();
        $this->data['custom'] = $this->db->get_where('tbl_price_banner', array('id' => 2))->row();
        $this->data['baliho'] = $this->db->get_where('tbl_price_banner', array('id' => 3))->row();

        $this->middle = 'content/v_desain_banner';
        $this->layout();
    }
}