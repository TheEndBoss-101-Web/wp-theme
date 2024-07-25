@extends('layouts.app')

@section('content')
<main class="usa-section">
  <div class="grid-container">
    <div class="grid-row grid-gap">
      <div class="usa-layout-docs__sidenav display-none desktop:display-block desktop:grid-col-3">
        <nav aria-label="Secondary navigation">
          <ul class="usa-sidenav">
            <li class="usa-sidenav__item">
              <a href="javascript:void(0);">Parent link</a>
            </li>
            <li class="usa-sidenav__item">
              <a href="javascript:void(0);" class="usa-current">Current page</a>
              <ul class="usa-sidenav__sublist">
                <li class="usa-sidenav__item">
                  <a href="javascript:void(0);">Child link</a>
                </li>
                <li class="usa-sidenav__item">
                  <a href="javascript:void(0);" class="usa-current">Child link</a>
                  <ul class="usa-sidenav__sublist">
                    <li class="usa-sidenav__item">
                      <a href="javascript:void(0);">Grandchild link</a>
                    </li>
                    <li class="usa-sidenav__item">
                      <a href="javascript:void(0);" class="usa-current">Grandchild link</a>
                    </li>
                    <li class="usa-sidenav__item">
                      <a href="javascript:void(0);">Grandchild link</a>
                    </li>
                  </ul>
                </li>
                <li class="usa-sidenav__item">
                  <a href="javascript:void(0);">Child link</a>
                </li>
              </ul>
            </li>
            <li class="usa-sidenav__item">
              <a href="javascript:void(0);">Parent link</a>
            </li>
          </ul>
        </nav>
      </div>
      <main class="desktop:grid-col-9 usa-prose" id="main-content">
        @include('partials.page-header')
        @includeFirst(['partials.content-page', 'partials.content'])
        <!--h1>Page heading (h1)</h1>
        <p class="usa-intro">The page heading communicates the main focus of the page. Make your page heading descriptive and keep it succinct.</p>
        <h2 id="section-heading-h2">Section heading (h2)</h2>
        <p>These headings introduce, respectively, sections and subsections within your body copy. As you create these headings, follow the same guidelines that you use when writing section headings: Be succinct, descriptive, and precise.</p>
        <h3 id="section-heading-h3">Subsection heading (h3)</h3>
        <p>The particulars of your body copy will be determined by the topic of your page. Regardless of topic, it’s a good practice to follow the inverted pyramid structure when writing copy: Begin with the information that’s most important to your users and then present information of less importance.</p>
        <p>Keep each section and subsection focused — a good approach is to include one theme (topic) per section.</p>
        <h4 id="section-heading-h4">Subsection heading (h4)</h4>
        <p>Use the side navigation menu to help your users quickly skip to different sections of your page. The menu is best suited to displaying a hierarchy with one to three levels and, as we mentioned, to display the sub-navigation of a given page.</p>
        <p>Read the full documentation on our side navigation on the component page.</p-->
      </main>
    </div>
    <div class="usa-layout-docs__sidenav desktop:display-none">
      <nav aria-label="Secondary navigation">
        <ul class="usa-sidenav">
          <li class="usa-sidenav__item">
            <a href="javascript:void(0);">Parent link</a>
          </li>
          <li class="usa-sidenav__item">
            <a href="javascript:void(0);" class="usa-current">Current page</a>
            <ul class="usa-sidenav__sublist">
              <li class="usa-sidenav__item">
                <a href="javascript:void(0);">Child link</a>
              </li>
              <li class="usa-sidenav__item">
                <a href="javascript:void(0);" class="usa-current">Child link</a>
                <ul class="usa-sidenav__sublist">
                  <li class="usa-sidenav__item">
                    <a href="javascript:void(0);">Grandchild link</a>
                  </li>
                  <li class="usa-sidenav__item">
                    <a href="javascript:void(0);" class="usa-current">Grandchild link</a>
                  </li>
                  <li class="usa-sidenav__item">
                    <a href="javascript:void(0);">Grandchild link</a>
                  </li>
                </ul>
              </li>
              <li class="usa-sidenav__item">
                <a href="javascript:void(0);">Child link</a>
              </li>
            </ul>
          </li>
          <li class="usa-sidenav__item">
            <a href="javascript:void(0);">Parent link</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</main>
@endsection
