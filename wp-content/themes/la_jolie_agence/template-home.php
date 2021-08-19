<?php
/*
Template Name: Home
*/
get_header(); ?>
<main>
    <section id="banner" data-scroll-section>
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

    <section id="second" data-scroll-section>
        <div class="second-box-1"></div>
        <div class="second-box-2">
            <div class="second-box-content" data-scroll="" data-scroll-delay="0.09" data-scroll-speed="1">
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

    <section id="third" data-scroll-section>
        <div class="third-box-1">
            <div class="third-box-content" data-scroll="" data-scroll-delay="0.09" data-scroll-speed="1" data-scroll-call="dynamicColor" data-scroll-repeat="">
                <h2>Qui sommes nous ?</h2>
                <p class="adeline">Adeline ROUX - La Jolie Agence</p>
                <div class="third-box-content-p">
                    <p class="wedding">WEDDING & EVENT PLANNER AU PAYS BASQUE, GIRONDE, CHARENTE-MARITIME ET PARTOUT OU IL Y A DU BONHEUR !</p>
                    <p class="tabac"> La Jolie Agence crée sur mesure chaque évènements afin qu'il soit unique. L'agence possède un carnet d'adresse de professionnels de confiance pour que votre journée soit à votre image et à la hauteur de vos envies!</p>
                    <p class="italic">"Chaque nouvelle rencontre est un voyage"</p>
                </div>
                <a class="cta-see-more-tabac" href="#">En savoir plus</a>
            </div>
        </div>
        <div class="third-box-2"></div>
    </section>

    <section id="fourth" data-scroll-section style="background-image: url(<?= get_template_directory_uri() . '/asset/img/table.jpg' ?>);">
        <div class="overlay-fourth"></div>
        <div class="fourth-box-content">
            <h3>WEDDING PLANNER EN NOUVELLE AQUITAINE</h3>
            <p class="push-fourth-content">Fermez les yeux... Imaginez...</p>
            <p class="laj-right">La Jolie Agence le créer pour vous !</p>
        </div>
    </section>

    <section id="fifth" data-scroll-section>
        <h2>Nos Prestations</h2>
        <div class="fifth-bigbox-prestation">
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
                                <h3 class="fifth-caption">wedding day</h3>
                            </div>
                            <div class="back">
                                <a href="https://en.wikipedia.org/wiki/Cherry_blossom" target="_blank">
                                    <h4>organisation de mariage</h4>
                                </a>
                                <!-- <p class="date">23/07/1997</p> -->
                                <p class="description">Venez découvrir les différentes formules qui vous correspondent pour votre mariage: <br>Organisation complète ou partielle" <br>Coordination Jour J<br>Elopement<br><span class="description_span">Barbara Luzynska</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <a class="cta-see-more-tabac btn-card-home" href="<?php echo esc_url(home_url('service1')); ?>">Voir plus</a>
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
                                <h3 class="fifth-caption">sweet moments</h3>
                            </div>
                            <div class="back">
                                <a href="https://en.wikipedia.org/wiki/Tulip" target="_blank">
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
                    <a class="cta-see-more-tabac btn-card-home" href="<?php echo esc_url(home_url('service2')); ?>">Voir plus</a>
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
                                <h3 class="fifth-caption">wedding temoins</h3>
                            </div>
                            <div class="back">
                                <a href="https://en.wikipedia.org/wiki/Lavandula" target="_blank">
                                    <h4>Spécial Témoin</h4>
                                </a>
                                <!-- <p class="date">06/08/2004</p> -->
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
                    <a class="cta-see-more-tabac btn-card-home" href="<?php echo esc_url(home_url('service3')); ?>">Voir plus</a>
                </div>


            </div>
            <div class="more-services">
            
        </div>
    </section>

    <!-- <section id="sixth" data-scroll-section>
        <div class="box-sixth">
            <div class="img_box-sixth">
                <style>
                    .img_box-sixth {
                        background: url(<?= get_template_directory_uri() . '/asset/img/list-resize.jpg' ?>) no-repeat center;
                        background-size: cover;
                    }
                </style>
            </div>
            <div class="content_box-sixth">
                <h2>cadeau gratuit</h2>
                <p>Monsieur ou Madame a fait sa demande ?<br><span>FELICITATION !!!</span></p>
                <p>Vous n'avez pas le temps pour tout organiser ou vous ne savez pas par où commencer ?</p>
                <p>La Jolie Agence vous offre un rétroplanning gratuit pour vous accompagnez dans l'organisation de votre mariage</p>
                <a href="" class="cta-see-more-tabac cta-bleu-color">En savoir plus</a>
            </div>
            <div class="brown_box-sixth"></div>
        </div>

    </section> -->

    <section id="third" data-scroll-section>
        <div class="third-box-1">
            <div class="top-bar-tabac"></div>
            <div class="bottom-bar-tabac"></div>
            <div class="third-box-content" data-scroll="" data-scroll-delay="0.09" data-scroll-speed="1" data-scroll-call="dynamicColor" data-scroll-repeat="">
                <h2>Blog</h2>
                <p class="adeline">Qu'est-ce qu'un shooting d'inspiration ?</p>
                <div class="third-box-content-p">
                    <p class="tabac">FUTUR (E) S MARIE(E)S, VOUS RECHERCHEZ DES IDÉES DE
                        DÉCORATION, UNE AMBIANCE QUE VOUS AVEZ VU SUR
                        PINTEREST, UN COSTUME AVEC LA MÊME COUPE QUE CELUI DU
                        PRINCE HARRY À SON MARIAGE .... (BON PEUT-ÊTRE PAS)
                        MAIS EN TOUT CAS, TOUTES CES IMAGES VOUS FONT RÊVER,
                        EST CE QU'IL EST POSSIBLE DE RÉALISER LA MÊME
                        SCENOGRAPHIE QUE SUR LA PHOTO?</p>
                    <p class="italic"><a href="">lire la suite</a></p>
                </div>
                <a class="cta-see-more-tabac" href="https://www.instagram.com/lajolieagence/">Voir plus d'articles</a>
            </div>
        </div>
        <div class="third-box-2 img-2"></div>
    </section>

</main>
<?php
get_footer();
