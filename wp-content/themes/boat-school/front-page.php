<?php get_header(); ?>

<main id="primary" class="site-main">

    <section class="my-hero-section">

        <?php
        // 1. Fetch the image URL from ACF
        $hero_url = get_field('homepage_hero_image');

        // 2. Fallback to a placeholder if the user hasn't uploaded one yet
        if (! $hero_url) {
            $hero_url = get_template_directory_uri() . '/assets/images/default.jpg';
        }
        ?>

        <div class="hero-image-container">
            <div class="logo-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="" class="logo-hero">
            </div>
            <div class="image-container">
                <img src="<?php echo esc_url($hero_url); ?>" alt="Dynamic Homepage Hero" class="js-parallax-target">
            </div>

        </div>
        <!-- <?php
                // echo wp_get_attachment_image(get_field('homepage_hero_image'), 'full'); 
                ?> -->
        <div class="hero-intro">
            <div class="hero-title">
                <h1>Cours de bâteau</h1>
                <div>à Grandson, sur le lac de Neuchâtel</div>
            </div>

            <div class="hero-descr">
                Bienvenue au Bateau-école de Grandson. Vous souhaitez obtenir votre permis de navigation moteur (catégorie A) sur le lac de Neuchâtel ? Nous vous proposons une formation complète, alliant théorie et pratique, pour naviguer en toute sérénité.
            </div>

    </section>
</main>

<?php get_footer(); ?>