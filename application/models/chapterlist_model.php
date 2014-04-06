<?php

	class Chapterlist_Model extends CI_Model {

		public function __construct() {
			parent:: __construct();
			$this->load->database();
		}

		public function getCebuChaptersList() {
			$chapterList = $this->db->query(
					"SELECT cebu_chapters.chapter_code,
					cebu_chapters.initials,
					collegiate_chapters.designation,
					cebu_chapters.longitude,
					cebu_chapters.latitude
					FROM cebu_chapters
					INNER JOIN collegiate_chapters
					ON cebu_chapters.chapter_code = collegiate_chapters.chapter_code"
				);
			$chapterList = $chapterList->result_array();
			return $chapterList;
		}

		public function get($chapcode) {
			$chapter_details = $this->db->query(
					"SELECT cebu_chapters.chapter_code,
					cebu_chapters.initials,
					collegiate_chapters.designation,
					collegiate_chapters.admin_region,
					collegiate_chapters.school,
					cebu_chapters.complete_address,
					cebu_chapters.longitude,
					cebu_chapters.latitude,
					collegiate_chapters.frat_recog_date,
					collegiate_chapters.soro_recog_date,
					cebu_chapters.mother_chapter,
					cebu_chapters.history
					FROM cebu_chapters
					INNER JOIN collegiate_chapters
					ON cebu_chapters.chapter_code = collegiate_chapters.chapter_code
					AND cebu_chapters.chapter_code = '$chapcode'"
				);
			$chapter_details = $chapter_details->row_array();

			$tmp = $chapter_details['mother_chapter'];
			$tmp = $this->db->query(
				"SELECT chapter_code, designation FROM collegiate_chapters 
				WHERE chapter_code = '$tmp'");
			$tmp = $tmp->row_array();
			$chapter_details['mother_chapcode'] = $tmp['chapter_code'];
			$chapter_details['mother_chapter'] = $tmp['designation'];
			$chapter_details['frat_recog_date'] = mdate('%M %d, %Y', strtotime($chapter_details['frat_recog_date']));
			$chapter_details['soro_recog_date'] = mdate('%M %d, %Y', strtotime($chapter_details['soro_recog_date']));

			return $chapter_details;
		}

	}

?>