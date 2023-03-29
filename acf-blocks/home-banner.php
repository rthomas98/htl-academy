<section class="home-banner" style="background: url(<?php the_sub_field( 'background_image' ); ?>) no-repeat center center; background-size: cover;">
    <div class="container-fluid">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 m-0 p-0 order-lg-first">
                <?php $lawyer_image = get_sub_field( 'lawyer_image' ); ?>
                <?php $size = 'full'; ?>
                <?php if ( $lawyer_image ) : ?>
                    <?php echo wp_get_attachment_image( $lawyer_image, $size ); ?>
                <?php endif; ?>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 p-5 order-first order-sm-first order-md-first ">
                <p class="lead m-0"><?php the_sub_field( 'sub_title' ); ?></p>
                <h1>
                    <?php the_sub_field( 'title' ); ?>
                </h1>

                <?php the_sub_field( 'content' ); ?>
            </div>
        </div>
        <div class="row d-flex align-items-end order-last order-sm-last order-md-last order-lg-last">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-5 bg-black">
                <p>
                    Legal Advice with a Unique Approach and a Fresh Perspective.
                </p>
                <h2>Committed to your Satisfaction</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6"></div>
        </div>
    </div>
</section>