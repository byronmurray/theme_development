{!! Form::open(['method'=>'PATCH', 'route' => ['snippets.update', $snippet->id ], 'id' => 'form-title'])  !!}


  {{ Form::text('title', $snippet->title, ['class' => 'form-control mr-sm-2 snippet-title', 'id' => 'snippet-title']) }}

  {{ Form::submit('Update', ['class' => 'btn btn-sm btn-success ']) }}

  <a href="#" class="btn btn-sm btn-info ml-2 cancel">Cancel</a>


{!! Form::close() !!}
