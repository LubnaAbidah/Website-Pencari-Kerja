<div class="jumbotron">
	<div class="container">
		<h1>Selamat datang di website pencari kerja</h1>
	  	<p>Kami siap membantu anda dalam mencari pekerjaan dengan mudah. Dengan mendaftarkan diri anda , maka akan kami promosikan untuk mendapatkan pekerjaan sesuai yang anda inginkan</p>
	  	<p><a class="btn btn-primary btn-lg" href="<?php echo site_url("daftar"); ?>" role="button">Daftar Kerja</a></p>
	  	<p><a class="btn btn-primary btn-lg" href="<?php echo site_url("pendaftarkerja"); ?>" role="button">Lihat Pendaftar Kerja</a></p>
	</div>
</div>

<div class="container">
	<h3>Random Pendaftar Kerja</h3>
	<hr>
	<div class="row">
			<!-- perubahan kodenya -->
		<?php
		
		foreach($pendaftar as $pencari) {
			?>
		<div class="col-md-6">
			<table class="well table table-bordered">
				<tr>
					<td colspan="4" width="1"><img class="img-circle" src="<?php echo base_url("/bootstrap/img/person-icon.png");?>" alt="Generic placeholder image" width="140" height="140">
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td width="1">:</td>
					<td><?php echo $pencari->nama; ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td width="1">:</td>
					<td><?php echo $pencari->email; ?></td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td width="1">:</td>
					<td><?php echo $pencari->pekerjaan; ?></td>
				</tr>
				<tr>
					<td colspan="3">
						<a href="<?php echo site_url("pendaftarkerja/detail/". $pencari->id); ?>" class="btn btn-danger btn-sm">Detail Pekerjaan</a>
					</td>
				</tr>
			</table>
		</div>
			<?php
				}
			?>
	</div>
	<a class="btn btn-primary" href="<?php echo site_url("pendaftarkerja"); ?>">Tampilkan semua pendaftar kerja</a>
</div>