@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> Body</p>
@endif

<body @php(body_class())>
  <a class="usa-skipnav" href="#main-content" tabindex="2">Skip to main content</a>
  @if ($header['fixedbox'] == true)
    <div class="fixed-box--cover"></div>
    <div class="fixed-box">
  @endif

  @if ($officialBanner['enabled'] == true)
    @include('components.official_banner')
  @endif

  @php(do_action('get_header'))
  
  @if ($header['enabled'] == true)
    @include('sections.header')
  @endif

  @if ($header['fixedbox'] == true)</div>@endif
  <div class="usa-overlay"></div>

  @yield('content') 

  @if (App\display_sidebar())
    <aside class="sidebar">
      @include('sections.sidebar')
    </aside>
  @endif

  @php(do_action('get_footer'))
  @if ($footer['enabled'] == true)
    @include('sections.footer')
  @endif
  @if ($identifier['enabled'] == true)
    @include('sections.identifier')
  @endif
  @php(wp_footer())
</body>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> Body</p>
@endif