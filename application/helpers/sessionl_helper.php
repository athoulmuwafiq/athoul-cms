<?php
$CI =& get_instance();
if (!$CI->session->userdata('username')) {
			redirect('admin/login');
		}
		return false;
?>