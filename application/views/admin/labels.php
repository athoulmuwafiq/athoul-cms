<div class="col-md-4">
<?php echo anchor('admin/add_labels','tambah label',array('class'=>'btn btn-primary')) ?>
<table class="table table-striped mt-3">
	<tr>
		<th>No</th><th width="300px">Label</th><th width="100px">Aksi</th>
	</tr>
	<?php
	$a=1;
	foreach ($label as $label) {
		echo "<tr>
		<td>".$a++."</td>
		<td>".$label->label."</td>
		<td>".anchor('admin/delete_labels/'.$label->id_label,'Hapus',array('class'=>'btn btn-danger'))."</td>
		</tr>";
	}
	?>
</table>
</div>