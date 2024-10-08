<body @php(body_class())>
  <a class="usa-skipnav" href="#main-content" tabindex="2">Skip to main content</a>
  @if (get_theme_mod('header_fixedbox', true) == true)
    @if (get_theme_mod('header_enabled', true) == true)
      <div class="fixed-box--cover"></div>
    @endif
    <div class="fixed-box">
  @endif

  @if (get_theme_mod('officialBanner_enabled', true) == true)
    @include('components.official_banner')
  @endif


  @if (get_theme_mod('site_alert_enabled', false) == true)
    @include('components.site_alert')
  @endif

  @php(do_action('get_header'))

  @if (get_theme_mod('header_enabled', true) == true)
    @include('sections.header')
  @endif

  @if (get_theme_mod('header_fixedbox', true) == true)</div>@endif
  <div class="usa-overlay"></div>

  @yield('content') 

  @if (App\display_sidebar())
    <aside class="sidebar">
      @include('sections.sidebar')
    </aside>
  @endif

  @php(do_action('get_footer'))
  @if (get_theme_mod('footer_enabled', true) == true)
    @include('sections.footer')
  @endif
  @if (get_theme_mod('identifier_enabled', true) == true)
    @include('sections.identifier')
  @endif
  @php(wp_footer())
</body>