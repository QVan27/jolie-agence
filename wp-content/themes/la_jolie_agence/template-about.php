<?php
/*
Template Name: About
*/
get_header(); ?>

<section id="about" data-scroll-section class="parallax-window-about" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() . '/asset/img/parralax-about2.jpg' ?>">
    <div class="content-about" data-scroll data-scroll-delay="0.04" data-scroll-speed="3">
        <div id="text-about">
            <div id="save">La Jolie Agence</div>
        </div>
        <div class="married">
            <p>Fabrication de doux moments</p>
        </div>
    </div>
</section>

<div class="bigbox-about" data-scroll-section>
    <h1>Wedding Planner en Nouvelle Aquitaine</h1>
    <div class="minibox-content">

        <div class="box-reseaux">
            <a href="https://www.facebook.com/lajolieagence" target="_blank"><i class="about fab fa-facebook-square fa-3x"></i></a>
            <a href="https://www.instagram.com/lajolieagence/" target="_blank"></i><i class="about fab fa-instagram fa-3x"></i></a>
        </div>

        <div class="box-content-text">
            <div class="minibox-text marginBottom">
                <p>La Jolie Agence est une entreprise spécialisée dans l’organisation de mariage. L’agence est située en Gironde, à la frontière entre Les Charentes, le Pays Basque et la Dordogne.<br><br>Adeline, wedding planner, est la fondatrice et responsable de l'agence qui organise des mariages sur-mesure.<br>
                    Spécialiste des mariages intimistes. Adeline vous accompagne de la création à l'organisation complète de votre événement.<br><br>
                    Notre expérience et formation de wedding planner nous permet de vous proposer des services qualitatifs et uniques. Nous accompagnons les clients qui souhaitent profiter de leur journée et être accompagnés dans leur projet. Créatifs, perfectionnistes avec un grain de folie, nous sommes à l'écoute de vos besoins et envies.
                </p>
                <div class="minibox-img">
                    <style>
                        .minibox-img {
                            background: url(<?= get_template_directory_uri() . '/asset/img/adeline.jpg' ?>) no-repeat center;
                            background-size: contain;
                            min-height: 100%;
                            max-height: 100%;
                            
                        }
                    </style>
                </div>
            </div>

            <div class="minibox-text reverse marginBottom">
                <p><span class="italic"> “ Le mot d’Adeline <br><br>
                    Organiser l’un des moments les plus importants de votre vie est un honneur et un privilège. <br><br>
                    Avec bienveillance et une écoute particulière, je saurai répondre à vos attentes tout en vous proposant mon expertise au travers d’inspirations personnalisées et uniques.<br><br>
                    Être wedding planner, est un métier de passion. J'adore ce métier et ses multiples facettes : rigueur et perfectionnisme sont de mises - échanger et vous accompagner sur l’organisation de votre mariage tout en profitant de vos préparatifs est primordial.<br><br>
                    Votre mariage est à votre image et unique ! <br><br>
                    Hâte de lire vos jolies histoires “</span>
                </p>
                <div class="minibox-img minibox-img_2">
                <style>
                        .minibox-img_2 {
                            background: url(<?= get_template_directory_uri() . '/asset/img/about-a1.jpg' ?>) no-repeat center;
                            background-size: contain;
                        }
                    </style>
                </div>
            </div>

            <div class="minibox-text marginBottom reverse">
                <div class="box-img">
                    
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
