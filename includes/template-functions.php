<?php 
// Retrieve custom footer menus
function get_footer_menu($menu_slug){
    $locations = get_nav_menu_locations();
    $menu_list = '';
    $menu_heading = '';
    
    if (  $locations && isset( $locations[ $menu_slug ] ) ) {
        $menu = wp_get_nav_menu_object( $locations[ $menu_slug ] );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        // Set menu heading
        $menu_heading = '<h6 class="heading mb-3">'.$menu->name.'</h6>';
        // Set menu
        $menu_list = '<ul class="list-unstyled" id="menu-' . $menu_slug . '">';
        foreach ( (array) $menu_items as $key => $menu_item ) {
            $title = $menu_item->title;
            $url = $menu_item->url;
            $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
        }
        $menu_list .= '</ul>';
    } else {
        $menu_list = '<ul><li>Menu "' . $menu_slug . '" not defined.</li></ul>';
    }
    return $menu_heading.$menu_list;
}
?>