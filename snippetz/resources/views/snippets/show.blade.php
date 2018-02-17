@extends('layouts.app')

@section('content')

  @include('partials.forms.edit_snippet_title')
  <br>

  <small>{{ $snippet->created_at }} </small>
  <p>language: {{ $snippet->language->name }}</p>
  <hr>

  @include('partials.forms.edit_snippet_description')
  <hr>

  @include('partials.forms.edit_snippet_snippet')

  @include('partials.show_examples')

  @include('partials.show_tags')

  <br><br><br>

  <h2 data-toggle="collapse" href="#collapseExample" aria-expanded="false">Add Examples and use cases of snippet</h2>

  <div class="collapse" id="collapseExample">
    @include('partials.forms.create_example')
  </div>

  <br>

  flash message<br>
  Need validation<br>

@endsection

@section('scripts')
  <script src={{ asset('/js/autosize.js') }}></script>
	<script>
		autosize(document.querySelectorAll('textarea'));
    autosize($('.editor'));
	</script>

  <script>

    $description = $('#form-description');
    $description.find('.btn').hide();

    $description.find('.description').keyup(function() {
      $description.find('.btn').show();
    });

    function updateSnippet($form_id, $text_class) {

      // make this a function
      $form = $($form_id);
      // // get title value first incase cancel is selected
      field_val = $($text_class).val();

      $form.find('.btn').hide();

      $form.find($text_class).keyup(function() {
        $form.find('.btn').show();
      });

      // click cancel
      $form.find('.cancel').on('click', function() {
        $form.find('.btn').hide();
        $($text_class).val(field_val);
      });

    }

    updateSnippet('#form-title', '.snippet-title');



  </script>

@endsection
