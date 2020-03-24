<?php /* Template Name: Inner Page */ get_header(); ?>
<style>
    .outer-container.hero {
        display: none!important;
    }
    main {
        margin-bottom: 30px;
        min-height: calc(100vh - 270px);
    }
    .gfield {
        padding: 20px 10px 0;
        width: 100%!important;
    }
    .main-content--inner.inner-container.follow-up {
        display: none!important;
    }
</style>
<div class="inner-container">
	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>





			</article>
			<!-- /article -->

		<?php endwhile; ?>
        <?php endif; ?>


		</section>
		<!-- /section -->
	</main>
</div>

<?php get_footer(); ?>