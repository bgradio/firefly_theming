<article id="post-<?php the_ID(); ?>" class="content">
    <h2 class="content__article-title">
        <a href="<?php the_permalink(); ?>" title="the_title_attribute();"><?php the_title(); ?></a>
    </h2>

    <div class="content__article-content">
        <?php the_content(); ?>
    </div>
</article>
