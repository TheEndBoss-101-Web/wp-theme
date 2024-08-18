<header class="usa-header{{
  (get_theme_mod('header_extended') ? ' usa-header--extended' : ' usa-header--basic') . 
  (get_theme_mod('header_UseDarkHeader') ? ' usa-header--dark' : '') . 
  (get_theme_mod('header_advanced_ProjectNameAndLogo') ? ' usa-header--advanced-name-logo' : '') . 
  (get_theme_mod('header_extended') == false && get_theme_mod('header_megamenu') == true ? ' usa-header--megamenu' : '')
  }}">
  <div class="usa-nav-container">
    <div class="usa-navbar">
      <div class="usa-logo">
        <em class="usa-logo__text">
          @if (get_theme_mod('header_advanced_ProjectNameAndLogo') == true)
            <a href="{{ esc_url(home_url('/')) }}" accesskey="1" title="Home" aria-label="Home">
              <img src="{{ get_theme_mod('project_icon') }}" alt="Site logo">
              <span class="usa-logo-main-text">{{ get_theme_mod('project_line1') }} </span><br/>{{ get_theme_mod('project_line2') }}
            </a>
          @else
            <a href="{{ esc_url(home_url('/')) }}" title="Home" aria-label="Home">{{ get_theme_mod('project_line1') }} {{ get_theme_mod('project_line2') }}</a>
          @endif
        </em>
      </div>
      <button type="button" class="usa-menu-btn">Menu</button>
    </div>
    <nav aria-label="Primary navigation" class="usa-nav">
      <button type="button" class="usa-nav__close">
        @if (get_theme_mod('header_UseDarkHeader') == true)
          <img src="@asset('images/usa-icons/close-white.svg')" role="img" alt="Close" />
        @else
          <img src="@asset('images/usa-icons/close.svg')" role="img" alt="Close" />
        @endif
      </button>
      @if (get_theme_mod('header_megamenu') == false)
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
      @if (get_theme_mod('header_extended') == true)
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