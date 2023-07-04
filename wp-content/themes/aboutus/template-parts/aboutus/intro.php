<?php
/**
 * Template part - intro.
 *
 * @package aboutus
 */

$header_group   = get_field( 'intro' );
$intro_subtitle = isset( $header_group['intro_subtitle'] ) ? trim( $header_group['intro_subtitle'] ) : '';
$intro_title    = isset( $header_group['intro_title'] ) ? trim( $header_group['intro_title'] ) : '';
?>
<section class="aboutus_intro">
	<?php if ( ! empty( $intro_subtitle ) ) : ?>
		<p class="aboutus_intro_subtitle"><?php echo $intro_subtitle; ?></p>
	<?php endif; ?>
	<?php if ( ! empty( $intro_title ) ) : ?>
		<h2><?php echo $intro_title; ?></h2>
	<?php endif; ?>
</section>
