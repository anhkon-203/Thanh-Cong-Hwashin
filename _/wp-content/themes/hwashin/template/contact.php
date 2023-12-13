<?php get_header();
/* Template Name: Liên hệ */
?>
<?php
//banner
$img_banner = get_field('img_banner');
$title_banner = get_field('title_banner');
// liên lạc
$group_contact = get_field('group_contact');
if ($group_contact) {
    $title_contact = $group_contact['title'];
    $slogan_contact = $group_contact['slogan'];
    $re_info_contact = $group_contact['re_info_contact'];
    $gallery_social = $group_contact['gallery_social'];
}

// form liên hệ
$group_contact_form = get_field('group_contact_form');
if ($group_contact_form) {
    $title_contact_form = $group_contact_form['title'];
    $content_contact_form = $group_contact_form['content'];
    $code_contact_form = $group_contact_form['code'];
}
// map
$embed_map = get_field('embed_map');


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

    <section class="section-contact-1">
        <div class="container">
            <div class="content row">
                <div class="col-lg-5">
                    <div class="col-left">
                        <div class="title">
                            <div class="name">
                            <span>
                                <?= $title_contact ?>
                            </span>
                            </div>
                            <h2>
                                <?= $slogan_contact ?>
                            </h2>
                        </div>
                        <div class="method">
                            <?php foreach ($re_info_contact as $key => $value): ?>
                                <div class="child">
                                    <div class="image">
                                        <figure>
                                            <img src="<?= getimage($value['icon']) ?>" alt="">
                                        </figure>
                                    </div>
                                    <div class="text">
                                        <span><?= $value['title'] ?></span>
                                        <h4><?= $value['content'] ?></h4>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="child">
                                <?php foreach ($gallery_social as $key => $value): ?>
                                    <figure>
                                        <img src="<?php echo getimage($value)?>" alt="">
                                    </figure>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="col-right">
                        <div class="title">
                            <h3>
                                <?= $title_contact_form ?>
                            </h3>
                            <div class="desc">
                                <p>
                                    <?= $content_contact_form ?>
                                </p>
                            </div>
                        </div>
                            <?= do_shortcode($code_contact_form) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-contact-2">
        <div class="map">
            <figure>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13767.671642593672!2d105.7739147944687!3d20.980267007689772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135accd88c1276b%3A0xc7ec85c744d8874e!2zSOG7kyBHxrDGoW0gUGxhemE!5e0!3m2!1svi!2s!4v1702369433254!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </figure>
        </div>
    </section>

<?php get_footer(); ?>