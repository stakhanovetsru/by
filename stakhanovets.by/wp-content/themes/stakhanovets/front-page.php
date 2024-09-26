<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stakhanovets
 */

get_header();
?>

    <!-- Промо -->
<?php get_template_part( 'template-parts/content', 'promo' ); ?>


    <!-- Сертификат -->
<?php get_template_part( 'template-parts/content', 'sert' ); ?>


    <!-- О системе -->
<?php get_template_part( 'template-parts/content', 'system' ); ?>


    <!-- Преимущества -->
<?php get_template_part( 'template-parts/content', 'fichi' ); ?>


    <!-- Как работает -->
<?php get_template_part( 'template-parts/content', 'works' ); ?>


    <!-- Совместимость -->
<?php get_template_part( 'template-parts/content', 'sovm' ); ?>


    <!-- Калькулятор -->
<?php
$calc_title = carbon_get_post_meta( get_the_ID(), 'calc_title' );
$calc_decrp = carbon_get_post_meta( get_the_ID(), 'calc_decrp' );
?>
    <div class="stkh-sovmstm my-5 pt-5">
        <div class="container">
            <h2 id="" class="euro-medium text-center h3"><?php echo wp_kses( $calc_title, 'post' ) ?></h2>
            <p class="small-text text-center"><?php echo wp_kses( $calc_decrp, 'post' ) ?></p>

            <!-- Кнопка редактирования для Админов -->
			<?php stkhBtnEdit( '#carbon_fields_container_9b073c73', 'text-dark' ); ?>
        </div>
        <div class="container rounded shadow mt-5 py-5">

			<?php get_template_part( '/template-parts/template-calc' ) ?>

        </div>
    </div>

    <!-- Разработчик программного -->
<?php get_template_part( 'template-parts/content', 'razrab' ); ?>


    <!-- Возможности -->
<?php get_template_part( 'template-parts/content', 'vozmzh' ); ?>


    <!-- Обнаружение действий -->
<?php get_template_part( 'template-parts/template', 'act' ); ?>


    <!-- Аналитика поведения -->
<?php get_template_part( 'template-parts/content', 'analytics' ); ?>


    <!-- Предотвращение внутренних угроз -->
<?php get_template_part( 'template-parts/content', 'ugroza' ); ?>

    <!-- Непрерывный мониторинг -->
<?php get_template_part( 'template-parts/content', 'nepr' ); ?>

    <!-- Мониторинг сотрудников -->
<?php get_template_part( 'template-parts/content', 'monitoring' ); ?>

    <!-- Рассчитать стоимость -->
<?php get_template_part( 'template-parts/content', 'price' ); ?>

    <!-- Блок с партнёрами -->
<?php get_template_part( 'template-parts/content', 'partner' ); ?>

    <!-- Отзывы и публикации -->
<?php //get_template_part( 'template-parts/template', 'reviews' ); ?>

    <!-- СМИ о нас -->
<?php get_template_part( 'template-parts/template', 'smi' ); ?>

    <!-- Вопрос-ответ -->
<?php get_template_part( 'template-parts/template', 'faq' ); ?>

    <!-- Модули ES -->
<?php stakhanovets_es_module(); ?>


    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';

        // init Swiper:
        const swiperMarquee = new Swiper('.marqueeSwiper', {
            // Optional parameters
            slidesPerView: 1,
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 480px
                480: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 3,
                    spaceBetween: 40
                }
            },
            spaceBetween: 30,
            centeredSlides: true,
            speed: 6000,
            autoplay: {
                delay: 1,
            },
            loop: true,
            allowTouchMove: false,
            disableOnInteraction: true
        });


    </script>

<?php
get_footer();
