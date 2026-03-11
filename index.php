<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">

    <div class="logo">
        <?php
        if ( has_custom_logo() ) {
            the_custom_logo();
        } else {
            ?>
            <a href="<?php echo home_url(); ?>">
                <?php bloginfo('name'); ?>
            </a>
            <?php
        }
        ?>
    </div>

</header>
<main class="landing-page">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content(); // Elementor will inject all design here
        endwhile;
    endif;
    ?>
</main>



<?php wp_footer(); ?>
</body>
</html>