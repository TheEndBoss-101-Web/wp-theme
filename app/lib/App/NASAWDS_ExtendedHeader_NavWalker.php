<?php
namespace App;

use Illuminate\Support\Str;

/**
 * Custom Navigation Menu Walker Class
 *
 * This class extends the default \Walker_Nav_Menu class provided by WordPress
 * to customize the output of navigation menu items.
 */
class NASAWDS_ExtendedHeader_NavWalker extends \Walker_Nav_Menu {

    /**
     * Start Element - This is for the <li> element
     *
     * @param string $output The HTML output of the menu item
     * @param object $item The menu item object
     * @param int $depth Depth of the menu item in the menu hierarchy
     * @param object $args Arguments passed to the walker
     * @param int $id The ID of the menu
     */
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        // Get and format classes
        $classes = empty($item->classes) ? [] : (array) $item->classes;
        $classes[] = 'usa-nav__secondary-item';
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        // Set up HTML attributes for the <a> tag
        $atts = array(
            'title'  => ! empty($item->attr_title) ? $item->attr_title : '',
            'target' => ! empty($item->target) ? $item->target : '',
            'rel'    => ! empty($item->xfn) ? $item->xfn : '',
            'href'   => ! empty($item->url) ? $item->url : '',
            //'class'  => 'usa-identifier__required-link usa-link' // Custom class for <a> tag
        );

        // Build attributes string
        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        // Set up the title and <li> output
        $title = apply_filters('the_title', $item->title, $item->ID);
        $item_output = '<li' . $class_names . '>';
        $item_output .= '<a' . $attributes . '>' . $title . '</a>';

        // Append to output
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id);
    }
}
