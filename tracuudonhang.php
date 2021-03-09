<?php $data["title"] = "Quotation"; ?>
<?php $is_home = false; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Breadcrumb-->
<div class="productDetail__boxBreadcrumd uk-background-norepeat uk-text-center uk-background-cover uk-background-center-center" uk-parallax="bgy: -10" data-src="images/bg_breadcrumd.png" uk-img>
    <div class="uk-section-xsmall productDetail__boxBreadcrumd__mask">
        <div class="uk-container">
            <h3 class="uk-h3 uk-margin-remove productDetail__boxBreadcrumd__title">Tra cứu đơn hàng</h3>
            <ul class="uk-breadcrumb uk-margin-remove">
                <li><a href="">Trang chủ</a></li>
                <li><span>Tra cứu đơn hàng</span></li>
            </ul>
        </div>
    </div>
</div>
<!--/Breadcrumb-->

<div class="uk-section-small tracuudonhang__section1">
    <div class="uk-container">
        <div class="uk-card uk-card-default uk-card-body uk-margin productDetail__section1__card1">
            <div uk-grid>
                <div class="uk-width-5-6@m">
                    <form class="uk-grid-small" uk-grid>
                        <div class="uk-width-2-5@s">
                            <input class="uk-input tracuudonhang__section1__input uk-border-rounded" type="text" placeholder="Nhập Email của bạn ... (*)">
                        </div>
                        <div class="uk-width-expand">
                            <input class="uk-input tracuudonhang__section1__input uk-border-rounded" type="text" placeholder="Nhập mã đơn hàng (*)">
                        </div>
                        <div class="uk-width-expand">
                            <button type="button" class="tracuudonhang__section1__btn uk-border-rounded uk-button uk-button-default">TÌM KIẾM ĐƠN HÀNG</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="tracuudonhang__section1__divider">
            <div class="tracuudonhang__section1__box1">
                <h5 class="uk-h5 uk-margin-remove tracuudonhang__section1__box1__title">Sơ đồ tiến độ công việc:</h5>
                <div class="uk-grid-small" uk-grid>
                    <div class="uk-width-5-6 uk-width-3-5@m">
                        <?php $x = (rand(10, 100)); ?>
                        <div class="uk-position-relative tracuudonhang__section1__box1__progress" data-value="<?= $x ?>">
                            <progress class="uk-progress" value="<?= $x ?>" max="100"></progress>
                        </div>
                    </div>
                    <div class="uk-width-1-1 uk-width-3-5@m">
                        <div class="uk-flex-bottom" uk-grid>
                            <div class="uk-width-expand">
                                <div class="uk-child-width-1-2@m uk-grid-small" uk-grid>
                                    <?php
                                    $data = array(
                                        'Javascript',
                                        'HTML',
                                        'CSS',
                                        'PHP',
                                        'SQL',
                                        'Plugin',
                                    );
                                    foreach ($data as $k => $v): ?>
                                    <div>
                                        <ul class="uk-list tracuudonhang__section1__box1__list uk-list-bullet">
                                            <li><span class="tracuudonhang__section1__box1__list__c1"><?= $v ?></span> <span class="tracuudonhang__section1__box1__list__c2">(<?= (rand(10, 100)) ?>%)</span></li>
                                        </ul>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="uk-width-auto@m">
                                <div class="tracuudonhang__section1__box1__txt1">Tổng điểm</div>
                                <div class="tracuudonhang__section1__box1__txt2">90%</div>
                            </div>
                        </div>
                    </div>
                </div>
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