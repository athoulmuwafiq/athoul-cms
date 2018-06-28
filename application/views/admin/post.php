<?php echo anchor('admin/add_post','tambah post',array('class'=>'btn btn-primary')) ?>

<table class="table  table-striped mt-3">
	<tr>
		<th>No</th><th>Judul</th><th>Label</th><th>Diterbitkan</th><th width="220px">Aksi</th>
	</tr>
	<?php
	$a=1;
	foreach ($post as $post) {
		echo "<tr>
		<td>".$a++."</td>
		<td>".$post->title."</td>
		<td>".$post->kategories."</td>
		<td>".$post->published."</td>
		<td>
		".anchor('admin/edit_post/'.$post->id_post,'Edit',array('class'=>'btn btn-primary'))."
		".anchor(base_url().'blog/read/'.$post->id_post.'/'.$post->uri,'Lihat',array('class'=>'btn btn-success','target'=>'_blank'))."
		".anchor('admin/delete_post/'.$post->id_post,'Hapus',array('class'=>'btn btn-danger'))."
		</td>
		</tr>";
	}
	?>
</table>