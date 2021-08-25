<?php
/*
Template Name: About
*/
get_header();
$metas = get_post_meta($id);
$image_1 = get_field('image_1');
$image_2 = get_field('image_2');
$image_parallax = get_field('image_parallax');
?>
<section class="about">
    <div class="content-about">
        <div id="text-about">
            <div id="save">
                <h1>La Jolie Agence</h1>
            </div>
        </div>
        <div class="married">
            <h2>à propos</h2>
        </div>
    </div>
</section>

<div class="bigbox-about">
    <h3><?= $metas['titre'][0]; ?></h3>
    <div class="minibox-content">

        <div class="box-reseaux">
            <a href="<?= $metas['liens_facebook'][0]; ?>" target="_blank"><i class="color-icons fab fa-facebook-square fa-3x"></i></a>
            <a href="<?= $metas['liens_instagram'][0]; ?>" target="_blank"></i><i class="color-icons fab fa-instagram fa-3x"></i></a>
        </div>

        <div class="box-content-text">
            <div class="minibox-text marginBottom">
                <p><?= $metas['texte_1'][0]; ?></p>
                <div class="minibox-img">
                    <style>
                        .minibox-img {
                            background: url(<?= $image_1['url']; ?>) no-repeat center;
                            background-size: contain;
                            min-height: 100%;
                            max-height: 100%;

                        }
                    </style>
                </div>
            </div>

            <div class="minibox-text reverse marginBottom">
                <p><span class="italic"><?= $metas['texte_2'][0]; ?></span>
                </p>
                <div class="minibox-img minibox-img_2">
                    <style>
                        .minibox-img_2 {
                            background: url(<?= $image_2['url']; ?>) no-repeat center;
                            background-size: contain;
                        }
                    </style>
                </div>
            </div>

            <div class="minibox-text marginBottom reverse frameImg">
                <div class="box-img">
                    <style>
                        .box-img {
                            background: url(<?= $image_parallax['url']; ?>);
                            background-attachment: fixed;
                            background-position: 0 10%;
                            background-repeat: no-repeat;
                            background-size: cover
                        }
                    </style>
                </div>
            </div>

            <div class="minibox-text marginBottom reverse center">
                <div class="speakAbout">
                    <h2 class="marginBottom">Ils parlents de nous :</h2>
                    <a href="https://lamarieeenjouee.com/"><img src="<?php echo get_template_directory_uri() . '/asset/img/lamarieenjouee.png' ?>" alt=""></a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
get_footer();
