<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Penduduk</title>
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            .bar-legend li span, .pie-legend li span {
                display: inline-block;
                width: 12px;
                height: 12px;
                margin-right: 5px;
            }
            canvas {
                width: 100%;
                height: auto;
            }
        </style>
    </head>
    <body>
    <body background="/assets/img/LongBackground.jpg">

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Gol. Darah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($citizens as $citizen): ?>
                                <tr>
                                    <td><?= $citizen->nik ?></td>
                                    <td><?= $citizen->nama ?></td>
                                    <td><?= $citizen->jeniskelamin ?></td>
                                    <td><?= $citizen->agama ?></td>
                                    <td><?= $citizen->goldarah ?></td>
                                    <td>
                                        <a href="/citizens/detail/?nik=<?= $citizen->nik ?>">
                                            <button type="button" class="btn btn-default" aria-label="Lihat Detail">
                                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <h3>Jenis Kelamin</h3>
                    <canvas id="genderChart" width="300" height="200"></canvas>
                    <span id="genderChartLegend"></span>
                    <h3>Agama</h3>
                    <canvas id="religionChart" width="300" height="200"></canvas>
                    <span id="religionChartLegend"></span>
                    <h3>Golongan Darah</h3>
                    <canvas id="goldarahChart" width="300" height="200"></canvas>
                    <span id="goldarahChartLegend"></span>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/Chart.js"></script>
        <script>
            $(document).ready(function () {
                var genderData = <?= json_encode($chartjsJenisKelamin); ?>;
                var genderChartElement = $("#genderChart");
                var genderChartContext = genderChartElement.get(0).getContext("2d");
                var genderChart = new Chart(genderChartContext).Pie(genderData, {});
                $("#genderChartLegend").append(genderChart.generateLegend());

                var religionData = <?= json_encode($chartjsAgama); ?>;
                var religionChartElement = $("#religionChart");
                var religionChartContext = religionChartElement.get(0).getContext("2d");
                var religionChart = new Chart(religionChartContext).Pie(religionData, {});
                $("#religionChartLegend").append(religionChart.generateLegend());

                var goldarahData = <?= json_encode($chartjsGolDarah); ?>;
                var goldarahChartElement = $("#goldarahChart");
                var goldarahChartContext = goldarahChartElement.get(0).getContext("2d");
                var goldarahChart = new Chart(goldarahChartContext).Pie(goldarahData, {});
                $("#goldarahChartLegend").append(goldarahChart.generateLegend());
            });
        </script>
    </body>
</html>
