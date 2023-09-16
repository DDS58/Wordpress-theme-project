    <?php get_header(); ?>

    <main>
        <section class="mainbanner" style="background-image: url(<?php the_field('section_big_banner_background_image'); ?>);">
            <div class="container fifty50">
                <div class="text-left">
                    <div class="textbox">
                        <h3><?php the_field('section_big_banner_title1'); ?></h3>
                        <h2 class="greentext fade"><?php the_field('section_big_banner_title2'); ?></h2>
                        <h1 class="greentext"><?php the_field('section_big_banner_title3'); ?></h1>
                        <p><?php the_field('section_big_banner_text'); ?>
                        </p>

                        <?php
                        $bbLink = get_field('section_big_banner_button');
                        if ($bbLink) :
                            $bbLink_url = $bbLink['url'];
                            $bbLink_title = $bbLink['title'];
                            $bbLink_target = $bbLink['target'] ? '_blank' : '_self';
                        ?>
                            <a href="<?php echo $bbLink_url; ?>" target="<?php echo $bbLink_target; ?>" class="">
                                <i class="fa-brands fa-shopify btn"></i>
                                <?php echo $bbLink_title; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="img-right monster-drink">
                    <?php
                    $imgAbout = get_field('section_big_banner_image');
                    ?>
                    <img src="<?php echo esc_url($imgAbout['url']); ?>" alt="<?php echo esc_attr($imgAbout['alt']); ?>">
                </div>
            </div>
        </section>
    </main>

    <section class="drink" id="drink">
        <div class="container">
            <h3><?php the_field('section_drink_banner_title'); ?></h3>
            </h3>

            <div class="drink-parent-flex">
                <?php
                //custom query
                $homepageService = new WP_Query(array(
                    'posts_per_page' => 4,
                    'orderby' => 'rand',
                    'post_type' => 'service'
                ));
                while ($homepageService->have_posts()) {
                    $homepageService->the_post();
                ?>
                    <div class="card">
                        <p><?php the_title(); ?></p>
                        <?php
                        $imgService = get_field('service_image');
                        ?>
                        <img src="<?php echo esc_url($imgService['url']); ?>" alt="<?php echo esc_attr($imgService['alt']); ?>">
                        <a href=""> <i class=" fa-brands fa-shopify btn"></i></a>
                    </div>

                    <!-- end of CARD -->
                <?php }
                wp_reset_postdata(); ?>

            </div>
        </div>
    </section>

    <section class="middlebanner" id="middlebanner" style="background-image: url(<?php the_field('section_middle_banner_background_image'); ?>);">
        <div class="container fifty50">
            <div class="text-left">
                <div class="textbox">
                    <h3><?php the_field('section_middle_banner_title'); ?></h3>
                    <p><?php the_field('section_middle_banner_text'); ?></p>
                    <?php
                    $bbLink = get_field('section_middle_banner_button');
                    if ($bbLink) :
                        $bbLink_url = $bbLink['url'];
                        $bbLink_title = $bbLink['title'];
                        $bbLink_target = $bbLink['target'] ? '_blank' : '_self';
                    ?>
                        <a href="<?php echo $bbLink_url; ?>" target="<?php echo $bbLink_target; ?>" class="">
                            <i class="fa-brands fa-shopify btn"></i>
                            <?php echo $bbLink_title; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="img-right">
                <?php
                $imgAbout = get_field('section_middle_banner_image');
                ?>
                <img src="<?php echo esc_url($imgAbout['url']); ?>" alt="<?php echo esc_attr($imgAbout['alt']); ?>">
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <h3><?php the_field('section_blog_title'); ?></h3>
        </div>
        <div class="grid-container">
            <?php
            //custom query
            $homepageBlogPosts = new WP_Query(array(
                'posts_per_page' => 3,
                'orderby' => 'rand',
                'post_type' => 'post'
            ));
            while ($homepageBlogPosts->have_posts()) {
                $homepageBlogPosts->the_post();
            ?>
                <!-- CARD -->
                <div class="grid-col">
                    <?php the_post_thumbnail(); ?>
                    <div class="body-content">
                        <h3><?php the_title(); ?></h3>
                        <h5><?php the_time('d-m-Y'); ?></h5>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="round-btn"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <!-- end of CARD -->
            <?php }
            wp_reset_postdata(); ?>
        </div>
    </section>

    <section class="drink">
        <div class="container">
            <div class="drink-parent-flex smallgrid">
                <div>
                    <h3><?php the_field('section_location_title'); ?></h3>
                    <p><?php the_field('section_location_text'); ?></p>
                </div>
                <div class="card2">
                    <?php
                    $imgAbout = get_field('section_location_image1');
                    ?>
                    <img src="<?php echo esc_url($imgAbout['url']); ?>" alt="<?php echo esc_attr($imgAbout['alt']); ?>">
                </div>
                <div class="card2">
                    <?php
                    $imgAbout = get_field('section_location_image2');
                    ?>
                    <img src="<?php echo esc_url($imgAbout['url']); ?>" alt="<?php echo esc_attr($imgAbout['alt']); ?>">
                </div>
                <div class="card2">
                    <?php
                    $imgAbout = get_field('section_location_image3');
                    ?>
                    <img src="<?php echo esc_url($imgAbout['url']); ?>" alt="<?php echo esc_attr($imgAbout['alt']); ?>">
                </div>
            </div>
        </div>
    </section>

    <section class="email">
        <div class="container emailtext">
            <div class="subscribe">
                <h3><?php the_field('section_email_title'); ?></h3>
            </div>
            <p><?php the_field('section_email_text'); ?></p>
            <div class="subscribe"><input type="text" name="email_bar" placeholder="Enter Your Email Address" class="emailtype">
                <p class="greentext btn2"> Subcribe Now</p>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>