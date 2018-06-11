<?php get_header(); ?>

<div class="container">
   <div class="row add-top-margin">
    <!-- <?php echo the_category()?> -->
     <?php



           $category_name = get_the_category();

           $args = array(
              'taxonomy' => 'category',
              'term' => $category_name[0]->name,
              'posts_per_page' => 1,
              'orderby' => 'date',

              );

             $the_query = new WP_Query($args);

            if ( $the_query->have_posts() ) :
             while ( $the_query->have_posts() ) : $the_query->the_post();
             ?>

               <div class="col-lg-12 first-post">
                 <div class="col-lg-6 post-thumb">
                   <?php the_post_thumbnail('medium_large', ['class' => 'img-responsive', 'title' => 'Feature image']); ?>
                 </div>
                 <div class="col-lg-6 post-text">
                   <h1><?php    the_title();?></h1>
                   <h3> <?php the_excerpt();?></h3>

                   <?php the_category();?>
                 </div>
                 <hr>
               </div>
               <hr>
               <?php
             endwhile;
           endif;

         ?>

      <div class="col-lg-12 antra-linija">
       <?php

         $the_query = new WP_Query( $args = array(
            'posts_per_page' => 2,
            'orderby' => 'date',
            'offset' => '1',
            ));

            if ( $the_query->have_posts() ) :
             while ( $the_query->have_posts() ) : $the_query->the_post();?>
             <div class="col-lg-4 antri-post">
             <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive', 'title' => 'Feature image']); ?>
             <?php	the_title();?>
             <?php the_category();?>
             </div>
       <?php
           endwhile;
           endif;
       ?>
     </div>

     <div class="col-lg-12">
      <?php

        $the_query = new WP_Query( $args = array(
           'posts_per_page' => 2,
           'orderby' => 'date',
           'offset' => '3',
           ));

           if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();?>
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
          endwhile;
          endif;
      ?>
    </div>


  </div>
</div>

<?php get_footer(); ?>
'offset' => '1',
