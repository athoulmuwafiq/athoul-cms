<?php

class Model_blog extends CI_Model
{
	function get_labels(){
		$this->db->order_by('label', 'ASC');
		return $this->db->get('labels');
	}
	function get_article($number,$offset){
		$this->db->order_by('id_post', 'DESC');
		return $this->db->get('post',$number,$offset);
	}
	function jumlah_artikel(){
		return $this->db->get('post')->num_rows();
	}
	function jumlah_artikel_filter($where,$value){
		return $this->db->get_where('post',array($where=>$value))->num_rows();
	}
	function get_article1($number,$offset,$label){
		$this->db->order_by('id_post', 'DESC');
		$this->db->where('kategories',$label);
		return $this->db->get('post',$number,$offset);
	}
	function get_comments($id_artikel){
		$this->db->order_by('id_artikel', 'DESC');
		$this->db->where('id_artikel',$id_artikel);
		return $this->db->get('comments');
	}
	function get_article_archive($number,$offset,$date){
		$this->db->order_by('id_post', 'DESC');
		$this->db->where('published',$date);
		return $this->db->get('post',$number,$offset);
	}
	function get_setting(){
		return $this->db->get_where('config',array('id'=>'1'));
	}
	function get_one_article($id){
		return $this->db->get_where('post', array('id_post' => $id ));
	}
	function get_archive(){
		//$this->db->order_by('id_post', 'DESC');
		$this->db->distinct('published');
		$this->db->select('published');
		return $this->db->get('post');
	}
	function save_comments(){
		$komentar = array(
			'id_artikel' => $this->input->post('id_artikel'),
			'name' => $this->input->post('name'),
			'website' => $this->input->post('website'),
			'isi_komentar' => $this->input->post('isi_komen'));
		$this->db->insert('comments',$komentar);
		redirect('blog/read/'.$this->input->post('uri_redirect').'#comments-section');
	}

}