<?php
/**
 * Shortcodes
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function fab_awpha_template_v2( $options ) {

    // Get options
    $fab_options = (isset($options) && !empty($options) && is_array($options)) ? $options : get_option( 'fab_awpha', array() );

    // General
    $fab_z_index                = $fab_options['fab_z_index'];
    $fab_z_index = ($fab_z_index) ? 'style=" --fab-z-index:' . $fab_z_index . ';"' : '';

    //icon
    $fab_primary_icon_type      = $fab_options['fab_primary_icon_type'];
    $fab_primary_icon           =   '';
    if($fab_primary_icon_type == 'fab_primary_icon_type_shortcode') {
        $fab_primary_icon = do_shortcode($fab_options['fab_primary_icon_type_shortcode']);
    }
    if($fab_primary_icon_type == 'fab_primary_icon_type_svg') {
        $fab_primary_icon = $fab_options['fab_primary_icon_type_svg'];
    }

    //tag
    $fab_primary_button_tag                     = $fab_options['fab_primary_button_tag'];
    $fab_primary_button_tag_a_href              = $fab_options['fab_primary_button_tag_a_href'];
    $fab_primary_button_tag_a_target_blank      = $fab_options['fab_primary_button_tag_a_target_blank'];
    $fab_primary_button_tag_a_target_blank      = ($fab_primary_button_tag_a_target_blank) ? ' target="_blank" ' : '';
    
    $fab_primary_button_tag_open = ($fab_primary_button_tag == 'fab_primary_button_tag_a') ? 
                                                            'a href="' . $fab_primary_button_tag_a_href . '" ' . $fab_primary_button_tag_a_target_blank : 
                                                            'button';
    
    $fab_primary_button_tag_close = ($fab_primary_button_tag == 'fab_primary_button_tag_a') ? 
                                                            'a' : 
                                                            'button';
    
    $fab_primary_button_title = $fab_options['fab_primary_title'];
    $fab_primary_button_title = ($fab_primary_button_title) ? 'title="' . $fab_primary_button_title . '" aria-label="' . $fab_primary_button_title . '"' : '';
    
    $fab_primary_label = $fab_options['fab_primary_label'];
    
    //colors

    // Default State
    $fab_primary_icon_color             = $fab_options['fab_primary_icon_color'];
    $fab_primary_icon_color             = ($fab_primary_icon_color) ? ' --fab-color:' . $fab_primary_icon_color . '; ' : '';
    $fab_primary_bg_color               = $fab_options['fab_primary_bg_color'];
    $fab_primary_bg_color               = ($fab_primary_bg_color) ? ' --fab-bg:' . $fab_primary_bg_color . '; ' : '';
    // Hover
    $fab_primary_icon_color_hover       = $fab_options['fab_primary_icon_color_hover'];
    $fab_primary_icon_color_hover       = ($fab_primary_icon_color_hover) ? ' --fab-color-hover:' . $fab_primary_icon_color_hover . '; ' : '';
    $fab_primary_bg_color_hover         = $fab_options['fab_primary_bg_color_hover'];
    $fab_primary_bg_color_hover         = ($fab_primary_bg_color_hover) ? ' --fab-bg-hover:' . $fab_primary_bg_color_hover . '; ' : '';


    $fab_primary_styles = ($fab_primary_icon_color || $fab_primary_bg_color) ? 
                            'style="' . 
                            $fab_primary_icon_color . 
                            $fab_primary_bg_color . 
                            $fab_primary_icon_color_hover . 
                            $fab_primary_bg_color_hover . 
                            '"' : '';

    //extra
    $fab_primary_id                     = $fab_options['fab_primary_id'];
    $fab_primary_id                     = ($fab_primary_id) ? 'id="' . $fab_primary_id . '"' : '';
    $fab_primary_classes                = $fab_options['fab_primary_classes'];
    $fab_primary_attr                   = $fab_options['fab_primary_attr'];

    echo '<div class="mdc-touch-target-wrapper" ' . $fab_z_index . '>
            <' . $fab_primary_button_tag_open . ' ' . $fab_primary_id . ' class="mdc-fab mdc-fab--touch ' . $fab_primary_classes . '" ' . $fab_primary_button_title . ' ' . $fab_primary_attr . ' ' . $fab_primary_styles . '>
                <div class="mdc-fab__ripple"></div>
                <span class="material-icons mdc-fab__icon">' . $fab_primary_icon . '</span>
                <span class="d-none mdc-fab__label">' . $fab_primary_label . '</span>
                <div class="mdc-fab__touch"></div>
            </' . $fab_primary_button_tag_close . '>
        </div>';
}