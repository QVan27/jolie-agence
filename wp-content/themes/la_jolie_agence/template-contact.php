<?php
/*
Template Name: Contact
*/
$errors     = array();
$success    = false;

if (!empty($_POST['submitted'])) {
    $nom        = cleanXss($_POST['nom']);
    $prenom     = cleanXss($_POST['prenom']);
    $email      = cleanXss($_POST['email']);
    $objet      = cleanXss($_POST['objet']);
    $numero     = cleanXss($_POST['numero']);
    $message    = cleanXss($_POST['message']);

    $errors = ValidationText($errors, $nom, 'nom', 2, 200);
    $errors = ValidationText($errors, $prenom, 'prenom', 2, 200);
    $errors = ValidationText($errors, $objet, 'objet', 2, 150);
    $errors = ValidationText($errors, $numero, 'numero', 2, 20);
    $errors = ValidationText($errors, $message, 'message', 4, 1000);

    $errors = emailValidation($errors, $email, 'email');

    if (count($errors) == 0) {
        global $wpdb;
        $wpdb->insert(
            $wpdb->prefix . 'contact',
            array(
                'nom'           => $nom,
                'email'         => $email,
                'objet'         => $objet,
                'numero'        => $numero,
                'message'       => $message,
                'created_at'    => current_time('mysql'),
            ),
            array(
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
                '%s',
            )
        );
        $success = true;
    }
}
get_header(); ?>
<section id="contact" data-scroll-section class="parallax-window-about" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() . '/asset/img/table.jpg' ?>">
    <div class="content-about" data-scroll data-scroll-delay="0.04" data-scroll-speed="3">
        <h1>Contact</h1>
    </div>
</section>

<div class="bigbox-about bigbox-contact" data-scroll-section>
    <div class="minibox-content">

        <div class="box-reseaux">
            <a href="https://www.facebook.com/lajolieagence" target="_blank"><i class="about fab fa-facebook-square fa-3x"></i></a>
            <a href="https://www.instagram.com/lajolieagence/" target="_blank"></i><i class="about fab fa-instagram fa-3x"></i></a>
        </div>

        <div class="box-text">
            <p>Racontez-nous votre histoire, nous nous ferions un plaisir de vous accompagner dans votre projet d’organisation.<br>La Jolie Agence vous accompagne dans l’organisation de votre mariage sur Bordeaux, Pays Basque, Dordogne, Les Landes, Charente, Charente- Maritime.
            </p>
        </div>

        <div class="box-content-text content-text-contact">
            <div class="minibox-text">
                <form action="" id="form-contact" method="post" novalidate>
                    <div class="midSize">
                        <div class="halfSize">
                            <label for="nom">Nom *</label>
                            <input type="text" name="nom" id="nom" placeholder="La Jolie" value="<?php if (!empty($_POST['nom'])) {
                                                                                                        echo $_POST['nom'];
                                                                                                    } ?>" required>
                            <span class="error"><?php if (!empty($errors['nom'])) {
                                                    echo $errors['nom'];
                                                } ?></span>
                        </div>
                        <div class="halfSize">
                            <label for="prenom">Prénom *</label>
                            <input type="text" name="prenom" id="prenom" placeholder="Agence" value="<?php if (!empty($_POST['prenom'])) {
                                                                                                            echo $_POST['prenom'];
                                                                                                        } ?>" required>
                            <span class="error"><?php if (!empty($errors['prenom'])) {
                                                    echo $errors['prenom'];
                                                } ?></span>
                        </div>
                    </div>
                    <div class="fullSize">
                        <label for="email">Adresse mail *</label>
                        <input type="text" name="email" id="email" placeholder="lajolieagence@gmail.com" value="<?php if (!empty($_POST['email'])) {
                                                                                                                    echo $_POST['email'];
                                                                                                                } ?>" required>
                        <span class="error"><?php if (!empty($errors['email'])) {
                                                echo $errors['email'];
                                            } ?></span>
                    </div>
                    <div class="midSize">
                        <div class="halfSize">
                            <label for="numero">Numéro de téléphone *</label>
                            <input type="text" name="numero" id="numero" placeholder="0784828286" value="<?php if (!empty($_POST['numero'])) {
                                                                                                                echo $_POST['numero'];
                                                                                                            } ?>">
                            <span class="error"><?php if (!empty($errors['numero'])) {
                                                    echo $errors['numero'];
                                                } ?></span>
                        </div>
                        <div class="halfSize">
                            <label for="objet">Objet *</label>
                            <input type="text" name="objet" id="objet" value="<?php if (!empty($_POST['objet'])) {
                                                                                    echo $_POST['objet'];
                                                                                } ?>" required>
                            <span class="error"><?php if (!empty($errors['objet'])) {
                                                    echo $errors['objet'];
                                                } ?></span>
                        </div>
                    </div>
                    <div class="fullSize">
                        <label for="message">Message *</label>
                        <textarea name="message" id="message" cols="30" rows="10"><?php if (!empty($_POST['message'])) {
                                                                                        echo $_POST['message'];
                                                                                    } ?></textarea>
                        <span class="error"><?php if (!empty($errors['message'])) {
                                                echo $errors['message'];
                                            } ?></span>
                    </div>
                    <input type="submit" id="submit" name="submitted" value="Envoyer">
                </form>
            </div>
        </div>

        <div class="box-text">
            <p>N’hésitez pas à nous contacter directement par mail ou par téléphone.<br>Nous pouvons nous rencontrer à votre domicile, autour d’un verre, thé, café…<br>Horaires : Lundi au Vendredi de 9h à 19 h</p>
        </div>

    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22448.238338589617!2d-0.6181986141107647!3d45.30782379478757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48004ab0321b897d%3A0x40665174816d520!2s33820%20Saint-Palais!5e0!3m2!1sfr!2sfr!4v1629314907134!5m2!1sfr!2sfr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>




<?php
get_footer();
