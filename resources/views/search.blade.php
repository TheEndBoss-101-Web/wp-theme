@extends('layouts.app')

@section('content')

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start View:</strong> Search</p>
@endif

<div class="usa-section">
    <div class="grid-container">
        <div class="grid-row grid-gap">
            <main class="main-content" id="main-content">
                <div class="usa-prose">
                  @include('partials.page-header')

                  @if (!have_posts())
                  <div class="usa-width-one-whole alert alert-warning">
                    <p class="usa-font-lead">
                    {{ __('Sorry, no results were found.', 'sage') }}
                    </p>
                    @include('forms.search')
                  </div>
                  @endif

                  <ul class="usa-collection">

                  @while(have_posts()) @php(the_post())
                    @include('partials.content-search')
                  @endwhile

                  </ul>

                  {!! $pagination !!}
                </div>
            </main>
        </div>
    </div>
</div>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End View:</strong> Search</p>
@endif

@endsection