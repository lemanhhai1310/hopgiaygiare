<?php $data["title"] = "Q&A"; ?>
<?php $is_home = false; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Breadcrumb-->
<div class="productDetail__boxBreadcrumd uk-background-norepeat uk-text-center uk-background-cover uk-background-center-center" uk-parallax="bgy: -10" data-src="images/bg_breadcrumd.png" uk-img>
    <div class="uk-section-xsmall productDetail__boxBreadcrumd__mask">
        <div class="uk-container">
            <h3 class="uk-h3 uk-margin-remove productDetail__boxBreadcrumd__title">Q&A</h3>
            <ul class="uk-breadcrumb uk-margin-remove">
                <li><a href="">Trang chủ</a></li>
                <li><span>Q&A</span></li>
            </ul>
        </div>
    </div>
</div>
<!--/Breadcrumb-->

<div class="uk-section-small productDetail__section1">
    <div class="uk-container">
        <!--mô tả chi tiết-->
        <div class="uk-grid-small uk-grid-30-m" uk-grid>
            <div class="uk-width-expand">
                <ul class="qa__list" uk-accordion>
                    <?php
                    $data = array(
                        array(
                            'txt1' => 'What do I need to run your themes?',
                            'txt2' => 'Xây dựng bộ nhận diện thương hiệu chuyên nghiệp là tạo ra một con đường tuyệt vời đưa khách hàng đến với công ty, doanh nghiệp của bạn. Không chỉ là một logo ấn tượng, đó là cảm giác đồng bộ từ những sản phẩm nhỏ nhất như tờ rơi, tờ gấp, túi giấy,... thậm chí là từ màu sắc',
                        ),
                        array(
                            'txt1' => 'What payment options do you offer to buy your themes?',
                            'txt2' => 'Xây dựng bộ nhận diện thương hiệu chuyên nghiệp là tạo ra một con đường tuyệt vời đưa khách hàng đến với công ty, doanh nghiệp của bạn. Không chỉ là một logo ấn tượng, đó là cảm giác đồng bộ từ những sản phẩm nhỏ nhất như tờ rơi, tờ gấp, túi giấy,... thậm chí là từ màu sắc',
                        ),
                        array(
                            'txt1' => 'When can I get a hold of the theme files after I purchased your theme?',
                            'txt2' => 'Xây dựng bộ nhận diện thương hiệu chuyên nghiệp là tạo ra một con đường tuyệt vời đưa khách hàng đến với công ty, doanh nghiệp của bạn. Không chỉ là một logo ấn tượng, đó là cảm giác đồng bộ từ những sản phẩm nhỏ nhất như tờ rơi, tờ gấp, túi giấy,... thậm chí là từ màu sắc',
                        ),
                        array(
                            'txt1' => 'I have made payment for your theme but I still can’t see a link to download the theme in the “Orders” menu',
                            'txt2' => 'Xây dựng bộ nhận diện thương hiệu chuyên nghiệp là tạo ra một con đường tuyệt vời đưa khách hàng đến với công ty, doanh nghiệp của bạn. Không chỉ là một logo ấn tượng, đó là cảm giác đồng bộ từ những sản phẩm nhỏ nhất như tờ rơi, tờ gấp, túi giấy,... thậm chí là từ màu sắc',
                        ),
                        array(
                            'txt1' => 'Do you provide support for all the themes you sell?',
                            'txt2' => 'Xây dựng bộ nhận diện thương hiệu chuyên nghiệp là tạo ra một con đường tuyệt vời đưa khách hàng đến với công ty, doanh nghiệp của bạn. Không chỉ là một logo ấn tượng, đó là cảm giác đồng bộ từ những sản phẩm nhỏ nhất như tờ rơi, tờ gấp, túi giấy,... thậm chí là từ màu sắc',
                        ),
                        array(
                            'txt1' => 'Are all of your themes support all version of WordPress?',
                            'txt2' => 'Xây dựng bộ nhận diện thương hiệu chuyên nghiệp là tạo ra một con đường tuyệt vời đưa khách hàng đến với công ty, doanh nghiệp của bạn. Không chỉ là một logo ấn tượng, đó là cảm giác đồng bộ từ những sản phẩm nhỏ nhất như tờ rơi, tờ gấp, túi giấy,... thậm chí là từ màu sắc',
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                        <li class="<?= ($k == 0) ? 'uk-open' : '' ?>">
                            <a class="uk-accordion-title qa__title" href="#"><?= $v['txt1'] ?></a>
                            <div class="uk-accordion-content qa__content">
                                <p><?= $v['txt2'] ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!--Sidebar-->
            <div class="uk-width-1-4@m">
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