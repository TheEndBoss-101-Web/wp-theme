@extends('layouts.app')

@section('content')
@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Star Template:</strong> page</p>
@endif

@if ( !get_field('otp_hide') )
  <div class="usa-section">
    <div class="grid-container">
      <div class="grid-row grid-gap">
        <div id="desktop" class="usa-layout-docs__sidenav display-none desktop:display-block desktop:grid-col-3">
          <p class="usa-layout-docs__sidenav-title">On this page:</p>
          <?php echo('<nav class="anchorific" data-headings="'.(get_field("otp_heading_tags")).'" aria-label="Secondary navigation"></nav>'); ?>
          <?php //echo('<nav class="anchorific" data-headings="h2,h3,h4" aria-label="Secondary navigation"></nav>'); ?>
        </div>
        <main class="desktop:grid-col-9 usa-prose main-content" id="main-content">
          @include('partials.page-header')
          @includeFirst(['partials.content-page', 'partials.content'])
        </main>
      </div>
      <div id="mobile" class="usa-layout-docs__sidenav desktop:display-none">
      </div>
    </div>
  </div>
@else
  <main class="usa-section" id="main-content">
    @include('partials.page-header')
    @includeFirst(['partials.content-page', 'partials.content'])
  </main>
@endif

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End Template:</strong> page</p>
@endif

@endsection
