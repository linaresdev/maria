<?php get_header(); ?>

<article class="container">

	<section class="col-12">
        <?php while(have_posts()):the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div>
            <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
	</section>
	
</article>

<?php get_footer(); ?>