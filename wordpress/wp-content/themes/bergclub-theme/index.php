<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */
get_header() ?>

<div id="myCarousel" class="carousel slide header-carousel" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#headerCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#headerCarousel" data-slide-to="1"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="header-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/berg1.jpg" alt="Berg Landschaft">
        </div>

        <div class="item">
            <img class="header-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/berg2.jpg" alt="Berg Landschaft">
        </div>
    </div>
</div>

<img class="header-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/BergclubBernLogo.png" alt="Logo">

<div class="container">

    <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    </div>

</div><!-- /.container -->

<?php get_footer() ?>
