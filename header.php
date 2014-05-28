<!doctype html>
<?php  $browser=tfuse_browser_body_class();
    if ( $browser[0]=='ie6' ){?><!--[if lt IE 6 ]><html lang="en" class="no-js ie6"> <![endif]--><?php }
    elseif ( $browser[0]=='ie7' ){?><!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]--><?php }
    elseif ( $browser[0]=='ie8' ){?><!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]--><?php }
    elseif ( $browser[0]=='ie9' ){?><!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]--><?php }
    else {?><!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]--><?php }?>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php
		if(!tfuse_options('disable_tfuse_seo_tab'))  wp_title('');
		else {  wp_title( '|', true, 'right' );bloginfo( 'name' );
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";} ?>
	</title>
    <?php tfuse_meta(); ?>
    <link href="http://fonts.googleapis.com/css?family=Copse|Six+Caps|Source+Sans+Pro:400,700" rel="stylesheet">
    <!-- Mobile viewport optimized: h5bp.com/viewport -->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- favicon.ico and apple-touch-icon.png -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57-iphone.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72-ipad.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114-iphone4.png">

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri() ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri() ?>/fonts.css" />
    <!--<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri() ?>/images/src/svgs-output/icons.data.svg.css" />-->
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo tfuse_options('feedburner_url', get_bloginfo_rss('rss2_url')); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php
        if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
        tfuse_head();
        wp_head(); ?>
    <?php  tfuse_phone_style(); ?>
</head>
<body
    <?php tfuse_bk_style(); echo ' '; body_class(); ?>>
    <div class="body_wrap" <?php tfuse_frame_style(); ?> >
        <div class="main_outer">
            <div class="main_top"></div>
            <div class="main_mid">
                <!-- header -->
                <div class="header">
                    <div class="head_title">
                        <h1 class="icon icon-invited-banner"><?php echo tfuse_options('header_title'); ?></h1>
                        <p class="sub_title icon icon-wedding-badge"><?php echo tfuse_options('header_subtitle'); ?></p>
                    </div>
                    <div class="head_names">
                        <div class="head_names_left">
                        <span class="head_names_first">
                            <?php echo tfuse_options('header_left_name'); ?></span> <span class="head_names_last"><?php echo tfuse_options('header_left_city'); ?></span>
                        </div>
                        <span class="head_names_amp">&</span>
                        <div class="head_names_right">
                        <span class="head_names_first">
                            <?php echo tfuse_options('header_right_name'); ?></span> <span class="head_names_last"><?php echo tfuse_options('header_right_city'); ?></span>
                        </div>
                        <span class="ribbon_left"></span>
                        <span class="ribbon_right"></span>
                    </div>
                </div><!-- header -->

            <!-- .topmenu -->
            <div class="topmenu_line_top"></div>
            <?php  tfuse_menu('default');  ?>
            <div class="topmenu_line_bot"></div><!--/ .topmenu -->
            <?php
                global $is_tf_blog_page;
                if($is_tf_blog_page) tfuse_category_on_blog_page();
            ?>
