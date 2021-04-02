<?php $data["title"] = "QUẢN LÝ ĐƠN HÀNG "; ?>
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
                        <span uk-icon="icon: menu; ratio: 1"></span>
                        <span class="uk-text-middle info_user__box1__txt">QUẢN LÝ ĐƠN HÀNG</span>
                    </div>
                </div>
                <table class="uk-table uk-table-divider uk-table-small order__table">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã đơn hàng</th>
                        <th>Ngày nhận</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php for ($i=1;$i<=10;$i++): ?>
                    <tr>
                        <td>
                            <span class="order__stt"><?= $i ?></span>
                        </td>
                        <td>
                            <span class="order__code">MSHD850</span>
                        </td>
                        <td>
                            <span class="order__time">30/03/2021</span>
                        </td>
                        <td>
                            <a href="" class="order__name">Hộp son hiện đại</a>
                        </td>
                        <td>
                            <span class="order__time">100</span>
                        </td>
                        <td>
                            <span class="order__price">10.000.000đ</span>
                        </td>
                        <td>
                            <span class="order__status">Mới đặt</span>
                        </td>
                    </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
                <ul class="uk-pagination uk-flex-center" uk-margin>
                    <li><a href="#"><span uk-pagination-previous></span></a></li>
                    <li><a href="#">1</a></li>
                    <li class="uk-disabled"><span>...</span></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li class="uk-active"><span>7</span></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#"><span uk-pagination-next></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php require "template-parts/layouts/footer.php"; ?>