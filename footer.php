        </div>

        <div class="ft__footer-container guttered">
            <footer class="ft__footer">
                <?php if ( is_active_sidebar( 'firefly_footer_sidebar_one' ) ) : ?>
                    <div id="footer-sidebar-one" class="footer-sidebar widget-area" role="complementary">
                        <?php dynamic_sidebar( 'firefly_footer_sidebar_one' ); ?>
                    </div>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'firefly_footer_sidebar_two' ) ) : ?>
                    <div id="footer-sidebar-two" class="footer-sidebar widget-area" role="complementary">
                        <?php dynamic_sidebar( 'firefly_footer_sidebar_two' ); ?>
                    </div>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'firefly_footer_sidebar_three' ) ) : ?>
                    <div id="footer-sidebar-three" class="footer-sidebar widget-area" role="complementary">
                        <?php dynamic_sidebar( 'firefly_footer_sidebar_three' ); ?>
                    </div>
                <?php endif; ?>
            </footer>

            <div class="ft__copyright-container guttered">
                <?php do_action( 'firefly_footer_copyright_bar' ); ?>
            </div>
        </div>

    </div>

    <?php wp_footer(); ?>
</body>
</html>
