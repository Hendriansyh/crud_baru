@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Siswa</h1></center>
	<div class="panel-heading">
	<div class="panel-panel-primary"
		Data Siswa
		</div>
				
				<div class="form-group">
					<label class="control-lable">Nama</label>
					<input type="text" name="a" class="form-control" value="{{$siswas->nama}}" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Nama Orangtua</label>
					<input type="text" name="b" class="form-control" value="{{$siswas->orangtua->nama_ibu}} dan {{$siswas->orangtua->nama_ayah}}" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Jenis Kelamin</label>
					<input type="text" name="d" class="form-control" value="{{$siswas->jk}}" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea class="form-control" rows="10" name="e" readonly="">{{$siswas->alamat}}
					</textarea>
					</div>



			</form>


		</div>

	</div>




</div>
@endsection