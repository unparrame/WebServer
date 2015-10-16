<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Citizens Analytics</title>
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
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h3>Usia &amp; Jenis Kelamin</h3>
				<canvas id="ageChart" width="300" height="200"></canvas>
				<span id="ageChartLegend"></span>
				<h3>Agama</h3>
				<canvas id="religionChart" width="300" height="200"></canvas>
				<span id="religionChartLegend"></span>
			</div>
			<div class="col-md-9">
				<table class="table">
					<thead>
						<tr>
							<th>NIK</th>
							<th>Nama</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>123456789</td>
							<td>Pascal Alfadian Nugroho</td>
							<td>
								<button type="button" class="btn btn-default" aria-label="Lihat Detail">
									<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
								</button>
							</td>
						</tr>
						<tr>
							<td>234567890</td>
							<td>Vinsensius Kevin</td>
							<td>
								<button type="button" class="btn btn-default" aria-label="Lihat Detail">
									<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
								</button>
							</td>
						</tr>
						<tr>
							<td>345678901</td>
							<td>Wilianto Indrawan</td>
							<td>
								<button type="button" class="btn btn-default" aria-label="Lihat Detail">
									<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
								</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/Chart.js"></script>
	<script>
		$(document).ready(function() {
			var ageData = {
				labels: ["0-20", "21-40", "41-60", "61-80", "81-100", "101+"],
				datasets: [
					{
						label: "Pria",
						fillColor: "pink",
						data: [5, 7, 15, 9, 8, 1]
					},
					{
						label: "Wanita",
						fillColor: "blue",
						data: [1, 13, 14, 8, 6, 2]
					}

				]
			};
			var ageChartElement = $("#ageChart");
			var ageChartContext = ageChartElement.get(0).getContext("2d");
			var ageChart = new Chart(ageChartContext).Bar(ageData, {});
			$("#ageChartLegend").append(ageChart.generateLegend());

			var religionData = [
				{
					value: 207176162,
					color: "Red",
					label: "Islam"
				},
				{
					value: 16528513,
					color: "Green",
					label: "Kristen"
				},
				{
					value: 6907873,
					color: "Blue",
					label: "Katolik"
				},
				{
					value: 4012116,
					color: "Cyan",
					label: "Hindu"
				},
				{
					value: 1703254,
					color: "Magenta",
					label: "Budha"
				},
				{
					value: 117091,
					color: "Yellow",
					label: "Kong Hu Chu"
				},
				{
					value: 299617,
					color: "Black",
					label: "Lainnya"
				}
			];
			var religionChartElement = $("#religionChart");
			var religionChartContext = religionChartElement.get(0).getContext("2d");
			var religionChart = new Chart(religionChartContext).Pie(religionData, {});
			$("#religionChartLegend").append(religionChart.generateLegend());
		});
	</script>
</body>
</html>