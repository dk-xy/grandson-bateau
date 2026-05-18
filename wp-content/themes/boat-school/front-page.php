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
        $hero_logo_url = get_template_directory_uri() . '/assets/bateau-ecole-grandson-logo.png';
        ?>

        <!-- Centered Hero Text -->
        <div class="hero-intro centered-hero-text">
            <div class="logo-hero-intro-container">
                <!-- include wp-content\themes\boat-school\assets\bateau-ecole-grandson-logo-text.png -->
                <img src="<?php echo esc_url($hero_logo_url); ?>" alt="BBateau École Grandson" class="logo-hero-intro" style="max-width: 100%; height: auto; margin-bottom: 96px;">
            </div>
            <div class="hero-title">
                <!-- <h1>Bateau École Grandson</h1> -->
                <h2 class="highlight-title">Cours de bateau, sur le lac de Neuchâtel</h2>
            </div>
            <div class="hero-descr">
                Vous souhaitez obtenir votre permis de conduire bateau moteur (catégorie A) sur le lac de Neuchâtel ?<br>
                Nous vous proposons une formation pratique complète pour naviguer en toute sérénité.
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

    <section class="website-section" id="services">
        <div class="services-section-title-block title-block">
            <div class="section-heading">
                <div class="title-header">
                    Nos services
                </div>
                <h2>
                    Formation au permis de conduire bateau moteur (Cat. A)
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
                        Les heures de pratique se déroulent à bord de notre bateau semi-rigide 3D Tender de 5m50, propulsé par un moteur de 70 cv 4 temps, très facile à manœuvrer et idéal pour l'apprentissage.
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
                        En bénéficiant d'infrastructures portuaires de qualité, vous apprenez à naviguer dans l’un des plus beaux environnements de la région, entre eaux calmes et agitées, pour une expérience d’apprentissage riche.
                    </div>
                </div>
            </div>
        </div>

    </section>



    <!-- BENEFIT SECTION----------------------------------------------------------------------------------------- -->
    <section class="website-section" id="objectifs">
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
                <div class="benefit-block-title-container">
                    <h3 class="benefit-block-title">Maîtrise</h3>
                    <div class="benefit-block-subtitle">de son véhicule</div>
                </div>

                <div class="benefit-block-descr">
                    Maîtriser le bateau afin de ne pas créer de situations dangereuses sur les eaux et réagir de façon appropriée si de telles situations surviennent malgré tout
                </div>
            </div>

            <div class="benefit-block">
                <div class="benefit-block-title-container">
                    <h3 class="benefit-block-title">Observation</h3>
                    <div class="benefit-block-subtitle">de son environnement</div>
                </div>
                <div class="benefit-block-descr">
                    Observer et analyser l’environnement de navigation pour prendre des décisions éclairées et anticiper les situations potentiellement dangereuses.
                </div>
            </div>

            <div class="benefit-block">
                <div class="benefit-block-title-container">
                    <h3 class="benefit-block-title">Respect </h3>
                    <div class="benefit-block-subtitle">des règles de navigation</div>
                </div>
                <div class="benefit-block-descr">
                    Faire preuve d’égards envers autrui afin de contribuer à la sécurité de tous les usagers et notamment des plus vulnérables. </div>
            </div>

        </div>

    </section>



    <!-- THEORIE SECTION----------------------------------------------------------------------------------------- -->
    <section class="website-section theory-section" id="theorie">
        <div class="section-heading">
            <div class="title-header">
                Préparation à l’examen théorique
            </div>
            <h2>
                Diverses options de préparation
            </h2>
        </div>
        <div class="theory-section-intro">
            Vous avez à disposition plusieurs moyens pour vous préparer à l’examen théorique:
            <ul>
                <li>
                    Acheter les livres fournis par le Service des Automobiles et de la Navigation: "Naviguez dans les eaux suisses" ainsi que le catalogue d'examen.
                </li>
                <li>
                    Utiliser l'application d'apprentissage en ligne du service des automobiles et de la navigation

                </li>
                <li>
                    D'autres manuels ou applications qui peuvent être commandés dans des magasins spécialisés ou sur Internet
                </li>
            </ul>
        </div>
        <div class="theory-section-about">
            Vous avez également la possibilité de <b>commencer la pratique en même temps que la théorie</b> ce qui vous permettra sans aucun doute d’approcher cette dernière de manière plus agréable et avec plus de facilité. Une fois que vous serez prêt, vous pourrez vous inscrire auprès du Service des Automobiles et de la Navigation de votre canton de domicile qui vous informera au sujet des dates des prochains examens.
        </div>

        <div class="usefull-theory-links">
            <h3>
                Liens utiles
            </h3>
            <div class="usefull-theory-links-descr">
                Nous avons sélectionné pour vous quelques ressources en ligne qui pourront vous être utiles dans votre préparation à l’examen théorique.
            </div>

            <div class="all-links-container">
                <div class="exam-links">
                    <div class="exam-link-title">Simulateur d'examen en ligne</div>
                    <div class="link-button-container">
                        <div class="link-button"> <a href="https://www.cut-demo.ch/" target="_blank">Accéder au simulateur</a></div>
                    </div>

                </div>

                <div class="app-links">
                    <div class="exam-link-title">Application mobile</div>
                    <div class="app-links-container">
                        <div class="link-button app-store-link">
                            <a href="https://apps.apple.com/ch/app/bateauth%C3%A9orie-a-d-suisse/id552360826?l=fr-FR" target="_blank">
                                <span class="link-button-icon"><?php include 'assets/icons/applinks/apple.svg'; ?></span>
                                Apple App Store
                            </a>
                        </div>
                        <div class="link-button play-store-link">
                            <a href="https://play.google.com/store/apps/details?id=ch.bootstheorie.app&hl=fr&pli=1" target="_blank">
                                <span class="link-button-icon"><?php include 'assets/icons/applinks/google-play-store.svg'; ?></span>
                                Google Play Store
                            </a>
                        </div>
                    </div>

                </div>
            </div>



        </div>


        <div class="theory-special-content">
            <div class="special-content-title-container">
                <div class="special-content-title">
                    <h4>Matériel de formation gratuit</h4>
                </div>
                <div class="special-content-sub-title">
                    <div class="title-header">Mis à disposition par Dominique Brun</div>
                </div>
            </div>
            <div class="theory-special-content-about">
                Nous avons la chance de pouvoir bénéficier de matériel de formation gratuit mis à disposition par Dominique Brun, un collègue passionné de navigation et formateur expérimenté. Ce matériel comprend des supports de cours, des vidéos de manœuvre et des conseils pour réussir l'examen théorique.
            </div>
            <div class="theory-special-content-link">
                <a href="https://auto-moto-bateau-ecole.ch/bateaux">Liens vers le blog de Dominique</a>
            </div>
        </div>
    </section>

    <!-- TEACHER SECTION----------------------------------------------------------------------------------------- -->
    <section class="website-section" id="instructeur">
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
                <div class="teacher-highlight-grid">
                    <div class="teacher-highlight-item">
                        <div class="teacher-highlight-icon">
                            <?php include 'assets/icons/teacher/history.svg'; ?>
                        </div>
                        <div class="teacher-highlight-content">
                            Plus de 20 ans d’expérience en navigation
                        </div>
                    </div>
                    <div class="teacher-highlight-item">
                        <div class="teacher-highlight-icon">
                            <?php include 'assets/icons/teacher/academic.svg'; ?>
                        </div>
                        <div class="teacher-highlight-item">
                            Une centaine d'étudiants formés avec succès
                        </div>
                    </div>
                    <div class="teacher-highlight-item">
                        <div class="teacher-highlight-icon">
                            <?php include 'assets/icons/teacher/globe.svg'; ?>
                        </div>
                        <div class="teacher-highlight-item">
                            Navigué sur les plus beaux lacs et mers du monde
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
    <section class="prices-section website-section" id="tarifs">
        <div class="prices-section-container">
            <div class="boat-picture">
                <div class="boat-image-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/bateau-semi-rigide-3d-tender.webp" alt="Photo de Raphaël Party" class="boat-image">
                </div>
            </div>
            <div class="prices">

                <div class="price-list">
                    <div class="picice-list-title-container">
                        <h3 class="price-list-title">Tarif horaire</h3>
                        <div class="price-list-subtitle">Du lundi au samedi jusqu'à 19h</div>
                        <div class="price-list-subtitle payment-info">
                            Le paiement est à effectuer à la fin de chaque leçon.</div>
                    </div>

                    <div class="price-list-item-container">
                        <div class="price-list-item">
                            <div class="price-list-item-title">Tout inclus</div>
                            <div class="price-list-item-value">CHF 100.-</div>
                        </div>
                        <div class="price-list-item">
                            <div class="price-list-item-title">Avec votre bateau</div>
                            <div class="price-list-item-value">CHF 80.-</div>
                        </div>
                    </div>



                    <div class="picice-list-title-about">
                        Les dimanches durant toute la journée, et autres jours de la semaine au-delà de 19h, les tarifs<b> sont majorés de 25%. </b>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- GALLERIES SECTION----------------------------------------------------------------------------------------- -->
    <section class="website-section gallery-section">
        <div class="section-heading">
            <div class="title-header">
                En voir plus de nos aventures
            </div>
            <h2>
                Galleries
            </h2>
        </div>

        <div class="gallery-container">
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/thumbnails/thumbnail-1.webp" alt="Photo de Raphaël Party" class="gallery-image">
                <div class="gallery-label">Aventure 1</div>
            </div>
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/thumbnails/thumbnail-2.webp" alt="Photo de Raphaël Party" class="gallery-image">
                <div class="gallery-label">Aventure 2</div>
            </div>
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/thumbnails/thumbnail-3.webp" alt="Photo de Raphaël Party" class="gallery-image">
                <div class="gallery-label">Aventure 3</div>
            </div>

        </div>
    </section>

    <!-- CONTACT SECTION----------------------------------------------------------------------------------------- -->
    <section class="website-section contact-main-section" id="contact">
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
                        <div class="contact-item-title-container">
                            <div class="contact-item-icon">
                                <?php include 'assets/icons/contact/location-pin.svg'; ?>
                            </div>
                            <div class="contact-item-title">Adresse</div>
                        </div>
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
                        <div class="contact-item-title-container">
                            <div class="contact-item-icon">
                                <?php include 'assets/icons/contact/phone.svg'; ?>
                            </div>
                            <div class="contact-item-title">Téléphone</div>
                        </div>

                        <div class="contact-item-descr">+41 79 123 45 67</div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-title-container">
                            <div class="contact-item-icon">
                                <?php include 'assets/icons/contact/mail-open.svg'; ?>
                            </div>
                            <div class="contact-item-title">Email</div>
                        </div>
                        <div class="contact-item-descr">contact@grandson-voile.ch</div>
                    </div>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="59a5791" title="Contact form 1"]'); ?>
            </div>
    </section>


</main>

<?php get_footer(); ?>