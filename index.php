<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Slide-->
<div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider>

    <ul class="uk-slider-items uk-child-width-1-1" uk-grid>
        <li>
            <img class="uk-visible@m" src="https://hopgiayre.vn/upload/imgbanner/in-hop-cung-re-3.jpg" alt="">
            <img class="uk-hidden@m" src="https://hopgiayre.vn/upload/imgbanner/in-hop-cung-re-mobile-414x250mm.jpg" alt="">
        </li>
        <li>
            <img class="uk-visible@m" src="https://hopgiayre.vn/upload/imgbanner/in-hop-cung-re-3.jpg" alt="">
            <img class="uk-hidden@m" src="https://hopgiayre.vn/upload/imgbanner/in-hop-cung-re-mobile-414x250mm.jpg" alt="">
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-position-bottom"></ul>

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
                        <div class="uk-transition-slide-bottom-small"><a href="" class="home__boxDichvu__btn uk-button uk-button-secondary uk-border-pill" data-src="images/bg1_btn.png" uk-img>Xem chi tiết</a></div>
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

<!--Cam ket chat luong, phuc vu nhanh chong,...-->
<div class="home__box01 uk-section uk-overflow-hidden uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/bg_camket.png" uk-img>
    <div class="uk-container">
        <!--Show mobile-->
        <div class="uk-hidden@m" uk-slider>

            <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-4@m" uk-grid>
                    <li>
                        <div class="uk-text-center home__box01__card">
                            <div class="uk-margin-small home__box01__bg uk-border-circle uk-position-relative uk-display-inline-block">
                                <img class="uk-position-center" src="images/box1/quality.png" alt="">
                            </div>
                            <div>
                                <h4 class="uk-h4 home__box01__title">Cam kết chất lượng</h4>
                                <p class="line-clamp-3 home__box01__desc">Sản xuất trên hệ thống máy in offset công nghiệp 5 màu hiện đại từ Nhật Bản. Với dây truyền khép kín, quy trình kiểm soát chất lượng</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-text-center home__box01__card" uk-scrollspy-class="uk-animation-slide-top">
                            <div class="uk-margin-small home__box01__bg uk-border-circle uk-position-relative uk-display-inline-block">
                                <img class="uk-position-center" src="images/box1/fast.png" alt="">
                            </div>
                            <div>
                                <h4 class="uk-h4 home__box01__title">Phục vụ nhanh chóng</h4>
                                <p class="line-clamp-3 home__box01__desc">Sản xuất trên hệ thống máy in offset công nghiệp 5 màu hiện đại từ Nhật Bản. Với dây truyền khép kín, quy trình kiểm soát chất lượng</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-text-center home__box01__card">
                            <div class="uk-margin-small home__box01__bg uk-border-circle uk-position-relative uk-display-inline-block">
                                <img class="uk-position-center" src="images/box1/professional.png" alt="">
                            </div>
                            <div>
                                <h4 class="uk-h4 home__box01__title">Làm việc chuyên nghiệp</h4>
                                <p class="line-clamp-3 home__box01__desc">Sản xuất trên hệ thống máy in offset công nghiệp 5 màu hiện đại từ Nhật Bản. Với dây truyền khép kín, quy trình kiểm soát chất lượng</p>
                            </div>
                        </div>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>
        <!--/Show mobile-->

        <!--Show pc-->
        <div class="uk-visible@m uk-child-width-1-3@m uk-grid-76-m" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: .home__box01__card; delay: 300; repeat: true;">
            <div>
                <div class="uk-text-center home__box01__card">
                    <div class="uk-margin-small home__box01__bg uk-border-circle uk-position-relative uk-display-inline-block">
                        <img class="uk-position-center" src="images/box1/quality.png" alt="">
                    </div>
                    <div>
                        <h4 class="uk-h4 home__box01__title">Cam kết chất lượng</h4>
                        <p class="line-clamp-3 home__box01__desc">Sản xuất trên hệ thống máy in offset công nghiệp 5 màu hiện đại từ Nhật Bản. Với dây truyền khép kín, quy trình kiểm soát chất lượng</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-text-center home__box01__card" uk-scrollspy-class="uk-animation-slide-top">
                    <div class="uk-margin-small home__box01__bg uk-border-circle uk-position-relative uk-display-inline-block">
                        <img class="uk-position-center" src="images/box1/fast.png" alt="">
                    </div>
                    <div>
                        <h4 class="uk-h4 home__box01__title">Phục vụ nhanh chóng</h4>
                        <p class="line-clamp-3 home__box01__desc">Sản xuất trên hệ thống máy in offset công nghiệp 5 màu hiện đại từ Nhật Bản. Với dây truyền khép kín, quy trình kiểm soát chất lượng</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-text-center home__box01__card">
                    <div class="uk-margin-small home__box01__bg uk-border-circle uk-position-relative uk-display-inline-block">
                        <img class="uk-position-center" src="images/box1/professional.png" alt="">
                    </div>
                    <div>
                        <h4 class="uk-h4 home__box01__title">Làm việc chuyên nghiệp</h4>
                        <p class="line-clamp-3 home__box01__desc">Sản xuất trên hệ thống máy in offset công nghiệp 5 màu hiện đại từ Nhật Bản. Với dây truyền khép kín, quy trình kiểm soát chất lượng</p>
                    </div>
                </div>
            </div>
        </div>
        <!--/Show pc-->
    </div>
