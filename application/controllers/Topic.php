<?php

class Topic extends CI_Controller {

	public function index()
	{
		echo '토픽페이지';
	}

	public function get( $idx ) {
		echo "토픽".$idx;
	}
}