<?php

class Admin extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('model_admin');
		
	}
	function index(){
		$this->load->view('admin/login');
	}
	function login(){
		$this->load->library('form_validation');
		

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
        {
        	$this->load->view('admin/login');
        }else{
			$username=$this->input->post('username');
        	$password=$this->input->post('password');

        	$where=array(
        		'username'=>$username,
        		'password'=>$password
        		);
        $cek=$this->model_admin->cek_login("user",$where)->num_rows();
        if ($cek > 0) {
        	$datasession = array('username' => $username);
        	$this->session->set_userdata($datasession);
        	redirect(base_url('admin/home'));
        }else{
        	$data['error']="<p>Wrong Username Or Password</p>";
        	$this->load->view('admin/login',$data);
        }
        }
		
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}
	function home(){
		$this->load->helper('sessionl');
		$this->load->view('admin/head');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/foot');

	}
	function labels(){
		$this->load->helper('sessionl');
		$data['label']=$this->model_admin->get_labels()->result();
		$this->load->view('admin/head');
		$this->load->view('admin/labels',$data);
		$this->load->view('admin/foot');
	}
	function add_labels(){
		$this->load->helper('sessionl');
		$this->load->view('admin/head');
		$this->load->view('admin/add_labels');
		$this->load->view('admin/foot');
	}
	function save_labels(){
		$this->load->helper('sessionl');
		$this->model_admin->save_label();
	}
	function delete_labels(){
		$this->load->helper('sessionl');
		$this->model_admin->delete_label();
	}
	function post(){
		$this->load->helper('sessionl');
		$data['post']=$this->model_admin->get_post()->result();
		$this->load->view('admin/head');
		$this->load->view('admin/post',$data);
		$this->load->view('admin/foot');
	}
	function add_post(){
		$this->load->helper('sessionl');
		$data['label']=$this->model_admin->get_labels()->result();
		$this->load->view('admin/head');
		$this->load->view('admin/add_posting',$data);
		$this->load->view('admin/foot');
	}
	function save_post(){
		$this->load->helper('sessionl');
		$this->model_admin->save_post();
	}
	function update_post(){
		$this->load->helper('sessionl');
		$this->model_admin->update_post();
	}
	function edit_post(){
		$this->load->helper('sessionl');
		$data['label']=$this->model_admin->get_labels()->result();
		$data['post']=$this->model_admin->get_one_post($this->uri->segment(3))->row_array();
		$this->load->view('admin/head');
		$this->load->view('admin/edit_posting',$data);
		$this->load->view('admin/foot');
	}
	function delete_post(){
		$this->load->helper('sessionl');
		$this->model_admin->delete_post();
	}
	function setting(){
		$data['config']=$this->model_admin->config()->row_array();
		$this->load->helper('sessionl');
		$this->load->view('admin/head');
		$this->load->view('admin/setting',$data);
		$this->load->view('admin/foot');
	}
	function save_setting(){
		$this->model_admin->save_setting();
	}
	function comments(){
		$this->load->helper('sessionl');
		$data['comments']=$this->model_admin->show_comments()->result();
		$this->load->view('admin/head');
		$this->load->view('admin/comments',$data);
		$this->load->view('admin/foot');
	}
	function delete_comments(){
		$this->load->helper('sessionl');
		$this->model_admin->delete_comments();
	}
	function media(){
		$this->load->helper('sessionl');
		$data['media']=$this->model_admin->media()->result();
		$this->load->view('admin/head');
		$this->load->view('admin/media',$data);
		$this->load->view('admin/foot');
	}
	function add_media(){
		$this->load->helper('sessionl');
		$this->load->view('admin/head');
		$this->load->view('admin/add_media');
		$this->load->view('admin/foot');
	}
	function add_media_save(){
		$this->load->helper('sessionl');
		$this->model_admin->save_image();

	}
	function delete_media(){
		$this->load->helper('sessionl');
		$this->model_admin->delete_image();
	}

}