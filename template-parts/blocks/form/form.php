<?php

/* Form Block Template. */

?>
<?php acf_form_head(); ?>
<div id="primary">
	<div id="content" role="main" aria-labelledby="form-title">

		<?php /* The loop */ ?>
		<?php while (have_posts()) : the_post(); ?>

			<h1 id="form-title"><?php the_title(); ?></h1>

			<?php the_content(); ?>

			<p>My custom field: <?php the_field('testfeld'); ?></p>

			<?php acf_form(); ?>

		<?php endwhile; ?>

	</div><!-- #content -->
</div><!-- #primary -->