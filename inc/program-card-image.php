<?php
/**
 * Program card image holder – output only.
 * Expects $program in scope (e.g. from template loop) with optional 'program_image_url'.
 */
$program_image_url = isset( $program['program_image_url'] ) ? $program['program_image_url'] : '';
$program_image_alt = isset( $program['program_name'] ) ? $program['program_name'] : '';
?>
<div class="program-card-image">
	<?php if ( ! empty( $program_image_url ) ) : ?>
		<img src="<?php echo esc_url( $program_image_url ); ?>" alt="<?php echo esc_attr( $program_image_alt ); ?>">
	<?php endif; ?>
</div>
