@extends('layouts.app')

@section('content')
  <main class="usa-grid usa-section usa-content usa-layout-docs" id="main-content">

    @include('main.page-header')
  
    @if (!have_posts())
    <div class="usa-width-one-whole alert alert-warning">
      <p class="usa-font-lead">
      {{ __('Sorry, no results were found.', 'sage') }}
      </p>
      @include('components.search')
    </div>
    @endif
  
    @while(have_posts()) @php(the_post())
      @include('partials.content-search')
    @endwhile
  
    {!! get_the_posts_navigation() !!}

  </main>
@endsection