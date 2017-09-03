<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/content', 'page'); ?>

  <div class="resume-container">

  	<div class="information">
	  	<h1>Aaron Frey</h1>
	  	<ul class="list-unstyled clearfix">
	  		<li>314 Reed Street, Apt 1F</li>
	  		<li>Philadelphia, Pennsylvania, 19147</li>
	  		<li><a href="tel:2154900197"></a>(215) 490-0197</li>
	  		<li><a href="mailto:<?php echo antispambot('aaron.frey@gmail.com'); ?>"><?php echo antispambot('aaron.frey@gmail.com'); ?></a></li>
	  	</ul>
  	</div>

  	<h3>Employment History</h3>
  	<hr>

    <div class="info-section clearfix">
      <div class="pull-left info-left">
        September 2015 - Present<br>
        Philadelphia, Pennsylvania
      </div>
    	<div class="pull-left">
    		Freelance Web Development | <strong>Pepper Lillie</strong>
    		<ul>
          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>  
        </ul>
    	</div>
    </div>

    <div class="info-section clearfix">
      <div class="pull-left info-left">
        April 2014 - September 2015<br>
        Philadelphia, Pennsylvania
      </div>
      <div class="pull-left">
        Senior Developer | <strong>SuperMighty</strong>
        <ul>
          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>  
        </ul>
      </div>
    </div>

    <div class="info-section clearfix">
      <div class="pull-left info-left">
        September 2008 - May 2014<br>
        Philadelphia, Pennsylvania
      </div>
      <div class="pull-left">
        Senior Developer | <strong>Faculty Creative,</strong>
        <ul>
          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>  
        </ul>
      </div>
    </div>

    <h3>Education</h3>
    <hr>
    <div class="spacer">
      <strong>West Chester University,</strong> West Chester, Pennsylvania<br>
      Bachelor of Science in Computer Science, Graduated December 2006
    </div>
    <div class="spacer">
      <strong>Northampton Community College,</strong> Bethlehem, Pennsylvania<br>
      Associate in Science in Computer Informations Science, Graduated May 2004
    </div>

  	<h3>Professional Skills</h3>
  	<hr>
  	<table>
  		<tr>
  			<td><strong>PHP:</strong></td>
  			<td>Expert</td>
  		</tr>
  		<tr>
  			<td><strong>Javascript / jQuery:</strong></td>
  			<td>Expert</td>
  		</tr>
  		<tr>
  			<td><strong>HTML5:</strong></td>
  			<td>Expert</td>
  		</tr>
  		<tr>
  			<td><strong>Wordpress Theme &amp; Plugin Development:</strong></td>
  			<td>Expert</td>
  		</tr>
  		<tr>
  			<td><strong>CSS3 / Sass / Less:</strong></td>
  			<td>Advanced</td>
  		</tr>
  		<tr>
  			<td><strong>Git / GitHub:</strong></td>
  			<td>Advanced</td>
  		</tr>
      <tr>
        <td><strong>Gulp / Grunt:</strong></td>
        <td>Advanced</td>
      </tr>
  		<tr>
  			<td><strong>SQL:</strong></td>
  			<td>Advanced</td>
  		</tr>
  		<tr>
  			<td><strong>Photoshop:</strong></td>
  			<td>Intermediate</td>
  		</tr>
  	</table>

  </div>

<?php endwhile; ?>
