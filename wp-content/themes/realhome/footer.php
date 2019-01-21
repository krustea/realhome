<?php
wp_footer() ?>

<footer>

<div>        <img class="logo-header" src="<?php echo bloginfo('template_url');?>/images/logo-2.png"" alt="logo">
</div>


    <?php  wp_nav_menu(array( 'theme_location' => 'menu-secondaire', 'container' => 'nav')); ?>

</footer>
</body>
</html>
