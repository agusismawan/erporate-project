<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Karyawan
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $karyawan['karyawan_nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $karyawan['jabatan']; ?></h6>
                    <p class="card-text"><?= $karyawan['jekel']; ?></p>
                    <p class="card-text"><?= $karyawan['no_hp']; ?></p>
                    <p class="card-text"><?= $karyawan['alamat']; ?></p>
                    <a href="<?= base_url('karyawan'); ?>" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>