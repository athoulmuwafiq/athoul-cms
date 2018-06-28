<div class="col-md-8">
<?php
	echo form_open_multipart('admin/add_media_save');
	echo form_label('Only image files', 'gambar');
	echo form_upload('gambar','',array('class'=>'form-control mb-3'));
	echo form_submit('', 'Upload',array('class'=>'btn btn-primary mb-3'));
	echo form_close();
?>
<style type="text/css">
	.alert-warning p{
		margin:0;
	}
</style>

<?php 
if (isset($error)) {
	echo '<div class="alert alert-warning">'.$error.'</div>';
}

 ?>
 
</div>