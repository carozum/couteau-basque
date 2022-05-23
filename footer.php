<?php wp_footer(); ?>

<footer>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8141.04050116977!2d-1.5032121669360112!3d43.502035235941506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd516bbafa1964a5%3A0x5fbfd2caa0bb7d1f!2sCouteau%20Basque!5e0!3m2!1sfr!2sfr!4v1652779607139!5m2!1sfr!2sfr&legend:none" width="100%" height="600px" style="border:0; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="carte">
        <!-- récupère le dossier root du thème -->
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-couteau-basque-noir-OFFICIEL-640x369.png" alt="" class="logo">
        <h3>COUTEAU BASQUE</h3>
        <hr>
        <p>1, avenue de l'Adour 64600 ANGLET</p>
        <p>06 08 28 50 83</p>
        <p>atelier@couteau-basque.com</p>
    </div>

    <?php wp_nav_menu(array(
        'theme-location' => 'footer-menu'
    )) ?>


</footer>



</body>

</html>