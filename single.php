<?php
// Appelle le fichier header.php
get_header('single'); ?>

<div class="container">

    <?php if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <p>Date de publication: <?php the_date(); ?></p>
            <p><?php the_content() ?> </p>
            <p><?php the_category(); ?></p>
            <p><?php the_post_thumbnail(); ?></p>
            <p><?php echo the_excerpt(); ?></p>
            <p><?php echo the_comment(); ?></p>
            <p><?php echo get_the_category_list(', '); ?></p>
            <p>L'auteur de ce superbe article : <?php the_author(); ?></p>


    <?php
        } // end while
    } // end if
    ?>
</div>
<?php
//Appelle le fichier footer.php
get_footer();
?>