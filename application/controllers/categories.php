<?php

	class categories extends CI_Controller{

		public function __construct()
		{
			parent::__construct();
			// Your own constructor code
			if(($this->session->userdata('is_login') != 1092981726))
			{
				redirect('admin');
			}	
		}

		public function index()
		{
			$data['categories'] = $this->commonmodel->getAll('categories');

			$this->load->view('dashboard/category',$data);
		}

		public function add()
		{
			if($this->input->post())
			{
				$values = array(
					'name'	=> $this->input->post('category-name-text'),
					'tag'	=> $this->input->post('category-tag-text')
				);

				$this->commonmodel->insert('categories',$values);
			
				redirect('dashboard/category');				
			}
			else
			{
				redirect('dashboard/category');
			}

		}

		public function edit()
		{
			if($this->input->post())
			{
				//redirect('dashboard/category');

				$values = array(
					'name'	=> $this->input->post('category-name-text'),
					'tag'	=> $this->input->post('category-tag-text')
				);

				$this->commonmodel->update('categories','id',$this->input->post('category-id'),$values);
				
				redirect('dashboard/category');
			}
			else
			{
				redirect('dashboard/category');
			}
			
		}

		public function delete()
		{			
			$id = end($this->uri->segments);
		
			$result = $this->commonmodel->getOne('categories','id',$id);

			if($result)
			{
				$this->load->helper('file');

				$portfolios = $this->commonmodel->getOne('works','category_id',$id);
				
				foreach($portfolios as $row)
				{
					if($row->cover != "no-image.jpg")
					{
						unlink(FCPATH . '/img'.'/'.$row->cover);	
					}					
					$this->commonmodel->delete('works','id',$row->id);	
				}

				$this->commonmodel->delete('categories','id',$id);
			
				redirect('dashboard/category');
			}
			else
			{
				redirect('dashboard/category');
			}
		}
	}