@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-2">
 @include('layouts.navbar')
</div>
	<div class="container">
		<div class="col-md-10">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Pesanan
			  	<div class="panel-title pull-right"><a href="{{ route('pesanan.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Total Pesanan</th>
					  <th>Uang Muka</th>
					  <th>Sisa Bayaran</th>
					  <th>Tanggal Pesan</th>
					  <th colspan="2">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($pesanan as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->total_pesanan }}</td>
				    	<td>{{ $data->uang_muka }}</td>
				    	<td>{{ $data->sisa_bayaran }}</td>
				    	<td>{{ $data->tgl_pesan }}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('pesanan.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('pesanan.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('pesanan.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection