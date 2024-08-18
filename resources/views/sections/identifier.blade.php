<div class="usa-identifier">
  <section class="usa-identifier__section usa-identifier__section--masthead" aria-label="Agency identifier,">
    <div class="usa-identifier__container">
      @if (get_theme_mod('identifier_noLogo', false) == false)
        <div class="usa-identifier__logos">
          <a href="{{ get_theme_mod('parentagency_website', 'agency.gov') }}" class="usa-identifier__logo">
            <img class="usa-identifier__logo-img" src="{{ get_theme_mod('parentagency_logo', \Roots\asset('images/circle-gray-20.svg')->uri()) }}" alt="{{ get_theme_mod('parentagency_name', 'Parent Agency') }}'s logo" role="img" />
          </a>
          @if (get_theme_mod('identifier_dualParent', false) == true)
            <a href="{{ get_theme_mod('parentagency2_website', 'agency2.gov') }}" class="usa-identifier__logo">
              <img class="usa-identifier__logo-img" src="{{ get_theme_mod('parentagency2_logo', \Roots\asset('images/circle-gray-20.svg')->uri()) }}" alt="{{ get_theme_mod('parentagency2_name', 'Parent Agency2') }}'s logo" role="img" />
            </a>
          @endif
        </div>
      @endif
      <section class="usa-identifier__identity" aria-label="Agency description">
        <p class="usa-identifier__identity-domain">{{ $_SERVER['SERVER_NAME'] }}</p>
        <p class="usa-identifier__identity-disclaimer">
          <span aria-hidden="true">An </span>official website of the
          <a href="{{ get_theme_mod('parentagency_website', 'agency.gov') }}">{{ get_theme_mod('parentagency_name', 'Parent Agency') }}</a>
          @if (get_theme_mod('identifier_dualParent', false) == true)
            and the
            <a href="{{ get_theme_mod('parentagency2_website', 'agency2.gov') }}">{{ get_theme_mod('parentagency2_name', 'Parent Agency2') }}</a>
          @endif
          @if (get_theme_mod('identifier_taxpayer_disclaimer', false) == true)
          . Produced and published at taxpayer expense.
          @endif
        </p>
      </section>
    </div>
  </section>
  @if (has_nav_menu('identifier-primary'))
  <nav class="usa-identifier__section usa-identifier__section--required-links" aria-label="Important links,">
    <div class="usa-identifier__container">
      @php
        wp_nav_menu(array(
          'container' => false,
          'menu_class' => 'usa-identifier__required-links-list',
          'depth' => 1,
          'theme_location' => 'identifier-primary',
          'walker' => new App\NASAWDS_Identifier_NavWalker()
        ));
      @endphp
      <!--ul class="usa-identifier__required-links-list">
        <li class="usa-identifier__required-links-item">
          <a href="javascript:void(0)" class="usa-identifier__required-link usa-link">About &lt;Parent shortname&gt;</a>
        </li>
        <li class="usa-identifier__required-links-item">
          <a href="" class="usa-identifier__required-link usa-link">Accessibility statement</a>
        </li>
        <li class="usa-identifier__required-links-item">
          <a href="" class="usa-identifier__required-link usa-link">FOIA requests</a>
        </li>
        <li class="usa-identifier__required-links-item">
          <a href="" class="usa-identifier__required-link usa-link">No FEAR Act data</a>
        </li>
        <li class="usa-identifier__required-links-item">
          <a href="" class="usa-identifier__required-link usa-link">Office of the Inspector General</a>
        </li>
        <li class="usa-identifier__required-links-item">
          <a href="" class="usa-identifier__required-link usa-link">Performance reports</a>
        </li>
        <li class="usa-identifier__required-links-item">
          <a href="" class="usa-identifier__required-link usa-link">Privacy policy</a>
        </li>
      </ul-->
    </div>
  </nav>
  @endif
  @if (get_theme_mod('identifier_showusagov', false) == true)
    <section class="usa-identifier__section usa-identifier__section--usagov" aria-label="U.S. government information and services,">
      <div class="usa-identifier__container">
        <div class="usa-identifier__usagov-description"> Looking for U.S. government information and services? </div>
        <a href="https://www.usa.gov/" class="usa-link">Visit USA.gov</a>
      </div>
    </section>
  @endif
</div>