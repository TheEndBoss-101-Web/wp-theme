@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> footer</p>
@endif

<footer class="usa-footer{{
  ($footer['size'] == 'big' ? ' usa-footer--big' : '') . 
  ($footer['size'] == 'slim' ? ' usa-footer--slim' : '')
  }}">
  <div class="grid-container usa-footer__return-to-top">
    <a href="#">Return to top</a>
  </div>
  @if ($footer['size'] == 'big')
    <div class="usa-footer__primary-section">
      <div class="grid-container">
        <div class="grid-row grid-gap">
          <div class="tablet:grid-col-8">
            <nav class="usa-footer__nav" aria-label="Footer navigation,,">
              <div class="grid-row grid-gap-4">
                <div class="mobile-lg:grid-col-6 desktop:grid-col-3">
                  <section class="usa-footer__primary-content usa-footer__primary-content--collapsible">
                    <h4 class="usa-footer__primary-link">&lt;Topic&gt;</h4>
                    <ul class="usa-list usa-list--unstyled">
                      <li class="usa-footer__secondary-link">
                        <a href="javascript:void(0);">&lt;Secondary link&gt;</a>
                      </li>
                      <li class="usa-footer__secondary-link">
                        <a href="javascript:void(0);">&lt;Secondary link&gt;</a>
                      </li>
                      <li class="usa-footer__secondary-link">
                        <a href="javascript:void(0);">&lt;Secondary link that's a bit longer than most of the others&gt;</a>
                      </li>
                      <li class="usa-footer__secondary-link">
                        <a href="javascript:void(0);">&lt;Secondary link&gt;</a>
                      </li>
                    </ul>
                  </section>
                </div>
                <div class="mobile-lg:grid-col-6 desktop:grid-col-3">
                  <section class="usa-footer__primary-content usa-footer__primary-content--collapsible">
                    <h4 class="usa-footer__primary-link">&lt;Topic&gt;</h4>
                    <ul class="usa-list usa-list--unstyled">
                      <li class="usa-footer__secondary-link">
                        <a href="javascript:void(0);">&lt;Secondary link&gt;</a>
                      </li>
                      <li class="usa-footer__secondary-link">
                        <a href="javascript:void(0);">&lt;Secondary link that's pretty long&gt;</a>
                      </li>
                      <li class="usa-footer__secondary-link">
                        <a href="javascript:void(0);">&lt;Secondary link&gt;</a>
                      </li>
                      <li class="usa-footer__secondary-link">
                        <a href="javascript:void(0);">&lt;Secondary link&gt;</a>
                      </li>
                    </ul>
                  </section>
                </div>
                <div class="mobile-lg:grid-col-6 desktop:grid-col-3">
                  <section class="usa-footer__primary-content usa-footer__primary-content--collapsible">
                    <h4 class="usa-footer__primary-link">&lt;Topic&gt;</h4>
                    <ul class="usa-list usa-list--unstyled">
                      <li class="usa-footer__secondary-link">
                        <a href="javascript:void(0);">&lt;Secondary link&gt;</a>
                      </li>
                      <li class="usa-footer__secondary-link">
                        <a href="javascript:void(0);">&lt;Secondary link&gt;</a>
                      </li>
                      <li class="usa-footer__secondary-link">
                        <a href="javascript:void(0);">&lt;Secondary link&gt;</a>
                      </li>
                      <li class="usa-footer__secondary-link">
                        <a href="javascript:void(0);">&lt;Secondary link&gt;</a>
                      </li>
                    </ul>
                  </section>
                </div>
                <div class="mobile-lg:grid-col-6 desktop:grid-col-3">
                  <section class="usa-footer__primary-content usa-footer__primary-content--collapsible">
                    <h4 class="usa-footer__primary-link">&lt;Topic&gt;</h4>
                    <ul class="usa-list usa-list--unstyled">
                      <li class="usa-footer__secondary-link">
                        <a href="javascript:void(0);">&lt;Secondary link&gt;</a>
                      </li>
                      <li class="usa-footer__secondary-link">
                        <a href="javascript:void(0);">&lt;Secondary link&gt;</a>
                      </li>
                      <li class="usa-footer__secondary-link">
                        <a href="javascript:void(0);">&lt;Secondary link&gt;</a>
                      </li>
                      <li class="usa-footer__secondary-link">
                        <a href="javascript:void(0);">&lt;Secondary link&gt;</a>
                      </li>
                    </ul>
                  </section>
                </div>
              </div>
            </nav>
          </div>
          <div class="tablet:grid-col-4">
            <div class="usa-sign-up">
              <h3 class="usa-sign-up__heading"><a id="sign-up" class="usa-anchor"></a>Sign up</h3>
              <form class="usa-form">
                <label class="usa-label" for="email" id="">Your email address</label>
                <input class="usa-input" id="email" name="email" type="email">
                <button class="usa-button" type="submit">Sign up</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  @elseif ($footer['size'] == 'med')
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
  @elseif ($footer['size'] == 'slim')
    @if (has_nav_menu('footer-primary'))
      <div class="usa-footer__primary-section">
        <div class="usa-footer__primary-container grid-row">
          <div class="mobile-lg:grid-col-8">
            @php
              wp_nav_menu(array(
                'container' => 'nav',
                'container_class' => 'usa-footer__nav',
                'container_aria_label' => 'Footer navigation',
                'menu_class' => 'grid-row grid-gap',
                'depth' => 1,
                'theme_location' => 'footer-primary',
                'walker' => new App\NASAWDS_SlimFooter_NavWalker()
              ));
            @endphp
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
  @else
    <div class="usa-footer__primary-section">
      <div class="grid-container">
        <div class="grid-row">
          <div class="grid-col-1"></div>
          <div class="grid-col-fill">
            <div class="usa-alert usa-alert--error usa-alert--slim">
              <div class="usa-alert__body">
                <p class="usa-alert__text">The footer size value in /app/View/Composers/App.php need to be set to big, med, or slim.</p>
              </div>
            </div>
          </div>
          <div class="grid-col-1"></div>
        </div>
      </div>
    </div>
  @endif
  @if ($footer['size'] != 'slim')
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
          @include('snips.footer-social-links')
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
  @else
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
  @endif
</footer>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> footer</p>
@endif