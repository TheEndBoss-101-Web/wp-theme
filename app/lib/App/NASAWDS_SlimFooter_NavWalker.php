<?php
namespace App;

use Illuminate\Support\Str;

/**
 * Custom Navigation Menu Walker Class for Slim Footer
 *
 * This class extends the default \Walker_Nav_Menu class provided by WordPress
 * to customize the HTML output of menu items specifically for a slim footer menu.
 */
class NASAWDS_SlimFooter_NavWalker extends \Walker_Nav_Menu {

    /**
     * Start Element - This is for the <li> element
     *
     * This method customizes the HTML output at the start of each menu item.
     * It adds custom CSS classes to the <li> element and sets up HTML attributes for the <a> tag.
     *
     * @param string $output The HTML output of the menu item (passed by reference).
     * @param object $item The menu item object containing properties such as classes, URL, etc.
     * @param int $depth The depth of the menu item in the menu hierarchy (used for handling nested menus).
     * @param object $args Additional arguments passed to the walker, typically includes theme-related options.
     * @param int $id The ID of the menu. This can be used to differentiate between multiple menus if needed.
     */
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        // Retrieve and format CSS classes for the <li> element
        $classes = empty($item->classes) ? [] : (array) $item->classes;
        $classes[] = 'mobile-lg:grid-col-6'; // Custom class for layout on large mobile screens
        $classes[] = 'desktop:grid-col-auto'; // Custom class for layout on desktop screens
        $classes[] = 'usa-footer__primary-content'; // Custom class for footer content
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        // Set up HTML attributes for the <a> tag
        $atts = array(
            'title'  => ! empty($item->attr_title) ? $item->attr_title : '', // Title attribute for the <a> tag
            'target' => ! empty($item->target) ? $item->target : '', // Target attribute (e.g., _blank for new window)
            'rel'    => ! empty($item->xfn) ? $item->xfn : '', // Relationship attribute (e.g., nofollow)
            'href'   => ! empty($item->url) ? $item->url : '', // URL for the <a> tag
            'class'  => 'usa-footer__primary-link' // Custom class for the <a> tag
        );

        // Build attributes string for the <a> tag
        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        // Prepare the menu item title and construct the <li> and <a> HTML
        $title = apply_filters('the_title', $item->title, $item->ID);
        $item_output = '<li' . $class_names . '>';
        $item_output .= '<a' . $attributes . '>' . $title . '</a>';

        // Append the constructed HTML to the output string
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id);
    }
}
