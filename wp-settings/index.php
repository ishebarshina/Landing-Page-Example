<?php get_header(); ?>
    <section class="about" id="about" style="background-image: url(<?= CFS()->get('buildings_white');?>), url(<?= CFS()->get('buildings_dark');?>);">
        <div class="container">
            <div class="about__inner">
                <?php 
                    $loop = CFS()->get('card');
                    foreach ($loop as $row) {
                        ?>
                        <div class="about__item">
                            <div class="about__year">
                                <?= $row['card_year'] ?>
                            </div>
                            <div class="about__text">
                                <?= $row['card_text'] ?>
                            </div>
                        </div>
                        <?php
                    }
                ?>
                
            </div>
        </div>
    </section>
    <section class="team" id="team">
        <div class="container">
            <h2 class="block__title"><?= CFS()->get('team_title'); ?></h2>
            <p class="block__text"><?= CFS()->get('team_desc'); ?></p>
            <div class="team__inner">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    $loop = CFS()->get('team_card');
                    foreach ($loop as $member) {
                       ?>
                        <div class="swiper-slide">
                            <div class="team__item">
                                <img src="<?= $member['team_img']; ?>" alt="mark">
                                <div class="team__name">
                                    <?= $member['team_name']; ?>
                                </div>
                                <div class="team__desc">
                                <?= $member['team_post']; ?>
                                </div>
                                <div class="team__link">
                                    <?php
                                        if(isset($member['team_inst']['url'])) {
                                            ?>
                                            <a href="<?= $member['team_inst']['url']; ?>" target="<?= $member['team_inst']['target']; ?>">
                                                <i class="icon-instagram"></i>
                                            </a>
                                            <?php
                                        }
                                    ?>
                                    <?php
                                        if(isset($member['team_twitter']['url'])) {
                                            ?>
                                            <a href="<?= $member['team_twitter']['url']; ?>" target="<?= $member['team_twitter']['target']; ?>">
                                                <i class="icon-twitter"></i>
                                            </a>
                                            <?php
                                        }
                                    ?>
                                    <?php
                                        if(isset($member['team_VK']['url'])) {
                                            ?>
                                            <a href="<?= $member['team_VK']['url']; ?>" target="<?= $member['team_VK']['target']; ?>">
                                                <i class="icon-vkontakte"></i>
                                            </a>
                                            <?php
                                        }
                                    ?>
                                    <?php
                                        if(isset($member['team_facebook']['url'])) {
                                            ?>
                                            <a href="<?= $member['team_facebook']['url']; ?>" target="<?= $member['team_facebook']['target']; ?>">
                                                <i class="icon-facebook"></i>
                                            </a>
                                            <?php
                                        }
                                    ?>    
                                </div>
                            </div>
                        </div>
                       <?php
                    }
                    ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            </div>
        </div>
    </section>
    <section class="services" id="services">
        <div class="container">
            <h2 class="block__title">We provide you everything</h2>
            <p class="block__text">Maybe not everything, but we provide you some stuff.</p>
            <div class="services__inner">
                <div class="services__item">
                    <div class="img">
                        <img src="img/graph.png" alt="graph">
                    </div>
                    <div class="services__name">Some Analytics</div>
                    <div class="services__desc">Aenean nisi lectus, convallis non lorem sit amet, rhoncus malesuada justo</div>
                </div>
                <div class="services__item">
                    <div class="img">
                        <img src="img/heart.png" alt="heart">
                    </div>
                    <div class="services__name">We provide you love</div>
                    <div class="services__desc">Aenean nisi lectus, convallis non lorem sit amet, rhoncus malesuada justo</div>
                </div>
                <div class="services__item">
                    <div class="img">
                        <img src="img/cloud.png" alt="cloud">
                    </div>
                    <div class="services__name">And Some Cloud</div>
                    <div class="services__desc">Aenean nisi lectus, convallis non lorem sit amet, rhoncus malesuada justo</div>
                </div>
            </div>
        </div>
    </section>
    <section class="contacts" id="contacts">
        <div class="container">
            <div class="block__title">Contact Us</div>
            <p class="block__text">We know what we need to do</p>
            <div class="contacts__inner">
                <div class="contacts__item">
                    <a href="tel:555222333"><img src="img/phone.png" alt="phone"></a>
                    <a href="tel:555222333" class="contacts__desc">555-222-333</a>
                </div>
                <div class="contacts__item">
                    <a href="#">
                        <img src="img/pin.png" alt="pin">
                    </a>
                    <a href="#" class="contacts__desc">Here is some address</a>
                </div>
                <div class="contacts__item">
                    <a href="mailto: somemail@hotmail.com">
                        <img src="img/mai.png" alt="mail">
                    </a>
                    <a href="mailto: somemail@hotmail.com" class="contacts__desc">somemail@hotmail.com</a>
                </div>
            </div>
            <form class="contacts__form">
                <input class="contacts__name" type="text" placeholder="Full Name">
                <input class="contacts__email" type="email" placeholder="Email">
                <input class="contacts__number" type="phone" placeholder="Number">
                <textarea class="contact__text" name="" id="" placeholder="Write your Message here..."></textarea>
                <button class="contact_btn">
                    Submit
                </button>
            </form>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>