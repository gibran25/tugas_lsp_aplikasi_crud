  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-light border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Toko Buku Pustaka</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="btn btn-success" href="<?=base_url('tambah')?>">Tambah Data</a>
    </nav>
  </div>
  
  <div class="pricing-header px-3 py-1 pt-md-3 pb-md-4 mx-auto text-center">
    <?php if($this->session->flashdata('pesan') == "Ditambah"): ?>
      <div class="alert alert-success" role="='alert">
        Data berhasil ditambahkan!
      </div>
    <?php elseif($this->session->flashdata('pesan') == "Diubah"): ?>
      <div class="alert alert-success" role="='alert">
        Data berhasil diubah!
      </div>
    <?php elseif($this->session->flashdata('pesan') == "Dihapus"): ?>
      <div class="alert alert-success" role="='alert">
        Data telah dihapus!
      </div>
    <?php endif ?>
  </div>
  
  <div class="container">
  <h1 class="my-0 mr-md-auto font-weight-normal pb-2">Data Buku</h1>
    <table class="table table-hover mb-5">
      <thead class="thead-light align-middle">
        <tr>
          <th rowspan="2" class="align-middle text-center">No.</th>
          <th rowspan="2" class="align-middle text-center">Judul Buku</th>
          <th rowspan="2" class="align-middle text-center">Pengarang</th>
          <th rowspan="2" class="align-middle text-center">Jenis</th>
          <th rowspan="2" class="align-middle text-center">Tahun Terbit</th>
          <th rowspan="2" class="align-middle text-center">Penerbit</th>
          <th rowspan="2" class="align-middle text-center">Harga</th>
          <th rowspan="2" class="align-middle text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; foreach ($record as $data) : ?>
        <tr>
          <th class="align-middle text-center"><?=$no++?></th>
          <td class="align-middle text-center"><?=$data['judul_buku']?></td>
          <td class="align-middle text-center"><?=$data['pengarang']?></td>
          <td class="align-middle text-center"><?=$data['jenis']?></td>
          <td class="align-middle text-center"><?=$data['tahun_terbit']?></td>
          <td class="align-middle text-center"><?=$data['penerbit']?></td>
          <td class="align-middle text-center"><?=$data['harga']?></td>
          <td class="align-middle text-center">
            <a href="<?=base_url('edit/'.$data['id'])?>" class="align-middle btn btn-warning">Edit</a>
            <a href="<?=base_url('hapus/'.$data['id'])?>" onclick="return confirm('Apakah anda yakin data ini akan dihapus?')" class="align-middle btn btn-danger">Hapus</a>
          </td>
        </tr>
        <?php endforeach?>
      </tbody>
    </table>
  </div>