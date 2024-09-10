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
    <div class="stkh-action my-5 pt-5">
        <div class="container">
            <div class="row">
                <h2 id="" class="euro-medium text-center h3">Обнаружение неправомерных действий с данными</h2>
                <p class="lead stkh-action__desc m-auto">Повысьте защиту корпоративной информации от утечки, выявив
                    мошеннические действия со стороны
                    сотрудников</p>

                <nav class="mt-5 overflow-auto">
                    <div class="row stkh-action__row" id="nav-tab" role="tablist">

                        <div class="col-2 pb-2">
                            <button class="nav-link active" id="nav-one" data-bs-toggle="tab" data-bs-target="#nav-1"
                                    type="button" role="tab" aria-controls="nav-1" aria-selected="true">Маркирование
                                документов
                            </button>
                        </div>
                        <div class="col-2 pb-2">
                            <button class="nav-link" id="nav-two" data-bs-toggle="tab" data-bs-target="#nav-2"
                                    type="button" role="tab" aria-controls="nav-2" aria-selected="false">Скрытые
                                водяные знаки
                            </button>
                        </div>
                        <div class="col-2 pb-2">
                            <button class="nav-link" id="nav-three" data-bs-toggle="tab" data-bs-target="#nav-3"
                                    type="button" role="tab" aria-controls="nav-3" aria-selected="false">Технология
                                цифровых
                                отпечатков
                            </button>
                        </div>
                        <div class="col-2 pb-2">
                            <button class="nav-link" id="nav-fore" data-bs-toggle="tab" data-bs-target="#nav-4"
                                    type="button" role="tab" aria-controls="nav-4" aria-selected="false">Распознавание
                                лиц
                            </button>
                        </div>
                        <div class="col-2 pb-2">
                            <button class="nav-link" id="nav-five" data-bs-toggle="tab" data-bs-target="#nav-5"
                                    type="button" role="tab" aria-controls="nav-5" aria-selected="false">Преобразование
                                речи
                                в текст
                            </button>
                        </div>
                        <div class="col-2 pb-2">
                            <button class="nav-link" id="nav-six" data-bs-toggle="tab" data-bs-target="#nav-6"
                                    type="button" role="tab" aria-controls="nav-6" aria-selected="false">Запрет съемных
                                носителей
                            </button>
                        </div>

                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-one"
                         tabindex="0">
                        <div class="row my-5 py-4 bg-brand-gradient rounded d-flex align-items-center">
                            <div class="col-12 col-xl-5 offset-xl-1">
                                <h3 class="text-white">Маркирование документов</h3>
                            </div>
                            <div class="col-12 col-xl-5 d-flex align-items-center">
                                <p class="euro-medium text-white m-0">В системе можно проставить метки на
                                    конфиденциальные
                                    документы.
                                    Благодаря этому сотрудники не смогут их переслать по интернету, сохранить на съемный
                                    носитель или отправить на печать.</p>
                            </div>
                        </div>
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/marked_files_1.jpg' ) ); ?>"
                             alt="Демонстрация фото" class="img-fluid">
                    </div>
                    <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-two" tabindex="0">
                        <div class="row my-5 py-4 bg-brand-gradient rounded d-flex align-items-center">
                            <div class="col-12 col-xl-5 offset-xl-1">
                                <h3 class="text-white">Скрытые водяные знаки</h3>
                            </div>
                            <div class="col-12 col-xl-5 d-flex align-items-center">
                                <p class="euro-medium text-white m-0">Комплекс незаметно маркирует скриншоты, что
                                    помогает идентифицировать сотрудника и выявить канал утечки информации, если снимок
                                    оказывается в открытых источниках.</p>
                            </div>
                        </div>
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/screen_mark_1.jpg' ) ); ?>"
                             alt="Демонстрация фото" class="img-fluid">
                    </div>
                    <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-three" tabindex="0">
                        <div class="row my-5 py-4 bg-brand-gradient rounded d-flex align-items-center">
                            <div class="col-12 col-xl-5 offset-xl-1">
                                <h3 class="text-white">Технология цифровых отпечатков</h3>
                            </div>
                            <div class="col-12 col-xl-5 d-flex align-items-center">
                                <p class="euro-medium text-white m-0">Стахановец создает цифровые копии документов,
                                    которые выходят за периметр компании, и блокирует отправку документов с
                                    конфиденциальной информацией.</p>
                            </div>
                        </div>
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/shadow_copy_enable_1.jpg' ) ); ?>"
                             alt="Демонстрация фото" class="img-fluid">
                    </div>
                    <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-four" tabindex="0">
                        <div class="row my-5 py-4 bg-brand-gradient rounded d-flex align-items-center">
                            <div class="col-12 col-xl-5 offset-xl-1">
                                <h3 class="text-white">Распознавание лиц</h3>
                            </div>
                            <div class="col-12 col-xl-5 d-flex align-items-center">
                                <p class="euro-medium text-white m-0">Опция позволяет идентифицировать каждого
                                    специалиста за рабочим местом и ретроспективно установить, кто работал за ноутбуком
                                    в конкретное время и какие операции совершал. Также можно автоматически выявлять
                                    случаи подмены владельца учетной записи.</p>
                            </div>
                        </div>
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/face_recognition_1.png' ) ); ?>"
                             alt="Демонстрация фото" class="img-fluid">
                    </div>
                    <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav-five" tabindex="0">
                        <div class="row my-5 py-4 bg-brand-gradient rounded d-flex align-items-center">
                            <div class="col-12 col-xl-5 offset-xl-1">
                                <h3 class="text-white">Преобразование речи в текст</h3>
                            </div>
                            <div class="col-12 col-xl-5 d-flex align-items-center">
                                <p class="euro-medium text-white m-0">Программа перехватывает разговоры персонала и
                                    расшифровывает их в текст. Если сотрудник во время диалога через мессенджеры
                                    произносит подозрительные слова, система распознает угрозы и мгновенно оповещает СБ,
                                    отправляя расшифрованный диалог.</p>
                            </div>
                        </div>
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/Транскрибация-разговора-в-текст.jpg' ) ); ?>"
                             alt="Демонстрация фото" class="img-fluid">
                    </div>
                    <div class="tab-pane fade" id="nav-6" role="tabpanel" aria-labelledby="nav-six" tabindex="0">
                        <div class="row my-5 py-4 bg-brand-gradient rounded d-flex align-items-center">
                            <div class="col-12 col-xl-5 offset-xl-1">
                                <h3 class="text-white">Запрет съемных носителей</h3>
                            </div>
                            <div class="col-12 col-xl-5 d-flex align-items-center">
                                <p class="euro-medium text-white m-0">ПО может блокировать использование
                                    флеш-накопителей, фотоаппаратов, смартфонов, съемных дисков с целью предотвращения
                                    копирования ценных сведений и утечки баз данных. Также можно создать список
                                    разрешенных устройств по Flash ID.</p>
                            </div>
                        </div>
                        <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/usb_blocked_1.jpg' ) ); ?>"
                             alt="Демонстрация фото" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Кнопки -->
            <div class="row row-gap-4 mt-5">
                <div class="col-12 col-sm-6 col-lg-3 offset-lg-3 text-center">
                    <a href="#five" class="stkh_action__link btn btn-primary fw-bold text-white rounded-1 p-13 w-100">
                        Попробовать бесплатно
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 text-center">
                    <a href="https://stakhanovets.ru/demo/" target="_blank"
                       class="stkh_action__link btn btn-outline-primary fw-bold rounded-1 p-13 w-100">
                        Онлайн-демо
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- Аналитика поведения -->
    <div class="stkh-analytics my-5 pt-5">
        <div class="container">
            <h2 id="" class="euro-medium text-center display-6">Аналитика поведения пользователей (UBA)</h2>
            <p class="small-text text-center">Анализируйте поведение персонала с помощью мониторинга активности</p>
        </div>
        <div class="container mt-5">

            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-gap-4 mb-3"
                 id="pills-tab-a" role="tablist">

				<?php
				$dataA = [
					1 => [
						'title'   => 'Расчет персональных рисков',
						'content' => 'Софт анализирует поведение сотрудников
                                и определяет уровень потенциальной
                                опасности для работодателя. Возможный риск по каждому специалисту программа высчитывает
                                по десятибалльной шкале.',
						'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/Анализатор-рисков-досье-сотрудника.jpg',
					],
					2 => [
						'title'   => 'Отслеживание вводимого текста',
						'content' => 'Система перехватывает любой вводимый
                            текст и диалоги в приложениях, мессенджерах, что позволяет предотвратить утечку информации в
                            Телеграм, WhatsApp, Skype, Microsoft Teams и др.',
						'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/Чаты-и-звонки-перехват-сообщений-1.jpg',
					],
					3 => [
						'title'   => 'Веб-мониторинг',
						'content' => 'ПО показывает все запросы сотрудников
                            в Яндекс, Google и других поисковиках, мониторит посещенные сайты.',
						'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/web_sites_1.png',
					],
					4 => [
						'title'   => 'Контроль использования CPU/GPU',
						'content' => 'Система составляет график нагрузки
                            центрального процессора и видеокарты
                            для выявления возможного майнинга или банального гейминга.',
						'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/machine_time_1.png',
					],
					5 => [
						'title'   => 'Выявление нетипичного поведения',
						'content' => 'DLP-cистема фиксирует все отклонения в поведении персонала, формируя отчеты, в которых детально отражает активность и отклонения от средних значений.',
						'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/category_1.png',
					],
					6 => [
						'title'   => 'Граф связей',
						'content' => 'По анализу переписок, звонков и сообщений
                            в почте программа визуализирует, с кем
                            и как регулярно сотрудник взаимодействует
                            в компании и за ее пределами.',
						'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/graph_1.png',
					],

				];
				$a     = 1;
				while ( $a <= count( $dataA ) ): ?>

                    <div class="col" role="presentation">
                        <a class="h-100 w-100 shadow rounded text-decoration-none p-4 <?php echo $a == 1 ? ' active' : ''; ?>"
                           id="pills-a<?php echo $a; ?>-tab"
                           data-bs-toggle="pill"
                           data-bs-target="#pills-a<?php echo $a; ?>" type="button" role="tab"
                           aria-controls="pills-a<?php echo $a; ?>"
                           aria-selected="true">
                            <h3 class="display-7 euro-medium"><?php echo $dataA[ $a ]['title']; ?></h3>
                            <p class="mt-3 mb-0"><?php echo $dataA[ $a ]['content']; ?></p>
                        </a>
                    </div>
					<?php
					$a ++;
				endwhile;
				?>
            </div>

            <div class="tab-content mt-5" id="pills-tabContent">
				<?php
				$a = 1;
				while ( $a <= count( $dataA ) ): ?>

                    <div class="tab-pane fade <?php echo $a == 1 ? ' show active' : ''; ?>"
                         id="pills-a<?php echo $a; ?>" role="tabpanel"
                         aria-labelledby="pills-a<?php echo $a; ?>-tab" tabindex="0">
                        <div class=row">
                            <div class="col-12 col-xl-10 offset-xl-1">
                                <a class="text-decoration-none"
                                   data-fancybox="gallery"
                                   data-src="<?php echo $dataA[ $a ]['image']; ?>"
                                   data-caption="<?php echo $dataA[ $a ]['title']; ?>"
                                >
                                    <img src="<?php echo $dataA[ $a ]['image']; ?>"
                                         class="img-fluid border rounded border-primary" alt="Изображение">
                                </a>
                            </div>

                        </div>
                    </div>

					<?php
					$a ++;
				endwhile;
				?>
            </div>
        </div>

        <div class="container text-center mt-5">
            <a href="https://stakhanovets.ru/demo/" target="_blank"
               class="btn btn-primary btn__test-online p-13 text-white rounded-1 fw-bold w-100">Тестировать
                онлайн</a>
        </div>

    </div>

