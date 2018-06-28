<div class="col-md-5">
<?php
	echo form_open('admin/save_setting');
	echo form_label('Title', 'title');
	echo form_input('title', $config['title'], array('class'=>'form-control mb-3'));
	echo form_label('Description', 'description');
	echo form_textarea('description',$config['description'],array('class'=>'form-control mb-3'));
	echo form_submit('', 'Simpan',array('class'=>'btn btn-primary'));
?>
</div>