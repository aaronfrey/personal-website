<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/content', 'page'); ?>

  <div class="plugins-container">

    <div class="row plugin">
      <div class="col-md-12">
        <h1><a href="https://wordpress.org/plugins/nearby-locations/" target="_blank">Nearby Locations</a></h1>
        <a class="gallery" href="https://wordpress.org/plugins/nearby-locations/" target="_blank">
          <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/images/nearby-locations.png'; ?>">
        </a>
        <p>Nearby Locations is a Wordpress plugin that allows a user to enter multiple nearby locations, organized by type, that will be displayed around an optional central location.</p>
      </div>
    </div>

  </div>

<?php endwhile; ?>