<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Kehadiran
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="kehadiran_id" value="<?= $kehadiran['kehadiran_id'] ?>">
                        <div class="form-group">
                            <label for="karyawan_nama">Karyawan</label>
                            <select class="form-control select2" id="karyawan_nama" name="karyawan_nama">
                                <option value="">- Pilih Karyawan -</option>
                                <?php foreach ($karyawan as $kry) : ?>
                                <?php if ($kry['karyawan_id'] == $kehadiran['karyawan_id']) : ?>
                                <option value="<?= $kry['karyawan_id']; ?>" selected><?= $kry['karyawan_nama']; ?></option>
                                <?php else : ?>
                                <option value="<?= $kry['karyawan_id']; ?>"><?= $kry['karyawan_nama']; ?></option>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('karyawan_nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tgl_kehadiran">Tanggal Kehadiran</label>
                            <input type="date" name="tgl_kehadiran" class="form-control" id="tgl_kehadiran" value="<?= $kehadiran['tgl_kehadiran']; ?>">
                            <small class="form-text text-danger"><?= form_error('tgl_kehadiran'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jam_datang">Jam Datang</label>
                            <input type="time" name="jam_datang" class="form-control" id="jam_datang" value="<?= $kehadiran['jam_datang']; ?>">
                            <small class="form-text text-danger"><?= form_error('jam_datang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jam_pulang">Jam Pulang</label>
                            <input type="time" name="jam_pulang" class="form-control" id="jam_pulang" value="<?= $kehadiran['jam_pulang']; ?>">
                            <small class="form-text text-danger"><?= form_error('jam_pulang'); ?></small>
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>