<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Produkpackaging extends MY_Controller
{
    public function index()
    {

        $this->data['packaging'] = $this->db->get('tbl_produk_packaging')->row();
        $this->data['produk_text'] = $this->db->get('tbl_produk_packing')->row();
        $this->data['produk_slide'] = $this->db->get('tbl_produk_packing_slider')->result();

        $this->middle = 'content/v_produk_packaging';
        $this->layout();
    }
}