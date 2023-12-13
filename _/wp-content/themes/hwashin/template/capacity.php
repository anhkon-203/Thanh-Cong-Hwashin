<?php get_header();
/* Template Name: Năng lực đóng gói */
?>
<?php
$img_banner = get_field('img_banner');
$title_banner = get_field('title_banner');
// đóng gói thành phẩm
$group_package = get_field('group_pack');
if ($group_package){
    $title_package = $group_package['title'];
    $content_package = $group_package['content'];
    $slogan_package = $group_package['slogan'];
    $img_package = $group_package['img'];
    $video_package = $group_package['video'];
}
// quy trình đóng gói
$group_procedure = get_field('group_procedure');
if ($group_procedure){
    $title_procedure = $group_procedure['title'];
    $content_procedure = $group_procedure['content'];
    $img_procedure = $group_procedure['image'];
    $btn_text_procedure = $group_procedure['btn_text'];
    $file_procedure = $group_procedure['file'];
}
// quy trình tư vấn
$title_progress = get_field('title_progress');
$img_progress = get_field('img_progress');
// kho bãi vận chuyển
$title_transport = get_field('title_transport');
$content_transport = get_field('content_transport');
$img_transport = get_field('img_transport');
// kho của chúng tôi
$title_warehouse = get_field('title_warehouse');
$re_warehouse = get_field('re_warehouse');
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
</section>
<!-- đóng gói thành phẩm-->
<section class="section-capacity-1">
    <div class="container">
        <div class="option-1">
            <div class="title">
                <h2>
                    <?= $title_package ?>
                </h2>
                <div class="desc">
                    <p>
                        <?= $content_package ?>
                    </p>
                </div>
                <span>
                    <?= $slogan_package ?>
                </span>
            </div>
            <div class="content">
                <figure>
                    <img src="<?= getimage($img_package) ?>" alt="">
                </figure>
                <a class="play" href="<?php echo $video_package ?>" data-fancybox="video">
                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                        <path d="M22.0003 3.66602C11.8803 3.66602 3.66699 11.8793 3.66699 21.9993C3.66699 32.1193 11.8803 40.3327 22.0003 40.3327C32.1203 40.3327 40.3337 32.1193 40.3337 21.9993C40.3337 11.8793 32.1203 3.66602 22.0003 3.66602ZM26.877 25.171L24.5303 26.5277L22.1837 27.8843C19.1587 29.626 16.6837 28.196 16.6837 24.7127V21.9993V19.286C16.6837 15.7843 19.1587 14.3727 22.1837 16.1143L24.5303 17.471L26.877 18.8277C29.902 20.5693 29.902 23.4293 26.877 25.171Z" fill="#ED1C24"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="option-2">
            <div class="title">
                <h3>
                    <?= $title_procedure ?>
                </h3>
                <div class="desc">
                    <p>
                        <?= $content_procedure ?>
                    </p>
                </div>
            </div>
            <div class="image">
                <figure>
                    <img src="<?= getimage($img_procedure) ?>" alt="">
                </figure>
            </div>
            <div class="action">
                <?php
                $file_url = wp_get_attachment_url($file_procedure);
                ?>
                <a href="<?php echo esc_url($file_url); ?>" target="_blank" >
                    <?= $btn_text_procedure ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <path d="M11 8.02148C10.9083 8.02148 10.8258 8.00315 10.7342 7.96648C10.4775 7.86565 10.3125 7.60898 10.3125 7.33398V1.83398C10.3125 1.45815 10.6242 1.14648 11 1.14648C11.3758 1.14648 11.6875 1.45815 11.6875 1.83398V5.67482L12.3475 5.01482C12.6133 4.74898 13.0533 4.74898 13.3192 5.01482C13.585 5.28065 13.585 5.72065 13.3192 5.98648L11.4858 7.81982C11.3575 7.94815 11.1742 8.02148 11 8.02148Z" fill="white"/>
                        <path d="M11 8.02049C10.8258 8.02049 10.6517 7.95633 10.5142 7.81883L8.68082 5.9855C8.41499 5.71966 8.41499 5.27966 8.68082 5.01383C8.94665 4.74799 9.38665 4.74799 9.65249 5.01383L11.4858 6.84716C11.7517 7.11299 11.7517 7.55299 11.4858 7.81883C11.3483 7.95633 11.1742 8.02049 11 8.02049Z" fill="white"/>
                        <path d="M14.6667 20.8542H7.33333C2.0625 20.8542 2.0625 18.0583 2.0625 15.5833V14.6667C2.0625 12.6225 2.0625 10.3125 6.41667 10.3125C7.5075 10.3125 7.91083 10.5783 8.47917 11C8.50667 11.0275 8.54333 11.0458 8.57083 11.0825L9.50583 12.0725C10.2942 12.9067 11.7242 12.9067 12.5125 12.0725L13.4475 11.0825C13.475 11.055 13.5025 11.0275 13.5392 11C14.1075 10.5692 14.5108 10.3125 15.6017 10.3125C19.9558 10.3125 19.9558 12.6225 19.9558 14.6667V15.5833C19.9375 19.085 18.1683 20.8542 14.6667 20.8542ZM6.41667 11.6875C3.4375 11.6875 3.4375 12.6225 3.4375 14.6667V15.5833C3.4375 18.095 3.4375 19.4792 7.33333 19.4792H14.6667C17.3983 19.4792 18.5625 18.315 18.5625 15.5833V14.6667C18.5625 12.6225 18.5625 11.6875 15.5833 11.6875C14.9233 11.6875 14.7858 11.77 14.3917 12.0633L13.5025 13.0075C12.8425 13.7042 11.9533 14.0892 11 14.0892C10.0467 14.0892 9.1575 13.7042 8.4975 13.0075L7.60833 12.0633C7.21417 11.77 7.07667 11.6875 6.41667 11.6875Z" fill="white"/>
                        <path d="M4.5835 11.6873C4.20766 11.6873 3.896 11.3756 3.896 10.9998V7.3331C3.896 5.55476 3.896 3.3456 7.26933 3.02476C7.64516 2.9881 7.98433 3.2631 8.021 3.6481C8.05766 4.02393 7.78266 4.3631 7.39766 4.39976C5.271 4.59226 5.271 5.45393 5.271 7.3331V10.9998C5.271 11.3756 4.95933 11.6873 4.5835 11.6873Z" fill="white"/>
                        <path d="M17.4165 11.6869C17.0406 11.6869 16.729 11.3752 16.729 10.9994V7.33272C16.729 5.45356 16.729 4.59189 14.6023 4.39022C14.2265 4.35356 13.9515 4.01439 13.9881 3.63856C14.0248 3.26272 14.3548 2.97856 14.7398 3.02439C18.1131 3.34522 18.1131 5.55439 18.1131 7.33272V10.9994C18.104 11.3752 17.7923 11.6869 17.4165 11.6869Z" fill="white"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
