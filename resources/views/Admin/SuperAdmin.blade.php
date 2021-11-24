@extends('layouts.super')

@section('content')


<h1 class="welcome">Welcome to Super admin page</h1>
<h6 class="welcomeh6">Make changes to the website here!</h6>


<!-- Create the editor container -->
<div id="editor" class="card">
  <p>Hello World!</p>
  <p>Some initial <strong>bold</strong> text</p>
  <p><br></p>
</div>


@endsection


@section('scripts')

<!-- Initialize Quill editor -->
<script>
  var quill = new Quill('#editor', {
    modules: {
    toolbar: [
      [{ header: [1, 2, false] }],
      ['bold', 'italic', 'underline'],
      ['image', 'code-block']
    ]
  },
  placeholder: 'Compose an epic...',
    theme: 'snow'
  });
</script>
@endsection

