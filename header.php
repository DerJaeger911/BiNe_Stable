<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head();?>

</head>
<body>
    

 <!--Adds two headers, one for Contact, Impressum etc. and one for Page menu-->
<header>

    <div class='contact-menu-container'>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'top-contact-menu',
                'menu_class' => 'top-contact-bar'
            )
        );
        ?>
    </div>


    <div class='page-menu-container'>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'top-page-menu',
                'menu_class' => 'top-page-bar'
            )
        );
        ?>
    </div>

</header>