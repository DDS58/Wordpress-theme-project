<?php /* Template Name: Page Contact */ ?>

<?php get_header(); ?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>

        <main>

            <main>
                <section class="banner2 single-banner" style="background-image: url(https://www.prometeus.nl/resize/prometeus-monster-energy-banner_1920014459633.png/prometeus-monster-energy-banner_1920014459633.png);">
                </section>

                <section class="single-blog">
                    <div class="container">
                        <div class="single-detail">
                            <div class="text-banner container title-center">

                            </div>
                            <div class="left-blog">
                                <h2><?php //the_title(); 
                                    ?></h2>
                                <div class="content">
                                    <form action="">
                                        <?php echo apply_shortcodes('[contact-form-7 id="108" title="Contact Monster"]'); ?>
                                    </form>
                                </div>
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