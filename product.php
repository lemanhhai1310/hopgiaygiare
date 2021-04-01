<?php $data["title"] = "Product"; ?>
<?php $is_home = false; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Breadcrumb-->
<div class="uk-hidden productDetail__boxBreadcrumd uk-background-norepeat uk-text-center uk-background-cover uk-background-center-center" uk-parallax="bgy: -10" data-src="images/bg_breadcrumd.png" uk-img>
    <div class="uk-section-xsmall productDetail__boxBreadcrumd__mask">
        <div class="uk-container">
            <h3 class="uk-h3 uk-margin-remove productDetail__boxBreadcrumd__title">Business Cards</h3>
            <ul class="uk-breadcrumb uk-margin-remove">
                <li><a href="">Trang chủ</a></li>
                <li><a href="">Sản phẩm</a></li>
                <li><span>Business Cards</span></li>
            </ul>
        </div>
    </div>
</div>
<!--/Breadcrumb-->

<div class="uk-section-xsmall">
    <div class="uk-container">
        <ul class="uk-breadcrumb uk-margin-remove">
            <li><a href="">Trang chủ</a></li>
            <li><a href="">Sản phẩm</a></li>
            <li><span>Business Cards</span></li>
        </ul>
    </div>
</div>

<div class="uk-section-small productDetail__section1">
    <div class="uk-container">
        <!--mô tả chi tiết-->
        <div class="uk-grid-small uk-grid-30-m" uk-grid>
            <div class="uk-width-expand uk-flex-last@m">
                <div class="home__boxProduct__grid1 uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m uk-grid-small uk-grid-30-m uk-grid-match" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'images/products/img1.png',
                            'title' => 'HỘP SON HIỆN ĐẠI - HGS 0001',
                            'price' => '',
                        ),
                        array(
                            'src' => 'images/products/img2.png',
                            'title' => 'HỘP ĐỰNG BỘ MỸ PHẨM - HGMP 0001',
                            'price' => '',
                        ),
                        array(
                            'src' => 'images/products/img3.png',
                            'title' => 'HỘP ĐỰNG LỌ NƯỚC HOA CAO CẤP - HGNH 0001',
                            'price' => '',
                        ),
                        array(
                            'src' => 'images/products/img4.png',
                            'title' => 'HỘP THỰC PHẨM BỔ SUNG - HGBS 0001',
                            'price' => '',
                        ),
                        array(
                            'src' => 'images/products/img5.png',
                            'title' => 'HỘP SERUM CHĂM SÓC DA CÁN VÂN CAO CẤP - HGCV 0001',
                            'price' => '',
                        ),
                        array(
                            'src' => 'images/products/img6.png',
                            'title' => 'HỘP COMBO NƯỚC HOA VÀ KEM DƯỠNG - HGCB 0001',
                            'price' => '',
                        ),
                        array(
                            'src' => 'images/products/img7.png',
                            'title' => 'HỘP ĐỰNG VỚ THỜI TRANG - HGV 0001',
                            'price' => '',
                        ),
                        array(
                            'src' => 'images/products/img8.png',
                            'title' => 'HỘP YẾN SÀO SMALL - HGYS 0001',
                            'price' => '',
                        ),
                        array(
                            'src' => '',
                            'title' => 'HỘP YẾN SÀO LARGE - HGYS 0002',
                            'price' => '',
                        ),
                        array(
                            'src' => '',
                            'title' => '',
                            'price' => '',
                        ),
                        array(
                            'src' => '',
                            'title' => '',
                            'price' => '',
                        ),
                        array(
                            'src' => '',
                            'title' => '',
                            'price' => '',
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                        <div>
                            <div class="uk-inline-clip uk-transition-toggle uk-flex uk-flex-column" tabindex="0">
                                <div class="uk-overflow-hidden">
                                    <div class="uk-cover-container uk-transition-scale-up uk-transition-opaque">
                                        <img src="<?= ($v['src'] == '') ? 'images/noimage.jpg' : $v['src'] ?>" alt="" uk-cover>
                                        <canvas width="640" height="640"></canvas>
                                    </div>
                                </div>
                                <div class="uk-text-center uk-margin uk-flex-1">
                                    <h4 class="home__boxProduct__boxsp__title uk-h4 uk-text-uppercase uk-margin-remove"><a href=""><?= ($v['title'] == '') ? 'Sổ bìa da gáy còng A5' : $v['title'] ?></a></h4>
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
                <ul class="uk-pagination uk-flex-center" uk-margin>
                    <li class="uk-active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><span uk-pagination-next></span></a></li>
                </ul>
            </div>

            <!--Sidebar-->
            <div class="uk-width-1-4@m">
                <div class="uk-margin-medium">
                    <div class="productDetail__section1__box3 uk-margin">
                        <h2 class="productDetail__section1__box3__title productDetail__section1__box3__title--c1 uk-h2 uk-margin-remove">Danh mục <span>sản phẩm</span></h2>
                    </div>
                    <ul class="uk-nav-default product__nav1" uk-nav="toggle: .product__icon;">
                        <?php
                        $data = array(
                            array(
                                'txt' => 'Premium Business Cards',
                                'sub' => true,
                            ),
                            array(
                                'txt' => 'Free Business Cards',
                                'sub' => true,
                            ),
                            array(
                                'txt' => 'Die-Cut Business Cards',
                                'sub' => true,
                            ),
                            array(
                                'txt' => 'Standard Business Cards',
                                'sub' => false,
                            ),
                            array(
                                'txt' => 'Personal Business Cards',
                                'sub' => true,
                            ),
                            array(
                                'txt' => 'Business Card Holders',
                                'sub' => true,
                            ),
                            array(
                                'txt' => 'Networking Cards',
                                'sub' => false,
                            ),
                            array(
                                'txt' => 'Appointment Cards',
                                'sub' => true,
                            ),
                            array(
                                'txt' => 'Mommy Cards',
                                'sub' => false,
                            ),
                        );
                        foreach ($data as $k => $v): ?>
                            <li class="<?= ($k == 0) ? 'uk-open' : '' ?> <?= ($v['sub']) ? 'uk-parent' : '' ?>">
                                <a href="https://cv.cathtmlcss.net">
                                    <?= $v['txt'] ?>
                                    <?php if ($v['sub']): ?>
                                        <span class="product__icon uk-position-right uk-background-norepeat uk-background-center-center"></span>
                                    <?php endif; ?>
                                </a>
                                <?php if ($v['sub']): ?>
                                    <ul class="uk-nav-sub product__nav2">
                                        <?php
                                        $data = array(
                                            'Postcards',
                                            'Carbonless Form',
                                            'Catalogs',
                                            'Counter Cards',
                                            'Door Hangers',
                                        );
                                        foreach ($data as $k1 => $v1): ?>
                                            <li class="<?= ($k1 == 1) ? 'uk-active' : '' ?>"><a href="https://cv.cathtmlcss.net" data-count="(<?= (rand(10,81)) ?>)"><?= $v1 ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="uk-margin-medium">
                    <div class="productDetail__section1__box3 uk-margin">
                        <h2 class="productDetail__section1__box3__title productDetail__section1__box3__title--c1 uk-h2 uk-margin-remove">Danh mục <span>DỊCH VỤ</span></h2>
                    </div>
                    <div class="uk-child-width-1-1 uk-grid-small uk-grid-20-m" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'src' => 'images/service/img1.png',
                                'txt' => 'IN THÙNG CARTON',
                            ),
                            array(
                                'src' => 'images/service/img2.png',
                                'txt' => 'IN TÚI GIẤY',
                            ),
                            array(
                                'src' => 'images/service/img3.png',
                                'txt' => 'IN CATALOGUE',
                            ),
                            array(
                                'src' => 'images/service/img4.png',
                                'txt' => 'IN CATALOGUE',
                            ),
                        );
                        foreach ($data as $k => $v): ?>
                        <div>
                            <div class="uk-cover-container">
                                <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                <canvas width="801" height="540"></canvas>
                            </div>
                            <h5 class="uk-h5 productDetail__section1__box5__txt uk-text-uppercase uk-text-center uk-margin-small uk-margin-remove-bottom"><a href=""><?= $v['txt'] ?></a></h5>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!--/Sidebar-->
        </div>
        <!--/mô tả chi tiết-->
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