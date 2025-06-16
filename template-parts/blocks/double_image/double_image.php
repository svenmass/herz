<?php

/* Double Image Slider Block Template. */


?>

<?php
// *Repeater
// repeater_slider
// *Sub-Fields
// carousel_image
// carousel_text
// check if the repeater field has rows of data
if (have_rows('repeater_slider')) :
	$i = 0; // Set the increment variable

	echo '<div id="carouselExampleSlidesNav3" class="row carousel slide no-gutters" data-ride="carousel">
			<ol class="carousel-indicators">';

	// loop through the rows of data for the tab header
	while (have_rows('repeater_slider')) : the_row();
?>

		<li data-target="#carouselExampleSlidesNav3" data-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) echo 'active'; ?>"></li>

	<?php $i++; // Increment the increment variable

	endwhile; //End the loop

	echo 	'</ol>
		  <div class="carousel-inner">';

	// loop through the rows of data for the tab header
	$i = 0; // Set the increment variable
	while (have_rows('repeater_slider')) : the_row();

		$imageleft = get_sub_field('double_image_links');
		$imageright = get_sub_field('double_image_rechts');
	?>

		<div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">
			<div class="row space-between">
				<div class="col-md-6 col-sm-12 col-has-full">
					<div class="head-box-left teaserelement-2-box double-image">
						<img class="d-block w-100" src="<?php echo $imageleft; ?>">
					</div>
				</div>

				<div class="col-md-6 col-sm-12 col-has-full">
					<div class="head-box-left teaserelement-2-box double-image">
						<img class="d-block w-100" src="<?php echo $imageright; ?>">
					</div>
				</div>
			</div>
		</div>


<?php $i++; // Increment the increment variable
	endwhile; //End the loop

	echo '</div>
			 <a class="carousel-control-prev" href="#carouselExampleSlidesNav3" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleSlidesNav3" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
		</div>';
else :
// no rows found
endif;
