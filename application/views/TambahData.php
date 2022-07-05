<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-light border-bottom shadow-sm">
	<h5 class="my-0 mr-md-auto font-weight-normal">Toko Buku Pustaka</h5>
	<nav class="my-2 my-md-0 mr-md-3">
    <a class="btn btn-outline-dark" href="<?=base_url('')?>">Home</a>
	</nav>
</div>

<div class="pricing-header px-3 py-1 pt-md-3 pb-md-4 mx-auto text-center">
    <?php
	    $announce = $this->session->flashdata('announce');
		if(!empty($announce)){
			echo '<div class="alert alert-danger">'.$announce.'</div>';
		}
    ?>
</div>

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="card bg-light my-5">
				<div class="card-header text-center">Tambah Data</div>
				<div class="card-body">
					<form action="" method="post" class="needs-validation" novalidate>
						<div class="form-group">
							<label for="judul_buku">Judul Buku</label>
							<input type="text" class="form-control" name="judul_buku" id="judul_buku" placeholder="Masukan judul buku" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan judul buku.
							</div>
						</div>
						<div class="form-group">
							<label for="pengarang">Pengarang</label>
							<input type="pengarang" class="form-control" name="pengarang" id="pengarang" placeholder="Masukan nama pengarang" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan nama pengarang.
							</div>
						</div>
						<div class="form-group">
							<label for="jenis">Jenis</label>
							<input type="jenis" class="form-control" name="jenis" id="jenis" placeholder="Masukan jenis buku" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan genre buku.
							</div>
						</div>
						<div class="form-group">
							<label for="tahun_terbit">Tahun Terbit</label>
							<input type="tahun_terbit" class="form-control" name="tahun_terbit" id="tahun_terbit" placeholder="Masukan tahun terbit buku" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan tahun terbit buku.
							</div>
						</div>
						<div class="form-group">
							<label for="penerbit">Penerbit</label>
							<input type="penerbit" class="form-control" name="penerbit" id="penerbit" placeholder="Masukan nama penerbit" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan nama penerbit.
							</div>
						</div>
                        <div class="form-group">
							<label for="harga">Harga</label>
							<input type="harga" class="form-control" name="harga" id="harga" placeholder="Masukan harga buku" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan harga buku.
							</div>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-success text-center px-3 py-2" name="tambah">Tambah</button>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
</div>