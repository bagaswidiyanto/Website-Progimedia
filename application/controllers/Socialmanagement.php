<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Socialmanagement extends MY_Controller
{
    public function index()
    {
        $this->data['manfaat_yellow'] = $this->db->get_where('tbl_manfaat', array('color' => 'yellow'))->row();
        $this->data['manfaat_green'] = $this->db->get_where('tbl_manfaat', array('color' => 'green'))->row();
        $this->data['manfaat_aqua'] = $this->db->get_where('tbl_manfaat', array('color' => 'aqua'))->row();
        $this->data['manfaat_blue'] = $this->db->get_where('tbl_manfaat', array('color' => 'blue'))->row();
        $this->data['food'] = $this->db->get('tbl_social_food_slide')->result();
        $this->data['automotive'] = $this->db->get('tbl_social_automotive_slide')->result();
        $this->data['beauty'] = $this->db->get('tbl_social_beauty_slide')->result();


        // ----------- pricelist Instagram -----------

        // pricelist Silver
        $this->data['igsilver'] = $this->db->get_where('tbl_social_instagram', array('name' => 'Silver'))->row();

        // pricelist Gold
        $this->data['iggold'] = $this->db->get_where('tbl_social_instagram', array('name' => 'Gold'))->row();

        // pricelist Gold
        $this->data['igplatinum'] = $this->db->get_where('tbl_social_instagram', array('name' => 'Platinum'))->row();

        // pricelist Gold
        $this->data['igspecial'] = $this->db->get_where('tbl_social_instagram', array('name' => 'Special'))->row();

        // ----------- pricelist Facebook -----------

        // pricelist Silver
        $this->data['fbsilver'] = $this->db->get_where('tbl_social_facebook', array('name' => 'Silver'))->row();

        // pricelist Gold
        $this->data['fbgold'] = $this->db->get_where('tbl_social_facebook', array('name' => 'Gold'))->row();

        // pricelist Gold
        $this->data['fbplatinum'] = $this->db->get_where('tbl_social_facebook', array('name' => 'Platinum'))->row();

        // pricelist Gold
        $this->data['fbspecial'] = $this->db->get_where('tbl_social_facebook', array('name' => 'Special'))->row();


        // ----------- pricelist Tiktok -----------

        // pricelist Silver
        $this->data['tksilver'] = $this->db->get_where('tbl_social_tiktok', array('name' => 'Silver'))->row();

        // pricelist Gold
        $this->data['tkgold'] = $this->db->get_where('tbl_social_tiktok', array('name' => 'Gold'))->row();

        // pricelist Gold
        $this->data['tkplatinum'] = $this->db->get_where('tbl_social_tiktok', array('name' => 'Platinum'))->row();

        // pricelist Gold
        $this->data['tkspecial'] = $this->db->get_where('tbl_social_tiktok', array('name' => 'Special'))->row();



        $this->middle = 'content/v_social_management';
        $this->layout();
    }
}