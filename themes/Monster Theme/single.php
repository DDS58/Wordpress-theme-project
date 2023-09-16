    <?php get_header(); ?>

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <main>
                <section class="banner2 single-banner" style="background-image: url(https://www.prometeus.nl/resize/prometeus-monster-energy-banner_1920014459633.png/prometeus-monster-energy-banner_1920014459633.png);">
                </section>

                <section class="single-blog">
                    <div class="container">
                        <div class="single-detail">
                            <div class="text-banner container title-center">
                                <h2>News </h2>
                                <div class="author-detail">
                                    <h4> <?php the_author(); ?></h4>
                                    <h5><?php the_time('d-m-Y'); ?></h5>
                                </div>
                            </div>
                            <div class="left-blog">
                                <h2><?php the_title(); ?></h2>
                                <div class="content">
                                    <?php the_content(); ?>
                                </div>
                                <ul>
                                    <li><a href="">Categories :</a></li>
                                    <?php

                                    foreach ((get_the_category()) as $category) {
                                        echo '<li><a>' . $category->cat_name . '</li></a>';
                                    }


                                    ?>
                                </ul>
                                <ul>
                                    <li><a href="">Tags :</a></li>
                                    <?php
                                    $posttags = get_the_tags();
                                    if ($posttags) {
                                        foreach ($posttags as $tag) {
                                            echo '<li><a>' . $tag->name . ' </li></a>';
                                        }
                                    } ?>
                                </ul>

                                <a href="<?php echo home_url(); ?>" class="btn btn-black">
                                    Back to home
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

            </main>
    <?php
        } // end while
    } // end if
    ?>

    <?php get_footer(); ?>