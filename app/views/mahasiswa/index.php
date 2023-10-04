<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash() ?>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
        Tambah Data Mahasiswa
      </button>
      <br></br>
      <div class="row mb-3">
        <div class="col-lg-6">
          <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" id="keyword" autocomplete="off">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <h3>Daftar Mahasiswa</h3>
      <ul class="list-group">
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <li class="list-group-item">
            <?= $mhs['nama']; ?>
            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">hapus</a>
            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah">ubah</a>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-1">detail</a>
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
        <h5 class="modal-title" id="judulModal" >Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">

          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>

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
              <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
              <option value="Bisnis Retail">Bisnis Retail</option>
              <option value="Manajemen Perkantoran">Manajmen Perkantoran</option>
              <option value="Akuntasi">Akuntasi</option>
              <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
            </select>
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

<script>
  $(function() {

    $(".tombolTambahData").on("click", function() {
      $("#forModalLabel").html("Tambah Data Mahasiswa");
      $("#.modal-footer button[type=submit]").html("Tambah Data");
      $("#nama").val("");
      $("#nrp").val("");
      $("#email").val("");
      $("#jurusan").val("");
      $("#id").val("");
    });

    $(".tampilModalUbah").on("click", function() {
      $("#judulModal").html("ubah Data Mahasiswa");
      $(".modal-footer button[type=submit]").html("ubah Data Mahasiswa");
      $(".modal-body form").attr("action", "http://localhost/phpmvcd-d/public/mahasiswa/ubah");

      const id = $(this).data("id");

      $.ajax({
        url: "http://localhost/phpmvc-d/public/mahasiswa/getubah",
        data: {
          id: id
        },
        method: "post",
        dataType: "json",
        success: function(data) {
          $("#nama").val("");
          $("#nrp").val("");
          $("#email").val("");
          $("#jurusan").val("");
          $("#id").val("");
        }
      })
    })
  })
</script>