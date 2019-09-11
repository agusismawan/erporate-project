<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Kehadiran
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="karyawan_nama">Karyawan</label>
                            <select class="form-control select2" id="karyawan_nama" name="karyawan_nama">
                                <option value="">- Pilih Karyawan -</option>
                                <?php foreach ($karyawan as $kry) : ?>
                                <option value="<?= $kry['karyawan_id']; ?>"><?= $kry['karyawan_nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl_kehadiran">Tanggal Kehadiran</label>
                            <input type="date" name="tgl_kehadiran" class="form-control" id="tgl_kehadiran">
                        </div>
                        <div class="form-group">
                            <label for="jam_datang">Jam Datang</label>
                            <input type="time" name="jam_datang" class="form-control" id="jam_datang">
                        </div>
                        <div class="form-group">
                            <label for="jam_pulang">Jam Pulang</label>
                            <input type="time" name="jam_pulang" class="form-control" id="jam_pulang">
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>