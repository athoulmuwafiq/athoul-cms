<?php
function jumlah_komentar($id_artikel){
	$CI =& get_instance();
	return $CI->db->get_where('comments',array('id_artikel'=>$id_artikel))->num_rows();
}
?>