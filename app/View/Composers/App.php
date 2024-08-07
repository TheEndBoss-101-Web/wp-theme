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

            'breadCrumsHeroLocation' => true, // True for above false for below.

            // Header settings
            'header' => [
                'enabled' => true, // Whether the header is enabled
                'advanced_ProjectNameAndLogo' => true, // Show an advanced project name and logo in the header
                'UseDarkHeader' => true, // Use a dark theme for the header
                'extended' => false, // Enable the extended navigation menu
                'megamenu' => false, // TODO: Implement support for a megamenu
                'fixedbox' => true, // This will place the header in a fixed box.
                    // ! FLEXBOX MUST BE ENABLED FOR BELOW VALUES ! \\
                    ////'clearBG' => true, // This will make the background of the header clear. // * Best used with dark header.
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
            // Oficial Banner settings
            'officialBanner' => [
                'enabled' => true, // Whether to display the banner
                'dark' => false, // Use a dark theme for the banner
                'icon' => asset('images/us_flag_small.png'), // The icon of the banner.
            ],


            // Site-related settings
            'site' => [
                'domain' => 'domain', // The domain of the site (e.g., 'example.com')
                'tld' => '.gov', // Top-level domain for the site
                'government' => 'United States', // Mainly used for the official domain banner 
            ],

            // Project-related settings
            'project' => [
                'logo' => asset('images/circle-gray-20.svg'), // Path to the project's logo image
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

        // ! DO NOT EDIT BELOW ! \\

        $toreturn['header']['clearBG'] = false;

        if ( ! function_exists('get_field') ) {
            echo("<h1>Critical Site Error:</h1>");
            echo("<p>Advanced Custom Fields is <b>REQUIRED</b> to use this theme.</p>");
            echo("<p>Please install it <a href=\"https://wordpress.org/plugins/advanced-custom-fields/\">here</a>.</p>");
            exit();
        }

        $toreturn['category_tags'] = $this->category_tags();
        $toreturn['pagination'] = $this->pagination();
          
        return $toreturn;
    }

    public function pagination() {
        return get_the_posts_navigation();
        global $wp_query;

        $return = '';
    
        $big = 999999999; // need an unlikely integer
    
        $pagination_args = array(
            'base'               => str_replace($big, '%#%', get_pagenum_link($big)),
            'format'             => '?paged=%#%',
            'current'            => max(1, get_query_var('paged')),
            'total'              => $wp_query->max_num_pages,
            'prev_text'          => __('<svg class="usa-icon" aria-hidden="true" role="img"><use xlink:href="/assets/img/sprite.svg#navigate_before"></use></svg><span class="usa-pagination__link-text">Previous</span>', 'sage'),
            'next_text'          => __('<span class="usa-pagination__link-text">Next</span><svg class="usa-icon" aria-hidden="true" role="img"><use xlink:href="/assets/img/sprite.svg#navigate_next"></use></svg>', 'sage'),
            'type'               => 'array',
            'end_size'           => 1,
            'mid_size'           => 2,
        );
    
        $links = paginate_links($pagination_args);
    
        if ($links) {
            $return .= '<nav aria-label="Pagination" class="usa-pagination">';
            $return .= '<ul class="usa-pagination__list">';
    
            foreach ($links as $link) {
                //var_dump($link);
                $return .= '<li class="usa-pagination__item">';
                $return .= $link;
                $return .= '</li>';
            }
    
            $return .= '</ul>';
            $return .= '</nav>';
        }
        return $return;
    }

    public function category_tags() {
        $categories = get_the_category();
        $return = '';
        //var_dump($categories);
        if (! empty( $categories ) ) {
            foreach ($categories as $term) {
                $name = $term->name;
                $slug = $term->slug;
                $homeurl = esc_url(home_url('/'));
                //$return .= "<a href=\"/category/$slug\"><li class=\"usa-collection__meta-item usa-tag\">$name</li></a>";
                $return .= "<li class=\"usa-collection__meta-item usa-tag\"><a href=\"$homeurl/category/$slug\">$name</a></li>";
            }
        }
        return $return;
    }
}
