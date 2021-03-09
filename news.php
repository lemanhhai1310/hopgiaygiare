<?php $data["title"] = "Tin tuc"; ?>
<?php $is_home = false; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Breadcrumb-->
<div class="productDetail__boxBreadcrumd uk-background-norepeat uk-text-center uk-background-cover uk-background-center-center" uk-parallax="bgy: -10" data-src="images/bg_breadcrumd.png" uk-img>
    <div class="uk-section-xsmall productDetail__boxBreadcrumd__mask">
        <div class="uk-container">
            <h3 class="uk-h3 uk-margin-remove productDetail__boxBreadcrumd__title">Tin tức</h3>
            <ul class="uk-breadcrumb uk-margin-remove">
                <li><a href="">Trang chủ</a></li>
                <li><span>Tin tức</span></li>
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
                <div class="productDetail__section1__box3 uk-margin">
                    <span class="productDetail__section1__box3__txt uk-text-uppercase">tin tức</span>
                    <h2 class="productDetail__section1__box3__title uk-h2 uk-margin-remove">in ấn</h2>
                </div>
                <div class="uk-child-width-1-3@m uk-grid-small uk-grid-23-m uk-grid-match" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'https://znews-photo.zadn.vn/w960/Uploaded/ovhunut/2021_03_06/NQH_8554.jpg',
                            'title' => 'Thủ tướng đối thoại với lãnh đạo Masan, Vietjet, Thaco',
                            'desc' => 'Thủ tướng Nguyễn Xuân Phúc tổ chức buổi Đối thoại 2045 nhằm lắng nghe kiến nghị từ giới doanh nhân, tri thức để tìm ra giải pháp phát triển đất nước.',
                        ),
                        array(
                            'src' => 'https://znews-photo.zadn.vn/w480/Uploaded/kbd_pijv/2021_03_02/Do_Thien_Anh_Tuan_zg.jpg',
                            'title' => 'Người dân cần được tạo cơ hội làm giàu chính đáng',
                            'desc' => 'Ông Đỗ Thiên Anh Tuấn, Đại học Fulbright, cho rằng muốn dân giàu, phải cho phép người dân được làm giàu. Do đó, để người dân có thể làm giàu, Nhà nước phải trao cơ hội.',
                        ),
                        array(
                            'src' => '',
                            'title' => 'Văn Hậu - ngoại lệ của tuyển Việt Nam',
                            'desc' => 'VFF phải triệu tập cuộc trao đổi với đủ mọi ban bệ để bàn riêng về chấn thương của Đoàn Văn Hậu.',
                        ),
                        array(
                            'src' => '',
                            'title' => 'Con trai duy nhất của tỷ phú Bill Gates độc thân, sống kín tiếng',
                            'desc' => 'Khác hai chị em gái, Rory John Gates sống rất khép kín, hiếm chia sẻ đời tư. Chàng trai 22 tuổi hài lòng với trang Instagram cá nhân chỉ vỏn vẹn 262 người theo dõi.',
                        ),
                        array(
                            'src' => '',
                            'title' => 'Vừa bước khỏi xe, người đàn ông té xuống cống',
                            'desc' => 'Người đàn ông ngã xuống cống sau khi bước qua nắp cống bị vỡ. Anh bị trầy xước nhẹ.',
                        ),
                        array(
                            'src' => '',
                            'title' => 'Thanh niên ngáo đá chém người đi đường',
                            'desc' => 'Nam thanh niên có biểu hiệu ngáo đá bị cảnh sát khống chế sau khi chém người đi đường và đập phá tài sản.',
                        ),
                        array(
                            'src' => '',
                            'title' => 'Lãi suất tiết kiệm tăng mạnh',
                            'desc' => 'Từ tháng 3, lãi suất huy động phân hóa rõ khi một số ngân hàng tư nhân cỡ lớn tăng mạnh lãi tiết kiệm. Ngược lại, nhóm ngân hàng cỡ vừa và nhỏ vẫn giữ nguyên hoặc tiếp tục giảm.',
                        ),
                        array(
                            'src' => '',
                            'title' => 'Quảng cáo thời trang nam bị chỉ trích vì hình ảnh gợi dục',
                            'desc' => 'Chiến dịch của hãng thời trang Suit Supply gây tranh cãi vì người mẫu thực hiện động tác nhạy cảm. Đại diện thương hiệu cho hay ý nghĩa của bộ ảnh là "bình thường mới đang đến".',
                        ),
                        array(
                            'src' => '',
                            'title' => 'Phạm Băng Băng xuống sắc trong hình ảnh mới',
                            'desc' => 'Phạm Băng Băng xuất hiện trên tạp chí The Wow với gương mặt gần như không trang điểm. Nữ diễn viên có làn da trắng sáng nhưng thần sắc kém tươi tắn.',
                        ),
                        array(
                            'src' => '',
                            'title' => 'Quang Hải bị chấn thương dây chằng',
                            'desc' => 'Tiền vệ số 19 của CLB Hà Nội bỏ ngỏ khả năng ra sân ở trận đấu bù vòng 3 V.League 2021 gặp CLB Hải Phòng.',
                        ),
                        array(
                            'src' => '',
                            'title' => 'Con gái không rời Lưu Khải Uy',
                            'desc' => 'Con gái Tiểu Gạo Nếp của Dương Mịch và Lưu Khải Uy thường xuyên phải xa cha mẹ. Theo lời kể từ gia đình, cô bé rất quấn quýt với cha.',
                        ),
                        array(
                            'src' => '',
                            'title' => "'Rời khỏi Mỹ là lựa chọn đúng đắn nhất của gia đình tôi'",
                            'desc' => 'Hai vợ chồng cô Gabriella M. Lindsay nghỉ việc, bán nhà và xe hơi để rời khỏi Mỹ. Với công việc mới và chi phí giảm đáng kể, họ có cuộc sống thoải mái tại Mexico và đảo Antigua.',
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                    <div>
                        <div class="uk-card news__box1">
                            <div class="uk-cover-container">
                                <img src="<?= ($v['src'] == '') ? 'images/noimage.jpg' : $v['src'] ?>" alt="" uk-cover>
                                <canvas width="834" height="567"></canvas>
                            </div>
                            <div class="uk-card-body uk-padding-small">
                                <div class="uk-child-width-auto uk-grid-small news__box1__date" uk-grid>
                                    <div>
                                        <span uk-icon="icon: clock; ratio: 0.7"></span>
                                        <span class="uk-text-middle">27-02-2021</span>
                                    </div>
                                    <div>
                                        <span uk-icon="icon: users; ratio: 0.8"></span>
                                        <span class="uk-text-middle">2045</span>
                                    </div>
                                </div>
                                <h5 class="uk-h5 uk-margin-remove news__box1__title"><a href="news-detail.php"><?= $v['title'] ?></a></h5>
                                <p class="line-clamp-2 uk-margin-remove news__box1__desc"><?= $v['desc'] ?></p>
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
                        <span class="productDetail__section1__box3__txt uk-text-uppercase">DANH MỤC</span>
                        <h2 class="productDetail__section1__box3__title uk-h2 uk-margin-remove">TIN TỨC</h2>
                    </div>
                    <ul class="uk-list productDetail__section1__box4__qa productDetail__section1__box4__qa--c1 uk-margin-remove">
                        <?php
                        $data = array(
                            'Thiết kế',
                            'Khuyến mãi',
                            'Tuyển dụng',
                            'Báo chí nói về chúng tôi',
                            'In ấn',
                            'Bảng báo giá',
                            'Wiki Printing',
                            'Tài nguyên',
                            'Dự án nổi bật',
                        );
                        foreach ($data as $k => $v): ?>
                            <li><a href=""><?= $v ?></a></li>
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