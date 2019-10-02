<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700|Playfair+Display|Roboto+Slab:400,700" rel="stylesheet">

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fontello/css/fontello.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">


        <link rel="canonical" href="http://example.com/" />

        <title>TSG</title>
    </head>

    <body class="blog">
        <div class="container page z-depth-5">
            <nav>
                <div class="nav-wrapper">
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <a href="<?php echo MYURL; ?>/index.php" class="brand-logo left valign-wrapper">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/static/images/IIT_Kharagpur_Logo.svg" alt="" class="responsive-img">
                        <!-- <span>Technology Students’ Gymkhana</span> -->
                        <!-- CSS :after inserts the Appropriate text -->
                    </a>
                    <ul id="nav-mobile" class="hide-on-med-and-down right">
                        <!-- <li><a href="index.html" class="waves-effect waves-light">Home</a></li> -->
                        <li><a href="<?php echo MYURL; ?>/interiit.php" class="waves-effect">Inter IIT</a></li>
                        <li><a href="<?php echo MYURL; ?>/gc.php" class="waves-effect">GC</a></li>
                        <li><a href="<?php echo MYURL; ?>/fests.html" class="waves-effect">Fests</a></li>
                        <li><a href="<?php echo MYURL; ?>/societies.html" class="waves-effect">Societies</a></li>
                        <li><a href="<?php echo MYURL; ?>/contacts.html" class="waves-effect">Contacts</a></li>
                        <li class="active"><a href="<?php echo MYURL; ?>/blog" class="waves-effect">Blog</a></li>
                    </ul>
                </div>
            </nav>