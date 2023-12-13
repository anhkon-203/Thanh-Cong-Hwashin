<?php get_header(); ?>

<?php
$btn_text = get_field('btn_text');
$group_info_job = get_field('group_info_job');
if ($group_info_job) {
    $title_job = $group_info_job['title'];
    $re_info_job = $group_info_job['re_info_job'];
}
$group_contact = get_field('group_contact');
if ($group_contact) {
    $title_contact = $group_contact['title'];
    $re_info_contact = $group_contact['re_info_contact'];
}
$group_contact_form = get_field('group_contact_form');
if ($group_contact_form) {
    $title_all = $group_contact_form['title_all'];
    $title_form = $group_contact_form['title_contact_form'];
    $content_form = $group_contact_form['content'];
    $btn_text_1 = $group_contact_form['btn_text_1'];
    $btn_text_2 = $group_contact_form['btn_text_2'];
    $code_form = $group_contact_form['code'];
}
//banner
$img_banner = get_field('img_banner');
$title_banner = get_field('title_banner');
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

    <section class="section-recruitment-detail">
        <div class="container">
            <div class="content row">
                <div class="col-lg-8">
                    <div class="col-left">
                        <div class="title">
                            <div class="name">
                                <h2>
                                    <?php the_title(); ?>
                                </h2>
                            </div>
                            <div class="action">
                                <div class="share">
                                    <span>
                                        <?php _e('Chia sẻ','hwashin_option') ?>
                                    </span>
                                    <div class="socail">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                                            <figure>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                     viewBox="0 0 18 18" fill="none">
                                                    <g clip-path="url(#clip0_1541_3320)">
                                                        <path
                                                            d="M18 9C18 4.02943 13.9706 0 9 0C4.02943 0 0 4.02943 0 9C0 13.4921 3.29115 17.2155 7.59375 17.8907V11.6016H5.30859V9H7.59375V7.01719C7.59375 4.76156 8.93742 3.51563 10.9932 3.51563C11.9776 3.51563 13.0078 3.69141 13.0078 3.69141V5.90625H11.873C10.755 5.90625 10.4062 6.60006 10.4062 7.3125V9H12.9023L12.5033 11.6016H10.4062V17.8907C14.7088 17.2155 18 13.4921 18 9Z"
                                                            fill="#1B1717" fill-opacity="0.7" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1541_3320">
                                                            <rect width="18" height="18" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </figure>
                                        </a>
                                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                 viewBox="0 0 18 18" fill="none">
                                                <g clip-path="url(#clip0_1541_3321)">
                                                    <path
                                                        d="M5.66262 16.313C12.4534 16.313 16.1687 10.6856 16.1687 5.80694C16.1687 5.64874 16.1652 5.48702 16.1582 5.32882C16.8809 4.80615 17.5046 4.15874 18 3.41702C17.3269 3.7165 16.6122 3.91209 15.8804 3.9971C16.651 3.53523 17.2279 2.80965 17.5043 1.95487C16.7794 2.38447 15.9867 2.68751 15.1601 2.85101C14.6031 2.25922 13.8667 1.86739 13.0648 1.73609C12.2628 1.60479 11.4399 1.74134 10.7233 2.12462C10.0067 2.50791 9.43635 3.11658 9.10039 3.85653C8.76442 4.59649 8.68157 5.42651 8.86465 6.21827C7.39687 6.14462 5.96095 5.76333 4.64999 5.09912C3.33902 4.43492 2.18227 3.50263 1.25473 2.36269C0.7833 3.17548 0.639042 4.13728 0.851273 5.05262C1.0635 5.96795 1.6163 6.76814 2.3973 7.29054C1.81097 7.27192 1.23748 7.11406 0.724219 6.82999V6.87569C0.723693 7.72866 1.01857 8.55549 1.55873 9.21563C2.09889 9.87576 2.85099 10.3285 3.68719 10.4968C3.14404 10.6454 2.57399 10.667 2.02113 10.5601C2.25709 11.2936 2.71618 11.9352 3.33433 12.3953C3.95248 12.8554 4.69884 13.111 5.46926 13.1265C4.16132 14.1539 2.54563 14.7111 0.882422 14.7085C0.587465 14.7081 0.292799 14.69 0 14.6544C1.68964 15.7384 3.65515 16.3141 5.66262 16.313Z"
                                                        fill="#1B1717" fill-opacity="0.7" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1541_3321">
                                                        <rect width="18" height="18" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <?php if($code_form != null) { ?>
                                    <button class="btn-recruitment">
                                        <?php echo $btn_text; ?>
                                    </button>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="detail">
                           <div class="text">
                               <p>
                                      <?php the_content(); ?>
                               </p>
                           </div>
                        </div>
                            <?php if($code_form != null) { ?>
                        <button class="btn-recruitment">
                            <?php echo $btn_text; ?>
                        </button>
                            <?php } ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-right">
                        <div class="info">
                            <div class="name">
                                <h4>
                                    <?php echo $title_job; ?>
                                </h4>
                            </div>
                            <div class="desc">
                                <?php foreach ($re_info_job as $item) : ?>
                                <div class="child">
                                    <div class="image">
                                        <figure>
                                            <img src="<?php echo getimage($item['icon']) ?>" alt="">
                                        </figure>
                                    </div>
                                    <p>
                                        <?php echo $item['title']; ?>
                                    </p>
                                    <span>
                                        <?php echo $item['content']; ?>
                                    </span>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="contact">
                            <div class="name">
                                <h4>
                                    <?php echo $title_contact; ?>
                                </h4>
                            </div>
                            <div class="method">
                                <?php foreach ($re_info_contact as $item) : ?>
                                <div class="child">
                                    <div class="image">
                                        <figure>
                                            <img src="<?php echo getimage($item['icon']) ?>" alt="">
                                        </figure>
                                    </div>
                                    <span>
                                        <?php echo $item['content']; ?>
                                    </span>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="popup-recruitment">
        <div class="content">
            <div class="title">
                <h4>
                    <?php echo $title_all; ?>
                </h4>
                <div class="desc">
                    <?php echo $content_form; ?>
                </div>
            </div>
            <div class="name">
                <h2>
                    <?php echo $title_form; ?>
                </h2>
            </div>
            <?= do_shortcode($code_form); ?>
            <div class="close-popup">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <path d="M31.6668 10.684L29.3168 8.33398L20.0002 17.6507L10.6835 8.33398L8.3335 10.684L17.6502 20.0007L8.3335 29.3173L10.6835 31.6673L20.0002 22.3507L29.3168 31.6673L31.6668 29.3173L22.3502 20.0007L31.6668 10.684Z" fill="#051D36"/>
                </svg>
            </div>
        </div>
    </div>

    <script>
        $(".btn-recruitment").click(function (){
            $(".popup-recruitment").fadeIn();
            $(".overlay").fadeIn();
        })
        $(".close-popup").click(function (){
            $(".popup-recruitment").fadeOut();
            $(".overlay").fadeOut();
        })
    </script>

    <script>
        $(document).ready(function () {
            $('#infor').hide();
            // Append content to the label
            $('label[for="infor"]').append('    <figure>\n' +
                '        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">\n' +
                '<path d="M18.4206 8.22038C17.8096 6.81639 16.7551 5.65146 15.4187 4.90411C14.0823 4.15676 12.5377 3.86822 11.0216 4.08269C9.5055 4.29717 8.10155 5.00284 7.02488 6.09156C5.94821 7.18028 5.25821 8.592 5.06062 10.1104C4.10721 10.3387 3.27084 10.9092 2.71036 11.7136C2.14988 12.5179 1.90431 13.5001 2.02029 14.4736C2.13627 15.4471 2.60572 16.3441 3.33949 16.9942C4.07326 17.6444 5.02025 18.0024 6.00062 18.0004C6.26584 18.0004 6.52019 17.895 6.70773 17.7075C6.89527 17.52 7.00062 17.2656 7.00062 17.0004C7.00062 16.7352 6.89527 16.4808 6.70773 16.2933C6.52019 16.1057 6.26584 16.0004 6.00062 16.0004C5.47019 16.0004 4.96148 15.7897 4.58641 15.4146C4.21134 15.0395 4.00062 14.5308 4.00062 14.0004C4.00062 13.47 4.21134 12.9612 4.58641 12.5862C4.96148 12.2111 5.47019 12.0004 6.00062 12.0004C6.26584 12.0004 6.52019 11.895 6.70773 11.7075C6.89527 11.52 7.00062 11.2656 7.00062 11.0004C7.00318 9.81766 7.42491 8.67414 8.19089 7.77297C8.95688 6.8718 10.0175 6.27133 11.1844 6.07826C12.3512 5.88518 13.5488 6.11199 14.5642 6.71839C15.5796 7.32479 16.3472 8.27152 16.7306 9.39038C16.7878 9.56222 16.8905 9.71532 17.0279 9.83332C17.1653 9.95132 17.3321 10.0298 17.5106 10.0604C18.1767 10.1863 18.7805 10.534 19.2236 11.0469C19.6668 11.5598 19.9232 12.2077 19.951 12.885C19.9789 13.5623 19.7765 14.2291 19.3769 14.7766C18.9774 15.3242 18.4041 15.7203 17.7506 15.9004C17.4934 15.9667 17.273 16.1325 17.138 16.3613C17.0029 16.5901 16.9643 16.8631 17.0306 17.1204C17.0969 17.3776 17.2627 17.598 17.4915 17.7331C17.7203 17.8681 17.9934 17.9067 18.2506 17.8404C19.303 17.5623 20.2359 16.9484 20.9076 16.0918C21.5794 15.2353 21.9532 14.183 21.9725 13.0947C21.9917 12.0063 21.6552 10.9414 21.0142 10.0617C20.3731 9.18198 19.4625 8.53548 18.4206 8.22038ZM12.7106 10.2904C12.6155 10.1993 12.5034 10.128 12.3806 10.0804C12.1372 9.98037 11.8641 9.98037 11.6206 10.0804C11.4979 10.128 11.3857 10.1993 11.2906 10.2904L8.29062 13.2904C8.10232 13.4787 7.99653 13.7341 7.99653 14.0004C7.99653 14.2667 8.10232 14.5221 8.29062 14.7104C8.47893 14.8987 8.73432 15.0045 9.00062 15.0045C9.26692 15.0045 9.52232 14.8987 9.71062 14.7104L11.0006 13.4104V19.0004C11.0006 19.2656 11.106 19.52 11.2935 19.7075C11.4811 19.895 11.7354 20.0004 12.0006 20.0004C12.2658 20.0004 12.5202 19.895 12.7077 19.7075C12.8953 19.52 13.0006 19.2656 13.0006 19.0004V13.4104L14.2906 14.7104C14.3836 14.8041 14.4942 14.8785 14.616 14.9293C14.7379 14.98 14.8686 15.0062 15.0006 15.0062C15.1326 15.0062 15.2633 14.98 15.3852 14.9293C15.5071 14.8785 15.6177 14.8041 15.7106 14.7104C15.8044 14.6174 15.8787 14.5068 15.9295 14.385C15.9803 14.2631 16.0064 14.1324 16.0064 14.0004C16.0064 13.8684 15.9803 13.7377 15.9295 13.6158C15.8787 13.4939 15.8044 13.3833 15.7106 13.2904L12.7106 10.2904Z" fill="#034EA1"/> \n' +
                '            </svg>\n' +
                '            </figure>\n' +
                '   Tải lên file thông tin ứng tuyển');
        });
    </script>

<?php get_footer(); ?>