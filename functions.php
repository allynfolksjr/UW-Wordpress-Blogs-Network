<?  
function uw_setup()
{

  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );

  add_image_size( 'Thimble', 50, 50, true );
  add_image_size( 'Sidebar', 250, 9999, false );
  add_image_size( 'Body Image', 300, 9999, false );
  add_image_size( 'Full Width', 620, 9999, false );

  register_nav_menu( 'primary', __( 'Primary Menu', 'uw' ) );
  register_nav_menu( 'footer', __( 'Footer Menu', 'uw' ) );

  define( 'HEADER_IMAGE_WIDTH', apply_filters( 'twentyeleven_header_image_width', 1280 ) );
  define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'twentyeleven_header_image_height', 215 ) );

  add_theme_support( 'custom-header', array( 'random-default' => true ) );
          //add_custom_image_header( 'uw_header_style', 'uw_admin_header_style', 'uw_admin_header_image' );

  register_default_headers( array(
    'blossoms' => array(
      'url' => '%s/../UW-Wordpress-Theme/img/header/cherries.jpg',
      'thumbnail_url' => '%s/../UW-Wordpress-Theme/img/header/cherries-thumbnail.jpg',
      'description' => __( 'Cherry Blossoms', 'uw' )
      )
    ));
};


function uw_dropdowns() 
  {
    wp_nav_menu( array( 
      'theme_location'  => 'primary',
      'container_class' => 'nav-collapse',
      'menu_class'      => 'nav',
      'fallback_cb'     => 'wp_page_menu',
      'walker'          => new UW_Dropdowns_Walker_Menu(),
    ) );
  }
?>
