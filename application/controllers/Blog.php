<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('text');
		$this->load->model('model_blog');
		$data['setting']=$this->model_blog->get_setting()->row_array();
		$data['label']=$this->model_blog->get_labels()->result();
		$this->load->view('assets/head',$data);
	}
	function index()
	{

		$this->load->library('pagination');
		
		$config['base_url'] = base_url('blog/index/');
		$config['total_rows'] = $this->model_blog->jumlah_artikel();
		$config['per_page'] = 5;
		$config['uri_segment'] = 3;
		$config['num_links'] = 3;
		$config['full_tag_open'] = '<div class="paging text-center"><nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item"><span class="page-link" style="color:#333">';
		$config['cur_tag_close'] = '</span></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		
		$this->pagination->initialize($config);
		
		$data['post']=$this->model_blog->get_article($config['per_page'],$this->uri->segment(3))->result();
		$data2['date']=$this->model_blog->get_archive()->result();
		$this->load->view('home',$data);
		$this->load->view('assets/foot',$data2);
		
	}
	function read()
	{
		$id_post=$this->uri->segment(3);
		$data['post1']=$this->model_blog->get_one_article($id_post)->row_array();
		$data['comments']=$this->model_blog->get_comments($id_post)->result();
		$data2['date']=$this->model_blog->get_archive()->result();
		$this->load->view('read',$data);
		$this->load->view('assets/foot',$data2);
	}
	function label()
	{
		$this->load->library('pagination');
		
		$label=$this->uri->segment(3);
		$label=str_replace('%20', ' ', $label);
		$config['base_url'] = base_url('blog/label/'.$this->uri->segment(3).'/');
		$config['total_rows'] = $this->model_blog->jumlah_artikel_filter('kategories',$label);
		$config['per_page'] = 5;
		$config['uri_segment'] = 4;
		$config['num_links'] = 3;
		$config['full_tag_open'] = '<div class="paging text-center"><nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item"><span class="page-link" style="color:#333">';
		$config['cur_tag_close'] = '</span></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		
		$this->pagination->initialize($config);

		$data['post']=$this->model_blog->get_article1($config['per_page'],$this->uri->segment(4),$label)->result();
		$data2['date']=$this->model_blog->get_archive()->result();
		$this->load->view('filter',$data);
		$this->load->view('assets/foot',$data2);
	}
	function archive(){
		$this->load->library('pagination');
		
		$archive=$this->uri->segment(3);
		$config['base_url'] = base_url('blog/archive/'.$this->uri->segment(3).'/');
		$config['total_rows'] = $this->model_blog->jumlah_artikel_filter('published',$archive);
		$config['per_page'] = 5;
		$config['uri_segment'] = 4;
		$config['num_links'] = 3;
		$config['full_tag_open'] = '<div class="paging text-center"><nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item"><span class="page-link" style="color:#333">';
		$config['cur_tag_close'] = '</span></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		
		$this->pagination->initialize($config);
		$date=$this->uri->segment(3);
		$data['post']=$this->model_blog->get_article_archive($config['per_page'],$this->uri->segment(4),$archive)->result();
		$data2['date']=$this->model_blog->get_archive()->result();
		$this->load->view('filter',$data);
		$this->load->view('assets/foot',$data2);

	}

	function comment_action(){
		$this->load->model_blog->save_comments();
	}

}
