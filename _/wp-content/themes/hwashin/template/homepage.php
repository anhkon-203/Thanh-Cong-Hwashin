<?php get_header();
/* Template Name: Trang chủ */

?>
<?php
//banner
$re_banner = get_field('banner');
//giới thiệu
$title_intro = get_field('title_intro');
$re_intro = get_field('re_intro');
// tầm nhìn & sứ mệnh
$group_mission = get_field('group_mission');
if ($group_mission) {
    $title_mission = $group_mission['title'];
    $re_mission = $group_mission['re_mission'];
    $content_mission = $group_mission['content'];
}
// về chúng tôi
$group_about_us = get_field('group_about_us');
if ($group_about_us) {
    $title_about_us = $group_about_us['title'];
    $content_about_us = $group_about_us['content'];
    $image_about_us = $group_about_us['image'];
    $btn_text_about_us = $group_about_us['btn_text'];
    $url_about_us = $group_about_us['url'];
}
// năng lực sản xuất
$group_capacity = get_field('group_capacity');
if ($group_capacity) {
    $title_capacity = $group_capacity['title'];
    $re_capacity = $group_capacity['re_capacity'];
}
$group_capacity_slider = get_field('group_capacity_slider');
if ($group_capacity_slider) {
    $re_capacity_slider = $group_capacity_slider['re_capacity_slider'];
}
// sản phẩm
$group_product = get_field('group_product');
if ($group_product) {
    $img_product = $group_product['img'];
    $title_product = $group_product['title'];
    $content_product = $group_product['content'];
    $post_product = $group_product['post'];
    $btn_text_product = $group_product['btn_text'];
    $url_product = $group_product['url'];
}
// tin tức và sự kiện
$group_news = get_field('group_news');
if ($group_news) {
    $title_news = $group_news['title'];
    $content_news = $group_news['content'];
    $post_news = $group_news['post'];
    $btn_text_news = $group_news['btn_text'];
    $url_news = $group_news['url'];
}
// năng lực đóng gói
$title_talent = get_field('title_talent');
$content_talent = get_field('content_talent');
$image_talent = get_field('image_talent');
?>
    <!--banner-->
    <section class="section-banner-homepage">
        <div class="slider-banner-homepage swiper">
            <div class="swiper-wrapper">
                <?php foreach ($re_banner as $banner) : ?>
                    <div class="child swiper-slide">
                        <div class="image">
                            <figure>
                                <img src="<?php echo getimage($banner['img']); ?>" alt="">
                            </figure>
                        </div>
                        <a class="play" href="<?php echo $banner['video'] ?>" data-fancybox="video">
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"
                                 fill="none">
                                <path d="M22.0003 3.66602C11.8803 3.66602 3.66699 11.8793 3.66699 21.9993C3.66699 32.1193 11.8803 40.3327 22.0003 40.3327C32.1203 40.3327 40.3337 32.1193 40.3337 21.9993C40.3337 11.8793 32.1203 3.66602 22.0003 3.66602ZM26.877 25.171L24.5303 26.5277L22.1837 27.8843C19.1587 29.626 16.6837 28.196 16.6837 24.7127V21.9993V19.286C16.6837 15.7843 19.1587 14.3727 22.1837 16.1143L24.5303 17.471L26.877 18.8277C29.902 20.5693 29.902 23.4293 26.877 25.171Z"
                                      fill="#ED1C24"/>
                            </svg>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="container">
            <div class="text">
                <div class="slide-text-banner-homepage swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($re_banner as $banner) : ?>
                            <div class="child swiper-slide">
                                <div class="title">
                                    <h1>
                                        <?= $banner['title'] ?>
                                    </h1>
                                </div>
                                <div class="desc">
                                    <p>
                                        <?= $banner['desc'] ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
    </section>
