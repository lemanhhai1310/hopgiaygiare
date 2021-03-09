<?php $data["title"] = "Gioi thieu"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Breadcrumb-->
<div class="productDetail__boxBreadcrumd uk-background-norepeat uk-text-center uk-background-cover uk-background-center-center" uk-parallax="bgy: -10" data-src="images/bg_breadcrumd.png" uk-img>
    <div class="uk-section-xsmall productDetail__boxBreadcrumd__mask">
        <div class="uk-container">
            <h3 class="uk-h3 uk-margin-remove productDetail__boxBreadcrumd__title">Giới thiệu</h3>
            <ul class="uk-breadcrumb uk-margin-remove">
                <li><a href="">Trang chủ</a></li>
                <li><span>Giới thiệu</span></li>
            </ul>
        </div>
    </div>
</div>
<!--/Breadcrumb-->

<div class="uk-section-small">
    <div class="uk-container">
        <div class="uk-margin-large uk-flex-middle" uk-grid>
            <div class="uk-width-1-2@m">
                <img src="images/service/in1.png" alt="">
            </div>
            <div class="uk-width-expand">
                <div class="uk-text-right@m">
                    <h3 class="uk-h3 uk-text-uppercase news-detail__box1__title">THIẾT KẾ BỘ NHẬN DIỆN THƯƠNG HIỆU CHUYÊN NGHIỆP KHÁC BIỆT VÀ TOẢ SÁNG CÙNG PRINTGO</h3>
                    <article class="service-detail__box1__content">
                        <p>Xây dựng bộ nhận diện thương hiệu chuyên nghiệp là tạo ra một con đường tuyệt vời đưa khách hàng đến với công ty, doanh nghiệp của bạn. Không chỉ là một logo ấn tượng, đó là cảm giác đồng bộ từ những sản phẩm nhỏ nhất như tờ rơi, tờ gấp, túi giấy,... thậm chí là từ màu sắc</p>
                        <p>Đặc biệt, nếu bạn là doanh nghiệp mới thành lập thì xây dựng bộ nhận diện thương hiệu chuyên nghiệp là điều không thể thiếu:</p>
                        <p>Giúp khách hàng dễ dàng ấn tượng, ghi nhớ thương hiệu của bạn Dễ dàng truyền đạt thông điệp, giá trị cốt lõi của công ty Thể hiện sự chuyên nghiệp, cẩn thận , chỉnh chu - những yếu tố tạo nên niềm tin</p>
                    </article>
                </div>
            </div>
        </div>
        <div class="uk-margin-large uk-flex-middle" uk-grid>
            <div class="uk-width-1-2@m uk-flex-last@m">
                <img src="images/service/in2.png" alt="">
            </div>
            <div class="uk-width-expand">
                <div class="">
                    <h3 class="uk-h3 uk-text-uppercase news-detail__box1__title">NHỮNG LỢI ÍCH BẤT NGỜ KHI THIẾT KẾ BỘ NHẬN DIỆN THƯƠNG HIỆU VỚI PRINTGO</h3>
                    <ul class="uk-list uk-list-bullet service-detail__box1__list">
                        <li>Nhận trọn bộ nhận diện thương hiệu sáng tạo, độc đáo bao gồm: 1 logo hiện đại được lựa chọn từ 2 ý tưởng, bộ ấn phẩm văn phòng đầy đủ chuyên nghiệp</li>
                        <li>Có các gói thiết kế đa dạng, phù hợp với nhu cầu và ngân sách của tất cả khách hàng</li>
                        <li>Nâng tầm thương hiệu của bạn lên một đẳng cấp mới, gây ấn tượng tốt với khách hàng, đối tác</li>
                        <li>Thời gian thiết kế nhanh chóng, chất lượng đảm bảo</li>
                        <li>Chỉnh sửa theo yêu cầu của khách hàng để đem đến sản phẩm thiết kế hoàn hảo nhất</li>
                        <li>Có hướng dẫn sử dụng bộ nhận diện trong các hoàn cảnh khác nhau, phục vụ trong mục đích truyền thông khác nhau</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="uk-section-small service-detail__box2">
            <h4 class="uk-h4 service-detail__box2__title">Để được báo giá và tư vấn kỹ hơn, quý khách có thể liên hệ với chúng tôi thông qua:</h4>
            <ul class="uk-list uk-list-bullet service-detail__box1__list">
                <li>Hotline: 1900.633313</li>
                <li>Email: sale@inhopgiayre.com</li>
                <li>Địa chỉ: 449 Nguyễn Oanh, Phường 17, Quận Gò Vấp</li>
            </ul>
        </div>
    </div>
</div>

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