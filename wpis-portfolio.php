
				<div class="spotlight">
				<div class="content">
  
    <h1> <a href="<?php the_permalink(); ?>">Wpis portfolio:<?php the_title() ?></a></h1> 
     <strong>Wykonano w czasie: <?php echo(types_render_field('czas-wykonania')); ?><br>
      Typ projektu:   <?php echo(types_render_field('typ-projektu')); ?>       <br>   
      </strong>
                  <?php echo(types_render_field('odnosnik')); ?>
        <?php the_content(); ?>
                            
          </div>
        
      </div>
