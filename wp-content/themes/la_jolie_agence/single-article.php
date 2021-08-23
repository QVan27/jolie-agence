<?php
get_header();
?>

<section class="article-single">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post();
            $id = get_the_ID();
            $metas = get_post_meta($id); ?>
            <div class="article-item-content-single">
                <style>
                    .title-article {
                        background: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>);
                        background-attachment: fixed;
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                    }
                </style>
                <div class="title-article marginBottom">
                <div class="content-about">
        <div id="text-about">
            <div id="save">
                <h1>La Jolie Agence</h1>
            </div>
        </div>
        <div class="married w75">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
                    <!-- <h1><?php the_title(); ?></h1> -->
                </div>
                <div class="box-img-single marginBottom">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                </div>
                <div class="content-article">
                    <p><?= $metas['contenu'][0]; ?></p>
                </div>
                <p class="p-auteur"><?= $metas['auteur'][0]; ?></p>
            </div>
            <div class="navigation-article pl-5 pr-5">
            <?php the_post_navigation(
                array(
                    'prev_text' => '<span class="nav-subtitle">' . esc_html__('Précédent:', 'titre') . '</span> <span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-subtitle">' . esc_html__('Suivant:', 'titre') . '</span> <span class="nav-title">%title</span>',
                )
            ); ?>
            </div>
        
      <?php  endwhile; ?>
    <?php endif; ?>
</section>
<?php get_footer();
