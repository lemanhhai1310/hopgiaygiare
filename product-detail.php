<?php $data["title"] = "Product detail"; ?>
<?php $is_home = false; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Breadcrumb-->
<div class="productDetail__boxBreadcrumd uk-background-norepeat uk-text-center uk-background-cover uk-background-center-center" uk-parallax="bgy: -10" data-src="images/bg_breadcrumd.png" uk-img>
    <div class="uk-section-xsmall productDetail__boxBreadcrumd__mask">
        <div class="uk-container">
            <h3 class="uk-h3 uk-margin-remove productDetail__boxBreadcrumd__title">Business Cards</h3>
            <ul class="uk-breadcrumb uk-margin-remove">
                <li><a href="">Trang chủ</a></li>
                <li><a href="">Sản phẩm</a></li>
                <li><a href="">Business Cards</a></li>
                <li><span>Mẫu hộp giấy DAP-PB 000232</span></li>
            </ul>
        </div>
    </div>
</div>
<!--/Breadcrumb-->

<div class="uk-section-small productDetail__section1">
    <div class="uk-container">
        <!--Thông tin sản phẩm-->
        <div class="uk-card uk-card-default uk-card-body uk-margin productDetail__section1__card1">
            <div class="uk-grid-small uk-grid-50-m" uk-grid>
                <!--Slide sp-->
                <div class="uk-width-expand">
                    <div class="uk-position-relative" uk-slideshow="animation: fade;ratio: 1:1;">
                        <div class="uk-grid-small uk-grid-28-m" uk-grid>
                            <div class="uk-width-expand uk-flex-last@m">
                                <div class="slider-for">
                                    <?php
                                    $data = array(
                                        'images/products/img1.png',
                                        'images/products/img2.png',
                                        'images/products/img3.png',
                                        'images/products/img4.png',
                                        'images/products/img5.png',
                                        'images/products/img6.png',
                                        'images/products/img7.png',
                                        'images/products/img8.png',
                                    );
                                    foreach ($data as $k => $v): ?>
                                        <div>
                                            <div class="uk-cover-container">
                                                <img src="<?= $v ?>" alt="" uk-cover>
                                                <canvas width="640" height="640"></canvas>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <script>
                                  $('.slider-for').slick({
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    infinite: false,
                                    arrows: false,
                                    fade: true,
                                    asNavFor: '.slider-nav'
                                  });
                                </script>
                            </div>
                            <div class="uk-width-auto@m">
                                <div class="slider-nav">
                                    <?php
                                    $data = array(
                                        'images/products/img1.png',
                                        'images/products/img2.png',
                                        'images/products/img3.png',
                                        'images/products/img4.png',
                                        'images/products/img5.png',
                                        'images/products/img6.png',
                                        'images/products/img7.png',
                                        'images/products/img8.png',
                                    );
                                    foreach ($data as $k => $v): ?>
                                    <div class="slider-nav__item" uk-slideshow-item="<?= $k ?>">
                                        <div class="uk-cover-container slider-nav__img">
                                            <img src="<?= $v ?>" alt="" uk-cover>
                                            <canvas width="104" height="103"></canvas>
                                            <div class="uk-position-cover slider-nav__img__mask"></div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <script type="text/javascript">
                                  $(document).ready(function(){

                                    $('.slider-nav').slick({
                                      centerMode: false,
                                      // infinite: false,
                                      vertical: true,
                                      asNavFor: '.slider-for',
                                      focusOnSelect: true,
                                      slidesToShow: 4,
                                      slidesToScroll: 1,
                                      customPaging: 50,
                                      prevArrow: '<a href="" class="slider-nav__prevArrow slider-nav__icon uk-position-z-index" uk-toggle="cls: uk-position-top-center; mode: media; media: @m" uk-icon="icon: chevron-up; ratio: 1.5;"></a>',
                                      nextArrow: '<a href="" class="slider-nav__nextArrow slider-nav__icon uk-position-z-index" uk-toggle="cls: uk-position-bottom-center; mode: media; media: @m" uk-icon="icon: chevron-down; ratio: 1.5;"></a>',
                                      onBeforeChange: function() {
                                        // let's do this after we init the banner slider
                                        console.log('slider was initialized');
                                      },
                                      responsive: [
                                        {
                                          breakpoint: 1024,
                                          settings: {
                                            vertical: true,
                                            slidesToShow: 4,
                                            slidesToScroll: 1,
                                          }
                                        },
                                        {
                                          breakpoint: 960,
                                          settings: {
                                            vertical: false,
                                            slidesToShow: 4,
                                            slidesToScroll: 1,
                                          }
                                        },
                                        {
                                          breakpoint: 480,
                                          settings: {
                                            vertical: false,
                                            slidesToShow: 4,
                                            slidesToScroll: 1,
                                          }
                                        }
                                        // You can unslick at a given breakpoint now by adding:
                                        // settings: "unslick"
                                        // instead of a settings object
                                      ]
                                    })
                                      .on('init', function(event, slick){
                                        // let's do this after we init the banner slider
                                        console.log('slider was initialized');
                                      })
                                      .on('beforeChange', function(event, slick, currentSlide, nextSlide){
                                        // then let's do this before changing slides
                                        console.log('before change');
                                      })
                                      .on('afterChange', function(event, slick, currentSlide, nextSlide){
                                        // finally let's do this after changing slides
                                        console.log('after change');
                                      });
                                  });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Slide sp-->
                <div class="uk-width-2-5@m">
                    <div class="uk-margin">
                        <h1 class="uk-h1 productDetail__section1__thongtinsp__title">Mẫu hộp giấy DAP-PB 000232</h1>
                        <p class="productDetail__section1__thongtinsp__desc">Làm sạch sâu vượt trội, giúp lấy đi lớp trang điểm, bã nhờn và các hạt bụi siêu nhỏ có trong khói xe và môi trường ô nhiễm nhưng vẫn an toàn cho làn da nhạy cảm & dễ kích ứng.</p>
                    </div>
                    <ul class="uk-margin uk-list productDetail__section1__thongtinsp__list1">
                        <li>Mã SP: <span>HMP-QT 00006</span></li>
                        <li>Giá chỉ từ: <span>20.000đ</span></li>
                    </ul>
                    <div class="uk-margin">
                        <h4 class="uk-h4 uk-margin-remove productDetail__section1__thongtinlienhe__title">Thông tin liên hệ:</h4>
                        <ul class="uk-list productDetail__section1__thongtinlienhe__list">
                            <li>
                                <div class="uk-flex-middle uk-grid-small" uk-grid>
                                    <div class="uk-width-auto">
                                        <div><img src="images/support.png" alt=""></div>
                                    </div>
                                    <div class="uk-width-expand">
                                        Tư vấn sản phẩm: <span>+84 964 794 699</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-flex-middle uk-grid-small" uk-grid>
                                    <div class="uk-width-auto">
                                        <div><img src="images/quotation.png" alt=""></div>
                                    </div>
                                    <div class="uk-width-expand">
                                        Nhận báo giá : <span>sale@inhopgiayre.com</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-child-width-auto uk-grid-5" uk-grid>
                            <div><span class="productDetail__section1__thongtinsocial__txt">Share:</span></div>
                            <div><a href="" class="header__top__social"><span uk-icon="icon: facebook; ratio: 0.8"></span></a></div>
                            <div><a href="" class="header__top__social"><span uk-icon="icon: twitter; ratio: 0.8"></span></a></div>
                            <div><a href="" class="header__top__social"><span uk-icon="icon: pinterest; ratio: 0.8"></span></a></div>
                            <div><a href="" class="header__top__social"><span uk-icon="icon: linkedin; ratio: 0.8"></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Thông tin sản phẩm-->

        <!--Thông số chung-->
        <div class="uk-card uk-card-default uk-card-body uk-margin productDetail__section1__card1">
            <div class="uk-grid-67-m uk-margin" uk-grid>
                <div class="uk-width-expand">
                    <h4 class="uk-h4 uk-text-uppercase productDetail__section1__box1__title">Tham số chung</h4>
                    <div class="uk-child-width-1-2@m uk-grid-67-m" uk-grid>
                        <div>
                            <div class="uk-child-width-1-1 uk-grid-12" uk-grid>
                                <div>
                                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                                        <div class="uk-width-1-3@s">
                                            <div class="productDetail__section1__box1__label">Số lượng <span>(*)</span></div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <input class="uk-input productDetail__section1__box1__input" type="text" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                                        <div class="uk-width-1-3@s">
                                            <div class="productDetail__section1__box1__label">Kích thước <span>(*)</span></div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                <select>
                                                    <option value="">85cm x 54cm</option>
                                                    <option value="1">Option 01</option>
                                                    <option value="2">Option 02</option>
                                                    <option value="3">Option 03</option>
                                                    <option value="4">Option 04</option>
                                                </select>
                                                <button class="uk-button uk-button-default uk-width-1-1 productDetail__section1__box1__btn" type="button" tabindex="-1">
                                                    <span></span>
                                                    <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                                        <div class="uk-width-1-3@s">
                                            <div class="productDetail__section1__box1__label">Chất liệu <span>(*)</span></div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                <select>
                                                    <option value="">Nhựa trắng</option>
                                                    <option value="1">Option 01</option>
                                                    <option value="2">Option 02</option>
                                                    <option value="3">Option 03</option>
                                                    <option value="4">Option 04</option>
                                                </select>
                                                <button class="uk-button uk-button-default uk-width-1-1 productDetail__section1__box1__btn" type="button" tabindex="-1">
                                                    <span></span>
                                                    <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                                        <div class="uk-width-1-3@s">
                                            <div class="productDetail__section1__box1__label">Cán nilion <span>(*)</span></div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                <select>
                                                    <option value="">Không</option>
                                                    <option value="1">Option 01</option>
                                                    <option value="2">Option 02</option>
                                                    <option value="3">Option 03</option>
                                                    <option value="4">Option 04</option>
                                                </select>
                                                <button class="uk-button uk-button-default uk-width-1-1 productDetail__section1__box1__btn" type="button" tabindex="-1">
                                                    <span></span>
                                                    <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-child-width-1-1 uk-grid-12" uk-grid>
                                <div>
                                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                                        <div class="uk-width-1-3@s">
                                            <div class="productDetail__section1__box1__label">Định lượng <span>(*)</span></div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                <select>
                                                    <option value="">300g/m2</option>
                                                    <option value="1">Option 01</option>
                                                    <option value="2">Option 02</option>
                                                    <option value="3">Option 03</option>
                                                    <option value="4">Option 04</option>
                                                </select>
                                                <button class="uk-button uk-button-default uk-width-1-1 productDetail__section1__box1__btn" type="button" tabindex="-1">
                                                    <span></span>
                                                    <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                                        <div class="uk-width-1-3@s">
                                            <div class="productDetail__section1__box1__label">Gia công</div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                <select>
                                                    <option value="">Xén vuông</option>
                                                    <option value="1">Option 01</option>
                                                    <option value="2">Option 02</option>
                                                    <option value="3">Option 03</option>
                                                    <option value="4">Option 04</option>
                                                </select>
                                                <button class="uk-button uk-button-default uk-width-1-1 productDetail__section1__box1__btn" type="button" tabindex="-1">
                                                    <span></span>
                                                    <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                                        <div class="uk-width-1-3@s">
                                            <div class="productDetail__section1__box1__label">Thiết kế <span>(*)</span></div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                <select>
                                                    <option value="">Chúng tôi thiết kế</option>
                                                    <option value="1">Option 01</option>
                                                    <option value="2">Option 02</option>
                                                    <option value="3">Option 03</option>
                                                    <option value="4">Option 04</option>
                                                </select>
                                                <button class="uk-button uk-button-default uk-width-1-1 productDetail__section1__box1__btn" type="button" tabindex="-1">
                                                    <span></span>
                                                    <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                                        <div class="uk-width-1-3@s">
                                            <div class="productDetail__section1__box1__label">Công nghệ in</div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <input class="uk-input productDetail__section1__box1__input" type="text" placeholder="" value="In Offsett (2 - 4 ngày)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-3@m">
                    <h4 class="uk-h4 uk-text-uppercase productDetail__section1__box1__title">Thông tin liên hệ</h4>
                    <div class="uk-child-width-1-1 uk-grid-12" uk-grid>
                        <div>
                            <div class="uk-flex-middle uk-grid-small" uk-grid>
                                <div class="uk-width-1-3@s">
                                    <div class="productDetail__section1__box1__label">Họ tên <span>(*)</span></div>
                                </div>
                                <div class="uk-width-expand">
                                    <input class="uk-input productDetail__section1__box1__input" type="text" placeholder="" value="Điền tên của bạn ...">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-flex-middle uk-grid-small" uk-grid>
                                <div class="uk-width-1-3@s">
                                    <div class="productDetail__section1__box1__label">Địa chỉ <span>(*)</span></div>
                                </div>
                                <div class="uk-width-expand">
                                    <input class="uk-input productDetail__section1__box1__input" type="text" placeholder="" value="Đia chỉ giao hàng ...">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-flex-middle uk-grid-small" uk-grid>
                                <div class="uk-width-1-3@s">
                                    <div class="productDetail__section1__box1__label">Email <span>(*)</span></div>
                                </div>
                                <div class="uk-width-expand">
                                    <input class="uk-input productDetail__section1__box1__input" type="text" placeholder="" value="Email liên hệ ...">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-flex-middle uk-grid-small" uk-grid>
                                <div class="uk-width-1-3@s">
                                    <div class="productDetail__section1__box1__label">Phone <span>(*)</span></div>
                                </div>
                                <div class="uk-width-expand">
                                    <input class="uk-input productDetail__section1__box1__input" type="text" placeholder="" value="Điện thoại liên hệ ...">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-grid-small" uk-grid>
                                <div class="uk-width-1-3@s">
                                    <div class="productDetail__section1__box1__label">Ghi chú:</div>
                                </div>
                                <div class="uk-width-expand">
                                    <textarea class="uk-textarea productDetail__section1__box1__input" rows="3" placeholder="Nhập nội dung ghi chú (nếu nó) ..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-text-center uk-margin">
                <button type="button" class="uk-button uk-button-secondary uk-border-pill productDetail__section1__box2__btncart">
                    <div class="uk-child-width-auto uk-grid-5 uk-flex-middle" uk-grid>
                        <div>
                            <span uk-icon="icon: cart; ratio: 1"></span>
                        </div>
                        <div>
                            ĐẶT HÀNG NGAY
                        </div>
                    </div>
                </button>
            </div>
        </div>
        <!--/Thông số chung-->

        <!--mô tả chi tiết-->
        <div class="uk-grid-small uk-grid-30-m" uk-grid>
            <div class="uk-width-expand">
                <div class="productDetail__section1__box3 uk-margin">
                    <span class="productDetail__section1__box3__txt uk-text-uppercase">mô tả chi tiết</span>
                    <h2 class="productDetail__section1__box3__title uk-h2 uk-margin-remove">HỘP KHẨU TRANG Y TẾ 18.5CM X 10CM X 11CM MPB-0018</h2>
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
                        <h2 class="productDetail__section1__box3__title uk-h2 uk-margin-remove">DỊCH VỤ IN ẤN</h2>
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

        <!--SẢN PHẢM LIÊN QUAN-->
        <div class="uk-margin-medium" uk-slider="sets: true;finite: true;">
            <div class="uk-flex-middle uk-grid-small uk-margin" uk-grid>
                <div class="uk-width-expand">
                    <div class="productDetail__section1__box3">
                        <h2 class="productDetail__section1__box3__title uk-h2 uk-margin-remove">SẢN PHẨM LIÊN QUAN</h2>
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
                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-12 uk-grid-15-s uk-grid-30-m" uk-grid>
                        <?php for ($i=1;$i<=8;$i++): ?>
                            <li>
                                <div class="uk-child-width-1-1 home__boxProduct__grid1" uk-grid>
                                    <?php
                                    $data = array(
                                        array(
                                            'src' => 'images/products/img1.png',
                                            'title' => '',
                                            'price' => '',
                                        ),
                                    );
                                    foreach ($data as $k => $v): ?>
                                        <div>
                                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                                <div class="uk-overflow-hidden uk-margin">
                                                    <div class="uk-cover-container uk-transition-scale-up uk-transition-opaque" style="background-color: #ebebeb;">
                                                        <img src="images/products/img<?= $i + 4*$k ?>.png" alt="" uk-cover>
                                                        <canvas width="640" height="640"></canvas>
                                                    </div>
                                                </div>
                                                <div class="uk-text-center uk-margin">
                                                    <h4 class="home__boxProduct__boxsp__title uk-h4 uk-text-uppercase uk-margin-remove"><a href="product-detail.php">Sổ bìa da gáy còng A5</a></h4>
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
                            </li>
                        <?php endfor; ?>
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
        <!--/SẢN PHẢM LIÊN QUAN-->
    </div>
</div>

<?php require "template-parts/layouts/footer.php"; ?>