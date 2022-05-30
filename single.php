<?php
// Appelle le fichier header.php
get_header('single'); ?>

<div class="container">

    <?php if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>

            <h1 class="single-title"><?php the_title(); ?></h1>
            <div class="single-container">
                <div class="single-image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="single-content">
                    <p>Date de publication: <?php the_date(); ?></p>
                    <p>Auteur : <?php the_author(); ?></p>
                    <p><?php the_content() ?> </p>

                </div>
            </div>

            <div class="single-row">
                <div class="single-year">
                    <p>Année de fabrication : <?php the_field('annee_de_fabrication'); ?></p>
                </div>
                <div class="single-materiaux">
                    <p>Les matériaux sont :
                        <?php
                        $materiaux = get_field('materiaux');
                        the_field('materiaux');
                        // var_dump($materiaux);
                        foreach ($materiaux as $materiel) {
                            if ($materiel == 'Bois') {
                                // echo 'hello bois';
                        ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vieillard-basque-avec-makila-500x640.jpg" alt="" class="single-logo">
                            <?php
                            }
                            if ($materiel == 'Métal') {
                                // echo 'hello métal';
                            ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/couteau-640x358.jpg" alt="" class="single-logo">
                            <?php
                            }

                            if ($materiel == 'Plastique') {
                            ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vieux-basque.jpg" alt="" class="single-logo">
                        <?php
                            }
                        }
                        ?>
                    </p>
                </div>
            </div>


            <!-- <p>Le lieu de fabrication est <?php the_field('lieu_de_fabrication'); ?></p> -->
            <!-- <p><?php var_dump(get_field('fiche_technique')); ?></p> -->
            <!-- array(21) { ["ID"]=> int(176) ["id"]=> int(176) ["title"]=> string(8) "21DIS102" ["filename"]=> string(12) "21DIS102.pdf" ["filesize"]=> int(1095023) ["url"]=> string(76) "http://localhost:8888/couteau-basque/wp-content/uploads/2022/05/21DIS102.pdf" ["link"]=> string(78) "http://localhost:8888/couteau-basque/decouvrez-le-couteau-etxe-knife/21dis102/" ["alt"]=> string(0) "" ["author"]=> string(1) "1" ["description"]=> string(0) "" ["caption"]=> string(0) "" ["name"]=> string(8) "21dis102" ["status"]=> string(7) "inherit" ["uploaded_to"]=> int(164) ["date"]=> string(19) "2022-05-24 09:45:55" ["modified"]=> string(19) "2022-05-24 09:45:55" ["menu_order"]=> int(0) ["mime_type"]=> string(15) "application/pdf" ["type"]=> string(11) "application" ["subtype"]=> string(3) "pdf" ["icon"]=> string(74) "http://localhost:8888/couteau-basque/wp-includes/images/media/document.png" } -->

            <!-- je mets dans une variable le contenu du champ fiche technique -->
            <!--  ce que je veux c'est l'URL du fichier -->
            <!-- <p><?php $ficheTechnique = get_field('fiche_technique'); ?></p> -->
            <div style="height: 5rem ;">
                <a href="<?php echo $ficheTechnique['url']; ?>">Télécharger la fiche technique</a>

            </div>
            <!-- 

            <p>La couleur est : <?php the_field('couleur'); ?></p>
            <div class="color" style="background-color:<?php the_field('couleur'); ?>"></div> -->

    <?php
        } // end while
    } // end if
    ?>
    <?php
    $categories = get_the_category();
    $slugs = [];
    // var_dump($categories);
    foreach ($categories as $category) {
        $slug = $category->slug;
        array_push($slugs, $slug);
        // echo $slug;
        var_dump($slugs);
    }
    $nombre = count($slugs);
    // echo $nombre;
    if ($nombre > 1) {
        $choix = rand(0, $nombre - 1);
        echo $choix;
        get_template_part('includes/' . $slugs[$choix]);
    } elseif ($nombre == 1) {
        get_template_part('includes/' . $slugs[0]);
    }


    ?>
</div>
<?php
//Appelle le fichier footer.php
get_footer();
?>