<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views that this composer will be applied to.
     *
     * @var array
     */
    protected static $views = [
        '*', // Apply to all views
    ];

    /**
     * Provides data to be passed to the view before rendering.
     *
     * @return array
     */
    public function with() {
        $toreturn = array(
            // Debugging settings
            'debug' => [
                'templatenames' => false, // If true, will show which template is being loaded (useful for debugging)
            ],
            // Header settings
            'header' => [
                'enabled' => true, // Whether the header is enabled
                'advanced_ProjectNameAndLogo' => true, // Show an advanced project name and logo in the header
                'UseDarkHeader' => true, // Use a dark theme for the header
                'extended' => false, // Enable the extended navigation menu
                'megamenu' => false, // TODO: Implement support for a megamenu
                'fixedbox' => true, // This will place the header and the official domain banner in a fixed box.
                    // ! FLEXBOX MUST BE ENABLED FOR BELOW VALUES ! \\
                    'clearBG' => true, // This will make the background of the header clear. // * Best used with dark header.
                    'fadeBG' => true, // On scroll this will make the background fade.
            ],
            // Footer settings
            'footer' => [
                'enabled' => true, // Whether the footer is enabled
                'size' => 'med', // The size of the footer: 'big', 'med', or 'slim'. // TODO: Improve support for 'big' size
            ],
            // Identifier settings
            'identifier' => [
                'enabled' => true, // Whether the identifier section is enabled
                'dualParent' => false, // Whether to support a dual parent agency structure
                'noLogo' => false, // Whether to hide the logo(s) in the identifier section
                'taxpayer_disclaimer' => false, // Whether to show the taxpayer disclaimer
                'showusagov' => false, // Whether to show the USA.gov banner
            ],
            'show_OfficialBanner' => true, // Whether to display the official domain banner

            // Site-related settings
            'site' => [
                'domain' => 'domain', // The domain of the site (e.g., 'example.com')
                'tld' => '.gov', // Top-level domain for the site
                'government' => 'United States', // Mainly used for the official domain banner 
            ],

            // Project-related settings
            'project' => [
                'logo' => asset('images/logo-nasa.svg'), // Path to the project's logo image
                'line1' => 'Project', // First line of the project title
                'line2' => 'Title', // Second line of the project title
                'name' => 'Project Title', // Full project title
            ],

            // Agency-related settings
            'agency' => [
                'name' => 'Agency Name', // Name of the agency
                'logo' => asset('images/logo-img.png'), // Path to the agency's logo image
                'contact_center' => 'Agency Contact Center', // Contact center name
                'contact_email' => 'info@agency.gov', // Contact email address
                'contact_pn' => '(800) 555-GOV', // Contact phone number
                'contact_pn_link' => '1-800-555-5555', // Phone number formatted for tel: links
                'url' => 'agency.gov', // Agency's website URL
            ],

            // Parent agency settings
            'parentagency' => [
                'name' => 'Parent Agency', // Name of the parent agency
                'website' => 'agency.gov', // Website URL of the parent agency
                'logo' => asset('images/circle-gray-20.svg'), // Path to the parent agency's logo image
            ],

            // Second parent agency settings (used for dual parent structures)
            'parentagency2' => [
                'name' => 'Parent Agency2', // Name of the second parent agency
                'website' => 'agency2.gov', // Website URL of the second parent agency
                'logo' => asset('images/circle-gray-20.svg'), // Path to the second parent agency's logo image
            ],
        );
        return $toreturn;
    }
}
