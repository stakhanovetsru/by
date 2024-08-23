<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function stakhanovets_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on stakhanovets, use a find and replace
		* to change 'stakhanovets' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'stakhanovets', get_template_directory() . '/languages' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'stakhanovets' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}

add_action( 'after_setup_theme', 'stakhanovets_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function stakhanovets_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'stakhanovets_content_width', 720 );
}

add_action( 'after_setup_theme', 'stakhanovets_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function stakhanovets_scripts() {
	wp_enqueue_style( 'stakhanovets-style', get_stylesheet_uri(), array(), _S_VERSION );

	//wp_enqueue_script( 'stakhanovets-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

}

add_action( 'wp_enqueue_scripts', 'stakhanovets_scripts' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function stakhanovets_pingback_header() {

	?>
    <link rel="preload"
          href="<?php
	      echo esc_url( get_theme_file_uri( 'assets/fonts/EurofontC/EurofontC.woff2' ) ); ?>"
          as="font" type="font/woff2" crossorigin>
    <link rel="preload"
          href="<?php
	      echo esc_url( get_theme_file_uri( 'assets/fonts/EurofontC/EurofontMediumC.woff2' ) ); ?>"
          as="font" type="font/woff2" crossorigin>
    <link rel="preload"
          href="<?php
	      echo esc_url( get_theme_file_uri( 'assets/fonts/EurofontC/EurofontC-Bold.woff2' ) ); ?>"
          as="font" type="font/woff2" crossorigin>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">

    <link
            rel="stylesheet"
            href="<?php
			echo esc_url( get_theme_file_uri( 'assets/css/swiper-bundle.min.css' ) ); ?>"/>
    <link
            rel="stylesheet"
            href="<?php
			echo esc_url( get_theme_file_uri( 'assets/css/fancybox.css' ) ); ?>"
    />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E3TVWEJ9TX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-E3TVWEJ9TX');
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(98125948, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/98125948" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
	<?php

}

add_action( 'wp_head', 'stakhanovets_pingback_header', 1 );


function stakhanovets_add_specific_menu_atts( $atts, $item, $args ) {

	if ( $args->theme_location == 'menu-1' ) {
		// add the desired attributes:
		$atts['class'] = 'nav-link';
	}

	return $atts;
}

// @see https://developer.wordpress.org/reference/hooks/nav_menu_link_attributes/
add_filter( 'nav_menu_link_attributes', 'stakhanovets_add_specific_menu_atts', 10, 3 );


function stakhanovets_add_nav_class( $classes, $item, $args ) {

	if ( $args->theme_location == 'menu-1' ) {
		$classes[] = "nav-item";
	}

	return $classes;
}

// @see https://developer.wordpress.org/reference/hooks/nav_menu_css_class/
add_filter( 'nav_menu_css_class', 'stakhanovets_add_nav_class', 10, 4 );


function stakhanovets_es_module() {

	?>
    <!-- Модули Бутстрап -->
    <script defer src="<?php
	echo esc_url( get_theme_file_uri( 'assets/js/es-module-shims.min.js' ) ); ?>" crossorigin="anonymous"></script>
    <script type="importmap">
    {
      "imports": {
        "@popperjs/core": "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/esm/popper.min.js",
        "bootstrap": "<?php
		echo esc_url( get_theme_file_uri( 'assets/js/bootstrap.esm.min.js' ) ); ?>"
      }
    }

    </script>
    <script type="module">
        import * as bootstrap from 'bootstrap'

        import {Fancybox} from "<?php
				echo esc_url( get_theme_file_uri( 'assets/js/fancybox.esm.js' ) ); ?>";

        Fancybox.bind(
            'a[href*=".jpg"],a[href*=".jpeg"],a[href*=".png"],a[href*=".gif"], [data-fancybox="video"], [data-fancybox="gallery"]',
            {
                groupAll: false,
                // Your custom options
            }
        );
    </script>
	<?php
}

function dd( $input, $collapse = false ) {
	$recursive = function ( $data, $level = 0 ) use ( &$recursive, $collapse ) {
		global $argv;

		$isTerminal = isset( $argv );

		if ( ! $isTerminal && $level == 0 && ! defined( "DUMP_DEBUG_SCRIPT" ) ) {
			define( "DUMP_DEBUG_SCRIPT", true );

			echo '<script language="Javascript">function toggleDisplay(id) {';
			echo 'var state = document.getElementById("container"+id).style.display;';
			echo 'document.getElementById("container"+id).style.display = state == "inline" ? "none" : "inline";';
			echo 'document.getElementById("plus"+id).style.display = state == "inline" ? "inline" : "none";';
			echo '}</script>' . "\n";
		}

		$type        = ! is_string( $data ) && is_callable( $data ) ? "Callable" : ucfirst( gettype( $data ) );
		$type_data   = null;
		$type_color  = null;
		$type_length = null;

		switch ( $type ) {
			case "String":
				$type_color  = "green";
				$type_length = strlen( $data );
				$type_data   = "\"" . htmlentities( $data ) . "\"";
				break;

			case "Double":
			case "Float":
				$type        = "Float";
				$type_color  = "#0099c5";
				$type_length = strlen( $data );
				$type_data   = htmlentities( $data );
				break;

			case "Integer":
				$type_color  = "red";
				$type_length = strlen( $data );
				$type_data   = htmlentities( $data );
				break;

			case "Boolean":
				$type_color  = "#92008d";
				$type_length = strlen( $data );
				$type_data   = $data ? "TRUE" : "FALSE";
				break;

			case "NULL":
				$type_length = 0;
				break;

			case "Array":
				$type_length = count( $data );
		}

		if ( in_array( $type, array( "Object", "Array" ) ) ) {
			$notEmpty = false;

			foreach ( $data as $key => $value ) {
				if ( ! $notEmpty ) {
					$notEmpty = true;

					if ( $isTerminal ) {
						echo $type . ( $type_length !== null ? "(" . $type_length . ")" : "" ) . "\n";

					} else {
						$id = substr( md5( rand() . ":" . $key . ":" . $level ), 0, 8 );

						echo "<a href=\"javascript:toggleDisplay('" . $id . "');\" style=\"text-decoration:none\">";
						echo "<span style='color:#666666'>" . $type . ( $type_length !== null ? "(" . $type_length . ")" : "" ) . "</span>";
						echo "</a>";
						echo "<span id=\"plus" . $id . "\" style=\"display: " . ( $collapse ? "inline" : "none" ) . ";\">&nbsp;&#10549;</span>";
						echo "<div id=\"container" . $id . "\" style=\"display: " . ( $collapse ? "" : "inline" ) . ";\">";
						echo "<br />";
					}

					for ( $i = 0; $i <= $level; $i ++ ) {
						echo $isTerminal ? "|    " : "<span style='color:black'>|</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					}

					echo $isTerminal ? "\n" : "<br />";
				}

				for ( $i = 0; $i <= $level; $i ++ ) {
					echo $isTerminal ? "|    " : "<span style='color:black'>|</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				}

				echo $isTerminal ? "[" . $key . "] => " : "<span style='color:black'>[" . $key . "]&nbsp;=>&nbsp;</span>";

				call_user_func( $recursive, $value, $level + 1 );
			}

			if ( $notEmpty ) {
				for ( $i = 0; $i <= $level; $i ++ ) {
					echo $isTerminal ? "|    " : "<span style='color:black'>|</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				}

				if ( ! $isTerminal ) {
					echo "</div>";
				}

			} else {
				echo $isTerminal ?
					$type . ( $type_length !== null ? "(" . $type_length . ")" : "" ) . "  " :
					"<span style='color:#666666'>" . $type . ( $type_length !== null ? "(" . $type_length . ")" : "" ) . "</span>&nbsp;&nbsp;";
			}

		} else {
			echo $isTerminal ?
				$type . ( $type_length !== null ? "(" . $type_length . ")" : "" ) . "  " :
				"<span style='color:#666666'>" . $type . ( $type_length !== null ? "(" . $type_length . ")" : "" ) . "</span>&nbsp;&nbsp;";

			if ( $type_data != null ) {
				echo $isTerminal ? $type_data : "<span style='color:" . $type_color . "'>" . $type_data . "</span>";
			}
		}

		echo $isTerminal ? "\n" : "<br />";
	};

	call_user_func( $recursive, $input );
}