@if (Auth::check())
		<!-- Left side column. contains the sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="{{ backpack_avatar_url(Auth::user()) }}" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>{{ Auth::user()->name }}</p>
						<small><small><a href="{{ route('backpack.account.info') }}"><span><i class="fa fa-user-circle-o"></i> {{ trans('backpack::base.my_account') }}</span></a> &nbsp;  &nbsp; <a href="{{ backpack_url('logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></small></small>
					</div>
				</div>
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu">
					{{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
					<!-- ================================================ -->
					<!-- ==== Recommended place for admin menu items ==== -->
					<!-- ================================================ -->
					<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
					
					<li class="treeview">
						<a href="#"><i class="fa fa-group"></i> <span>Setup</span> <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							@can('list_categories')
								<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/categories') }}"><i class="fa fa-bars"></i> <span>{{ trans('category.categories') }}</span></a></li>
							@endcan

							@can('list_products')
								<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/products') }}"><i class="fa fa-list"></i> <span>{{ trans('product.products') }}</span></a></li>
							@endcan
							@can('list_attributes')
								<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/attributes') }}"><i class="fa fa-tag"></i> <span>{{ trans('attribute.attributes') }}</span></a></li>
							@endcan

							@can('list_attribute_sets')
								<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/attributes-sets') }}"><i class="fa fa-tags"></i> <span>{{ trans('attribute.attribute_sets') }}</span></a></li>
							@endcan

							@can('list_currencies')
								<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/currencies') }}"><i class="fa fa-usd"></i> <span>{{ trans('currency.currencies') }}</span></a></li>
							@endcan

							@can('list_taxes')
								<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/taxes') }}"><i class="fa fa-balance-scale"></i> <span>{{ trans('tax.taxes') }}</span></a></li>
							@endcan

							@can('list_order_statuses')
								<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/order-statuses') }}"><i class="fa fa-list-ul"></i> <span>{{ trans('order.order_statuses') }}</span></a></li>
							@endcan

							@can('list_cart_rules')
								<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/cart-rules') }}"><i class="fa fa-shopping-cart"></i> <span>{{ trans('cartrule.cart_rules') }}</span></a></li>
							@endcan

							@can('list_specific_prices')
								<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/specific-prices') }}"><i class="fa fa-money"></i> <span>{{ trans('specificprice.specific_prices') }}</span></a></li>
							@endcan

							@can('list_notification_templates')
								<li>
									<a href="{{ url(config('backpack.base.route_prefix', 'admin').'/notification-templates') }}"><i class="fa fa-cog"></i>
										<span>{{ trans('notification_templates.notification_templates') }}</span>
									</a>
								</li>
							@endcan
						</ul>
					</li>
					
					<li class="treeview">
						<a href="#"><i class="fa fa-group"></i> <span>Purchase</span> <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							<li>
								<a href="{{ url(config('backpack.base.route_prefix', 'admin').'/supplier') }}">
									<i class="fa fa-bars"></i> <span>Supplier</span>
								</a>
							</li>
							<li>
								<a href="{{ url(config('backpack.base.route_prefix', 'admin').'/purchasereceipt') }}">
									<i class="fa fa-bars"></i> <span>Purchase receipts</span>
								</a>
							</li>
							<li>
								<a href="{{ url(config('backpack.base.route_prefix', 'admin').'/purchaslisting') }}">
									<i class="fa fa-list-ul"></i>
									<span>Purchase Listing</span>
								</a>
							</li>
						</ul>
					</li>

					<li class="treeview">
						<a href="#"><i class="fa fa-group"></i> <span>Sale</span> <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/orders') }}"><i class="fa fa-list-ul"></i> <span>{{ trans('order.orders') }}</span></a></li>
						</ul>
					</li>
					
					<li class="treeview">
						<a href="#"><i class="fa fa-group"></i> <span>Customer</span> <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							@can('list_clients')
								<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/clients') }}"><i class="fa fa-users"></i> <span>{{ trans('client.clients') }}</span></a></li>
							@endcan
						</ul>
					</li>
					
					

					<li class="treeview">
						<a href="#"><i class="fa fa-group"></i> <span>Blogs</span> <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							<li>
								<a href="{{ url(config('backpack.base.route_prefix', 'admin').'/blogcategory') }}">
									<i class="fa fa-money"></i><span>Category</span>
								</a>
							</li>
							<li>
								<a href="{{ url(config('backpack.base.route_prefix', 'admin').'/posts') }}">
									<i class="fa fa-money"></i><span>Posts</span>
								</a>
							</li>
						</ul>
					</li>

					
					

					<li class="treeview">
						<a href="#"><i class="fa fa-line-chart"></i> <span>Reports</span> <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							<li>
								<a href="{{ url('admin/purchase') }}">
									<i class="fa fa-cog"></i>
									<span>Purchase Report</span>
								</a>
							</li>
							<li>
								<a href="{{ url('admin/stock') }}">
									<i class="fa fa-cog"></i>
									<span>Stock Report</span>
								</a>
							</li>
						</ul>
					</li>

					<li class="treeview">
						<a href="#"><i class="fa fa-group"></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							@can('list_carriers')
								<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/carriers') }}"><i class="fa fa-truck"></i> <span>{{ trans('carrier.carriers') }}</span></a></li>
							@endcan
							<li>
								<a href="{{ url(config('backpack.base.route_prefix', 'admin').'/paymentmethod') }}"><i class="fa fa-credit-card"></i> <span>Payment Method</span></a>
							</li>
							<li>
								<a href="{{ url('admin/setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a>
							</li>
							<li>
								<a href="{{ url('admin/page') }}"><i class="fa fa-cog"></i> <span>Pages</span></a>
							</li>
							{{-- <li>
								<a href="{{ url('admin/elfinder') }}"><i class="fa fa-cog"></i> <span>File Manager</span></a>
							</li> --}}
						</ul>
					</li>

					<li class="treeview">
						<a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							{{-- <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/users') }}"><i class="fa fa-user"></i> <span>{{ trans('user.users') }}</span></a></li> --}}
							<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
							<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
						</ul>
					</li>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>
@endif