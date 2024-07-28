@extends('layouts.app')

@section('content')

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> front-page</p>
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
      <div class="usa-hero__callout">
        <h1 class="usa-hero__heading"><span class="usa-hero__heading--alt">{{ get_field('hpt_hero_callout') }}</span>{{ get_field('hpt_leading_paragraph') }}</h1>
        <p>{{ get_field('hpt_sub_paragraph') }}</p>
        @if (get_field('hpt_show_button') == true)
        <a class="usa-button" href="{{ get_field('hpt_button_url') }}">{{ get_field('hpt_button_text') }}</a>
        @endif
      </div>
    </div>
  </section>
  @php(the_content())
</main>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> front-page</p>
@endif

@endsection