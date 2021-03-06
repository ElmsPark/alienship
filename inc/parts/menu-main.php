<?php
/**
 * The template used to load the Main Menu in header*.php
 *
 * @package Alien Ship
 * @since Alien Ship 0.70
 */
?>
<!-- Main menu -->
    <div id="main-nav">
      <div class="<?php echo apply_filters( 'alienship_main_navbar_class' , 'navbar navbar-inverse'); ?>">
        <div class="navbar-inner">
          <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse-main">
            <span></span>
            <span class="icon-bar-text">Menu</span>
            <span></span>
            </a>
            <div class="nav-collapse-main">
            <?php wp_nav_menu( array( 'theme_location' => 'main', 'container' => false, 'menu_class' => 'nav', 'walker' => new alienship_Navbar_Nav_Walker(), 'fallback_cb' => false )); ?>
            <?php if ( of_get_option('alienship_search_bar', '1') ) { ?>
            <form role="search" class="navbar-search pull-right" action="<?php echo site_url(); ?>" id="searchform" method="get">
              <label class="assistive-text" for="s">Search</label>
              <input type="text" placeholder="Search ..." value="<?php echo esc_attr( get_search_query() ); ?>" id="s" name="s" class="search-query">
              <input type="submit" value="Search" id="searchsubmit" name="submit" class="btn btn-primary">
            </form>
            <?php } // end if search bar ?>
            </div><!-- .nav-collapse -->
          </div><!-- .container -->
        </div><!-- .navbar-inner -->
      </div><!-- .navbar -->
    </div><!-- #main-nav -->
<!-- End Main menu -->
