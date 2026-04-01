<?php get_header(); ?>

<main id="primary" class="site-main">


    <!-- HERO SECTION----------------------------------------------------------------------------------------- -->
    <section class="my-hero-section website-section">
        <?php
        // 1. Fetch the image URL from ACF
        $hero_url = get_field('homepage_hero_image');
        if (! $hero_url) {
            $hero_url = get_template_directory_uri() . '/assets/images/lac-de-neuchatel.webp';
        }
        ?>

        <!-- Centered Hero Text -->
        <div class="hero-intro centered-hero-text">
            <div class="hero-title">
                <h1>Bâteau École Grandson</h1>
                <h2 class="highlight-title">Cours de bâteau, sur le lac de Neuchâtel</h2>
            </div>
            <div class="hero-descr">
                Vous souhaitez obtenir votre permis de navigation moteur (catégorie A) sur le lac de Neuchâtel ?<br>
                Nous vous proposons une formation complète, alliant théorie et pratique, pour naviguer en toute sérénité.
            </div>
        </div>

        <!-- Hero Image Below Text -->
        <div class="hero-image-container">
            <!-- <div class="logo-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="" class="logo-hero">
            </div> -->
            <div class="image-container">
                <img src="<?php echo esc_url($hero_url); ?>" alt="Dynamic Homepage Hero" class="hero-intro-picture">
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
                        Les heures de pratique se déroulent à bord de notre bâteau semi rigide 3D Tender de 5m50, propulsé par un moteur de 70 cv 4 temps, très facile à manœuvrer et idéal pour l'apprentissage.
                    </div>
                </div>
            </div>

            <div class="service-block">
                <div class="service-block-img" style="background-image: url('<?php echo esc_url($service_image_2); ?>');"></div>
                <div class="service-block-text">
                    <h3 class="service-block-title">Les cours</h3>
                    <div class="service-block-descr">
                        Nos leçons sont flexibles, adaptées à votre rythme et axées sur la sécurité et la maîtrise technique, avec des sessions disponibles en semaine et le week-end.
                    </div>
                </div>
            </div>

            <div class="service-block">
                <div class="service-block-img" style="background-image: url('<?php echo esc_url($service_image_3); ?>');"></div>
                <div class="service-block-text">
                    <h3 class="service-block-title">Le lieu</h3>
                    <div class="service-block-descr">
                        Entre eaux calmes et infrastructures portuaires de qualité, vous apprenez à naviguer dans l’un des plus beaux environnements de la région, avec des conditions de navigation variées pour une expérience d’apprentissage riche.
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
                    Préparation à l’examen de conduite
                </div>
                <h2>
                    Votre réussite au fil de l’eau
                </h2>
            </div>

            <div class="benefit-intro-descr">
                Nous vous formerons à la pratique à bord de notre bateau. Vous apprendrez à manœuvrer et maîtriser un bateau afin de vous sentir à l’aise et en toute sécurité à la barre.
                Nous verrons ensemble les diverses manœuvres d’accostage, de mise en place, de navigation, d'homme à la mer, d’urgence, etc.
                Il faut prévoir environ 15 heures de cours pratiques pour la préparation.
                Nous vous formerons afin que vous puissiez atteindre les différents objectifs de l’examen pratique qui sont :
            </div>

        </div>

        <div class="benefit-blocks-container">

            <div class="benefit-block">
                <h3 class="benefit-block-title">Maîtrise de son véhicule</h3>
                <div class="benefit-block-descr">
                    Maîtriser le bateau afin de ne pas créer de situations dangereuses sur les eaux et réagir de façon appropriée si de telles situations surviennent malgré tout
                </div>
            </div>

            <div class="benefit-block">
                <h3 class="benefit-block-title">Observation de son environnement</h3>
                <div class="benefit-block-descr">
                    Observer et analyser l’environnement de navigation pour prendre des décisions éclairées et anticiper les situations potentiellement dangereuses.
                </div>
            </div>

            <div class="benefit-block">
                <h3 class="benefit-block-title">Respect des règles de navigation</h3>
                <div class="benefit-block-descr">
                    Faire preuve d’égards envers autrui afin de contribuer à la sécurité de tous les usagers et notamment des plus vulnérables. </div>
            </div>

        </div>

    </section>



    <!-- THEORIE SECTION----------------------------------------------------------------------------------------- -->
    <section class="website-section">
        <div class="section-heading">
            <div class="title-header">
                Préparation à l’examen théorique
            </div>
            <h2>
                Divers options de préparation
            </h2>
        </div>
        <div class="theory-section-intro">
            Vous avez à disposition plusieurs moyens pour vous préparer à l’examen théorique:
            <ul>
                <li>
                    Acheter les livres fournis par le Service de Automobiles et de la Navigation: "Naviguez dans les eaux suisses" ainsi que le catalogue d'éxamen.
                </li>
                <li>
                    Utiliser l'application d'apprentissage en ligne du service des automobiles et de la navigation
                    <div><a href="https://www.cut-demo.ch/">Liens</a></div>
                </li>
                <li>
                    D'autres manuels ou applications qui peuvent être commandés dans des magasins spécialisés ou sur Internet
                </li>
            </ul>

        </div>
        <div class="theory-section-about">
            Vous avez également la possibilité de commencer la pratique en même temps que la théorie ce qui vous permettra sans aucun doute d’approcher cette dernière de manière plus agréable et avec plus de facilité.Une fois que vous serez prêt, vous pourrez vous inscrire auprès du Service des Automobiles et de la Navigation de votre canton de domicile qui vous informera au sujet des dates des prochains examens.
        </div>

        <div class="theory-special-content">
            <div class="special-content-title-container">
                <div class="special-content-title">
                    <h3>Matériel de formation gratuit</h3>
                </div>
                <div class="special-content-sub-title">
                    <div class="title-header">Mis à disposition par Dominique Brun</div>
                </div>
            </div>
            <div class="theory-special-content-about">
                Nous avons la chance de pouvoir bénéficier de matériel de formation gratuit mis à disposition par Dominique Brun, un collègue passionné de navigation et formateur expérimenté. Ce matériel comprend des supports de cours, des vidéos de manoeuvre et des conseils pour réussir l’examen théorique.
            </div>
            <div class="theory-special-content-link">
                <a href="https://dom-auto-moto-bateau-ecole-mv0drx087gfy9mx2.builder-preview.com/bateaux">Liens vers le blog de Dominique</a>
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
                    <div class="prices">
                     
                        <div class="price-list">
                            <div class="picice-list-title-container">
                                <h3 class="price-list-title">Tarif horaire</h3>
                                <div class="pirce-list-subtitle">Du lundi au samedi jusqu'à 19h</div>
                            </div>

                            <div class="price-list-item-container">
                                <div class="price-list-item">
                                    <div class="price-list-item-title">Tout inclus</div>
                                    <div class="price-list-item-value">CHF 100.-</div>
                                </div>
                                <div class="price-list-item">
                                    <div class="price-list-item-title">Avec votre bâteau</div>
                                    <div class="price-list-item-value">CHF 80.-</div>
                                </div>
                            </div>

                            <div class="picice-list-title-about">
                                Les dimanches toute la journe, et autre jours de la semaine au delà de 19h, les tarifs sont majorés de 25%. </br> Le paiement est à effectuer à la fin de chaque leçon.
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="teacher-picture">
                <div class="teacher-image-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/raphael-party-instructeur.webp" alt="Photo de Raphaël Party" class="teacher-image">
                </div>
            </div>
        </div>

    </section>

    <!-- TARIFS SECTION----------------------------------------------------------------------------------------- -->
    <section class="website-section">

    </section>

    <!-- GALLERIES SECTION----------------------------------------------------------------------------------------- -->
    <!-- <section class="website-section">

    </section> -->

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
                        <div class="contact-item-descr adresse-descr">
                            <div>
                                Chem. du Pécos 1
                            </div>
                            <div>
                                1422 Grandson
                            </div>
                        </div>
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