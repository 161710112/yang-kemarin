@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Pesanan 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Total Pesanan</label>	
			  			<input type="text" name="total_pesanan" class="form-control" value="{{ $pesanan->total_pesanan }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Uang Muka</label>	
			  			<input type="text" name="uang_muka" class="form-control" value="{{ $pesanan->uang_muka }}"  readonly>
			  		</div>


					<div class="form-group">
			  			<label class="control-label">Sisa Bayaran</label>	
			  			<input type="text" name="sisa_bayaran" class="form-control" value="{{ $pesanan->sisa_bayaran }}"  readonly>
			  		</div>


					<div class="form-group">
			  			<label class="control-label">Tanggal Pesan</label>	
			  			<input type="date" name="tgl_pesan" class="form-control" value="{{ $pesanan->tgl_pesan }}"  readonly>
			  		</div>


			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection