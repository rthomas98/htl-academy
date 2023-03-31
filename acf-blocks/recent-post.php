<section class="recent-post py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <p class="lead">
                    <?php the_sub_field( 'sub_title' ); ?>
                </p>
                <h2>
                    <?php the_sub_field( 'title' ); ?>
                </h2>
                <p>
                    <?php the_sub_field( 'content' ); ?>
                </p>
            </div>
        </div>

        <?php
        // Query arguments for the latest 3 blog posts
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
        );

        // Create a new WP_Query instance
        $latest_posts_query = new WP_Query($args);
        ?>

        <?php if ($latest_posts_query->have_posts()): ?>
            <div class="row">
                <?php while ($latest_posts_query->have_posts()): $latest_posts_query->the_post(); ?>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                        <?php if (has_post_thumbnail()): ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('custom-size'); ?></a>
                        <?php endif; ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <p>No recent posts found.</p>
        <?php endif; ?>

        <?php
        // Reset the main query loop
        wp_reset_postdata();
        ?>
    </div>
</section>