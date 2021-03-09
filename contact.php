<?php $data["title"] = "Lien he"; ?>
<?php $is_home = false; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Breadcrumb-->
<div class="productDetail__boxBreadcrumd uk-background-norepeat uk-text-center uk-background-cover uk-background-center-center" uk-parallax="bgy: -10" data-src="images/bg_breadcrumd.png" uk-img>
    <div class="uk-section-xsmall productDetail__boxBreadcrumd__mask">
        <div class="uk-container">
            <h3 class="uk-h3 uk-margin-remove productDetail__boxBreadcrumd__title">Liên hệ</h3>
            <ul class="uk-breadcrumb uk-margin-remove">
                <li><a href="">Trang chủ</a></li>
                <li><span>Liên hệ</span></li>
            </ul>
        </div>
    </div>
</div>
<!--/Breadcrumb-->

<!--Maps-->
<div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29799.6182415684!2d105.86041725!3d20.994549900000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1615054878389!5m2!1svi!2s" width="100%" height="363" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<!--/Maps-->

<div class="uk-section contact__section1">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m" uk-grid>
            <div>
                <figure>
                    <img src="images/logo.png" alt="">
                </figure>
                <ul class="uk-list">
                    <li>
                        <div class="uk-grid-10" uk-grid>
                            <div class="uk-width-auto">
                                <span uk-icon="icon: home; ratio: 1"></span>
                            </div>
                            <div class="uk-width-expand">
                                <span class="footer__txt">449 Nguyễn Oanh, Phường 17, Quận Gò Vấp, TP. HCM</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid-10" uk-grid>
                            <div class="uk-width-auto">
                                <span uk-icon="icon: receiver; ratio: 1"></span>
                            </div>
                            <div class="uk-width-expand">
                                <span class="footer__txt">+84 964 794 699</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid-10" uk-grid>
                            <div class="uk-width-auto">
                                <span uk-icon="icon: mail; ratio: 1"></span>
                            </div>
                            <div class="uk-width-expand">
                                <span class="footer__txt">info.inhopgiayre@gmail.com</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="uk-child-width-auto uk-grid-small uk-flex-middle" uk-grid>
                    <div>
                        <?php $ratio = 0.6; ?>
                        <div class="uk-grid-5" uk-grid>
                            <div>
                                <a href="" class="uk-icon-button footer__social" uk-tooltip="Twitter" uk-icon="icon: twitter; ratio: <?= $ratio ?>"></a>
                            </div>
                            <div>
                                <a href="" class="uk-icon-button footer__social" uk-tooltip="Facebook" uk-icon="icon: facebook; ratio: <?= $ratio ?>"></a>
                            </div>
                            <div>
                                <a href="" class="uk-icon-button footer__social" uk-tooltip="Google" uk-icon="icon: google-plus; ratio: <?= $ratio ?>"></a>
                            </div>
                            <div>
                                <a href="" class="uk-icon-button footer__social" uk-tooltip="Instagram" uk-icon="icon: instagram; ratio: <?= $ratio ?>"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <form>
                    <fieldset class="uk-fieldset">
                        <div class="uk-margin">
                            <input class="uk-input contact__section1__input uk-border-rounded" type="text" placeholder="Họ tên (*)">
                        </div>
                        <div class="uk-margin">
                            <input class="uk-input contact__section1__input uk-border-rounded" type="text" placeholder="Phone (*)">
                        </div>
                        <div class="uk-margin">
                            <input class="uk-input contact__section1__input uk-border-rounded" type="text" placeholder="Địa chỉ ...">
                        </div>
                        <div class="uk-margin">
                            <textarea class="uk-textarea contact__section1__input uk-border-rounded" rows="5" placeholder="Nội dung liên hệ (*)"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="header__btn uk-button uk-button-default uk-border-pill uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/bg1_btn.png" uk-img="">Gửi thông tin liên hệ</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

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