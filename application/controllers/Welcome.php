<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller

{

	public function index()

	{
		$this->data['website'] = $this->db->get('tbl_website')->row();
		$this->data['sosmed'] = $this->db->get('tbl_sosmed')->result();
		$this->data['client'] = $this->db->get('tbl_client')->result();
		$this->data['filter'] = $this->db->get('tbl_master_filter_portofolio')->result();
		$this->data['id_filter'] = $this->db->get('tbl_portofolio_filter')->row();

		$this->data['aboutus'] = $this->db->get('tbl_about_us')->row();
		$this->data['home'] = $this->db->get('tbl_home')->row();
		$this->data['testimoni'] = $this->db->get('tbl_testimonial')->result();

		// pricelist Silver
		$this->data['silver'] = $this->db->get_where('tbl_price', array('name_package' => 'Silver'))->row();
		// pricelist Gold
		$this->data['gold'] = $this->db->get_where('tbl_price', array('name_package' => 'Gold'))->row();
		// pricelist Gold
		$this->data['platinum'] = $this->db->get_where('tbl_price', array('name_package' => 'Platinum'))->row();
		// pricelist Gold
		$this->data['special'] = $this->db->get_where('tbl_price', array('name_package' => 'Special'))->row();

		$this->db->limit('3');
		$this->db->order_by('id', 'desc');
		$this->data['posts'] = $this->db->get('tbl_posts')->result();

		$this->middle = 'content/home'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
		$this->layout();
	}
}