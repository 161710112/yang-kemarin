@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-2">
 @include('layouts.navbar')
</div>
	<div class="container">
		<div class="col-md-10">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data pengantin
			  	<div class="panel-title pull-right"><a href="{{ route('pengantin.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Mempelai Pria</th>
					  <th>Nama Mempelai Wanita</th>
					  <th>Tanggal Pernikahan</th>
					  <th>No Telepon</th>
					  <th>Pengantin</th>
  					<th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($b as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama_mempelai_pria }}</td>
				    	<td>{{ $data->nama_mempelai_wanita }}</td>
				    	<td>{{ $data->tgl_pernokahan }}</td>
				    	<td>{{ $data->no_tlp }}</td>
				    	<td>@foreach($data->Organizer as $a)<li>{{ $b->nama }}@endforeach</li></td>
<td>
	<a class="btn btn-warning" href="{{ route('pengantin.edit',$data->id) }}">Edit</a>
</td>
<td>
	<a href="{{ route('pengantin.show',$data->id) }}" class="btn btn-success">Show</a>
</td>
<td>
	<form method="post" action="{{ route('pengantin.destroy',$data->id) }}">
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