@extends('layouts.app')

@section('content')
@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Star View:</strong> Page</p>
@endif

@if ( !get_field('otp_hide') )
  <div class="usa-section">
    <div class="grid-container">
      <div class="grid-row grid-gap">
        <div id="desktop" class="usa-layout-docs__sidenav display-none desktop:display-block desktop:grid-col-3">
          <!--p class="usa-layout-docs__sidenav-title">On this page:</p -->
          <?php // echo('<nav class="anchorific" data-headings="'.(get_field("otp_heading_tags")).'" aria-label="Secondary navigation"></nav>'); ?>
          <?php //echo('<nav class="anchorific" data-headings="h2,h3,h4" aria-label="Secondary navigation"></nav>'); ?>
          <aside
            class="usa-in-page-nav"
            data-title-text="On this page:"
            data-heading-elements="{{ get_field("otp_heading_tags") }}"
            data-title-heading-level=""
            data-scroll-offset="0"
            data-root-margin="0px 0px 0px 0px"
            data-threshold="1"

            style="top: {{
            ($header['fixedbox'] ? '9rem' : '2rem')
            }};"
          >
          </aside>
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
  <main class="usa-section main-content" id="main-content">
    @include('partials.page-header')
    @includeFirst(['partials.content-page', 'partials.content'])
  </main>
@endif

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End View:</strong> Page</p>
@endif

@endsection
