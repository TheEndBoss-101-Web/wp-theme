@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> header</p>
@endif

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

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> header</p>
@endif