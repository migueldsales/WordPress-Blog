<?php get_header();?>
<section class="banner">
      <div class="container">
        <div class="banner__wrapper">
          <h1>GHOST</h1>
          <div class="banner__grid">
            <div class="banner__main">
                <?php $cardLg = new WP_Query(array(
                    'post_type' => 'post',
                    'tax_query' => array(
                        array(
                            'taxonomy' =>  'category',
                            'field' => 'slug',
                            'terms' => 'card-lg-banner',
                            'include_children' => false,
                        ),
                    )
                ))
                ?>
                <!-- Corolla Color -->
                <?php if($cardLg->have_posts()) : while($cardLg->have_posts()) : $cardLg->the_post()?>
                <!-- == Car Engine -->
              <article class="banner__story">
                <?php the_post_thumbnail();?>
                <div class="banner__story__content">
                  <small><?php echo get_the_date('M, d, Y');?></small>
                  <h2><?php the_title(); ?></h2>
                  <p>
                   <?php echo wp_trim_words(get_the_content(), 50)  ?>
                  </p>
                  <a href="<?php the_permalink();?>">Read More...</a>
                  <!-- Permalink = URL ng article -->
                </div>
              </article>
                <?php endwhile;
                    else : 
                        echo "wala nang post!!!!";
                    endif;

                    wp_reset_postdata();
                ?>

            </div>

            <div class="banner__sidebar">
            <?php $cardSm = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'tax_query' => array(
                        array(
                            'taxonomy' =>  'category',
                            'field' => 'slug',
                            'terms' => 'card-sm-banner',
                            'include_children' => false,
                        ),
                    )
                ))
                ?>
                <?php if($cardSm->have_posts()) : while($cardSm->have_posts()) : $cardSm->the_post()?>
              <div class="card__sm">
              <?php the_post_thumbnail();?>
                <div class="card__sm__content">
                  <small><?php echo get_the_date('M, d, Y');?></small>
                  <h2><?php the_title(); ?></h2>
                  <a href="<?php the_permalink();?>">Read More...</a>
                </div>
              </div>
              <?php endwhile;
                    else : 
                        echo "wala nang post!!!!";
                    endif;

                    wp_reset_postdata();
                ?>

            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="latest">
      <div class="container">
        <h2>Latest Story</h2>
        <div class="latest__wrapper">
        <?php $latest = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'date_query' => array(
                        array(
                            'terms' => 'latest-md',
                            'after' => 'June 22, 2023',
                            'before' => 'June 25, 2023',
                            'inclusive'=>true,
                        ),
                      ),
                ))
                ?>
                <!-- Corolla Color -->
                <?php if($latest->have_posts()) : while($latest->have_posts()) : $latest->the_post()?>
          <div class="card__md">
          <?php if(has_post_thumbnail()){
            the_post_thumbnail("thumbnail");
          }?>
            <div class="card__md__content">
              <ul>
                <li><small><?php echo get_the_date('M, d, Y');?></small></li>
                <li><small>Game</small></li>
              </ul>
              <h3>
                <?php the_title()?>
              </h3>

              <p>
                <?php echo wp_trim_words(get_the_content(), 20)?>
              </p>
              <a href="<?php the_permalink()?>">Read More...</a>
            </div>
          </div>
          <?php endwhile;
                    else : 
                        echo "wala nang post!!!!";
                    endif;

                    wp_reset_postdata();
                ?>

        </div>
      </div>
    </section>
    

  <section class="feature">
  <div class="feature__content">
    <h2>Feature New</h2>
    <h3 class="block__header">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        </h3>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga id
          perferendis quisquam error culpa non iure blanditiis placeat rem
          itaque autem nihil ducimus
        </p>
  </div>

  <div class="container">
    <div class="feature__img">
   
    <?php $featurelg = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'tax_query' => array(
              array(
                  'taxonomy' => 'category',
                  'field' => 'name',
                  'terms' => 'feature-lg',
                  'include_children' => false,
              ),
          )
        ))

        ?>
        <?php if($featurelg->have_posts()) : while($featurelg->have_posts()) : $featurelg->the_post()?>
        <?php if(has_post_thumbnail()){
                the_post_thumbnail();
             }?>
    <?php endwhile;
        else :
            echo "No Post!!!";
        endif;

        wp_reset_postdata();
        ?>
    </div>
  </div>

  <div class="container">
    <div class="feature__wrapper">
      <div class="feature__main">
      <?php $feature = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => 'feature-md',
                    'include_children' => false,
                ),
            )
        ))

        ?>
        <?php if($feature->have_posts()) : while($feature->have_posts()) : $feature->the_post()?>

        <article class="card__md">
        <?php if(has_post_thumbnail()){
                the_post_thumbnail();
             }?>
          <div class="card__md__content">
            <small><?php echo get_the_date('M d, Y');?></small>
            <h3>
            <?php the_title(); ?>
            </h3>
            <p>
            <?php echo wp_trim_words(get_the_content(), 30)  ?>
            </p>
            <a href="<?php the_permalink()?>">Read More...</a>
          </div>
        </article>
        <?php endwhile;
        else :
            echo "No Post!!!";
        endif;

        wp_reset_postdata();
        ?>
      



      </div>
      <div class="feature__sidebar">
      <?php $feature = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => 'feature-mini',
                    'include_children' => false,
                ),
            )
        ))

        ?>
        <?php if($feature->have_posts()) : while($feature->have_posts()) : $feature->the_post()?>
        <div class="card__mini">
          <small><?php echo get_the_date('M d, Y');?></small>
          <h4>
          <?php the_title(); ?>
          </h4>
          <a href="<?php the_permalink()?>">Read More ...</a>
        </div>
        <?php endwhile;
        else :
            echo "No Post!!!";
        endif;

        wp_reset_postdata();
        ?>
       

      </div>
    </div>
  </div>
</section>

<?php get_footer();?>
