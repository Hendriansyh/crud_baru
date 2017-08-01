@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Siswa</h1></center>
	<div class="panel-heading">
	<div class="panel-panel-primary"
		Data Siswa
		<div class="panel-title pull-right">
		<a class="btn btn-warning" href="{{URL::previous()}}">Kembali</a></div>
		</div>
		<div class="panel-body">
			<form action="{{route('siswa.store')}}" method="post">
				{{csrf_field()}}
				<div class="form-group">
					<label class="control-lable">Nama</label>
					<input type="text" name="a" class="form-control" required="">
				</div>
				<div class="form-group">
				<label class="control-lable">Nama Orangtua</label>
  				<select name="b" class="form-control">
					@foreach ($ortu as $data)
	  			<option value="{{ $data->id }}">
	  			{{ $data->nama_ayah }} dan  
	  			{{ $data->nama_ibu}}</option>
					@endforeach
  				</select>
				</div>
				<div class="form-group">
					<label class="control-lable">Jenis Kelamin</label>
					<input type="text" name="c" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea class="form-control" rows="10" name="e" required=""></textarea>
					</div>
				<div class="form-group">
					<button type="submit" class="btn btn-succes">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>




			</form>


		</div>

	</div>




</div>
@endsection