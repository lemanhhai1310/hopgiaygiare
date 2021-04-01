<!-- Đăng nhập -->
<div id="modal-login" class="shop_modal" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <div class="uk-modal-header shop_modal__header">
            <h2 class="cart__right__title uk-modal-title uk-text-center">Đăng nhập</h2>
        </div>
        <div class="uk-modal-body shop_modal__body">
            <div class="uk-flex-center" uk-grid>
                <div class="uk-width-5-6@m">
                    <form class="uk-form-stacked">
                        <div class="uk-margin">
                            <label class="uk-form-label shop_modal__body__label" for="form-stacked-text">Tên đăng nhập</label>
                            <div class="uk-form-controls">
                                <input class="uk-input  shop_modal__body__input" id="form-stacked-text" type="email" placeholder="Nhập email của bạn">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label shop_modal__body__label" for="form-stacked-select">Mật khẩu</label>
                            <div class="uk-form-controls">
                                <input class="uk-input  shop_modal__body__input" id="form-stacked-text" type="password" placeholder="Mật khẩu từ 8-12 ký tự">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <button type="submit" class="shop_modal__body__btn uk-button uk-button-secondary uk-button-large uk-width-1-1 uk-position-relative">
                                <!--
                                <div class="title1__box1 box_btn uk-position-cover">
                                    <div class="uk-position-cover uk-padding-small title1__box1">
                                        <img class="uk-position-top-left" src="images/component/icon_top_left.png" alt="">
                                        <img class="uk-position-top-right" src="images/component/icon_top_right.png" alt="">
                                        <img class="uk-position-bottom-left" src="images/component/icon_bottom_left.png" alt="">
                                        <img class="uk-position-bottom-right" src="images/component/icon_bottom_right.png" alt="">
                                    </div>
                                </div>
                                -->
                                ĐĂNG NHẬP
                            </button>
                        </div>
                        <div class="uk-margin uk-text-center">
                            <div class="shop_modal__body__txt">Bạn chưa có tài khoản? <a href="" uk-toggle="target: #modal-register">Đăng ký</a></div>
                            <div class="shop_modal__body__txt"><a href="" uk-toggle="target: #modal-forgot">Quên mật khẩu?</a></div>
                        </div>
                        <div class="uk-margin">
                            <button type="submit" class="uk-button uk-button-primary uk-width-1-1"><span uk-icon="icon: facebook; ratio: 1"></span> Đăng nhập bằng Facebook</button>
                        </div>
                        <div class="uk-margin">
                            <button type="submit" class="uk-button uk-button-danger uk-width-1-1"><span uk-icon="icon: google; ratio: 1"></span> Đăng nhập bằng Google+</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Đăng ký -->
