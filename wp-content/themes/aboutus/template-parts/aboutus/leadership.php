<?php
/**
 * Template part - leadership.
 *
 * @package aboutus
 */

$leadership_group = get_field( 'leadership' );

$leaders = array(
	array(
		'picture'  => $leadership_group['leadership1_picture']['url'],
		'name'     => $leadership_group['leadership1_name'],
		'position' => $leadership_group['leadership1_position'],
		'bo'       => $leadership_group['leadership1_bo'],
	),
	array(
		'picture'  => $leadership_group['leadership2_picture']['url'],
		'name'     => $leadership_group['leadership2_name'],
		'position' => $leadership_group['leadership2_position'],
		'bo'       => $leadership_group['leadership2_bo'],
	),
);

?>
<section class="aboutus-leadership">
	<h1><?php echo __( 'Leadership', 'aboutus' ); ?></h1>
	<?php if ( ! empty( $leaders ) ) : ?>
		<div class="leadership-list-wapper">
		<div class="leadership-list">
			<?php foreach ( $leaders as $leader ) : ?>
				<div>
					<div class="leadership-item">
						<div class="leadership-logo">
							<img src="<?php echo esc_url( $leader['picture'] ); ?>"/>
						</div>
						<div class="leadership-text">
							<p class="leadership-name"><?php echo $leader['name']; ?></p>
							<p class="leadership-position"><?php echo $leader['position']; ?></p>
							<div class="leadership-bo"><?php echo $leader['bo']; ?></div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="custom-arrows">
				<div class="slick-prev customPrev custom-arrow">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/chevron_left.webp"/>
				</div>
				<div class="slick-next customNext custom-arrow">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/chevron_right.webp"/>
				</div>
			</div>
			</div>
	<?php endif; ?>
</section>
