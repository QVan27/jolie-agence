<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package la_jolie_agence
 */

?>
<!-- footer -->
<div class="push"></div>
</div><!-- #wrap -->

<footer class="footer">
    <div class="wrapper">
        <div class="box1">
            <div class="minibox">
                <div class="box-content-footer">
                    <a href="https://www.bschoolevents.fr/" target="_blank">
                        <img src="<?php echo get_template_directory_uri() . '/asset/img/bschool.png' ?>" alt="B School Events">
                    </a>
                </div>
            </div>
            <div class="minibox">
                <h3 class="title-footer">Contactez-nous</h3>
                <div class="box-content-footer">
                    <div class="box-call">
                        <p>33820 Saint-Palais</p>
                        <p>
                            <a href="tel:+33675458691" class="link-footer">06 75 45 86 91</a>
                        </p>
                        <p>
                            <a href="mailto:lajolieagence@gmail.com" class=" link-footer">lajolieagence@gmail.com</a>
                        </p>
                        <p>SIRET : 893 717 538 00019</p>
                    </div>
                </div>
            </div>
            <div class="minibox minibox_icons-footer">
                <h3 class="title-footer">Suivez-nous</h3>
                <div class="box-content-footer box_icons-footer">
                    <a class="social-icons" href="https://www.facebook.com/lajolieagence" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
                    <a class="social-icons" href="https://www.instagram.com/lajolieagence/" target="_blank"></i><i class="fab fa-instagram fa-2x"></i></a>
                </div>
            </div>
        </div>
        <div class="box2">
            <p>La Jolie Agence. Wedding Planner en Nouvelle-Aquitaine. Logo et charte graphique réalisée par la talentueuse <a href="https://www.leila-petiteagence.fr" target="_blank" class="link-footer">Leïla-petiteagence</a>.<br><span class="credit">Crédit photo : Ariane Duplaceau - Barbara Luzynska - Caroline Hoang - Damien Tugulescu</span></p>
            <ul>
                <li><a href="<?php echo esc_url(home_url('blog')); ?>" class="link-footer">Blog</a></li>
                <li><a href="<?php echo esc_url(home_url('dons-associatifs')); ?>" class="link-footer">Dons Associatifs</a></li>
                <li><a href="<?php echo esc_url(home_url('contact')); ?>" class="link-footer">Contact</a></li>
                <li><a href="<?php echo esc_url(home_url('mentions-legales')); ?>" class="link-footer">Mentions légales</a></li>
                <li><a href="<?= get_template_directory_uri() . '/asset/pdf/sweet-moment.pdf' ?>" download class="link-footer">FAQ</a></li>
            </ul>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>