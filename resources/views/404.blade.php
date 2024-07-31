@extends('layouts.app')

@section('content')

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>Start View:</strong> 404</p>
@endif

<div class="usa-section">
    <div class="grid-container">
        <div class="grid-row grid-gap">
            <main class="main-content" id="main-content">
                <div class="usa-prose">
                    <!-- This template can be used for most types of error pages -->
                    <!-- Remove these comments when you build your error pages -->

                    <!-- Describe the error in the main heading -->
                    <h1>Page not found</h1>
                    <h6>
                        @php
                          if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb('<div class="breadcrumbs" id="breadcrumbs">','</div>');
                          }
                        @endphp
                    </h6>

                    <!-- Explain what caused the error in the lead text -->
                    <p class="usa-intro">We’re sorry, we can’t find the page you're looking for. The site administrator may have removed it, changed its location, or made it otherwise unavailable.</p>

                    <?php /*
                    <!-- Provide instructions how the user can address or fix the error -->
                    <p>If you typed the URL directly, check your spelling and capitalization. Our URLs look like this: <strong>&lt;agency.gov/example-one&gt;</strong>.</p><p>Visit our homepage for helpful tools and resources, or contact us and we’ll point you in the right direction.</p>
                    */ ?>

                    <!-- Use buttons for main actions user can take, such as visiting the homepage or a contact page -->
                    <div class="margin-y-5">
                      <ul class="usa-button-group">
                            <li class="usa-button-group__item">
                                <a href="{{ esc_url(home_url('/')) }}" class="usa-button">Visit homepage</a>
                            </li>
                            <?php /*
                            <li class="usa-button-group__item">
                                <button class="usa-button usa-button--outline" type="button">Contact Us</button>
                            </li>
                            */ ?>
                        </ul>
                    </div>

                    <?php /*
                    <!-- List additional support channels -->
                    <p>For immediate assistance:</p>
                    <ul>
                        <li>
                            <a href="javascript:void();" class="usa-link">Start a live chat with us</a>
                        </li>
                        <li>
                            Call <a href="javascript:void();" class="usa-link">(555) 555-GOVT</a>
                        </li>
                    </ul>
                    */ ?>

                    <p>Search this site:</p>
                    @include('forms.search')

                    <!-- Error code if appropriate -->
                    <p class="text-base"><strong>Error code:</strong> 404</p>
                </div>
            </main>
        </div>
    </div>
</div>

@if ($debug['templatenames'] == true)
  <p class="text-base"><strong>End View:</strong> 404</p>
@endif

@endsection