<!-- giới thiệu-->
    <section class="section-homepage">
        <div class="image">
            <figure>
                <img src="<?php echo get_template_directory_uri() ?>/dist/img/img-1.png" alt="">
            </figure>
        </div>
        <div class="content">
            <div class="slide-text-banner swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($re_intro as $intro) : ?>
                        <div class="child swiper-slide">
                            <div class="text">
                                <div class="name">
                                <span>
                                    <?= $title_intro ?>
                                </span>
                                </div>
                                <div class="title">
                                    <h2>
                                        <?= $intro['company_name'] ?>
                                    </h2>
                                </div>
                                <div class="desc">
                                    <p>
                                        <?= $intro['content'] ?>
                                    </p>
                                </div>
                                <div class="action">
                                    <a href="<?= $intro['url'] ?>">
                                        <?= $intro['btn_text'] ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                             viewBox="0 0 20 21" fill="none">
                                            <path d="M10.0003 2.16602C5.40033 2.16602 1.66699 5.89935 1.66699 10.4993C1.66699 15.0993 5.40033 18.8327 10.0003 18.8327C14.6003 18.8327 18.3337 15.0993 18.3337 10.4993C18.3337 5.89935 14.6003 2.16602 10.0003 2.16602ZM13.3587 10.941L10.8587 13.441C10.7337 13.566 10.5753 13.6243 10.417 13.6243C10.2587 13.6243 10.1003 13.566 9.97533 13.441C9.73366 13.1993 9.73366 12.7993 9.97533 12.5577L11.4087 11.1243H7.08366C6.74199 11.1243 6.45866 10.841 6.45866 10.4993C6.45866 10.1577 6.74199 9.87435 7.08366 9.87435H11.4087L9.97533 8.44102C9.73366 8.19935 9.73366 7.79935 9.97533 7.55768C10.217 7.31602 10.617 7.31602 10.8587 7.55768L13.3587 10.0577C13.6003 10.2993 13.6003 10.6993 13.3587 10.941Z"
                                                  fill="white"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="slider-pagination"></div>
            </div>
            <div class="slide-image-banner swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($re_intro as $intro) : ?>
                        <div class="child swiper-slide">
                            <figure>
                                <?php
                                var_dump($intro['img']);
                                ?>
                                <img src="<?php echo getimage($intro['img']); ?>" alt="">
                            </figure>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<!--tầm nhìn & sứ mệnh-->
    <section class="section-homepage-1">
        <div class="container">
            <div class="title">
                <h2>
                    <?= $title_mission ?>
                </h2>
                <div class="desc">
                    <p>
                        <?= $content_mission ?>
                    </p>
                </div>
            </div>
            <div class="content row">
                <?php foreach ($re_mission as $mission) : ?>
                <div class="col-lg-4">
                    <div class="child">
                        <div class="image">
                            <figure>
                                <img src="<?php echo getimage($mission['image']); ?>" alt="">
                            </figure>
                        </div>
                        <div class="text">
                            <div class="name">
                                <h4>
                                    <?= $mission['title'] ?>
                                </h4>
                            </div>
                            <div class="desc">
                                <p>
                                    <?= $mission['content'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<!--về chúng tôi-->
    <section class="section-homepage-2">
        <div class="content">
            <div class="image">
                <figure>
                    <img src="<?= getimage($image_about_us) ?>" alt="">
                </figure>
            </div>
            <div class="text">
                <div class="title">
                    <h2>
                        <?= $title_about_us ?>
                    </h2>
                </div>
                <div class="desc">
                    <p>
                        <?= $content_about_us ?>
                    </p>
                </div>
                <div class="action">
                    <a href="<?= $url_about_us ?>">
                        <?= $btn_text_about_us ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                            <path d="M10.0003 2.16602C5.40033 2.16602 1.66699 5.89935 1.66699 10.4993C1.66699 15.0993 5.40033 18.8327 10.0003 18.8327C14.6003 18.8327 18.3337 15.0993 18.3337 10.4993C18.3337 5.89935 14.6003 2.16602 10.0003 2.16602ZM13.3587 10.941L10.8587 13.441C10.7337 13.566 10.5753 13.6243 10.417 13.6243C10.2587 13.6243 10.1003 13.566 9.97533 13.441C9.73366 13.1993 9.73366 12.7993 9.97533 12.5577L11.4087 11.1243H7.08366C6.74199 11.1243 6.45866 10.841 6.45866 10.4993C6.45866 10.1577 6.74199 9.87435 7.08366 9.87435H11.4087L9.97533 8.44102C9.73366 8.19935 9.73366 7.79935 9.97533 7.55768C10.217 7.31602 10.617 7.31602 10.8587 7.55768L13.3587 10.0577C13.6003 10.2993 13.6003 10.6993 13.3587 10.941Z"
                                  fill="white"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
<!--năng lực sản xuất-->
    <section class="section-homepage-3">
        <div class="container">
            <div class="title">
                <h2>
                    <?= $title_capacity ?>
                </h2>
            </div>
            <div class="content row">
                <?php foreach ($re_capacity as $capacity) : ?>
                <div class="col-lg-3">
                    <div class="child">
                        <div class="image">
                            <figure>
                                <img src="<?= getimage($capacity['image']) ?>" alt="">
                            </figure>
                        </div>
                        <div class="text">
                            <div class="name">
                                <a href="<?= $capacity['url'] ?>">
                                    <?= $capacity['title'] ?>
                                </a>
                            </div>
                            <div class="desc">
                                <p>
                                    <?= $capacity['content'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<!--năng lực sản xuất slider-->
    <section class="section-homepage-4">
        <div class="content">
            <div class="col-left">
                <div class="text">
                    <div class="slide-manufacture-text swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($re_capacity_slider as $capacity_slider) : ?>
                            <div class="child swiper-slide">
                                <div class="name">
                                    <span>
                                        <?= $capacity_slider['title'] ?>
                                    </span>
                                </div>
                                <div class="title">
                                    <h2>
                                        <?= $capacity_slider['title_2'] ?>
                                    </h2>
                                </div>
                                <div class="desc">
                                    <p>
                                        <?= $capacity_slider['content'] ?>
                                    </p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="slider-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="col-right">
                <div class="slide-manufacture-image swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($re_capacity_slider as $capacity_slider) : ?>
                        <div class="child swiper-slide">
                            <figure>
                                <img src="<?= getimage($capacity_slider['image']) ?>" alt="">
                            </figure>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--sản phẩm-->
    <section class="section-homepage-5">
        <div class="banner">
            <figure>
                <img src="<?php echo get_template_directory_uri()?>/dist/img/img-1.png" alt="">

            </figure>
            <div class="list">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="content">
                <div class="image">
                    <figure>
                        <img src="<?= getimage($img_product) ?>" alt="">
                    </figure>
                </div>
                <div class="text">
                    <div class="title">
                        <h2>
                            <?= $title_product ?>
                        </h2>
                    </div>
                    <div class="desc">
                        <p>
                            <?= $content_product ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="list-pr">
                <div class="slide-pr swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($post_product as $post) : ?>
                        <div class="child swiper-slide">
                            <div class="image">
                                <figure>
                                    <?php
                                    $img_thumbnail_product = get_the_post_thumbnail_url($post->ID);
                                    ?>
                                    <img src="<?= (!empty($img_thumbnail_product)) ? $img_thumbnail_product : getimage(img_default()) ?>"
                                         alt="">
                                </figure>
                            </div>
                            <div class="text">
                                <div class="name">
                                    <a href="<?= get_permalink($post -> ID) ?>">
                                        <?= $post -> post_title ?>
                                    </a>
                                </div>
                                <div class="desc">
                                    <p>
                                        <?= wp_trim_words(get_the_excerpt($post->ID, false, true), 25) ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="slider-button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path d="M11.2797 16.9473L18.8264 24.4806C18.9503 24.6056 19.0978 24.7048 19.2603 24.7725C19.4227 24.8401 19.597 24.875 19.773 24.875C19.949 24.875 20.1233 24.8401 20.2858 24.7725C20.4483 24.7048 20.5957 24.6056 20.7197 24.4806C20.968 24.2308 21.1074 23.8929 21.1074 23.5406C21.1074 23.1884 20.968 22.8504 20.7197 22.6006L14.1197 15.9339L20.7197 9.33394C20.968 9.08412 21.1074 8.74619 21.1074 8.39394C21.1074 8.04169 20.968 7.70375 20.7197 7.45394C20.5962 7.32795 20.449 7.22773 20.2865 7.15906C20.124 7.0904 19.9494 7.05467 19.773 7.05394C19.5966 7.05467 19.4221 7.0904 19.2596 7.15906C19.0971 7.22773 18.9499 7.32795 18.8264 7.45394L11.2797 14.9873C11.1444 15.1121 11.0364 15.2637 10.9625 15.4323C10.8886 15.601 10.8505 15.7831 10.8505 15.9673C10.8505 16.1514 10.8886 16.3335 10.9625 16.5022C11.0364 16.6709 11.1444 16.8224 11.2797 16.9473Z"
                              fill="#1B1717"/>
                    </svg>
                </div>
                <div class="slider-button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path d="M20.7203 15.0527L13.1736 7.5194C13.0497 7.39443 12.9022 7.29523 12.7397 7.22754C12.5773 7.15985 12.403 7.125 12.227 7.125C12.051 7.125 11.8767 7.15985 11.7142 7.22754C11.5517 7.29523 11.4043 7.39443 11.2803 7.5194C11.032 7.76921 10.8926 8.10715 10.8926 8.4594C10.8926 8.81165 11.032 9.14958 11.2803 9.3994L17.8803 16.0661L11.2803 22.6661C11.032 22.9159 10.8926 23.2538 10.8926 23.6061C10.8926 23.9583 11.032 24.2962 11.2803 24.5461C11.4038 24.672 11.551 24.7723 11.7135 24.8409C11.876 24.9096 12.0506 24.9453 12.227 24.9461C12.4034 24.9453 12.5779 24.9096 12.7404 24.8409C12.9029 24.7723 13.0501 24.672 13.1736 24.5461L20.7203 17.0127C20.8556 16.8879 20.9636 16.7363 21.0375 16.5677C21.1114 16.399 21.1495 16.2169 21.1495 16.0327C21.1495 15.8486 21.1114 15.6665 21.0375 15.4978C20.9636 15.3291 20.8556 15.1776 20.7203 15.0527Z"
                              fill="#1B1717"/>
                    </svg>
                </div>
                <a href="<?= $url_product ?>" class="see-more">
                    <?= $btn_text_product ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                        <path d="M12.43 14.3191C12.24 14.3191 12.05 14.2491 11.9 14.0991C11.61 13.8091 11.61 13.3291 11.9 13.0391L17.44 7.49914L11.9 1.95914C11.61 1.66914 11.61 1.18914 11.9 0.899141C12.19 0.609141 12.67 0.609141 12.96 0.899141L19.03 6.96914C19.32 7.25914 19.32 7.73914 19.03 8.02914L12.96 14.0991C12.81 14.2491 12.62 14.3191 12.43 14.3191Z"
                              fill="#034EA1"/>
                        <path d="M18.33 8.24914H1.5C1.09 8.24914 0.75 7.90914 0.75 7.49914C0.75 7.08914 1.09 6.74914 1.5 6.74914H18.33C18.74 6.74914 19.08 7.08914 19.08 7.49914C19.08 7.90914 18.74 8.24914 18.33 8.24914Z"
                              fill="#034EA1"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
<!--tin tức và sự kiện-->
    <section class="section-homepage-6">
        <div class="container">
            <div class="title">
                <div class="left">
                    <h2>
                        <?= $title_news ?>
                    </h2>
                    <div class="desc">
                        <p>
                            <?= $content_news ?>
                        </p>
                    </div>
                </div>
                <div class="right">
                    <a href="<?= $url_news ?>">
                        <?= $btn_text_news ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                            <path d="M10.0003 2.16602C5.40033 2.16602 1.66699 5.89935 1.66699 10.4993C1.66699 15.0993 5.40033 18.8327 10.0003 18.8327C14.6003 18.8327 18.3337 15.0993 18.3337 10.4993C18.3337 5.89935 14.6003 2.16602 10.0003 2.16602ZM13.3587 10.941L10.8587 13.441C10.7337 13.566 10.5753 13.6243 10.417 13.6243C10.2587 13.6243 10.1003 13.566 9.97533 13.441C9.73366 13.1993 9.73366 12.7993 9.97533 12.5577L11.4087 11.1243H7.08366C6.74199 11.1243 6.45866 10.841 6.45866 10.4993C6.45866 10.1577 6.74199 9.87435 7.08366 9.87435H11.4087L9.97533 8.44102C9.73366 8.19935 9.73366 7.79935 9.97533 7.55768C10.217 7.31602 10.617 7.31602 10.8587 7.55768L13.3587 10.0577C13.6003 10.2993 13.6003 10.6993 13.3587 10.941Z"
                                  fill="#034EA1"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="content row">
                <?php foreach ($post_news as $post_new) : ?>
                <div class="col-lg-4">
                    <div class="child">
                        <div class="image">
                            <figure>
                                <?php
                                $img_thumbnail_news = get_the_post_thumbnail_url($post_new->ID);
                                ?>
                                <img src="<?= (!empty($img_thumbnail_news)) ? $img_thumbnail_news : getimage(img_default()) ?>"
                                     alt="">
                            </figure>
                        </div>
                        <div class="text">
                            <div class="date">
                                <figure>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22"
                                         fill="none">
                                        <path d="M6 4.75C5.59 4.75 5.25 4.41 5.25 4V1C5.25 0.59 5.59 0.25 6 0.25C6.41 0.25 6.75 0.59 6.75 1V4C6.75 4.41 6.41 4.75 6 4.75Z"
                                              fill="white"/>
                                        <path d="M14 4.75C13.59 4.75 13.25 4.41 13.25 4V1C13.25 0.59 13.59 0.25 14 0.25C14.41 0.25 14.75 0.59 14.75 1V4C14.75 4.41 14.41 4.75 14 4.75Z"
                                              fill="white"/>
                                        <path d="M6.5 13.5C6.37 13.5 6.24 13.47 6.12 13.42C5.99 13.37 5.89 13.3 5.79 13.21C5.61 13.02 5.5 12.77 5.5 12.5C5.5 12.37 5.53 12.24 5.58 12.12C5.63 12 5.7 11.89 5.79 11.79C5.89 11.7 5.99 11.63 6.12 11.58C6.48 11.43 6.93 11.51 7.21 11.79C7.39 11.98 7.5 12.24 7.5 12.5C7.5 12.56 7.49 12.63 7.48 12.7C7.47 12.76 7.45 12.82 7.42 12.88C7.4 12.94 7.37 13 7.33 13.06C7.3 13.11 7.25 13.16 7.21 13.21C7.02 13.39 6.76 13.5 6.5 13.5Z"
                                              fill="white"/>
                                        <path d="M10 13.5C9.87 13.5 9.74 13.47 9.62 13.42C9.49 13.37 9.39 13.3 9.29 13.21C9.11 13.02 9 12.77 9 12.5C9 12.37 9.03 12.24 9.08 12.12C9.13 12 9.2 11.89 9.29 11.79C9.39 11.7 9.49 11.63 9.62 11.58C9.98 11.42 10.43 11.51 10.71 11.79C10.89 11.98 11 12.24 11 12.5C11 12.56 10.99 12.63 10.98 12.7C10.97 12.76 10.95 12.82 10.92 12.88C10.9 12.94 10.87 13 10.83 13.06C10.8 13.11 10.75 13.16 10.71 13.21C10.52 13.39 10.26 13.5 10 13.5Z"
                                              fill="white"/>
                                        <path d="M13.5 13.5C13.37 13.5 13.24 13.47 13.12 13.42C12.99 13.37 12.89 13.3 12.79 13.21C12.75 13.16 12.71 13.11 12.67 13.06C12.63 13 12.6 12.94 12.58 12.88C12.55 12.82 12.53 12.76 12.52 12.7C12.51 12.63 12.5 12.56 12.5 12.5C12.5 12.24 12.61 11.98 12.79 11.79C12.89 11.7 12.99 11.63 13.12 11.58C13.49 11.42 13.93 11.51 14.21 11.79C14.39 11.98 14.5 12.24 14.5 12.5C14.5 12.56 14.49 12.63 14.48 12.7C14.47 12.76 14.45 12.82 14.42 12.88C14.4 12.94 14.37 13 14.33 13.06C14.3 13.11 14.25 13.16 14.21 13.21C14.02 13.39 13.76 13.5 13.5 13.5Z"
                                              fill="white"/>
                                        <path d="M6.5 17C6.37 17 6.24 16.97 6.12 16.92C6 16.87 5.89 16.8 5.79 16.71C5.61 16.52 5.5 16.26 5.5 16C5.5 15.87 5.53 15.74 5.58 15.62C5.63 15.49 5.7 15.38 5.79 15.29C6.16 14.92 6.84 14.92 7.21 15.29C7.39 15.48 7.5 15.74 7.5 16C7.5 16.26 7.39 16.52 7.21 16.71C7.02 16.89 6.76 17 6.5 17Z"
                                              fill="white"/>
                                        <path d="M10 17C9.74 17 9.48 16.89 9.29 16.71C9.11 16.52 9 16.26 9 16C9 15.87 9.03 15.74 9.08 15.62C9.13 15.49 9.2 15.38 9.29 15.29C9.66 14.92 10.34 14.92 10.71 15.29C10.8 15.38 10.87 15.49 10.92 15.62C10.97 15.74 11 15.87 11 16C11 16.26 10.89 16.52 10.71 16.71C10.52 16.89 10.26 17 10 17Z"
                                              fill="white"/>
                                        <path d="M13.5 17C13.24 17 12.98 16.89 12.79 16.71C12.7 16.62 12.63 16.51 12.58 16.38C12.53 16.26 12.5 16.13 12.5 16C12.5 15.87 12.53 15.74 12.58 15.62C12.63 15.49 12.7 15.38 12.79 15.29C13.02 15.06 13.37 14.95 13.69 15.02C13.76 15.03 13.82 15.05 13.88 15.08C13.94 15.1 14 15.13 14.06 15.17C14.11 15.2 14.16 15.25 14.21 15.29C14.39 15.48 14.5 15.74 14.5 16C14.5 16.26 14.39 16.52 14.21 16.71C14.02 16.89 13.76 17 13.5 17Z"
                                              fill="white"/>
                                        <path d="M18.5 8.83997H1.5C1.09 8.83997 0.75 8.49997 0.75 8.08997C0.75 7.67997 1.09 7.33997 1.5 7.33997H18.5C18.91 7.33997 19.25 7.67997 19.25 8.08997C19.25 8.49997 18.91 8.83997 18.5 8.83997Z"
                                              fill="white"/>
                                        <path d="M14 21.75H6C2.35 21.75 0.25 19.65 0.25 16V7.5C0.25 3.85 2.35 1.75 6 1.75H14C17.65 1.75 19.75 3.85 19.75 7.5V16C19.75 19.65 17.65 21.75 14 21.75ZM6 3.25C3.14 3.25 1.75 4.64 1.75 7.5V16C1.75 18.86 3.14 20.25 6 20.25H14C16.86 20.25 18.25 18.86 18.25 16V7.5C18.25 4.64 16.86 3.25 14 3.25H6Z"
                                              fill="white"/>
                                    </svg>
                                </figure>
                                <span>
                                    <?= get_the_date('d/m/Y', $post_new->ID) ?>
                                </span>
                            </div>
                            <div class="name">
                                <a href="<?= get_permalink($post_new->ID) ?>">
                                    <?= $post_new->post_title ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<!--năng lực đóng gói-->
    <section class="section-homepage-7">
        <div class="container">
            <div class="content row">
                <div class="col-lg-6">
                    <div class="col-left">
                        <div class="image">
                            <figure>
                                <img src="<?= getimage($image_talent) ?>" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="col-right">
                        <div class="title">
                            <h2>
                                <?= $title_talent ?>
                            </h2>
                        </div>
                        <div class="desc">
                            <p>
                                <?= $content_talent ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var swiperText = new Swiper('.slide-text-banner', {
            slidesPerView: 1,
            spaceBetween: 0,
            grabCursor: true,
            speed: 1000,
            loop: true,
            pagination: {
                el: '.slider-pagination',
                clickable: true,
            },
        });
        var swiperImage = new Swiper('.slide-image-banner', {
            slidesPerView: 1.3,
            spaceBetween: 30,
            grabCursor: true,
            speed: 1000,
            loop: true,
        });
        swiperText.controller.control = swiperImage;
        swiperImage.controller.control = swiperText;

        var swiper = new Swiper('.slide-pr', {
            slidesPerView: 3,
            spaceBetween: 20,
            grabCursor: true,
            speed: 500,
            loop: true,
            navigation: {
                nextEl: '.slider-button-next',
                prevEl: '.slider-button-prev',
            },
        });

        var swiperTextBanner = new Swiper('.slide-text-banner-homepage', {
            slidesPerView: 1,
            spaceBetween: 0,
            grabCursor: true,
            speed: 1000,
            loop: true,
            pagination: {
                el: '.slider-pagination',
                clickable: true,
            },
        });
        var swiperImageBanner = new Swiper('.slider-banner-homepage', {
            slidesPerView: 1,
            spaceBetween: 0,
            grabCursor: true,
            speed: 1000,
            loop: true,
        });
        swiperTextBanner.controller.control = swiperImageBanner;
        swiperImageBanner.controller.control = swiperTextBanner;
    </script>

<?php get_footer(); ?>