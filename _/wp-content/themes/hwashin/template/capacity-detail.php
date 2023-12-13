<?php get_header();
/* Template Name: Năng lực sản xuất */
?>
<?php
$img_banner = get_field('img_banner');
$title_banner = get_field('title_banner');

// năng lực công nghệ
$title_capacity = get_field('title_capacity');
$content_capacity = get_field('content_capacity');
// dây chuyền sản xuất
$title_line = get_field('title_line');
$content_line = get_field('content_line');
$img_line = get_field('img_line');
// công nghệ hàn
$group_welding_tech = get_field('group_welding_tech');
if ($group_welding_tech) {
    $title_welding_tech = $group_welding_tech['title'];
    $content_welding_tech = $group_welding_tech['content'];
    $list_welding_tech = $group_welding_tech['list_welder'];
    $btn_text_welding_tech = $group_welding_tech['btn_text'];
    $file_welding_tech = $group_welding_tech['file'];
    $thumbnail_welding_tech = $group_welding_tech['thumbnail'];
    $video_welding_tech = $group_welding_tech['video'];
}
//Quy trình sản xuất thân vỏ xe bán tự động
$title_process_1 = get_field('title_process_1');
$content_process_1 = get_field('content_process_1');
$content_process_2 = get_field('content_process_2');
$img_process = get_field('img_process');
//Quy trình sản xuất thân vỏ xe
$title_process_2 = get_field('title_process_2');
$re_process_2 = get_field('re_process_2');
//Hệ thống quản lý chất lượng theo tiêu chuẩn
$title_system = get_field('title_system');
$gallery_system = get_field('gallery_system');
$content_system_1 = get_field('content_system_1');
$re_content_system = get_field('re_content_system');
//Năng lực nhân sự
$group_personnel = get_field('group_personnel');
if ($group_personnel) {
    $title_personnel = $group_personnel['title'];
    $content_personnel = $group_personnel['content'];
}
$group_structure = get_field('group_structure');
if ($group_structure) {
    $title_structure = $group_structure['title'];
    $content_structure = $group_structure['content'];
    $re_chart_structure = $group_structure['re_chart'];
}
$group_level = get_field('group_level');
if ($group_level) {
    $title_level = $group_level['title'];
    $re_level = $group_level['re_level'];
}
//File hồ sơ năng lực
$title_download = get_field('title_download');
$content_download = get_field('content_download');
$btn_text_download = get_field('btn_text_download');
$file_download_choose = get_field('file_download_choose');
?>
    <style>
        #pieChartContainer {
            position: relative;
            width: 370px;
            height: 370px;
            margin: 0 auto;
        }

        #pieChart, #chartText {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

    </style>
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
    <!-- năng lực công nghệ -->
    <section class="section-capacity-detail-1">
        <div class="container">
            <div class="title">
                <h2>
                    <?= $title_capacity ?>
                </h2>
                <div class="desc">
                    <p>
                        <?= $content_capacity ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- dây chuyền sản xuất -->
    <section class="section-capacity-detail-2">
        <div class="container">
            <div class="content row">
                <div class="col-lg-6">
                    <div class="col-left">
                        <div class="title">
                            <h2>
                                <?= $title_line ?>
                            </h2>
                        </div>
                        <div class="desc">
                            <p>
                                <?= $content_line ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="col-right">
                        <div class="image">
                            <figure>
                                <img src="<?= getimage($img_line) ?>" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- công nghệ hàn -->
    <section class="section-capacity-detail-3">
        <div class="container">
            <div class="title">
                <h2>
                    <?= $title_welding_tech ?>
                </h2>
                <div class="desc">
                    <p>
                        <?= $content_welding_tech ?>
                    </p>
                </div>
            </div>
            <div class="content row">
                <?php if ($list_welding_tech) : ?>
                    <?php foreach ($list_welding_tech as $item) : ?>
                        <div class="col-lg-3">
                            <div class="child">
                                <div class="image">
                                    <figure>
                                        <img src="<?= getimage($item['img']) ?>" alt="">
                                    </figure>
                                </div>
                                <div class="text">
                                    <div class="name">
                                        <a href="<?= $item['url'] ?>">
                                            <?= $item['name'] ?>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <p>
                                            <?= $item['desc'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <?
            $file_url = wp_get_attachment_url($file_welding_tech);
            ?>
            <a class="action" href="<?php echo esc_url($file_url); ?>" target="_blank">
                <?= $btn_text_welding_tech ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <path d="M11 8.02148C10.9083 8.02148 10.8258 8.00315 10.7342 7.96648C10.4775 7.86565 10.3125 7.60898 10.3125 7.33398V1.83398C10.3125 1.45815 10.6242 1.14648 11 1.14648C11.3758 1.14648 11.6875 1.45815 11.6875 1.83398V5.67482L12.3475 5.01482C12.6133 4.74898 13.0533 4.74898 13.3192 5.01482C13.585 5.28065 13.585 5.72065 13.3192 5.98648L11.4858 7.81982C11.3575 7.94815 11.1742 8.02148 11 8.02148Z"
                          fill="white"/>
                    <path d="M11 8.0205C10.8258 8.0205 10.6517 7.95633 10.5142 7.81883L8.68082 5.9855C8.41499 5.71966 8.41499 5.27966 8.68082 5.01383C8.94665 4.74799 9.38665 4.74799 9.65249 5.01383L11.4858 6.84716C11.7517 7.11299 11.7517 7.55299 11.4858 7.81883C11.3483 7.95633 11.1742 8.0205 11 8.0205Z"
                          fill="white"/>
                    <path d="M14.6667 20.8542H7.33333C2.0625 20.8542 2.0625 18.0583 2.0625 15.5833V14.6667C2.0625 12.6225 2.0625 10.3125 6.41667 10.3125C7.5075 10.3125 7.91083 10.5783 8.47917 11C8.50667 11.0275 8.54333 11.0458 8.57083 11.0825L9.50583 12.0725C10.2942 12.9067 11.7242 12.9067 12.5125 12.0725L13.4475 11.0825C13.475 11.055 13.5025 11.0275 13.5392 11C14.1075 10.5692 14.5108 10.3125 15.6017 10.3125C19.9558 10.3125 19.9558 12.6225 19.9558 14.6667V15.5833C19.9375 19.085 18.1683 20.8542 14.6667 20.8542ZM6.41667 11.6875C3.4375 11.6875 3.4375 12.6225 3.4375 14.6667V15.5833C3.4375 18.095 3.4375 19.4792 7.33333 19.4792H14.6667C17.3983 19.4792 18.5625 18.315 18.5625 15.5833V14.6667C18.5625 12.6225 18.5625 11.6875 15.5833 11.6875C14.9233 11.6875 14.7858 11.77 14.3917 12.0633L13.5025 13.0075C12.8425 13.7042 11.9533 14.0892 11 14.0892C10.0467 14.0892 9.1575 13.7042 8.4975 13.0075L7.60833 12.0633C7.21417 11.77 7.07667 11.6875 6.41667 11.6875Z"
                          fill="white"/>
                    <path d="M4.58337 11.6873C4.20754 11.6873 3.89587 11.3756 3.89587 10.9998V7.3331C3.89587 5.55476 3.89587 3.3456 7.26921 3.02476C7.64504 2.9881 7.98421 3.2631 8.02087 3.6481C8.05754 4.02393 7.78254 4.3631 7.39754 4.39976C5.27087 4.59226 5.27087 5.45393 5.27087 7.3331V10.9998C5.27087 11.3756 4.95921 11.6873 4.58337 11.6873Z"
                          fill="white"/>
                    <path d="M17.4167 11.6869C17.0409 11.6869 16.7292 11.3752 16.7292 10.9994V7.33272C16.7292 5.45356 16.7292 4.59189 14.6026 4.39022C14.2267 4.35356 13.9517 4.01439 13.9884 3.63856C14.0251 3.26272 14.3551 2.97856 14.7401 3.02439C18.1134 3.34522 18.1134 5.55439 18.1134 7.33272V10.9994C18.1042 11.3752 17.7926 11.6869 17.4167 11.6869Z"
                          fill="white"/>
                </svg>
            </a>
        </div>
    </section>
    <!-- Quy trình sản xuất thân vỏ xe bán tự động -->
    <section class="section-capacity-detail-4">
        <div class="content">
            <figure>
                <img src="<?= getimage($thumbnail_welding_tech) ?>" alt="">
            </figure>
            <a class="play" href="<?= $video_welding_tech ?>"
               data-fancybox="video">
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                    <path d="M22.0003 3.66602C11.8803 3.66602 3.66699 11.8793 3.66699 21.9993C3.66699 32.1193 11.8803 40.3327 22.0003 40.3327C32.1203 40.3327 40.3337 32.1193 40.3337 21.9993C40.3337 11.8793 32.1203 3.66602 22.0003 3.66602ZM26.877 25.171L24.5303 26.5277L22.1837 27.8843C19.1587 29.626 16.6837 28.196 16.6837 24.7127V21.9993V19.286C16.6837 15.7843 19.1587 14.3727 22.1837 16.1143L24.5303 17.471L26.877 18.8277C29.902 20.5693 29.902 23.4293 26.877 25.171Z"
                          fill="#ED1C24"/>
                </svg>
            </a>
        </div>
    </section>
    <!-- Quy trình sản xuất thân vỏ xe -->
    <section class="section-capacity-detail-5">
        <div class="container">
            <div class="option-1">
                <div class="title">
                    <h2>
                        <?= $title_process_1 ?>
                    </h2>
                    <div class="desc">
                        <p>
                            <?= $content_process_1 ?>
                        </p>
                    </div>
                </div>
                <div class="content">
                    <div class="text">
                        <p>
                            <?= $content_process_2 ?>
                        </p>
                    </div>
                    <div class="image">
                        <figure>
                            <img src="<?= getimage($img_process) ?>" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="option-2">
                <div class="title">
                    <h3>
                        <?= $title_process_2 ?>
                    </h3>
                </div>
                <div class="content row">
                    <?php if ($re_process_2) : ?>
                        <?php foreach ($re_process_2 as $key => $item) : ?>
                            <div class="col-md-6">
                                <div class="child">
                                    <div class="image">
                                        <figure>
                                            <img src="<?= getimage($item['icon']) ?>" alt="">
                                        </figure>
                                    </div>
                                    <div class="text">
                                        <div class="name">
                                            <h4>
                                                <?= $key + 1 . '. ' . $item['name'] ?>
                                            </h4>
                                        </div>
                                        <div class="desc">
                                            <p>
                                                <?= $item['content'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Hệ thống quản lý chất lượng theo tiêu chuẩn -->
    <section class="section-capacity-detail-6">
        <div class="container">
            <div class="title">
                <h2>
                    <?= $title_system ?>
                </h2>
            </div>
            <div class="content">
                <div class="col-left">
                    <div class="image">
                        <?php if ($gallery_system) : ?>
                            <?php foreach ($gallery_system as $item) : ?>
                                <figure>
                                    <img src="<?= getimage($item) ?>" alt="">
                                </figure>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div class="text">
                        <p>
                            <?= $content_system_1 ?>
                        </p>
                    </div>
                </div>
                <div class="col-right">
                    <?php foreach ($re_content_system as $item) : ?>
                        <div class="child">
                            <div class="name">
                                <h4>
                                    <?= $item['title'] ?>
                                </h4>
                            </div>
                            <div class="desc">
                                <p>
                                    <?= $item['desc'] ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Năng lực nhân sự -->
    <section class="section-capacity-detail-7">
        <div class="container">
            <div class="title">
                <h2>
                    <?= $title_personnel ?>
                </h2>
                <div class="desc">
                    <p>
                        <?= $content_personnel ?>
                    </p>
                </div>
            </div>
            <div class="option-1">
                <div class="content">
                    <div class="col-left">
                        <div class="text">
                            <div class="name">
                                <h4>
                                    <?= $title_structure ?>
                                </h4>
                            </div>
                            <span>
                                <?= $content_structure ?>
                            </span>
                        </div>
                        <div class="list">
                            <?php  foreach ($re_chart_structure as $key => $item) : ?>
                            <div class="child">
                                <div class="square" style="background-color: <?= $item['pick_color'] ?>;">

                                </div>
                                <span><?= $item['title'] ?>
                                     <?= $item['percent'] ?>%
                                </span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="image">
                            <div id="pieChartContainer">
                                <canvas id="pieChart" width="400" height="400"></canvas>
                                <div id="chartText" class="fw-bold">100%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="option-2">
                <div class="content">
                    <div class="name">
                        <h4>
                            <?= $title_level ?>
                        </h4>
                    </div>
                    <div class="total">
                        <span>100%</span>
                    </div>
                    <div class="list">
                        <?php foreach ($re_level as $key => $item) : ?>
                            <div class="child">
                                <div class="left">
                                    <p class="percent"></p>
                                    <span style="background-color: <?= $item['pick_color'] ?>;">
                                        <?= $item['percent'] ?>%
                                    </span>
                                </div>
                                <div class="right">
                                    <p><?= $item['title'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script>
    $(document).ready(function () {
        $('.child').each(function () {
            var percent = $(this).find('.percent');
            var span = $(this).find('span');
            var percentValue = parseInt(span.text());

            // Tính độ rộng dựa trên giá trị phần trăm và chuyển đổi từ 2% sang 25%
            var width = percentValue  + '%';

            // Đặt độ rộng cho phần tử span
            span.css('width', width);
        });
    });
</script>
</script>

    <section class="section-capacity-detail-8">
        <div class="container">
            <div class="content">
                <div class="title">
                    <h2>
                        <?= $title_download ?>
                    </h2>
                </div>
                <div class="desc">
                    <p>
                        <?= $content_download ?>
                    </p>
                </div>
                <?php
                $file_url = wp_get_attachment_url($file_download_choose);
                ?>
                <a class="action" href="<?php echo esc_url($file_url); ?>" target="_blank">
                    <?= $btn_text_download ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <path d="M11 8.02051C10.9083 8.02051 10.8258 8.00217 10.7342 7.96551C10.4775 7.86467 10.3125 7.60801 10.3125 7.33301V1.83301C10.3125 1.45717 10.6242 1.14551 11 1.14551C11.3758 1.14551 11.6875 1.45717 11.6875 1.83301V5.67384L12.3475 5.01384C12.6133 4.74801 13.0533 4.74801 13.3192 5.01384C13.585 5.27967 13.585 5.71967 13.3192 5.98551L11.4858 7.81884C11.3575 7.94717 11.1742 8.02051 11 8.02051Z"
                              fill="white"/>
                        <path d="M11 8.02049C10.8258 8.02049 10.6517 7.95633 10.5142 7.81883L8.68082 5.9855C8.41499 5.71966 8.41499 5.27966 8.68082 5.01383C8.94665 4.74799 9.38665 4.74799 9.65249 5.01383L11.4858 6.84716C11.7517 7.11299 11.7517 7.55299 11.4858 7.81883C11.3483 7.95633 11.1742 8.02049 11 8.02049Z"
                              fill="white"/>
                        <path d="M14.6667 20.8542H7.33333C2.0625 20.8542 2.0625 18.0583 2.0625 15.5833V14.6667C2.0625 12.6225 2.0625 10.3125 6.41667 10.3125C7.5075 10.3125 7.91083 10.5783 8.47917 11C8.50667 11.0275 8.54333 11.0458 8.57083 11.0825L9.50583 12.0725C10.2942 12.9067 11.7242 12.9067 12.5125 12.0725L13.4475 11.0825C13.475 11.055 13.5025 11.0275 13.5392 11C14.1075 10.5692 14.5108 10.3125 15.6017 10.3125C19.9558 10.3125 19.9558 12.6225 19.9558 14.6667V15.5833C19.9375 19.085 18.1683 20.8542 14.6667 20.8542ZM6.41667 11.6875C3.4375 11.6875 3.4375 12.6225 3.4375 14.6667V15.5833C3.4375 18.095 3.4375 19.4792 7.33333 19.4792H14.6667C17.3983 19.4792 18.5625 18.315 18.5625 15.5833V14.6667C18.5625 12.6225 18.5625 11.6875 15.5833 11.6875C14.9233 11.6875 14.7858 11.77 14.3917 12.0633L13.5025 13.0075C12.8425 13.7042 11.9533 14.0892 11 14.0892C10.0467 14.0892 9.1575 13.7042 8.4975 13.0075L7.60833 12.0633C7.21417 11.77 7.07667 11.6875 6.41667 11.6875Z"
                              fill="white"/>
                        <path d="M4.58337 11.6873C4.20754 11.6873 3.89587 11.3756 3.89587 10.9998V7.3331C3.89587 5.55476 3.89587 3.3456 7.26921 3.02476C7.64504 2.9881 7.98421 3.2631 8.02087 3.6481C8.05754 4.02393 7.78254 4.3631 7.39754 4.39976C5.27087 4.59226 5.27087 5.45393 5.27087 7.3331V10.9998C5.27087 11.3756 4.95921 11.6873 4.58337 11.6873Z"
                              fill="white"/>
                        <path d="M17.4167 11.6879C17.0409 11.6879 16.7292 11.3762 16.7292 11.0004V7.3337C16.7292 5.45453 16.7292 4.59286 14.6026 4.3912C14.2267 4.35453 13.9517 4.01537 13.9884 3.63953C14.0251 3.2637 14.3551 2.97953 14.7401 3.02537C18.1134 3.3462 18.1134 5.55537 18.1134 7.3337V11.0004C18.1042 11.3762 17.7926 11.6879 17.4167 11.6879Z"
                              fill="white"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <div class="chart" style="display: none;">
        <?php
        $totalCount = 0; // Khởi tạo biến tổng số phần tử
        foreach ($re_chart_structure as $key => $item) :
            $totalCount++; // Tăng giá trị tổng số phần tử mỗi lần lặp
            ?>
            <span id="percent<?= $key + 1 ?>">
                <?= $item['percent'] ?>
            </span>
            <span id="name<?= $key + 1 ?>">
                <?= $item['title'] ?>
            </span>
            <span id="color<?= $key + 1 ?>">
                <?= $item['pick_color'] ?>
            </span>
        <?php endforeach; ?>
        <!-- Hiển thị tổng số phần tử -->
        <span id="total"><?= $totalCount ?></span>
    </div>
    <script>
        $(document).ready(function () {
            // Lấy tổng số phần tử
            var total = $('#total').text();
            console.log(total);

            // Khai báo mảng để lưu trữ dữ liệu
            var dataLabels = [];
            var dataValues = [];
            var dataColors = [];

            // Lặp qua các phần tử và lấy dữ liệu
            for (var i = 1; i <= total; i++) {
                dataLabels.push($('#name' + i).text());
                dataValues.push(parseFloat($('#percent' + i).text()));
                dataColors.push($('#color' + i).text());
            }

            // Dữ liệu cho biểu đồ tròn
            var data = {
                labels: dataLabels,
                datasets: [{
                    data: dataValues,
                    backgroundColor: dataColors,
                }]
            };

            // Cấu hình cho biểu đồ tròn
            var options = {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '22%', // kích thước
                plugins: {
                    legend: {
                        display: false // Ẩn legend
                    }
                }

            };

            // Lấy tham chiếu đến đối tượng canvas và văn bản
            var container = document.getElementById('pieChartContainer');
            var ctx = document.getElementById('pieChart').getContext('2d');
            var chartText = document.getElementById('chartText');

            // Tạo biểu đồ tròn bằng Chart.js
            var myPieChart = new Chart(ctx, {
                type: 'doughnut',
                data: data,
                options: options
            });

            // Cập nhật văn bản và vị trí
            var chartTextSize = 20; // Kích thước văn bản
            chartText.style.fontSize = chartTextSize + 'px';
        });
    </script>
<?php get_footer(); ?>