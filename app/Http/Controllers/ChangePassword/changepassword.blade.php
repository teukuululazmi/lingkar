@extends('layouts.master')
@section('page_header')
<div class="page-header">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
				<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Change Password</h4>
				<a href="{{ route('home') }}" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>

			<div class="header-elements d-none py-0 mb-3 mb-md-0">
				<div class="breadcrumb">
					<a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
					<span class="breadcrumb-item active">Change Password</span>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Change Password</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="success" data-success="{{Session::get('success')}}"></div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('changepasswordPost') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label class="col-form-label col-lg-3"><i class="icon-lock2 mr-2"></i>Password Lama</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="password" name="password" id="password" class="form-control"
                                autocomplete="current-password">
                            <span class="input-group-append">
                                <button type="button" class="btn btn-link input-group-text" onclick="show1()"><i
                                        id="password2" class="icon-eye2"></button></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-3"><i class="icon-lock2 mr-2"></i>Password Baru</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="password" name="new_password" id="katasandi_baru" class="form-control"
                                autocomplete="current-password">
                            <span class="input-group-append">
                                <button type="button" class="btn btn-link input-group-text" onclick="show2()"><i
                                        id="katasandi_baru2" class="icon-eye2"></button></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-3"><i class="icon-lock2 mr-2"></i>Konfimasi Password Baru</label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="password" name="confirm_password" id="confirm_katasandi" class="form-control"
                                autocomplete="current-password">
                            <span class="input-group-append">
                                <button type="button" class="btn btn-link input-group-text" onclick="show3()"><i
                                        id="confirm_katasandi2" class="icon-eye2"></button></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="form_group">
                    <button type="submit" class="btn btn-primary float-right mt-2">Save</button>
                </div>
            </form>
        </div>
    </div>
	<script>
    function show1() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
        $('#password2').addClass('icon-eye-blocked2');
    } else {
        x.type = "password";
        $('#password2').removeClass().addClass('icon-eye2');
    }
    }

    function show2() {
    var x = document.getElementById("katasandi_baru");
    if (x.type === "password") {
        x.type = "text";
        $('#katasandi_baru2').addClass('icon-eye-blocked2');
    } else {
        x.type = "password";
        $('#katasandi_baru2').removeClass().addClass('icon-eye2');
    }
    }
    
    function show3() {
    var x = document.getElementById("confirm_katasandi");
    if (x.type === "password") {
        x.type = "text";
        $('#confirm_katasandi2').addClass('icon-eye-blocked2');
    } else {
        x.type = "password";
        $('#confirm_katasandi2').removeClass().addClass('icon-eye2');
    }
    }
    
</script>
@endsection