<?php echo anchor('admin/add_media','tambah media',array('class'=>'btn btn-primary')) ?>

<table class="table  table-striped mt-3">
	<tr>
		<th width="50px">No</th>
		<th width="120px">Media</th>
		<th width="300px">Filename</th>
		<th>Link</th>
		<th width="100px">Action</th>
	</tr>
	<?php $no=1; ?>
	<?php foreach($media as $media): ?>
		<tr>
			<td><?= $no++ ?></td>
			<td><img src="<?= base_url('images/'.$media->media) ?>" style="width: 80px;height:50px;"></td>
			<td><?= $media->media ?></td>
			<td><?php echo form_input('', base_url('images/'.$media->media),array('class'=>'form-control')); ?></td>
			<th><?php echo anchor('admin/delete_media/'.$media->id_media.'/'.$media->media, 'Delete', array('class'=>'btn btn-danger')); ?></th>
		</tr>
	<?php endforeach; ?>
</table>