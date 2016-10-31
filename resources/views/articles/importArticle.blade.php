@extends("layouts.application")

@section('content')
{!! Form::open(['action' => 'ImportExportController@importExcel', 'class' => 'form-horizontal', 'role' => 'form', 'method'=>'post','files' => true] ) !!}
<div class="form-group">
	{!! Form::label('article', 'Article', array('class' => 'col-lg-3 control-label')) !!}
	<div class="col-lg-9">
		{!! Form::file('article', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}
		<input type="text" readonly="" class="form-control" placeholder="Browse to import excel..">
		<div class="text-danger">{!! $errors->first('article') !!}</div>
	</div>
	<div class="clear"></div>
</div>

<div class="form-group">
	<div class="col-lg-3"></div>
	<div class="col-lg-9">
		{!! Form::submit('Save', array('class' => 'btn btn-raised btn-primary')) !!}
		{!! link_to(route('articles.index'), "Back", ['class' => 'btn btn-raised btn-info']) !!}
	</div>
	<div class="clear"></div>
</div>
 {!! Form::close() !!}
@stop