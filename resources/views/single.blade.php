@extends('layouts.app')

@section('content')

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start Template:</strong> single</p>
@endif

<div class="usa-section">
  <div class="grid-container">
    <div class="grid-row grid-gap">
      <div id="desktop" class="usa-layout-docs__sidenav display-none desktop:display-block desktop:grid-col-3">
        <p class="usa-layout-docs__sidenav-title">On this page:</p>
        <?php //echo('<nav class="anchorific" data-headings="'.(get_field("otp_heading_tags")).'" aria-label="Secondary navigation"></nav>'); ?>
        <?php // echo('<nav class="anchorific" data-headings="" aria-label="Secondary navigation"></nav>'); ?>
      </div>
      <main class="desktop:grid-col-9 usa-prose main-content" id="main-content">
        @while (have_posts()) @php(the_post())
          @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
        @endwhile
      </main>
    </div>
    <div id="mobile" class="usa-layout-docs__sidenav desktop:display-none">
    </div>
  </div>
</div>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End Template:</strong> single</p>
@endif

@endsection