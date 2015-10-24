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
        <link href="/assets/bootstrap-daterangepicker-master/daterangepicker.css" rel="stylesheet">
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
        <br>
        <div class="col-md-6 form-inline">
            <div class="form-group">
                <fieldset disabled>
                    <label for="postId">Nomer Foto</label>
                    <input id="postId" name="postId" class="form-control disabled" type="text" value="<?= $row->postId ?>">
                </fieldset>
                <br/>
            </div>
            <?php echo "<img src='/images/" . $row->postId . ".jpg' width='100%'>" ?>
        </div>

        <form action="/digitalizers/submit" method="POST">
            <div class="col-md-3 separate">
                <div class="form-group">
                    <label for="provinsi">Provinsi</label>
                    <div class="input-group">
                        <div class="input-group-addon">PROVINSI</div>
                        <input id="provinsi" name="provinsi" placeholder="" class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label for="kotakabupaten">Kota / Kabupaten</label>
                    <input id="kotakabupaten" name="kotakabupaten" placeholder="" class="form-control" type="text">
                </div>

                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input id="nik" name="nik" placeholder="" class="form-control" type="text" size="16">
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input id="nama" name="nama" placeholder="" class="form-control" type="text">
                </div>

                <div class="form-group">
                    <label for="tempatlahir">Tempat Lahir</label>
                    <input id="tempatlahir" name="tempatlahir" placeholder="" class="form-control" type="text">
                </div>

                <div class="form-group">
                    <label for="tanggallahir">Tanggal Lahir</label>
                    <input id="tanggallahir" name="tanggallahir" placeholder="" class="form-control form_datetime" type="text" data-format="yyyy-MM-dd">
                </div>

                <div class="form-group">
                    <label for="jeniskelamin">Jenis Kelamin</label>
                    <input id="jeniskelamin" name="jeniskelamin" placeholder="" class="form-control" type="text">
                </div>

                <div class="form-group">
                    <label for="goldarah">Golongan Darah</label>
                    <input id="goldarah" name="goldarah" placeholder="" class="form-control" type="text" size="2">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input id="alamat" name="alamat" placeholder="" class="form-control" type="text">
                </div>
            </div>

            <div class="col-md-3 separate">

                <div class="form-group">
                    <label for="rt">RT</label>
                    <input id="rt" name="rt" placeholder="" class="form-control" type="text" size="3">
                </div>

                <div class="form-group">
                    <label for="rw">RW</label>
                    <input id="rw" name="rw" placeholder="" class="form-control" type="text" size="3">
                </div>

                <div class="form-group">
                    <label for="desakel">Kelurahan / Desa</label>
                    <input id="desakel" name="desakel" placeholder="" class="form-control" type="text">
                </div>

                <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <input id="kecamatan" name="kecamatan" placeholder="" class="form-control" type="text">
                </div>

                <div class="form-group">
                    <label for="agama">Agama</label>
                    <input id="agama" name="agama" placeholder="" class="form-control" type="text">
                </div>

                <div class="form-group">
                    <label for="statuskawin">Status Perkawinan</label>
                    <input id="statuskawin" name="statuskawin" placeholder="" class="form-control" type="text">
                </div>

                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input id="pekerjaan" name="pekerjaan" placeholder="" class="form-control" type="text">
                </div>

                <div class="form-group">
                    <label for="kewarganegaraan">Kewarganegaraan</label>
                    <input id="kewarganegaraan" name="kewarganegaraan" placeholder="" class="form-control" type="text" size="3">
                </div>
                <input type="hidden" name="postId" value="<?= $row->postId ?>"/>
                <button class="btn btn-primary btn-block btn-lg" type="submit" value="submit">Kirim</button>
            </div>
        </form>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/assets/js/jquery-1.11.3.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/bootstrap-daterangepicker-master/moment.js"></script>
    <script src="/assets/bootstrap-daterangepicker-master/daterangepicker.js"></script>
    <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script>
    $("#tanggallahir").daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        locale: {
            format: 'YYYY-MM-DD'
        }
    });
    </script>
</body>
</html>
