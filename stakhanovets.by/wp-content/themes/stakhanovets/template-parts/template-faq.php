<?php

if ( false === $body = get_transient( 'stkh_by_faq' ) ) {
	$response = wp_remote_get(
		'https://stakhanovets.ru/wp-json/wp/v2/pages/39124',
		[
			'timeout'     => 120,
			'httpversion' => '1.1'
		]
	);

	if ( wp_remote_retrieve_response_code( $response ) === 200 ) {
		$body = wp_remote_retrieve_body( $response );
		set_transient( 'stkh_by_faq', $body, HOUR_IN_SECONDS );
	}
}

$data = $body ? json_decode( $body, true ) : [];

$title = $data['dlp_faq_h2'] ?? 'Вопрос-ответ';

if ( ! $data ) {
	return 'Данные загружаются ...';
}

?>


<div class="stkh-faq my-5 py-0 py-xl-5">
    <div class="container">
        <h2 id="seven" class="euro-medium h2 text-center mb-5"><?php echo $title; ?></h2>

        <div class="accordion stkh-faq__accordion" id="accordionFAQ">

			<?php
			foreach ( $data['dlp_faq'] as $r => $tab ) {
				?>
                <div class="accordion-item shadow rounded mb-4">
                    <h2 class="accordion-header">
                        <button class="accordion-button euro-medium lead rounded" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#panels-collapse<?php echo $r; ?>" aria-expanded="true"
                                aria-controls="panels-collapse<?php echo $r; ?>">
							<?php echo $tab['faq_q']; ?>
                        </button>
                    </h2>
                    <div id="panels-collapse<?php echo $r; ?>" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <p><?php echo $tab['faq_a']; ?></p>
                        </div>
                    </div>
                </div>
				<?php
			}
			?>

        </div>
    </div>
</div>