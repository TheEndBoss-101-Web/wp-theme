@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> footer</p>
@endif

<footer class="usa-footer">
  <div class="grid-container usa-footer__return-to-top">
    <a href="#">Return to top</a>
  </div>
  <?php //TODO-CONFIG: Set the links. ?>

  @if (has_nav_menu('footer-primary'))
  <div class="usa-footer__primary-section">
    <div class="usa-footer__primary-container grid-row">
      <div class="mobile-lg:grid-col-8">
        <nav class="usa-footer__nav" aria-label="Footer navigation">
          @php
            wp_nav_menu(array(
              'container' => false,
              'menu_class' => 'grid-row grid-gap',
              'depth' => 1,
              'theme_location' => 'footer-primary',
              'walker' => new App\NASAWDS_SlimFooter_NavWalker()
            ));
          @endphp
        </nav>
      </div>
      <div class="mobile-lg:grid-col-4">
        <address class="usa-footer__address">
          <div class="grid-row grid-gap">
            <div class="grid-col-auto mobile-lg:grid-col-12 desktop:grid-col-auto">
              <div class="usa-footer__contact-info">
                <a href="tel:{{ $agency['contact_pn_link'] }}">{{ $agency['contact_pn'] }}</a>
              </div>
            </div>
            <div class="grid-col-auto mobile-lg:grid-col-12 desktop:grid-col-auto">
              <div class="usa-footer__contact-info">
                <a href="mailto:{{ $agency['contact_email'] }}">{{ $agency['contact_email'] }}</a>
              </div>
            </div>
          </div>
        </address>
      </div>
    </div>
  </div>
  @endif
  <?php //TODO-CONFIG: Set the social links. ?>
  <div class="usa-footer__secondary-section">
    <div class="grid-container">
    <div class="usa-footer__logo grid-row grid-gap-2">
        <div class="grid-col-auto">
          <img class="usa-footer__logo-img" src="{{ $agency['logo'] }}" alt="{{ $agency['name'] }}'s logo">
        </div>
        <div class="grid-col-auto">
          <p class="usa-footer__logo-heading">{{ $agency['contact_center'] }}</p>
        </div>
      </div>
    </div>
  </div>
</footer>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> footer</p>
@endif