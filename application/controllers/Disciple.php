<?php
class Disciple extends CI_Controller {
	function __construct() {
		parent::__construct();
	}

	public function index( ) {
		$semester = 1;
		$this->load->database();
		$this->load->model('disciple_model');
		$data_header['semester'] = $semester;
		$data = $this->disciple_model->get_words( $semester );
		$this->load->view('header', $data_header);
		$this->load->view('main', array('words'=>$data));
		$this->load->view('footer');
	}

	public function content( $semester ) {
		$this->load->database();
		$this->load->model('disciple_model');
		$data_header['semester'] = $semester;
		$data = $this->disciple_model->get_words( $semester );
		$this->load->view('header', $data_header);
		$this->load->view('main', array('words'=>$data));
		$this->load->view('footer');	
	}
	public function detail( $semester, $idx ) {
		$this->load->database();
		$this->load->model('disciple_model');
		$data_header['semester'] = $semester;
		$data = $this->disciple_model->get_detail( $semester, $idx );
		$this->load->view('header', $data_header);
		$this->load->view('detail', $data);
		$this->load->view('footer');
	}
}