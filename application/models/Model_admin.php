<?php

class Model_admin extends CI_Model
{
	
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
	function get_labels(){
		$this->db->order_by('id_label', 'DESC');
		return $this->db->get('labels');
	}
	function get_post(){
		$this->db->order_by('id_post', 'DESC');
		return $this->db->get('post');
	}
	function get_one_post($id_post){
		return $this->db->get_where('post',array('id_post' => $id_post));
	}
	function save_label(){
		$label=array('label' => $this->input->post('label'));
		$this->db->insert('labels',$label);
		redirect(base_url('admin/labels'));
	}
	function delete_label(){
		$id_label=$this->uri->segment(3);
		$this->db->delete('labels',array('id_label'=>$id_label));
		redirect(base_url('admin/labels'));
	}

	function save_post(){
		$artikel = array(
			'title' => $this->input->post('judul'),
			'uri' => str_replace(' ', '-', $this->input->post('judul')),
			'article' => $this->input->post('artikel'),
			'kategories' => $this->input->post('kategori'),
			'published' => date('d-m-Y'),
			);
		$this->db->insert('post',$artikel);
		redirect(base_url('admin/post'));
	}
	function update_post(){
		$artikel = array( 
			'title' => $this->input->post('judul'),
			'uri' => str_replace(' ', '-', $this->input->post('judul')),
			'article' => $this->input->post('artikel'),
			'kategories' => $this->input->post('kategori'),
			'published' => date('d-m-Y'),
			);
		$this->db->where('id_post', $this->input->post('id_post'));
		$this->db->update('post', $artikel);
		redirect(base_url('admin/post'));
	}
	function delete_post(){
		$id_post=$this->uri->segment(3);
		$this->db->delete('post',array('id_post' => $id_post ));
		redirect(base_url('admin/post'));
	}
	function show_comments(){
		$this->db->order_by('id_comments', 'DESC');
		$this->db->select('comments.id_comments,comments.name,comments.isi_komentar,post.title');
		$this->db->from('comments');
		$this->db->join('post','post.id_post = comments.id_artikel');
		return $this->db->get();
	}
	function save_image(){
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size']  = '1000';
		$config['max_width']  = '2400';
		$config['max_height']  = '2400';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/head');
			$this->load->view('admin/add_media',$error);
			$this->load->view('admin/foot');
		}
		else{
			$this->db->insert('media',array('media'=>$this->upload->data('file_name')));
			redirect('admin/media');
		}
	}
	function media(){
		$this->db->order_by('id_media', 'DESC');
		return $this->db->get('media');
	}
	function delete_image(){
		unlink('images/'.$this->uri->segment(4));
		$this->db->delete('media',array('id_media'=>$this->uri->segment(3)));
		redirect('admin/media');
	}
	function delete_comments(){
		$this->db->delete('comments',array('id_comments'=>$this->uri->segment(3)));
		redirect('admin/comments');
	}
	function config(){
		return $this->db->get_where('config',array('id'=>'1'));
	}
	function save_setting(){
		$this->db->where('id','1');
		$this->db->update('config',array('title'=>$this->input->post('title'),'description'=>$this->input->post('description')));
		redirect('admin/setting');
	}
}