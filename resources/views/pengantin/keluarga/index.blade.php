@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-2">
 @include('layouts.navbar')
</div>
	<div class="container">
		<div class="col-md-10">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Keluarga
			  	<div class="panel-title pull-right"><a href="{{ route('keluarga.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Kepala Keluarga</th>
					  <th>Alamat</th>
					  <th>Agama</th>
					  <th>No Telepon</th>
					  <th>Pengantin</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($keluarga as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama_kep_kel }}</td>
				    	<td>{{ $data->alamat }}</td>
				    	<td>{{ $data->agama }}</td>
				    	<td>+{{ $data->no_tlp }}</td>
				    	<td><p>{{ $data->Organizer->nama_paket }}</p></td>
<td>
	<a class="btn btn-warning" href="{{ route('keluarga.edit',$data->id) }}">Edit</a>
</td>
<td>
	<a href="{{ route('keluarga.show',$data->id) }}" class="btn btn-success">Show</a>
</td>
<td>
	<form method="post" action="{{ route('keluarga.destroy',$data->id) }}">
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