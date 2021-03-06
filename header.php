<!doctype HTML>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Firefly Theming</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="page" class="ft__container">
        <article class="ft__header-container">
            <header class="ft__header clearfix guttered">
                <div class="ft__header__site-title">
                    <h1>
                        <a href="<?php echo get_bloginfo('url') ?>">
                            <?php echo get_bloginfo('name'); ?>
                        </a>
                    </h1>
                </div>
                <nav>
                    <?php wp_nav_menu( array( 'theme_location' => 'main-nav' ) ); ?>
                </nav>
            </header>
        </article>

        <article class="ft__content-container">
