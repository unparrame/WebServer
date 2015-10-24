<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Halaman Data Detail Warga</title>

        <!-- Bootstrap core CSS -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/css/custom.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="signin.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="/assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body background="/assets/img/LongBackground.jpg">
        <?php $this->load->view('template_header'); ?>
        <h1 class="container" align="center">DATA <?php echo $row[0]->nama; ?></h1>
        <br>
        <div class="col-md-3">
        </div>
        <div class="col-md-6 separatedetail">
            <br>
            <table class="table table-responsive">
                <tr>
                    <td width='130px'><b>NIK</b></td>
                    <td width='20px'>:</td>
                    <td><?php echo $row[0]->nik; ?></td>
                </tr>
                <tr>
                    <td><b>Nama</b></td>
                    <td>:</td>
                    <td><?php echo $row[0]->nama; ?></td>
                </tr>

                <tr>
                    <td><b>Tempat Lahir</b></td>
                    <td>:</td>
                    <td><?php echo $row[0]->tempatlahir; ?></td></td>
                </tr>

                <tr>
                    <td><b>Tanggal Lahir</b></td>
                    <td>:</td>
                    <td><?php echo $row[0]->tanggallahir; ?></td></td>
                </tr>

                <tr>
                    <td><b>Jenis Kelamin</b></td>
                    <td>:</td>
                    <td><?php echo $row[0]->jeniskelamin; ?></td></td>
                </tr>

                <tr>
                    <td><b>Alamat</b></td>
                    <td>:</td>
                    <td><?php echo $row[0]->alamat; ?></td>
                </tr>

                <tr>
                    <td><b>Provinsi</b></td>
                    <td>:</td>
                    <td><?php echo $row[0]->provinsi; ?></td>
                </tr>

                <tr>
                    <td><b>Kota / Kabupaten</b></td>
                    <td>:</td>
                    <td><?php echo $row[0]->kotakabupaten; ?></td>
                </tr>

                <tr>
                    <td><b>RT</b></td>
                    <td>:</td>
                    <td><?php echo $row[0]->rt; ?></td>
                </tr>

                <tr>
                    <td><b>RW</b></td>
                    <td>:</td>
                    <td><?php echo $row[0]->rw; ?></td>
                </tr>

                <tr>
                    <td><b>Kelurahan / Desa</b></td>
                    <td>:</td>
                    <td><?php echo $row[0]->desakel; ?></td>
                </tr>

                <tr>
                    <td><b>Kecamatan</b></td>
                    <td>:</td>
                    <td><?php echo $row[0]->kecamatan; ?></td>
                </tr>

                <tr>
                    <td><b>Agama</b></td>
                    <td>:</td>
                    <td><?php echo $row[0]->agama; ?></td>
                </tr>

                <tr>
                    <td><b>Status Perkawinan</b></td>
                    <td>:</td>
                    <td><?php echo $row[0]->statuskawin; ?></td>
                </tr>

                <tr>
                    <td><b>Pekerjaan</b></td>
                    <td>:</td>
                    <td><?php echo $row[0]->pekerjaan; ?></td>
                </tr>

                <tr>
                    <td><b>Kewarganegaraan</b></td>
                    <td>:</td>
                    <td><?php echo $row[0]->kewarganegaraan; ?></td>
                </tr>

            </table>
            <br>

            <b>Histori</b>
            <?php foreach ($posts as $post): ?>
            <div class="media">
                <div class="media-left">
                    <a href="/images/<?= $post->postId ?>.jpg">
                        <img class="media-object" src="/images/<?= $post->postId ?>.jpg" alt="Foto formulir <?= $post->postId ?>" style="width: 100px;"/>
                    </a>
                </div>
                <div class="media-body">
                    <h4><?= $post->posterEmail ?></h4>
                    <p><?= $post->postTime?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="col-md-3">
        </div>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
