<?php

if ( false === $body = get_transient( 'stkh_by_monitoring' ) ) {
	$response = wp_remote_get(
		'https://stakhanovets.ru/wp-json/wp/v2/pages/39124',
		[
			'timeout'     => 120,
			'httpversion' => '1.1'
		]
	);

	if ( wp_remote_retrieve_response_code( $response ) === 200 ) {
		$body = wp_remote_retrieve_body( $response );
		set_transient( 'stkh_by_monitoring', $body, HOUR_IN_SECONDS );
	}
}

$data = $body ? json_decode( $body, true ) : [];

?>

<div class="stkh-monitoring my-5 pt-5">
    <div class="container">
        <h2 id=""
            class="euro-medium text-center display-6"><?php echo $data['dlp_employee_h2'] ?? 'Мониторинг сотрудников'; ?></h2>
        <p class="small-text text-center"><?php echo $data['dlp_employee_h3'] ?? 'Контролируйте персонал, чтобы повысить продуктивность команды,
            оптимизировать рабочие процессы и увеличить производительность бизнеса.'; ?></p>
    </div>
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-gap-4 mb-3" id="pills-tab-d" role="tablist">

			<?php
			$dataD = [];

			foreach ( $data['dlp_employee_tabs'] as $t => $tab ) {
				$dataD[ $t + 1 ] = $tab;
			}

			// Сопоставление данных
			$dataD_ = [
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
					'title'   => 'Онлайн-наблюдение экрана',
					'content' => 'Руководитель может подключаться к монитору сотрудников и контролировать активность каждого подчиненного в реальном времени.',
					'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/Захват-экрана-пользователя.jpg',
				],
				4 => [
					'title'   => 'Карта рабочего дня',
					'content' => 'Отчет детально отражает на что ежедневно уходит время каждого сотрудника: на работу, простой или развлекательные ресурсы.',
					'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/Лента-активности.jpg',
				],
				5 => [
					'title'   => 'Отклонения в активности',
					'content' => 'Комплекс по объективным критериям сравниваетспециалистов, подразделения и филиалы. Поэтому внедрение DLP-системы позволяет узнать, сколько времени персонал проводит в интернете и рабочих программах.',
					'image'   => 'https://stakhanovets.by/wp-content/uploads/2024/08/user_analitycs_deviation_1.png',
				],
			];
			$d      = 1;
			while ( $d <= count( $dataD ) ): ?>

                <div class="col <?php echo $d == 4 ? ' offset-xl-2' : ''; ?>" role="presentation">
                    <a class="h-100 w-100 shadow rounded text-decoration-none p-4 <?php echo $d == 1 ? ' active' : ''; ?>"
                       id="pills-d<?php echo $d; ?>-tab"
                       data-bs-toggle="pill"
                       data-bs-target="#pills-d<?php echo $d; ?>" type="button" role="tab"
                       aria-controls="pills-d<?php echo $d; ?>"
                       aria-selected="true">
                        <h3 class="display-7 euro-medium"><?php echo $dataD[ $d ]['title']; ?></h3>
                        <p class="mt-3 mb-0"><?php echo $dataD[ $d ]['description'] ?? $dataD_[ $d ]['content']; ?></p>
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
                               data-src="<?php echo $dataD_[ $d ]['image']; ?>"
                               data-caption="<?php echo $dataD[ $d ]['title']; ?>"
                            >
                                <img src="<?php echo $dataD_[ $d ]['image']; ?>"
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