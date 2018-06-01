@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Keluarga 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Kepala Keluarga</label>	
			  			<input type="text" name="nama_kep_kel" class="form-control" value="{{ $keluarga->nama_kep_kel }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="alamat" class="form-control" value="{{ $keluarga->alamat }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Agama</label>	
			  			<input type="text" name="agama" class="form-control" value="{{ $keluarga->agama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">No Telepon</label>	
			  			<input type="text" name="no_tlp" class="form-control" value="{{ $keluarga->no_tlp }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Pengantin</label>	
			  			<input type="text" name="pengantin" class="form-control" value="{{ $keluarga->Pengantin->nama_mempelai_pria }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection