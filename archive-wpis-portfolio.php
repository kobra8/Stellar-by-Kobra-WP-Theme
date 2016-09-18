<?php get_header(); ?>
<!-- Main -->
  <div id="main">

<!-- Introduction -->
		<section id="intro" class="main">
				<div class="spotlight">
				<div class="content">
<?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
    
    <?php   get_template_part('wpis-portfolio')   ?>        
                  
      <?php endwhile; ?>
    <?php else : ?>
    <strong>Nie mogę nic znaleźć!</strong>
    <?php endif; ?>
          </div>
        
      </div>
</section>              
  <?php get_footer(); ?>  