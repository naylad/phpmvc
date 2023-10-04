<div class="container mt-3">

<div class="row">
    <div class="col-6">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
  Tambah Data Jurusan
</button>
<br></br>
<div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/jurusan/cari" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="cari jurusan.." name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    </div>
</div>

<div class="row">
  <div class="col-lg-6">
    <h3>Daftar Jurusan</h3>
    <ul class="list-group">
      <?php foreach( $data['jurusan'] as $jurusan) : ?>
        <li class="list-group-item">
          <?= $jurusan ['jurusan']; ?>
          <a href="<?= BASEURL; ?>/jurusan/hapus/<?= $jurusan['id']; ?>" class="badge badge-danger float-right ml-1" >hapus</a>
          <a href="<?= BASEURL; ?>/jurusan/ubah/<?= $jurusan['id']; ?>" class="badge badge-success float-right ml-1" >ubah</a>
          <a href="<?= BASEURL; ?>/jurusan/detail/<?= $jurusan['id']; ?>" class="badge badge-primary float-right ml-1" >detail</a>
        </li>
        <?php endforeach; ?>    
      </ul>
      
    </div>
  </div>
    </div>
</div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Jurusan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/jurusan/tambah" method="post">

  <div class="form-group">
    <label for="jurusan">Nama Jurusan</label>
    <input type="text" class="form-control" id="jurusan" name="jurusan"> 
  </div>

  <!-- <div class="form-group">
    <label for="nrp">NRP</label>
    <input type="number" class="form-control" id="nrp" name="nrp"> 
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email"> 
  </div> -->

  <!-- <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <select class="form-control" id="jurusan" name="jurusan">
      <option value= "Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
      <option value= "Bisnis Retail">Bisnis Retail</option>
      <option value= "Manajemen Perkantoran">Manajmen Perkantoran</option>
      <option value= "Akuntasi">Akuntasi</option>
      <option value= "Desain Komunikasi Visual">Desain Komunikasi Visual</option>
    </select>
  </div> -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data Jurusan</button>
        </form>
    </div>
    </div>
  </div>
</div>
