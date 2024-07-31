{{--
  Template Name: Landing Page
--}}

@extends('layouts.app')

@section('content')

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> Template: Landing Page</p>
@endif

<style>
  .usa-hero {
    background: url({{get_the_post_thumbnail_url(null, "full")}});
    background-position: 50%;
    background-size: cover;
  }
</style>

@if ( !get_field('otp_hide') )
<section class="usa-hero" aria-label="Introduction">
  <div class="grid-container">
    @if ($breadCrumsHeroLocation)
      @php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb('<div class="breadcrumbs" id="breadcrumbs">','</div><br>');
        }
      @endphp
    @endif
    <div class="usa-hero__callout">
      <h1 class="usa-hero__heading"><span class="usa-hero__heading--alt">{{ get_field('lpt_hero_callout') }}</span>{{ get_field('lpt_leading_paragraph') }}</h1>
      <p>{{ get_field('lpt_sub_paragraph') }}</p>
      @if (get_field('lpt_show_button') == true)
      <a class="usa-button" href="{{ get_field('lpt_button_url') }}">{{ get_field('lpt_button_text') }}</a>
      @endif
    </div>
    @if (!$breadCrumsHeroLocation)
      @php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb('<br><div class="breadcrumbs" id="breadcrumbs">','</div>');
        }
      @endphp
    @endif
  </div>
</section>
  <div class="usa-section">
    <div class="grid-container">
      <div class="grid-row grid-gap">
        <div id="desktop" class="usa-layout-docs__sidenav display-none desktop:display-block desktop:grid-col-3">
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
    @php
      if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('<div class="breadcrumbs" id="breadcrumbs">','</div>');
      }
    @endphp
    @include('partials.page-header')
    @includeFirst(['partials.content-page', 'partials.content'])
  </main>
@endif

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> Template: Landing Page</p>
@endif

@endsection


