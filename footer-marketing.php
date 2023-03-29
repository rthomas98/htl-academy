<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BuddyBoss_Theme
 */

?>


</div><!-- #content -->

<footer class="footer py-5">
    <div class="container">
        <div class="row">
            <?php if ( have_rows( 'company_info', 'option' ) ) : ?>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                <?php while ( have_rows( 'company_info', 'option' ) ) : the_row(); ?>
                    <?php $logo = get_sub_field( 'logo' ); ?>
                    <?php $size = 'full'; ?>
                    <?php if ( $logo ) : ?>
                        <?php echo wp_get_attachment_image( $logo, $size ); ?>
                    <?php endif; ?>
                    <?php the_sub_field( 'content' ); ?>
                    <?php if ( have_rows( 'social_links' ) ) : ?>
                    <ul class="nav px-0">
                        <?php while ( have_rows( 'social_links' ) ) : the_row(); ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php the_sub_field( 'link' ); ?>"><?php the_sub_field( 'icon' ); ?></a>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php else : ?>
                        <?php // No rows found ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>

            <?php if ( have_rows( 'box_one', 'option' ) ) : ?>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                <?php while ( have_rows( 'box_one', 'option' ) ) : the_row(); ?>
                    <h4>
                        <?php the_sub_field( 'title' ); ?>
                    </h4>
                    <?php if ( have_rows( 'menu' ) ) : ?>
                <ul class="nav">
                        <?php while ( have_rows( 'menu' ) ) : the_row(); ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php the_sub_field( 'link' ); ?>"><?php the_sub_field( 'label' ); ?></a>
                    </li>
                        <?php endwhile; ?>
                </ul>
                    <?php else : ?>
                        <?php // No rows found ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>

            <?php if ( have_rows( 'box_two', 'option' ) ) : ?>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                <?php while ( have_rows( 'box_two', 'option' ) ) : the_row(); ?>
                    <h4><?php the_sub_field( 'title' ); ?></h4>
                    <?php if ( have_rows( 'menu' ) ) : ?>
                        <ul class="nav flex-column">
                        <?php while ( have_rows( 'menu' ) ) : the_row(); ?>
                            <?php the_sub_field( 'label' ); ?>
                            <?php $link = get_sub_field( 'link' ); ?>
                            <?php if ( $link ) : ?>
                                <a href="<?php echo esc_url( $link); ?>"><?php echo esc_html( $link ); ?></a>
                            <?php endif; ?>
                            </ul>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <?php // No rows found ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>


            <?php if ( have_rows( 'box_three', 'option' ) ) : ?>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                <?php while ( have_rows( 'box_three', 'option' ) ) : the_row(); ?>
                   <h4>
                       <?php the_sub_field( 'title' ); ?>
                   </h4>
                    <?php the_sub_field( 'content' ); ?>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
        <hr>
        <div class="row copyright">
            <div class="col text-center">
                <p>
                    &copy <?php echo date( 'Y' ); ?> <?php echo get_bloginfo( 'name' ); ?>. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</footer>

</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
