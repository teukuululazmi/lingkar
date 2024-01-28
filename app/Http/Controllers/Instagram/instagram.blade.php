@extends('layouts.master')
@section('page_header')
<div class="page-header">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
				<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Feed Instagram</h4>
				<a href="{{ route('home') }}" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>

			<div class="header-elements d-none py-0 mb-3 mb-md-0">
				<div class="breadcrumb">
					<a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
					<span class="breadcrumb-item active">Feed Instagram</span>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('content')
<div class="container-fluid">
	<div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Foto Instagram</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                    </div>
                </div>
            </div>
        <div class="card-body">
            <div class="success" data-success="{{Session::get('success')}}"></div>
                    <form action="{{ route('instagramPost') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Foto</label>
									<div class="col-lg-10">
										<input type="file" name="foto" class="form-control h-auto">
									</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-end align-items-center">
                            <button type="submit" class="btn bg-dark ml-3">Save 
                                <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
        </div>
    </div>

    <div class="card">
		<div class="card-header header-elements-inline">
			<h5 class="card-title">Instagram Foto</h5>
			<div class="header-elements">
				<div class="list-icons">
					<a class="list-icons-item" data-action="collapse"></a>
				</div>
			</div>
		</div>

		<table class="table datatable-basic">
			<thead>
				<tr class="text-center">
					<th>No</th>
					<th>Foto</th>
					<th class="text-center">Aksi</th>
				</tr>
			</thead>
			<tbody>
                    @foreach ($instagram as $item)
					<tr class="text-center">
						<td>{{ $loop->iteration }}</td>
						<td><img width="200px" src="{{ url('/fotoinstagram/'.$item->foto) }}"></td>
						<td class="text-center">
                            <a href="{{ route('instagramDelete', $item->id) }}" class="btn-sm btn-danger delete" data-popup="tooltip" title="Delete"><i class="icon-bin2"></i></a>	
						</td>
					</tr>
                    @endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection