<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Desainidcard extends MY_Controller
{
    public function index()
    {

        $this->data['idcard'] = $this->db->get('tbl_desain_idcard')->row();
        $this->data['idcard_slider'] = $this->db->get('tbl_idcard_slider_page')->result();
        $this->data['basic'] = $this->db->get_where('tbl_price_idcard', array('nama' => 'Basic'))->row();
        $this->data['premium'] = $this->db->get_where('tbl_price_idcard', array('nama' => 'Premium'))->row();


        $this->middle = 'content/v_desain_idcard';
        $this->layout();
    }
}