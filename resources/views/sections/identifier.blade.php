@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> identifier</p>
@endif

<div class="usa-identifier">
  <section class="usa-identifier__section usa-identifier__section--masthead" aria-label="Agency identifier,">
    <div class="usa-identifier__container">
      @if ($identifier['noLogo'] == false)
        <div class="usa-identifier__logos">
          <a href="{{ $parentagency['website'] }}" class="usa-identifier__logo">
            <img class="usa-identifier__logo-img" src="{{ $parentagency['logo'] }}" alt="{{ $parentagency['name'] }}'s logo" role="img" />
          </a>
          @if ($identifier['dualParent'] == true)
            <a href="{{ $parentagency2['website'] }}" class="usa-identifier__logo">
              <img class="usa-identifier__logo-img" src="{{ $parentagency2['logo'] }}" alt="{{ $parentagency2['name'] }}'s logo" role="img" />
            </a>
          @endif
        </div>
      @endif
      <section class="usa-identifier__identity" aria-label="Agency description">
        <p class="usa-identifier__identity-domain">{{ $site['domain'] }}{{ $site['tld'] }}</p>
        <p class="usa-identifier__identity-disclaimer">
          <span aria-hidden="true">An </span>official website of the
          <a href="{{ $parentagency['website'] }}">{{ $parentagency['name'] }}</a>
          @if ($identifier['dualParent'] == true)
            and the
            <a href="{{ $parentagency2['website'] }}">{{ $parentagency2['name'] }}</a>
          @endif
          @if ($identifier['taxpayer_disclaimer'] == true)
          . Produced and published at taxpayer expense.
          @endif
        </p>
      </section>
    </div>
  </section>
  <?php //TODO-CONFIG: Set the links.?>
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
  @if ($identifier['showusagov'] == true)
    <section class="usa-identifier__section usa-identifier__section--usagov" aria-label="U.S. government information and services,">
      <div class="usa-identifier__container">
        <div class="usa-identifier__usagov-description"> Looking for U.S. government information and services? </div>
        <a href="https://www.usa.gov/" class="usa-link">Visit USA.gov</a>
      </div>
    </section>
  @endif
</div>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> identifier</p>
@endif