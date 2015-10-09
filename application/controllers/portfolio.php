<?php

	class portfolio extends CI_Controller{

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
			$data['works'] = $this->commonmodel->works();

			$this->load->view('dashboard/portfolio',$data);
		}

		public function add()
		{
			$data['categories'] = $this->commonmodel->getall('categories');

			$this->load->view('dashboard/add_portfolio',$data);
		}

		public function add_validate()
		{
			if($this->input->post())
			{
				$config['upload_path'] = './img/';
				
				$config['allowed_types'] = 'png|jpg';
				$config['max_size']	= '1000';
				$config['overwrite']  = FALSE;

				$this->load->library('upload',$config);				
				
				if (!$this->upload->do_upload())
				{
					$values = array(
						'name'			=> $this->input->post('portfolio-name'),
						'category_id'	=> $this->input->post('category'),
						'cover'			=> 'no-image.jpg'
					);

					$this->commonmodel->insert('works',$values);

					redirect('dashboard/portfolio');
					
				}
				else
				{
					$upload_image = $this->upload->data();

					$values = array(
						'name'			=> $this->input->post('portfolio-name'),
						'category_id'	=> $this->input->post('category'),
						'cover'			=> $upload_image['file_name']
					);

					$this->commonmodel->insert('works',$values);

					$config['image_library'] = 'gd2';
					$config['source_image']	= './img/'.$upload_image['file_name'];
					$config['create_thumb'] = FALSE;
					$config['maintain_ratio'] = FALSE;
					$config['width']	= 360;
					$config['height']	= 270;

					$this->load->library('image_lib', $config); 

					$this->image_lib->resize();

					redirect('dashboard/portfolio');				
				}
			}	
			else
			{
				redirect('dashboard/portfolio');
			}		
		}

		public function edit()
		{
			$id =  end($this->uri->segments);
			
			$result = $this->commonmodel->getOne('works','id',$id);
		
			if($result)
			{
				//echo "meron";
			
				$data['works'] = $this->commonmodel->getOne('works','id',$id);
				$data['categories'] = $this->commonmodel->getall('categories');
				$data['id'] = $id;

				$this->load->view('dashboard/edit_portfolio',$data);
			}
			else
			{
				redirect('dashboard/portfolio');
			}
		}

		public function edit_validate()
		{
			if($this->input->post())
			{
				$this->load->helper('file');

				$config['upload_path'] = './img/';
				
				$config['allowed_types'] = 'png|jpg';
				$config['max_size']	= '1000';
				$config['overwrite']  = FALSE;

				$this->load->library('upload',$config);				
				
				if (!$this->upload->do_upload())
				{
					$values = array(
						'name'			=> $this->input->post('portfolio-name'),
						'category_id'	=> $this->input->post('category')
					);

					$this->commonmodel->update('works','id',$this->input->post('work-id'),$values);
					
					//checking goes here

					redirect('dashboard/portfolio');
					
				}
				else
				{
					if($this->input->post('work-cover') != "no-image.jpg")
					{
						unlink(FCPATH . '/img'.'/'.$this->input->post('work-cover'));	
					}
					
					$upload_image = $this->upload->data();

					$values = array(
						'name'			=> $this->input->post('portfolio-name'),
						'category_id'	=> $this->input->post('category'),
						'cover'			=> $upload_image['file_name']
					);

					$this->commonmodel->update('works','id',$this->input->post('work-id'),$values);

					$config['image_library'] = 'gd2';
					$config['source_image']	= './img/'.$upload_image['file_name'];
					$config['create_thumb'] = FALSE;
					$config['maintain_ratio'] = FALSE;
					$config['width']	= 360;
					$config['height']	= 270;

					$this->load->library('image_lib', $config); 

					$this->image_lib->resize();

					redirect('dashboard/portfolio');				
				}
			}
			else
			{
				redirect('dashboard/portfolio');
			}
		}

		public function delete()
		{
			$id = end($this->uri->segments);
			
			$result = $this->commonmodel->getOne('works','id',$id);

			if($result)
			{
				$this->load->helper('file');
				
				$this->commonmodel->delete('works','id',$id);

				if($result[0]->cover != "no-image.jpg")
				{
					unlink(FCPATH . '/img'.'/'.$result[0]->cover);	
				}				
				
				redirect('dashboard/portfolio');

			}
			else
			{
				redirect('dashboard/portfolio');	
			}
		}
	}