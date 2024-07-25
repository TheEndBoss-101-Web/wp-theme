<?php

namespace App;
use Illuminate\Support\Str;

/**
 * Custom WordPress navigation walker extending Walker_Nav_Menu.
 *
 * This class generates a custom navigation menu based on the NASA Web Design System (WDS).
 * It provides customized output for primary and submenu items with appropriate classes and attributes.
 *
 * @see Walker_Nav_Menu
 */
class NASAWDS_BasicNavWalker extends \Walker_Nav_Menu {

    /**
     * Tracks if currently inside a submenu.
     *
     * @var bool $in_submenu
     */
    private $in_submenu = false;

    /**
     * Tracks the number of submenus for generating unique IDs.
     *
     * @var int $submenu_count
     */
    private $submenu_count = 0;

    /**
     * Start the submenu element.
     *
     * @param string $output   Used to append additional content (passed by reference).
     * @param int    $depth    Depth of menu item. Used for padding.
     * @param object $args     An object of wp_nav_menu() arguments.
     */
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);

        // Set in_submenu to true when entering a submenu level
        $this->in_submenu = true;

        // Generate unique ID for ARIA controls and section IDs
        $aria_controls = 'basic-nav-section-' . $this->submenu_count;

        // Start the submenu as a <ul> with appropriate classes and ARIA attributes
        $output .= "\n$indent<ul id=\"$aria_controls\" class=\"usa-nav__submenu\" hidden=\"\">\n";
    }

/**
 * Start the element output.
 *
 * @param string $output   Used to append additional content (passed by reference).
 * @param object $item     Menu item data object.
 * @param int    $depth    Depth of menu item. Used for padding.
 * @param object $args     An object of wp_nav_menu() arguments.
 * @param int    $id       Current menu item ID.
 */
public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;
    $classes[] = 'usa-nav__link';

    // Check if current menu item corresponds to the current page
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'usa-current';
    }

    // Determine if the item has children (submenu)
    $has_children = ! empty($item->classes) && in_array('menu-item-has-children', $item->classes);

    $args = (object) $args;

    $atts = array();
    $atts['class'] = implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));

    // Check if the URL is external
    if (! empty($item->url) && ! Str::startsWith($item->url, home_url())) {
        $atts['target'] = '_blank';
        $atts['rel'] = 'external';

        // Optionally add an icon for external links
        $external_icon = '<i class="fa fa-external-link" aria-hidden="true"></i>';
    }

    if ($has_children) {
        // If the item has children, render it as a button with ARIA attributes
        $atts['type'] = 'button';
        $atts['aria-expanded'] = 'false';
        $atts['aria-controls'] = 'basic-nav-section-' . $this->submenu_count;
        $atts['class'] .= ' usa-accordion__button'; // Add usa-accordion__button class
    } else {
        // If no children, render as a link
        $atts['href'] = ! empty($item->url) ? esc_url($item->url) : 'javascript:void(0);';
    }

    $attributes = '';
    foreach ($atts as $attr => $value) {
        if (! empty($value)) {
            $value = esc_attr($value);
            $attributes .= ' ' . $attr . '="' . $value . '"';
        }
    }

    $item_output = $args->before;
    if ($has_children) {
        // If it has children, output as a button with usa-accordion__button class
        $item_output .= '<button' . $attributes . '>';
    } else {
        // Otherwise, output as a link
        $item_output .= '<a' . $attributes . '>';
    }
    // Use <span> for link or button text content
    $item_output .= '<span>' . $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;

    // Append external link icon if available
    if (! empty($external_icon)) {
        $item_output .= $external_icon;
    }

    $item_output .= '</span>';
    if ($has_children) {
        $item_output .= '</button>';
    } else {
        $item_output .= '</a>';
    }
    $item_output .= $args->after;

    // Output the menu item
    $output .= $indent . '<li class="' . ($this->in_submenu ? 'usa-nav__submenu-item' : 'usa-nav__primary-item') . '">' . $item_output;
}


    /**
     * End the element output.
     *
     * @param string $output   Used to append additional content (passed by reference).
     * @param object $item     Menu item data object.
     * @param int    $depth    Depth of menu item. Used for padding.
     * @param object $args     An object of wp_nav_menu() arguments.
     */
    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }

    /**
     * End the submenu element.
     *
     * @param string $output   Used to append additional content (passed by reference).
     * @param int    $depth    Depth of menu item. Used for padding.
     * @param object $args     An object of wp_nav_menu() arguments.
     */
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";

        // Reset in_submenu when leaving submenu level
        if ($depth === 0) {
            $this->in_submenu = false;
            $this->submenu_count++;
        }
    }

}
