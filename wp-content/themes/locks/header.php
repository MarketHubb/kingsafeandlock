<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package locks
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KBHPMN3C');</script>
    <!-- End Google Tag Manager -->

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php
    $bool_title=0;
    if(get_query_var( 'name' )=='blog' && get_query_var('page')=="")
    {
        $bool_title=1;
        $p_title='Blog';
    }
    else if(get_query_var('bname') && get_query_var('blog_id_1'))

//else if(get_query_var( 'name' )=='blogdetail')
    {
        $bool_title=1;
        $p_title='Blog';
    }
    else if(get_query_var('pgg'))
    {
        $bool_title=1;
        $p_title='Blog';
    }
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons"-->
    <!--      rel="stylesheet">-->
    <?php
    if($bool_title==0){
        wp_head();
    }
    elseif($bool_title==1){

        ?>
        <title><?php echo $p_title; ?> - <?php echo get_bloginfo( 'name' ); ?></title>
        <?php wp_head();
    }
    ?>
    <script type="text/javascript">
        (function($) {
            $.noConflict();
            $( document ).ready(function() {
                //Var Declaration
                var header = $('header.site-header'),
                    pageContainer = $('#primary'),
                    menuTrigger = $('button#menu-responsive-trigger'),
                    menuContainer = $('div#menu-responsive-container');

                //Set Nav Search Trigger
                setSearchTrigger($);
                //Is User Scrolling
                isUserScrolling($, header, pageContainer);
                //Responsive Menu
                responsiveMenu(menuTrigger, menuContainer);
                //Smooth Scroll
                smoothScrolling($);

                var mobilesearch = '<li id="mobile-search"></li>';

                $('#primary-menu').append(mobilesearch);

                var Sform='<form id="searchform" method="get" action="<?php bloginfo('url'); ?>/"><label for="s" class="search-field-row"><input type="text" class="search-field" placeholder="SEARCH" name="s" id="s" size="25" /><button id="searchsubmit" href="javascript:void(0)"><div id="searchIcon" class="search-icon"></div></button></label></form>';
                //$('#mobile-search').html(Sform);






                //Owl Slider
                $(".owl-carousel").owlCarousel({
                    singleItem: true,
                    pagination: true,

                    autoPlay: true
                });
                // Mobile dropdown navigation
                showSubMenu($);
                var default_city = $('.city-select').find('option:selected').val();
                showCityCrimeData($, default_city)
                $('.city-select').on('change', function() {
                    showCityCrimeData($, $(this).find('option:selected').val());
                });
                //Back to the top fuction
                backToTop($)
            });
        })(jQuery);
    </script>

</head>
<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBHPMN3C"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="page" class="site <?php echo sanitize_post ( get_queried_object() )->post_name; ?>">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'locks' ); ?></a>
    <header id="masthead" class="site-header" role="banner">

        <!-- Pre-nav -->
        <?php get_template_part('template-parts/global/content', 'pre-nav'); ?>

        <!-- CURRENT:: Fixed header (when scrolling) -->
        <div class="scrolling-brand-phone">
            <div class="brand-phone">

                <!-- LEGACY:: Gun Safes & Gun Single (Phone Lead)  -->
                <?php //if ( is_page(3857) || is_singular('product') ) { ?>
                <!-- <h3>Call for Safe Pricing</h3>-->
                <?php //} else { ?>
                <!-- <h3>Call Us for Services</h3>-->
                <?php // } ?>

                <h3>Call Now</h3>
                <p><a href="tel:713-465-0055">713-465-0055</a></p>
            </div>
        </div>

        <div id="brand-info">
            <div class="container-fixed">
                <div id="brand-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/header/locks-logo.png" alt="King Safe And Lock Logo" />
                    </a>
                </div>
                <div id="brand-phone" class="test-class">
                    <?php
                    if (is_page([3929])) {
                        $header_cta = "Call to Schedule";
                    } else {
                        $header_cta = "Call for Pricing";
                    }
                    ?>
                    <h3 class="mb-2"><?php  echo $header_cta; ?></h3>
                    <p><a href="tel:713-465-0055">713-465-0055</a></p>
                </div>
                <div id="menu-responsive">
                    <button id="menu-responsive-trigger">
                        <span class="closed-menu-text is-active">MENU</span>
                        <span class="opened-menu-text">CLOSE</span>
                        <div class="responsive-menu-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <!--img src="<?php echo get_template_directory_uri(); ?>/images/header/responsive-menu-icon.png" alt="Menu Responsive"-->
                    </button>
                    <div id="menu-responsive-container">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'before' => '<div class="arrow"></div>' ) ); ?>

                        <div class="menu-responsive-bottom-container">
                            <div class="lock-separator-container">
                                <hr class="separator">
                                <span class="lock">
								<img src="<?php echo get_template_directory_uri(); ?>/images/header/key-icon.png" alt="key icon">
							</span>
                                <hr class="separator">
                            </div>
                            <div class="menu-responsive-icons-container">
                                <a href="<?php the_field( 'facebook_url' );  ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/header/fb-icon-responsive.png" alt="facebook icon">
                                </a>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <div class="container-fixed">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
            </div>
        </nav>
    </header><!-- #masthead -->
    <div id="content" class="site-content">
<?php
/*echo 'Work IN PROGRESS!';
echo '<br/><br/><br/>';
global $wp_query;
var_dump($wp_query->query_vars);*/
if(get_query_var( 'name' )=='blog' && get_query_var('page')=="0")
{
    //$_REQUEST['Team']=get_query_var('Team');
    include('myblog.php'); exit;
}
else if(get_query_var('bname') && get_query_var('blog_id_1'))
//else if(get_query_var( 'name' )=='blogdetail')
{
    $_REQUEST['blogdetail']=get_query_var('bname');
    include('blog_detail.php'); exit;
}
//else if(get_query_var('name')=='blog' && get_query_var('page') && get_query_var('page')!="0")
else if(get_query_var('pgg'))

{
    $_REQUEST['paging']=get_query_var('pgg');
    include('myblog.php'); exit;
}
?>

<?php
// Locksmith - High security & smart locks
if (is_page(4247)) {
    set_query_var('alternate_locksmith_form', 5);
    set_query_var('alternate_locksmith_headline', 'Smart & High-Security Locks');
    set_query_var('alternate_locksmith_callouts', ['Top Brands & Models', 'In-stock Now', 'Professional Installation']);
}

?>
