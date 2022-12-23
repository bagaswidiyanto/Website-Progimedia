<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Videoproduction extends MY_Controller
{
    public function index()
    {


        $this->data['video_pro'] = $this->db->get('tbl_desain_video')->row();
        $this->data['video_slider'] = $this->db->get('tbl_video_slider_page')->result();
        $this->data['video_price'] = $this->db->get('tbl_service_price_video')->result();

        $this->middle = 'content/v_video_production';
        $this->layout();
    }
}