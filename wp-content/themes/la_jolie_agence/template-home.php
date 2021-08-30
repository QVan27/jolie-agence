<?php
/*
Template Name: Home
*/
get_header();
$metas = get_post_meta($id);?>
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
                <h1><?= $metas['titre_1'][0]; ?></h1>
                <div class="second-box-content-p">
                <?= $metas['texte_1'][0]; ?>
                </div>
                <a href="#">En savoir plus</a>
            </div>
        </div>
    </section>

    <section id="third">
        <div class="third-box-1">
            <div class="third-box-content">
                <h2><?= $metas['titre_2'][0]; ?></h2>
                <p class="adeline">Adeline - La Jolie Agence</p>
                <div class="third-box-content-p">
                <?= $metas['texte_2_1'][0]; ?>
                <?= $metas['texte_2_2'][0]; ?>
                <?= $metas['texte_2_3'][0]; ?>
                </div>
                <a class="cta-see-more-tabac" href="<?php echo esc_url(home_url('a-propos')); ?>">En savoir plus</a>
            </div>
        </div>
        <div class="third-box-2 bp-b"></div>
    </section>

    <section id="fourth" style="background-image: url(<?= get_template_directory_uri() . '/asset/img/table.jpg' ?>);">
        <div class="overlay-fourth"></div>
    </section>

    <section id="fifth">
        <h2><?= $metas['titre_3'][0]; ?></h2>
        <div class="fifth-bigbox-prestation">
            <div class="text-prestation">
                <p><?= $metas['texte_3'][0]; ?></p>
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
                                <p class="description">Organisation complète<br>Coordination Jour J<br>Elopement
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
                                <p class="description">
                                    Demande en Mariage
                                    <br>Renouvellement de vœux
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
                                            background-size: auto 100%;
                                        }
                                    </style>
                                </div>
                                <h3 class="fifth-caption">Wedding Témoins</h3>
                            </div>
                            <div class="back">
                                <a href="<?php echo esc_url(home_url('wedding-temoins')); ?>">
                                    <h4>Spécial Témoin</h4>
                                </a>
                                <p class="description">Enterrement de vie de jeune fille
                                    <br>Enterrement de vie de garçon
                                    <br>SOS témoin
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
                <h2><?= $metas['titre_4'][0]; ?></h2>
                <?= $metas['texte_4_1'][0]; ?>
                <div class="third-box-content-p">
                <?= $metas['texte_4_2'][0]; ?>
                </div>
                <a class="cta-see-more-tabac" href="<?php echo esc_url(home_url('blog')); ?>">Voir plus d'articles</a>
            </div>
        </div>
        <div class="third-box-2 img-2"></div>
    </section>

</main>
<?php
get_footer();
