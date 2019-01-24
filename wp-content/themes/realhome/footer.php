<?php
wp_footer() ?>

<footer>
<div class="footer-container">
<div>
    <img class="logo-header" src="<?php echo bloginfo('template_url');?>/images/logo-2.png" alt="logo">
	<div class="footer-menu-second"><?php  wp_nav_menu(array( 'theme_location' => 'menu-secondaire', 'container' => 'nav')); ?></div>

</div>
    <div class="real-menu-footer">Menu <?php  wp_nav_menu(array( 'theme_location' => 'menu-principal', 'container' => 'nav')); ?></div>

    <div class="footer-contact">
        <p>CONTACT</p>
        <p>35 rue des horizons, Paris</p>
        <p>Freephone: +1 800559658</p>
        <p>Telephone: +1 900559657</p>
        <p>Fax: +1 800559658</p>
        <p>info@realhome.com</p>
    </div>
</div>
</footer>
</body>
</html>
