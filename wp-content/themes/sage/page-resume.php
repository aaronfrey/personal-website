<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/content', 'page'); ?>

  <div class="resume-container">

  	<div class="information">
	  	<ul class="list-unstyled clearfix">
	  		<li>314 Reed Street, Apt 1F</li>
	  		<li>Philadelphia, Pennsylvania, 19147</li>
	  		<li><a href="tel:2154900197"></a>(215) 490-0197</li>
	  		<li><a href="mailto:<?php echo antispambot('aaron.frey@gmail.com'); ?>"><?php echo antispambot('aaron.frey@gmail.com'); ?></a></li>
	  	</ul>
  	</div>

    <h3>Skills</h3>
    <hr>
    <div>
      PHP, JavaScript, jQuery, Wordpress, SQL, HTML5, CSS3, SASS, LESS, Angular, Laravel, Gulp, Grunt, Composer, Photoshop.
    </div>

  	<h3>Experience</h3>
  	<hr>

    <div class="info-section clearfix">
    	<div>
    		Full Stack Developer | <strong>Pepper Lillie</strong> | Philadelphia, Pennsylvania<br>
        May 2015 - Present
    		<ul>
          <li>Develops responsive, mobile-friendly themes and plugins for industry leading Content Management Systems, including Wordpress and Drupal.</li>
          <li>Works closely with designers to establish a web-friendly and sensible product.</li> 
        </ul>
    	</div>
    </div>

    <div class="info-section clearfix">
      <div>
        Senior Developer | <strong>SuperMighty (formerly Faculty Creative)</strong> | Philadelphia, Pennsylvania<br>
        April 2010 - May 2015
        <ul>
          <li>Wrote APIs for multiple acclaimed applications, including award winning BizVizz.</li>
          <li>Established development protocols and coding standards, reviewing all code to ensure compliance.</li>
          <li>Introduced test-driven development techniques to the organization, greatly reducing bugs and overall project time.</li>  
        </ul>
      </div>
    </div>

    <div class="info-section clearfix">
      <div>
        Build Manager | <strong>Oracle (acquired AdminServer in May 2008)</strong> | Chester, Pennsylvania<br>
        January 2006 - August 2009
        <ul>
          <li>Managed a quickly evolving codebase and provided stable client releases  consisting of high-level insurance policy administration software.</li>
          <li>Wrote complex database queries to automate critical processes for multibillion-dollar corporation ING.</li>
          <li>Created a Graphic User Interface allowing clients to quickly create dynamic insurance products based on existing business logic.</li>  
        </ul>
      </div>
    </div>

    <h3>Education</h3>
    <hr>
    <div>
      <strong>West Chester University,</strong> West Chester, Pennsylvania<br>
      BS: Computer Science, Graduated December 2006
      <p><br>Focused on advanced Computer Science topics including Object Oriented Programming, Data Structures, and Network Security. Received full marks interning at AdminServer, one of the fastest growing tech companies in the Philadelphia area.</p>
    </div>

    <h3>Accomplishments</h3>
    <hr>
    <div><strong>Philadelphia Geek Awards</strong> - 2013 - Mobile App of the Year - BizVizz</div>

  </div>

<?php endwhile; ?>
