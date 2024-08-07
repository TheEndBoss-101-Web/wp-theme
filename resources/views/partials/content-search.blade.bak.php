@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start:</strong> content-search</p>
@endif
<article @php(post_class())>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    @if (get_post_type() === 'post')
      @includeWhen(get_post_type() === 'post', 'partials.entry-meta')
    @endif
  </header>
  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End:</strong> content-search</p>
@endif


<div class="grid-row grid-gap">
  <div class="tablet:grid-col-6">
    <h3 class="site-preview-heading margin-top-0"><a id="default" class="usa-anchor"></a>Default</h3>
    <ul class="usa-collection">
      <li class="usa-collection__item">
        <div class="usa-collection__body">
          <h4 class="usa-collection__heading">
            <a class="usa-link" href="https://trumpadministration.archives.performance.gov/presidents-winners-press-release/">Gears of Government President’s Award winners</a>
          </h4>
          <p class="usa-collection__description">
            Today, the Administration announces the winners of the Gears of
            Government President’s Award. This program recognizes the contributions
            of individuals and teams across the federal workforce who make a
            profound difference in the lives of the American people.
          </p>
          <ul class="usa-collection__meta" aria-label="More information">
            <li class="usa-collection__meta-item">
              By Sondra Ainsworth and Constance Lu
            </li>
            <li class="usa-collection__meta-item">
              <time datetime="2020-09-30T12:00:00+01:00">September 30, 2020</time>
            </li>
          </ul>
          <ul class="usa-collection__meta" aria-label="Topics">
            <li class="usa-collection__meta-item usa-tag usa-tag--new">New</li>
            <li class="usa-collection__meta-item usa-tag">PMA</li>
            <li class="usa-collection__meta-item usa-tag">OMB</li>
          </ul>
        </div>
      </li>
      <li class="usa-collection__item">
        <div class="usa-collection__body">
          <h4 class="usa-collection__heading">
            <a class="usa-link" href="https://trumpadministration.archives.performance.gov/sba-wosb-dashboard/">Women-owned small business dashboard</a>
          </h4>
          <p class="usa-collection__description">
            In honor of National Women’s Small Business Month, we’ve partnered with
            SBA’s Office of Government Contracting and Business Development and
            Office of Program Performance, Analysis, and Evaluation to highlight the
            Women-Owned Small Businesses (WOSBs) data dashboard!
          </p>
          <ul class="usa-collection__meta" aria-label="More information">
            <li class="usa-collection__meta-item">By Constance Lu</li>
            <li class="usa-collection__meta-item">
              <time datetime="2020-09-30T12:00:00+01:00">September 30, 2020</time>
            </li>
          </ul>
          <ul class="usa-collection__meta" aria-label="Topics">
            <li class="usa-collection__meta-item usa-tag">SBA</li>
          </ul>
        </div>
      </li>
      <li class="usa-collection__item">
        <div class="usa-collection__body">
          <h4 class="usa-collection__heading">
            <a class="usa-link" href="https://trumpadministration.archives.performance.gov/September-2020-Updates-Show-Progress/">September 2020 updates show progress on cross-agency and agency
            priority goals</a>
          </h4>
          <p class="usa-collection__description">
            Today, we published progress updates for both Cross-Agency Priority
            (CAP) Goals and Agency Priority Goals (APGs) for the third quarter of
            FY2020. These updates highlight recent milestones and accomplishments as
            well as related initiatives that support progress towards a more modern
            and effective government.
          </p>
          <ul class="usa-collection__meta" aria-label="More information">
            <li class="usa-collection__meta-item">By Eric L. Miller</li>
            <li class="usa-collection__meta-item">
              <time datetime="2020-09-17T12:00:00+01:00">September 17, 2020</time>
            </li>
          </ul>
          <ul class="usa-collection__meta" aria-label="Topics">
            <li class="usa-collection__meta-item usa-tag">Quarterly update</li>
            <li class="usa-collection__meta-item usa-tag">CAP goal</li>
            <li class="usa-collection__meta-item usa-tag">APG</li>
            <li class="usa-collection__meta-item usa-tag">PMA</li>
            <li class="usa-collection__meta-item usa-tag">Success story</li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
  <div class="tablet:grid-col-6">
    <h3 class="site-preview-heading tablet:margin-top-0"><a id="media-thumbnail" class="usa-anchor"></a>Media thumbnail</h3>
    <ul class="usa-collection">
      <li class="usa-collection__item">
        <img class="usa-collection__img" src="https://trumpadministration.archives.performance.gov/img/GoG/GoG-logo.png" alt="Gears of Government Awards - President's Award">
        <div class="usa-collection__body">
          <h4 class="usa-collection__heading">
            <a class="usa-link" href="https://trumpadministration.archives.performance.gov/presidents-winners-press-release/">Gears of Government President’s Award winners</a>
          </h4>
          <p class="usa-collection__description">
            Today, the Administration announces the winners of the Gears of
            Government President’s Award. This program recognizes the contributions
            of individuals and teams across the federal workforce who make a
            profound difference in the lives of the American people.
          </p>
          <ul class="usa-collection__meta" aria-label="More information">
            <li class="usa-collection__meta-item">
              By Sondra Ainsworth and Constance Lu
            </li>
            <li class="usa-collection__meta-item">
              <time datetime="2020-09-30T12:00:00+01:00">September 30, 2020</time>
            </li>
          </ul>
          <ul class="usa-collection__meta" aria-label="Topics">
            <li class="usa-collection__meta-item usa-tag usa-tag--new">New</li>
            <li class="usa-collection__meta-item usa-tag">PMA</li>
            <li class="usa-collection__meta-item usa-tag">OMB</li>
          </ul>
        </div>
      </li>
      <li class="usa-collection__item">
        <img class="usa-collection__img" src="https://www.performance.gov/img/blog/wosb1.jpg" alt="Woman Owned Small Business Federal Contracts">
        <div class="usa-collection__body">
          <h4 class="usa-collection__heading">
            <a class="usa-link" href="https://trumpadministration.archives.performance.gov/sba-wosb-dashboard/">Women-owned small business dashboard</a>
          </h4>
          <p class="usa-collection__description">
            In honor of National Women’s Small Business Month, we’ve partnered with
            SBA’s Office of Government Contracting and Business Development and
            Office of Program Performance, Analysis, and Evaluation to highlight the
            Women-Owned Small Businesses (WOSBs) data dashboard!
          </p>
          <ul class="usa-collection__meta" aria-label="More information">
            <li class="usa-collection__meta-item">By Constance Lu</li>
            <li class="usa-collection__meta-item">
              <time datetime="2020-09-30T12:00:00+01:00">September 30, 2020</time>
            </li>
          </ul>
          <ul class="usa-collection__meta" aria-label="Topics">
            <li class="usa-collection__meta-item usa-tag">SBA</li>
          </ul>
        </div>
      </li>
      <li class="usa-collection__item">
        <img class="usa-collection__img" src="https://www.performance.gov/img/blog/sept-2020.png" alt="September 2020 Updates">
        <div class="usa-collection__body">
          <h4 class="usa-collection__heading">
            <a class="usa-link" href="https://trumpadministration.archives.performance.gov/September-2020-Updates-Show-Progress/">September 2020 updates show progress on cross-agency and agency
            priority goals</a>
          </h4>
          <p class="usa-collection__description">
            Today, we published progress updates for both Cross-Agency Priority
            (CAP) Goals and Agency Priority Goals (APGs) for the third quarter of
            FY2020. These updates highlight recent milestones and accomplishments as
            well as related initiatives that support progress towards a more modern
            and effective government.
          </p>
          <ul class="usa-collection__meta" aria-label="More information">
            <li class="usa-collection__meta-item">By Eric L. Miller</li>
            <li class="usa-collection__meta-item">
              <time datetime="2020-09-17T12:00:00+01:00">September 17, 2020</time>
            </li>
          </ul>
          <ul class="usa-collection__meta" aria-label="Topics">
            <li class="usa-collection__meta-item usa-tag">Quarterly update</li>
            <li class="usa-collection__meta-item usa-tag">CAP goal</li>
            <li class="usa-collection__meta-item usa-tag">APG</li>
            <li class="usa-collection__meta-item usa-tag">PMA</li>
            <li class="usa-collection__meta-item usa-tag">Success story</li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>