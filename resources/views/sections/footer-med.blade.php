@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> footer</p>
@endif

<footer class="usa-footer">
  <div class="grid-container usa-footer__return-to-top">
    <a href="#">Return to top</a>
  </div>
  @if (has_nav_menu('footer-primary'))
  <div class="usa-footer__primary-section">
    @php
      wp_nav_menu(array(
        'container' => 'nav',
        'container_class' => 'usa-footer__nav',
        'container_aria_label' => 'Footer navigation',
        'menu_class' => 'grid-row grid-gap',
        'depth' => 1,
        'theme_location' => 'footer-primary',
        'walker' => new App\NASAWDS_MedFooter_NavWalker()
      ));
    @endphp
  </div>
  @endif
  <?php //TODO-CONFIG: Set the social links. ?>
  <div class="usa-footer__secondary-section">
    <div class="grid-container">
      <div class="grid-row grid-gap">
        <div class="usa-footer__logo grid-row mobile-lg:grid-col-6 mobile-lg:grid-gap-2">
          <div class="mobile-lg:grid-col-auto">
            <img class="usa-footer__logo-img" src="{{ $agency['logo'] }}" alt="{{ $agency['name'] }}'s logo" />
          </div>
          <div class="mobile-lg:grid-col-auto">
            <p class="usa-footer__logo-heading">{{ $agency['name'] }}</p>
          </div>
        </div>
        <div class="usa-footer__contact-links mobile-lg:grid-col-6">
          <div class="usa-footer__social-links grid-row grid-gap-1">
            <div class="grid-col-auto">
              <a class="usa-social-link" href="javascript:void(0);">
                <img class="usa-social-link__icon" src="@asset('images/usa-icons/facebook.svg')" alt="Facebook" />
              </a>
            </div>
            <div class="grid-col-auto">
              <a class="usa-social-link" href="javascript:void(0);">
                <img class="usa-social-link__icon" src="@asset('images/usa-icons/twitter.svg')" alt="Twitter" />
              </a>
            </div>
            <div class="grid-col-auto">
              <a class="usa-social-link" href="javascript:void(0);">
                <img class="usa-social-link__icon" src="@asset('images/usa-icons/youtube.svg')" alt="YouTube" />
              </a>
            </div>
            <div class="grid-col-auto">
              <a class="usa-social-link" href="javascript:void(0);">
                <img class="usa-social-link__icon" src="@asset('images/usa-icons/instagram.svg')" alt="Instagram" />
              </a>
            </div>
            <div class="grid-col-auto">
              <a class="usa-social-link" href="javascript:void(0);">
                <img class="usa-social-link__icon" src="@asset('images/usa-icons/rss_feed.svg')" alt="RSS" />
              </a>
            </div>
          </div>
          <p class="usa-footer__contact-heading"> {{ $agency['contact_center'] }} </p>
          <address class="usa-footer__address">
            <div class="usa-footer__contact-info grid-row grid-gap">
              <div class="grid-col-auto">
                <a href="tel:{{ $agency['contact_pn_link'] }}">{{ $agency['contact_pn'] }}</a>
              </div>
              <div class="grid-col-auto">
                <a href="mailto:{{ $agency['contact_email'] }}">{{ $agency['contact_email'] }}</a>
              </div>
            </div>
          </address>
        </div>
      </div>
    </div>
  </div>
</footer>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> footer</p>
@endif