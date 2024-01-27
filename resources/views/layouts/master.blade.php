<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Lingkaran Kreatif</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
		type="text/css">
	<link href="{{ asset('admin/global_assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{ asset('admin/global_assets/js/main/jquery.min.js') }}"></script>
	<script src="{{ asset('admin/global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('admin/global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
	<!-- /core JS files -->

    {{-- sweetalert --}}
	<script src="{{ asset('admin/global_assets/js/plugins/notifications/sweet_alert.min.js') }}"></script>
	<script src="{{ asset('admin/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
	<script src="{{ asset('admin/global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script src="{{ asset('admin/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
	<script src="{{ asset('admin/global_assets/js/plugins/forms/styling/switchery.min.js') }}"></script>

	<!-- Theme JS files -->
	<script src="{{ asset('admin/global_assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
	<script src="{{ asset('admin/global_assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
	<script src="{{ asset('admin/global_assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
	<script src="{{ asset('admin/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
	<script src="{{ asset('admin/global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>
	<script src="{{ asset('admin/global_assets/js/plugins/pickers/daterangepicker.js') }}"></script>

    {{-- sweetalert --}}
	<script src="{{ asset('admin/global_assets/js/demo_pages/extra_sweetalert.js') }}"></script>

	{{-- datatable --}}
	<script src="{{ asset('admin/global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
	<script src="{{ asset('admin/global_assets/js/demo_pages/datatables_basic.js') }}"></script>

	<script src="{{ asset('admin/assets/js/app.js') }}"></script>
	<script src="{{ asset('admin/global_assets/js/demo_pages/dashboard.js') }}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="/home" class="d-inline-block">
				<img src="{{ asset('admin/global_assets/images/logo_light.png') }}" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle"
						data-toggle="dropdown">
						<img src="../../../../global_assets/images/placeholders/placeholder.jpg"
							class="rounded-circle mr-2" height="34" alt="">
						<span>{{ auth()->user()->name }}</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="{{ route('changepassword') }}" class="dropdown-item"><i class="icon-lock2"></i> Change Password</a>
						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="icon-switch2"></i>
							{{ __('Logout') }}
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="media-body">
								<div class="media-title font-weight-semibold">{{ auth()->user()->name }}</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Banda Aceh, Aceh
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="{{ route('changepassword') }}" class="text-white"><i class="icon-cog3 spinner"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header">
							<div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu"
								title="Main"></i>
						</li>
						<li class="nav-item">
							<a href="{{ route('home') }}" class="nav-link {{ request()->route()->uri() == 'home' ? 'active' : '' }}">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						<li class="nav-item-header">
							<div class="text-uppercase font-size-xs line-height-xs">Content</div> <i class="icon-menu"
								title="Main"></i>
						</li>
						<li class="nav-item">
							<a href="{{ route('slider') }}" class="nav-link {{ request()->route()->uri() == 'slider' ? 'active' : '' }}">
								<i class="icon-images3"></i>
								<span>
									Carousel
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('gallery') }}" class="nav-link {{ request()->route()->uri() == 'gallery' ? 'active' : '' }}">
								<i class="icon-gallery"></i>
								<span>
									Gallery
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('instagram') }}" class="nav-link {{ request()->route()->uri() == 'instagram' ? 'active' : '' }}">
								<i class="icon-instagram"></i>
								<span>
									Feed Intagram
								</span>
							</a>
						</li>
					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->

		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			{{-- <div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> -
							Dashboard</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Dashboard</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>
			</div> --}}
            @yield('page_header')
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">
                @yield('content')
                <div class="success" data-success="{{Session::get('success')}}"></div>
			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
						data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; {{ date('Y') }}. <a href="#">Lingkaran Kreatif</a>
					</span>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
    <script src="{{ asset('admin/global_assets/swall-custom.js') }}"></script>
</body>

</html>