<?php get_header();
/* Template Name: Tuyển dụng */
?>
<?php
$img_banner = get_field('img_banner');
$title_banner = get_field('title_banner');
// tại sao chọn tc hwashin
$group_why_choose = get_field('group_why_choose');
if ($group_why_choose) {
    $title_why_choose = $group_why_choose['title'];
    $desc_why_choose = $group_why_choose['content'];
    $list_why_choose = $group_why_choose['re_why_choose'];
}
// thông báo tuyển dụng
$title_notice_recruitment = get_field('title_noti');
$btn_text_search = get_field('btn_text_search');
// form
$title_form = get_field('title_form');
$content_form = get_field('content_form');
$code_contact_form = get_field('code_contact_form');
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

    <section class="section-recruitment-1">
        <div class="container">
            <div class="title">
                <h2>
                    <?= $title_why_choose ?>
                </h2>
                <div class="desc">
                    <p>
                        <?= $desc_why_choose ?>
                    </p>
                </div>
            </div>
            <div class="content row">
                <?php if ($list_why_choose) : ?>
                    <?php foreach ($list_why_choose as $item) : ?>
                        <div class="col-lg-4">
                            <div class="child">
                                <div class="image">
                                    <figure>
                                        <img src="<?= getimage($item['img']) ?>" alt="">
                                    </figure>
                                </div>
                                <div class="text">
                                    <div class="name">
                                    <span>
                                        <?= $item['desc'] ?>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="section-recruitment-2">
        <div class="container">
            <div class="title">
                <h2>
                    <?= $title_notice_recruitment ?>
                </h2>
            </div>
            <div class="content row">
                <div class="col-lg-8">
                    <div class="col-left">
                        <div class="search">
                            <div class="input">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
                                     fill="none">
                                    <path d="M19 19.5L14.6569 15.1569M14.6569 15.1569C16.1046 13.7091 17 11.7091 17 9.5C17 5.08172 13.4183 1.5 9 1.5C4.58172 1.5 1 5.08172 1 9.5C1 13.9183 4.58172 17.5 9 17.5C11.2091 17.5 13.2091 16.6046 14.6569 15.1569Z"
                                          stroke="#898888" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <input type="text" placeholder=" <?php _e('Tìm kiếm','hwashin_option') ?> " id="search">
                            </div>
                            <button id="searchButton">
                                <?= $btn_text_search ?>
                            </button>
                            <script>
                                $(document).ready(function () {
                                    $('#searchButton').click(function () {
                                        var search = $('#search').val();
                                        if (search !== '') {
                                            var location = window.location.href;
                                            var newUrl = '';

                                            if (location.indexOf('?title_search=') !== -1) {
                                                newUrl = location.replace(/(\?|&)title_search=[^&]*(&|$)/, '$1title_search=' + search + '$2');
                                            } else {
                                                newUrl = location + (location.indexOf('?') !== -1 ? '&' : '?') + 'title_search=' + search;
                                            }

                                            window.location.href = newUrl;
                                        } else {
                                            alert('Vui lòng nhập từ khóa tìm kiếm');
                                            return false;
                                        }
                                    });
                                });
                            </script>
                        </div>
                        <div class="list">
                            <?php
                            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                            $args = array(
                                'post_type' => 'tuyen-dung',
                                'posts_per_page' => 3,
                                'order' => 'DESC',
                                'orderby' => 'date',
                                'paged' => $paged,
                                's' => isset($_GET['title_search']) ? sanitize_text_field($_GET['title_search']) : '',
                            );
                            $the_query = new WP_Query($args);
                            if ($the_query->have_posts()) {
                                while ($the_query->have_posts()) {
                                    $the_query->the_post();
                                    $title = get_the_title();
                                    $salary = get_post_meta(get_the_ID(), 'salary', true);
                                    $quantity = get_post_meta(get_the_ID(), 'quantity', true);
                                    $location = get_post_meta(get_the_ID(), 'location', true);
                                    $recruitment_time = get_post_meta(get_the_ID(), 'recruitment_time', true);
                                    $deadline = get_post_meta(get_the_ID(), 'deadline', true);
                                    ?>
                                    <div class="child">
                                        <div class="name">
                                            <h4>
                                                <?= $title ?>
                                            </h4>
                                        </div>
                                        <div class="time item">
                                            <div class="date">
                                                <span>
                                                    <?php _e('Thời gian đăng tuyển','hwashin_option') ?>
                                                    :
                                                </span>
                                                <span>
                                                    <?php
                                                    $recruitmentTimeDate = new DateTime($recruitment_time);
                                                    echo $recruitmentTimeDate->format('d/m/Y');
                                                    ?>
                                                     </span>
                                            </div>
                                            <div class="date">
                                                <span>
                                                    <?php _e('Hạn ứng tuyển','hwashin_option') ?>
                                                    :
                                                </span>
                                                <span>
                                                    <?php
                                                    $deadlineDate = new DateTime($deadline);
                                                    echo $deadlineDate->format('d/m/Y');
                                                    ?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="wage item">
                                            <span><?php _e('Mức lương','hwashin_option') ?>: <?= $salary ?></span>
                                        </div>
                                        <div class="quantity item">
                                            <span><?php _e('Số lượng','hwashin_option') ?> : <?= $quantity ?></span>
                                        </div>
                                        <div class="location item">
                                            <span><?php _e('Địa chỉ làm việc','hwashin_option') ?>:  <?= $location ?></span>
                                        </div>
                                        <a class="action" href="<?= get_permalink() ?>">
                                            <?php _e('Ứng tuyển','hwashin_option') ?>
                                        </a>
                                    </div>
                                    <?php
                                }
                            }
                            wp_reset_postdata();
                            ?>
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

                        <script>
                            $(document).ready(function () {
                                $('nav.number-page ul li.active a').addClass('text-danger');
                            });
                        </script>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-right">
                        <div class="name">
                            <h4>
                                <?= $title_form ?>
                            </h4>
                            <div class="desc">
                                <p>
                                    <?= $content_form ?>
                                </p>
                            </div>
                        </div>
                        <?= do_shortcode($code_contact_form) ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>