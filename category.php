<?php
// Appelle le fichier header.php (include du header.php)
get_header('single'); ?>
<div class="container">
    <h1 style="text-align: center"><?php echo single_cat_title(); ?></h1>
    <div class="container-card">
        <?php

        // the WP loop qui permet de récupérer du contenu
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>
                <div class="card">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="Avatar">
                    <div class="card-content">
                        <h3><b><?php the_title(); ?></b></h3>
                        <p><?php the_excerpt(); ?></p>
                        <p><?php the_date() ?></p>
                        <p><a class="card-link" href="<?php the_permalink() ?>">Lire la suite...</a></p>
                    </div>
                </div>

        <?php
            } // end while
        } // end if
        ?>
    </div>
</div>
<?php
// Appelle le fichier footer.php, include du footer.php
get_footer(); ?>