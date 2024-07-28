@extends('layouts.app')

@section('content')

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start Template:</strong> front-page</p>
@endif

  <main id="main-content" class="main-content">
    @while(have_posts()) @php(the_post())
      @include('partials.content-page')
    @endwhile
  </main>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End Template:</strong> front-page</p>
@endif

@endsection