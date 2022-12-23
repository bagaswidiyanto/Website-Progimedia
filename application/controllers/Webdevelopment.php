<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Webdevelopment extends MY_Controller
{
    public function index()
    {
        $this->data['services_web'] = $this->db->get('tbl_services_web')->row();
        $this->data['peranweb'] = $this->db->get('tbl_peran_website')->row();
        $this->data['portofolio'] = $this->db->get('tbl_portofolio')->result();
        $this->data['price_web'] = $this->db->get('tbl_service_price_web')->result();
        $this->middle = 'content/v_webdevelopment';
        $this->layout();
    }
}