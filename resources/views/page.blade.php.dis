@extends('layouts.app')

@section('content')
  <main class="usa-grid usa-section usa-content usa-layout-docs" id="main-content">
    <?php $gridSize = 'one-whole'; ?>
    <?php if ( !get_field('otp_hide') ) {
      $gridSize = 'three-fourths';
      echo('<aside class="usa-width-one-fourth usa-layout-docs-sidenav sticky usa-serif-body">');
      if (trim(get_field('navigation_type')) == 'multiple_page') {
        App\wpb_list_child_pages();
      } else {
        echo('<p class="usa-layout-docs-sidenav-title">On this page:</p>');
        //echo('<nav class="anchorific" data-headings="'.(get_field("otp_heading_tags")).'"></nav>');
        echo('<nav class="anchorific" data-headings="h2,h3,h4"></nav>');
      }
      echo('</aside>');
    }
    echo('<div class="usa-width-'.$gridSize.'usa-layout-docs-main_content usa-serif-body">');
    while (have_posts()) {
      the_post();
      if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('<div class="breadcrumbs" id="breadcrumbs">','</div>');
      }
    ?>
    
      @include('partials.page-header')
      @includeFirst(['partials.content-page', 'partials.content'])
    <?php } ?>
    </div>
  </main>
@endsection
