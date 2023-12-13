<div class="overlay"></div>
</main>
<footer>
    <?php
    $logo_footer = get_field('logo_footer', 'option');
    $contact_footer = get_field('contact_footer', 'option');
    $re_social_footer = get_field('re_social_footer', 'option');
    $title_link_footer = get_field('title_link_footer', 'option');
    $copyright = get_field('copyright', 'option');
    $menu_footer = get_field('menu_footer', 'option');

    $elMenuFooter = wp_get_nav_menu_items('Menu footer');
    $menuFooter = array();

    foreach ($elMenuFooter as $value) {
        $menuFooter[] = (array)$value;
    }


    ?>
    <div class="footer-wrapper">
        <div class="container">
            <div class="content row">
                <div class="col-lg-5">
                    <div class="col-left">
                        <div class="logo-footer">
                            <a href="<?php echo get_home_url(); ?>">
                                <figure>
                                    <img src="<?= getimage($logo_footer) ?>" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="method-contact">
                            <?php foreach ($contact_footer as $item) : ?>
                                <div class="child">
                                    <div class="image">
                                        <figure>
                                            <img src="<?= getimage($item['img']) ?>" alt="">
                                        </figure>
                                    </div>
                                    <div class="text">
                                        <span><?= $item['title'] ?></span>
                                        <h4><?= $item['content'] ?></h4>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="socail">
                            <?php foreach ($re_social_footer as $item) : ?>
                                <a href="<?= $item['url'] ?>">
                                    <figure>
                                        <img src="<?= getimage($item['icon']) ?>" alt="">
                                    </figure>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="col-right">
                        <div class="list">
                            <div class="child">
                                <div class="title">
                                    <h4>
                                        <?= $title_link_footer ?>
                                    </h4>
                                </div>
                                <nav>
                                    <ul>
                                        <?php foreach ($menuFooter as $item): ?>
                                            <li><a href="<?= $item['url']; ?>"><?= $item['title']; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </nav>
                            </div>
                            <?php foreach ($menu_footer as $item) : ?>
                                <div class="child">
                                    <div class="title">
                                        <h4><?= $item['title'] ?></h4>
                                    </div>
                                    <nav>
                                        <ul>
                                            <?php foreach ($item['list'] as $value) : ?>
                                                <li><a href="<?= $value['url'] ?>"><?= $value['title'] ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </nav>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <span>
            <?= $copyright ?>
        </span>
    </div>
</footer>
<script>
    $(document).click(function (e) {
        if ($(".language-other").length) {
            $(".language-toggle").click(function (e) {
                e.preventDefault();
                e.stopPropagation();

                $(this).next(".language-other").toggleClass("active");
            });
        }
    });
    $(document).click(function (e) {
        if (!$(e.target).closest(".language-switcher").length) {
            $(".language-other").removeClass("active");
        }
    });
    $(".search-toggle").click(function (e) {
        $(".input-search").slideToggle();
    });
</script>
<script>
    var swiperText = new Swiper('.slide-manufacture-text', {
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
    var swiperImage = new Swiper('.slide-manufacture-image', {
        slidesPerView: 1,
        spaceBetween: 0,
        grabCursor: true,
        speed: 1000,
        loop: true,
    });
    swiperText.controller.control = swiperImage;
    swiperImage.controller.control = swiperText;
</script>
<script>
    $(".overlay").click(function () {
        $(".popup-recruitment").fadeOut();
        $(".overlay").fadeOut();
    })
</script>
</body>
</html>