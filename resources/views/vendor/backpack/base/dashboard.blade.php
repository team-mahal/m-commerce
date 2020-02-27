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
@endsection
