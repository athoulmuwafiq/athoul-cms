<div class="col-md-8">
			<?php 
			echo form_open("admin/update_post",array('class' => 'form-signin'));
			echo form_hidden('id_post', $post['id_post']);
			echo form_input('judul',$post['title'],array('class'=>'form-control mb-3','placeholder'=>'Judul'));
			echo form_textarea('artikel',$post['article'],array('class'=>'form-control mb-3','placeholder'=>'Tulis...','id'=>'ckeditor'));
			echo"<select class='form-control mt-3' name='kategori'>";
			foreach ($label as $label):
				?>
				<option value='<?= $label->label ?>' <?php if($label->label == $post['kategories']){echo 'selected';} ?>><?= $label->label ?></option>
				<?php
			endforeach;
			echo"</select>";
			echo form_submit('','Publish',array('class'=>'btn btn-primary mt-3'));
			echo anchor('admin/post', 'Back',array('class'=>'btn btn-primary mt-3'));
			echo form_close(); ?>
</div>

<script type="text/javascript" src="<?= base_url('assets/js/ck/ckeditor.js') ?>"></script>
<script type="text/javascript">
	
	CKEDITOR.replace('ckeditor');
</script>
