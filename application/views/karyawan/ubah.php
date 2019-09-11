<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Karyawan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $karyawan['karyawan_id']; ?>">
                        <div class="form-group">
                            <label for="karyawan_nama">Nama</label>
                            <input type="text" name="karyawan_nama" class="form-control" id="karyawan_nama" value="<?= $karyawan['karyawan_nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('karyawan_nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jekel" id="pria" value="Pria" <?php if ($karyawan['jekel'] == 'Pria') {
                                                                                                                        echo 'checked';
                                                                                                                    } ?>>
                                <label class="form-check-label" for="pria">Pria</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jekel" id="wanita" value="Wanita" <?php if ($karyawan['jekel'] == 'Wanita') {
                                                                                                                            echo 'checked';
                                                                                                                        } ?>>
                                <label class="form-check-label" for="wanita">Wanita</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <select class="form-control select2" id="jabatan" name="jabatan">
                                <?php foreach ($jabatan as $j) : ?>
                                <?php if ($j == $karyawan['jabatan']) : ?>
                                <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                <?php else : ?>
                                <option value="<?= $j; ?>"><?= $j; ?></option>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('jabatan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No Handphone</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?= $karyawan['no_hp']; ?>">
                            <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="2"><?= $karyawan['alamat']; ?></textarea>
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>