<div class="stkh-partner my-5">
    <div class="container">
        <div class="row row-gap-4 stkh-partner__bg rounded py-5">
			<?php
			$contacts_uz = carbon_get_the_post_meta( 'crb_contacts_uz' );
			if ( $contacts_uz ) {

				foreach ( $contacts_uz as $i => $section ) {

					$tel  = wp_kses( $section['co_tel'], "post" );
					$mail = wp_kses( $section['co_mail'], "post" );

					?>
                    <div class="col-12 col-md-5 d-flex align-items-stretch <?php echo ( $i == 0 ) ? ' offset-md-1' : ''; ?>">
                        <div class="bg-white rounded p-4 w-100">
                            <h2 class="fw-bold display-7 mb-4"><?php echo $section['radio'] == 'd' ? 'Доверенный партнёр' : 'Официальный дистрибьютор'; ?></h2>
                            <div class="row">
                                <div class="col">
									<?php echo '<p class="mb-2">' . wp_kses( $section['co_name'], "post" ) . '</p>'; ?>
									<?php echo '<p class="mb-2"><a class="text-decoration-none text-dark" href="tel:' . $tel . '">' . $tel . '</a></p>'; ?>
									<?php echo '<p class="mb-2"><a class="text-decoration-none text-dark" href="mailto:' . $mail . '">' . $mail . '</a></p>'; ?>
                                </div>
                                <div class="col-auto d-flex align-items-end">
									<?php if ( $section['co_photo'] ) : ?>
										<?php if ( $section['co_link'] ) : ?>
                                            <a href="<?php echo esc_url( $section['co_link'] ); ?>"
                                            target="_blank" rel="noopener nofollow noindex">
										<?php endif; ?>
                                        <img src="<?php echo wp_get_attachment_url( $section['co_photo'] ); ?>"
                                             alt="Logo" class="img-fluid" width="150">
										<?php if ( $section['co_link'] ) : ?>
                                            </a>
										<?php endif; ?>
									<?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php
				}
			}
			?>
        </div>

        <!-- Кнопка редактирования для Админов -->
		<?php stkhBtnEdit( '#carbon_fields_container_1876bef71', 'text-dark' ); ?>
    </div>
</div>