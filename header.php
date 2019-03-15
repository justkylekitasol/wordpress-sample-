<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>
<body id="body">
  <header>
    <nav>
      <!-- <input type="checkbox" id="nav" class="hidden">
      <label for="nav" class="nav-btn">
        <i></i>
        <i></i>
        <i></i>
      </label> -->
      <div class="logo-section">
        <div class="logo">
          <a href="#" class="home-btn">PEOPLE</a>
        </div>
      </div>
      <div class="nav-section">
        <input type="checkbox" id="nav" class="hidden">
        <label for="nav" class="nav-btn">
          <i></i>
          <i></i>
          <i></i>
        </label>
        <div class="nav-wrapper">
          <ul>
            <li><a href="<?php echo site_url(''); ?>" class="home-btn">Home</a></li>
            <li><a class="overview-btn">Overview</a></li>
            <li><a class="featured-btn">Featured</a></li>
            <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
            <li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
            <li><a href="<?php echo site_url('/projects'); ?>">Projects</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>