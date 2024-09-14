<?php
/**
 *
 * @package div
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

<!--    --><?php //bloginfo('name');?>
    <link rel="shortcut icon" href="<?php bloginfo('template_url')?>/assets/images/favicon.ico" type="image/x-icon"/>


    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
            <div class="header_container">
                <a href="/" class="header_logo">
                    <img src="<?php the_field("logo-img", "option"); ?>" alt="" class="header_logo_img">
                </a>
                <nav class="nav_menu">
                    <!-- По ТЗ нет условий по Walker меню и не делал его. Но шаблон в структуре присутствует) -->
                    <ul class="nav_menu_container">
                        <li class="menu_item"><a href="#" class="menu_item_link">Главная</a></li>
                        <li class="menu_item"><a href="#" class="menu_item_link">Услуги</a></li>
                        <li class="menu_item"><a href="#" class="menu_item_link">Товары</a></li>
                        <li class="menu_item"><a href="#" class="menu_item_link">О компании</a></li>
                        <li class="menu_item"><a href="#" class="menu_item_link">Отзывы</a></li>
                        <li class="menu_item"><a href="#" class="menu_item_link">Контакты</a></li>
                    </ul>
                </nav>
                <div class="header_contacts">
                    <div class="header_box__left">
                       <a href="" class="phone_like"><?php the_field("phone-like", "option"); ?></a>
                        
                    </div>
                    <div class="header_box__right">
                        <a href="tel:+<?php the_field("phone", "option"); ?>" class="phone_call">Связаться</a>
                    </div>
                </div>
            </div>

        </header>