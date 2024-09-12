<?php

if ( false === $body = get_transient( 'stkh_by_analytics' ) ) {
	$response = wp_remote_get(
		'https://stakhanovets.ru/wp-json/wp/v2/pages/39124',
		[
			'timeout'     => 120,
			'httpversion' => '1.1'
		]
	);

	if ( wp_remote_retrieve_response_code( $response ) === 200 ) {
		$body = wp_remote_retrieve_body( $response );
		set_transient( 'stkh_by_analytics', $body, HOUR_IN_SECONDS );
	}
}

$data = $body ? json_decode( $body, true ) : [];

?>
<div class="stkh-analytics my-5 pt-5">
    <div class="container">
        <h2 id=""
            class="euro-medium text-center display-6"><?php echo $data['dlp_uba_h2'] ?? 'Аналитика поведения пользователей (UBA)'; ?></h2>
        <p class="small-text text-center"><?php echo $data['dlp_uba_h3'] ?? 'Анализируйте поведение персонала с помощью мониторинга активности'; ?></p>
    </div>
    <div class="container mt-5">

        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-gap-4 mb-3"
             id="pills-tab-a" role="tablist">

			<?php
			$dataA = [];

			foreach ( $data['dlp_uba_tabs'] as $t => $tab ) {
				$dataA[ $t + 1 ] = $tab;
			}

			// Сопоставление данных
			$dataA_ = [
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
					'title'   => 'Граф связей',
					'content' => 'По анализу переписок, звонков и сообщений
                            в почте программа визуализирует, с кем
                            и как регулярно сотрудник взаимодействует
                            в компании и за ее пределами.',
					'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/graph_1.png',
				],
				6 => [
					'title'   => 'Выявление нетипичного поведения',
					'content' => 'DLP-cистема фиксирует все отклонения в поведении персонала, формируя отчеты, в которых детально отражает активность и отклонения от средних значений.',
					'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/category_1.png',
				],

			];
			$a      = 1;
			while ( $a <= count( $dataA ) ): ?>

                <div class="col" role="presentation">
                    <a class="h-100 w-100 shadow rounded text-decoration-none p-4 <?php echo $a == 1 ? ' active' : ''; ?>"
                       id="pills-a<?php echo $a; ?>-tab"
                       data-bs-toggle="pill"
                       data-bs-target="#pills-a<?php echo $a; ?>" type="button" role="tab"
                       aria-controls="pills-a<?php echo $a; ?>"
                       aria-selected="true">
                        <h3 class="display-7 euro-medium"><?php echo $dataA[ $a ]['title']; ?></h3>
                        <p class="mt-3 mb-0"><?php echo $dataA[ $a ]['description']; ?></p>
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
                               data-src="<?php echo $dataA_[ $a ]['image']; ?>"
                               data-caption="<?php echo $dataA[ $a ]['title']; ?>"
                            >
                                <img src="<?php echo $dataA_[ $a ]['image']; ?>"
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