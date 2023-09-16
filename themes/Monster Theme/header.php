<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Monster Energy</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container">
            <div class="header-flex">
                <div>
                    <img src="https://david58.web582.com/block3/webproject1/img/M.svg" alt="Monster Logo M">
                </div>
                <nav>
                    <?php wp_nav_menu(array('theme_location' => 'primary-menu'));
                    ?>

                    <!-- <ul class="pages">
                        <li>
                            <a href="<?php //echo home_url(); 
                                        ?>">Home</a>
                        </li>
                        <li>
                            <a href="">Monster Drink</a>
                        </li>
                        <li>
                            <a href="">About</a>
                        </li>
                        <li>
                            <a href="">Contact</a>
                        </li>
                        <li>
                            <a href="">Post</a>
                        </li>
                        <li>
                            <a href=""><i class="fa-brands fa-shopify greentext"></i></a>
                        </li>
                    </ul> -->
                </nav>
                <li>
                    <a href=""><i class="fa-brands fa-shopify greentext shopbag"></i></a>
                </li>
            </div>
        </div>
    </header>