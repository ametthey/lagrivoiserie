<?php
/*
 * Template Name: Welcome
 *
 * @use page d'accueil du site
 */
get_header(); ?>

<div class="container">
    <div class="welcome">
        <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/logo-title.jpg" alt="">
        <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/logo.jpg" alt="">
        <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/chevron.svg" alt="">
    </div>
    <div class="restaurant restaurant__desktop">
        <div class="restaurant__desktop__container">
            <div class="desktop__reservation">
                <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/reservation.svg" alt="">
                <h1>RÉSERVATION</h1>
                <p><?php the_field('reservation'); ?></p>
            </div>
            <div class="desktop__horaires">
                <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/horaires.svg" alt="">
                <h1>HORAIRES
                </h1>
                <p><?php the_field('horaires'); ?></p>
            </div>
            <div class="desktop__menu">
                <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/menu.svg" alt="">
                <h1>MENU</h1>
                <p><?php the_field('menu');?></p>
            </div>
        </div>
        <footer>
            <div class="desktop__social">
                <div class="social__item">
                    <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/instagram.svg" alt="">
                    <a href="<?php the_field('instagram'); ?>" target="_blank">INSTAGRAM</a>
                </div>
                <div class="social__item">
                    <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/map.svg" alt="">
                    <a href="<?php the_field('google_maps'); ?>" target="_blank">MAPS</a>
                </div>
                <div class="social__item">
                    <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/appeler.svg" alt="">
                    <a href="tel:+33<?php the_field('telephone'); ?>">APPELER</a>
                </div>
            </div>
            <div class="desktop__adress">
                <p>La Grivoiserie  -  3 rue sainte Beuve  75006 Paris  -  <?php the_field('telephone'); ?></p>
            </div>
        </footer>
    </div>

    <!-- tablet & mobile  -->

    <!-- Mobile Réservation -->
    <div class="responsive responsive__reservation">
        <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/reservation.svg" alt="">
        <h1>RÉSERVATION</h1>
        <p><?php the_field('reservation'); ?></p>
        <footer>
            <div class="desktop__social">
                <div class="social__item">
                    <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/instagram.svg" alt="">
                    <a href="<?php the_field('instagram'); ?>" target="_blank">INSTAGRAM</a>
                </div>
                <div class="social__item">
                    <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/map.svg" alt="">
                    <a href="<?php the_field('google_maps'); ?>" target="_blank">MAPS</a>
                </div>
                <div class="social__item">
                    <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/appeler.svg" alt="">
                    <a href="tel:+33<?php the_field('telephone'); ?>">APPELER</a>
                </div>
            </div>

        </footer>
        <img class="chevron" src="/wp-content/uploads/2020/05/chevron.svg" alt="">
    </div>

    <!-- Mobiles horaires -->
    <div class="responsive responsive__horaires">
        <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/horaires.svg" alt="">
        <h1>HORAIRES
        </h1>
        <p><?php the_field('horaires'); ?></p>
        <footer>
            <div class="desktop__social">
                <div class="social__item">
                    <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/instagram.svg" alt="">
                    <a href="<?php the_field('instagram'); ?>" target="_blank">INSTAGRAM</a>
                </div>
                <div class="social__item">
                    <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/map.svg" alt="">
                    <a href="<?php the_field('google_maps'); ?>" target="_blank">MAPS</a>
                </div>
                <div class="social__item">
                    <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/appeler.svg" alt="">
                    <a href="tel:+33<?php the_field('telephone'); ?>">APPELER</a>
                </div>
            </div>
        </footer>
        <img class="chevron" src="/wp-content/uploads/2020/05/chevron.svg" alt="">
    </div>

    <!-- Mobile Menu -->
    <div class="responsive responsive__menu">
        <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/menu.svg" alt="">
        <h1>MENU</h1>
        <p><?php the_field('menu'); ?></p>
        <footer>
            <div class="desktop__social">
                <div class="social__item">
                    <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/instagram.svg" alt="">
                    <a href="<?php the_field('instagram'); ?>" target="_blank">INSTAGRAM</a>
                </div>
                <div class="social__item">
                    <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/map.svg" alt="">
                    <a href="<?php the_field('google_maps'); ?>" target="_blank">MAPS</a>
                </div>
                <div class="social__item">
                    <img src="/wp-content/themes/lagrivoiserie/dist/assets/images/appeler.svg" alt="">
                    <a href="tel:+33<?php the_field('telephone'); ?>">APPELER</a>
                </div>
            </div>

        </footer>
        <img class="chevron" src="/wp-content/uploads/2020/05/chevron.svg" alt="">
    </div>
</div>


<?php get_footer(); ?>
