<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Desainkatalog extends MY_Controller
{
    public function index()
    {
        $this->data['desain_katalog'] = $this->db->get('tbl_desain_katalog')->row();
        $this->data['katalog'] = $this->db->get('tbl_katalog_produk')->row();
        $this->data['katalog_slider'] = $this->db->get('tbl_katalog_slider_page')->result();

        $this->data['basic'] = $this->db->get_where('tbl_price_katalog_produk', array('nama' => 'Basic'))->row();

        // pricelist Gold
        $this->data['premium'] = $this->db->get_where('tbl_price_katalog_produk', array('nama' => 'Premium'))->row();


        $this->middle = 'content/v_desain_katalog';
        $this->layout();
    }
}