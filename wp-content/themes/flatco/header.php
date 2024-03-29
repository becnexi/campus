<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <?php current_title(); ?>
        <?php favicon(); ?>
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if IE 7]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome/font-awesome-ie7.min.css"><![endif]-->
        <?php
        facebookOpenGraphMeta();
        global $tw_end;
        $tw_start = $tw_end = '';
        if (tw_option('theme_layout') != "Fullwidth") {
            $tw_start = '<div class="theme-boxed">';
            $tw_end = '</div>';
        }
        wp_head();
        ?>
    </head>
    <body <?php body_class('loading') ?>>
        <div id="one-page-home"></div>
        <?php echo $tw_start; ?>
        <?php if (tw_option('top_bar')) { ?>
            
        <?php } ?>
        <!-- Start Header -->
        <header id="header"<?php echo tw_option('menu_fixed')&&!preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|sagem|sharp|sie-|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT']) ? ' class="affix"' : ''; ?>>
        
          
            <div class="container">                        
                <div class="row">
                    <div class="span3">
                      <i class="tw-icon-facebook"></i>
                    </div>
                    <div class="span9">
                        <nav class="menu-container visible-desktop clearfix">
                            <?php theme_menu(); ?>
                        </nav>
                    </div>
                    <div class="show-mobile-menu hidden-desktop clearfix">
                        <div class="mobile-menu-text"><?php _e('Menu', 'themewaves'); ?></div>
                        <div class="mobile-menu-icon">
                            <span></span><span></span><span></span><span></span>
                        </div>
                    </div>
                </div>

            </div>
            <nav id="mobile-menu">
                <div class="container">
                    <?php mobile_menu(); ?>
                </div>
            </nav>
        </header>
        
        <div class="tw-top-bar">
                
                   
                <div class="lay">
                
                <div class="container"> <div class="seclay"> 
                
             <img src="http://localhost/zii/wp-content/themes/flatco/inglesmerida.png" alt="ingles en merida aprende en english campus">
                    <ul class="tw-social-icon pull-right">
                                <?php tw_social(); ?>
                            </ul> 
                            <div class="row">
                        <div class="span6">
                            <?php dynamic_sidebar("top-widget");; ?>
                         
                        </div>
                        <div class="span6">
                           
                        </div>
                    </div>
                    <a href="#portfolio" class="intro"></a>
               </div> </div></div>
               <div class="topbarx"></div>
               
            </div>
        <!-- End Header -->
        <?php
        get_template_part('slider');
        ?>
        <!-- Start Loading -->
        <section id="loading"></section>
        <!-- End   Loading -->
        <!-- Start Main -->
        <section id="main">
            <div <?php echo is_page() ? 'id="page"' : 'class="container"'; ?>>