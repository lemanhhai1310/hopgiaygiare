<?php $w = '97' ?>
<?php $ratio = '0.8' ?>
<div class="uk-text-center uk-margin">
    <div class="uk-cover-container uk-display-inline-block uk-border-circle uk-margin-small-bottom">
        <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover>
        <canvas width="<?= $w ?>" height="<?= $w ?>"></canvas>
    </div>
    <div class="uk-text-uppercase sidebar__box1__txt1">Lê Mạnh Hải</div>
    <div class="sidebar__box1__txt2">Thành viên</div>
    <div class="sidebar__box1__txt3">0964 794 699</div>
</div>
<ul class="uk-nav-default uk-nav-parent-icon sidebar__box2" uk-nav>
    <li class="uk-active"><a href="info_user.php"><span class="uk-margin-small-right" uk-icon="icon: user; ratio: <?= $ratio ?>"></span> <span class="uk-text-middle">Cập nhật Thông tin tài khoản</span></a></li>
    <li>
        <a href="order.php"><span class="uk-margin-small-right" uk-icon="icon: menu; ratio: <?= $ratio ?>"></span> <span class="uk-text-middle">Quản lý đơn hàng</span></a>
        <ul class="uk-nav-sub">
            <li><a href="#">Đang xử lý</a></li>
            <li><a href="#">Đang giao</a></li>
            <li><a href="#">Đã giao hàng</a></li>
            <li><a href="#">Từ chối</a></li>
        </ul>
    </li>
    <li class="uk-nav-divider"></li>
    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: sign-out; ratio: <?= $ratio ?>"></span> <span class="uk-text-middle">Đăng xuất</span></a></li>
</ul>