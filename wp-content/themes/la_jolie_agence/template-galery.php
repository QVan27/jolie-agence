<?php
/*
Template Name: Galery
*/
get_header(); ?>
<!-- <div id="parallax" data-scroll-section class="parallax-window-about" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() . '/asset/img/elopement.jpg' ?>"> -->

<div id="parallax">
<div class="content-about">
        <div id="text-about">
            <div id="save"><h1>La Jolie Agence</h1></div>
        </div>
        <div class="married">
            <h2>portfolio</h2>
        </div>
    </div>
</div>

<section class="gallery">
    <div class="box-gallery">
    <?php $args = array(
                'post_type' => 'galerie',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
                'orderby' => 'date',
                'order' => 'ASC',
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) { ?>
                    <?php while ($the_query->have_posts()) {
                        $the_query->the_post();
                    ?>
                        <a href="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" data-lightbox="mygallery" data-title="<?php echo get_the_title(get_the_ID()); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt=""></a>
                    <?php } ?>   
            <?php } ?>
    </div>
</section>

<?php
get_footer();