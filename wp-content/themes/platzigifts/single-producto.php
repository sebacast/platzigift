<?php get_header(); ?>

<main class="container">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <h1 class="my-3"><?php the_title(); ?></h1>
            <div class="row">
                <div class="col-6">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                <div class="col-6">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php $args = array(
                'post_type' => 'producto',
                'posts_per_page' => 6,
                'order' => 'ASC',
                'orderby' => 'title',
            );
            $productos = new WP_Query($args);

            if ($productos->have_posts()) { ?>
                <div class="row justify-content-center productos-relacionados">
                    <div class="col-12">
                        <h3 class="text-center">Productos Relacionados</h3>
                    </div>

                    <?php while ($productos->have_posts()) {
                        $productos->the_post(); ?>
                        <div class="col-2 my-3 text-center">
                            <?php the_post_thumbnail('thumbnail'); ?>
                            <h4>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h4>
                        </div>
                    <?php } ?>
                </div>

            <?php }
            ?>
    <?php

        }
    }
    ?>

</main>

<?php get_footer(); ?>