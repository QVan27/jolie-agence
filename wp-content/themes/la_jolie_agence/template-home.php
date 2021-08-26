<?php
/*
Template Name: Home
*/
get_header(); ?>
<main>
    <section id="banner">
        <div class="flexslider">

            <?php $args = array(
                'post_type' => 'slider',
                'post_status' => 'publish',
                'posts_per_page' => '4',
                'orderby' => 'date',
                'order' => 'ASC',
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) { ?>
                <ul class="slides">
                    <?php while ($the_query->have_posts()) {
                        $the_query->the_post();
                    ?>
                        <li><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" /></li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
    </section>

    <section id="second" class="fd-cr">
        <div class="second-box-1"></div>
        <div class="second-box-2">
            <div class="second-box-content">
                <h1>Wedding Planner en Nouvelle Aquitaine</h1>
                <div class="second-box-content-p">
                    <p>L'agence accompagne les futur(e)s marié (e)s et les mari (é)s
                        dans la création de leur évènement.
                    </p>
                    <p>a Jolie Agence est spécialisée dans l'organisation de mariag
                        son expertise, son authenticité et sa créativité vont vous guid
                        durant les préparatifs.</p>
                    <p>Confiez l'organisation de vos évènements à des professionne
                        de l'évènementiel, vous pourrez ainsi profitez de votre gran
                        moment en toute sérénité.
                    </p>
                </div>
                <a href="#">En savoir plus</a>
            </div>
        </div>
    </section>

    <section id="third">
        <div class="third-box-1">
            <div class="third-box-content">
                <h2>Qui sommes nous ?</h2>
                <p class="adeline">Adeline ROUX - La Jolie Agence</p>
                <div class="third-box-content-p">
                    <p class="wedding">WEDDING & EVENT PLANNER AU PAYS BASQUE, GIRONDE, CHARENTE-MARITIME ET PARTOUT OU IL Y A DU BONHEUR !</p>
                    <p class="tabac"> La Jolie Agence crée sur mesure chaque évènements afin qu'il soit unique. L'agence possède un carnet d'adresse de professionnels de confiance pour que votre journée soit à votre image et à la hauteur de vos envies!</p>
                    <p class="italic">"Chaque nouvelle rencontre est un voyage"</p>
                </div>
                <a class="cta-see-more-tabac" href="<?php echo esc_url(home_url('a-propos')); ?>">En savoir plus</a>
            </div>
        </div>
        <div class="third-box-2 bp-b"></div>
    </section>

    <section id="fourth" style="background-image: url(<?= get_template_directory_uri() . '/asset/img/table.jpg' ?>);">
        <div class="overlay-fourth"></div>
        <div class="fourth-box-content">
            <h3>WEDDING PLANNER EN NOUVELLE AQUITAINE</h3>
            <p class="push-fourth-content">Fermez les yeux... Imaginez...</p>
            <p class="laj-right">La Jolie Agence le créer pour vous !</p>
        </div>
    </section>

    <section id="fifth">
        <h2>Nos Prestations</h2>
        <div class="fifth-bigbox-prestation">
            <div class="text-prestation">
                <p>Spécialiste des mariages intimistes et l'Elopement. L'agence vous accompagne de la création à l'organisation complète de votre évènement. Créative, perfectionniste avec un grain de folie, Adeline est à l'écoute de vos besoins et envies.Son objectif est de sublimer vos moments de bonheur et vous créer des instants inoubliables.</p>
            </div>
            <div id="fifth-content">
                <div class="container-card-flip">
                    <div class="container-prestation">
                        <div class="flipper">
                            <div class="front">
                                <div class="img-card img-card-one">
                                    <style>
                                        .img-card-one {
                                            background: url(<?= get_template_directory_uri() . '/asset/img/wedding-day.jpg' ?>) no-repeat center;
                                            background-size: cover;
                                        }
                                    </style>
                                </div>
                                <h3 class="fifth-caption">Wedding day</h3>
                            </div>
                            <div class="back">
                                <a href="<?php echo esc_url(home_url('wedding-day')); ?>">
                                    <h4>Organisation de Mariage</h4>
                                </a>
                                <p class="description">Venez découvrir les différentes formules qui vous correspondent pour votre mariage: <br>Organisation complète ou partielle" <br>Coordination Jour J<br>Elopement<br><span class="description_span">Barbara Luzynska</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-card-flip">
                    <div class="container-prestation">
                        <div class="flipper">
                            <div class="front">
                                <div class="img-card img-card-two">
                                    <style>
                                        .img-card-two {
                                            background: url(<?= get_template_directory_uri() . '/asset/img/sweet-moments.jpg' ?>) no-repeat center;
                                            background-size: cover;
                                        }
                                    </style>
                                </div>
                                <h3 class="fifth-caption">Sweet Moments</h3>
                            </div>
                            <div class="back">
                                <a href="<?php echo esc_url(home_url('sweet-moments')); ?>">
                                    <h4>Organisation d'évènements</h4>
                                </a>
                                <p class="description">Vous souhaitez créer ou
                                    recréer le moment magique à
                                    travers :
                                    <br>Une demande en Mariage
                                    <br>"Un Renouvellement de vœux"
                                    <br>Baby Shower
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-card-flip">
                    <div class="container-prestation">
                        <div class="flipper">
                            <div class="front">
                                <div class="img-card img-card-three">
                                    <style>
                                        .img-card-three {
                                            background: url(<?= get_template_directory_uri() . '/asset/img/wedding-temoins.jpg' ?>) no-repeat center;
                                            background-size: cover;
                                        }
                                    </style>
                                </div>
                                <h3 class="fifth-caption">Wedding Témoins</h3>
                            </div>
                            <div class="back">
                                <a href="<?php echo esc_url(home_url('wedding-temoins')); ?>">
                                    <h4>Spécial Témoin</h4>
                                </a>
                                <p class="description">Il est l'heure pour les témoins
                                    de rentrer en scène. Pour
                                    cela, La Jolie Agence vous
                                    propose différents services :
                                    <br>Enterrement de vie de jeune
                                    fille et de garçon
                                    <br>SOS TEMOIN
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="more-services"><a href="<?php echo esc_url(home_url('prestation')); ?>" class="cta-see-more-tabac">Découvrir les prestations</a></div>
        </div>
    </section>

    <section id="third" class="fd-cr ">
        <div class="third-box-1">
            <div class="top-bar-tabac"></div>
            <div class="bottom-bar-tabac"></div>
            <div class="third-box-content">
                <h2>Blog</h2>
                <p class="adeline">Qu'est-ce qu'un shooting d'inspiration ?</p>
                <div class="third-box-content-p">
                    <p class="tabac">Futur(e)s marié(e)s, vous recherchez des idées de décoration, une ambiance que vous avezvu sur internet, un costume avec la même coupe que celui du prince Harry à son mariage... (bon peut-être pas) mais en tout cas, toutes ces images vous font rêver, est ce qu'il est possible de réaliser la même scénographie que sur la photo ?</p>
                </div>
                <a class="cta-see-more-tabac" href="<?php echo esc_url(home_url('blog')); ?>">Voir plus d'articles</a>
            </div>
        </div>
        <div class="third-box-2 img-2"></div>
    </section>

</main>
<?php
get_footer();