<!--Quá trình tư vấn-->
<section class="section-capacity-2">
    <div class="container">
        <div class="title">
            <h2>
                <?= $title_progress ?>
            </h2>
        </div>
        <div class="image">
            <figure>
                <img src="<?= getimage($img_progress) ?>" alt="">
            </figure>
        </div>
    </div>
</section>
<!--kho bãi vận chuyển-->
<section class="section-capacity-3">
    <div class="container">
        <div class="content">
            <div class="col-left">
                <div class="text">
                    <div class="title">
                        <h2>
                            <?= $title_transport ?>
                        </h2>
                    </div>
                    <div class="desc">
                        <p>
                            <?= $content_transport ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-right">
                <div class="image">
                    <figure>
                        <img src="<?= getimage($img_transport) ?>" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-capacity-4">
    <div class="container">
        <div class="title">
            <h2>
                <?= $title_warehouse ?>
            </h2>
        </div>
        <div class="content">
            <?php foreach ($re_warehouse as $key => $value) : ?>
                <div class="child">
                    <div class="image">
                        <figure>
                            <img src="<?= getimage($value['img']) ?>" alt="">
                        </figure>
                    </div>
                    <div class="text">
                        <div class="name">
                            <h4><?= $value['name'] ?></h4>
                        </div>
                        <div class="desc">
                            <span><?= $value['capacity'] ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>