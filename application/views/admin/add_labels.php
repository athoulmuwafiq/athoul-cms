<div class="col-md-6">
		<?php echo form_open("admin/save_labels",array('class' => 'form-signin')); ?>
        <?php echo form_input('label','',array('class'=>'form-control mb-3','placeholder'=>'Nama Label')); ?>
        <?php echo form_submit('','Simpan',array('class'=>'btn btn-primary')); ?>
        <?php echo form_close(); ?>
</div>