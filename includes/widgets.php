<?php

function firefly_widgets_init() {
    register_sidebar(
        array(
            'name' => esc_html__( 'Footer Sidebar One', 'firefly-theming' ),
            'id' => 'firefly_footer_sidebar_one',
            'description' => esc_html__( 'Display widgets in footer sidebar one', 'firefly-theming' ),
            'before_widget' => '<aside id="%1$s" class="ft__widget widget-text"',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="ft__widget-title"><span>',
            'after_title' => '</span></h3>',
        )
    );

    register_sidebar(
        array(
            'name' => esc_html__( 'Footer Sidebar Two', 'firefly-theming' ),
            'id' => 'firefly_footer_sidebar_two',
            'description' => esc_html__( 'Display widgets in footer sidebar two', 'firefly-theming' ),
            'before_widget' => '<aside id="%1$s" class="ft__widget widget-text"',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="ft__widget-title"><span>',
            'after_title' => '</span></h3>',
        )
    );

    register_sidebar(
        array(
            'name' => esc_html__( 'Footer Sidebar Three', 'firefly-theming' ),
            'id' => 'firefly_footer_sidebar_three',
            'description' => esc_html__( 'Display widgets in footer sidebar three', 'firefly-theming' ),
            'before_widget' => '<aside id="%1$s" class="ft__widget widget-text"',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="ft__widget-title"><span>',
            'after_title' => '</span></h3>',
        )
    );
}

add_action( 'widgets_init', 'firefly_widgets_init' );