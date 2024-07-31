@extends('layouts.app')

@section('content')

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start View:</strong> Front-Page</p>
@endif

<main id="main-content" class="usa-content main-content">
  <style>
    .usa-hero {
      background: url({{get_the_post_thumbnail_url(null, "full")}});
      background-position: 50%;
      background-size: cover;
    }
  </style>
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
        <h1 class="usa-hero__heading"><span class="usa-hero__heading--alt">{{ get_field('hpt_hero_callout') }}</span>{{ get_field('hpt_leading_paragraph') }}</h1>
        <p>{{ get_field('hpt_sub_paragraph') }}</p>
        @if (get_field('hpt_show_button') == true)
        <a class="usa-button" href="{{ get_field('hpt_button_url') }}">{{ get_field('hpt_button_text') }}</a>
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
  @php(the_content())
</main>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End View:</strong> Front-Page</p>
@endif

@endsection