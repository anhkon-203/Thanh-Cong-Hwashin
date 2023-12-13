<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package hwashin
 */

get_header();
?>
<?php
$args = array(
    'post_type' => 'post',
    'post_status ' => 'publish',
    's' => ($_GET['s']),
    'sentence' => true,
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
);
$query = new WP_Query($args);
$args2 = array(
    'post_type' => 'san-pham',
    'post_status ' => 'publish',
    's' => ($_GET['s']),
    'sentence' => true,
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
);
$query2 = new WP_Query($args2);
$args3 = array(
    'post_type' => 'tuyen-dung',
    'post_status ' => 'publish',
    's' => ($_GET['s']),
    'sentence' => true,
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
);
?>
    <style>
        .result {
            background: url('<?php echo get_template_directory_uri(); ?>/dist/img/img-31.png') center/cover no-repeat;
            background-size: 100% 100%;
            text-align: center;
            color: white;
            padding: 16rem 0;
        }

        .result img {
            width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .underline {
            display: block;
            margin: 0 auto;
            width: 100px;
            height: 2px;
            background: green;
            margin-bottom: 20px;
        }

        .card {
            margin-bottom: 20px;
        }
        .custom-img{
            width: 100%;
            height: 300px;
            /*ảnh không thể bị vỡ*/
            object-fit: cover;
            /*bo tròn ảnh*/
            border-radius: 10px;
            /*độ đục của ảnh*/
            opacity: 0.8;
        }

    </style>
    <div class="result mb-3">
        <h3 class="fs-1 text-uppercase">
            <?php
            /* translators: %s: search query. */
            printf( esc_html__( 'Kết quả tìm kiếm: %s', 'hwashin' ), '<span>' . get_search_query() . '</span>' );
            ?>
        </h3>
    </div>

<?php
get_footer();

