@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> head</p>
@endif

<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Mobile Specific Metas
================================================== -->
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--[if lt IE 9]>
    <script src="@asset('scripts/vendor/html5shiv.js')"></script>
  <![endif]-->

  <!-- favicons
================================================== -->
  <!-- 128x128 -->
  <link rel="shortcut icon" type="image/ico" href="@asset('images/favicons/favicon.ico')" />
  <link rel="icon" type="image/png" href="@asset('images/favicons/favicon.png')" />

  <!-- 192x192, as recommended for Android
  http://updates.html5rocks.com/2014/11/Support-for-theme-color-in-Chrome-39-for-Android
  -->
  <link rel="icon" type="image/png" sizes="192x192" href="@asset('images/favicons/favicon-192.png')" />

  <!-- 57x57 (precomposed) for iPhone 3GS, pre-2011 iPod Touch and older Android devices -->
  <link rel="apple-touch-icon-precomposed" href="@asset('images/favicons/favicon-57.png')">
  <!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="@asset('images/favicons/favicon-72.png')">
  <!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and post-2011 iPod Touch -->
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="@asset('images/favicons/favicon-114.png')">
  <!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="@asset('images/favicons/favicon-144.png')">
  
  <!-- wp_head -->
  @php(wp_head())
  <!-- get_header -->
  @php(do_action('get_header'))
  <!-- HOT -->
  <?php /*
  @if (get_page_template_slug() == 'views/template-landing.blade.php')
    <style>
      body.template-landing .usa-hero{background:-webkit-linear-gradient(top,rgba(0,0,0,.7),rgba(0,0,0,.7)),#212121 url({{ get_the_post_thumbnail_url(null, 'full') }}) 50%/cover;background:-o-linear-gradient(top,rgba(0,0,0,.7) 0,rgba(0,0,0,.7) 100%),#212121 url({{ get_the_post_thumbnail_url(null, 'full') }}) 50%/cover;background:linear-gradient(180deg,rgba(0,0,0,.7),rgba(0,0,0,.7)),#212121 url({{ get_the_post_thumbnail_url(null, 'full') }}) 50%/cover;}@media screen and (min-width:1020px){body.template-landing .usa-hero{background:-webkit-linear-gradient(top,rgba(0,0,0,.8),rgba(0,0,0,.8) 10.5rem,rgba(0,0,0,.8) 0,transparent 25rem),-webkit-linear-gradient(to left, transparent 0,transparent 35%,rgba(0,0,0,.7) 50%,rgba(0,0,0,.9) 100%),#212121 url({{ get_the_post_thumbnail_url(null, 'full') }}) 50%/cover;background:-o-linear-gradient(top,rgba(0,0,0,.8) 0,rgba(0,0,0,.8) 10.5rem,rgba(0,0,0,.8) 10.5rem,transparent 25rem),-o-linear-gradient(to left, transparent 0,transparent 35%,rgba(0,0,0,.7) 50%,rgba(0,0,0,.9) 100%),#212121 url({{ get_the_post_thumbnail_url(null, 'full') }}) 50%/cover;background:linear-gradient(180deg,rgba(0,0,0,.8),rgba(0,0,0,.8) 10.5rem,rgba(0,0,0,.8) 0,transparent 25rem),linear-gradient(to left, transparent 0,transparent 35%,rgba(0,0,0,.7) 50%,rgba(0,0,0,.9) 100%),#212121 url({{ get_the_post_thumbnail_url(null, 'full') }}) 50%/cover;}}
    </style>
  @endif
  
  @if (function_exists(environment) && environment() == 'production')
  <!-- todo-config -->
  <script async id="_fed_an_ua_tag" type="text/javascript" src="https://dap.digitalgov.gov/Universal-Federated-Analytics-Min.js?agency=NASA&amp;subagency=MY-SUBAGENCY&amp;dclink=true&amp;yt=true&amp;sp=search,s"></script>
  @endif */ ?>
  
  
  <style>
    @if ($header['UseDarkHeader'] == true)
      .fixed-box--cover {
        background-color: rgb(27,27,27);
      }
    @else
      .fixed-box--cover {
        background-color: rgb(27,27,27);
      }
    @endif
    @if ($header['fixedbox'] == true)
      .usa-hero {
        padding-top: 2rem;
      }
      html {
        margin-top: 8rem !important;
      }
      @if ($header['clearBG'] == true)
        .usa-header {
          background: none;
        }
      @endif
      @if ($header['fadeBG'] == true)
        @if ($header['UseDarkHeader'] == true)
          .show-logo .usa-header {
            background: rgba(27, 27, 27, 0.8) !important;
          }
        @else
          .show-logo .usa-header {
            background: rgba(255, 255, 255, 0.8) !important;
          }
        @endif
      @endif
    @endif
  </style>
  
</head>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> head</p>
@endif