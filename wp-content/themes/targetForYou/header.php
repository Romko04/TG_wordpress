<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TargetForYou</title>
    <link rel="icon" type="image/svg+xml" href="<?php bloginfo('template_url');?>/assets/img/icons/logoSmall.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <?php 
        wp_head()
    ?>
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1075999587117691');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1075999587117691&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body class="">
    <div class="wrapper">
        <header class="header">
            <div class="header__container container">
                <div class="header__logo">
                    <?php the_custom_logo() ?>
                </div>
                <div class="header__menu-tel">
                    <a title="Подзвонити" class="header__menu-link header__menu-link--tel"
                        href="tel:<?php echo get_field("phone_number");?>">
                        <img class="header__tel-img" src="<?php bloginfo('template_url');?>/assets/img/icons/tel.svg" alt="telIcon">
                    </a>
                    <a class="header__menu-link header__menu-link--text" href="tel:<?php echo get_field("phone_number");?>"><?php echo get_field("phone");?></a>
                </div>
                <nav class="header__menu">
                    <nav class="menu__body">
                        <ul class="header__menu-items">
                            <li class="header__menu-item"><a class="header__menu-link menu__link-active anchor"
                                    href="#about">Про мене</a></li>
                            <li class="header__menu-item"><a class="header__menu-link anchor"
                                    href="#services">Послуги</a></li>
                            <li class="header__menu-item"><a class="header__menu-link anchor" href="#portfolio">Наші
                                    роботи</a></li>
                            <li class="header__menu-item"><a class="header__menu-link anchor" href="#team">Команда</a>
                            </li>
                            <li class="header__menu-item"><a class="header__menu-link anchor" href="#price">Вартість</a>
                            </li>
                            <li class="header__menu-item"><a class="header__menu-link anchor"
                                    href="#contacts">Контакти</a></li>
                        </ul>
                    </nav>
                </nav>
                <button class="header__burger"><span></span></button>
            </div>
        </header>