</div>
<!--/Cam ket chat luong, phuc vu nhanh chong,...-->

<!--SẢN PHẨM CỦA CHÚNG TÔI-->
<div class="uk-section home__boxProduct">
    <div class="uk-container">
        <h2 class="uk-h2 uk-text-uppercase home__boxTitle"><span class="uk-display-inline-block uk-position-relative"><span class="home__boxTitle__txt">SẢN PHẨM</span> CỦA CHÚNG TÔI</span></h2>
        <div class="home__boxDichvu__grid" uk-slider="sets: true;finite: true;">
            <div class="uk-flex-middle home__boxProduct__margin1 uk-grid-small" uk-grid>
                <div class="uk-width-expand">
                    <ul class="uk-subnav uk-subnav-divider home__boxProduct__navFillter uk-visible@m" uk-margin>
                        <li class="uk-active"><a href="#">Tất cả</a></li>
                        <li><a href="#">Business Cards</a></li>
                        <li><a href="#">Postcards</a></li>
                        <li><a href="#">Carbonless Form</a></li>
                        <li><a href="#">Catalogs</a></li>
                        <li><a href="#">Counter Cards</a></li>
                        <li><a href="#">Door Hangers</a></li>
                    </ul>
                    <div class="uk-hidden@m" uk-form-custom="target: > * > span:first-child">
                        <select>
                            <option value="">Tất cả</option>
                            <option value="1">Business Cards</option>
                            <option value="2">Postcards</option>
                            <option value="3">Carbonless Form</option>
                            <option value="4">Catalogs</option>
                            <option value="3">Counter Cards</option>
                            <option value="4">Door Hangers</option>
                        </select>
                        <button class="uk-button uk-button-default" type="button" tabindex="-1">
                            <span></span>
                            <span uk-icon="icon: chevron-down"></span>
                        </button>
                    </div>
                </div>
                <div class="uk-width-auto">
                    <div class="">
                        <a class="home__boxProduct__nav" href="#" uk-slider-item="previous"><img src="images/left-arrow.png" alt=""></a>
                        <a class="home__boxProduct__nav" href="#" uk-slider-item="next"><img src="images/right-arrow.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="uk-position-relative">

                <div class="uk-slider-container">
                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-12 uk-grid-15-s uk-grid-30-m" uk-grid>
                        <?php for ($i=1;$i<=8;$i++): ?>
                        <li>
                            <div class="uk-child-width-1-1 home__boxProduct__grid1" uk-grid>
                                <?php
                                $data = array(
                                    array(
                                        'src' => 'images/products/img1.png',
                                        'title' => '',
                                        'price' => '',
                                    ),
                                    array(
                                        'src' => 'images/products/img2.png',
                                        'title' => '',
                                        'price' => '',
                                    ),
                                );
                                foreach ($data as $k => $v): ?>
                                    <div>
                                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                            <div class="uk-overflow-hidden uk-margin">
                                                <div class="uk-cover-container uk-transition-scale-up uk-transition-opaque" style="background-color: #ebebeb;">
                                                    <img src="images/products/img<?= $i + 4*$k ?>.png" alt="" uk-cover>
                                                    <canvas width="640" height="640"></canvas>
                                                </div>
                                            </div>
                                            <div class="uk-text-center uk-margin">
                                                <h4 class="home__boxProduct__boxsp__title uk-h4 uk-text-uppercase uk-margin-remove"><a href="product-detail.php">Sổ bìa da gáy còng A5</a></h4>
                                                <div class="home__boxProduct__boxsp__maso">MS: <span>HMP-QT 00006</span></div>
                                            </div>
                                            <div class="uk-flex-center" uk-grid>
                                                <div class="uk-width-5-6@m">
                                                    <div class="home__boxProduct__price uk-border-pill uk-button uk-button-default uk-width-1-1">Giá chỉ từ : <span>20.000đ</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </li>
                        <?php endfor; ?>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light" hidden>
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s" hidden>
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden@s"></ul>

        </div>
        <div hidden class="home__boxDichvu__grid uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-small uk-grid-30-m" uk-grid>
            <?php
            $data = array(
                array(
                    'src' => 'images/products/img1.png',
                    'title' => '',
                    'price' => '',
                ),
                array(
                    'src' => 'images/products/img2.png',
                    'title' => '',
                    'price' => '',
                ),
                array(
                    'src' => 'images/products/img3.png',
                    'title' => '',
                    'price' => '',
                ),
                array(
                    'src' => 'images/products/img4.png',
                    'title' => '',
                    'price' => '',
                ),
                array(
                    'src' => 'images/products/img5.png',
                    'title' => '',
                    'price' => '',
                ),
                array(
                    'src' => 'images/products/img6.png',
                    'title' => '',
                    'price' => '',
                ),
                array(
                    'src' => 'images/products/img7.png',
                    'title' => '',
                    'price' => '',
                ),
                array(
                    'src' => 'images/products/img8.png',
                    'title' => '',
                    'price' => '',
                ),
            );
            foreach ($data as $k => $v): ?>
            <div>
                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                    <div class="uk-overflow-hidden uk-margin">
                        <div class="uk-cover-container uk-transition-scale-up uk-transition-opaque">
                            <img src="<?= $v['src'] ?>" alt="" uk-cover>
                            <canvas width="640" height="640"></canvas>
                        </div>
                    </div>
                    <div class="uk-text-center uk-margin">
                        <h4 class="home__boxProduct__boxsp__title uk-h4 uk-text-uppercase uk-margin-remove"><a href="">Sổ bìa da gáy còng A5</a></h4>
                        <div class="home__boxProduct__boxsp__maso">MS: <span>HMP-QT 00006</span></div>
                    </div>
                    <div class="uk-flex-center" uk-grid>
                        <div class="uk-width-5-6@m">
                            <div class="home__boxProduct__price uk-border-pill uk-button uk-button-default uk-width-1-1">Giá chỉ từ : <span>20.000đ</span></div>
                        </div>
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
<!--/SẢN PHẨM CỦA CHÚNG TÔI-->

