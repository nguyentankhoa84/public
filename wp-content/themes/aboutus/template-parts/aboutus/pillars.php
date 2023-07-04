<?php
/**
 * Template part - pillars.
 *
 * @package aboutus
 */

$pillars_group = get_field( 'pillars' );

$pillars_title       = isset( $pillars_group['pillars_title'] ) ? trim( $pillars_group['pillars_title'] ) : '';
$pillars_description = isset( $pillars_group['pillars_description'] ) ? trim( $pillars_group['pillars_description'] ) : '';

$pillars = array(
	array(
		'title' => $pillars_group['pillars_item1_title'],
		'logo'  => $pillars_group['pillars_item1_logo'],
	),
	array(
		'title' => $pillars_group['pillars_item2_title'],
		'logo'  => $pillars_group['pillars_item2_logo'],
	),
	array(
		'title' => $pillars_group['pillars_item3_title'],
		'logo'  => $pillars_group['pillars_item3_logo'],
	),
	array(
		'title' => $pillars_group['pillars_item4_title'],
		'logo'  => $pillars_group['pillars_item4_logo'],
	),
);

$pillars_more_link = isset( $pillars_group['pillars_more_link'] ) ? trim( $pillars_group['pillars_more_link'] ) : '';
?>
<section class="aboutus_pillars">
	<?php if ( ! empty( $pillars_title ) ) : ?>
		<h1><?php echo $pillars_title; ?></h1>
	<?php endif; ?>
	<?php if ( ! empty( $pillars_description ) ) : ?>
		<div  class="pillar-description"><?php echo $pillars_description; ?></div>
	<?php endif; ?>
	<?php if ( ! empty( $pillars ) ) : ?>
		<div class="pillar-list">
			<?php foreach ( $pillars as $pillar ) : ?>
			<div class="pillar-item">
				<div class="logo"><?php echo $pillar['logo']; ?></div>
				<h3><?php echo $pillar['title']; ?></h3>
			</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
	<?php if ( ! empty( $pillars_more_link ) ) : ?>
		<div class="pillar-readmore">
			<a class="button" href="<?php echo esc_url( $pillars_more_link ); ?>"><?php esc_html_e( 'Learn More', 'aboutus' ); ?></a>
		</div>
	<?php endif; ?>
</section>
