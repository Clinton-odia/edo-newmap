<?php
/**
 * Custom Meta Boxes & Meta Fields for CPTs
 *
 * @package edonewman-theme
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Register Meta Boxes
 */
function edonewmap_add_custom_meta_boxes() {
    // Project Meta Box
    add_meta_box(
        'project_details_meta_box',
        __('Project Details & Location', '_s'),
        'edonewmap_render_project_meta_box',
        'project',
        'normal',
        'high'
    );

    // Notice Meta Box
    add_meta_box(
        'notice_details_meta_box',
        __('Notice Priority & Expiry Details', '_s'),
        'edonewmap_render_notice_meta_box',
        'notice',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'edonewmap_add_custom_meta_boxes');

/**
 * Render Project Meta Box
 */
function edonewmap_render_project_meta_box($post) {
    wp_nonce_field('edonewmap_save_project_meta', 'project_meta_nonce');

    $status      = get_post_meta($post->ID, '_project_status', true);
    $location    = get_post_meta($post->ID, '_project_location', true);
    $start_date  = get_post_meta($post->ID, '_project_start_date', true);
    $end_date    = get_post_meta($post->ID, '_project_end_date', true);
    $objectives  = get_post_meta($post->ID, '_project_objectives', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="project_status"><?php _e('Project Status', '_s'); ?></label></th>
            <td>
                <select name="project_status" id="project_status" class="widefat">
                    <option value="Ongoing" <?php selected($status, 'Ongoing'); ?>>Ongoing</option>
                    <option value="Completed" <?php selected($status, 'Completed'); ?>>Completed</option>
                    <option value="Planned" <?php selected($status, 'Planned'); ?>>Planned</option>
                </select>
            </td>
        </tr>
        <tr>
            <th><label for="project_location"><?php _e('Location (LGA / Community)', '_s'); ?></label></th>
            <td>
                <input type="text" name="project_location" id="project_location" value="<?php echo esc_attr($location); ?>" class="widefat" placeholder="e.g. Iguosa Village, Ovia North-East LGA" />
            </td>
        </tr>
        <tr>
            <th><label for="project_start_date"><?php _e('Start Date', '_s'); ?></label></th>
            <td>
                <input type="date" name="project_start_date" id="project_start_date" value="<?php echo esc_attr($start_date); ?>" class="widefat" />
            </td>
        </tr>
        <tr>
            <th><label for="project_end_date"><?php _e('Completion / Target Date', '_s'); ?></label></th>
            <td>
                <input type="date" name="project_end_date" id="project_end_date" value="<?php echo esc_attr($end_date); ?>" class="widefat" />
            </td>
        </tr>
        <tr>
            <th><label for="project_objectives"><?php _e('Project Objectives Summary', '_s'); ?></label></th>
            <td>
                <textarea name="project_objectives" id="project_objectives" rows="4" class="widefat" placeholder="Enter key project goals..."><?php echo esc_textarea($objectives); ?></textarea>
            </td>
        </tr>
    </table>
    <?php
}

/**
 * Render Notice Meta Box
 */
function edonewmap_render_notice_meta_box($post) {
    wp_nonce_field('edonewmap_save_notice_meta', 'notice_meta_nonce');

    $priority    = get_post_meta($post->ID, '_notice_priority', true);
    $expiry_date = get_post_meta($post->ID, '_notice_expiry_date', true);
    $doc_link    = get_post_meta($post->ID, '_notice_doc_link', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="notice_priority"><?php _e('Priority Badge', '_s'); ?></label></th>
            <td>
                <select name="notice_priority" id="notice_priority" class="widefat">
                    <option value="Normal" <?php selected($priority, 'Normal'); ?>>Normal</option>
                    <option value="Urgent" <?php selected($priority, 'Urgent'); ?>>Urgent</option>
                    <option value="Public Notice" <?php selected($priority, 'Public Notice'); ?>>Public Notice</option>
                </select>
            </td>
        </tr>
        <tr>
            <th><label for="notice_expiry_date"><?php _e('Expiration Date (Optional)', '_s'); ?></label></th>
            <td>
                <input type="date" name="notice_expiry_date" id="notice_expiry_date" value="<?php echo esc_attr($expiry_date); ?>" class="widefat" />
            </td>
        </tr>
        <tr>
            <th><label for="notice_doc_link"><?php _e('Attachment / External Link URL', '_s'); ?></label></th>
            <td>
                <input type="url" name="notice_doc_link" id="notice_doc_link" value="<?php echo esc_attr($doc_link); ?>" class="widefat" placeholder="https://..." />
            </td>
        </tr>
    </table>
    <?php
}

/**
 * Save Meta Box Data
 */
function edonewmap_save_custom_meta($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    // Save Project Meta
    if (isset($_POST['project_meta_nonce']) && wp_verify_nonce($_POST['project_meta_nonce'], 'edonewmap_save_project_meta')) {
        if (isset($_POST['project_status'])) {
            update_post_meta($post_id, '_project_status', sanitize_text_field($_POST['project_status']));
        }
        if (isset($_POST['project_location'])) {
            update_post_meta($post_id, '_project_location', sanitize_text_field($_POST['project_location']));
        }
        if (isset($_POST['project_start_date'])) {
            update_post_meta($post_id, '_project_start_date', sanitize_text_field($_POST['project_start_date']));
        }
        if (isset($_POST['project_end_date'])) {
            update_post_meta($post_id, '_project_end_date', sanitize_text_field($_POST['project_end_date']));
        }
        if (isset($_POST['project_objectives'])) {
            update_post_meta($post_id, '_project_objectives', sanitize_textarea_field($_POST['project_objectives']));
        }
    }

    // Save Notice Meta
    if (isset($_POST['notice_meta_nonce']) && wp_verify_nonce($_POST['notice_meta_nonce'], 'edonewmap_save_notice_meta')) {
        if (isset($_POST['notice_priority'])) {
            update_post_meta($post_id, '_notice_priority', sanitize_text_field($_POST['notice_priority']));
        }
        if (isset($_POST['notice_expiry_date'])) {
            update_post_meta($post_id, '_notice_expiry_date', sanitize_text_field($_POST['notice_expiry_date']));
        }
        if (isset($_POST['notice_doc_link'])) {
            update_post_meta($post_id, '_notice_doc_link', esc_url_raw($_POST['notice_doc_link']));
        }
    }
}
add_action('save_post', 'edonewmap_save_custom_meta');
