<?php get_header();
/* Template Name: Sản phẩm */
?>
<?php
$img_banner = get_field('img_banner');
$title_banner = get_field('title_banner');
// kế hoạch phát triển
$title_plan = get_field('title');
$re_plan = get_field('re_plan');
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

    <section class="section-pr-1">
        <div class="container">
            <div class="title">
                <h2>
                    <?= $title_plan ?>
                </h2>
            </div>
            <div class="content row">
                <?php
                $args = array(
                    'post_type' => 'san-pham',
                    'posts_per_page' => 8,
                    'order' => 'DESC',
                    'orderby' => 'date',
                );
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <?php
                        $img_thumbnail_product = get_the_post_thumbnail_url();
                        ?>
                        <div class="col-lg-3">
                            <div class="child">
                                <div class="image">
                                    <figure>
                                        <img src="<?= (!empty($img_thumbnail_product)) ? $img_thumbnail_product : getimage(img_default()) ?>"
                                             alt="">
                                    </figure>
                                </div>
                                <div class="text">
                                    <div class="name">
                                        <a href="<?= the_permalink() ?>"><?= the_title() ?></a>
                                    </div>
                                    <div class="desc">
                                        <p><?= the_excerpt() ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="section-pr-2">
        <div class="image">
            <div class="slide-plan-image swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($re_plan as $item) : ?>
                        <div class="child swiper-slide">
                            <figure>
                                <img src="<?= getimage($item['img']) ?>" alt="">
                            </figure>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="text">
            <div class="slide-plan-text swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($re_plan as $item) : ?>
                        <div class="child swiper-slide">
                            <div class="title">
                                <h2>
                                    <?= $item['title'] ?>
                                </h2>
                            </div>
                            <div class="name">
                                <h4>
                                    <?= $item['desc'] ?>
                                </h4>
                            </div>
                            <div class="desc">
                                <p>
                                    <?= $item['content'] ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
    </section>

    <script>
        var swiperTextBanner = new Swiper('.slide-plan-image', {
            slidesPerView: 1,
            spaceBetween: 0,
            grabCursor: true,
            speed: 1000,
            loop: true,
        });
        var swiperImageBanner = new Swiper('.slide-plan-text', {
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
        swiperTextBanner.controller.control = swiperImageBanner;
        swiperImageBanner.controller.control = swiperTextBanner;
    </script>

<?php get_footer(); ?>