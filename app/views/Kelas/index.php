<div class="container mt-3">

<div class="row">
    <div class="col-6">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
  Tambah Data Kelas
</button>
<br></br>
        <h3>Daftar Kelas</h3>
        <ul class="list-group">
        <?php foreach( $data['kelas'] as $kelas) : ?>
  <li class="list-group-item">
    <?= $kelas ['kelas']; ?>
    <a class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?');"
                            href="<?= BASEURL; ?>/kelas/hapus/<?= $kelas['id']; ?>">Hapus</a>
                        <a class="badge badge-success float-right ml-1 tampilModalUbah"
                            href="<?= BASEURL; ?>/kelas/ubah/<?= $kelas['id']; ?>" data-toggle="modal"
                            data-target="#forModal" data-id="<?= $kelas['id']; ?>">Ubah</a>
                        <a class="badge badge-primary float-right ml-1"
                            href="<?= BASEURL; ?>/kelas/detail/<?= $kelas['id']; ?>">Detail</a>
    <!-- <a href="<?= BASEURL; ?>/kelas/detail/<?= $kelas['id']; ?>" class="badge badge-primary" >detail</a>
    <a href="<?= BASEURL; ?>/kelas/detail/<?= $kelas['id']; ?>" class="badge badge-primary" >detail</a> -->
</li>
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
        <h5 class="modal-title" id="judulModal">Tambah Data Kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/kelas/tambah" method="post">

  <div class="form-group">
    <label for="kelas">Kelas</label>
    <input type="text" class="form-control" id="kelas" name="kelas"> 
  </div>
<!-- 
  <div class="form-group">
    <label for="nrp">NRP</label>
    <input type="number" class="form-control" id="nrp" name="nrp"> 
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email"> 
  </div>

  <div class="form-group">
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
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
    </div>
  </div>
</div>
