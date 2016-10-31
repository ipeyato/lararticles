@extends("layouts.application")
@section("content")
<h1>Articles Page</h1>
<!-- <div class="form-group">
	{!! link_to('articles/create', 'Write Article', array('class' => 'btn btn-raised btn-success')) !!}
	{!! link_to('importExport', 'Import Excel', array('class' => 'btn btn-raised btn-info')) !!}
	{!! link_to('exportExcel', 'Export Excel', array('class' => 'btn btn-raised btn-info')) !!}
</div> -->
<div id="list-article">
	@include('articles.list')
</div>
@stop