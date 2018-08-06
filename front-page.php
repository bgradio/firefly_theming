<?php get_header(); ?>
    <main id="main">
        <div id="primary">
            <section id="content">
                <div class="ft__color-bar"></div>
                <div class="ft__front-banner-image"></div>
                <?php if( have_posts() ): ?>
                    <?php while ( have_posts() ): the_post(); ?>
                        <?php get_template_part( 'content', get_post_format() ); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </section>
        </div>
    </main>
<?php get_footer(); ?>
