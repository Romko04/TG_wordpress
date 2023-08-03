<?php 
    /*
    Template Name: home
     */
?>
<?php 
    get_header(); 
?>
<main class="main">
            <section class="banner" id="banner">
                <div class="banner__container container">
                    <div class="banner__content">
                        <div class="banner__content-left">
                            <h1 class="banner__title"><?php the_field('banner_title'); ?><span class="backlight"><?php the_field("banner_backlight");?></span></h1>
                            <ul class="banner__text-list">
                            <?php
                                global $post;
                                $myposts = get_posts([ 
                                    'post_type' => "bannner_posts",
                                    'numberposts' => -1,
                                    'offset' => -1,
                                    'category' => -1
                                ]);
                                if( $myposts ){
                                    foreach( $myposts as $post ){
                                        setup_postdata( $post );
                                        ?>
                                        <li class="banner__text-list__item">
                                        <?php
                                        the_post_thumbnail(
                                                    array(25,25),
                                                    array(
                                                        'class'=> 'banner__icon'
                                                    )
                                                    );
                                             ?>

                                            <?php the_content(); ?>
                                        </li>
                                        <?php 
                                    }
                                }
                                wp_reset_postdata(); // Сбрасываем $post
                                ?>
                            </ul>
                            <a class="header__menu-link menu__link-active anchor" href="#contacts"><button
                                    class="banner__btn btn__anchor">Безкоштовна Консультація</button></a>
                        </div>
                        <div class="banner__content-right">
                            <img class="banner__content-img banner__content-img-highligh" src="<?php bloginfo('template_url');?>/assets/img/banner/banner.png"
                                alt="banner">
                        </div>
                    </div>
                </div>
            </section>
            <section class="about" id="about">
                <div class="about__container container">
                    <h2 class="title about__title">Про мене</h2>
                    <div class="about__content">
                        <div class="about__content-left">
                            <img class="about__content-img" src="<?php bloginfo('template_url');?>/assets/img/about/about.jpg" alt="aboutImg">
                        </div>
                        <div class="about__content-right">
                            <?php
                                global $post;
                                $myposts = get_posts([ 
                                    'post_type' => "about_me",
                                    'numberposts' => -1,
                                    'offset' => -1,
                                    'category' => -1
                                ]);
                                if( $myposts ){
                                    foreach( $myposts as $post ){
                                        setup_postdata( $post );
                                        ?>
                                            <div class="about__content-text">
                                                <?php the_content() ?>
                                            </div>
                                        <?php 
                                    }
                                }
                                wp_reset_postdata(); // Сбрасываем $post
                                ?>
                            <div class="socials">
                                <ul class="social__list">
                                    <li class="social__list-item">
                                        <a href="<?php echo get_field("instagram_karina");?>"
                                            class="social__list-link">
                                            <svg class="social__list-img" fill="#344bff" version="1.1" id="Layer_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512"
                                                xml:space="preserve">
                                                <g>
                                                    <path d="M113,446c24.8,0,45.1-20.2,45.1-45.1c0-9.8-3.2-18.9-8.5-26.3c-8.2-11.3-21.5-18.8-36.5-18.8s-28.3,7.4-36.5,18.8
                                                        c-5.3,7.4-8.5,16.5-8.5,26.3C68,425.8,88.2,446,113,446z" />
                                                    <polygon
                                                        points="211.4,345.9 211.4,308.1 211.4,302.5 205.8,302.5 168,302.6 168.2,346 	" />
                                                    <path
                                                        d="M183,401c0,38.6-31.4,70-70,70c-38.6,0-70-31.4-70-70c0-9.3,1.9-18.2,5.2-26.3H10v104.8C10,493,21,504,34.5,504h157
                                                        c13.5,0,24.5-11,24.5-24.5V374.7h-38.2C181.2,382.8,183,391.7,183,401z" />
                                                    <path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M241,374.7v104.8
                                                        c0,27.3-22.2,49.5-49.5,49.5h-157C7.2,529-15,506.8-15,479.5V374.7v-52.3c0-27.3,22.2-49.5,49.5-49.5h157
                                                        c27.3,0,49.5,22.2,49.5,49.5V374.7z" />
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="social__list-item">
                                        <a href="<?php echo get_field("telegram_karina");?>" class="social__list-link">
                                            <svg class="social__list-img" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 496 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <path fill="#344bff"
                                                    d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <section class="services" id="services">
                <div class="container services__container">
                    <h2 class="title services__title">Наші послуги</h2>
                    <div class="services__content">
                        <div class="services__content-items">
                        <?php
                                global $post;
                                $myposts = get_posts([ 
                                    'post_type' => "service",
                                    'numberposts' => -1,
                                    'offset' => -1,
                                    'category' => -1
                                ]);
                                if( $myposts ){
                                    foreach( $myposts as $post ){
                                        setup_postdata( $post );
                                        ?>
                                        <div class="services__content-item">
                                            <div class="services__content-img__wrapper">
                                            <?php
                                                the_post_thumbnail(
                                                    array(720,1280),
                                                    array(
                                                        'class'=> 'services__content-item__img'
                                                    )
                                                    );
                                             ?>
                                            </div>
                                            <h4 class="services__content-item__title"><?php the_title(); ?></h4>
                                            <div class="services__content-item__text">
                                                 <?php the_content(); ?>
                                                </div>
                                            <a class="anchor" href="#contacts">
                                                <button class="services__content-item__btn btn__anchor">Безкоштовна Консультація</button>
                                            </a>
                                        </div>
                                        <?php 
                                    }
                                }
                                wp_reset_postdata(); // Сбрасываем $post
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="portfolio" id="portfolio">
                <div class="container portfolio__container">
                    <h2 class="title portfolio__title">Портфоліо</h2>
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <?php
                                global $post;

                                $myposts = get_posts([ 
                                    'numberposts' => -1,
                                ]);

                                if( $myposts ){
                                    foreach( $myposts as $post ){
                                        setup_postdata( $post );
                                        ?>
                                        <div class="swiper-slide">
                                            <?php
                                                the_post_thumbnail(
                                                    array(720,1280),
                                                    array(
                                                        'class'=> 'swiper__slie-img'
                                                    )
                                                )
                                             ?>
                                        </div>
                                        <?php 
                                    }
                                }

                                wp_reset_postdata(); // Сбрасываем $post
                                ?>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="portfolio__results">
                        <h2 class="portfolio__results-title">Останні результати</h2>
                        <img class="portfolio__img" src="<?php the_field('portfolio_img');?>" alt="resultsImg">
                    </div>
                </div>
            </section>
            <section class="team" id="team">
                <div class="container team__container">
                    <h2 class="title team__title">Наша команда</h2>
                    <div class="team__content">
                        <div class="team__content-items">
                            <div class="team__content-item">
                                <div class="team__content-item__img-wrapper">
                                <?php
                                $image_data = get_field('team_content_item_img1'); // Отримуємо масив з даними зображення
                                if (is_array($image_data) && isset($image_data['url'])) {
                                    $image_url = $image_data['url']; // Отримуємо URL зображення з масиву
                                    $alt_text = isset($image_data['alt']) ? $image_data['alt'] : 'Зображення команди'; // Отримуємо альтернативний текст або застосовуємо текст за замовчуванням
                                    echo '<img class="team__content-item__img" src="' . $image_url . '" alt="' . $alt_text . '" style="width: 100%; object-fit: cover;">'; // Виводимо тег <img> з URL зображення та альтернативним текстом з заданими стилями
                                }
                                ?>
                                    <div class="team__content-item__social-networks">
                                        <a href="<?php echo get_field("instagram_roman");?>"><img
                                                src="<?php bloginfo('template_url');?>/assets/img/icons/instagram.svg" alt="socialIcon"
                                                class="team__content-item__social-network"></a>
                                        <a href="<?php echo get_field("telegram_roman");?>"><img src="<?php bloginfo('template_url');?>/assets/img/icons/telegram.svg"
                                                alt="socialIcon" class="team__content-item__social-network"></a>
                                    </div>
                                </div>
                                <span class="team__content-item__person"><?php the_field('team_content_item_person1') ?></span>
                                <h4 class="team__content-item__name"><?php the_field('team_content_item_name1') ?></h4>
                                <p class="team__content-item__text"><?php the_field('team_content_item_text1') ?></p>
                                <div class="team__content-item__social-networks--bottom">
                                    <a href="<?php echo get_field("instagram_roman");?>">
                                        <svg class="team__content-item__social-network--bottom" fill="#fff"
                                            version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512"
                                            xml:space="preserve">
                                            <g>
                                                <path d="M113,446c24.8,0,45.1-20.2,45.1-45.1c0-9.8-3.2-18.9-8.5-26.3c-8.2-11.3-21.5-18.8-36.5-18.8s-28.3,7.4-36.5,18.8
                                                c-5.3,7.4-8.5,16.5-8.5,26.3C68,425.8,88.2,446,113,446z" />
                                                <polygon
                                                    points="211.4,345.9 211.4,308.1 211.4,302.5 205.8,302.5 168,302.6 168.2,346 	" />
                                                <path
                                                    d="M183,401c0,38.6-31.4,70-70,70c-38.6,0-70-31.4-70-70c0-9.3,1.9-18.2,5.2-26.3H10v104.8C10,493,21,504,34.5,504h157
                                                c13.5,0,24.5-11,24.5-24.5V374.7h-38.2C181.2,382.8,183,391.7,183,401z" />
                                                <path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M241,374.7v104.8
                                                c0,27.3-22.2,49.5-49.5,49.5h-157C7.2,529-15,506.8-15,479.5V374.7v-52.3c0-27.3,22.2-49.5,49.5-49.5h157
                                                c27.3,0,49.5,22.2,49.5,49.5V374.7z" />
                                            </g>
                                        </svg>
                                    </a>
                                    <a href="<?php echo get_field("telegram_roman");?>">
                                        <svg class="team__content-item__social-network--bottom"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 496 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path fill="#fff"
                                                d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="team__content-item team__content-item--center">
                                <div class="team__content-item__img-wrapper team__content-item__img-wrapper--center">
                                <?php
                                $image_data = get_field('team_content_item_img2'); // Отримуємо масив з даними зображення
                                if (is_array($image_data) && isset($image_data['url'])) {
                                    $image_url = $image_data['url']; // Отримуємо URL зображення з масиву
                                    $alt_text = isset($image_data['alt']) ? $image_data['alt'] : 'Зображення команди'; // Отримуємо альтернативний текст або застосовуємо текст за замовчуванням
                                    echo '<img class="team__content-item__img" src="' . $image_url . '" alt="' . $alt_text . '" style="width: 100%; object-fit: cover;">'; // Виводимо тег <img> з URL зображення та альтернативним текстом з заданими стилями
                                }
                                ?>
                                    <div class="team__content-item__social-networks">
                                        <a href="<?php echo get_field("instagram_karina");?>"><img
                                                src="<?php bloginfo('template_url');?>/assets/img/icons/instagram.svg" alt="socialIcon"
                                                class="team__content-item__social-network"></a>
                                        <a href="<?php echo get_field("telegram_karina");?>"><img src="<?php bloginfo('template_url');?>/assets/img/icons/telegram.svg"
                                                alt="socialIcon" class="team__content-item__social-network"></a>
                                    </div>
                                </div>
                                <span class="team__content-item__person"><?php the_field('team_content_item_person2') ?></span>
                                <h4 class="team__content-item__name"><?php the_field('team_content_item_name2') ?></h4>
                                <p class="team__content-item__text"><?php the_field('team_content_item_text2') ?></p>
                                <div class="team__content-item__social-networks--bottom">
                                    <a href="https://instagram.com/karina.liutak?igshid=MmIzYWVlNDQ5Yg==">
                                        <svg class="team__content-item__social-network--bottom" fill="#fff"
                                            version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512"
                                            xml:space="preserve">
                                            <g>
                                                <path d="M113,446c24.8,0,45.1-20.2,45.1-45.1c0-9.8-3.2-18.9-8.5-26.3c-8.2-11.3-21.5-18.8-36.5-18.8s-28.3,7.4-36.5,18.8
                                                    c-5.3,7.4-8.5,16.5-8.5,26.3C68,425.8,88.2,446,113,446z" />
                                                <polygon
                                                    points="211.4,345.9 211.4,308.1 211.4,302.5 205.8,302.5 168,302.6 168.2,346 	" />
                                                <path
                                                    d="M183,401c0,38.6-31.4,70-70,70c-38.6,0-70-31.4-70-70c0-9.3,1.9-18.2,5.2-26.3H10v104.8C10,493,21,504,34.5,504h157
                                                    c13.5,0,24.5-11,24.5-24.5V374.7h-38.2C181.2,382.8,183,391.7,183,401z" />
                                                <path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M241,374.7v104.8
                                                    c0,27.3-22.2,49.5-49.5,49.5h-157C7.2,529-15,506.8-15,479.5V374.7v-52.3c0-27.3,22.2-49.5,49.5-49.5h157
                                                    c27.3,0,49.5,22.2,49.5,49.5V374.7z" />
                                            </g>
                                        </svg>
                                    </a>
                                    <a href="<?php echo get_field("telegram_karina");?>">
                                        <svg class="team__content-item__social-network--bottom"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 496 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path fill="#fff"
                                                d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="team__content-item">
                                <div class="team__content-item__img-wrapper">
                                <?php
                                $image_data = get_field('team_content_item_img3'); // Отримуємо масив з даними зображення
                                if (is_array($image_data) && isset($image_data['url'])) {
                                    $image_url = $image_data['url']; // Отримуємо URL зображення з масиву
                                    $alt_text = isset($image_data['alt']) ? $image_data['alt'] : 'Зображення команди'; // Отримуємо альтернативний текст або застосовуємо текст за замовчуванням
                                    echo '<img class="team__content-item__img" src="' . $image_url . '" alt="' . $alt_text . '" style="width: 100%; object-fit: cover;">'; // Виводимо тег <img> з URL зображення та альтернативним текстом з заданими стилями
                                }
                                ?>
                                    <div class="team__content-item__social-networks">
                                        <a href="<?php echo get_field("telegram_vlad");?>"><img src="<?php bloginfo('template_url');?>/assets/img/icons/telegram.svg"
                                                alt="socialIcon" class="team__content-item__social-network"></a>
                                    </div>
                                </div>
                                <span class="team__content-item__person"><?php the_field('team_content_item_person3') ?></span>
                                <h4 class="team__content-item__name"><?php the_field('team_content_item_name3') ?></h4>
                                <p class="team__content-item__text"><?php the_field('team_content_item_text3') ?></p>
                                <div class="team__content-item__social-networks--bottom">
                                    <a href="<?php echo get_field("telegram_vlad");?>">
                                        <svg class="team__content-item__social-network--bottom"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 496 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path fill="#fff"
                                                d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="price" id="price">
                <div class="container price__container">
                    <h2 class="title price__title">Наші ціни</h2>
                    <div class="price__content">
                        <div class="price__content-items">
                        <?php
                                global $post;
                                $myposts = get_posts([ 
                                    'post_type' => "prices",
                                    'numberposts' => -1,
                                    'offset' => -1,
                                    'category' => -1
                                ]);
                                if( $myposts ){
                                    foreach( $myposts as $post ){
                                        setup_postdata( $post );
                                        ?>
                                        <div class="price__content-item">
                                            <div class="price__content-img__wrapper">
                                            <?php
                                                the_post_thumbnail(
                                                    array(720,1280),
                                                    array(
                                                        'class'=> 'price__content-item__img'
                                                    )
                                                )
                                             ?>
                                            </div>
                                            <h4 class="price__content-item__title"><?php the_title() ?></h4>
                                            <?php the_content() ?>
                                            <div class="price__content-item-values">
                                                <span class="price__content-item-value"><?php the_field('price_content_item_value') ?>$</span>
                                                <span class="price__content-item-value--crossout"><?php the_field('price__content_item_value_crossout') ?>$</span>
                                            </div>
                                            <a class="anchor" href="#contacts"><button class="price__content-item__btn btn__anchor">Безкоштовна Консультація</button></a>
                                        </div>
                                        <?php 
                                    }
                                }
                                wp_reset_postdata(); // Сбрасываем $post
                            ?>
                            
                        </div>
                    </div>
                </div>
            </section>
            <section class="contacts" id="contacts">
                <div class="container contacts__container">
                    <h2 class="title contacts__title">Залишити заявку для безкоштовної консультацію</h2>
                    <div class="contacts__content">
                        <?php echo do_shortcode('[contact-form-7 id="200" title="Контактна форма 1"]') ?>
                        </form>
                    </div>
                </div>
            </section>
        </main>
<?php 
    get_footer(); 
?>