<!--CÁC HÌNH THỨC BÁO GIÁ-->
<div class="home__boxBaogia uk-section">
    <div class="uk-container">
        <div class="uk-margin-large home__boxBaogia__margin">
            <h2 class="uk-h2 uk-text-uppercase uk-text-center home__boxTitle home__boxTitle--baogia"><span class="home__boxTitle__inlineBlock uk-display-inline-block uk-position-relative"><span class="home__boxTitle__txt">CÁC HÌNH THỨC</span> BÁO GIÁ</span></h2>
            <p class="home__boxTitle__desc uk-text-center">Dưới đây là các cách mà bạn có thể nhận Báo giá</p>
        </div>
        <div class="uk-hidden@m uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider>

            <ul class="uk-slider-items uk-child-width-1-3@s uk-grid-small uk-grid-50-m uk-grid-match" uk-grid>
                <li class="buoc1">
                    <div class="uk-text-center home__boxBaogia__box2">
                        <div class="uk-margin-small uk-position-relative uk-position-z-index home__box01__bg uk-border-circle uk-position-relative uk-display-inline-block">
                            <img class="uk-position-center" src="images/buoc1_select.png" alt="">
                        </div>
                        <div class="home__boxBaogia__box1 uk-card uk-card-default uk-border-rounded uk-text-center">
                            <div class="uk-card-body">
                                <div class="home__boxBaogia__box1__txt1">Bước 1</div>
                                <div class="home__boxBaogia__box1__txt2">Chọn mẫu hoặc chức năng báo giá</div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="buoc2">
                    <div class="uk-text-center home__boxBaogia__box2" uk-scrollspy-class="uk-animation-slide-top">
                        <div class="uk-margin-small uk-position-relative uk-position-z-index home__box01__bg uk-border-circle uk-position-relative uk-display-inline-block">
                            <img class="uk-position-center" src="images/buoc2_form.png" alt="">
                        </div>
                        <div class="home__boxBaogia__box1 uk-card uk-card-default uk-border-rounded uk-text-center">
                            <div class="uk-card-body">
                                <div class="home__boxBaogia__box1__txt1">Bước 2</div>
                                <div class="home__boxBaogia__box1__txt2">Điền thông tin yêu cầu theo mẫu (Form)</div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="buoc3">
                    <div class="uk-text-center home__boxBaogia__box2">
                        <div class="uk-margin-small uk-position-relative uk-position-z-index home__box01__bg uk-border-circle uk-position-relative uk-display-inline-block">
                            <img class="uk-position-center" src="images/buoc3_send-email.png" alt="">
                        </div>
                        <div class="home__boxBaogia__box1 uk-card uk-card-default uk-border-rounded uk-text-center">
                            <div class="uk-card-body">
                                <div class="home__boxBaogia__box1__txt1">Bước 3</div>
                                <div class="home__boxBaogia__box1__txt2">Thông tin bảng báo giá sẽ gửi về email & trong đơn hàng</div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>
        <div class="uk-visible@m uk-child-width-1-3@s uk-grid-small uk-grid-50-m uk-grid-match" uk-grid uk-scrollspy="target: .home__boxBaogia__box2; cls: uk-animation-slide-bottom; delay: 300; repeat: true;">
            <div class="buoc1">
                <div class="uk-text-center home__boxBaogia__box2">
                    <div class="uk-margin-small uk-position-relative uk-position-z-index home__box01__bg uk-border-circle uk-position-relative uk-display-inline-block">
                        <img class="uk-position-center" src="images/buoc1_select.png" alt="">
                    </div>
                    <div class="home__boxBaogia__box1 uk-card uk-card-default uk-border-rounded uk-text-center">
                        <div class="uk-card-body">
                            <div class="home__boxBaogia__box1__txt1">Bước 1</div>
                            <div class="home__boxBaogia__box1__txt2">Chọn mẫu hoặc chức năng báo giá</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buoc2">
                <div class="uk-text-center home__boxBaogia__box2" uk-scrollspy-class="uk-animation-slide-top">
                    <div class="uk-margin-small uk-position-relative uk-position-z-index home__box01__bg uk-border-circle uk-position-relative uk-display-inline-block">
                        <img class="uk-position-center" src="images/buoc2_form.png" alt="">
                    </div>
                    <div class="home__boxBaogia__box1 uk-card uk-card-default uk-border-rounded uk-text-center">
                        <div class="uk-card-body">
                            <div class="home__boxBaogia__box1__txt1">Bước 2</div>
                            <div class="home__boxBaogia__box1__txt2">Điền thông tin yêu cầu theo mẫu (Form)</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buoc3">
                <div class="uk-text-center home__boxBaogia__box2">
                    <div class="uk-margin-small uk-position-relative uk-position-z-index home__box01__bg uk-border-circle uk-position-relative uk-display-inline-block">
                        <img class="uk-position-center" src="images/buoc3_send-email.png" alt="">
                    </div>
                    <div class="home__boxBaogia__box1 uk-card uk-card-default uk-border-rounded uk-text-center">
                        <div class="uk-card-body">
                            <div class="home__boxBaogia__box1__txt1">Bước 3</div>
                            <div class="home__boxBaogia__box1__txt2">Thông tin bảng báo giá sẽ gửi về email & trong đơn hàng</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-text-center">
        <img class="" src="images/bg_baogia.png" alt="">
    </div>
