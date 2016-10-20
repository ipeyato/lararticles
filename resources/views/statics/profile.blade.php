@extends('layouts.application')

@section('title', 'profile')

@section('content')
<div class="row">
	<div class="col-md-4">
			<h2><strong>ipey</strong>ato</h2>
			<img src="{{ asset("/assets/images/myphoto.jpg")}}" class="img-circle" alt="myphoto" width="100" height="100">
	</div>
	<div class="col-md-8">
		<table class="table table-striped">
			<tr>
				<th>Nama</th>
				<td>Ato Supriyanto</td></tr>
			</tr>
			<tr>
				<th>Tempat, tanggal lahir</th>
				<td>Bandung, 27 Agustus 1988</td>
			</tr>
			<tr>
				<th>Jenis Kelamin</th>
				<td>Pria</td>
			</tr>
			<tr>
				<th>Alamat</th>
				<td>Jl.Paledang</td>
			</tr>
		</table>	
	</div>
</div>
@stop