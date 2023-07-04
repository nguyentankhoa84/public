<?php
/**
 * Template part - achievement
 *
 * @package aboutus
 */

$achievement_group   = get_field( 'achievement' );
$achievement         = array(
	'subtitle' => isset( $achievement_group['achievement1_sub_title'] ) ? trim( $achievement_group['achievement1_sub_title'] ) : '',
	'title'    => isset( $achievement_group['achievement1_title'] ) ? trim( $achievement_group['achievement1_title'] ) : '',
	'list'     => isset( $achievement_group['achievement1_list'] ) ? trim( $achievement_group['achievement1_list'] ) : '',
	'logo'     => isset( $achievement_group['achievement1_logo']['url'] ) ? $achievement_group['achievement1_logo']['url'] : '',
);
$achievement_reverse = array(
	'subtitle' => isset( $achievement_group['achievement2_sub_title'] ) ? trim( $achievement_group['achievement2_sub_title'] ) : '',
	'title'    => isset( $achievement_group['achievement2_title'] ) ? trim( $achievement_group['achievement2_title'] ) : '',
	'list'     => isset( $achievement_group['achievement2_list'] ) ? trim( $achievement_group['achievement2_list'] ) : '',
	'logo'     => isset( $achievement_group['achievement2_logo']['url'] ) ? $achievement_group['achievement2_logo']['url'] : '',
);
?>
<?php if ( ! empty( $achievement ) ) : ?>
		<section class="aboutus-achievement">
			<div class="achievement-item">
				<div class="achievement-content">
					<div class="achievement-subtitle"><?php echo $achievement['subtitle']; ?></div>
					<h2 class="achievement-title"><?php echo $achievement['title']; ?></h2>
					<div class="achievement-list"><?php echo $achievement['list']; ?></div>
				</div>
				<div class="achievement-logo"><img src="<?php echo esc_url( $achievement['logo'] ); ?>"/></div>
			</div>
		</section>
<?php endif; ?>
<?php if ( ! empty( $achievement_reverse ) ) : ?>
		<section class="aboutus-achievement-reverse">
			<div class="achievement-item">
				<div class="achievement-logo"><img src="<?php echo esc_url( $achievement_reverse['logo'] ); ?>"/></div>
				<div class="achievement-content">
					<div class="achievement-subtitle"><?php echo $achievement_reverse['subtitle']; ?></div>
					<h2 class="achievement-title"><?php echo $achievement_reverse['title']; ?></h2>
					<div class="achievement-list"><?php echo $achievement_reverse['list']; ?></div>
				</div>
			</div>
		</section>
<?php endif; ?>
