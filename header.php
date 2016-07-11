<?php
/************
    * The header for jobping
    *
    * Displays all of the <head> section and everything upto the main body content.
    * @package WordPress
    @ subpackage Jobpingtheme
************/
?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php bloginfo ('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head();?>
    </head>

<body>
    <!--page = wrap for whole page-->
    <div id="page" class="bigwrap">
        <!--pagein = wrap for inside of page-->
        <div id="pagein" class="innerwrap">
            
            <!--wrap for the header-->
        <header id="masterhead" class="mainhead">
            <div id="headerwrap" class="headerwrapper">
                <!--wordpress menu with ul and li stripped-->
                <div id="jslogin" class="jobslogin">
                    <nav class="jobslog nav-bar"><?php
                        $menuParameters = array(
                            'menu'            => 'jobping_js_login',
                            'container'       => false,
                            'echo'            => false,
                            'items_wrap'      => '%3$s',
                            'depth'           => 0,
                            'theme_location'  =>'jobping_js_login',
                        );
                        echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                    ?></nav><!--recruiters login--><nav class="reclog nav-bar">
                        <?php
                            $menuParameter1 = array(
                                'menu'          =>'jobping_rec_login',
                                'container'     =>false,
                                'echo'          =>false,
                                'items_wrap'    =>'%3$s',
                                'depth'         => 0,
                                'theme_location'=>'jobping_rec_login',
                            );
                        echo strip_tags(wp_nav_menu($menuParameter1), '<a>');
                        ?>
                    </nav>
<!--Section for images within the header.-->                    
                </div>
                <?php the_custom_logo($blog_id = 0); ?>
                <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
            
                <div id="primaryhead" class="header_prime">
                    <nav class="primnav">
                        <?php
                            $menuParameter2 = array(
                                'menu'          =>'jobping_primary_navigation',
                                'container'     =>false,
                                'echo'          =>false,
                                'items_wrap'    =>'%3$s',
                                'depth'         => 0,
                                'theme_location'=>'jobping_primary_navigation',
                            );
                        echo strip_tags(wp_nav_menu($menuParameter2),'<a>');
                        ?>
                    </nav>
                </div>
            </div><!--end headerwrap-->
        </header>
        
<div id="maincontent" class="content">

            