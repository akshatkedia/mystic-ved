<?php
/**
 * The template used for displaying page content in template-homepage.php
 *
 * @package storefront
 */

?>

<?php if ( is_front_page() ) : ?>
	<?php if ( have_rows('slide') ) : ?>
		<div class="homepage-slider">
			<?php while ( have_rows('slide') ) : the_row(); ?>
				<?php
					$image = get_sub_field('image');
					$size = 'mystic-ved-slider-image-desktop';
				?>
				<div>
					<?= wp_get_attachment_image( $image['ID'], $size ); ?>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
<?php endif; ?>
