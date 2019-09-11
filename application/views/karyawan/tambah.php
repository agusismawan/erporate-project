<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Karyawan
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="karyawan_nama">Nama</label>
                            <input type="text" name="karyawan_nama" class="form-control" id="karyawan_nama">
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jekel" id="pria" value="Pria">
                                <label class="form-check-label" for="pria">Pria</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jekel" id="wanita" value="Wanita">
                                <label class="form-check-label" for="wanita">Wanita</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <select class="form-control select2" id="jabatan" name="jabatan">
                                <option value="">- Pilih Jabatan -</option>
                                <option value="Programmer">Programmer</option>
                                <option value="Analisis">Analisis</option>
                                <option value="Android Dev">Android Dev</option>
                                <option value="Bisnis Develop">Bisnis Develop</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Nomor Handphone</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="08xxx">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="2"></textarea>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>