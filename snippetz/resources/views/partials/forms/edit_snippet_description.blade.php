{{-- update the description of the snippet --}}
{!! Form::open(['method'=>'PATCH', 'route' => ['snippets.update', $snippet->id ], 'id' => 'form-description'])  !!}

  <div class="form-group">
    {{ Form::label('description', 'description') }}
    <textarea name="description" id="description" class="form-control description">{{$snippet->description}}</textarea>
  </div>

  {{ Form::submit('Update', ['class' => 'btn btn-sm btn-success']) }}

{!! Form::close() !!}
