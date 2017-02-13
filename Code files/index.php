<?php get_header(); ?>

        <br>
        <br>    
        <br> 
        <br>
        <br>
        <br>

			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	             ?>
            	<div class="row">
		<div class="col-sm-12">
            <?php
					get_template_part( 'content', get_post_format() );
            ?>
            		</div> <!-- /.col -->
    <!-- No sidebar, full width -->
	</div> <!-- /.row -->
            <?php
				endwhile; endif; 
			?>


<?php get_footer(); ?>