</div>
<!--/CÁC HÌNH THỨC BÁO GIÁ-->

<!--TIN TỨC & SỰ KIỆN-->
<div class="uk-section home__boxTintuc">
    <div class="uk-container">
        <h2 class="uk-h2 uk-text-uppercase uk-text-center home__boxTitle"><span class="home__boxTitle__inlineBlock uk-display-inline-block uk-position-relative"><span class="home__boxTitle__txt">TIN TỨC</span> & SỰ KIỆN</span></h2>
        <div uk-slider>

            <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small uk-grid-27-m" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'images/images/blog/img1.png',
                            'title' => 'Thủ tướng: Không được cầm chừng, ỷ lại lúc giao thời',
                            'desc' => 'Nhấn mạnh về giai đoạn cuối nhiệm kỳ, Thủ tướng Nguyễn Xuân Phúc quán triệt các thành viên Chính phủ nâng cao trách nhiệm để giải quyết công việc, bàn giao cho khóa mới.',
                        ),
                        array(
                            'src' => 'images/images/blog/img2.png',
                            'title' => 'Chuỗi siêu thị Big C đổi tên thương hiệu',
                            'desc' => 'Từ ngày 1/3, các siêu thị Big C An Phú, Thảo Điền và Âu Cơ chính thức đổi tên thành Tops Market. Đại diện chuỗi bán lẻ cho biết đây là chiến lược tái định vị thương hiệu của họ.',
                        ),
                        array(
                            'src' => 'images/images/blog/img3.png',
                            'title' => 'Tướng Tô Lâm: Giá ma túy ở TP.HCM lên cao, nguy cơ tội phạm tăng',
                            'desc' => 'Bộ trưởng Công an Tô Lâm cho biết ngành công an đã ngăn chặn được việc mua bán ma túy từ nước ngoài, dấu hiệu là giá ma túy ở TP.HCM hiện tăng cao cho thấy khan hiếm nguồn cung.',
                        ),
                        array(
                            'src' => 'images/images/blog/img1.png',
                            'title' => 'Anh Nguyễn Ngọc Mạnh nhận bằng khen của Thủ tướng',
                            'desc' => 'Sau khi nhận được thư khen của Thủ tướng, anh Nguyễn Ngọc Mạnh tiếp tục nhận bằng khen của người đứng đầu Chính phủ.',
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                    <li>
                        <div class="uk-text-center">
                            <div class="uk-cover-container home__boxTintuc__boximg">
                                <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                <canvas width="744" height="486"></canvas>
                                <div class="home__boxTintuc__boxDate uk-position-bottom-left uk-text-center">
                                    <div>
                                        <div>10</div>
                                        <hr>
                                        <div>Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-flex-center" uk-grid>
                                <div class="uk-width-5-6@m">
                                    <h3 class="uk-h3 uk-text-uppercase uk-margin-remove home__boxTintuc__title line-clamp-1"><a href=""><?= $v['title'] ?></a></h3>
                                    <p class="home__boxTintuc__desc line-clamp-3"><?= $v['desc'] ?></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin home__boxTintuc__dot"></ul>

        </div>
        <div uk-slider>

            <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small uk-grid-27-m" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'https://znews-photo.zadn.vn/w360/Uploaded/mdf_rsoznr/2021_03_02/C0110.00_02_31_45.Still002.jpg',
                            'title' => 'Thủ tướng: Không được cầm chừng, ỷ lại lúc giao thời',
                            'desc' => 'Nhấn mạnh về giai đoạn cuối nhiệm kỳ, Thủ tướng Nguyễn Xuân Phúc quán triệt các thành viên Chính phủ nâng cao trách nhiệm để giải quyết công việc, bàn giao cho khóa mới.',
                        ),
                        array(
                            'src' => 'https://znews-photo.zadn.vn/w360/Uploaded/gtnjj3/2021_03_02/quaylaitruong.00_01_55_21.Still001.jpg',
                            'title' => 'Chuỗi siêu thị Big C đổi tên thương hiệu',
                            'desc' => 'Từ ngày 1/3, các siêu thị Big C An Phú, Thảo Điền và Âu Cơ chính thức đổi tên thành Tops Market. Đại diện chuỗi bán lẻ cho biết đây là chiến lược tái định vị thương hiệu của họ.',
                        ),
                        array(
                            'src' => 'https://znews-photo.zadn.vn/w360/Uploaded/thuoovh/2021_03_02/maxresdefault.jpg',
                            'title' => 'Tướng Tô Lâm: Giá ma túy ở TP.HCM lên cao, nguy cơ tội phạm tăng',
                            'desc' => 'Bộ trưởng Công an Tô Lâm cho biết ngành công an đã ngăn chặn được việc mua bán ma túy từ nước ngoài, dấu hiệu là giá ma túy ở TP.HCM hiện tăng cao cho thấy khan hiếm nguồn cung.',
                        ),
                        array(
                            'src' => 'https://znews-photo.zadn.vn/Uploaded/mdf_zremxw/2021_03_02/03z_kittel_fk_a.gif',
                            'title' => 'Anh Nguyễn Ngọc Mạnh nhận bằng khen của Thủ tướng',
                            'desc' => 'Sau khi nhận được thư khen của Thủ tướng, anh Nguyễn Ngọc Mạnh tiếp tục nhận bằng khen của người đứng đầu Chính phủ.',
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                        <li>
                            <div class="uk-text-center">
                                <div class="uk-cover-container home__boxTintuc__boximg">
                                    <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                    <canvas width="744" height="434"></canvas>
                                    <div class="uk-position-cover home__boxTintuc__overlay uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                        <a href="">
                                            <span class="home__boxTintuc__iconPlay"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="uk-flex-center" uk-grid>
                                    <div class="uk-width-5-6@m">
                                        <h3 class="uk-h3 uk-text-uppercase uk-margin-remove home__boxTintuc__title line-clamp-1"><a href=""><?= $v['title'] ?></a></h3>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin home__boxTintuc__dot"></ul>

        </div>
    </div>
</div>
<!--/TIN TỨC & SỰ KIỆN-->

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