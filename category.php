<?php get_header(); ?>

<div class="container">
   <div class="row add-top-margin">
     <?php

          $i=0;

          while (have_posts()) {

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

            if ($i != 1 && $i < 3) {

            ?>

               <div class="col-lg-4 antri-post">
               <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive', 'title' => 'Feature image']); ?>
               <?php	the_title();?>
               <?php the_category();?>
               </div>

            <?php
            }

            if ($i != 2 && $i >= 3) {

              ?>

              <div class="col-lg-offset-1 col-lg-10 third-line">
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
          }
          ?>

  </div>
</div>

<?php get_footer(); ?>
