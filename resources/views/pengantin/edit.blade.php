@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Pengantin 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('pengantin.update',$b->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_mempelai_pria') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Mempelai Pria </label>	
			  			<input type="text" name="nama_mempelai_pria" class="form-control" value="{{ $b->nama_mempelai_pria }}" required>
			  			@if ($errors->has('nama_mempelai_pria'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_mempelai_pria') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama_mempelai_wanita') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Mempelai Wanita</label>	
			  			<input type="text" value="{{ $b->nama_mempelai_wanita }}" name="nama_mempelai_wanita" class="form-control"  required>
			  			@if ($errors->has('nama_mempelai_wanita'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_mempelai_wanita') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('tgl_pernikahan') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Pernikahan</label>	
			  			<input type="date" value="{{ $b->tgl_pernikahan }}" name="tgl_pernikahan" class="form-control"  required>
			  			@if ($errors->has('tgl_pernikahan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_pernikahan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('no_tlp') ? ' has-error' : '' }}">
			  			<label class="control-label">NO Telepon</label>	
			  			<input type="text" value="{{ $b->no_tlp }}" name="no_tlp" class="form-control"  required>
			  			@if ($errors->has('no_tlp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_tlp') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_organizer') ? ' has-error' : '' }}">
			  			<label class="control-label">Organiser</label>	
			  			<select name="id_organizer" class="form-control">
			  				@foreach($organizer as $data)
			  				<option value="{{ $data->id }}" {{ $selectedOrganizer == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_paket }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_organizer'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_organizer') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('pesanan') ? ' has-error' : '' }}">
			  			<label class="control-label">Pesanan</label>	
			  			<select name="pesanan[]" class="form-control js-example-basic-multiple" multiple="multiple">
			  				@foreach($pesanan as $data)
			  				<option value="{{ $data->id }}"{{ (in_array($data->id, $selected)) ? ' selected="selected"' : '' }}>{{ $data->pesanan }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('pesanan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pesanan') }}</strong>
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