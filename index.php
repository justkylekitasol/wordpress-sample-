
  <?php get_header(); ?>
  <main>
    
    <div class="overview-section">
      <div class="container">
        <h1 class="text-center">Overview</h1>
        <span class="hr-role"></span>
        <div class="overview-content">
          <?php
            while(have_posts()) {
              the_post();
            
          ?>
          <div class="overview-single">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
            <div class="overview-text">
              <h2><?php the_title(); ?></h2>
              <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
              <div class="text-align">
                <a href="<?php the_permalink();?>" class="button">Enter Here</a>
              </div>
            </div>
          </div>
            <?php } 
            wp_reset_query();
          ?>
        </div>
      </div>
    </div>
    
  </main>

  <?php get_footer(); ?>