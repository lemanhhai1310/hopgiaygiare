<?php $data["title"] = "Giỏ hàng"; ?>
<?php $is_home = false; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Breadcrumb-->
<div class="productDetail__boxBreadcrumd uk-background-norepeat uk-text-center uk-background-cover uk-background-center-center" uk-parallax="bgy: -10" data-src="images/bg_breadcrumd.png" uk-img>
    <div class="uk-section-xsmall productDetail__boxBreadcrumd__mask">
        <div class="uk-container">
            <h3 class="uk-h3 uk-margin-remove productDetail__boxBreadcrumd__title">Giỏ hàng</h3>
            <ul class="uk-breadcrumb uk-margin-remove">
                <li><a href="">Trang chủ</a></li>
                <li><span>Giỏ hàng</span></li>
            </ul>
        </div>
    </div>
</div>
<!--/Breadcrumb-->

<div class="uk-section-small cart__section1">
    <div class="uk-container">
        <div>Có 1 sản phẩm trong giỏ hàng của bạn</div>
        <table class="uk-table cart__table uk-table-responsive uk-table-justify uk-table-divider uk-table-middle">
            <thead>
            <tr>
                <th class="uk-width-small">Ảnh</th>
                <th>Thông tin sản phẩm</th>
                <th class="uk-text-right@m">Xóa</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div class="uk-visible@m">
                        <div class="uk-cover-container uk-display-inline-block">
                            <img src="images/products/img1.png" alt="" uk-cover>
                            <canvas width="110" height="110"></canvas>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="uk-grid-small" uk-grid>
                        <div class="uk-hidden@m">
                            <div class="uk-cover-container uk-display-inline-block">
                                <img src="images/products/img1.png" alt="" uk-cover>
                                <canvas width="110" height="110"></canvas>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <h5 class="cart__box1__title uk-h5 uk-margin-remove"><a href="">L'Oreal Paris Rouge Signature Matte Liquid Lipstick</a></h5>
                            <div class="uk-margin-small">
                                <div class="cart__box1__txt1">Mã sản phẩm: <span>LS05</span></div>
                                <div class="cart__box1__txt1">Bản quyền <a>Printgo</a></div>
                                <!--
                                <div class="cart__box1__txt1">Đơn giá: 2.000.000₫</div>
                                -->
                            </div>
                            <div class="uk-child-width-auto uk-grid-collapse" uk-grid>
                                <div>
                                    <button type="button" class="uk-button uk-button-secondary uk-form-small" uk-icon="icon: minus; ratio: 0.7"></button>
                                </div>
                                <div>
                                    <input type="text" class="uk-input uk-text-center uk-form-width-xsmall uk-form-small" value="1">
                                </div>
                                <div>
                                    <button type="button" class="uk-button uk-button-secondary uk-form-small" uk-icon="icon: plus; ratio: 0.7"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="uk-text-right">
                        <a href="#" class="uk-icon-link uk-margin-small-right" uk-icon="file-edit"></a>
                        <a href="#" class="uk-icon-link" uk-icon="trash"></a>
                    </div>
                    <!--
                    <div class="uk-grid-small" uk-grid>
                        <div class="uk-width-expand uk-width-1-1@m">
                            <div class="uk-text-right@m cart__box1__txt2">Thành tiền: 2.000.000₫</div>
                        </div>
                        <div class="uk-width-auto uk-width-1-1@m uk-flex-first@m">
                            <div class="uk-text-right@m"><a href="#" class="uk-icon-link" uk-icon="trash"></a></div>
                        </div>
                    </div>
                    -->
                </td>
            </tr>
            <!--
            <tr>
                <td colspan="3">
                    <div class="uk-text-right cart__box1__txt3">Tổng tiền: <span>3.200.000₫</span></div>
                </td>
            </tr>
            -->
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <div class="uk-child-width-1-1 uk-child-width-auto@m uk-flex-right@m uk-grid-small" uk-grid>
                        <div>
                            <a href="" class="header__btn uk-width-1-1 uk-width-auto@m uk-button uk-button-secondary uk-border-pill">Tiếp tục mua hàng</a>
                        </div>
                        <div>
                            <a href="" class="header__btn uk-width-1-1 uk-width-auto@m uk-button uk-button-default uk-border-pill uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/bg1_btn.png" uk-img uk-toggle="target: #modal-close-outside-baogia">Yêu cầu báo giá</a>
                        </div>
                    </div>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
</div>

<!-- Modal bao gia -->
<div id="modal-close-outside-baogia" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <!--
        <h2 class="uk-modal-title uk-text-center">THÔNG TIN ĐẶT HÀNG</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        -->
        <form>
            <fieldset class="uk-fieldset">

                <legend class="uk-legend cart__boxModal__title">THÔNG TIN ĐẶT HÀNG</legend>

                <div class="uk-margin">
                    <input class="uk-input uk-border-rounded cart__boxModal__input" type="text" placeholder="Họ tên">
                </div>
                <div class="uk-margin">
                    <input class="uk-input uk-border-rounded cart__boxModal__input" type="text" placeholder="Số điện thoại">
                </div>
                <div class="uk-margin">
                    <input class="uk-input uk-border-rounded cart__boxModal__input" type="text" placeholder="Email">
                </div>

                <div class="uk-margin">
                    <textarea class="uk-textarea uk-border-rounded cart__boxModal__input" rows="5" placeholder="Ghi chú"></textarea>
                </div>

                <a href="" uk-toggle="target: #modal-close-outside-dathangsuccess" class="header__btn uk-width-1-1 uk-button uk-button-default uk-border-pill uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/bg1_btn.png" uk-img>Hoàn thành</a>

            </fieldset>
        </form>
    </div>
</div>

<!-- Modal dat hang thanh cong -->
<div id="modal-close-outside-dathangsuccess" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <div class="uk-text-center uk-margin">
            <h2 class="uk-modal-title cart__boxModal__title uk-margin-remove">Cám ơn bạn</h2>
            <div>đã sử dụng dịch vụ của Printgo</div>
        </div>
        <div class="uk-text-center uk-margin">
            <h5 class="uk-h5 cart__boxModal__txt1">Mã đơn hàng của bạn</h5>
            <div class="uk-flex-center" uk-grid>
                <div class="uk-width-5-6@m">
                    <div class="uk-border-pill cart__boxModal__madon">OP03080321792</div>
                </div>
            </div>
        </div>
        <div class="uk-margin uk-text-center">
            Bạn có thể bấm vào <a href="">đây</a> để kiểm tra trạng thái đơn hàng bằng mã phía trên
        </div>
        <!--
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        -->
    </div>
</div>

<script>
  // UIkit.modal('#modal-close-outside-baogia').show();
  // UIkit.modal('#modal-close-outside-dathangsuccess').show();
</script>

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