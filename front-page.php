<?php get_header();  ?>


<!-- Main Section -->
<main role="main" id="about">
	<section class="about">
		<div class="smallContainer">
			<h2><?php the_field('about_me_title') ?></h2>
			<div class="aboutImage">
				<?php $aboutImage = get_field('about_me_image') ?>
				<img src="<?php echo $aboutImage['url']; ?>" alt="<?php echo $aboutImage['alt']; ?>" />
			</div>
			<!-- /.aboutImage -->
			<div class="aboutContent">
				<p><?php the_field('about_me_content') ?></p>
			</div>
			<!-- /.aboutContent -->
			<a class="button" href=" <?php the_field('resume_link') ?>">Check Out My Resume</a>
		</div>
		<!-- /.aboutContainer -->	
	</section>  <!-- /.about -->
	<section class="skills">
		<div class="container">
			<div class="secondContainer">
				<?php 
					while(have_rows('skillssection')) : the_row();
				?>
					<div class="skillColumn">
						<h3> <?php the_sub_field('section_title'); ?></h3>
						<div class="skillList">
							<?php 
							while(have_rows('skills_per_column')) : the_row();
						?>
							<p> <?php the_sub_field('listitem'); ?></p>
							<?php endwhile; ?>
						</div>
						<!-- /.skillList -->
					</div>
					<!-- ./skillColumn -->
				<?php endwhile; ?>
			</div>
			<!-- /.secondContainer -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /.skills -->
	<section id="portfolio" class="portfolio">
		<div class="smallContainer">
			<h2>Portfolio</h2>
			<!-- Get the portfolio pieces from the custom post type -->
			<?php 
				$portfolioArgs = array(
					'post_type' => 'portfolio_items', 
					'posts_per_page' => '4'
					);
				$portfolioLoop = new WP_Query($portfolioArgs);
				if ($portfolioLoop->have_posts()) while ($portfolioLoop->have_posts()) : $portfolioLoop->the_post();
			?>
				<div class="portfolioItem">
					<div class="portfolioImage">
						<?php $portfolioImage = get_field('image') ?>
						<a href="<?php the_field('live')?>" target="_blank"><img src="<?php echo $portfolioImage['url']; ?>" alt="<?php echo $portfolioImage['alt']; ?>" /></a>
					</div>
					<!-- /.portfolioImage-->
					<div class="portfolioContent">
						<h3><?php the_title(); ?></h3>
						<p><?php the_content(); ?></p>
						<div class="tagContainer">
							<?php 
								while(have_rows('tags')) : the_row();
							?>
							<div class="tagItem">
								<h4><?php the_sub_field('tagitem') ?></h4>
							</div>
							<!-- /.tagItem -->
							<?php endwhile; ?>
						</div>
						<!-- /.tagContainer -->
						<div class="buttonContainer">
							<a role="button" class="button" href="<?php the_field('live') ?>"><p>View Live</p></a>
							<a role="button" class="button" href="<?php the_field('github') ?>"><p>View on Github</p></a>
						</div>
						<!-- /.buttonContainer -->
					</div>
					<!-- /.portfolioContent -->
				</div>
				<!-- /.portfolioItem -->
			<?php endwhile; // end the loop?>
			<!-- Do a reset to make sure the $post is back to the way it was for other loops -->
			<?php wp_reset_postdata(); ?>
		</div> <!-- /.container -->
	</section> <!-- ./portfolio -->
	<section class="contact" id="contact">
		<div class="container">
			<?php the_content(); ?>
		</div>
		<!-- /.container -->
	</section>
	<!-- /.contact -->
</main>

<?php get_footer(); ?>

