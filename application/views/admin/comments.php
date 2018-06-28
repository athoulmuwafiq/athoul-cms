<div class="col-md-12">
<table class="table table-striped mt-3">
	<tr>
		<th>No</th><th>Nama</th><th>Isi Komentar</th><th>Pada artikel</th><th width="100px">Aksi</th>
	</tr>
	<?php
	$a=1;
	foreach ($comments as $comments) {
		echo "<tr>
		<td>".$a++."</td>
		<td>".$comments->name."</td>
		<td>".$comments->isi_komentar."</td>
		<td>".$comments->title."</td>
		<td>".anchor('admin/delete_comments/'.$comments->id_comments,'Hapus',array('class'=>'btn btn-danger'))."</td>
		</tr>";
	}
	?>
</table>
</div>