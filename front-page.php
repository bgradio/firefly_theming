<?php get_header(); ?>
    <main id="main">
        <article id="content">
            <div class="ft__color-bar"></div>
            <section class="ft__front-banner-image"></section>
            <?php if( have_posts() ): ?>
                <?php while ( have_posts() ): the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </article>
    </main>
<?php get_footer(); ?>
