<?php get_header(); ?>

<main id="primary" class="site-main">


    <!-- HERO SECTION----------------------------------------------------------------------------------------- -->
    <section class="my-hero-section website-section">
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
                <img src="<?php echo esc_url($hero_url); ?>" alt="Dynamic Homepage Hero" class="hero-intro-picture">
            </div>

        </div>
        <!-- <?php
                // echo wp_get_attachment_image(get_field('homepage_hero_image'), 'full'); 
                ?> -->
        <div class="hero-intro">
            <div class="hero-title">
                <h1>Bâteau École Grandson</h1>
                <h2 class="highlight-title">Cours de bâteau, sur le lac de Neuchâtel</h2>
                <!-- <div class="sub-text">Cours de bâteau, sur le lac de Neuchâtel</div> -->
            </div>

            <div class="hero-descr">
                Vous souhaitez obtenir votre permis de navigation moteur (catégorie A) sur le lac de Neuchâtel ? </br> Nous vous proposons une formation complète, alliant théorie et pratique, pour naviguer en toute sérénité.
            </div>
        </div>
    </section>
    <!-- SERVICES SECTION----------------------------------------------------------------------------------------- -->

    <section class="website-section">
        <div class="services-section-title-block title-block">
            <div class="section-heading">
                <div class="title-header">
                    Nos services
                </div>
                <h2>
                    Formation au permis de conduire moteur (Cat. A)
                </h2>
            </div>

            <div class="section-descr">
                Notre école de navigation vous prépare à l’examen officiel de conduite. Idéalement situé près d’Yverdon-les-Bains, le port de Grandson offre un accès direct aux plus belles zones du lac de Neuchâtel.
            </div>
        </div>


        <div class="services-blocks-container">
            <?php
            // Get ACF images for each card
            $service_image_1 = get_field('service_image_1');
            $service_image_2 = get_field('service_image_2');
            $service_image_3 = get_field('service_image_3');
            ?>

            <div class="service-block">
                <div class="service-block-img" style="background-image: url('<?php echo esc_url($service_image_1); ?>');"></div>
                <div class="service-block-text">
                    <h3 class="service-block-title">Le bateau</h3>
                    <div class="service-block-descr">
                        Confortable et maniable, notre bateau est le partenaire idéal pour vos premières manœuvres comme pour vos examens de conduite.
                    </div>
                </div>
            </div>

            <div class="service-block">
                <div class="service-block-img" style="background-image: url('<?php echo esc_url($service_image_2); ?>');"></div>
                <div class="service-block-text">
                    <h3 class="service-block-title">Les cours</h3>
                    <div class="service-block-descr">
                        Nos leçons sont flexibles, adaptées à votre rythme et axées sur la sécurité et la maîtrise technique.
                    </div>
                </div>
            </div>

            <div class="service-block">
                <div class="service-block-img" style="background-image: url('<?php echo esc_url($service_image_3); ?>');"></div>
                <div class="service-block-text">
                    <h3 class="service-block-title">Le lieu</h3>
                    <div class="service-block-descr">
                        Entre eaux calmes et infrastructures portuaires de qualité, vous apprenez à naviguer dans l’un des plus beaux environnements de la région.
                    </div>
                </div>
            </div>
        </div>

    </section>



    <!-- BENEFIT SECTION----------------------------------------------------------------------------------------- -->
    <section class="website-section">
        <div class="benefit-intro-section title-block">

            <div class="section-heading">
                <div class="title-header">
                    Les cours sur mesure
                </div>
                <h2>
                    Votre réussite au fil de l’eau
                </h2>
            </div>

            <div class="benefit-intro-descr">
                Obtenir son permis de navigation moteur (catégorie A) est une étape passionnante. Notre méthode d’enseignement repose sur une approche progressive et personnalisée, conçue pour vous mettre en confiance dès la première sortie sur le lac de Neuchâtel
            </div>

        </div>

        <div class="benefit-blocks-container">

            <div class="benefit-block">
                <h3 class="benefit-block-title">Formation complète</h3>
                <div class="benefit-block-descr">
                    De la théorie à la pratique, nous couvrons tous les aspects nécessaires pour réussir votre examen de conduite.
                </div>
            </div>

            <div class="benefit-block">
                <h3 class="benefit-block-title">Flexibilité</h3>
                <div class="benefit-block-descr">
                    Nos horaires s’adaptent à votre emploi du temps, avec des sessions disponibles en semaine et le week-end.
                </div>
            </div>

            <div class="benefit-block">
                <h3 class="benefit-block-title">Environnement idéal</h3>
                <div class="benefit-block-descr">
                    Apprenez à naviguer dans un cadre naturel exceptionnel, avec des conditions de navigation variées pour une expérience d’apprentissage riche.
                </div>
            </div>

        </div>

    </section>

    <!-- TEACHER SECTION----------------------------------------------------------------------------------------- -->
    <section class="website-section">
        <div class="teacher-info">
            <div class="section-heading">
                <div class="title-header">
                    Raphaël Party, votre capitaine
                </div>
                <h2>
                    L’expérience au service de votre réussite
                </h2>
                <div class="teacher-section-container">
                    <div class="teacher-descr">
                        Naviguer est une passion, mais transmettre cet art est une vocation. Avec une parfaite connaissance du lac de Neuchâtel et des exigences de l’examen de navigation, je vous accompagne avec calme et méthode pour faire de vous un navigateur chevronné.
                    </div>
                </div>
            </div>



            <div class="teacher-picture">
                <div class="teacher-image-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/raph.jpg" alt="Photo de Raphaël Party" class="teacher-image">
                </div>
            </div>
        </div>

    </section>

    <!-- TESTIMONIALS SECTION----------------------------------------------------------------------------------------- -->
    <section class="website-section">

    </section>

    <!-- GALLERIES SECTION----------------------------------------------------------------------------------------- -->
    <section class="website-section">

    </section>

    <!-- CONTACT SECTION----------------------------------------------------------------------------------------- -->
    <section class="website-section">
        <div class="section-heading">
            <div class="title-header">
                Une question ?
            </div>
            <h2>
                Contactez-nous !
            </h2>
        </div>

        <div class="contact-section-container">

            <div class="contact-info">
                <div class="contact-section">
                    <div class="contact-item">
                        <div class="contact-item-title">Addresse</div>
                        <div class="contact-item-descr">Chem. du Pécos 1, 1422 Grandson</div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-title">Téléphone</div>
                        <div class="contact-item-descr">+41 79 123 45 67</div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-title">Email</div>
                        <div class="contact-item-descr">contact@grandson-voile.ch</div>
                    </div>
                </div>


                <?php echo do_shortcode('[contact-form-7 id="59a5791" title="Contact form 1"]'); ?>

            </div>
    </section>


</main>

<?php get_footer(); ?>