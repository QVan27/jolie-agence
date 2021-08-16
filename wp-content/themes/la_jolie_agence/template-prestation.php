<?php
/*
Template Name: prestation
*/
get_header(); ?>


<section id="about" data-scroll-section class="parallax-window-about" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() . '/asset/img/parralax-about2.jpg' ?>">
    <div class="content-about" data-scroll data-scroll-delay="0.04" data-scroll-speed="3">
        <div id="text-about">
            <div id="save">La Jolie Agence</div>
        </div>
        <div class="married">
            <p>*** we are getting married ***</p>
        </div>
    </div>
</section>

<div class="bigbox-prestation" data-scroll-section>

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
                                <h3 class="fifth-caption">weeding day</h3>
                            </div>
                            <div class="back">
                                <a href="https://en.wikipedia.org/wiki/Cherry_blossom" target="_blank">
                                    <h4>organisation de mariage</h4>
                                </a>
                                <!-- <p class="date">23/07/1997</p> -->
                                <p class="description">Venez découvrir les différentes formules qui vous correspondent pour votre mariage: <br>"Organisation Complète ou partielle" <br>"Coordination Jour J " <br>"Elopement " <br><span class="description_span">Barbara Luzynska</span>
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
                                <!-- <p class="date">14/07/2001</p> -->
                                <p class="description">Vous souhaitez créer ou
                                    recréer le moment magique à
                                    travers :
                                    <br>"une demande en Mariage"
                                    <br>"Un Renouvellement de vœux"
                                    <br>"Baby Shower"
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
                                    <br>"Enterrement de vie de jeune
                                    fille et de garçon"
                                    <br>"SOS TEMOIN "
                                </p>
                            </div>
                        </div>
                    </div>
                    <a class="cta-see-more-tabac btn-card-home" href="<?php echo esc_url(home_url('service3')); ?>">Voir plus</a>
                </div>


            </div>
           
        </div>





<?php
get_footer();
