    <?php /* Template Name: Index.php */ ?>

    <?php get_header(); ?>

    <main>
        <section class="indexpage">
            <div class="container">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                ?>

                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="index-btn">Read More</a>
                        <hr>
                        <br>
                <?php
                    } // end while
                } // end if
                ?>
            </div>
        </section>

    </main>

    <?php get_footer(); ?>