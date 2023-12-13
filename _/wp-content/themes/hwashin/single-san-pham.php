<?php get_header(); ?>
<?php
$gallery = get_field('gallery', get_the_ID());

?>
    <div class="container">
        <div class="directional">
            <a href="<?php echo get_home_url(); ?>">
                <?php _e('Trang chủ','hwashin_option') ?>
            </a>
            <span>/</span>
            <a href="<?php echo get_home_url(); ?>/product">
                <?php _e('Sản phẩm','hwashin_option') ?>
            </a>
            <span>/</span>
            <span><?php the_title(); ?></span>
        </div>
    </div>

    <section class="section-detail-pr-1">
        <div class="container">
            <div class="content">
                <div class="col-lg-6">
                    <div class="col-left">
                        <div class="slide-image-main swiper">
                            <div class="swiper-wrapper">
                                <?php foreach ($gallery as $item) : ?>
                                    <div class="child swiper-slide">
                                        <figure>
                                            <img src="<?php echo getimage($item) ?>" alt="">
                                        </figure>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="slide-image-thumbs swiper">
                            <div class="swiper-wrapper">
                                <?php foreach ($gallery as $item) : ?>
                                    <div class="child swiper-slide">
                                        <figure>
                                            <img src="<?php echo getimage($item) ?>" alt="">
                                        </figure>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="col-right">
                        <div class="title">
                            <h2>
                                <?php the_title(); ?>
                            </h2>
                        </div>
                        <div class="desc">
                            <p>
                                <?php echo the_content(); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-detail-pr-2">
        <div class="container">
            <div class="title">
                <h2>
                    <?php _e('Sản phẩm khác','hwashin_option') ?>
                </h2>
            </div>
            <div class="content row">
                <?php
                $args = array(
                    'post_type' => 'san-pham',
                    'posts_per_page' => 4,
                    'post__not_in' => array(get_the_ID())
                );
                $query = new WP_Query($args);
                ?>
                <?php if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
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
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                                    <div class="desc">
                                        <p><?php echo get_the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <script>
        var swiperTextBanner = new Swiper('.slide-image-main', {
            slidesPerView: 1,
            spaceBetween: 0,
            speed: 1000,
            loop: true,
            loopedSlides: 4,
        });
        var swiperImageBanner = new Swiper('.slide-image-thumbs', {
            slidesPerView: 4,
            spaceBetween: 10,
            speed: 1000,
            loop: true,
            loopedSlides: 4,
            slideToClickedSlide: true,
        });
        swiperTextBanner.controller.control = swiperImageBanner;
        swiperImageBanner.controller.control = swiperTextBanner;
    </script>

<?php get_footer(); ?>