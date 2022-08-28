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
            <h2 class="block__title"><?= CFS()->get('services_title'); ?></h2>
            <p class="block__text"><?= CFS()->get('services_subtitle'); ?></p>
            <div class="services__inner">
                <?php
                    $loop = CFS()->get('services_card');
                    foreach ($loop as $card) {
                ?>
                    <div class="services__item">
                        <div class="img">
                            <img src="<?= $card['services_card_img']; ?>" alt="services_card_img">
                        </div>
                        <div class="services__name"><?= $card['services_card_title']; ?></div>
                        <div class="services__desc"><?= $card['services_card_text']; ?></div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <section class="contacts" id="contacts">
        <div class="container">
            <h2 class="block__title"><?= CFS()->get('contacts_title'); ?></h2>
            <p class="block__text"><?= CFS()->get('contacts_subtitle'); ?></p>
            <div class="contacts__inner">
                <div class="contacts__item">
                    <a href="tel:<?= CFS()->get('contacts_phone'); ?>"><img src="<?= CFS()->get('img_phone'); ?>" alt="phone"></a>
                    <a href="tel:<?= CFS()->get('contacts_phone'); ?>" class="contacts__desc"><?= CFS()->get('contacts_phone'); ?></a>
                </div>
                <div class="contacts__item">
                    <a href="#">
                        <img src="<?= CFS()->get('img_map'); ?>" alt="pin">
                    </a>
                    <!-- print_r(CFS()->get('contacts_map'));
                    Array
                    (
                        [url] => http://maps.com
                        [text] => Here is some address
                        [target] => _blank
                    ) -->  
                    <?php
                        if(!empty(CFS()->get('contacts_map')['url'])) {
                    ?>
                        <a href="<?= CFS()->get('contacts_map')['url']; ?>" class="contacts__desc" target="<?= CFS()->get('contacts_map')['target']; ?>">
                            <?= CFS()->get('contacts_map')['text'] ?>
                        </a>
                    <?php
                        }
                    ?>
                </div>
                <div class="contacts__item">
                    <a href="mailto: somemail@hotmail.com">
                        <img src="<?= CFS()->get('img_mail'); ?>" alt="mail">
                    </a>
                    <a href="mailto: somemail@hotmail.com" class="contacts__desc"><?= CFS()->get('contacts_mail'); ?></a>
                </div>
            </div>
            <!-- <form class="contacts__form">
                <input class="contacts__name" type="text" placeholder="Full Name">
                <input class="contacts__email" type="email" placeholder="Email">
                <input class="contacts__number" type="phone" placeholder="Number">
                <textarea class="contact__text" name="" id="" placeholder="Write your Message here..."></textarea>
                <button class="contact_btn">
                    Submit
                </button>
            </form> -->
            <?php the_content(); ?>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>