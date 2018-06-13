<?php get_header(); ?>

<div class="container">
   <div class="row add-top-margin">

     <?php

     $i=0;

     if ( have_posts() ) :
       while ( have_posts() ) : the_post();

      $i++;

          if ($i==1) {
        ?>

        <div class="col-lg-12 first-post">
             <div class="col-lg-6 post-thumb">
               <a href="<?php the_permalink(); ?>">
               <?php the_post_thumbnail('medium_large', ['class' => 'img-responsive', 'title' => 'Feature image']); ?>
               </a>
             </div>
             <div class="col-lg-6 post-text">
               <a href="<?php the_permalink(); ?>">
               <h1><?php    the_title();?></h1>
               <h3> <?php the_excerpt();?></h3>
               <?php the_category();?>
              </a>
             </div>
        </div>

        <?php
          }

          elseif ($i != 1 && $i <= 3) {
            ?>
            
            <div class="col-lg-4 antri-post">
               <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive', 'title' => 'Feature image']); ?>
               <h3><?php	the_title();?></h3>
               <h5><?php the_category();?></h5>
            </div>
            <hr>
            <?php
          }

          elseif ($i != 1 && $i > 3) {
            ?>

            <div class="col-lg-offset-2 col-lg-10 third-line">
              <div class="col-lg-4">
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive', 'title' => 'Feature image']); ?>
              </div>
              <div class="col-lg-8">
                <h3><?php	the_title();?></h3>
                <h5> <?php the_excerpt();?></h5>
                <?php the_category();?>
              </div>
            </div>

            <?php
          }

         ?>

     <?php endwhile; else : ?>

          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

    <?php endif; ?>

  </div>
</div>

<?php get_footer(); ?>
