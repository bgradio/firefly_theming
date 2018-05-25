<article id="post-<?php the_ID(); ?>" class="ft__content guttered">
    <?php if( !is_front_page() ): ?>
        <h2 class="ft__content__article-title">
            <?php the_title(); ?>
        </h2>
    <?php endif; ?>

    <div class="ft__content__article-content clearfix">
        <?php the_content(); ?>
    </div>
</article>
