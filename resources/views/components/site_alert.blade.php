<section class="usa-site-alert{{
  (get_theme_mod('site_alert_type', 'info') == false ? ' usa-site-alert--info' : ' usa-site-alert--emergency') . 
  (get_theme_mod('stie_alert_noheading', false) == true ? ' usa-site-alert--no-heading' : '') . 
  (get_theme_mod('stie_alert_slim', true) == true ? ' usa-site-alert--slim' : '') . 
  (get_theme_mod('stie_alert_noicon', false) == true ? ' usa-site-alert--no-icon' : '')
  }}" aria-label="Site alert">
  <div class="usa-alert">
    <div class="usa-alert__body">
      @if (get_theme_mod('stie_alert_noheading', false) == false && get_theme_mod('stie_alert_slim', false) == false )
        <h4 class="usa-alert__heading">{{ get_theme_mod('site_alert_heading', 'Short alert message heading') }}</h4>
      @endif
      <p class="usa-alert__text">
        {{ get_theme_mod('site_alert_body', 'Additional context and followup information') }}
      </p>
    </div>
  </div>
</section>