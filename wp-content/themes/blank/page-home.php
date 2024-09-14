<?php
/*
 * Template Name: Главная страница
 */
?>

<?php get_header(); ?>

<main class="main">
            <section class="main_container">
                <div class="container_box__left">
                    <h1 class="title"><?php the_field('home-title'); ?></h1>
                    <p class="description"><?php the_field('home-description'); ?></p>
                    <div class="container_box_item">
                        <div class="container_box_item__left">
                            <a href="tel:+<?php the_field('home-link-button'); ?>" class="header_getcall__container">Связаться</a>
                        </div>
                        <div class="container_box_item__right">
                            <a href=""><span class="btn-arrow_prev" style="background-image: url(<?=get_template_directory_uri()?>/assets/images/CaretCircleRight.svg)"></span></a>
                            <a href=""><span class="btn-arrow_next"style="background-image: url(<?=get_template_directory_uri()?>/assets/images/CaretCircleRight.svg)"></span></a>
                        </div>
                    </div>
                </div>
                <div class="container_box__right">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                        <?php if(get_field('home-slider')): ?>
                        <?php while(has_sub_field('home-slider')) : ?>
                            <div class="swiper-slide"
                            style="background: url('<?php the_sub_field('home-slider-img'); ?>') center/cover no-repeat">
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                </div>
                </div>
            </section>

        </main>



<?php get_footer(); ?>
