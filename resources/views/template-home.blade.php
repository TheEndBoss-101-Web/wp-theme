{{--
  Template Name: Home Page
--}}

@extends('layouts.app')

@section('content')

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> Template: Home Page</p>
@endif

<main id="main-content" class="usa-content main-content">
  <style>
    //.usa-hero {
    //  background: -webkit-linear-gradient( top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), #212121 url({{get_the_post_thumbnail_url(null, "full")}}) 50% / cover;
    //  background: -o-linear-gradient(top, rgba(0, 0, 0, 0.7) 0,  rgba(0, 0, 0, 0.7) 100% ), #212121 url({{get_the_post_thumbnail_url(null, "full")}}) 50% / cover;
    //  background: linear-gradient(180deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), #212121 url({{get_the_post_thumbnail_url(null, "full")}}) 50% / cover;
    //}

    //@media screen and (min-width: 1020px) {
    //  .usa-hero {
    //    background: -webkit-linear-gradient( top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) 10.5rem, rgba(0, 0, 0, 0.8) 0, transparent 25rem ), -webkit-linear-gradient(to left, transparent 0, transparent 35%, rgba( 0, 0, 0, 0.7 ) 50%, rgba(0, 0, 0, 0.9) 100%), #212121 url({{get_the_post_thumbnail_url(null, "full")}}) 50% / cover;
    //    background: -o-linear-gradient( top, rgba(0, 0, 0, 0.8) 0, rgba(0, 0, 0, 0.8) 10.5rem, rgba(0, 0, 0, 0.8) 10.5rem, transparent 25rem ), -o-linear-gradient(to left, transparent 0, transparent 35%, rgba( 0, 0, 0, 0.7 ) 50%, rgba(0, 0, 0, 0.9) 100%), #212121 url({{get_the_post_thumbnail_url(null, "full")}}) 50% / cover;
    //    background: linear-gradient( 180deg, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) 10.5rem, rgba(0, 0, 0, 0.8) 0, transparent 25rem ), linear-gradient( to left, transparent 0, transparent 35%, rgba(0, 0, 0, 0.7) 50%, rgba(0, 0, 0, 0.9) 100% ), #212121 url({{get_the_post_thumbnail_url(null, "full")}}) 50% / cover;
    //  }
    //}
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
  <?php /*
  <section class="grid-container usa-section">
    <div class="grid-row grid-gap">
      <div class="tablet:grid-col-4">
        <h2 class="font-heading-xl margin-top-0 tablet:margin-bottom-0"> A tagline highlights your approach </h2>
      </div>
      <div class="tablet:grid-col-8 usa-prose">
        <p> The tagline should inspire confidence and interest, focusing on the value that your overall approach offers to your audience. Use a heading typeface and keep your tagline to just a few words, and don’t confuse or mystify. </p>
        <p> Use the right side of the grid to explain the tagline a bit more. What are your goals? How do you do your work? Write in the present tense, and stay brief here. People who are interested can find details on internal pages. </p>
      </div>
    </div>
  </section>
  <section class="usa-graphic-list usa-section usa-section--dark">
    <div class="grid-container">
      <div class="usa-graphic-list__row grid-row grid-gap">
        <div class="usa-media-block tablet:grid-col">
          <img class="usa-media-block__img" src="[xyz-ips snippet="circle"]" alt="Alt text" />
          <div class="usa-media-block__body">
            <h2 class="usa-graphic-list__heading"> Graphic headings can vary. </h2>
            <p> Graphic headings can be used a few different ways, depending on what your landing page is for. Highlight your values, specific program areas, or results. </p>
          </div>
        </div>
        <div class="usa-media-block tablet:grid-col">
          <img class="usa-media-block__img" src="/assets/img/circle-124.png" alt="Alt text" />
          <div class="usa-media-block__body">
            <h2 class="usa-graphic-list__heading"> Stick to 6 or fewer words. </h2>
            <p> Keep body text to about 30 words. They can be shorter, but try to be somewhat balanced across all four. It creates a clean appearance with good spacing. </p>
          </div>
        </div>
      </div>
      <div class="usa-graphic-list__row grid-row grid-gap">
        <div class="usa-media-block tablet:grid-col">
          <img class="usa-media-block__img" src="/assets/img/circle-124.png" alt="Alt text" />
          <div class="usa-media-block__body">
            <h2 class="usa-graphic-list__heading"> Never highlight anything without a goal. </h2>
            <p> For anything you want to highlight here, understand what your users know now, and what activity or impression you want from them after they see it. </p>
          </div>
        </div>
        <div class="usa-media-block tablet:grid-col">
          <img class="usa-media-block__img" src="/assets/img/circle-124.png" alt="Alt text" />
          <div class="usa-media-block__body">
            <h2 class="usa-graphic-list__heading">Could also have 2 or 6.</h2>
            <p> In addition to your goal, find out your users’ goals. What do they want to know or do that supports your mission? Use these headings to show those. </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="test-section-id" class="usa-section">
    <div class="grid-container">
      <h2 class="font-heading-xl margin-y-0">Section heading</h2>
      <p class="usa-intro"> Everything up to this point should help people understand your agency or project: who you are, your goal or mission, and how you approach it. Use this section to encourage them to act. Describe why they should get in touch here, and use an active verb on the button below. “Get in touch,” “Learn more,” and so on. </p>
      <a class="usa-button usa-button--big" href="">Call to action</a>
    </div>
  </section> */ ?>
</main>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> Template: Home Page</p>
@endif

@endsection


