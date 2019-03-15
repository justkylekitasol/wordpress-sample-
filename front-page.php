
  <?php get_header(); ?>
  <main>
    <div class="hero-section">
      <div class="photos"></div>
      <div class="photos"></div>
      <div class="photos"></div>
      <div class="photos"></div>
      <div class="hero-content">
        <h1>Post Blogs About People</h1>
        <a href="#" class="button">Enter Here</a>
      </div>
    </div>
    <div class="overview-section">
      <div class="container">
        <h1 class="text-center">Overview</h1>
        <span class="hr-role"></span>
        <div class="overview-content">
          <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 3,
            );

            $blogposts = new WP_Query($args);

            while($blogposts->have_posts()) {
              $blogposts->the_post();
            
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
    <div class="featured-section">
      <div class="container">
        <h1 class="text-center">Featured</h1>
        <span class="hr-role"></span>
        <div class="featured-content">
          <div class="product-item">
            <div class="product-image">
              <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/action-adult-balance-1966688.jpg" alt="" class="prodpic1">
              </a>
            </div>
            <div class="product-content">
              <h3 class="prod-title">
                <a href="">Product 1</a>
              </h3>
              <div class="price">P499.00</div>
            </div>
            <ul class="prod-social">
              <li>
                <a href="" data-tip="quick view">
                <i class="fa fa-eye"></i>
                </a>
              </li>
              <li>
                <a href="" data-tip="wishlist">
                <i class="fa fa-heart"></i>
                </a>
              </li>
              <li>
                <a href="" data-tip="add to cart">
                <i class="fa fa-shopping-cart"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="product-item">
            <div class="product-image">
              <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/action-adult-balance-1966688.jpg" alt="" class="prodpic1">
              </a>
            </div>
            <div class="product-content">
              <h3 class="prod-title">
                <a href="">Product 2</a>
              </h3>
              <div class="price">P499.00</div>
            </div>
            <ul class="prod-social">
              <li>
                <a href="" data-tip="quick view">
                <i class="fa fa-eye"></i>
                </a>
              </li>
              <li>
                <a href="" data-tip="wishlist">
                <i class="fa fa-heart"></i>
                </a>
              </li>
              <li>
                <a href="" data-tip="add to cart">
                <i class="fa fa-shopping-cart"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="product-item">
            <div class="product-image">
              <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/action-adult-balance-1966688.jpg" alt="" class="prodpic1">
              </a>
            </div>
            <div class="product-content">
              <h3 class="prod-title">
                <a href="">Product 3</a>
              </h3>
              <div class="price">P499.00</div>
            </div>
            <ul class="prod-social">
              <li>
                <a href="" data-tip="quick view">
                <i class="fa fa-eye"></i>
                </a>
              </li>
              <li>
                <a href="" data-tip="wishlist">
                <i class="fa fa-heart"></i>
                </a>
              </li>
              <li>
                <a href="" data-tip="add to cart">
                <i class="fa fa-shopping-cart"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php get_footer(); ?>