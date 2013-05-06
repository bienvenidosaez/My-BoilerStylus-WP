<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title(''); ?></title>

        <meta name="Keywords" content="Listado de palabras clave, no más de 25" />
        <meta name="description" content="Descripción general del sitio de no más de 125 palabras">
        <meta name="viewport" content="width=device-width , initial-scale=1 ,maximum-scale=1" />
        <meta name="AUTHOR" content="Consumeconcabeza" />
        <meta name="Revisit-after" content="15 days" />
        <meta name="robots" content="ALL,FOLLOW" />

        <!-- icons & favicons -->
        <link rel="apple-touch-icon" sizes="32x32"      href="library/faviconos/favicon-32x32.png" />
        <link rel="apple-touch-icon" sizes="57x57"      href="library/faviconos/favicon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72"      href="library/faviconos/favicon-72x72.png" />
        <link rel="apple-touch-icon" sizes="114x114"    href="library/faviconos/favicon-114x114.png" />
        <link rel="apple-touch-icon" sizes="144x144"    href="library/faviconos/favicon-144x144.png" />
        <link rel="apple-touch-icon"                    href="library/faviconos/apple-touch-icon-precomposed.png" />
        <link rel="shortcut icon"                       href="library/faviconos/favicon.ico" />


        <!-- Metadatos para Facebook -->
        <meta property="og:title"       content="" />
        <meta property="og:type"        content="website" />
        <meta property="og:url"         content="/"/>
        <meta property="og:image"       content="" />
        <meta property="og:site_name"   content="" />

        <!-- Hoja de estilos -->
        <link rel="stylesheet" href="library/css/style.css">

        <!-- Normalize como único script que se carga en el header -->
        <script src="library/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body <?php body_class(); ?>>

        <div id="wrapper">

            <header class="header" role="banner">

                <div id="inner-header" class="wrap clearfix">

                	<h1 id="logo"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>

                    <nav role="navigation">
                        <?php bones_main_nav(); ?>
                    </nav>

                </div> <!-- end #inner-header -->

            </header> <!-- end header -->
