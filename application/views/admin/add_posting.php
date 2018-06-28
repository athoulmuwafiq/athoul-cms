
<div class="col-md-8">
			<?php 
			echo form_open("admin/save_post",array('class' => 'form-signin'));
			echo form_input('judul','',array('class'=>'form-control mb-3','placeholder'=>'Judul'));
			echo form_textarea('artikel','',array('class'=>'form-control mb-3','placeholder'=>'Tulis...','id'=>'ckeditor'));
			echo"<select class='form-control mt-3' name='kategori'>";
			foreach ($label as $label) {
				echo "<option value='".$label->label."'>".$label->label."</option>";
			}
			echo"</select>";
			echo form_submit('','Publish',array('class'=>'btn btn-primary mt-3'));

			echo form_close(); ?>
</div>

<script type="text/javascript" src="<?= base_url('assets/js/ck/ckeditor.js') ?>"></script>
<script type="text/javascript">
	
	CKEDITOR.replace('ckeditor');
</script>

