<?php
/*
Template Name: prestation
*/
get_header(); ?>


<section class="presta">
    <div class="content-about">
        <div id="text-about">
            <div id="save">
                <h1>La Jolie Agence</h1>
            </div>
        </div>
        <div class="married">
            <h2>prestations</h2>
        </div>
    </div>
</section>
<div class="bigbox-prestation p10vh_5">
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
                            <h3 class="fifth-caption">Wedding Day</h3>
                        </div>
                        <div class="back">
                            <a href="<?= esc_url(home_url('wedding-day')); ?>">
                                <h4>Organisation de Mariage</h4>
                            </a>
                            <p class="description">Organisation complète<br>Coordination Jour J<br>Elopement</p>
                        </div>
                    </div>
                </div>
                <a class="cta-see-more-tabac btn-card-home" href="<?php echo esc_url(home_url('wedding-day')); ?>">Voir plus</a>
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
                            <a href="<?= esc_url(home_url('sweet-moments')); ?>">
                                <h4>Organisation d'évènements</h4>
                            </a>
                            <p class="description">Demande en Mariage
                                <br>Renouvellement de vœux
                                <br>Baby Shower
                            </p>
                        </div>
                    </div>
                </div>
                <a class="cta-see-more-tabac btn-card-home" href="<?php echo esc_url(home_url('sweet-moments')); ?>">Voir plus</a>
            </div>

            <div class="container-card-flip">
                <div class="container-prestation">
                    <div class="flipper">
                        <div class="front">
                            <div class="img-card img-card-three">
                                <style>
                                    .img-card-three {
                                        background: url(<?= get_template_directory_uri() . '/asset/img/wedding-temoins.jpg' ?>) no-repeat center;
                                        background-size: auto 100%;
                                    }
                                </style>
                            </div>
                            <h3 class="fifth-caption">Wedding Temoins</h3>
                        </div>
                        <div class="back">
                            <a href="<?= esc_url(home_url('wedding-temoins')); ?>">
                                <h4>Spécial Témoin</h4>
                            </a>
                            <p class="description">Enterrement de vie de jeune fille
                                <br>Enterrement de vie de garçon
                                <br>SOS témoin
                            </p>
                        </div>
                    </div>
                </div>
                <a class="cta-see-more-tabac btn-card-home" href="<?php echo esc_url(home_url('wedding-temoins')); ?>">Voir plus</a>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
