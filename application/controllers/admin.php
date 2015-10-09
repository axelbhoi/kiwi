<?php

	class admin extends CI_Controller{

		public function index()
		{
			if(($this->session->userdata('is_login') == 1092981726))
			{
				redirect('dashboard');
			}
			else
			{
				$this->load->view('login');
			}
			
		}

		public function validate_user()
		{
			if($this->input->post())
			{


				$this->load->model('loginmodel');
				//validate user here
				$username = $this->input->post('username');

				$password = $this->input->post('password');

				$result = $this->loginmodel->validate('users','username','password',$username,$password);

				if($result)
				{
					$data['username'] = $this->input->post('username');

					$data['is_login'] = 1092981726; 
					
					$this->session->set_userdata($data);

					echo  "success";
				}

				else
				{
					echo "invalid";
				}			
			}
			else
			{
				redirect('admin');
			}
		}

		public function new_password()
		{
			if($this->input->post())
			{
				$values = array(
					'password'	=> $this->input->post('new-password')	
				);

				$this->commonmodel->update('users','username',$this->session->userdata('username'),$values);
			
				redirect('dashboard');
			}
			else
			{
				redirect('dashboard');
			}
		}
		
		public function new_account()
		{
			if($this->input->post())
			{
				//check if unique

				$result = $this->commonmodel->getOne('users','username',$this->input->post('username'));

				if($result)
				{
					echo false;
				}
				else
				{
					$values = array(
						'username'	=> $this->input->post('username'),
						'password'	=> $this->input->post('password')
					);

					$this->commonmodel->insert('users',$values);

					echo true;
				}

			}
			else
			{
				redirect('dashboard');
			}
		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect('admin');			
		}

	}