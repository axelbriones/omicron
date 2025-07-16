<?php
/**
 * Template Name: Home Page
 *
 * @package Omicron
 */

get_header(); ?>

<div class="min-h-[450px] rounded-lg">
    <?php get_template_part( 'template-parts/sections/hero' ); ?>
    <section id="empresa">
        <?php get_template_part( 'template-parts/sections/about' ); ?>
    </section>
    <section id="productos">
        <?php get_template_part( 'template-parts/sections/products-navigation' ); ?>
    </section>
    <section id="servicios">
        <?php get_template_part( 'template-parts/sections/services' ); ?>
    </section>
    <section id="testimonios">
        <?php get_template_part( 'template-parts/sections/testimonials' ); ?>
    </section>
    <section id="carreras">
        <?php get_template_part( 'template-parts/sections/careers' ); ?>
    </section>
    <section id="contacto">
        <?php get_template_part( 'template-parts/sections/contact' ); ?>
    </section>
</div>

<?php get_footer(); ?>
