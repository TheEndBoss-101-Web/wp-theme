@extends('layouts.app')

@section('content')

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start Template:</strong> index</p>
@endif

@if ( !have_posts() )
    <div class="usa-width-one-whole alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
@else
  <div class="usa-section">
    <div class="grid-container">
      <div class="grid-row grid-gap">
        <div id="desktop" class="usa-layout-docs__sidenav display-none desktop:display-block desktop:grid-col-3">
          <p class="usa-layout-docs__sidenav-title">On this page:</p>
          <?php //echo('<nav class="anchorific" data-headings="'.(get_field("otp_heading_tags")).'" aria-label="Secondary navigation"></nav>'); ?>
          <?php echo('<nav class="anchorific" data-headings="h2" aria-label="Secondary navigation"></nav>'); ?>
        </div>
        <main class="desktop:grid-col-9 usa-prose main-content" id="main-content">
          @while (have_posts()) @php(the_post())
            @include('partials.page-header')
            @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
          @endwhile

          {!! get_the_posts_navigation() !!}
        </main>
      </div>
      <div id="mobile" class="usa-layout-docs__sidenav desktop:display-none">
      </div>
    </div>
  </div>
@endif

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End Template:</strong> index</p>
@endif

@endsection