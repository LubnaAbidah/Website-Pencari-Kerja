<div class="well well-lg">
	<div class="container">
		<h2>Daftar Kerja</h2>
		<span>Halaman Untuk melakukan pendaftaran kerja.</span>
	</div>
	<div class="alert alert-info">
		Silahkan isi data berikut sesuai dengan data diri untuk kami promosikan mencari kerja.
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			Form Data Pekerja
		</div>
		<div class="panel-body">
			<?php
			//tampilkan pesan setelah submit
			if(isset($status)) {
			?>
			<div class="alert alert-<?php echo $status; ?>">
				<?php echo $message; ?>
			</div>
		<?php } ?>

		<form method="post">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="nama">Nama Lengkap : </label>
						<input class="form-control" id="nama" required type="text" name="nama">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="email">Email : </label>
						<input class="form-control" id="email" required type="text" name="email">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="pekerjaan">Pekerjaan yang diinginkan : </label>
						<input class="form-control" id="pekerjaan" required type="text" name="pekerjaan" placeholder="Apabila lebih dari satu jenis pekerjaan pisahkan dengan tanda kome (,)">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="alamat">Alamat : </label>
						<textarea name="alamat" id="alamat" required class="form-control" rows="4"></textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="resume">Resume / tentang diri anda : </label>
						<textarea name="resume" id="resume" required class="form-control" rows="8"></textarea>
					</div>
				</div>
			</div>
			<button type="submit" name="submit" class="btn btn-success btn-lg">Submit</button>
			<button type="reset"  class="btn btn-danger btn-lg">Reset</button>
		</form>
		</div>
	</div>
</div>