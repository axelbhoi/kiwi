<?php

	class dashboard extends CI_Controller{

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
			$data['images'] = $this->commonmodel->getAll('image_table');

			$this->load->view('dashboard/home',$data);
		}

		public function image()
		{
			if($this->input->post())
			{	
				$this->load->helper('file');

				if($this->input->post('image-id') == 1)
				{
					$config['upload_path'] = './img/';
					
					$config['allowed_types'] = 'png|jpg';
					$config['max_size']	= '1000';
					$config['overwrite']  = FALSE;

					$this->load->library('upload',$config);				
					
					if (!$this->upload->do_upload())
					{
						redirect('dashboard');
					}	
					else
					{
						$upload_image = $this->upload->data();

						unlink(FCPATH . '/img'.'/'.$this->input->post('image-cover'));	

						$values = array(
							'name'			=> $upload_image['file_name']
						);

						$this->commonmodel->update('image_table','id',$this->input->post('image-id'),$values);

						redirect('dashboard');						
					}				
				}
				else if($this->input->post('image-id') == 2)
				{
					$config['upload_path'] = './img/';
					
					$config['allowed_types'] = 'png|jpg';
					$config['max_size']	= '1000';
					$config['overwrite']  = FALSE;

					$this->load->library('upload',$config);				
					
					if (!$this->upload->do_upload())
					{
						redirect('dashboard');
					}	
					else
					{
						$upload_image = $this->upload->data();

						unlink(FCPATH . '/img'.'/'.$this->input->post('image-cover'));	

						$values = array(
							'name'			=> $upload_image['file_name']
						);

						$this->commonmodel->update('image_table','id',$this->input->post('image-id'),$values);

						$config['image_library'] = 'gd2';
						$config['source_image']	= './img/'.$upload_image['file_name'];
						$config['create_thumb'] = FALSE;
						$config['maintain_ratio'] = FALSE;
						$config['width']	= 650;
						$config['height']	= 390;

						$this->load->library('image_lib', $config); 

						$this->image_lib->resize();

						redirect('dashboard');						
					}						
				}
				else
				{
					$config['upload_path'] = './img/';
					
					$config['allowed_types'] = 'png|jpg';
					$config['max_size']	= '1000';
					$config['overwrite']  = FALSE;

					$this->load->library('upload',$config);				
					
					if (!$this->upload->do_upload())
					{
						redirect('dashboard');
					}	
					else
					{
						$upload_image = $this->upload->data();

						unlink(FCPATH . '/img'.'/'.$this->input->post('image-cover'));	

						$values = array(
							'name'			=> $upload_image['file_name']
						);

						$this->commonmodel->update('image_table','id',$this->input->post('image-id'),$values);

						$config['image_library'] = 'gd2';
						$config['source_image']	= './img/'.$upload_image['file_name'];
						$config['create_thumb'] = FALSE;
						$config['maintain_ratio'] = FALSE;
						$config['width']	= 521;
						$config['height']	= 462;

						$this->load->library('image_lib', $config); 

						$this->image_lib->resize();

						redirect('dashboard');						
					}	
				}
			}
			else
			{
				redirect('dashboard');
			}
		}
	}