<?php get_header(); ?>
    <main id="main">
        <div id="primary">
            <div id="content">
                <?php if( have_posts() ): ?>
                    <?php while ( have_posts() ): the_post(); ?>
                        <?php get_template_part( 'content', get_post_format() ); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div id="secondary">

        </div>
    </main>
<?php get_footer(); ?>