<?php if ( is_user_logged_in() ) : ?>

<?php endif; ?>

    <!-- Предотвращение внутренних угроз -->
    <div class="stkh-predot my-5 pt-5">
        <div class="container">
            <h2 id="" class="euro-medium text-center display-6">Предотвращение внутренних угроз</h2>
            <p class="small-text text-center">Защитите данные компании от случайных и умышленных действий персонала</p>
        </div>
        <div class="container mt-5">

            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-gap-4 mb-3" id="pills-tab-b" role="tablist">

				<?php
				$dataB = [
					1 => [
						'title'   => 'Уведомления о нарушениях',
						'content' => 'В случае инцидента, комплекс мгновенно присылает руководителю или службе 
безопасности уведомление в окне браузера. 
Также можно настроить оповещения по SMS и электронной почте.',
						'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/Босс-онлайн-1.jpg',
					],
					2 => [
						'title'   => 'Глобальный поиск',
						'content' => 'Отчет, который, в случае инцидента, помогает 
пошагово восстановить картину событий, 
отслеживая хронологию. По ключевым словам 
можно произвести поиск по всей базе данных 
текста и найти скриншоты активности сотрудника за конкретный период.',
						'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/text_monitoring_1.png',
					],
					3 => [
						'title'   => 'Мониторинг файловых операций',
						'content' => 'Система отслеживает копирование, перенос, удаление файлов. Перехватывает документы, отправляемые через электронную почту, мессенджеры и социальные сети.',
						'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/Файловые-операции.jpg',
					],
					4 => [
						'title'   => 'Мониторинг буфера обмена',
						'content' => 'Система контролирует текст, файлы и изображения, вставленные из буфера обмена. Можно установить полный запрет на буфер обмена или только клавиши PrintScreen.',
						'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/clipboard_1.jpg',
					],
					5 => [
						'title'   => '«Антифото» (Защита от фотографирования экрана)',
						'content' => 'ПО отслеживает поведение сотрудников: при попытке сделать фото, скрывает окно с ценной информацией, блокирует ПК и направляет уведомление Службе безопасности. Эта инновационная опция на основе нейросети в разы увеличивает защиту информации от утечек.',
						'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/antiphoto_1.jpg',
					],
					6 => [
						'title'   => 'Контроль печати документов',
						'content' => 'ПО перехватывает конфиденциальные документы, отправленные на печать. Это позволяет вовремя обнаружить и остановить утечку информации.',
						'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/printer_1.png',
					],

				];
				$b     = 1;
				while ( $b <= count( $dataB ) ): ?>

                    <div class="col" role="presentation">
                        <a class="h-100 w-100 shadow rounded text-decoration-none p-4 <?php echo $b == 1 ? ' active' : ''; ?>"
                           id="pills-b<?php echo $b; ?>-tab"
                           data-bs-toggle="pill"
                           data-bs-target="#pills-b<?php echo $b; ?>" type="button" role="tab"
                           aria-controls="pills-b<?php echo $b; ?>"
                           aria-selected="true">
                            <h3 class="display-7 euro-medium"><?php echo $dataB[ $b ]['title']; ?></h3>
                            <p class="mt-3 mb-0"><?php echo $dataB[ $b ]['content']; ?></p>
                        </a>
                    </div>
					<?php
					$b ++;
				endwhile;
				?>
            </div>

            <div class="tab-content mt-5" id="pills-tabContentB">
				<?php
				$b = 1;
				while ( $b <= count( $dataB ) ): ?>

                    <div class="tab-pane fade <?php echo $b == 1 ? ' show active' : ''; ?>"
                         id="pills-b<?php echo $b; ?>" role="tabpanel"
                         aria-labelledby="pills-b<?php echo $b; ?>-tab" tabindex="0">
                        <div class=row">
                            <div class="col-12 col-xl-10 offset-xl-1">
                                <a class="text-decoration-none"
                                   data-fancybox="gallery"
                                   data-src="<?php echo $dataB[ $b ]['image']; ?>"
                                   data-caption="<?php echo $dataB[ $b ]['title']; ?>"
                                >
                                    <img src="<?php echo $dataB[ $b ]['image']; ?>"
                                         class="img-fluid border rounded border-primary" alt="Изображение">
                                </a>

                            </div>
                        </div>
                    </div>

					<?php
					$b ++;
				endwhile;
				?>
            </div>
        </div>

        <div class="container text-center mt-5">
            <a href="https://stakhanovets.by/wp-content/uploads/2024/08/2024.-Стахановец.-РБ.-DLP-СИСТЕМА-ДЛЯ-ЗАЩИТЫ-ИНФОРМАЦИИ.pdf"
               class="btn btn-primary p-13 text-white rounded-1 fw-bold px-5" target="_blank">Скачать</a>
        </div>

    </div>

    <!-- Непрерывный мониторинг -->
    <div class="stkh-monitor my-5 pt-5">
        <div class="container">
            <h2 id="" class="euro-medium text-center display-6">Непрерывный мониторинг данных</h2>
            <p class="small-text text-center">Обеспечьте надежную защиту корпоративных данных, отслеживая коммуникацию,
                местонахождение и состояние сотрудников.</p>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-xl-10 col-xxl-8 offset-xl-1 offset-xxl-2">
                    <div class="row row-cols-1 row-cols-md-2 row-gap-4 mb-3" id="pills-tab-c" role="tablist">

						<?php
						$dataC = [
							1 => [
								'title'   => 'Мониторинг мессенджеров, почты и соцсетей',
								'content' => 'Система фиксирует начало и окончание 
рабочего дня, переработки, прогулы. 
Отделяет продуктивную активность 
от неэффективной, ведя учет фактически отработанного времени, и показывает неравномерную загрузку.',
								'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/user_time_activity_1.png',
							],
							2 => [
								'title'   => 'Геолокация',
								'content' => 'Стахановец устанавливает точное местонахождение сотрудника даже при включенном VPN. Система опрашивает внутренние и внешние IP-адреса, сверяя данные с GPS, беспроводных точек доступа и вышек сотовой связи.',
								'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/Геолокация.jpg',
							],
							3 => [
								'title'   => 'Клавиатурный почерк',
								'content' => 'Опция помогает выявить сотрудников в алкогольном и наркотическом опьянении, состоянии стресса и паники, а также узнавать авторов конкретных документов по манере набора текста.',
								'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/handwriter_keyboard_1.jpg',
							],
							4 => [
								'title'   => 'Краулер',
								'content' => 'Позволяет провести сквозной поиск по всем информационным активам компании и узнать, что хранится на компьютерах работников. Краулер выявляет также зашифрованные архивы под видом нейтральных документов.',
								'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/crawler_3.jpg',
							],

						];
						$c     = 1;
						while ( $c <= count( $dataC ) ): ?>

                            <div class="col" role="presentation">
                                <a class="h-100 w-100 shadow rounded text-decoration-none p-4 <?php echo $c == 1 ? ' active' : ''; ?>"
                                   id="pills-c<?php echo $c; ?>-tab"
                                   data-bs-toggle="pill"
                                   data-bs-target="#pills-c<?php echo $c; ?>" type="button" role="tab"
                                   aria-controls="pills-c<?php echo $c; ?>"
                                   aria-selected="true">
                                    <h3 class="display-7 euro-medium"><?php echo $dataC[ $c ]['title']; ?></h3>
                                    <p class="mt-3 mb-0"><?php echo $dataC[ $c ]['content']; ?></p>
                                </a>
                            </div>
							<?php
							$c ++;
						endwhile;
						?>
                    </div>

                    <div class="tab-content mt-5" id="pills-tabContentC">
						<?php
						$c = 1;
						while ( $c <= count( $dataC ) ): ?>

                            <div class="tab-pane fade <?php echo $c == 1 ? ' show active' : ''; ?>"
                                 id="pills-c<?php echo $c; ?>" role="tabpanel"
                                 aria-labelledby="pills-c<?php echo $c; ?>-tab" tabindex="0">
                                <a class="text-decoration-none"
                                   data-fancybox="gallery"
                                   data-src="<?php echo $dataC[ $c ]['image']; ?>"
                                   data-caption="<?php echo $dataC[ $c ]['title']; ?>"
                                >
                                    <img src="<?php echo $dataC[ $c ]['image']; ?>"
                                         class="img-fluid border rounded border-primary" alt="Изображение">
                                </a>
                            </div>

							<?php
							$c ++;
						endwhile;
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Мониторинг сотрудников -->
    <div class="stkh-monitoring my-5 pt-5">
        <div class="container">
            <h2 id="" class="euro-medium text-center display-6">Мониторинг сотрудников</h2>
            <p class="small-text text-center">Контролируйте персонал, чтобы повысить продуктивность команды,
                оптимизировать рабочие процессы и увеличить производительность бизнеса.</p>
        </div>
        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-gap-4 mb-3" id="pills-tab-d" role="tablist">

				<?php
				$dataD = [
					1 => [
						'title'   => 'Учет рабочего времени',
						'content' => 'Система фиксирует начало и окончание рабочего дня, переработки, прогулы. Отделяет продуктивную активность от неэффективной, ведя учет фактически отработанного времени, и показывает неравномерную загрузку.',
						'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/Табель-УРВ.jpg',
					],
					2 => [
						'title'   => 'Скриншоты',
						'content' => 'Программа делает снимки экрана рабочего компьютера согласно заданному интервалу, 
что позволяет детально просмотреть работу каждого специалиста, зафиксировать инциденты и сэкономить место в хранилище. При необходимости снимки можно 
делать ежесекундно.',
						'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/Снимки-экранов.png',
					],
					3 => [
						'title'   => 'Отклонения в активности',
						'content' => 'Комплекс по объективным критериям сравниваетспециалистов, подразделения и филиалы. Поэтому внедрение DLP-системы позволяет узнать, сколько времени персонал проводит в интернете и рабочих программах.',
						'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/user_analitycs_deviation_1.png',
					],
					4 => [
						'title'   => 'Карта рабочего дня',
						'content' => 'Отчет детально отражает на что ежедневно уходит время каждого сотрудника: на работу, простой или развлекательные ресурсы.',
						'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/Лента-активности.jpg',
					],
					5 => [
						'title'   => 'Онлайн-наблюдение экрана',
						'content' => 'Руководитель может подключаться к монитору сотрудников и контролировать активность каждого подчиненного в реальном времени.',
						'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/Захват-экрана-пользователя.jpg',
					],
				];
				$d     = 1;
				while ( $d <= count( $dataD ) ): ?>

                    <div class="col <?php echo $d == 4 ? ' offset-xl-2' : ''; ?>" role="presentation">
                        <a class="h-100 w-100 shadow rounded text-decoration-none p-4 <?php echo $d == 1 ? ' active' : ''; ?>"
                           id="pills-d<?php echo $d; ?>-tab"
                           data-bs-toggle="pill"
                           data-bs-target="#pills-d<?php echo $d; ?>" type="button" role="tab"
                           aria-controls="pills-d<?php echo $d; ?>"
                           aria-selected="true">
                            <h3 class="display-7 euro-medium"><?php echo $dataD[ $d ]['title']; ?></h3>
                            <p class="mt-3 mb-0"><?php echo $dataD[ $d ]['content']; ?></p>
                        </a>
                    </div>
					<?php
					$d ++;
				endwhile;
				?>
            </div>

            <div class="tab-content mt-5" id="pills-tabContentD">
				<?php
				$d = 1;
				while ( $d <= count( $dataD ) ): ?>

                    <div class="tab-pane fade <?php echo $d == 1 ? ' show active' : ''; ?>"
                         id="pills-d<?php echo $d; ?>" role="tabpanel"
                         aria-labelledby="pills-d<?php echo $d; ?>-tab" tabindex="0">
                        <div class=row">
                            <div class="col-12 col-xl-10 offset-xl-1">
                                <a class="text-decoration-none"
                                   data-fancybox="gallery"
                                   data-src="<?php echo $dataD[ $d ]['image']; ?>"
                                   data-caption="<?php echo $dataD[ $d ]['title']; ?>"
                                >
                                    <img src="<?php echo $dataD[ $d ]['image']; ?>"
                                         class="img-fluid border rounded border-primary" alt="Изображение">
                                </a>
                            </div>
                        </div>
                    </div>

					<?php
					$d ++;
				endwhile;
				?>
            </div>

        </div>
    </div>

    <!-- Рассчитать стоимость -->
<?php get_template_part( 'template-parts/content', 'price' ); ?>

    <!-- Блок с партнёрами -->
<?php get_template_part( 'template-parts/content', 'partner' ); ?>

    <!-- Отзывы и публикации -->
<?php get_template_part( 'template-parts/template', 'reviews' ); ?>

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
