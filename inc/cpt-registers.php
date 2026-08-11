<?php
/**
 * Register Custom Post Types for EDO NEWMAP-EIB Theme
 *
 * @package edonewman-theme
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function edonewmap_register_cpts() {

    /**
     * 1. Projects CPT ('project')
     */
    $project_labels = array(
        'name'               => _x('Projects', 'post type general name', '_s'),
        'singular_name'      => _x('Project', 'post type singular name', '_s'),
        'menu_name'          => _x('Projects', 'admin menu', '_s'),
        'name_admin_bar'     => _x('Project', 'add new on admin bar', '_s'),
        'add_new'            => _x('Add New', 'project', '_s'),
        'add_new_item'       => __('Add New Project', '_s'),
        'new_item'           => __('New Project', '_s'),
        'edit_item'          => __('Edit Project', '_s'),
        'view_item'          => __('View Project', '_s'),
        'all_items'          => __('All Projects', '_s'),
        'search_items'       => __('Search Projects', '_s'),
        'parent_item_colon'  => __('Parent Projects:', '_s'),
        'not_found'          => __('No projects found.', '_s'),
        'not_found_in_trash' => __('No projects found in Trash.', '_s')
    );

    $project_args = array(
        'labels'             => $project_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'projects'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions'),
        'show_in_rest'       => true,
    );

    register_post_type('project', $project_args);

    // Register Category Taxonomy for Projects
    register_taxonomy(
        'project_category',
        'project',
        array(
            'label'             => __('Project Categories', '_s'),
            'rewrite'           => array('slug' => 'project-category'),
            'hierarchical'      => true,
            'show_admin_column' => true,
            'show_in_rest'      => true,
        )
    );

    /**
     * 2. Notices & Announcements CPT ('notice')
     */
    $notice_labels = array(
        'name'               => _x('Notices & Announcements', 'post type general name', '_s'),
        'singular_name'      => _x('Notice', 'post type singular name', '_s'),
        'menu_name'          => _x('Notices', 'admin menu', '_s'),
        'name_admin_bar'     => _x('Notice', 'add new on admin bar', '_s'),
        'add_new'            => _x('Add New Notice', 'notice', '_s'),
        'add_new_item'       => __('Add New Notice', '_s'),
        'new_item'           => __('New Notice', '_s'),
        'edit_item'          => __('Edit Notice', '_s'),
        'view_item'          => __('View Notice', '_s'),
        'all_items'          => __('All Notices', '_s'),
        'search_items'       => __('Search Notices', '_s'),
        'not_found'          => __('No notices found.', '_s'),
        'not_found_in_trash' => __('No notices found in Trash.', '_s')
    );

    $notice_args = array(
        'labels'             => $notice_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'notices'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-megaphone',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions'),
        'show_in_rest'       => true,
    );

    register_post_type('notice', $notice_args);

    /**
     * 3. Departments CPT ('department')
     */
    $dept_labels = array(
        'name'               => _x('Departments', 'post type general name', '_s'),
        'singular_name'      => _x('Department', 'post type singular name', '_s'),
        'menu_name'          => _x('Departments', 'admin menu', '_s'),
        'name_admin_bar'     => _x('Department', 'add new on admin bar', '_s'),
        'add_new'            => _x('Add New Department', 'department', '_s'),
        'add_new_item'       => __('Add New Department', '_s'),
        'new_item'           => __('New Department', '_s'),
        'edit_item'          => __('Edit Department', '_s'),
        'view_item'          => __('View Department', '_s'),
        'all_items'          => __('All Departments', '_s'),
        'search_items'       => __('Search Departments', '_s'),
        'not_found'          => __('No departments found.', '_s'),
        'not_found_in_trash' => __('No departments found in Trash.', '_s')
    );

    $dept_args = array(
        'labels'             => $dept_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'departments'),
        'capability_type'    => 'page',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-businessperson',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'revisions'),
        'show_in_rest'       => true,
    );

    register_post_type('department', $dept_args);
}
add_action('init', 'edonewmap_register_cpts');

/**
 * Include Custom Post Types in Site-Wide Search Query
 */
function edonewmap_search_filter($query) {
    if ($query->is_search && !is_admin() && $query->is_main_query()) {
        $query->set('post_type', array('post', 'page', 'project', 'notice', 'department'));
    }
    return $query;
}
add_filter('pre_get_posts', 'edonewmap_search_filter');
