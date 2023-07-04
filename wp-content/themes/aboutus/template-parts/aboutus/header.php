<?php
/**
 * Template part - header.
 *
 * @package aboutus
 */

$header_group       = get_field( 'header' );
$header_title       = isset( $header_group['header_title'] ) ? trim( $header_group['header_title'] ) : '';
$header_description = isset( $header_group['header_description'] ) ? trim( $header_group['header_description'] ) : '';
?>
<section class="aboutus_header">
	<?php if ( ! empty( $header_title ) ) : ?>
		<h1><?php echo $header_title; ?></h1>
	<?php endif; ?>
	<?php if ( ! empty( $header_description ) ) : ?>
		<div class="aboutus_header_desc"></div>
		<?php echo $header_description; ?></h1>
	<?php endif; ?>
</section>
