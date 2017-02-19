<html>
<head>
  <title><?php bloginfo('name')?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="<?php bloginfo('description') ?> ">
  <?php echo wp_site_icon(); ?>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
  <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

</head>



<body <?php body_class(); ?>>
  <div id="page-wrapper">
    <header id="header" class="alt">
      <h1><a href="<?php bloginfo('url')?>"><?php bloginfo('name'); ?></a></h1>
      <nav>
        <a href="#menu">Menu</a>
      </nav>
    </header>

    <!-- Menu -->
    <nav id="menu">
      <div class="inner">
        <h2>Menu</h2>
        <ul class="links">
          <li><a href="index.html">Home</a></li>
          <li><a href="generic.html">Generic</a></li>
          <li><a href="elements.html">Elements</a></li>
          <li><a href="#">Log In</a></li>
          <li><a href="#">Sign Up</a></li>
        </ul>
        <a href="#" class="close">Close</a>
      </div>
    </nav>
