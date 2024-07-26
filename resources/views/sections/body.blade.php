@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> Body</p>
@endif

<body @php(body_class())>
  <a class="usa-skipnav" href="#main-content">Skip to main content</a>
  @include('components.banner')
  @php(do_action('get_header'))
  @include('sections.header')
  <div class="usa-overlay"></div>

  @yield('content') 

  @if (App\display_sidebar())
    <aside class="sidebar">
      @include('partials.sidebar')
    </aside>
  @endif

  @php(do_action('get_footer'))
  @include('sections.footer')
  @include('sections.identifier')
  @php(wp_footer())
</body>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> Body</p>
@endif