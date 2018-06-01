@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Pengantin 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Mempelai Pria</label>	
			  			<input type="text" name="nama_mempelai_pria" class="form-control" value="{{ $b->nama_mempelai_pria }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nama Mempelai Wanita</label>	
			  			<input type="text" name="nama_mempelai_wanita" class="form-control" value="{{ $b->nama_mempelai_wanita }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Tanggal Pernikahan</label>	
			  			<input type="date" name="tgl_pernikahan" class="form-control" value="{{ $b->tgl_pernikahan }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">No Telepon</label>
						<input type="text" name="no_tlp" class="form-control" value="{{ $b->no_tlp }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Organizer</label>
						<input type="text" name="organiser" class="form-control" value="{{ $b->Organizer->nama_paket }}"  readonly>
			  		</div>
			  		<div class="form-group">
                    <strong>Pesanan</strong><br>@foreach($b->Pesanan as $data){{ $data->pesanan }}, @endforeach

			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection