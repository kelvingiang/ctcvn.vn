<?php ob_start();  // neu bao loi PHP Warning: Cannot modify header information ??headers already sent by             
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link type="image/x-icon" href="/favicon.ico" rel="icon"> <!-- icon show on web title -->
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <!-- B--- phan cho bootstrap -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- E --- phan bootstrap ------------->
    <!--[if lt IE 9]>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
        <![endif]-->
    <!-- them jquery tu google    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> -->
    <meta name="geo.region" content="VN" />
    <meta name="geo.position" content="10.725377;106.720064" />
    <meta name="ICBM" content="10.725377, 106.720064" />
    <?php suite_seo(); ?>
    <?php wp_head(); ?>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-72143667-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body <?php body_class(); ?>>
    <!--  kiem tra logined  -->
    <?php echo $_SESSION['languages']; ?>
    <?php
    if (is_page('recruit') || is_page('article')) {
        if (!isset($_SESSION['login'])) {
            wp_redirect(home_url());
        }
    }
    ?>
    <!--DOI TRONG PHAN CHECK-IN-->
    <div class="my-waiting">
        <img src="<?php echo PART_IMAGES . 'loading_pr2.gif' ?>" style=" width: 150px" />
    </div>

    <div class="my-container">
        <div id="header-logo">
            <div class="logo ">
                <a href="<?php echo home_url() ?>">
                    <img src="<?php echo PART_IMAGES . 'logo.jpg' ?>" alt="ctcvn_logo" title="ctcvn_logo" />
                </a>
            </div>

        </div>
        <?php if (!is_page('check-in') && !is_page('check_in')) { ?>
            <div>
                <?php get_template_part('templates/template', 'menu') ?>
            </div>
            </hr>
            <div>
                <?php get_template_part('templates/template', 'brach-logo'); ?>
            </div>
    </div>
<?php } ?>
</div>
<div class=" container-fluid">
    <div style="margin: 0px 10px 0px 10px">

        <?php
        //  if (is_page()) {
        // get_template_part('templates/template', 'advertising');
        //  }
        ?>
    </div>
    <div>
        <?php //get_template_part('templates/template', 'xml'); 
        ?>
    </div>