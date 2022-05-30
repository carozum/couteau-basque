<?php
// Appelle le fichier header.php (include du header.php)
get_header('front'); ?>

<?php get_template_part('includes/actualites'); ?>

<div class="container">
    <!-- // the WP loop qui permet de récupérer du contenu -->
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>
            <!-- contenu défini dans l'éditeur gutenberg -->
            <?php the_content() ?>
    <?php
        } // end while
    } // end if
    ?>
</div>

<?php
// Appelle le fichier footer.php, include du footer.php
get_footer(); ?>