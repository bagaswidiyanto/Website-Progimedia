<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class News extends MY_Controller
{
    public function index()
    {

        $param = @$_GET['search'];

        $this->load->library('pagination');
        $jml = $this->db->count_all('tbl_posts');
        $config['base_url'] = base_url() . 'news/index/';
        $config['uri_segment'] = 3;
        $config['total_rows'] = $jml;
        $config['per_page'] = 6;
        $config['full_tag_open'] = '<center><ul class="pagination ">';
        $config['full_tag_close'] = '</ul></center>';
        $config['cur_tag_open'] = '<li class="page-pagination active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-pagination">';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-pagination">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="page-pagination">';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-pagination">';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-pagination">';
        $config['last_tag_close'] = '</li>';
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->pagination->initialize($config);




        $this->db->order_by('created_date', 'desc');
        $this->db->limit($config['per_page']);
        $this->db->offset($page);
        $this->db->like('Title', $param);
        $news = $this->db->get('tbl_posts');


        $this->data['news'] = $news;
        $this->data['pagination'] = $this->pagination->create_links();
        $this->middle = 'content/v_news.php';
        $this->layout();
    }

    public function detail()
    {
        $slug = $this->uri->segment(3);
        $news = $this->db->get_where('tbl_posts', array('slug' => $slug));
        $this->data['news'] = $news->row();
        if ($news->num_rows() > 0) {
            $this->db->order_by('id', 'desc');
            $this->db->limit('4');
            $this->data['recent'] = $this->db->get('tbl_posts')->result();
            $this->middle = 'content/v_news_detail.php';
            $this->layout();
        } else {
            redirect(base_url() . 'news');
        }
    }

    public function tag()
    {

        $this->data['tag'] = $this->input->get('id');

        $tag = $this->input->get('id');

        $param = @$_GET['search'];

        $this->load->library('pagination');

        $this->db->select('tbl_posts.*');
        $this->db->from('tbl_posts');
        $this->db->join('tbl_post_detail f', 'f.headerID = tbl_posts.id', 'left');
        $this->db->where('f.tagID', $tag);

        $query =  $this->db->get();
        $jml = $query->num_rows();

        $config['base_url'] = base_url() . 'news/tag/' . $tag . '/index/';
        $config['uri_segment'] = 3;
        $config['total_rows'] = $jml;
        $config['per_page'] = 6;
        $config['full_tag_open'] = '<center><ul class="pagination ">';
        $config['full_tag_close'] = '</ul></center>';
        $config['cur_tag_open'] = '<li class="page-pagination active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-pagination">';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-pagination">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="page-pagination">';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-pagination">';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-pagination">';
        $config['last_tag_close'] = '</li>';
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->pagination->initialize($config);



        $this->db->select('tbl_posts.*');
        $this->db->from('tbl_posts');
        $this->db->join('tbl_post_detail f', 'f.headerID = tbl_posts.id', 'left');
        $this->db->where('f.tagID', $tag);
        $this->db->group_by('tbl_posts.id');
        $this->db->order_by('tbl_posts.created_date', 'desc');
        $this->db->limit($config['per_page']);
        $this->db->offset($page);
        $berita = $this->db->get();


        // $this->db->order_by('created_date', 'desc');
        // $this->db->limit($config['per_page']);
        // $this->db->offset($page);
        // $this->db->like('Title', $param);
        // $news = $this->db->get('tbl_posts');


        $this->data['news'] = $berita;
        $this->data['pagination'] = $this->pagination->create_links();
        $this->middle = 'content/v_news';
        $this->layout();
    }
}