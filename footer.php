        </article>

        <article class="ft__footer-container guttered">
            <footer class="ft__footer">
                <?php if ( is_active_sidebar( 'firefly_footer_sidebar_one' ) ) : ?>
                    <section id="footer-sidebar-one" class="footer-sidebar widget-area" role="complementary">
                        <?php dynamic_sidebar( 'firefly_footer_sidebar_one' ); ?>
                    </section>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'firefly_footer_sidebar_two' ) ) : ?>
                    <section id="footer-sidebar-two" class="footer-sidebar widget-area" role="complementary">
                        <?php dynamic_sidebar( 'firefly_footer_sidebar_two' ); ?>
                    </section>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'firefly_footer_sidebar_three' ) ) : ?>
                    <section id="footer-sidebar-three" class="footer-sidebar widget-area" role="complementary">
                        <?php dynamic_sidebar( 'firefly_footer_sidebar_three' ); ?>
                    </section>
                <?php endif; ?>
            </footer>

            <section class="ft__copyright-container guttered">
                <?php do_action( 'firefly_footer_copyright_bar' ); ?>
            </section>
        </article>

    </div>

    <?php wp_footer(); ?>
</body>
</html>
