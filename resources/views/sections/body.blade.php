<body @php(body_class())>
  <a class="usa-skipnav" href="#main-content" tabindex="2">Skip to main content</a>
  @if (get_theme_mod('header_fixedbox') == true)
    @if (get_theme_mod('header_enabled') == true)
      <div class="fixed-box--cover"></div>
    @endif
    <div class="fixed-box">
  @endif

  @if (get_theme_mod('officialBanner_enabled') == true)
    @include('components.official_banner')
  @endif
  @php(do_action('get_header'))
  
  @if (get_theme_mod('header_enabled') == true)
    @include('sections.header')
  @endif

  @if (get_theme_mod('header_fixedbox') == true)</div>@endif
  <div class="usa-overlay"></div>

  @yield('content') 

  @if (App\display_sidebar())
    <aside class="sidebar">
      @include('sections.sidebar')
    </aside>
  @endif

  @php(do_action('get_footer'))
  @if (get_theme_mod('footer_enabled') == true)
    @include('sections.footer')
  @endif
  @if (get_theme_mod('identifier_enabled') == true)
    @include('sections.identifier')
  @endif
  @php(wp_footer())
</body>