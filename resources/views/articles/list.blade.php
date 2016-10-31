{!! link_to('articles/create', 'Write Article', array('class' => 'btn btn-raised btn-success')) !!}
{!! link_to('importExport', 'Import Excel', array('class' => 'btn btn-raised btn-info')) !!}
@foreach ($articles as $article)
<div>
  <h1>{!! $article->title !!}</h1>
  <p>{!! $article->content !!}</p>
  <div class="form-group">
    <i>By {!! $article->author !!}</i>
    {!! link_to('articles/'.$article->id, 'Show', array('class' => 'btn-raised btn btn-info')) !!}
    {!! link_to('articles/'.$article->id.'/edit', 'Edit', array('class' => 'btn btn-raised btn-warning')) !!}
    <!-- {!! link_to('articles/'.$article->id, 'Delete', array('class' => 'btn btn-danger', 'method' => 'DELETE', "onclick" => "return confirm('are you sure?')")) !!} -->
    {!! Form::open(array('route' => array('articles.destroy', $article->id), 'method' => 'delete')) !!}
    {!! Form::submit('Delete', array('class' => 'btn btn-raised btn-danger', "onclick" => "return confirm('are you sure?')")) !!}
    {!! Form::close() !!}
  </div>
</div>
@endforeach
{!! $articles->render() !!}