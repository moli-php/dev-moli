<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	protected $data = array();

	public function __construct() {
		parent::__construct();
		$this->load->library(array('uri'));
		$this->load->helper(array('url'));
		$this->data['base_url'] = base_url();
		$title = $this->uri->segment(2) ? ucfirst($this->uri->segment(2)) : 'Home';
		$this->data['title'] = 'Moli Dev Site | ' . $title;
		$this->data['page'] = strtolower($this->uri->segment(2));

	}

	public function index()
	{
		$this->data['content'] = 'main';
		$this->load->view('base',$this->data);
	}
	
	public function about() {
		$this->data['content'] = __FUNCTION__;
		$this->load->view('base',$this->data);
	}
	
	public function samples() {
		$this->data['content'] = __FUNCTION__;
		$this->load->view('base',$this->data);
	}
}
