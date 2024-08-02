<?php

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function stakhanovets_pingback_header()
{

    ?>
    <link rel="preload"
          href="<?php
          echo esc_url(get_theme_file_uri('assets/fonts/EurofontC/EurofontC.woff2')); ?>"
          as="font" type="font/woff2" crossorigin>
    <link rel="preload"
          href="<?php
          echo esc_url(get_theme_file_uri('assets/fonts/EurofontC/EurofontMediumC.woff2')); ?>"
          as="font" type="font/woff2" crossorigin>
    <link rel="preload"
          href="<?php
          echo esc_url(get_theme_file_uri('assets/fonts/EurofontC/EurofontC-Bold.woff2')); ?>"
          as="font" type="font/woff2" crossorigin>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <?php

    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}

add_action('wp_head', 'stakhanovets_pingback_header', 1);