<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BW Theme</title>
    <?php wp_head(); ?>
</head>
<body>
    <?php wp_body_open(); ?>
    <header class="header">
        <div class="container">
            <nav class="menu__desctop">
                <ul class="menu">
                    <li class="menu__item"><a href="#" class="active">Home</a></li>
                    <li class="menu__item"><a href="#about">About Us</a></li>
                    <li class="menu__item"><a href="#team">Team</a></li>
                    <li class="menu__item"><a href="#">
                        <img src="img/logo.png" alt="logo" class="logo">
                    </a></li>
                    <li class="menu__item"><a href="#services">Services</a></li>
                    <li class="menu__item"><a href="#">Blog</a></li>
                    <li class="menu__item"><a href="#contacts">Contact Us</a></li>
                </ul>
            </nav>
            <div class="menu__mobile">
                <div class="menu__mobile-inner">
                    <a href="#"><img src="img/logo.png" alt="" class="logo"></a>
                    <div class="menu__burger"><span></span></div>
                </div>                              
                <ul class="menu">
                    <li class="menu__item active"><a href="#">Home</a></li>
                    <li class="menu__item"><a href="#about">About Us</a></li>
                    <li class="menu__item"><a href="#team">Team</a></li>
                    <li class="menu__item"><a href="#services">Services</a></li>
                    <li class="menu__item"><a href="#">Blog</a></li>
                    <li class="menu__item"><a href="#contants">Contact Us</a></li>
                </ul>
            </div>
            <div class="header__content">
                <h1 class="header__title">We build it with passion</h1>
                <p class="header__text">Just to be clear, we do this for fun not for you, just kidding.</p>
                <a href="" class="header__btn">READ MORE</a>
            </div>
        </div>
    </header>