@extends('backpack::layout')

@section('header')
<section class="content-header">
	<h1>
		{{ trans('backpack::base.dashboard') }}<small>{{ trans('backpack::base.first_page_you_see') }}</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
		<li class="active">{{ trans('backpack::base.dashboard') }}</li>
	</ol>
</section>
@endsection


@section('content')
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Pending Orders</span>
					<span class="info-box-number">{{ App\Models\Order::where('status_id',1)->sum('id') }}</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-red"><i class="fa fa-first-order"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Total Orders</span>
					<span class="info-box-number">{{ App\Models\Order::sum('id') }}</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->

		<!-- fix for small devices only -->
		<div class="clearfix visible-sm-block"></div>

		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Total Stock</span>
					<span class="info-box-number">{{ App\Models\Product::sum('stock') }}</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Total User</span>
					<span class="info-box-number">{{ App\User::sum('id') }}</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
	</div>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<!-- AREA CHART -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Orders</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="chart">
							<canvas id="areaChart" style="height:250px"></canvas>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>

			<div class="col-md-6">
				<!-- AREA CHART -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Ussers</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="chart">
							<canvas id="areaChart1" style="height:250px"></canvas>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->

	<?php
	    $OrderPerMonth= array();
	    for ($i=0; $i<=11; $i++){
	        $OrderPerMonth[$i] = App\Models\Order::whereMonth('created_at', date('m',strtotime('-'.$i.' month')))->count();
	    }

	    $userPerMonth= array();
	    for ($i=0; $i<=11; $i++){
	        $userPerMonth[$i] = App\User::whereMonth('created_at', date('m',strtotime('-'.$i.' month')))->count();
	    }
	?>

@endsection


@section('after_scripts')
	<script>
		$(function () {
		/* ChartJS
		 * -------
		 * Here we will create a few charts using ChartJS
		 */

		//--------------
		//- AREA CHART -
		//--------------

		// Get context with jQuery - using jQuery's .get() method.
		var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
		// This will get the first returned node in the jQuery collection.
		var areaChart = new Chart(areaChartCanvas);


		// Get context with jQuery - using jQuery's .get() method.
		var areaChartCanvas1 = $("#areaChart1").get(0).getContext("2d");
		// This will get the first returned node in the jQuery collection.
		var areaChart1 = new Chart(areaChartCanvas1);

		var areaChartData = {
			labels: ["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"],
			datasets: [
				{
					label: "Digital Goods",
					fillColor: "rgba(60,141,188,0.9)",
					strokeColor: "rgba(60,141,188,0.8)",
					pointColor: "#3b8bba",
					pointStrokeColor: "rgba(60,141,188,1)",
					pointHighlightFill: "#fff",
					pointHighlightStroke: "rgba(60,141,188,1)",
					data: {{ json_encode($OrderPerMonth) }}
				}
			]
		};

		var areaChartData1 = {
			labels: ["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"],
			datasets: [
				{
					label: "Digital Goods",
					fillColor: "rgba(60,141,188,0.9)",
					strokeColor: "rgba(60,141,188,0.8)",
					pointColor: "#3b8bba",
					pointStrokeColor: "rgba(60,141,188,1)",
					pointHighlightFill: "#fff",
					pointHighlightStroke: "rgba(60,141,188,1)",
					data: {{ json_encode($userPerMonth) }}
				}
			]
		};

		var areaChartOptions = {
			//Boolean - If we should show the scale at all
			showScale: true,
			//Boolean - Whether grid lines are shown across the chart
			scaleShowGridLines: false,
			//String - Colour of the grid lines
			scaleGridLineColor: "rgba(0,0,0,.05)",
			//Number - Width of the grid lines
			scaleGridLineWidth: 1,
			//Boolean - Whether to show horizontal lines (except X axis)
			scaleShowHorizontalLines: true,
			//Boolean - Whether to show vertical lines (except Y axis)
			scaleShowVerticalLines: true,
			//Boolean - Whether the line is curved between points
			bezierCurve: true,
			//Number - Tension of the bezier curve between points
			bezierCurveTension: 0.3,
			//Boolean - Whether to show a dot for each point
			pointDot: false,
			//Number - Radius of each point dot in pixels
			pointDotRadius: 4,
			//Number - Pixel width of point dot stroke
			pointDotStrokeWidth: 1,
			//Number - amount extra to add to the radius to cater for hit detection outside the drawn point
			pointHitDetectionRadius: 20,
			//Boolean - Whether to show a stroke for datasets
			datasetStroke: true,
			//Number - Pixel width of dataset stroke
			datasetStrokeWidth: 2,
			//Boolean - Whether to fill the dataset with a color
			datasetFill: true,
			//String - A legend template
			legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
			//Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
			maintainAspectRatio: true,
			//Boolean - whether to make the chart responsive to window resizing
			responsive: true
		};

		//Create the line chart
		areaChart.Line(areaChartData, areaChartOptions);
		areaChart1.Line(areaChartData1, areaChartOptions);


	});
	</script>
@endsection()