<?php get_header();
/* Template Name: Tin tức */
?>
<?php
//banner
$img_banner = get_field('img_banner');
$title_banner = get_field('title_banner');
//
$title_1 = get_field('title_1');
$title_2 = get_field('title_2');
//
$group_contact_form = get_field('group_contact_form');
if ($group_contact_form) {
    $title_form = $group_contact_form['title'];
    $content_form = $group_contact_form['content'];
    $shortcode_form = $group_contact_form['code'];
}
?>
    <section class="banner-product">
        <figure>
            <img src="<?= getimage($img_banner) ?>" alt="">
        </figure>
        <div class="text">
            <div class="directional-v2">
                <a href="<?= home_url() ?>">
                    <?php _e('Trang chủ','hwashin_option') ?>
                </a>
                <span>/</span>
                <span>
                <?= $title_banner ?>
            </span>
            </div>
            <div class="title">
                <h2>
                    <?= $title_banner ?>
                </h2>
            </div>
        </div>
    </section>
    <section class="section-news-1">
        <div class="container">
            <div class="title">
                <h2>
                    <?= $title_1 ?>
                </h2>
            </div>
            <div class="content">
                <div class="slider-news swiper">
                    <div class="swiper-wrapper">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 5,
                            'post_status' => 'publish',
                            'order' => 'DESC',
                            'orderby' => 'date',
                        );
                        $the_query_hot_news = new WP_Query($args);
                        ?>
                        <?php if ($the_query_hot_news->have_posts()) : ?>
                            <?php while ($the_query_hot_news->have_posts()) : $the_query_hot_news->the_post() ?>
                                <?php
                                $id_hot_news = get_the_ID();
                                $title_hot_news = get_the_title();
                                $date_hot_news = get_the_date('d/m/Y');
                                $link_hot_news = get_the_permalink();
                                $thumbnail_hot_news = get_the_post_thumbnail_url($id_hot_news, 'full');
                                ?>
                                <div class="child swiper-slide">
                                    <div class="image">
                                        <figure>
                                            <img src="<?= (!empty($thumbnail_hot_news)) ? $thumbnail_hot_news : getimage(img_default()) ?>"
                                                 alt="">
                                        </figure>
                                    </div>
                                    <div class="text">
                                        <div class="date">
                                            <figure>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22"
                                                     viewBox="0 0 20 22" fill="none">
                                                    <path d="M6 4.75C5.59 4.75 5.25 4.41 5.25 4V1C5.25 0.59 5.59 0.25 6 0.25C6.41 0.25 6.75 0.59 6.75 1V4C6.75 4.41 6.41 4.75 6 4.75Z"
                                                          fill="#ED1C24"/>
                                                    <path d="M14 4.75C13.59 4.75 13.25 4.41 13.25 4V1C13.25 0.59 13.59 0.25 14 0.25C14.41 0.25 14.75 0.59 14.75 1V4C14.75 4.41 14.41 4.75 14 4.75Z"
                                                          fill="#ED1C24"/>
                                                    <path d="M6.5 13.5C6.37 13.5 6.24 13.47 6.12 13.42C5.99 13.37 5.89 13.3 5.79 13.21C5.61 13.02 5.5 12.77 5.5 12.5C5.5 12.37 5.53 12.24 5.58 12.12C5.63 12 5.7 11.89 5.79 11.79C5.89 11.7 5.99 11.63 6.12 11.58C6.48 11.43 6.93 11.51 7.21 11.79C7.39 11.98 7.5 12.24 7.5 12.5C7.5 12.56 7.49 12.63 7.48 12.7C7.47 12.76 7.45 12.82 7.42 12.88C7.4 12.94 7.37 13 7.33 13.06C7.3 13.11 7.25 13.16 7.21 13.21C7.02 13.39 6.76 13.5 6.5 13.5Z"
                                                          fill="#ED1C24"/>
                                                    <path d="M10 13.5C9.87 13.5 9.74 13.47 9.62 13.42C9.49 13.37 9.39 13.3 9.29 13.21C9.11 13.02 9 12.77 9 12.5C9 12.37 9.03 12.24 9.08 12.12C9.13 12 9.2 11.89 9.29 11.79C9.39 11.7 9.49 11.63 9.62 11.58C9.98 11.42 10.43 11.51 10.71 11.79C10.89 11.98 11 12.24 11 12.5C11 12.56 10.99 12.63 10.98 12.7C10.97 12.76 10.95 12.82 10.92 12.88C10.9 12.94 10.87 13 10.83 13.06C10.8 13.11 10.75 13.16 10.71 13.21C10.52 13.39 10.26 13.5 10 13.5Z"
                                                          fill="#ED1C24"/>
                                                    <path d="M13.5 13.5C13.37 13.5 13.24 13.47 13.12 13.42C12.99 13.37 12.89 13.3 12.79 13.21C12.75 13.16 12.71 13.11 12.67 13.06C12.63 13 12.6 12.94 12.58 12.88C12.55 12.82 12.53 12.76 12.52 12.7C12.51 12.63 12.5 12.56 12.5 12.5C12.5 12.24 12.61 11.98 12.79 11.79C12.89 11.7 12.99 11.63 13.12 11.58C13.49 11.42 13.93 11.51 14.21 11.79C14.39 11.98 14.5 12.24 14.5 12.5C14.5 12.56 14.49 12.63 14.48 12.7C14.47 12.76 14.45 12.82 14.42 12.88C14.4 12.94 14.37 13 14.33 13.06C14.3 13.11 14.25 13.16 14.21 13.21C14.02 13.39 13.76 13.5 13.5 13.5Z"
                                                          fill="#ED1C24"/>
                                                    <path d="M6.5 17C6.37 17 6.24 16.97 6.12 16.92C6 16.87 5.89 16.8 5.79 16.71C5.61 16.52 5.5 16.26 5.5 16C5.5 15.87 5.53 15.74 5.58 15.62C5.63 15.49 5.7 15.38 5.79 15.29C6.16 14.92 6.84 14.92 7.21 15.29C7.39 15.48 7.5 15.74 7.5 16C7.5 16.26 7.39 16.52 7.21 16.71C7.02 16.89 6.76 17 6.5 17Z"
                                                          fill="#ED1C24"/>
                                                    <path d="M10 17C9.74 17 9.48 16.89 9.29 16.71C9.11 16.52 9 16.26 9 16C9 15.87 9.03 15.74 9.08 15.62C9.13 15.49 9.2 15.38 9.29 15.29C9.66 14.92 10.34 14.92 10.71 15.29C10.8 15.38 10.87 15.49 10.92 15.62C10.97 15.74 11 15.87 11 16C11 16.26 10.89 16.52 10.71 16.71C10.52 16.89 10.26 17 10 17Z"
                                                          fill="#ED1C24"/>
                                                    <path d="M13.5 17C13.24 17 12.98 16.89 12.79 16.71C12.7 16.62 12.63 16.51 12.58 16.38C12.53 16.26 12.5 16.13 12.5 16C12.5 15.87 12.53 15.74 12.58 15.62C12.63 15.49 12.7 15.38 12.79 15.29C13.02 15.06 13.37 14.95 13.69 15.02C13.76 15.03 13.82 15.05 13.88 15.08C13.94 15.1 14 15.13 14.06 15.17C14.11 15.2 14.16 15.25 14.21 15.29C14.39 15.48 14.5 15.74 14.5 16C14.5 16.26 14.39 16.52 14.21 16.71C14.02 16.89 13.76 17 13.5 17Z"
                                                          fill="#ED1C24"/>
                                                    <path d="M18.5 8.83997H1.5C1.09 8.83997 0.75 8.49997 0.75 8.08997C0.75 7.67997 1.09 7.33997 1.5 7.33997H18.5C18.91 7.33997 19.25 7.67997 19.25 8.08997C19.25 8.49997 18.91 8.83997 18.5 8.83997Z"
                                                          fill="#ED1C24"/>
                                                    <path d="M14 21.75H6C2.35 21.75 0.25 19.65 0.25 16V7.5C0.25 3.85 2.35 1.75 6 1.75H14C17.65 1.75 19.75 3.85 19.75 7.5V16C19.75 19.65 17.65 21.75 14 21.75ZM6 3.25C3.14 3.25 1.75 4.64 1.75 7.5V16C1.75 18.86 3.14 20.25 6 20.25H14C16.86 20.25 18.25 18.86 18.25 16V7.5C18.25 4.64 16.86 3.25 14 3.25H6Z"
                                                          fill="#ED1C24"/>
                                                </svg>
                                            </figure>
                                            <span>
                                    <?php echo $date_hot_news ?>
                                </span>
                                        </div>
                                        <div class="name">
                                            <a href="<?php echo $link_hot_news ?>">
                                                <?php echo $title_hot_news ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-news-2">
        <div class="container">
            <div class="content row">
                <div class="col-lg-4">
                    <div class="col-left">
                        <div class="category">
                            <div class="name">
                                <h4>
                                    <?php _e('Danh mục tin tức','hwashin_option') ?>
                                </h4>
                            </div>
                            <div class="content">
                                <nav>
                                    <ul>
                                        <?php
                                        $categories = get_terms(array(
                                            'taxonomy' => 'category',  // Loại taxonomy là 'category'
                                            'hide_empty' => false,     // Hiển thị cả những danh mục không có bài viết
                                        ));

                                        $category_filter = isset($_GET['category']) ? $_GET['category'] : 'tat-ca';
                                        $text = __('Tất cả','hwashin_option');

                                        $menu_html = '<li ' . (($category_filter === 'tat-ca') ? 'class="active"' : '') . '><a href="?category=tat-ca">
                                                    ' .  $text . '
                                                    </a></li>';
                                        foreach ($categories as $category) {
                                            $category_slug = $category->slug;
                                            $category_name = $category->name;
                                            $active_class = ($category_filter === $category_slug) ? 'class="active"' : '';

                                            $menu_html .= '<li ' . $active_class . '><a href="?category=' . $category_slug . '">' . $category_name . '</a></li>';
                                        }

                                        echo $menu_html;
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="feedback ">
                            <div class="name">
                                <h4>
                                    <?php echo $title_form ?>
                                </h4>
                                <div class="desc">
                                    <p>
                                        <?php echo $content_form ?>
                                    </p>
                                </div>
                            </div>
                            <?= do_shortcode($shortcode_form) ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="col-right">
                        <div class="title">
                            <h2>
                                <?php echo $title_2 ?>
                            </h2>
                        </div>
                        <div class="content row">
                            <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args_2 = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 6,
                                'paged' => $paged,
                                'order' => 'DESC',
                                'orderby' => 'date',
                            );

                            $category_filter = isset($_GET['category']) ? $_GET['category'] : 'tat-ca';
                            if ($category_filter !== 'tat-ca') {
                                $args_2['tax_query'] = array(
                                    array(
                                        'taxonomy' => 'category',
                                        'field' => 'slug',
                                        'terms' => $category_filter,
                                    ),
                                );
                            }

                            $the_query = new WP_Query($args_2);
                            ?>
                            <?php
                            if ($the_query->have_posts()) :
                                while ($the_query->have_posts()) : $the_query->the_post() ?>
                                    <?php
                                    $id = get_the_ID();
                                    $title = get_the_title();
                                    $date = get_the_date('d/m/Y');
                                    $link = get_the_permalink();
                                    $thumbnail = get_the_post_thumbnail_url($id, 'full');
                                    ?>
                                    <div class="col-lg-6">
                                        <div class="child">
                                            <div class="image">
                                                <figure>
                                                    <img src="<?= (!empty($thumbnail)) ? $thumbnail : getimage(img_default()) ?>"
                                                         alt="">
                                                </figure>
                                            </div>
                                            <div class="text">
                                                <div class="date">
                                                    <figure>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22"
                                                             viewBox="0 0 20 22" fill="none">
                                                            <path d="M6 4.75C5.59 4.75 5.25 4.41 5.25 4V1C5.25 0.59 5.59 0.25 6 0.25C6.41 0.25 6.75 0.59 6.75 1V4C6.75 4.41 6.41 4.75 6 4.75Z"
                                                                  fill="#ED1C24"/>
                                                            <path d="M14 4.75C13.59 4.75 13.25 4.41 13.25 4V1C13.25 0.59 13.59 0.25 14 0.25C14.41 0.25 14.75 0.59 14.75 1V4C14.75 4.41 14.41 4.75 14 4.75Z"
                                                                  fill="#ED1C24"/>
                                                            <path d="M6.5 13.5C6.37 13.5 6.24 13.47 6.12 13.42C5.99 13.37 5.89 13.3 5.79 13.21C5.61 13.02 5.5 12.77 5.5 12.5C5.5 12.37 5.53 12.24 5.58 12.12C5.63 12 5.7 11.89 5.79 11.79C5.89 11.7 5.99 11.63 6.12 11.58C6.48 11.43 6.93 11.51 7.21 11.79C7.39 11.98 7.5 12.24 7.5 12.5C7.5 12.56 7.49 12.63 7.48 12.7C7.47 12.76 7.45 12.82 7.42 12.88C7.4 12.94 7.37 13 7.33 13.06C7.3 13.11 7.25 13.16 7.21 13.21C7.02 13.39 6.76 13.5 6.5 13.5Z"
                                                                  fill="#ED1C24"/>
                                                            <path d="M10 13.5C9.87 13.5 9.74 13.47 9.62 13.42C9.49 13.37 9.39 13.3 9.29 13.21C9.11 13.02 9 12.77 9 12.5C9 12.37 9.03 12.24 9.08 12.12C9.13 12 9.2 11.89 9.29 11.79C9.39 11.7 9.49 11.63 9.62 11.58C9.98 11.42 10.43 11.51 10.71 11.79C10.89 11.98 11 12.24 11 12.5C11 12.56 10.99 12.63 10.98 12.7C10.97 12.76 10.95 12.82 10.92 12.88C10.9 12.94 10.87 13 10.83 13.06C10.8 13.11 10.75 13.16 10.71 13.21C10.52 13.39 10.26 13.5 10 13.5Z"
                                                                  fill="#ED1C24"/>
                                                            <path d="M13.5 13.5C13.37 13.5 13.24 13.47 13.12 13.42C12.99 13.37 12.89 13.3 12.79 13.21C12.75 13.16 12.71 13.11 12.67 13.06C12.63 13 12.6 12.94 12.58 12.88C12.55 12.82 12.53 12.76 12.52 12.7C12.51 12.63 12.5 12.56 12.5 12.5C12.5 12.24 12.61 11.98 12.79 11.79C12.89 11.7 12.99 11.63 13.12 11.58C13.49 11.42 13.93 11.51 14.21 11.79C14.39 11.98 14.5 12.24 14.5 12.5C14.5 12.56 14.49 12.63 14.48 12.7C14.47 12.76 14.45 12.82 14.42 12.88C14.4 12.94 14.37 13 14.33 13.06C14.3 13.11 14.25 13.16 14.21 13.21C14.02 13.39 13.76 13.5 13.5 13.5Z"
                                                                  fill="#ED1C24"/>
                                                            <path d="M6.5 17C6.37 17 6.24 16.97 6.12 16.92C6 16.87 5.89 16.8 5.79 16.71C5.61 16.52 5.5 16.26 5.5 16C5.5 15.87 5.53 15.74 5.58 15.62C5.63 15.49 5.7 15.38 5.79 15.29C6.16 14.92 6.84 14.92 7.21 15.29C7.39 15.48 7.5 15.74 7.5 16C7.5 16.26 7.39 16.52 7.21 16.71C7.02 16.89 6.76 17 6.5 17Z"
                                                                  fill="#ED1C24"/>
                                                            <path d="M10 17C9.74 17 9.48 16.89 9.29 16.71C9.11 16.52 9 16.26 9 16C9 15.87 9.03 15.74 9.08 15.62C9.13 15.49 9.2 15.38 9.29 15.29C9.66 14.92 10.34 14.92 10.71 15.29C10.8 15.38 10.87 15.49 10.92 15.62C10.97 15.74 11 15.87 11 16C11 16.26 10.89 16.52 10.71 16.71C10.52 16.89 10.26 17 10 17Z"
                                                                  fill="#ED1C24"/>
                                                            <path d="M13.5 17C13.24 17 12.98 16.89 12.79 16.71C12.7 16.62 12.63 16.51 12.58 16.38C12.53 16.26 12.5 16.13 12.5 16C12.5 15.87 12.53 15.74 12.58 15.62C12.63 15.49 12.7 15.38 12.79 15.29C13.02 15.06 13.37 14.95 13.69 15.02C13.76 15.03 13.82 15.05 13.88 15.08C13.94 15.1 14 15.13 14.06 15.17C14.11 15.2 14.16 15.25 14.21 15.29C14.39 15.48 14.5 15.74 14.5 16C14.5 16.26 14.39 16.52 14.21 16.71C14.02 16.89 13.76 17 13.5 17Z"
                                                                  fill="#ED1C24"/>
                                                            <path d="M18.5 8.83997H1.5C1.09 8.83997 0.75 8.49997 0.75 8.08997C0.75 7.67997 1.09 7.33997 1.5 7.33997H18.5C18.91 7.33997 19.25 7.67997 19.25 8.08997C19.25 8.49997 18.91 8.83997 18.5 8.83997Z"
                                                                  fill="#ED1C24"/>
                                                            <path d="M14 21.75H6C2.35 21.75 0.25 19.65 0.25 16V7.5C0.25 3.85 2.35 1.75 6 1.75H14C17.65 1.75 19.75 3.85 19.75 7.5V16C19.75 19.65 17.65 21.75 14 21.75ZM6 3.25C3.14 3.25 1.75 4.64 1.75 7.5V16C1.75 18.86 3.14 20.25 6 20.25H14C16.86 20.25 18.25 18.86 18.25 16V7.5C18.25 4.64 16.86 3.25 14 3.25H6Z"
                                                                  fill="#ED1C24"/>
                                                        </svg>
                                                    </figure>
                                                    <span>
                                            <?php echo $date ?>
                                        </span>
                                                </div>
                                                <div class="name">
                                                    <a href="<?php echo $link ?>">
                                                        <?php echo $title ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <?php if ($the_query->max_num_pages > 1) : ?>
                            <nav class="number-page">
                                <ul>
                                    <li>
                                        <a href="<?php echo esc_url(add_query_arg('paged', max(1, $paged - 1))); ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37"
                                                 viewBox="0 0 36 37" fill="none">
                                                <path d="M18 34.625C9.105 34.625 1.875 27.395 1.875 18.5C1.875 9.605 9.105 2.375 18 2.375C26.895 2.375 34.125 9.605 34.125 18.5C34.125 27.395 26.895 34.625 18 34.625ZM18 4.625C10.35 4.625 4.125 10.85 4.125 18.5C4.125 26.15 10.35 32.375 18 32.375C25.65 32.375 31.875 26.15 31.875 18.5C31.875 10.85 25.65 4.625 18 4.625Z"
                                                      fill="#1B1717"/>
                                                <path d="M19.89 24.9202C19.605 24.9202 19.32 24.8152 19.095 24.5902L13.8 19.2952C13.365 18.8602 13.365 18.1402 13.8 17.7052L19.095 12.4102C19.53 11.9752 20.25 11.9752 20.685 12.4102C21.12 12.8452 21.12 13.5652 20.685 14.0002L16.185 18.5002L20.685 23.0002C21.12 23.4352 21.12 24.1552 20.685 24.5902C20.475 24.8152 20.19 24.9202 19.89 24.9202Z"
                                                      fill="#1B1717"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <?php
                                    for ($i = 1; $i <= $the_query->max_num_pages; $i++) {
                                        $is_current = $i == $paged ? ' class="active"' : '';
                                        echo '<li' . $is_current . '><a href="' . esc_url(add_query_arg('paged', $i)) . '">' . $i . '</a></li>';
                                    }
                                    ?>
                                    <li>
                                        <a href="<?php echo esc_url(add_query_arg('paged', min($the_query->max_num_pages, $paged + 1))); ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37"
                                                 viewBox="0 0 36 37" fill="none">
                                                <path d="M18 34.625C9.105 34.625 1.875 27.395 1.875 18.5C1.875 9.605 9.105 2.375 18 2.375C26.895 2.375 34.125 9.605 34.125 18.5C34.125 27.395 26.895 34.625 18 34.625ZM18 4.625C10.35 4.625 4.125 10.85 4.125 18.5C4.125 26.15 10.35 32.375 18 32.375C25.65 32.375 31.875 26.15 31.875 18.5C31.875 10.85 25.65 4.625 18 4.625Z"
                                                      fill="#1B1717"/>
                                                <path d="M16.11 24.9202C15.825 24.9202 15.54 24.8152 15.315 24.5902C14.88 24.1552 14.88 23.4352 15.315 23.0002L19.815 18.5002L15.315 14.0002C14.88 13.5652 14.88 12.8452 15.315 12.4102C15.75 11.9752 16.47 11.9752 16.905 12.4102L22.2 17.7052C22.635 18.1402 22.635 18.8602 22.2 19.2952L16.905 24.5902C16.68 24.8152 16.395 24.9202 16.11 24.9202Z"
                                                      fill="#1B1717"/>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var swiperImageBanner = new Swiper('.slider-news', {
            slidesPerView: 3,
            spaceBetween: 20,
            grabCursor: true,
            speed: 1000,
            loop: true,
            pagination: {
                el: '.slider-pagination',
                clickable: true,
            },
        });
        $(document).ready(function () {
            $('nav.number-page ul li.active a').addClass('text-danger');
        });
    </script>

<?php get_footer(); ?>