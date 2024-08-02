<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stakhanovets
 */

?>

<footer id="colophon" class="site-footer">
    <div class="container">
        12345
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script id="__bs_script__">//<![CDATA[
    (function () {
        try {
            var script = document.createElement('script');
            if ('async') {
                script.async = true;
            }
            script.src = 'http://HOST:3000/browser-sync/browser-sync-client.js?v=3.0.2'.replace("HOST", location.hostname);
            if (document.body) {
                document.body.appendChild(script);
            } else if (document.head) {
                document.head.appendChild(script);
            }
        } catch (e) {
            console.error("Browsersync: could not append script tag", e);
        }
    })()
    //]]></script>
</body>
</html>
