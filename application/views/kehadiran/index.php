<div class="container mt-3">

    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data kehadiran <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <h3>Daftar Kehadiran</h3>
    <div class="row mt-3">
        <div class="col-md-11">
            <a href="<?= base_url('kehadiran/tambah') ?>" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-11">
            <div class="card bg-light mb-3" style="max-width: 100%;">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered data">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Aksi</th>
                                    <th>Nama</th>
                                    <th>Hari/Tanggal</th>
                                    <th>Jam Datang</th>
                                    <th>Jam Pulang</th>
                                    <th>Jam Kerja</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($kehadiran as $k) :
                                    ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>kehadiran/ubah/<?= $k['kehadiran_id']; ?>" class="badge badge-success">ubah</a>
                                        <a href="<?= base_url(); ?>kehadiran/hapus/<?= $k['kehadiran_id']; ?>" class="badge badge-danger" onclick="return confirm('Hapus <?= $k['karyawan_nama']; ?> ?');">hapus</a>
                                    </td>
                                    <td><?= $k['karyawan_nama']; ?></td>
                                    <td><?= longdate_indo($k['tgl_kehadiran']); ?></td>
                                    <td align="center"><?= date_format(date_create($k['jam_datang']), 'H:i'); ?></td>
                                    <td align="center"><?= date_format(date_create($k['jam_pulang']), 'H:i'); ?></td>
                                    <td align="center"><?= date_format(date_create($k['jam_kerja']), 'H'); ?> Jam <?= date_format(date_create($k['jam_kerja']), 'i'); ?> Menit</td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>