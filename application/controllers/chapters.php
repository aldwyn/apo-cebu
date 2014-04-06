<?php

	class Chapters extends CI_Controller {
		
		function __construct() {
			parent:: __construct();
			$this->load->model('chapterlist_model');
		}

		function show($chapcode) {
			$data['chapter'] = $this->chapterlist_model->get($chapcode);
			$this->load->view('chapters/index', $data);
		}
	}

?>