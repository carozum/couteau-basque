<?php
// On place les critères de la requête dans un Array
$args = array(
    'category_slug' => 'evenements',
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 3
);
//On crée ensuite une instance de requête WP_Query basée sur les critères placés dans la variables $args
$query = new WP_Query($args);
?>
<!-- //On vérifie si le résultat de la requête contient des articles -->
<?php if ($query->have_posts()) : ?>
    <div class="container">
        <h2 style="text-align: center;">Nos trois derniers évènements</h2>
        <div class="container-actualites-card">
            <!-- //On parcourt chacun des articles résultant de la requête -->
            <?php while ($query->have_posts()) : ?>
                <?php $query->the_post(); ?>

                <div class="actualites-card">
                    <div style="height: 200px; overflow : hidden">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="thumbnail">
                                <!-- <?php the_post_thumbnail("medium"); ?> -->
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="Avatar">
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="actualites-card-content">
                        <h3><b><?php the_title(); ?></b></h3>
                        <p><?php the_date() ?></p>


                        <?php
                        $ID = get_the_ID();
                        // echo $ID;
                        $categories = get_the_category();
                        // var_dump($categories);
                        foreach ($categories as $category) {
                        ?>

                            <p style="display:inline"><?php echo $category->name ?> <a href="<?php get_category_link($category) ?>"><?php echo $category->name ?></a></p>

                        <?php
                        }
                        ?>
                        <!-- <?php the_category() ?> -->
                        <!-- fonctionne pour mettre les catégories relatives à l'article avec un lien/ On les stype ensuite -->
                        <p><?php the_excerpt(); ?></p>

                        <p><a class=" actualites-card-link" href="<?php the_permalink() ?>">Lire la suite...</a></p>
                    </div>

                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php else : ?>
    <p>Désolé, aucun article ne correspond à cette requête</p>
<?php endif;
wp_reset_query();
?>