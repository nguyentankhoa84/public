<?php
/**
 * Template part - Core values
 *
 * @package aboutus
 */

$core_values_group = get_field( 'core_values' );
$core_values_bref  = isset( $core_values_group['core_values_bref'] ) ? trim( $core_values_group['core_values_bref'] ) : '';

$core_values = array(
	array(
		'title'   => $core_values_group['core_values1_title'],
		'logo'    => $core_values_group['core_values1_logo']['url'],
		'content' => $core_values_group['core_values1_content'],
	),
	array(
		'title'   => $core_values_group['core_values2_title'],
		'logo'    => $core_values_group['core_values2_logo']['url'],
		'content' => $core_values_group['core_values2_content'],
	),
	array(
		'title'   => $core_values_group['core_values3_title'],
		'logo'    => $core_values_group['core_values3_logo']['url'],
		'content' => $core_values_group['core_values3_content'],
	),
);

?>
<section class="aboutus-core-values">
	<h1 class="core-values-title"><?php echo __( 'Our Core Values', 'aboutus' ); ?></h1>
	<?php if ( ! empty( $core_values_bref ) ) : ?>
		<p class="core-values-bref"><?php echo $core_values_bref; ?></p>
	<?php endif; ?>
	<?php if ( ! empty( $core_values ) ) : ?>
		<div class="core-values-list">
			<?php foreach ( $core_values as $core_value ) : ?>
			<div class="core-values-item">
				<div class="core-values-logo"><img src="<?php echo esc_url( $core_value['logo'] ); ?>"/></div>
				<div>
					<h3 class="core-values-title"><?php echo $core_value['title']; ?></h3>
					<div class="core-values-content"><?php echo $core_value['content']; ?></div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</section>
