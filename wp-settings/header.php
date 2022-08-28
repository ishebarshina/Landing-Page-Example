<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title задается в админке на главной странице -->
    <title><?php the_title(); ?></title> 
    <?php wp_head(); ?>
</head>
<body>
    <?php wp_body_open(); ?>
    <header class="header">
        <div class="container">
            <nav class="menu__desctop">
                <ul class="menu">
                    <li class="menu__item"><a href="<?= get_home_url();?>" class="active">Home</a></li>
                    <li class="menu__item"><a href="#about">About Us</a></li>
                    <li class="menu__item"><a href="#team">Team</a></li>
                    <li class="menu__item"><?php the_custom_logo(); ?></li>
                    <li class="menu__item"><a href="#services">Services</a></li>
                    <li class="menu__item"><a href="#">Blog</a></li>
                    <li class="menu__item"><a href="#contacts">Contact Us</a></li>
                </ul>
            </nav>
            <div class="menu__mobile">
                <div class="menu__mobile-inner">
                    <?php the_custom_logo(); ?>
                    <div class="menu__burger"><span></span></div>
                </div>                              
                <ul class="menu">
                    <li class="menu__item active"><a href="<?= get_home_url();?>">Home</a></li>
                    <li class="menu__item"><a href="#about">About Us</a></li>
                    <li class="menu__item"><a href="#team">Team</a></li>
                    <li class="menu__item"><a href="#services">Services</a></li>
                    <li class="menu__item"><a href="#">Blog</a></li>
                    <li class="menu__item"><a href="#contants">Contact Us</a></li>
                </ul>
            </div>
            <div class="header__content">
                <!-- Берем текст из CFS plugin -->
                <h1 class="header__title"><?= CFS()->get('header_title') ?></h1> 
                <p class="header__text"><?= CFS()->get('header_slogan') ?></p>
                <a href="#about" class="header__btn"><?= CFS()->get('header_button') ?></a>
            </div>
        </div>
    </header>