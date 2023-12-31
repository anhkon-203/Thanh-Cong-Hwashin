<?php get_header(); ?>

    <div class="container">
        <div class="directional">
            <a href="<?php echo get_home_url(); ?>">
                <?php _e('Trang chủ','hwashin_option') ?>
            </a>
            <span>/</span>
            <a href="<?php echo get_home_url(); ?>/tin-tuc">
                <?php _e('Tin tức','hwashin_option') ?>
            </a>
            <span>/</span>
            <span>
                <?php _e('Chi tiết tin tức','hwashin_option') ?>
            </span>
        </div>
    </div>

    <section class="section-news-detail-1">
        <div class="container">
            <div class="title">
                <h4>
                    <?php the_title(); ?>
                </h4>
                <div class="action">
                    <div class="date">
                        <figure>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M13.9582 3.76484V2.46484C13.9582 2.12318 13.6749 1.83984 13.3332 1.83984C12.9915 1.83984 12.7082 2.12318 12.7082 2.46484V3.71484H7.29153V2.46484C7.29153 2.12318 7.0082 1.83984 6.66653 1.83984C6.32487 1.83984 6.04153 2.12318 6.04153 2.46484V3.76484C3.79153 3.97318 2.69987 5.31484 2.5332 7.30651C2.51653 7.54818 2.71653 7.74818 2.94987 7.74818H17.0499C17.2915 7.74818 17.4915 7.53984 17.4665 7.30651C17.2999 5.31484 16.2082 3.97318 13.9582 3.76484Z" fill="#7C7C7B"/>
                                <path d="M16.6667 8.99805H3.33333C2.875 8.99805 2.5 9.37305 2.5 9.83138V14.9647C2.5 17.4647 3.75 19.1314 6.66667 19.1314H13.3333C16.25 19.1314 17.5 17.4647 17.5 14.9647V9.83138C17.5 9.37305 17.125 8.99805 16.6667 8.99805ZM12.3667 13.2897L11.95 13.7147H11.9417L9.41667 16.2397C9.30833 16.348 9.08333 16.4647 8.925 16.4814L7.8 16.648C7.39167 16.7064 7.10833 16.4147 7.16667 16.0147L7.325 14.8814C7.35 14.723 7.45833 14.5064 7.56667 14.3897L10.1 11.8647L10.5167 11.4397C10.7917 11.1647 11.1 10.9647 11.4333 10.9647C11.7167 10.9647 12.025 11.098 12.3667 11.4397C13.1167 12.1897 12.875 12.7814 12.3667 13.2897Z" fill="#7C7C7B"/>
                            </svg>
                        </figure>
                        <span>
                            <?php echo get_the_date('d/m/Y'); ?>
                        </span>
                    </div>
                    <div class="share">
                        <span>
                            <?php _e('Chia sẻ','hwashin_option') ?>
                        </span>
                        <div class="socail">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                                <figure>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                        <g clip-path="url(#clip0_1541_3742)">
                                            <path d="M20 10.7988C20 5.27598 15.5229 0.798828 10 0.798828C4.47715 0.798828 0 5.27598 0 10.7988C0 15.79 3.65684 19.9272 8.4375 20.6773V13.6895H5.89844V10.7988H8.4375V8.5957C8.4375 6.08945 9.93047 4.70508 12.2146 4.70508C13.3084 4.70508 14.4531 4.90039 14.4531 4.90039V7.36133H13.1922C11.95 7.36133 11.5625 8.13223 11.5625 8.92383V10.7988H14.3359L13.8926 13.6895H11.5625V20.6773C16.3432 19.9272 20 15.79 20 10.7988Z" fill="#1B1717" fill-opacity="0.7"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1541_3742">
                                                <rect width="20" height="20" fill="white" transform="translate(0 0.798828)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </figure>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                                <figure>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                        <g clip-path="url(#clip0_1541_3743)">
                                            <path d="M6.2918 18.9244C13.8371 18.9244 17.9652 12.6717 17.9652 7.25099C17.9652 7.07521 17.9613 6.89552 17.9535 6.71974C18.7566 6.13899 19.4496 5.41965 20 4.59552C19.2521 4.92827 18.458 5.14559 17.6449 5.24005C18.5011 4.72686 19.1421 3.92067 19.4492 2.97091C18.6438 3.44824 17.763 3.78495 16.8445 3.96661C16.2257 3.30907 15.4075 2.8737 14.5164 2.72781C13.6253 2.58193 12.711 2.73365 11.9148 3.15952C11.1186 3.58539 10.4848 4.26169 10.1115 5.08386C9.73825 5.90604 9.64619 6.82828 9.84961 7.70802C8.21874 7.62618 6.62328 7.20253 5.16665 6.46452C3.71002 5.72652 2.42474 4.69064 1.39414 3.42404C0.870333 4.32714 0.710047 5.39581 0.945859 6.41285C1.18167 7.42989 1.79589 8.31898 2.66367 8.89943C2.01219 8.87874 1.37498 8.70334 0.804688 8.38771V8.43849C0.804104 9.38623 1.13175 10.3049 1.73192 11.0384C2.3321 11.7719 3.16777 12.2749 4.09687 12.4619C3.49338 12.627 2.85999 12.6511 2.2457 12.5322C2.50788 13.3473 3.01798 14.0602 3.70481 14.5714C4.39164 15.0826 5.22093 15.3666 6.07695 15.3838C4.62369 16.5254 2.82848 17.1445 0.980469 17.1416C0.652739 17.1411 0.325333 17.121 0 17.0815C1.87738 18.2859 4.06128 18.9256 6.2918 18.9244Z" fill="#1B1717" fill-opacity="0.7"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1541_3743">
                                                <rect width="20" height="20" fill="white" transform="translate(0 0.798828)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content row">
                <div class="col-lg-8">
                    <div class="col-left">
                        <div class="detail">
                            <div class="image">
                                <?php
                                    $thumbnail = get_the_post_thumbnail_url();
                                ?>
                                <figure>
                                    <img src="<?= (!empty($thumbnail)) ? $thumbnail : getimage(img_default()) ?>"
                                         alt="">
                                </figure>
                            </div>
                            <div class="desc">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <nav class="tag">
                            <ul>
                                <?php
                                $tags = get_the_tags();
                                if ($tags) {
                                    foreach ($tags as $tag) {
                                        echo '<li><a href="'.get_tag_link($tag->term_id).'">#'.$tag->name.'</a></li>';
                                    }
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-right">
                        <h4>
                            <?php _e('Tin nổi bật','hwashin_option') ?>
                        </h4>
                         <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 4,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'category',
                                            'field' => 'slug',
                                            'terms' => 'tin-noi-bat',
                                        ),
                                    ),
                                );
                                $query = new WP_Query($args);
                                ?>

                        <div class="list">
                            <?php if ($query->have_posts()) : ?>
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <?php
                                    $thumbnail_highlight = get_the_post_thumbnail_url();
                                ?>
                            <div class="child">
                                <div class="image">
                                    <figure>
                                        <img src="<?= (!empty($thumbnail_highlight)) ? $thumbnail_highlight : getimage(img_default()) ?>"
                                             alt="">
                                    </figure>
                                </div>
                                <div class="text">
                                    <div class="date">
                                        <span>
                                            <?php echo get_the_date('d/m/Y'); ?>
                                        </span>
                                    </div>
                                    <div class="name">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-news-detail-2">
        <div class="container">
            <div class="title">
                <h3>
                    <?php _e('Tin liên quan','hwashin_option') ?>
                </h3>
            </div>
            <div class="content row">
                <?php
                $args_news = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post__not_in' => array(get_the_ID())
                );
                ?>
                <?php $query_news = new WP_Query($args_news); ?>
                <?php if ($query_news->have_posts()) : ?>
                    <?php while ($query_news->have_posts()) : $query_news->the_post(); ?>
                        <?php
                        $thumbnail_news = get_the_post_thumbnail_url();
                        ?>
                <div class="col-lg-4">
                    <div class="child">
                        <div class="image">
                            <figure>
                                <img src="<?= (!empty($thumbnail_news)) ? $thumbnail_news : getimage(img_default()) ?>"
                                     alt="">
                            </figure>
                        </div>
                        <div class="text">
                            <div class="date">
                                <figure>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                                        <path d="M6 4.54883C5.59 4.54883 5.25 4.20883 5.25 3.79883V0.798828C5.25 0.388828 5.59 0.0488281 6 0.0488281C6.41 0.0488281 6.75 0.388828 6.75 0.798828V3.79883C6.75 4.20883 6.41 4.54883 6 4.54883Z" fill="#ED1C24"/>
                                        <path d="M14 4.54883C13.59 4.54883 13.25 4.20883 13.25 3.79883V0.798828C13.25 0.388828 13.59 0.0488281 14 0.0488281C14.41 0.0488281 14.75 0.388828 14.75 0.798828V3.79883C14.75 4.20883 14.41 4.54883 14 4.54883Z" fill="#ED1C24"/>
                                        <path d="M6.5 13.2988C6.37 13.2988 6.24 13.2688 6.12 13.2188C5.99 13.1688 5.89 13.0988 5.79 13.0088C5.61 12.8188 5.5 12.5688 5.5 12.2988C5.5 12.1688 5.53 12.0388 5.58 11.9188C5.63 11.7988 5.7 11.6888 5.79 11.5888C5.89 11.4988 5.99 11.4288 6.12 11.3788C6.48 11.2288 6.93 11.3088 7.21 11.5888C7.39 11.7788 7.5 12.0388 7.5 12.2988C7.5 12.3588 7.49 12.4288 7.48 12.4988C7.47 12.5588 7.45 12.6188 7.42 12.6788C7.4 12.7388 7.37 12.7988 7.33 12.8588C7.3 12.9088 7.25 12.9588 7.21 13.0088C7.02 13.1888 6.76 13.2988 6.5 13.2988Z" fill="#ED1C24"/>
                                        <path d="M10 13.2988C9.87 13.2988 9.74 13.2688 9.62 13.2188C9.49 13.1688 9.39 13.0988 9.29 13.0088C9.11 12.8188 9 12.5688 9 12.2988C9 12.1688 9.03 12.0388 9.08 11.9188C9.13 11.7988 9.2 11.6888 9.29 11.5888C9.39 11.4988 9.49 11.4288 9.62 11.3788C9.98 11.2188 10.43 11.3088 10.71 11.5888C10.89 11.7788 11 12.0388 11 12.2988C11 12.3588 10.99 12.4288 10.98 12.4988C10.97 12.5588 10.95 12.6188 10.92 12.6788C10.9 12.7388 10.87 12.7988 10.83 12.8588C10.8 12.9088 10.75 12.9588 10.71 13.0088C10.52 13.1888 10.26 13.2988 10 13.2988Z" fill="#ED1C24"/>
                                        <path d="M13.5 13.2988C13.37 13.2988 13.24 13.2688 13.12 13.2188C12.99 13.1688 12.89 13.0988 12.79 13.0088C12.75 12.9588 12.71 12.9088 12.67 12.8588C12.63 12.7988 12.6 12.7388 12.58 12.6788C12.55 12.6188 12.53 12.5588 12.52 12.4988C12.51 12.4288 12.5 12.3588 12.5 12.2988C12.5 12.0388 12.61 11.7788 12.79 11.5888C12.89 11.4988 12.99 11.4288 13.12 11.3788C13.49 11.2188 13.93 11.3088 14.21 11.5888C14.39 11.7788 14.5 12.0388 14.5 12.2988C14.5 12.3588 14.49 12.4288 14.48 12.4988C14.47 12.5588 14.45 12.6188 14.42 12.6788C14.4 12.7388 14.37 12.7988 14.33 12.8588C14.3 12.9088 14.25 12.9588 14.21 13.0088C14.02 13.1888 13.76 13.2988 13.5 13.2988Z" fill="#ED1C24"/>
                                        <path d="M6.5 16.7988C6.37 16.7988 6.24 16.7688 6.12 16.7188C6 16.6688 5.89 16.5988 5.79 16.5088C5.61 16.3188 5.5 16.0588 5.5 15.7988C5.5 15.6688 5.53 15.5388 5.58 15.4188C5.63 15.2888 5.7 15.1788 5.79 15.0888C6.16 14.7188 6.84 14.7188 7.21 15.0888C7.39 15.2788 7.5 15.5388 7.5 15.7988C7.5 16.0588 7.39 16.3188 7.21 16.5088C7.02 16.6888 6.76 16.7988 6.5 16.7988Z" fill="#ED1C24"/>
                                        <path d="M10 16.7988C9.74 16.7988 9.48 16.6888 9.29 16.5088C9.11 16.3188 9 16.0588 9 15.7988C9 15.6688 9.03 15.5388 9.08 15.4188C9.13 15.2888 9.2 15.1788 9.29 15.0888C9.66 14.7188 10.34 14.7188 10.71 15.0888C10.8 15.1788 10.87 15.2888 10.92 15.4188C10.97 15.5388 11 15.6688 11 15.7988C11 16.0588 10.89 16.3188 10.71 16.5088C10.52 16.6888 10.26 16.7988 10 16.7988Z" fill="#ED1C24"/>
                                        <path d="M13.5 16.7989C13.24 16.7989 12.98 16.6889 12.79 16.5089C12.7 16.4189 12.63 16.3089 12.58 16.1789C12.53 16.0589 12.5 15.9289 12.5 15.7989C12.5 15.6689 12.53 15.5389 12.58 15.4189C12.63 15.2889 12.7 15.1789 12.79 15.0889C13.02 14.8589 13.37 14.7489 13.69 14.8189C13.76 14.8289 13.82 14.8489 13.88 14.8788C13.94 14.8989 14 14.9289 14.06 14.9689C14.11 14.9989 14.16 15.0489 14.21 15.0889C14.39 15.2789 14.5 15.5389 14.5 15.7989C14.5 16.0589 14.39 16.3189 14.21 16.5089C14.02 16.6889 13.76 16.7989 13.5 16.7989Z" fill="#ED1C24"/>
                                        <path d="M18.5 8.63879H1.5C1.09 8.63879 0.75 8.29879 0.75 7.88879C0.75 7.47879 1.09 7.13879 1.5 7.13879H18.5C18.91 7.13879 19.25 7.47879 19.25 7.88879C19.25 8.29879 18.91 8.63879 18.5 8.63879Z" fill="#ED1C24"/>
                                        <path d="M14 21.5488H6C2.35 21.5488 0.25 19.4488 0.25 15.7988V7.29883C0.25 3.64883 2.35 1.54883 6 1.54883H14C17.65 1.54883 19.75 3.64883 19.75 7.29883V15.7988C19.75 19.4488 17.65 21.5488 14 21.5488ZM6 3.04883C3.14 3.04883 1.75 4.43883 1.75 7.29883V15.7988C1.75 18.6588 3.14 20.0488 6 20.0488H14C16.86 20.0488 18.25 18.6588 18.25 15.7988V7.29883C18.25 4.43883 16.86 3.04883 14 3.04883H6Z" fill="#ED1C24"/>
                                    </svg>
                                </figure>
                                <span>
                                    <?php echo get_the_date('d/m/Y'); ?>
                                </span>
                            </div>
                            <div class="name">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>