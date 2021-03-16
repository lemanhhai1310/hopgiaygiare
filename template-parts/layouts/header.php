<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Hộp giấy giá rẻ - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css">
    <link rel="stylesheet" href="assets/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="assets/slick-1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>
    <script src="assets/slick-1.8.1/slick/slick.min.js"></script>
    <script src="js/app.js"></script>
</head>
<body class="<?= ($is_home) ? 'isHome' : 'notHome' ?>">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<?php require "template-parts/commons/modal.php"; ?>
<?php require "template-parts/commons/menu-mobile.php"; ?>
<section id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <header class="header uk-box-shadow-small">
        <div class="header__top">
            <div class="uk-container uk-padding-remove">
                <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                    <div class="uk-navbar-left">
                        <div class="uk-navbar-item header__top__navitem" uk-toggle="cls: uk-padding-remove-left; mode: media; media: @l">
                            <div class="uk-child-width-auto uk-grid-5" uk-grid>
                                <div><a href="" class="header__top__social"><span uk-icon="icon: facebook; ratio: 0.8"></span></a></div>
                                <div><a href="" class="header__top__social"><span uk-icon="icon: twitter; ratio: 0.8"></span></a></div>
                                <div><a href="" class="header__top__social"><span uk-icon="icon: pinterest; ratio: 0.8"></span></a></div>
                                <div><a href="" class="header__top__social"><span uk-icon="icon: linkedin; ratio: 0.8"></span></a></div>
                            </div>
                        </div>
                        <div class="uk-navbar-item header__top__navitem uk-visible@m">
                            <div class="uk-flex-middle uk-grid-5" uk-grid>
                                <div class="uk-width-auto">
                                    <span class="header__top__icon" uk-icon="icon: location; ratio: 0.85"></span>
                                </div>
                                <div class="uk-width-expand">
                                    <span class="header__top__txt">449 Nguyễn Oanh, Phường 17, Quận Gò Vấp, TP. Hồ Chí Minh</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="uk-navbar-right">
                        <div class="uk-navbar-item header__top__navitem uk-visible@m">
                            <div class="uk-flex-middle uk-grid-5" uk-grid>
                                <div class="uk-width-auto">
                                    <span class="header__top__icon" uk-icon="icon: receiver; ratio: 0.9"></span>
                                </div>
                                <div class="uk-width-expand">
                                    <span class="header__top__txt">+84 964 794 699</span>
                                </div>
                            </div>
                        </div>
                        <div class="uk-navbar-item header__top__navitem" uk-toggle="cls: uk-padding-remove-right; mode: media; media: @l">
                            <div class="uk-flex-middle uk-grid-5" uk-grid>
                                <div class="uk-width-auto">
                                    <span class="header__top__icon" uk-icon="icon: sign-in; ratio: 1"></span>
                                </div>
                                <div class="uk-width-expand">
                                    <ul class="header__top__subnav uk-subnav uk-subnav-divider" uk-margin>
                                        <li><a href="#" uk-toggle="target: #modal-login">Đăng nhập</a></li>
                                        <li><a href="#" uk-toggle="target: #modal-register">Đăng ký</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </nav>
            </div>
        </div>
        <div uk-sticky="top: 100vh;animation: uk-animation-slide-top;">
            <div class="uk-background-default header__bottom">
                <div class="uk-container uk-padding-remove">
                    <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

                        <div class="uk-navbar-left">
                            <a href="." class="uk-navbar-item header__bottom__navitem uk-logo" uk-toggle="cls: uk-padding-remove-left; mode: media; media: @l"><img src="images/logo.png" alt=""></a>
                        </div>

                        <div class="uk-navbar-right">

                            <ul class="uk-navbar-nav uk-visible@m">
                                <li class="uk-active"><a href="product.php">Sản phẩm</a></li>
                                <li class="uk-parent">
                                    <a href="service.php">Dịch vụ</a>
                                    <div class="uk-navbar-dropdown uk-padding-remove" uk-dropdown="animation: uk-animation-slide-bottom-small; duration: 300">
                                        <ul class="uk-nav uk-navbar-dropdown-nav header__bottom__subnav uk-position-relative">
                                            <?php
                                            $data = array(
                                                array(
                                                    'txt' => 'Business Cards',
                                                    'sub' => false,
                                                ),
                                                array(
                                                    'txt' => 'Postcards',
                                                    'sub' => true,
                                                ),
                                                array(
                                                    'txt' => 'Carbonless Form',
                                                    'sub' => false,
                                                ),
                                                array(
                                                    'txt' => 'Catalogs',
                                                    'sub' => true,
                                                ),
                                                array(
                                                    'txt' => 'Counter Cards',
                                                    'sub' => true,
                                                ),
                                                array(
                                                    'txt' => 'Door Hangers',
                                                    'sub' => false,
                                                ),
                                                array(
                                                    'txt' => 'Envelopes',
                                                    'sub' => true,
                                                ),
                                                array(
                                                    'txt' => 'Flyers',
                                                    'sub' => true,
                                                ),
                                            );
                                            foreach ($data as $k => $v): ?>
                                            <li class="<?= ($v['sub']) ? 'uk-parent' : '' ?>">
                                                <a href="#"><?= $v['txt'] ?></a>
                                                <?php if ($v['sub']): ?>
                                                    <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2 header__bottom__submenu uk-padding-remove" uk-dropdown="pos: right-top; animation: uk-animation-slide-right-small; duration: 300">
                                                        <div class="header__bottom__submenu__txt"><?= $v['txt'] ?></div>
                                                        <ul class="header__bottom__sub2 uk-nav uk-navbar-dropdown-nav uk-child-width-1-2 uk-grid-collapse" uk-grid>
                                                            <?php
                                                            $data1 = array(
                                                                'Premium Business Cards',
                                                                'Free Business Cards',
                                                                'Die-Cut Business Cards',
                                                                'Standard Business Cards',
                                                                'Personal Business Cards',
                                                                'Business Card Holders',
                                                                'Networking Cards',
                                                                'Appointment Cards',
                                                                'Mommy Cards',
                                                                'Marketing Postcards',
                                                                "Marketing's Card",
                                                                'Mailing Services',
                                                                'Flyers Product',
                                                                'Flyers Two Page',
                                                                'Brochures',
                                                            );
                                                            foreach ($data1 as $k1 => $v1): ?>
                                                                <li><a href="#"><?= $v1 ?></a></li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                        <!--
                                                        <div class="uk-navbar-dropdown-grid uk-child-width-1-2" uk-grid>
                                                            <div>
                                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                                    <li class="uk-active"><a href="#">Active</a></li>
                                                                    <li><a href="#">Item</a></li>
                                                                    <li class="uk-nav-header">Header</li>
                                                                    <li><a href="#">Item</a></li>
                                                                    <li><a href="#">Item</a></li>
                                                                    <li class="uk-nav-divider"></li>
                                                                    <li><a href="#">Item</a></li>
                                                                </ul>
                                                            </div>
                                                            <div>
                                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                                    <li class="uk-active"><a href="#">Active</a></li>
                                                                    <li><a href="#">Item</a></li>
                                                                    <li class="uk-nav-header">Header</li>
                                                                    <li><a href="#">Item</a></li>
                                                                    <li><a href="#">Item</a></li>
                                                                    <li class="uk-nav-divider"></li>
                                                                    <li><a href="#">Item</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    -->
                                                    <!--
                                                    <ul class="uk-nav uk-navbar-dropdown-nav uk-dropdown uk-dropdown-right" uk-dropdown="pos: right-top; animation: uk-animation-slide-bottom-small; duration: 300">
                                                        <li><a href="#">Thông cáo báo chí</a></li>
                                                    </ul>
                                                    -->
                                                <?php endif; ?>
                                            </li>
                                            <?php endforeach; ?>
                                            <li class="header__bottom__load_more"><a href="">Xem tất cả</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#">Báo giá</a></li>
                                <li><a href="news.php">Tin tức</a></li>
                                <li><a href="about.php">Giới thiệu</a></li>
                                <li><a href="qa.php">Q&A</a></li>
                                <li><a href="contact.php">Liên hệ</a></li>
                            </ul>
                            <div class="uk-flex">
                                <div class="uk-navbar-item header__bottom__navitem">
                                    <a href="cart.php" class="uk-position-relative header__bottom__icon" uk-icon="icon: cart; ratio: 1.1">
                                        <span class="uk-badge uk-position-top-right">2</span>
                                    </a>
                                    <div id="cart-show" class="dropdown-cart uk-width-medium uk-position-z-index uk-padding-remove" uk-dropdown="pos: bottom-right;offset: 20;">
                                        <div class="uk-padding-small uk-hidden">
                                            <span>Chưa có sản phẩm trong giỏ hàng.</span>
                                        </div>
                                        <div class="uk-card dropdown-cart__card">
                                            <div class="uk-card-header dropdown-cart__card__header">
                                                <span class="dropdown-cart__card__header__title">Sản Phẩm Mới Thêm</span>
                                            </div>
                                            <div class="uk-card-body dropdown-cart__card__body uk-padding-remove">
                                                <?php
                                                $data = array(
                                                    array(
                                                        'src' => 'https://hoabanfood.com/wp-content/uploads/thit-bo-gac-bep-tui-500gram-1-300x169.jpg',
                                                        'name' => 'THỊT BÒ GÁC BẾP | 500gram',
                                                        'gia1' => '1,700,000₫',
                                                        'gia2' => '1,590,000₫',
                                                    ),
                                                    array(
                                                        'src' => 'https://hoabanfood.com/wp-content/uploads/Thit-Ga-Gac-Bep-Tay-Bac-10-300x169.jpg',
                                                        'name' => 'THỊT BÒ GÁC BẾP | 500gram',
                                                        'gia1' => '1,700,000₫',
                                                        'gia2' => '1,590,000₫',
                                                    ),
                                                    array(
                                                        'src' => 'https://hoabanfood.com/wp-content/uploads/thit-bo-gac-bep-hoabanfood-1-300x169.jpg',
                                                        'name' => 'THỊT BÒ GÁC BẾP | 500gram',
                                                        'gia1' => '1,700,000₫',
                                                        'gia2' => '1,590,000₫',
                                                    ),
                                                );
                                                foreach ($data as $k => $v): ?>
                                                    <div class="dropdown-cart__card__body__item">
                                                        <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                                            <div class="uk-width-auto">
                                                                <div class="uk-cover-container uk-border-circle">
                                                                    <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                                                    <canvas width="40" height="40"></canvas>
                                                                </div>
                                                            </div>
                                                            <div class="uk-width-expand">
                                                                <span class="suggest__item__name"><?= $v['name'] ?></span>
                                                            </div>
                                                            <div class="uk-width-auto">
                                                                <div><span class="suggest__item__price suggest__item__price--new"><?= $v['gia2'] ?></span></div>
                                                                <div class="uk-text-right"><a class="dropdown-cart__card__body__delete" href="">Xoá</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <div class="uk-card-footer dropdown-cart__card__footer uk-text-right">
                                                <button type="button" class="uk-button uk-button-secondary dropdown-cart__card__footer__btn">Xem giỏ hàng</button>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                      // UIkit.dropdown('#cart-show').show();
                                    </script>
                                </div>
                                <div>
                                    <a class="uk-navbar-toggle header__bottom__navitem header__bottom__icon" href="#" uk-icon="icon: search; ratio: 1.1"></a>
                                    <div class="uk-navbar-dropdown uk-padding-small uk-padding-remove-top uk-padding-remove-bottom uk-width-medium" uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !nav">

                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-expand">
                                                <form class="uk-search uk-search-navbar uk-width-1-1">
                                                    <input class="uk-search-input header__bottom__searchInput" type="search" placeholder="Bạn cần in gì ?" autofocus>
                                                </form>
                                            </div>
                                            <div class="uk-width-auto">
                                                <a class="uk-navbar-dropdown-close" href="#" uk-close></a>
                                            </div>
                                        </div>

                                        <div id="suggest_sp" class="uk-padding-remove uk-height-medium uk-overflow-auto suggest" uk-dropdown="mode: click">
                                            <?php
                                            $x = 40;
                                            $data = array(
                                                array(
                                                    'src' => 'https://hoabanfood.com/wp-content/uploads/thit-bo-gac-bep-tui-500gram-1-300x169.jpg',
                                                    'name' => 'THỊT BÒ GÁC BẾP | 500gram',
                                                    'gia1' => '1,700,000₫',
                                                    'gia2' => '1,590,000₫',
                                                ),
                                                array(
                                                    'src' => 'https://hoabanfood.com/wp-content/uploads/Thit-Ga-Gac-Bep-Tay-Bac-10-300x169.jpg',
                                                    'name' => 'THỊT BÒ GÁC BẾP | 500gram',
                                                    'gia1' => '1,700,000₫',
                                                    'gia2' => '1,590,000₫',
                                                ),
                                                array(
                                                    'src' => 'https://hoabanfood.com/wp-content/uploads/thit-bo-gac-bep-hoabanfood-1-300x169.jpg',
                                                    'name' => 'THỊT BÒ GÁC BẾP | 500gram',
                                                    'gia1' => '1,700,000₫',
                                                    'gia2' => '1,590,000₫',
                                                ),
                                                array(
                                                    'src' => 'https://hoabanfood.com/wp-content/uploads/thit-gac-bep-banner-1000px-300x166.jpg',
                                                    'name' => 'THỊT BÒ GÁC BẾP | 500gram',
                                                    'gia1' => '1,700,000₫',
                                                    'gia2' => '1,590,000₫',
                                                ),
                                                array(
                                                    'src' => 'https://hoabanfood.com/wp-content/uploads/combo-gia-vi-tay-bac-3-2020-5-300x169.jpg',
                                                    'name' => 'THỊT BÒ GÁC BẾP | 500gram',
                                                    'gia1' => '1,700,000₫',
                                                    'gia2' => '1,590,000₫',
                                                ),
                                            );
                                            foreach ($data as $k => $v): ?>
                                                <div class="uk-padding-small suggest__item">
                                                    <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                                        <div class="uk-width-auto">
                                                            <div class="uk-cover-container uk-border-circle">
                                                                <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                                                <canvas width="<?= $x ?>" height="<?= $x ?>"></canvas>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <span class="suggest__item__name"><?= $v['name'] ?></span>
                                                        </div>
                                                        <div class="uk-width-auto">
                                                            <div>
                                                                <del class="suggest__item__price suggest__item__price--old"><?= $v['gia1'] ?></del>
                                                            </div>
                                                            <div><span class="suggest__item__price suggest__item__price--new"><?= $v['gia2'] ?></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <script>
                                          // UIkit.dropdown('#suggest_sp').show();
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <a href="#offcanvas-overlay-trekhoedep" class="uk-navbar-toggle header__bottom__navitem uk-hidden@m" uk-toggle>
                                <div id="m_nav_menu" class="m_nav menu">
                                    <div class="m_nav_ham button_closed" id="m_ham_1"></div>
                                    <div class="m_nav_ham button_closed" id="m_ham_2"></div>
                                    <div class="m_nav_ham button_closed" id="m_ham_3"></div>
                                </div>
                            </a>
                            <div class="uk-navbar-item header__bottom__navitem uk-visible@m" uk-toggle="cls: uk-padding-remove-right; mode: media; media: @l">
                                <a href="tracuudonhang.php" class="header__btn uk-button uk-button-default uk-border-pill uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/bg1_btn.png" uk-img>Tra cứu đơn hàng</a>
                            </div>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </header>