<div id="modal-register" class="shop_modal" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <div class="uk-modal-header shop_modal__header">
            <h2 class="cart__right__title uk-modal-title uk-text-center">Đăng ký</h2>
        </div>
        <div class="uk-modal-body shop_modal__body">
            <div class="uk-flex-center" uk-grid>
                <div class="uk-width-5-6@m">
                    <form class="uk-form-stacked">
                        <div class="uk-margin">
                            <label class="uk-form-label shop_modal__body__label" for="form-stacked-text">Họ và tên</label>
                            <div class="uk-form-controls">
                                <input class="uk-input shop_modal__body__input" id="form-stacked-text" type="text" placeholder="Họ tên của bạn">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label shop_modal__body__label" for="form-stacked-select">Điện thoại</label>
                            <div class="uk-form-controls">
                                <input class="uk-input shop_modal__body__input" id="form-stacked-text" type="tel" placeholder="Điện thoại của bạn">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label shop_modal__body__label" for="form-stacked-text">Email</label>
                            <div class="uk-form-controls">
                                <input class="uk-input shop_modal__body__input" id="form-stacked-text" type="email" placeholder="Email của bạn">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label shop_modal__body__label" for="form-stacked-select">Địa chỉ</label>
                            <div class="uk-form-controls">
                                <input class="uk-input shop_modal__body__input" id="form-stacked-text" type="text" placeholder="Địa chỉ của bạn">
                            </div>
                        </div>
                        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                            <label class="shop_modal__body__label">Giới tính</label>
                            <label><input class="uk-radio" type="radio" name="radio2" checked> Nam</label>
                            <label><input class="uk-radio" type="radio" name="radio2"> Nữ</label>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label shop_modal__body__label" for="form-stacked-text">Ngày sinh</label>
                            <div class="uk-form-controls">
                                <input class="uk-input shop_modal__body__input" id="form-stacked-text" type="date" placeholder="Ngày/Tháng/Năm sinh của bạn">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label shop_modal__body__label" for="form-stacked-text">Mật khẩu</label>
                            <div class="uk-form-controls">
                                <input class="uk-input shop_modal__body__input" id="form-stacked-text" type="password" placeholder="Mật khẩu từ 8-12 ký tự">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label shop_modal__body__label" for="form-stacked-text">Nhập lại mật khẩu</label>
                            <div class="uk-form-controls">
                                <input class="uk-input shop_modal__body__input" id="form-stacked-text" type="password" placeholder="Mật khẩu từ 8-12 ký tự">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <button type="submit" class="shop_modal__body__btn uk-button uk-button-secondary uk-button-large uk-width-1-1 uk-position-relative">
                                <!--
                                <div class="title1__box1 box_btn uk-position-cover">
                                    <div class="uk-position-cover uk-padding-small title1__box1">
                                        <img class="uk-position-top-left" src="images/component/icon_top_left.png" alt="">
                                        <img class="uk-position-top-right" src="images/component/icon_top_right.png" alt="">
                                        <img class="uk-position-bottom-left" src="images/component/icon_bottom_left.png" alt="">
                                        <img class="uk-position-bottom-right" src="images/component/icon_bottom_right.png" alt="">
                                    </div>
                                </div>
                                -->
                                ĐĂNG KÝ
                            </button>
                        </div>
                        <div class="uk-margin uk-text-center">
                            <div class="shop_modal__body__txt">Bạn đã có tài khoản? <a href="" uk-toggle="target: #modal-login">Đăng nhập</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Đăng ký -->
<div id="modal-forgot" class="shop_modal" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <div class="uk-modal-header shop_modal__header">
            <h2 class="cart__right__title uk-modal-title uk-text-center">Quên mật khẩu</h2>
        </div>
        <div class="uk-modal-body shop_modal__body">
            <div class="uk-flex-center" uk-grid>
                <div class="uk-width-5-6@m">
                    <form class="uk-form-stacked">
                        <div class="uk-margin">
                            <label class="uk-form-label shop_modal__body__label" for="form-stacked-text">Email</label>
                            <div class="uk-form-controls">
                                <input class="uk-input shop_modal__body__input" id="form-stacked-text" type="email" placeholder="Email của bạn">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <button type="submit" class="shop_modal__body__btn uk-button uk-button-secondary uk-button-large uk-width-1-1 uk-position-relative">
                                <!--
                                <div class="title1__box1 box_btn uk-position-cover">
                                    <div class="uk-position-cover uk-padding-small title1__box1">
                                        <img class="uk-position-top-left" src="images/component/icon_top_left.png" alt="">
                                        <img class="uk-position-top-right" src="images/component/icon_top_right.png" alt="">
                                        <img class="uk-position-bottom-left" src="images/component/icon_bottom_left.png" alt="">
                                        <img class="uk-position-bottom-right" src="images/component/icon_bottom_right.png" alt="">
                                    </div>
                                </div>
                                -->
                                ĐẶT LẠI MẬT KHẨU
                            </button>
                        </div>
                        <div class="uk-margin uk-text-center">
                            <div class="shop_modal__body__txt">Bạn đã có tài khoản? <a href="" uk-toggle="target: #modal-login">Đăng nhập</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  // UIkit.modal('#modal-login').show();
</script>