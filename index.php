<?php get_header(); ?>
<!-- Main -->
  <div id="main">

<!-- Introduction -->
		<section id="intro" class="main">
				<div class="spotlight">
				<div class="content">
<?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1> 
      <em>
        Kategorie: <?php the_category() ?>
        <?php the_tags(); ?>.
        Autor: <?php the_author(); ?>
        Data dodania: <?php the_time('d.m.Y h:i'); ?>
        </em>
        <?php the_content(); ?>
        <span class="image"><?php the_post_thumbnail([200,150]); ?></span>
        <hr>
      <?php endwhile; ?>
    <?php else : ?>
    <strong>Nie mogę nic znaleźć!</strong>
    <?php endif; ?>
          </div>
     </section> 
        <!-- First Section -->
							<section id="first" class="main special">
								<header class="major">
									<h2>Portfolio</h2>
								</header>
								<ul class="features">
                                  <?php
                                  $args = ['post_type' => 'wpis-portfolio',
                                        //   'jezyki-programowania' => 'JavaScript', 
                                        //Filtrowanie po taksonomi   
                                          'post_per_page' => 6
                                          ];
                                  $loop = new WP_Query($args);
                                  while ($loop->have_posts()):
                                   $loop->the_post();
                                  ?>
									<li>
										<span class="icon major style1 fa-code"></span>
										<h3><?php the_title(); ?></h3>
										<p><?php the_content(); ?></p>
                                      <a href="<?php the_permalink(); ?>" class="button">Zobacz więcej</a>
									</li>
								<?php endwhile;	?>
								</ul>
							
										
							
							</section>          
                  
      </div>
             
  <?php get_footer(); ?>  