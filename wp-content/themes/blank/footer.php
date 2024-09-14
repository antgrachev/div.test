<?php
/**
 *
 * @package div
 */

?>
<footer class="footer">
            <div class="footer_container">
                <div class="footer_logo">
                    <a href="/">
                        <img src="<?php the_field("logo-img", "option"); ?>" alt="">
                    </a>
                </div>

                <nav class="nav_menu">
                    <ul class="nav_menu_container">
                        <li class="menu_item"><a href="#" class="footer_link">Главная</a></li>
                        <li class="menu_item"><a href="#" class="menu_item_link footer_link">Услуги</a></li>
                        <li class="menu_item"><a href="#" class="menu_item_link footer_link">Товары</a></li>
                        <li class="menu_item"><a href="#" class="menu_item_link footer_link">О компании</a></li>
                        <li class="menu_item"><a href="#" class="menu_item_link footer_link">Отзывы</a></li>
                        <li class="menu_item"><a href="#" class="menu_item_link footer_link">Контакты</a></li>
                    </ul>
                </nav>
                <div class="footer_social">
                <?php if(get_field('social-repiter', 'option')): ?>
                        <?php while(has_sub_field('social-repiter', 'option')) : ?>
                            <a href="<?php the_sub_field('social-href', 'option'); ?>" class="footer_social__link"><img class="logo_soc"
                            src="<?php the_sub_field('social-img', 'option'); ?>"></img></a>
                       <?php endwhile; ?>
                        <?php endif; ?>
                </div>
                <div class="footer_desc">
                    <div class="footer_desc_box__left">
                        <span class="">ИП Овчаренко Андрей Сергеевич</span>
                    </div>
                    <div class="footer_desc_box__rigth">
                        <a href="" class="link">Политика конфиденциальности</a>
                        <span></span>
                        <a href="" class="link">Договор оферты</a>

                    </div>
                </div>
            </div>

        </footer>
        <?php wp_footer();?>

</body>
</html>