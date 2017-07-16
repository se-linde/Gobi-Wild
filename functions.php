/*
Theme Name: Gobi Wild
Author: Seattle Central WEB210/ITC210 Class Summer 2017
Author URI:
Description: Responsive theme for Gobi Wild Nature Parks
Version: 1.0
*/

//Register Nav Menus
register_nav_menus(array(
    'main-menu' => __('Main Menu'),
    'footer-menu' => __('Footer Menu')
));

// SEO Title Tag
function get_my_title_tag() {
    global $post;
    // If on page or single post...
    if (is_page() || is_single()) {
        the_title();
    // Otherwise...
    } else {
        bloginfo('description');
    }
    if ($post -> post_parent) {
        echo ' | ';
        echo get_the_title($post -> post_parent);
    }
    echo ' | ';
    bloginfo('name');
    echo ' | ';
    echo 'Bend, OR.';
}

?>
