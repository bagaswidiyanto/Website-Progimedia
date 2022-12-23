<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Whatwedo extends MY_Controller {
  public function index() {
    $this->middle = 'content/v_what_we_do';
    $this->layout(); 
  }


}