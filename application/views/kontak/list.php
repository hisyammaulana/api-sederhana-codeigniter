<font color="orange">
	<?php echo $this->session->flashdata('hasil')?>
</font>
<table border="1">
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Nomor</th>
	</tr>
	<?php
	foreach ($datakontak as $kontak) {
		echo "<tr>
		<td>$kontak->id</td>
		<td>$kontak->nama</td>
		<td>$kontak->nomor</td>
		<td>".anchor('contact/edit/'.$kontak->id,'Edit')."
			".anchor('contact/delete/'.$kontak->id,'Delete')."</td>
	</tr>";
	}
	?>
</table>
<a href="<?php echo base_url('contact/create');?>">+ Tambah Data</a>