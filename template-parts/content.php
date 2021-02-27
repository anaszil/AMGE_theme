<article <?php post_class(); ?> class="post" id="post_content">

	<div class="post-inner">

		<div class="entry-content">

			<?php
				$title = get_the_title();
			    $content = get_the_content();
			?>
			<h1 id="title_post"><?php echo $title; ?></h1>
			<main id="content_post">
				<?php echo $content; ?>
			</main>

		</div><!-- .entry-content -->

	</div><!-- .post-inner -->

	<?php

	if ( is_single() ) {

		get_template_part( 'template-parts/navigation' );

	}

		?>

	<div class="comments-wrapper section-inner container">

		<?php #comments_template(); ?>

	</div><!-- .comments-wrapper -->


</article><!-- .post -->
