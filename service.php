<?php $data["title"] = "Dich vu"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Slide-->
<div class="home__boxSlider uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 1366:420; animation: push; min-height: 420;">

    <ul class="uk-slideshow-items">
        <li>
            <img src="images/Layer2.png" alt="" uk-cover>
            <div class="uk-position-cover uk-flex uk-flex-middle">
                <div class="uk-width-1-1">
                    <div class="uk-container">
                        <div uk-grid>
                            <div class="uk-width-1-2@m">
                                <div class="uk-text-center" uk-scrollspy="target: > *; cls: uk-animation-slide-bottom; delay: 500; repeat: true;">
                                    <h2 class="home__boxSlider__box1__title uk-text-uppercase">" FLYERS <span>& LEAFLETS</span></h2>
                                    <p class="home__boxSlider__box1__desc">Our A5 flyers and leaflets are our bestselling size. This is because they're perfect for potential prospects to carry around and are extremely cost effective. We currently have an offer of 1000 flyers and leaflets for only £ 24!</p>
                                    <a href="" class="home__boxSlider__box1__btn uk-button uk-button-default uk-border-pill">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <img src="images/dark.jpg" alt="" uk-cover>
            <div class="uk-position-cover uk-flex uk-flex-middle">
                <div class="uk-width-1-1">
                    <div class="uk-container">
                        <div uk-grid>
                            <div class="uk-width-1-2@m">
                                <div class="uk-text-center" uk-scrollspy="target: > *; cls: uk-animation-slide-bottom; delay: 500; repeat: true;">
                                    <h2 class="home__boxSlider__box1__title uk-text-uppercase">" FLYERS <span>& LEAFLETS</span></h2>
                                    <p class="home__boxSlider__box1__desc">Our A5 flyers and leaflets are our bestselling size. This is because they're perfect for potential prospects to carry around and are extremely cost effective. We currently have an offer of 1000 flyers and leaflets for only £ 24!</p>
                                    <a href="" class="home__boxSlider__box1__btn uk-button uk-button-default uk-border-pill">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <img src="images/light.jpg" alt="" uk-cover>
            <div class="uk-position-cover uk-flex uk-flex-middle">
                <div class="uk-width-1-1">
                    <div class="uk-container">
                        <div uk-grid>
                            <div class="uk-width-1-2@m">
                                <div class="uk-text-center" uk-scrollspy="target: > *; cls: uk-animation-slide-bottom; delay: 500; repeat: true;">
                                    <h2 class="home__boxSlider__box1__title uk-text-uppercase">" FLYERS <span>& LEAFLETS</span></h2>
                                    <p class="home__boxSlider__box1__desc">Our A5 flyers and leaflets are our bestselling size. This is because they're perfect for potential prospects to carry around and are extremely cost effective. We currently have an offer of 1000 flyers and leaflets for only £ 24!</p>
                                    <a href="" class="home__boxSlider__box1__btn uk-button uk-button-default uk-border-pill">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin uk-position-bottom"></ul>

</div>
<!--/Slide-->

<!--DỊCH VỤ CỦA CHÚNG TÔI-->
<div class="uk-section home__boxDichvu">
    <div class="uk-container">
        <h2 class="uk-h2 uk-text-uppercase uk-text-center home__boxTitle"><span class="home__boxTitle__inlineBlock uk-display-inline-block uk-position-relative"><span class="home__boxTitle__txt">DỊCH VỤ</span> CỦA CHÚNG TÔI</span></h2>
        <div class="uk-child-width-1-1 uk-child-width-1-3@m uk-grid-10 uk-grid-32-m home__boxDichvu__grid" uk-grid>
            <?php
            $data = array(
                array(
                    'src' => 'images/service/img1.png',
                    'txt' => 'In Thùng Carton',
                ),
                array(
                    'src' => 'images/service/img2.png',
                    'txt' => 'In Túi Giấy',
                ),
                array(
                    'src' => 'images/service/img3.png',
                    'txt' => 'In Catalogue',
                ),
                array(
                    'src' => 'images/service/img4.png',
                    'txt' => 'In Túi Giấy',
                ),
                array(
                    'src' => 'images/service/img5.png',
                    'txt' => 'In Túi Giấy',
                ),
                array(
                    'src' => 'images/service/img6.png',
                    'txt' => 'In Túi Giấy',
                ),
            );
            foreach ($data as $k=> $v): ?>
            <div>
                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                    <div class="uk-overflow-hidden">
                        <div class="home__boxDichvu__boxImg uk-cover-container uk-border-rounded uk-transition-scale-up uk-transition-opaque">
                            <img class="" src="<?= $v['src'] ?>" alt="" uk-cover>
                            <canvas width="738" height="496"></canvas>
                        </div>
                    </div>
                    <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">

                    </div>
                    <div class="uk-position-center uk-text-center uk-light">
                        <div class="uk-transition-slide-top-small"><h4 class="uk-text-uppercase home__boxDichvu__txt"><?= $v['txt'] ?></h4></div>
                        <div class="uk-transition-slide-bottom-small"><a href="service-detail.php" class="home__boxDichvu__btn uk-button uk-button-secondary uk-border-pill" data-src="images/bg1_btn.png" uk-img>Xem chi tiết</a></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="uk-text-center">
            <a href="" class="home__boxDichvu__btnLoadmore uk-button uk-button-secondary uk-border-pill" data-src="images/bg2_btn.png" uk-img>Xem tất cả</a>
        </div>
    </div>
</div>
<!--/DỊCH VỤ CỦA CHÚNG TÔI-->

<!--Brand-->
<div class="uk-section-small home__boxBrand">
    <div class="uk-container">
        <div uk-slider>

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light">
                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-5@m uk-flex-middle" uk-grid>
                        <li>
                            <img src="images/brand/img1.png" alt="">
                        </li>
                        <li>
                            <img src="images/brand/img2.png" alt="">
                        </li>
                        <li>
                            <img src="images/brand/img3.png" alt="">
                        </li>
                        <li>
                            <img src="images/brand/img4.png" alt="">
                        </li>
                        <li>
                            <img src="images/brand/img5.png" alt="">
                        </li>
                    </ul>
                </div>

                <div class="uk-hidden@s">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden@s"></ul>

        </div>
    </div>
</div>
<!--/Brand-->

<?php require "template-parts/layouts/footer.php"; ?>