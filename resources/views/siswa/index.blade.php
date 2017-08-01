@extends('layouts.master')
@section('isi')
	<div class="row">
	<center><h1>Data Siswa</h1></center>
	<div class="panel panel-primary">
		<div class="panel panel-primary">
		<div class="panel panel-heading">Data Siswa</div>
		<div class="panel panel-heading-right">
		<center>
		<a class="btn btn-success" href="/siswa/create">Tambah Data</a></div></center>
		<div class="panel-body">	
				<table class="table">
					<thread>
						<tr>
							<th>Nama</th>
							<th>Nama OrangTua</th>
							<th>Alamat</th>
							<th>Jenis Kelamin</th>
							<th colspan="2">Action</th>
						</tr>
					</thread>
					<tbody>
						@foreach($siswas as $data)
						<tr>
							<td>{{$data->nama}}</td>
							<td>{{$data->orangtua->nama_ayah}} dan {{$data->orangtua->nama_ibu}}</td>
							<td>{{$data->alamat}}</td>
							<td>{{$data->jk}}</td>
							<td>
								<a class="btn btn-warning" href="/siswa/{{$data->id}}/edit">Edit</a></td> |
								<td>
								<a class="btn btn-primary" href="/siswa/{{$data->id}}">Show</a></td> |
								<td>
								<form action="{{route('siswa.destroy',$data->id)}}" method="post">
								<input name="_method" type="hidden" value="DELETE">
								<input name="_token" type="hidden">
								<input class="btn btn-danger" type="submit" value="Delete">
								{{csrf_field()}}
</form>								
								



							</td>
							</tr>
							@endforeach
					</tbody>




				</table>


		</div>








	</div>






</div>
@endsection