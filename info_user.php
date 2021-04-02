<?php $data["title"] = "Cập nhật Thông tin tài khoản"; ?>
<?php $is_home = false; ?>
<?php require "template-parts/layouts/header.php"; ?>

<div class="uk-section-small">
    <div class="uk-container">
        <div class="uk-grid-divider" uk-grid>
            <div class="uk-width-1-4@m">
                <?php require "template-parts/layouts/sidebar.php"; ?>
            </div>
            <div class="uk-width-expand">
                <div class="uk-margin info_user__box1">
                    <div class="uk-display-inline-block uk-position-relative info_user__box1__box">
                        <span uk-icon="icon: user; ratio: 1"></span>
                        <span class="uk-text-middle info_user__box1__txt">CẬP NHẬT THÔNG TIN TÀI KHOẢN</span>
                    </div>
                </div>
                <form class="uk-form-horizontal uk-margin-large">

                    <div class="uk-margin">
                        <label class="uk-form-label info_user__editForm__label" for="form-horizontal-text">Họ và tên (*)</label>
                        <div class="uk-form-controls">
                            <input class="uk-input info_user__editForm__input" id="form-horizontal-text" type="text" placeholder="" value="Lê Mạnh Hải">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label info_user__editForm__label" for="form-horizontal-text">Email (*)</label>
                        <div class="uk-form-controls">
                            <input class="uk-input info_user__editForm__input" id="form-horizontal-text" type="text" placeholder="" value="lemanhhaibd@gmail.com">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label info_user__editForm__label" for="form-horizontal-text">Điện thoại (*)</label>
                        <div class="uk-form-controls">
                            <input class="uk-input info_user__editForm__input" id="form-horizontal-text" type="text" placeholder="" value="0964 794 699">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label info_user__editForm__label" for="form-horizontal-text">Giới tính</label>
                        <div class="uk-form-controls">
                            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                <label><input class="uk-radio" type="radio" name="radio2" checked> <span class="info_user__editForm__txt">Nam</span></label>
                                <label><input class="uk-radio" type="radio" name="radio2"> <span class="info_user__editForm__txt">Nữ</span></label>
                            </div>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label info_user__editForm__label" for="form-horizontal-text">Địa chỉ</label>
                        <div class="uk-form-controls">
                            <div class="uk-grid-small" uk-grid>
                                <div class="uk-width-2-3@s">
                                    <input class="uk-input info_user__editForm__input" type="text" placeholder="" value="449 Nguyễn Oanh">
                                </div>
                                <div class="uk-width-1-3@s">
                                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                        <select>
                                            <option value="">Please select...</option>
                                            <option value="1" selected>Phường 17</option>
                                            <option value="2">Option 02</option>
                                            <option value="3">Option 03</option>
                                            <option value="4">Option 04</option>
                                        </select>
                                        <button class="uk-button info_user__editForm__btn uk-width-1-1 uk-button-default uk-text-left uk-position-relative" type="button" tabindex="-1">
                                            <span></span>
                                            <span class="uk-position-center-right uk-margin-small-right" uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="uk-width-1-3@s">
                                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                        <select>
                                            <option value="">Please select...</option>
                                            <option value="1" selected>Gò Vấp</option>
                                            <option value="2">Option 02</option>
                                            <option value="3">Option 03</option>
                                            <option value="4">Option 04</option>
                                        </select>
                                        <button class="uk-button info_user__editForm__btn uk-width-1-1 uk-button-default uk-text-left uk-position-relative" type="button" tabindex="-1">
                                            <span></span>
                                            <span class="uk-position-center-right uk-margin-small-right" uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                        <select>
                                            <option value="">Please select...</option>
                                            <option value="1" selected>TP. Hồ Chí Minh</option>
                                            <option value="2">Option 02</option>
                                            <option value="3">Option 03</option>
                                            <option value="4">Option 04</option>
                                        </select>
                                        <button class="uk-button info_user__editForm__btn uk-width-1-1 uk-button-default uk-text-left uk-position-relative" type="button" tabindex="-1">
                                            <span></span>
                                            <span class="uk-position-center-right uk-margin-small-right" uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label info_user__editForm__label" for="form-horizontal-text">Ngày sinh</label>
                        <div class="uk-form-controls">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                                <input class="uk-input info_user__editForm__input" id="form-horizontal-text" type="text" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label info_user__editForm__label" for="form-horizontal-text">Đổi mật khẩu</label>
                        <div class="uk-form-controls">
                            <input class="uk-input info_user__editForm__input" id="form-horizontal-text" type="password" placeholder="">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label info_user__editForm__label" for="form-horizontal-text"></label>
                        <div class="uk-form-controls">
                            <button type="submit" class="uk-button uk-button-secondary">Cập nhật</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php require "template-parts/layouts/footer.php"; ?>