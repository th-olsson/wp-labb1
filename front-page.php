<?php get_header() ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="hero">
                        <img src="<?php echo get_template_directory_uri() . '/img/city.jpg' ?>" />

                        <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post(); ?>
                                <div class="text">
                                    <h1><?php the_title() ?></h1>
                                    <p><?php the_content() ?></p>
                                </div>
                        <?php
                            endwhile;
                        endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>