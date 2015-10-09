<?php

	class home extends CI_Controller{

		public function index()
		{
			$data['images'] = $this->commonmodel->getall('image_table');
			$data['categories'] = $this->commonmodel->getall('categories');
			$data['works'] = $this->commonmodel->works();

			/*echo "<pre>";
			print_r($data['works']);
			echo "</pre>";
			die();
			*/
			$this->load->view('home',$data);
		}
	}