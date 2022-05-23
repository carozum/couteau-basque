<?php
// Appelle le fichier header.php
get_header();


if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <h1><?php the_title() ?></h1>
        <?php the_content() ?>
<?php
    } // end while
} // end if

//Appelle le fichier footer.pho
get_footer();
?>