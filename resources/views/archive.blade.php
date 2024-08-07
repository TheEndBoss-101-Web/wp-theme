@extends('layouts.app')

@section('content')

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start View:</strong> Archive</p>
@endif

@if ( !have_posts() )
  <div class="usa-width-one-whole alert alert-warning">
    <p class="usa-font-lead">
    {{ __('Sorry, this topic as no posts.', 'sage') }}
    </p>
    <h3>Search this site:</h3>
    @include('forms.search')
  </div>
@else
  <div class="usa-section">
    <div class="grid-container">
      <div class="grid-row grid-gap">
        <div id="desktop" class="usa-layout-docs__sidenav display-none desktop:display-block desktop:grid-col-3">
          <aside
            class="usa-in-page-nav"
            data-title-text="On this page:"
            <?php //data-heading-elements="{{ get_field("otp_heading_tags") }}"?>
            data-heading-elements="h3 h4"
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
          @php
            if ( function_exists('yoast_breadcrumb') ) {
              yoast_breadcrumb('<div class="breadcrumbs" id="breadcrumbs">','</div>');
            }
          @endphp
          <?php /*
  @if (have_posts())
    @php
      $cat = get_category( get_query_var( 'cat' ) );
      $cat_id = $cat->cat_ID;
      echo category_description( $cat_id ); 
    @endphp
  @endif*/?>
  <ul class="usa-collection">
  @while (have_posts()) @php(the_post())
    @include ('partials.content')
  @endwhile
  </ul>

  {!! get_the_posts_navigation() !!}
        </main>
      </div>
      <div id="mobile" class="usa-layout-docs__sidenav desktop:display-none">
      </div>
    </div>
  </div>
@endif

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End View:</strong> Archive</p>
@endif

@endsection