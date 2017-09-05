<header class="banner">

  <div class="container">

    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
      <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri() . '/dist/images/headshot-square.jpg'; ?>">
    </a>

    <div class="brand-text">
      
      <h2><a href="mailto:aaron.frey@gmail.com" target="_blank">Aaron Frey</a></h2>
      <h3>Full Stack Developer</h3>

      <nav class="nav-primary">
        <?php if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif; ?>
      </nav>

    </div>

  </div>

</header>