<div class="container mt-3">

<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash() ?>
   </div>
</div>

<div class="row">
    <div class="col-lg-6">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
  Tambah Data Guru
</button>
<br></br>
<div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/guru/cari" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="cari guru.." name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>
        <h3>Daftar Guru</h3>
        <ul class="list-group">
        <?php foreach( $data['guru'] as $guru) : ?>
  <li class="list-group-item">
    <?= $guru ['nama']; ?>
    <a href="<?= BASEURL; ?>/guru/hapus/<?= $guru['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">hapus</a>
    <a href="<?= BASEURL; ?>/guru/ubah/<?= $guru['id']; ?>" class="badge badge-success float-right ml-1" >ubah</a>
    <a href="<?= BASEURL; ?>/guru/detail/<?= $guru['id']; ?>" class="badge badge-primary float-right ml-1" >detail</a>
  <?php endforeach; ?>    
</ul>

    </div>
</div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/guru/tambah" method="post">

  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama"> 
  </div>

  <div class="form-group">
    <label for="id">id</label>
    <input type="number" class="form-control" id="id" name="id"> 
  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
    </div>
  </div>
</div>
