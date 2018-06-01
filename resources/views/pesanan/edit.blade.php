@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Pesanan 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('pesanan.update',$pesanan->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('total_pesanan') ? ' has-error' : '' }}">
			  			<label class="control-label">Total_pesanan</label>	
			  			<input type="text" name="total_pesanan" class="form-control" value="{{ $pesanan->total_pesanan }}"  required>
			  			@if ($errors->has('total_pesanan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('total_pesanan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('uang_muka') ? ' has-error' : '' }}">
			  			<label class="control-label">Uang Muka</label>	
			  			<input type="text" name="uang_muka" class="form-control" value="{{ $pesanan->uang_muka }}"  required>
			  			@if ($errors->has('uang_muka'))
                            <span class="help-block">
                                <strong>{{ $errors->first('uang_muka') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('sisa_bayaran') ? ' has-error' : '' }}">
			  			<label class="control-label">Sisa Bayaran</label>	
			  			<input type="text" name="sisa_bayaran" class="form-control" value="{{ $pesanan->sisa_bayaran }}"  required>
			  			@if ($errors->has('sisa_bayaran'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sisa_bayaran') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tgl_pesan') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Pesan</label>	
			  			<input type="text" name="tgl_pesan" class="form-control" value="{{ $pesanan->tgl_pesan }}"  required>
			  			@if ($errors->has('tgl_pesan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_pesan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection