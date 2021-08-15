<?php
/*
Template Name: Contact
*/
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
            <a href=""><i class="about fab fa-youtube fa-3x"></i></a>
        </div>

        <div class="box-content-text">
            <div class="minibox-text">
                <form action="" id="form-contact" method="">
                    <div class="midSize">
                        <div class="halfSize">
                            <label for="nom">Nom *</label>
                            <input type="text" name="nom" id="nom">
                        </div>
                        <div class="halfSize">
                            <label for="prenom">Prénom *</label>
                            <input type="text" name="prenom" id="prenom">
                        </div>
                    </div>
                    <div class="fullSize">
                        <label for="email">Adresse mail *</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="midSize">
                        <div class="halfSize">
                            <label for="number">Numéro de téléphone *</label>
                            <input type="text" name="number" id="number">
                        </div>
                        <div class="halfSize">
                            <label for="objet">Objet *</label>
                            <select name="objet" id="objet">
                                <option value="prestation">prestation</option>
                                <option value="prestation 2">prestation 2</option>
                                <option value="prestation 3">prestation 3</option>
                                <option value="prestation 4">prestation 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="fullSize">
                        <label for="message">Message *</label>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit">Envoyer</button>
                </form>
            </div>
            <div class="minibox-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium tempora excepturi beatae ab voluptas voluptates mollitia at quam, facilis repellat error, repudiandae consequuntur maiores sed blanditiis. Consequuntur, eos ducimus! Consequatur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, ea repellat adipisci atque nihil explicabo voluptates reiciendis tempore quam eius impedit. Ut odit adipisci sed illo cupiditate culpa modi porro?</p>
            </div>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2805.8568472648844!2d-0.5796132844476514!3d45.311317279099335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48004a8e651d314f%3A0xf5dab2c337da359a!2s23%20Chez%20N%C3%A9ron%2C%2033820%20Saint-Palais!5e0!3m2!1sfr!2sfr!4v1628949870558!5m2!1sfr!2sfr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>




<?php
get_footer();
