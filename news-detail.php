<?php $data["title"] = "Chi tiet tin tuc"; ?>
<?php $is_home = false; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Breadcrumb-->
<div class="productDetail__boxBreadcrumd uk-background-norepeat uk-text-center uk-background-cover uk-background-center-center" uk-parallax="bgy: -10" data-src="images/bg_breadcrumd.png" uk-img>
    <div class="uk-section-xsmall productDetail__boxBreadcrumd__mask">
        <div class="uk-container">
            <h3 class="uk-h3 uk-margin-remove productDetail__boxBreadcrumd__title">Kỹ thuật in 3D mới có gì đặc biệt?</h3>
            <ul class="uk-breadcrumb uk-margin-remove">
                <li><a href="">Trang chủ</a></li>
                <li><a href="">Tin tức</a></li>
                <li><span>Kỹ thuật in 3D mới có gì đặc biệt?</span></li>
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
                    <h2 class="productDetail__section1__box3__title uk-h2 uk-margin-remove">Kỹ thuật in 3D mới có gì đặc biệt?</h2>
                </div>
                <!--Noi dung bai viet-->
                <article class="uk-article productDetail__section1__article uk-margin">
                    <p>Khẩu trang với tác dụng ngăn ngừa bụi, vi khuẩn và các bệnh truyền nhiễm lây qua đường hô hấp đã trở thành vật bất ly thân đối với nhiều người. Người tiêu dùng thường chọn những loại khẩu trang có đóng hộp cẩn thận, nhãn mác rõ ràng để luôn an tâm về chất lượng và tin tưởng sử dụng. Do dó, các doanh ngiệp, cơ sở sản xuất, kinh doanh khẩu trang đặc biệt chú trọng đến thiết kế và nâng cao chất lượng bao bì sản phẩm để thu hút khách hàng, nâng cao tính cạnh tranh trên thị trường.</p>
                    <p>Hiểu được điều đó, Printgo xin được giới thiệu tới quý khách hàng mẫu hộp khẩu trang y tế 18.5cm x 10cm x 11cm MPB-0018 với những thông tin về thiết kế được mô tả dưới đây.</p>
                    <figure>
                        <img src="https://photo2.tinhte.vn/data/attachment-files/2021/03/5374763_Xe_Tinhte_DUCATI_848-0680.jpg" alt="">
                        <figcaption>Mẫu hộp khẩu trang y tế 18.5cm x 10cm x 11cm MPB-0018</figcaption>
                    </figure>
                    <p>Khẩu trang với tác dụng ngăn ngừa bụi, vi khuẩn và các bệnh truyền nhiễm lây qua đường hô hấp đã trở thành vật bất ly thân đối với nhiều người. Người tiêu dùng thường chọn những loại khẩu trang có đóng hộp cẩn thận, nhãn mác rõ ràng để luôn an tâm về chất lượng và tin tưởng sử dụng. Do dó, các doanh ngiệp, cơ sở sản xuất, kinh doanh khẩu trang đặc biệt chú trọng đến thiết kế và nâng cao chất lượng bao bì sản phẩm để thu hút khách hàng, nâng cao tính cạnh tranh trên thị trường.</p>
                    <p>Hiểu được điều đó, Printgo xin được giới thiệu tới quý khách hàng mẫu hộp khẩu trang y tế 18.5cm x 10cm x 11cm MPB-0018 với những thông tin về thiết kế được mô tả dưới đây.</p>
                </article>
                <!--/Noi dung bai viet-->

                <!--Tags-->
                <div class="uk-margin productDetail__section1__tags">
                    <span class="productDetail__section1__tags__txt">Tags:</span>
                    <?php
                    $data = array(
                        'Mẫu Hộp Khẩu Trang Y Tế',
                        'Hộp khẩu trang',
                    );
                    foreach ($data as $k => $v): ?>
                        <?= ($k == 0) ? '':',' ?><a href="" class="productDetail__section1__tags__link"><?= $v ?></a>
                    <?php endforeach; ?>
                </div>
                <!--/Tags-->

                <!--Comment-->
                <div class="uk-card uk-card-default uk-card-body uk-margin-medium productDetail__section1__card1">
                    <div class="uk-grid-divider uk-grid-large uk-margin-medium" uk-grid>
                        <div class="uk-width-auto">
                            <div class="productDetail__section1__box6">
                                <div class="productDetail__section1__box6__txt1">Tổng điểm</div>
                                <div class="uk-grid-10 uk-child-width-auto productDetail__section1__box6__txt2 uk-flex-middle" uk-grid>
                                    <div>
                                        <span>4.4</span>
                                    </div>
                                    <div>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="uk-child-width-1-1 uk-grid-10" uk-grid>
                                <?php
                                $x = 5;
                                while($x >= 1): ?>
                                    <div>
                                        <div class="uk-grid-small uk-grid-24-m uk-flex-middle" uk-grid>
                                            <div class="uk-width-auto">
                                                <div class="productDetail__section1__box7">
                                                    <span class="productDetail__section1__box7__txt"><?= $x ?></span>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <progress class="uk-progress productDetail__section1__box9" value="<?= (rand(1,100)) ?>" max="100"></progress>
                                            </div>
                                            <div class="uk-width-auto">
                                                <div class="productDetail__section1__box8"><span><?= (rand(1,102)) ?></span> đánh giá</div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $x--; endwhile; ?>
                            </div>
                        </div>
                    </div>
                    <form class="uk-grid-small uk-margin-medium" uk-grid>
                        <div class="uk-width-1-1">
                            <h5 class="uk-h5 uk-margin-remove productDetail__section1__box10__title">Vui lòng gởi đánh giá & bình luận sản phẩm này!</h5>
                            <div id="rating" class="uk-clearfix">
                                <input type="radio" id="star5" name="rating" value="5">
                                <label class="full" for="star5" title="Awesome - 5 stars"></label>

                                <input type="radio" id="star4" name="rating" value="4">
                                <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                                <input type="radio" id="star3" name="rating" value="3">
                                <label class="full" for="star3" title="Meh - 3 stars"></label>

                                <input type="radio" id="star2" name="rating" value="2">
                                <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                                <input type="radio" id="star1" name="rating" value="1">
                                <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            </div>
                            <script>
                              function calcRate(r) {
                                const f = ~~r,//Tương tự Math.floor(r)
                                  id = 'star' + f + (r % f ? 'half' : '')
                                id && (document.getElementById(id).checked = !0)
                              }
                            </script>
                        </div>
                        <div class="uk-width-1-2@s">
                            <input class="uk-input productDetail__section1__box10__input uk-border-rounded" type="text" placeholder="Họ và tên">
                        </div>
                        <div class="uk-width-1-2@s">
                            <input class="uk-input productDetail__section1__box10__input uk-border-rounded" type="text" placeholder="Phone">
                        </div>
                        <div class="uk-width-1-1">
                            <textarea class="uk-textarea productDetail__section1__box10__input uk-border-rounded" rows="3" placeholder="Nhập nội dung đánh giá ..."></textarea>
                        </div>
                        <div class="uk-width-auto">
                            <button type="button" class="uk-button uk-button-secondary uk-border-pill productDetail__section1__box2__btncart">
                                GỬI ĐÁNH GIÁ & BÌNH LUẬN
                            </button>
                        </div>
                    </form>
                    <div class="uk-margin-medium productDetail__section1__box11">
                        <div class="uk-child-width-1-1 uk-grid-small uk-grid-20-m" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'name' => 'Thảo Trúc',
                                    'txt' => 'Mình đã ăn thử 2 gói của shop do hôm đi với đám bạn làm đồ nướng ngoài trời nên mình chỉ có thể ăn nướng chứ chưa ăn thử cách hấp lên theo đánh giá cá nhân mình đúng là nướng lên có phần hơi khô và dai nhưng ăn cũng thấy ok đó là ý kiến của mình.',
                                ),
                                array(
                                    'name' => 'Tuấn Hải',
                                    'txt' => 'Lời khuyên cho mọi người khi ăn món thịt trâu gác bếp nên hấp cho mềm lên ăn sẽ ngon hơn thay vì nướng lại, mình đã thử cả 2 cách rồi hấp lên nó mềm ăn ngọt không có cảm giác khô, đó là góp ý của mình về món này',
                                ),
                                array(
                                    'name' => 'Toản',
                                    'txt' => 'Mình nhận được 1kg của shop gởi nhưng cho mình hỏi làm sao để cho thịt trâu nó mềm ra vậy shop, mình thấy nếu tiếp tục nướng lên ăn thì hơn khô',
                                ),
                            );
                            foreach ($data as $k => $v): ?>
                                <div>
                                    <div class="productDetail__section1__box11__margin">
                                        <span class="uk-margin-small-right productDetail__section1__box11__name"><?= $v['name'] ?></span>
                                        <span class="productDetail__section1__box11__buytxt">
                                            <i class="iconcom-checkbuy"></i>
                                            Chứng nhận đã mua hàng
                                        </span>
                                    </div>
                                    <div>
                                        <div class="productDetail__section1__box11__rate uk-display-inline-block uk-position-relative uk-margin-small-right">
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <div class="uk-position-cover uk-text-nowrap uk-overflow-hidden" style="width: <?= (rand(1,100)) ?>%">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <span class="productDetail__section1__box11__txt"><?= $v['txt'] ?></span>
                                    </div>
                                    <div class="productDetail__section1__box11__time">Trả lời  -  09:41 26/02/2021</div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <ul class="uk-pagination" uk-margin>
                        <li class="uk-active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><span uk-pagination-next></span></a></li>
                    </ul>
                </div>
                <!--/Comment-->
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
                        <span class="productDetail__section1__box3__txt uk-text-uppercase">HỎI & ĐÁP</span>
                        <h2 class="productDetail__section1__box3__title uk-h2 uk-margin-remove">q&a</h2>
                    </div>
                    <ul class="uk-list productDetail__section1__box4__qa uk-margin-remove">
                        <?php
                        $data = array(
                            'Tìm hiểu chất liệu in hộp giấy phổ biến hiện nay',
                            'Đặc điểm, cấu tạo hộp âm dương',
                            'Những lưu ý cần biết khi thiết kế hộp giấy',
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
        <!--bài viết LIÊN QUAN-->
        <div class="uk-margin-medium" uk-slider="sets: true;finite: true;">
            <div class="uk-flex-middle uk-grid-small uk-margin" uk-grid>
                <div class="uk-width-expand">
                    <div class="productDetail__section1__box3">
                        <h2 class="productDetail__section1__box3__title uk-h2 uk-margin-remove">bài viết LIÊN QUAN</h2>
                    </div>
                </div>
                <div class="uk-width-auto">
                    <div class="">
                        <a class="home__boxProduct__nav" href="#" uk-slider-item="previous"><img src="images/left-arrow.png" alt=""></a>
                        <a class="home__boxProduct__nav" href="#" uk-slider-item="next"><img src="images/right-arrow.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="uk-position-relative">

                <div class="uk-slider-container">
                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m uk-grid-12 uk-grid-15-s uk-grid-23-m" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'src' => 'https://photo2.tinhte.vn/data/attachment-files/2021/03/5379391_DSC_8417.jpg',
                                'title' => 'Trên tay Huawei Mate X2',
                            ),
                            array(
                                'src' => 'https://imgproxy3.cdnforo.com/QLCc-WvWx4hNp4nhXbL9UE685a8nTTYxftt0Z1KB5y4/h:460/plain/http://data.tinhte.vn/data/attachment-files/2021/03/5379141_pjimage.jpg',
                                'title' => 'Review bàn phím cơ Leopold FC980C và FC980M',
                            ),
                            array(
                                'src' => 'https://imgproxy3.cdnforo.com/QuYoOXXpr4sG_Pfz8ZL8qxBoXQ_CqNSUORUZPIYFepc/h:460/plain/http://data.tinhte.vn/data/attachment-files/2021/03/5378958_tinhte_petzl_iko_core5.jpg',
                                'title' => 'Trên tay đèn đội đầu thể thao Petzl IKO Core: Thiết kế kỳ dị, công năng đa dạng, pin sạc lại được',
                            ),
                            array(
                                'src' => '',
                                'title' => '',
                            ),
                            array(
                                'src' => '',
                                'title' => '',
                            ),
                        );
                        foreach ($data as $k => $v): ?>
                            <li>
                                <div class="uk-light uk-position-relative uk-inline-clip uk-transition-toggle" tabindex="0">
                                    <div class="uk-cover-container uk-transition-scale-up uk-transition-opaque">
                                        <img src="<?= ($v['src'] == '') ? 'images/noimage.jpg' : $v['src'] ?>" alt="" uk-cover>
                                        <canvas width="1125" height="690"></canvas>
                                    </div>
                                    <div class="uk-padding-small uk-position-bottom news-detail__box1 uk-flex uk-flex-bottom">
                                        <div class="uk-width-1-1">
                                            <h5 class="news-detail__box1__title uk-h5 uk-margin-remove-top uk-margin-small-bottom line-clamp-2"><a href=""><?= $v['title'] ?></a></h5>
                                            <div class="uk-child-width-auto uk-grid-small news__box1__date uk-margin-remove-bottom" uk-grid>
                                                <div>
                                                    <span uk-icon="icon: clock; ratio: 0.7"></span>
                                                    <span class="uk-text-middle">27-02-2021</span>
                                                </div>
                                                <div>
                                                    <span uk-icon="icon: users; ratio: 0.8"></span>
                                                    <span class="uk-text-middle">2045</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light" hidden>
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s" hidden>
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden@s"></ul>

        </div>
        <!--/bài viết LIÊN QUAN-->
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>