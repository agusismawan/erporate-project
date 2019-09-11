<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- select2 -->
    <link href="<?= base_url('assets/'); ?>select2/dist/css/select2.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>DataTables/media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>DataTables/media/css/dataTables.bootstrap.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

    <title><?= $judul; ?></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">Erporate</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="<?= base_url('karyawan'); ?>">Karyawan</a>
                    <a class="nav-item nav-link" href="<?= base_url('kehadiran'); ?>">Kehadiran</a>
                    <a class="nav-item nav-link" href="<?= base_url('about'); ?>">About</a>
                </div>
            </div>
        </div>
    </nav>