<?php
/*
Template Name: Blog
*/
get_header(); ?>

<section class="banner-parallax" data-scroll-section class="parallax-window-about" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() . '/asset/img/table.jpg' ?>">
    <div class="content-about" data-scroll data-scroll-delay="0.04" data-scroll-speed="3">
        <h1>Blog</h1>
    </div>
</section>
<section id="blog">
    <div class="blog-h2">
        <h2>Découvrez nos articles :</h2>
    </div>
    <div class="box-blog">
        <div class="box-article-blog">
            <?php
            $args = array(
                'post_type' => 'article',
                'post_status' => 'publish',
                'posts_per_page' => '-1', // tous les posts
                'orderby' => 'title',
                'order' => 'ASC',
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) { ?>
                <?php while ($the_query->have_posts()) {
                    $the_query->the_post();
                    $id = get_the_ID();
            $metas = get_post_meta($id); ?>
           
                    <div class="card">
                        <div class="split-card split-top">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                        </div>
                        <div class="split-card split-bottom">
                            <h3><?= get_the_title(); ?></h3>
                            <p><?= wp_trim_words( $metas['contenu'][0], 20 ); ?></p>
                            <div class="box-auteur-link">
                                <h4><?= $metas['auteur'][0]; ?></h4>
                                <a href="<?php echo get_the_permalink(); ?>" class="link-single">voir plus</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
        </div>
    <?php }
            wp_reset_postdata(); ?>
    </div>
</section>
<?php
get_footer();
