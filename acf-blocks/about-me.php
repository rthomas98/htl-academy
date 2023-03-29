<section class="about-me">
    <div class="container-fluid p-0">
        <div class="row d-flex align-content-stretch flex-wrap gx-2">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 bg-black p-5 d-flex align-items-center">
                <div>
                    <p class="lead"><?php the_sub_field( 'sub_title' ); ?></p>
                    <h2>
                        <?php the_sub_field( 'title' ); ?>
                    </h2>

                    <p>
                        <?php the_sub_field( 'content' ); ?>
                    </p>

                    <?php $button_link = get_sub_field( 'button_link' ); ?>
                    <?php if ( $button_link ) : ?>
                        <a class="button outline" href="<?php echo esc_url( $button_link); ?>"><?php the_sub_field( 'button_label' ); ?></a>
                    <?php endif; ?>
                </div>

            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                <?php $image_one = get_sub_field( 'image_one' ); ?>
                <?php $size = 'full'; ?>
                <?php if ( $image_one ) : ?>
                    <?php echo wp_get_attachment_image( $image_one, $size ); ?>
                <?php endif; ?>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                <?php $image_two = get_sub_field( 'image_two' ); ?>
                <?php $size = 'full'; ?>
                <?php if ( $image_two ) : ?>
                    <?php echo wp_get_attachment_image( $image_two, $size ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>