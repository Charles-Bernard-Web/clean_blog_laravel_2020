 @extends('template.index')

 @section('content')
    <h1>{{ $page->titre }}</h1>
    <div class="">
      {{ $page->texte }}
    </div>

  @endsection
