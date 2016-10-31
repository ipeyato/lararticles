@extends("layouts.application")
@section("content")
<div>
	<h1>{!! $article->title !!}</h1>
	<p>{!! $article->content !!}</p>
	<i>By {!! $article->author !!}</i>
</div>

<div>
	{!! Form::open(array('route' => array('articles.destroy', $article->id), 'method' => 'delete')) !!}
	{!! link_to(route('articles.index'), "Back", ['class' => 'btn btn-raised btn-info']) !!}
	{!! link_to(route('articles.edit', $article->id), 'Edit', ['class' => 'btn btn-raised btn-warning']) !!}
    {!! link_to('exportbyId/'. $article->id, 'Export Excel', array('class' => 'btn btn-raised btn-info')) !!}
	{!! Form::submit('Delete', array('class' => 'btn btn-raised btn-danger', "onclick" => "return confirm('aslina?')")) !!}
	{!! Form::close() !!}
</div>

<div>
	<h3><i><u>Give Comments</u></i></h3>
	{!! Form::open(['route' => 'comments.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}
	<div class="form-group">
		{!! Form::label('article_id', 'Title', array('class' => 'col-lg-3 control-label')) !!}
		<div class="col-lg-9">
			{!! Form::text('article_id', $value = $article->id, array('class' => 'form-control', 'readonly')) !!}
		</div>
		<div class="clear"></div>
	</div>
	<div class="form-group">
		{!! Form::label('content', 'Content', array('class' => 'col-lg-3 control-label')) !!}
		<div class="col-lg-9">
			{!! Form::textarea('content', null, array('class' => 'form-control', 'rows' => 10, 'autofocus' => 'true')) !!}
			<div class="text-danger">{!! $errors->first('content') !!}</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="form-group">
		{!! Form::label('user', 'User', array('class' => 'col-lg-3 control-label')) !!}
		<div class="col-lg-9">
			{!! Form::text('user', null, array('class' => 'form-control')) !!}
		</div>
		<div class="clear"></div>
	</div>
	<div class="form-group">
		<div class="col-lg-3"></div>
		<div class="col-lg-9">
			{!! Form::submit('Save', array('class' => 'btn btn-raised btn-primary')) !!}
		</div>
		<div class="clear"></div>
	</div>
	{!! Form::close() !!}
</div>
@foreach($comments as $comment)
<div style="outline: 1px solid #74AD1B;">
	<p>{!! $comment->content !!}</p>
	<i>{!! $comment->user !!}</i>
</div>
@endforeach
@stop