<header class="banner">

  <div class="container">

    <a class="brand" href="<?= esc_url(home_url('/')); ?>">

      <div class="hover img-circle">
        <div>Aaron<br><i class="far fa-code"></i><br>Frey</div>
      </div>

      <img
        class="img-responsive img-circle"
        src="<?php echo get_template_directory_uri() . '/dist/images/headshot-square.jpg'; ?>">
    </a>

    <nav class="nav-primary">

      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>

    </nav>

  </div>

</header>