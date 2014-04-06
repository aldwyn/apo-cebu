<?php

	class Home extends CI_Controller {

		public function __construct() {
			parent:: __construct();
		}

		public function index() {
			$this->load->model('chapterlist_model');
			$data['chapters'] = $this->chapterlist_model->getCebuChaptersList();
			$this->load->view('index', $data);
		}

	}
?>