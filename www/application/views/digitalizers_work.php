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

    <body>

        <div class="container">

            <h1>Dijitalisasi data</h1>
            <p>Harusnya ada gambar di sini...</p>

            <form class="form-horizontal">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Form Name</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="nik">NIK</label>  
                        <div class="col-md-4">
                            <input id="nik" name="nik" placeholder="123456" class="form-control input-md" type="text">
                            <span class="help-block">help</span>  
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="nama">Nama</label>  
                        <div class="col-md-4">
                            <input id="nama" name="nama" placeholder="John Doe" class="form-control input-md" required="" type="text">
                            <span class="help-block">help</span>  
                        </div>
                    </div>

                    <!-- Multiple Radios -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="jeniskelamin">Jenis Kelamin</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label for="jeniskelamin-0">
                                    <input name="jeniskelamin" id="jeniskelamin-0" value="male" checked="checked" type="radio">
                                    Pria
                                </label>
                            </div>
                            <div class="radio">
                                <label for="jeniskelamin-1">
                                    <input name="jeniskelamin" id="jeniskelamin-1" value="female" type="radio">
                                    Wanita
                                </label>
                            </div>
                        </div>
                    </div>

                </fieldset>
                <button class="btn btn-lg btn-primary btn-block" type="submit" value="submit">Kirim</button>
                <button class="btn btn-lg btn-primary btn-block" type="submit" value="reject">Tolak</button>

            </form>


        </div> <!-- /container -->


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
