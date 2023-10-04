<div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title mb-4"></h5>
            <p class="card-text mb-4">Jurusan: <?= $data['jurusan']['nama']; ?></p>
            <p class="card-text m-0 text-center mb-3"><?= $data['jurusan']['deskripsi']; ?></p>
            <a href="<?= BASEURL; ?>kelas" class="card-link d-flex justify-content-center">Kembali</a>
        </div>
    </div>
</div>