<?php get_header();
/* Template Name: Giới thiệu */
?>
<?php
// thư ngỏ
$group_letter = get_field('letter');
if ($group_letter){
    $title_letter = $group_letter['title'];
    $content_letter = $group_letter['content'];
    $image_letter = $group_letter['img'];
    $name_letter = $group_letter['name'];
    $position_letter = $group_letter['position'];
}
// hình ảnh
$gallery = get_field('gallery');
// về thành công hwashin
$group_about_us = get_field('group_about_us');
if ($group_about_us) {
    $title_about_us = $group_about_us['title'];
    $content_about_us_1 = $group_about_us['content_1'];
    $content_about_us_2 = $group_about_us['content_2'];
    $image_banner = $group_about_us['img_banner'];
    $logo_about_us = $group_about_us['logo'];
    $slogan_about_us = $group_about_us['slogan'];
}
// tầm nhìn và sứ mệnh
$group_mission = get_field('group_mission');
if ($group_mission) {
    $title_mission = $group_mission['title'];
    $repeater_mission = $group_mission['re_mission'];
}
?>

<div class="container">
    <div class="directional">
        <a href="<?= home_url(); ?>">
            <?php _e('Trang chủ','hwashin_option') ?> </a>
        <span>/</span>
        <span>
            <?php _e('Về chúng tôi','hwashin_option') ?> </span>
        </span>
    </div>
</div>

<section class="section-about-1">
    <div class="container">
        <div class="content row">
            <div class="col-lg-7">
                <div class="col-left">
                    <div class="title">
                        <h2>
                            <?= $title_letter; ?>
                        </h2>
                    </div>
                    <div class="desc">
                        <p>
                            <?= $content_letter; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="col-right">
                    <div class="image">
                        <figure>
                            <img src="<?= getimage($image_letter) ?>" alt="">
                        </figure>
                    </div>
                    <div class="text">
                        <div class="name">
                            <h3>
                                <?= $name_letter; ?>
                            </h3>
                        </div>
                        <span>
                            <?= $position_letter; ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-about-2">
    <div class="slide-about swiper">
        <div class="swiper-wrapper">
            <?php foreach ($gallery as $item) : ?>
            <div class="child swiper-slide">
                <figure>
                    <img src="<?= getimage($item) ?>" alt="">
                </figure>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section-about-3">
    <div class="container">
        <div class="title">
            <h2>
                <?= $title_about_us; ?>
            </h2>
            <div class="desc">
                <p>
                    <?= $content_about_us_1; ?>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section-about-4">
    <div class="banner">
        <figure>
            <img src="<?= getimage($image_banner) ?>" alt="">
        </figure>
    </div>
    <div class="text">
        <div class="logo">
            <figure>
                <img src="<?= getimage($logo_about_us) ?>" alt="">
            </figure>
        </div>
        <div class="name">
            <h3>
                <?= $slogan_about_us; ?>
            </h3>
        </div>
        <div class="desc">
            <p>
                <?= $content_about_us_2; ?>
            </p>
        </div>
    </div>
</section>

<section class="section-about-5">
    <div class="container">
        <div class="title">
            <h2>
                <?= $title_mission; ?>
            </h2>
        </div>
        <div class="content">
            <?php foreach ($repeater_mission as $item) : ?>
            <div class="child">
                <div class="image">
                    <figure>
                        <img src="<?= getimage($item['image']) ?>" alt="">
                    </figure>
                </div>
                <div class="text">
                    <div class="icon">
                        <figure>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <path d="M6.13707 28.525C4.77456 28.525 3.61207 28.0875 2.76207 27.2375C1.54957 26.025 1.17457 24.175 1.71207 22.025L4.81207 9.61246C5.34957 7.46246 7.44957 5.37496 9.58707 4.83746L21.9996 1.73746C24.1496 1.19996 25.9996 1.57496 27.2121 2.78746C28.4246 3.99996 28.7996 5.84996 28.2621 7.99996L25.1621 20.4125C24.6246 22.5625 22.5246 24.65 20.3871 25.1875L7.97457 28.2875C7.33707 28.4375 6.72457 28.525 6.13707 28.525ZM22.4746 3.53746L10.0621 6.64996C8.59957 7.01246 7.01207 8.59996 6.63707 10.0625L3.53707 22.475C3.16207 23.9625 3.36207 25.175 4.08707 25.9125C4.81207 26.6375 6.03707 26.8375 7.52457 26.4625L19.9371 23.3625C21.3996 23 22.9871 21.4 23.3496 19.95L26.4496 7.53746C26.8246 6.04996 26.6246 4.83746 25.8996 4.09996C25.1746 3.36246 23.9621 3.17496 22.4746 3.53746Z" fill="white"/>
                                <path d="M15 20.3125C12.075 20.3125 9.6875 17.925 9.6875 15C9.6875 12.075 12.075 9.6875 15 9.6875C17.925 9.6875 20.3125 12.075 20.3125 15C20.3125 17.925 17.925 20.3125 15 20.3125ZM15 11.5625C13.1 11.5625 11.5625 13.1 11.5625 15C11.5625 16.9 13.1 18.4375 15 18.4375C16.9 18.4375 18.4375 16.9 18.4375 15C18.4375 13.1 16.9 11.5625 15 11.5625Z" fill="white"/>
                            </svg>
                        </figure>
                    </div>
                    <div class="name">
                        <h3>
                            <?= $item['title']; ?>
                        </h3>
                    </div>
                    <div class="desc">
                        <p>
                            <?= $item['content']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    var swiperImage = new Swiper('.slide-about', {
        slidesPerView: 4,
        spaceBetween: 0,
        grabCursor: true,
        speed: 6000,
        loop: true,
        autoplay: {
            delay: 0,
            disableOnInteraction: false
        }
    });

</script>

<?php get_footer(); ?>