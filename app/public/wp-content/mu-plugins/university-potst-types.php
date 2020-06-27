<?Php
function university_post_types()
{
    register_post_type('event', array(
        'show_in_rest' => true,
        'supports' => array(
            'title', 'editor', 'excerpt'
        ),
        'rewrite' => array('slug' => 'events'),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add new Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        )
    ));

    /**
     * Progarm post type
     */
    register_post_type('program', array(
        'show_in_rest' => true,
        'supports' => array(
            'title', 'editor'
        ),
        'rewrite' => array('slug' => 'programs'),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-awards',
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'Add new Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Program'
        )
    ));
}

add_action('init', 'university_post_types');
