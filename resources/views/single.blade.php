@extends('layouts.app')

@section('content')

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start View:</strong> Single</p>
@endif

<div class="usa-section">
  <div class="grid-container">
    <div class="grid-row grid-gap">
      <main class="desktop:grid-col-12 usa-prose main-content" id="main-content">
        @while (have_posts()) @php(the_post())
          @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
        @endwhile
      </main>
    </div>
  </div>
</div>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End View:</strong> Single</p>
@endif

@endsection