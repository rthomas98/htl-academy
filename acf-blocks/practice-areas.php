<section class="practice-areas py-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <?php if ( have_rows( 'tile' ) ) : ?>
                    <div class="row">
                        <?php while ( have_rows( 'tile' ) ) : the_row(); ?>
                            <div class="col-6">
                                <a href="<?php the_sub_field( 'link' ); ?>" class="tile p-5">
                                    <?php the_sub_field( 'icon' ); ?>
                                    <h3>
                                        <?php the_sub_field( 'title' ); ?>
                                    </h3>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <p class="lead">
                    <?php the_sub_field( 'sub_title' ); ?>
                </p>
                <h2>
                    <?php the_sub_field( 'title' ); ?>
                </h2>
                <p>
                    <?php the_sub_field( 'content' ); ?>
                </p>
                <?php $button_link = get_sub_field( 'button_link' ); ?>
                <?php if ( $button_link ) : ?>
                    <a class="button" href="<?php echo esc_url( $button_link); ?>"><?php the_sub_field( 'link_lable' ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>