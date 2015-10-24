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

        <title>Halaman Dijitalisasi</title>

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
        <!-- <body> -->
        <h1 class="container" align="center">DIJITALISASI DATA</h1>
        <br>

        <div class="col-md-1">
        </div>

        <div class="col-md-5">
            <h2 align="center">Foto</h2><br>
            <?php echo "<img src='/images/" . $row->postId . ".jpg' width='100%'>" ?>
        </div>

        <div class="col-md-5 separate">
            <form action="/digitalizers/submit" method="POST">
                <h2 align="center">Masukan Data KTP disini</h2>
                <br>
                <table class="table table-responsive">
                    <tr>
                        <td><b>Provinsi</b></td>
                        <td>:</td>
                        <td><input name="provinsi" required="required" placeholder="" class="form-control" type="text"></td>
                    </tr>

                    <tr>
                        <td><b>Kota / Kabupaten</b></td>
                        <td>:</td>
                        <td><input name="kotakabupaten" required="required" placeholder="" class="form-control" type="text"></td>
                    </tr>

                    <tr>
                        <td width='130px'><b>NIK</b></td>
                        <td width='20px'>:</td>
                        <td><input name="nik" required="required" placeholder="" class="form-control" type="text"></td>
                    </tr>

                    <tr>
                        <td><b>Nama</b></td>
                        <td>:</td>
                        <td><input name="nama" required="required" placeholder="" class="form-control" type="text"></td>
                    </tr>

                    <tr>
                        <td><b>Tempat Lahir</b></td>
                        <td>:</td>
                        <td><input name="tempatlahir" required="required" placeholder="" class="form-control" type="text"></td>
                    </tr>

                    <tr>
                        <td><b>Tanggal Lahir</b></td>
                        <td>:</td>
                        <td><input name="tanggallahir" required="required" placeholder="" class="form-control" type="date"></td>
                    </tr>

                    <tr>
                        <td><b>Jenis Kelamin</b></td>
                        <td>:</td>
                        <td><input name="jeniskelamin" required="required" placeholder="" class="form-control" type="text"></td>
                    </tr>

                    <tr>
                        <td><b>Golongan Darah</b></td>
                        <td>:</td>
                        <td><input name="goldarah" required="required" placeholder="" class="form-control" type="text"></td>
                    </tr>

                    <tr>
                        <td><b>Alamat</b></td>
                        <td>:</td>
                        <td><input name="alamat" required="required" placeholder="" class="form-control" type="text"></td>
                    </tr>

                    <tr>
                        <td><b>RT</b></td>
                        <td>:</td>
                        <td><input name="rt" required="required" placeholder="" class="form-control" type="text"></td>
                    </tr>

                    <tr>
                        <td><b>RW</b></td>
                        <td>:</td>
                        <td><input name="rw" required="required" placeholder="" class="form-control" type="text"></td>
                    </tr>

                    <tr>
                        <td><b>Kelurahan / Desa</b></td>
                        <td>:</td>
                        <td><input name="desakel" required="required" placeholder="" class="form-control" type="text"></td>
                    </tr>

                    <tr>
                        <td><b>Kecamatan</b></td>
                        <td>:</td>
                        <td><input name="kecamatan" required="required" placeholder="" class="form-control" type="text"></td>
                    </tr>

                    <tr>
                        <td><b>Agama</b></td>
                        <td>:</td>
                        <td><input name="agama" required="required" placeholder="" class="form-control" type="text"></td>
                    </tr>

                    <tr>
                        <td><b>Status Perkawinan</b></td>
                        <td>:</td>
                        <td><input name="statuskawin" required="required" placeholder="" class="form-control" type="text"></td>
                    </tr>

                    <tr>
                        <td><b>Pekerjaan</b></td>
                        <td>:</td>
                        <td><input name="pekerjaan" required="required" placeholder="" class="form-control" type="text"></td>
                    </tr>

                    <tr>
                        <td><b>Kewarganegaraan</b></td>
                        <td>:</td>
                        <td><input name="kewarganegaraan" required="required" placeholder="" class="form-control" type="text"></td>
                    </tr>

                </table>
                <br>

                <!-- </fieldset> -->
                <input type="hidden" name="postId" value="<?= $row->postId ?>">
                <button class="btn btn-lg btn-primary btn-block" type="submit" value="submit">Kirim</button>
                <button class="btn btn-lg btn-primary btn-block" type="submit" value="reject">Tolak</button>

            </form>
        </div>
        <div class="col-md-1">
        </div>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
