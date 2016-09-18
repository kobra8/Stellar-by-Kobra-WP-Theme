
				<div class="spotlight">
				<div class="content">
  
    <h1> <a href="<?php the_permalink(); ?>">Wydarzenie:<?php the_title() ?></a></h1> 
          <strong>Data rozpoczęcia:</strong>   <?php echo(types_render_field('data-rozpoczecia',['format' => 'd.m.Y\r.'])); ?><br>
        <strong>Miejsce: </strong><?php echo(types_render_field('miejsce')); ?> <br>         
        <?php the_content(); ?> <br>
       <strong>Więcej szczegółów: </strong><?php echo(types_render_field('wiecej-szczegolow')); ?> <br><br>
          <?php echo(types_render_field('zdjecie-plakatu')); ?>       
          </div>
        
      </div>
