<?php

if ( false === $body = get_transient( 'stkh_by_nepr' ) ) {
	$response = wp_remote_get(
		'https://stakhanovets.ru/wp-json/wp/v2/pages/39124',
		[
			'timeout'     => 120,
			'httpversion' => '1.1'
		]
	);

	if ( wp_remote_retrieve_response_code( $response ) === 200 ) {
		$body = wp_remote_retrieve_body( $response );
		set_transient( 'stkh_by_nepr', $body, HOUR_IN_SECONDS );
	}
}

$data = $body ? json_decode( $body, true ) : [];

?>

<div class="stkh-monitor my-5 pt-5">
    <div class="container">
        <h2 id=""
            class="euro-medium text-center display-6"><?php echo $data['dlp_data_h2'] ?? 'Непрерывный мониторинг данных'; ?></h2>
        <p class="small-text text-center"><?php echo $data['dlp_data_h3'] ?? 'Обеспечьте надежную защиту корпоративных данных, отслеживая коммуникацию,
            местонахождение и состояние сотрудников.'; ?></p>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-xl-10 col-xxl-8 offset-xl-1 offset-xxl-2">
                <div class="row row-cols-1 row-cols-md-2 row-gap-4 mb-3" id="pills-tab-c" role="tablist">

					<?php
					$dataC = [];

					foreach ( $data['dlp_data_tabs'] as $t => $tab ) {
						$dataC[ $t + 1 ] = $tab;
					}

					// Сопоставление данных
					$dataC_ = [
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
					$c      = 1;
					while ( $c <= count( $dataC ) ): ?>

                        <div class="col" role="presentation">
                            <a class="h-100 w-100 shadow rounded text-decoration-none p-4 <?php echo $c == 1 ? ' active' : ''; ?>"
                               id="pills-c<?php echo $c; ?>-tab"
                               data-bs-toggle="pill"
                               data-bs-target="#pills-c<?php echo $c; ?>" type="button" role="tab"
                               aria-controls="pills-c<?php echo $c; ?>"
                               aria-selected="true">
                                <h3 class="display-7 euro-medium"><?php echo $dataC[ $c ]['title']; ?></h3>
                                <p class="mt-3 mb-0"><?php echo $dataC[ $c ]['description'] ?? $dataC_[ $c ]['content']; ?></p>
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
                               data-src="<?php echo $dataC_[ $c ]['image']; ?>"
                               data-caption="<?php echo $dataC[ $c ]['title']; ?>"
                            >
                                <img src="<?php echo $dataC_[ $c ]['image']; ?>"
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