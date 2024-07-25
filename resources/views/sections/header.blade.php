<?php
/*<header class="usa-header usa-header-basic usa-header-dark" role="banner">
  <div class="usa-nav-container">
    <div class="usa-navbar">
      <div class="usa-logo" id="logo">
        <em class="usa-logo-text">
          <a href="{{ esc_url(home_url('/')) }}" accesskey="1" title="Home" aria-label="Home">
            <img src="@asset('images/brand/logo.svg')" alt="Site logo">
            <!-- todo-config -->
            <span class="usa-logo-main-text">Anomaly </span><br/>Research Center</a>
        </em>
      </div>
      <button class="usa-menu-btn">Menu</button>
    </div>
    <nav role="navigation" class="usa-nav usa-nav-dark">
      <button class="usa-nav-close">
        <img src="@asset('images/close.svg')" alt="close">
      </button>
      @php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array(
            'theme_location' => 'primary_navigation',
            'container' => false,
            'menu_class' => 'usa-nav-primary usa-accordion',
            'link_before' => '<span>',
            'link_after' => '</span>',
            //'fallback_cb' => 'default_header_nav',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            //'walker' => new App\NASAWDSBasicNavwalker()
          ));
        endif;
      @endphp
      @include('components.search')
    </nav>
  </div>
</header>
*/ ?>

<header class="usa-header--dark usa-header usa-header--basic">
  <div class="usa-nav-container">
    <div class="usa-navbar">
      <div class="usa-logo">
        <em class="usa-logo__text">
            <a href="{{ esc_url(home_url('/')) }}" accesskey="1" title="Home" aria-label="Home">

             <!--div class="usa-logo" id="basic-logo">
              <img alt="10 x home" width="72" height="36" src="@asset('images/logo-nasa.svg')">
            </div-->
              <img src="@asset('images/logo-nasa.svg')" alt="Site logo">
              <span class="usa-logo-main-text">Project </span><br/>Title
            </a>
          <!--a href="{{ esc_url(home_url('/')) }}" title="<Project title>">&lt;Project title&gt;</a-->
        </em>
      </div>
      <button type="button" class="usa-menu-btn">Menu</button>
    </div>
    <nav aria-label="Primary navigation" class="usa-nav">
      <button type="button" class="usa-nav__close">
        <img src="@asset('images/usa-icons/close-white.svg')" role="img" alt="Close" />
      </button>
      @php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array(
            'container' => false,
            'menu_class' => 'usa-nav__primary usa-accordion',
            'theme_location' => 'primary_navigation',
            'walker' => new App\NASAWDS_BasicNavWalker()
          ));

        endif;
      @endphp
      @include('forms.search')
    </nav>
  </div>
</header>