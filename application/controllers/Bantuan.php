<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Bantuan extends CI_Controller
{
    function index()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $telp = $this->input->post('telp');
        $message = $this->input->post('message');

        $this->db->query("INSERT INTO tbl_bantuan (name,email,telp,message) VALUES ('" . $name . "','" . $email . "','" . $telp . "','" . $message . "') ");

        $this->load->helper('url');
    }
}