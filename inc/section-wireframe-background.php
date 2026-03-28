<?php
/**
 * Helper: get inline style for section-wireframe background image.
 * Use with rwmb_meta image field (image_advanced) or featured image.
 *
 * @param int    $page_id  Post/Page ID.
 * @param string $meta_key Meta key for image field (e.g. 'faq_section_bg_image').
 * @return string Inline style or empty string.
 */
function sevensports_section_wireframe_bg_style( $page_id, $meta_key ) {
    if ( ! $page_id ) {
        return '';
    }
    $raw   = function_exists( 'rwmb_meta' ) ? rwmb_meta( $meta_key, array(), $page_id ) : get_post_meta( $page_id, $meta_key, true );
    $img_id = function_exists( 'sevensports_first_image_id' ) ? sevensports_first_image_id( $raw ) : null;
    if ( ! $img_id && is_array( $raw ) ) {
        $first = reset( $raw );
        $img_id = is_numeric( $first ) ? (int) $first : ( isset( $first['ID'] ) ? (int) $first['ID'] : null );
    }
    if ( ! $img_id ) {
        return '';
    }
    $url = wp_get_attachment_image_url( $img_id, 'full' );
    if ( ! $url ) {
        return '';
    }
    return 'background-image: url(' . esc_attr( $url ) . '); background-size: cover; background-position: center; background-repeat: no-repeat;';
}
