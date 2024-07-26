@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> footer</p>
@endif

<footer class="usa-footer">
  <div class="grid-container usa-footer__return-to-top">
    <a href="#">Return to top</a>
  </div>
  <?php //TODO-CONFIG: Set the links. ?>
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
        <?php //TODO-CONFIG: Set the social links. ?>
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