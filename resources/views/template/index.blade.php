{{--
  ./resources/views/template/index.blade.php
--}}
<!DOCTYPE html>
<html lang="en">

  <head>
    @include('template.partials._head')
  </head>

  <body>
    @include('template.partials._nav')

    <!-- CONTENU -->
    <main>
      @yield('content')
      <hr>
    </main>

    @include('template.partials._footer')

    @include('template.partials._scripts')

  </body>

</html>
