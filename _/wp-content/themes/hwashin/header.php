<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= get_field('favicon', 'option') ?>" type="image/x-icon"/>
    <?php wp_head() ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/lib/bootstrap/css/bootstrap.min.css">
    <link rel='stylesheet' href='<?php echo get_template_directory_uri() ?>/dist/lib/fancybox/jquery.fancybox.css' type='text/css' media='all' />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/lib/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/css/aos.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/scss/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/css/lg-thumbnail.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/css/lg-fullscreen.min.css">
    <script src="<?php echo get_template_directory_uri() ?>/dist/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/dist/lib/jquery/jquery-ui.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/dist/lib/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src='<?php echo get_template_directory_uri() ?>/dist/lib/fancybox/jquery.fancybox.js'></script>
    <script src="<?php echo get_template_directory_uri() ?>/dist/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/dist/js/aos.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/dist/js/lightgallery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/dist/js/lg-thumbnail.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/dist/js/lg-fullscreen.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<header>
    <?php
        $group_mail = get_field('group_mail', 'option');
        if($group_mail){
            $icon_mail = $group_mail['icon'];
            $content_mail = $group_mail['content'];
        }
        $group_profile = get_field('group_profile', 'option');
        if($group_profile){
            $icon_profile = $group_profile['icon'];
            $file_profile = $group_profile['file'];
            $title_profile = $group_profile['title'];
        }
    $file_url = wp_get_attachment_url($file_profile);

    // menu
    $elMenu = wp_get_nav_menu_items('Menu header');
    $menu1 = array();
    $menu = array();
    foreach ($elMenu as $value) {

        $menu1[] = (array)$value;
    }
    foreach ($menu1 as $element) {
        if (!array_search($element['ID'], array_column($menu1, 'menu_item_parent'))) {
            $element['dem'] = 0;
        } else {
            $element['dem'] = 1;
        }
        $menu[] = (array)$element;
    }
    $url_check = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $ke = strpos($url_check, 'page');
    if (!empty($ke)) {
        $url_check = substr($url_check, 0, $ke);
    }
    ?>
    <div class="header-wrapper">
        <div class="header-top">
            <div class="container">
                <div class="content">
                    <div class="logo">
                        <a href="<?= home_url(); ?>">
                            <figure>
                                <?php
                                $logo = get_field('logo_header', 'option');
                                ?>
                                <img src="<?php echo getimage($logo) ?>" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="text">
                        <div class="left">
                            <a href="<?php echo esc_url($file_url); ?>" class="download" target="_blank">
                                <figure>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M20.5 10.19H17.61C15.24 10.19 13.31 8.26 13.31 5.89V3C13.31 2.45 12.86 2 12.31 2H8.07C4.99 2 2.5 4 2.5 7.57V16.43C2.5 20 4.99 22 8.07 22H15.93C19.01 22 21.5 20 21.5 16.43V11.19C21.5 10.64 21.05 10.19 20.5 10.19ZM12.28 15.78L10.28 17.78C10.21 17.85 10.12 17.91 10.03 17.94C9.94 17.98 9.85 18 9.75 18C9.65 18 9.56 17.98 9.47 17.94C9.39 17.91 9.31 17.85 9.25 17.79C9.24 17.78 9.23 17.78 9.23 17.77L7.23 15.77C6.94 15.48 6.94 15 7.23 14.71C7.52 14.42 8 14.42 8.29 14.71L9 15.44V11.25C9 10.84 9.34 10.5 9.75 10.5C10.16 10.5 10.5 10.84 10.5 11.25V15.44L11.22 14.72C11.51 14.43 11.99 14.43 12.28 14.72C12.57 15.01 12.57 15.49 12.28 15.78Z" fill="#034EA1"/>
                                        <path d="M17.4297 8.81048C18.3797 8.82048 19.6997 8.82048 20.8297 8.82048C21.3997 8.82048 21.6997 8.15048 21.2997 7.75048C19.8597 6.30048 17.2797 3.69048 15.7997 2.21048C15.3897 1.80048 14.6797 2.08048 14.6797 2.65048V6.14048C14.6797 7.60048 15.9197 8.81048 17.4297 8.81048Z" fill="#034EA1"/>
                                    </svg>
                                </figure>
                                <span>
                                    <?= $title_profile ?>
                                </span>
                            </a>
                            <div class="mail">
                                <figure>
                                    <img src="<?php echo getimage($icon_mail) ?>" alt="">
                                </figure>
                                <span>
                                    <?= $content_mail ?>
                                </span>
                            </div>
                        </div>
                        <div class="right">
                            <div class="language">
                                <div class="language-toggle">
                                    <figure>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#034EA1" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7.99961 3H8.99961C7.04961 8.84 7.04961 15.16 8.99961 21H7.99961" stroke="#034EA1" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15 3C16.95 8.84 16.95 15.16 15 21" stroke="#034EA1" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3 16V15C8.84 16.95 15.16 16.95 21 15V16" stroke="#034EA1" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3 8.99961C8.84 7.04961 15.16 7.04961 21 8.99961" stroke="#034EA1" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </figure>
                                    <span>
                                        <?= (ICL_LANGUAGE_CODE == "en") ? 'English' : 'Tiếng Việt' ?>
                                    </span>
                                    <i class="fas fa-caret-down"></i>
                                </div>
                                <div class="language-other">
                                        <a href="<?=(ICL_LANGUAGE_CODE == "vi") ?  site_url().'/en'.$_SERVER['REQUEST_URI']  :  site_url().str_replace('/en/','/',$_SERVER['REQUEST_URI']) ?>">
                                    <span>
                                         <?= (ICL_LANGUAGE_CODE == "en") ? 'Vietnamese' : 'Tiếng Anh' ?>
                                    </span>
                                    </a>
                                </div>
                            </div>
                            <div class="search">
                                <div class="search-toggle">
                                    <figure>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.2533 16.7467 2 11.5 2C6.2533 2 2 6.2533 2 11.5C2 16.7467 6.2533 21 11.5 21Z" stroke="#034EA1" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M22 22L20 20" stroke="#034EA1" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </figure>
                                    <span><?php _e('Tìm kiếm','hwashin_option') ?></span>
                                </div>
                                <div class="input-search">
                                    <form id="searchForm" action="<?php echo home_url('/'); ?>" role="search" method="get">
                                        <input type="text" placeholder="<?php _e('Tìm kiếm','hwashin_option') ?>" name="s">
                                        <input type="hidden" name="key">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bot">
            <div class="container">
                <nav class="menu-all">
                    <ul class="menu">
                        <?php foreach ($menu as $value): ?>
                        <?php if ($value['menu_item_parent'] == 0): ?>
                        <li class="child <?php echo ($value['url'] == $url_check) ? 'active' : '' ?>">
                            <a href="<?php echo $value['url'] ?>"><?php echo $value['title'] ?></a>
                            <?php if ($value['dem'] == 1): ?>
                                <i class="fas fa-caret-down" >
                                </i>
                            <div class="menu-dropdown">
                                <ul>
                                    <?php foreach ($menu as $value1): ?>
                                    <?php if ($value1['menu_item_parent'] == $value['ID']): ?>
                                    <li class="<?php echo ($value1['url'] == $url_check) ? 'active_child' : '' ?>">
                                        <a href="<?php echo $value1['url'] ?>"><?php echo $value1['title'] ?></a>
                                    </li>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                        </li>

                        <?php endif; ?>
                        <?php endforeach; ?>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<script>
    $(document).ready(function () {
        $('.menu li.child').each(function () {
            if ($(this).find('li').hasClass('active_child')) {
            $(this).addClass('active');
            }
        });
    });
</script>
<style>
    .menu li.active {
        text-decoration: underline;
        color: #fff;
    }
</style>
<main>