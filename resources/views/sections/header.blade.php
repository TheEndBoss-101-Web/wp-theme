@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> header</p>
@endif

<header class="usa-header {{
  ($header['extended'] ? ' usa-header--extended' : ' usa-header--basic') . 
  ($header['UseDarkHeader'] ? ' usa-header--dark' : '') . 
  ($header['advanced_ProjectNameAndLogo'] ? ' usa-header--advanced-name-logo' : '') . 
  ($header['extended'] == false && $header['megamenu'] == true ? ' usa-header--megamenu' : '')
  }}">
  <div class="usa-nav-container">
    <div class="usa-navbar">
      <div class="usa-logo">
        <em class="usa-logo__text">
          @if ($header['advanced_ProjectNameAndLogo'] == true)
            <a href="{{ esc_url(home_url('/')) }}" accesskey="1" title="Home" aria-label="Home">
              <img src="{{ $project['logo'] }}" alt="Site logo">
              <span class="usa-logo-main-text">{{ $project['line1'] }} </span><br/>{{ $project['line2'] }}
            </a>
          @else
            <a href="{{ esc_url(home_url('/')) }}" title="Home" aria-label="Home">{{ $project['name'] }}</a>
          @endif
        </em>
      </div>
      <button type="button" class="usa-menu-btn">Menu</button>
    </div>
    <nav aria-label="Primary navigation" class="usa-nav">
      <button type="button" class="usa-nav__close">
        @if ($header['UseDarkHeader'] == true)
          <img src="@asset('images/usa-icons/close-white.svg')" role="img" alt="Close" />
        @else
          <img src="@asset('images/usa-icons/close.svg')" role="img" alt="Close" />
        @endif
      </button>
      @if ($header['megamenu'] == false)
        @php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array(
              'container' => false,
              'menu_class' => 'usa-nav__primary usa-accordion',
              'theme_location' => 'primary_navigation',
              'walker' => new App\NASAWDS_BasicHeader_NavWalker()
            ));

          endif;
        @endphp
      @else
        @php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array(
              'container' => false,
              'menu_class' => 'usa-nav__primary usa-accordion',
              'theme_location' => 'primary_navigation',
              'walker' => new App\NASAWDSMegaNavwalker()
            ));
          
          endif;
        @endphp
      @endif
      @if ($header['extended'] == true)
        <div class="usa-nav__secondary">
          @php
            if (has_nav_menu('extended-header-secondary-links')) :
              wp_nav_menu(array(
                'container' => false,
                'menu_class' => 'usa-nav__secondary-links',
                'theme_location' => 'extended-header-secondary-links',
                'walker' => new App\NASAWDS_ExtendedHeader_NavWalker()
              ));
            
            endif;
          @endphp
          @include('forms.search')
        </div>
      @else
        @include('forms.search')
      @endif
    </nav>
  </div>
</header>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> header</p>
@endif