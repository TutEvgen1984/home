<?php get_header(); ?>
<!-- функция подключает header.php -->

<div class="about" id="about" style="background: url(<?= CFS()->get('background_white'); ?>) center 100% repeat-x,
        url(<?= CFS()->get('background_black'); ?>) center 100% repeat-x,
        #1d1d1d;">
    <div class="container">
        <div class="about__inner">
            <?php
            $loop = CFS()->get('team_card');
            foreach ($loop as $row) {
            ?>
                <div class="about__item">
                    <div class="about__year"><?= $row['card_year'] ?></div>
                    <div class="about__text"><?= $row['card_text'] ?></div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</div>
<div class="team" id="team">
    <div class="container">
        <div class="block__head">
            <h2 class="block__title"><?php CFS()->get('team_title') ?></h2>
            <p class="block__text"><?php CFS()->get('team_description') ?></p>
        </div>
        <div class="team__inner">

            <!-- Swiper -->
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php
                    $loop = CFS()->get('team_card2');
                    foreach ($loop as $row) {
                    ?>
                        <div class="swiper-slide">
                            <div class="team__item">
                                <img class="team__item-img" src="<?= $row['team_img'] ?>" alt="">
                                <h3 class="team__item-title"><?= $row['team_name'] ?></h3>
                                <p class="team__item-text"><?= $row['team_post'] ?></p>
                                <div class="team__icon-box">

                                    <?php if (!empty($row['team_twetter']['url'])) { ?>
                                        <a href="<?= $row['team_twetter']['url'] ?>" target="<?= $row['team_twetter']['target'] ?> "><i class="icon-twitter"></i></a>
                                    <?php } ?>

                                    <?php if (!empty($row['team_instagram']['url'])) { ?>
                                        <a href="<?= $row['team_instagram']['url'] ?>" target="<?= $row['team_instagram']['target'] ?> "><i class="icon-instagram"></i></a>
                                    <?php } ?>

                                    <?php if (!empty($row['team_vk']['url'])) { ?>
                                        <a href="<?= $row['team_vk']['url'] ?>" target="<?= $row['team_vk']['target'] ?>"><i class="icon-instagram"></i></a>
                                    <?php } ?>

                                    <?php if (!empty($row['team_facebook']['url'])) { ?>
                                        <a href="<?= $row['team_facebook']['url'] ?>" target="<?= $row['team_facebook']['target'] ?>"><i class="icon-instagram"></i></a>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>

        </div>
    </div>
</div>
<div class="provide" id="provide">
    <div class="container">
        <div class="block__head inverse">
            <h2 class="block__title"><?= CFS()->get('provide_title'); ?></h2>
            <p class="block__text"><?= CFS()->get('provide_text'); ?></p>
        </div>
        <div class="provide__inner">
            <?php
            $loop = CFS()->get('provide_card');
            foreach ($loop as $row) {
            ?>
                <div class="provide__item">
                    <img src="<?= $row['provide_card_img'] ?>" alt="">
                    <h3 class="provide__item-title"><?= $row['provide_card_title'] ?></h3>
                    <p class="provide__item-text"><?= $row['provide_card_text'] ?></p>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
</div>
<div class="contact" id="contact">
    <div class="container">
        <div class="block__head">
            <h2 class="block__title">Contact Us</h2>
            <p class="block__text">We know what we need to do</p>
        </div>
        <div class="contact__inner">
            <div class="contact__icon-box">
                <div class="contact__item">
                    <i class="icon-phone"></i>
                    <div class="contact__text"><a href="tel:555222333">555-222-333</a></div>
                </div>
                <div class="contact__item">
                    <i class="icon-location"></i>
                    <div class="contact__text"><a href="https://goo.gl/maps/ot9BCyYtQbSXoJYRA" target="_blank">Here is some address</a></div>
                </div>
                <div class="contact__item">
                    <i class="icon-mail-alt"></i>
                    <div class="contact__text"><a href="mailto:somemail@hotmail.com">somemail@hotmail.com</a></div>
                </div>
            </div>
            <form action="" class="contact__form">
                <input class="contact__name" type="text" placeholder="Full Name">
                <input class="contact__email" type="email" placeholder="Email">
                <input class="contact__number" type="number" placeholder="Number">
                <textarea class="contact__textarea" placeholder="Write your Message here..."></textarea>
                <input type="submit" class="contact__button" value="Submit">
            </form>
        </div>
    </div>
</div>

<?php get_footer() ?>
<!-- функция подключает footer.php -->