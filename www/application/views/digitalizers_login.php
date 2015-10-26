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

        <title>Login Tim Dijital</title>

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
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form class="form-signin" action="/digitalizers/digitize">
                        <div style="text-align:center">
                            <img src="/assets/img/ktp-rame.png" height="70"><br><br>
                        </div>
                        <label for="inputEmail" class="sr-only">Alamat email</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Alamat Email" required autofocus>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me">Ingat saya
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
                    </form>
                    <br/>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Cara Penggunaan</h3>
                        </div>
                        <div class="panel-body">
                            Ini adalah sistus web demonstrasi KTPRame. Untuk mencoba menggunakannya, ikuti langkah-langkah berikut:
                            <ol>
                                <li>Unduh aplikasi <a href="https://github.com/unparrame/Android/releases/download/v0.1-alpha/android-debug.apk">KTPRame Android</a> dan pasang di Android Anda</li>
                                <li>Jalankan, dan login dengan user/password apapun (tidak dicek)</li>
                                <li>Ambil foto formulir pembuatan KTP (atau apapun, contoh saja) dan upload</li>
                                <li>Di <a href="http://ktprame.azurewebsites.net/" target="_blank">situs ini</a>, login dengan user/password apapun (tidak dicek)</li>
                                <li>Anda akan melihat secara acak hasil foto, termasuk mungkin saja yang baru saja Anda foto</li>
                                <li>Anda dapat langsung mencoba mengetikkan (dijitalisasi) datanya, atau melihat hasil analisis di menu "Analisis"</li>
                            </ol>
                            Kode sumber dapat dilihat pada <a href="http://github.com/unparrame" target="_blank">http://github.com/unparrame</a>.
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div> <!-- /container -->


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
