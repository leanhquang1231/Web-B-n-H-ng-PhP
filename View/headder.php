<?php

// Tính số lượng sản phẩm trong giỏ hàng và lưu thông tin sản phẩm
$totalItems = 0;
$cartItems = [];
if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $totalItems += $item['soluong']; // Giả sử 'soluong' là số lượng sản phẩm
        $cartItems[] = $item; // Lưu thông tin sản phẩm vào mảng
    }
}
?>
<a class="skip-link screen-reader-text" href="#main">Skip to content</a>
<div id="wrapper">
    <header id="header" class="header header-full-width has-sticky sticky-jump">
        <div class="header-wrapper">
            <div id="top-bar" class="header-top hide-for-sticky nav-dark show-for-medium">
                <div class="flex-row container">
                    <div class="flex-col hide-for-medium flex-left">
                        <ul class="nav nav-left medium-nav-center nav-small nav-divided"></ul>
                    </div>
                    <div class="flex-col hide-for-medium flex-center">
                        <ul class="nav nav-center nav-small nav-divided"></ul>
                    </div>
                    <div class="flex-col hide-for-medium flex-right">
                        <ul class="nav top-bar-nav nav-right nav-small nav-divided"></ul>
                    </div>
                    <div class="flex-col show-for-medium flex-grow">
                        <ul class="nav nav-center nav-small mobile-nav nav-divided">
                            <li class="header-search-form search-form html relative has-icon">
                                <div class="header-search-form-wrapper">
                                    <div class="searchform-wrapper ux-search-box relative is-normal">
                                        <form role="search" method="get" class="searchform" action="https://mixuediemdien.com/">
                                            <div class="flex-row relative">
                                                <div class="flex-col flex-grow">
                                                    <label class="screen-reader-text" for="woocommerce-product-search-field-0">Tìm kiếm:</label>
                                                    <input type="search" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="Tìm món nhanh" value="" name="s" />
                                                    <input type="hidden" name="post_type" value="product" />
                                                </div>
                                                <div class="flex-col">
                                                    <button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                                                        <i class="icon-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="live-search-results text-left z-top"></div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="masthead" class="header-main">
                <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
                    <!-- Logo -->
                    <div id="logo" class="flex-col logo">
                        <a href="index.php?action=home" title="Mixue Diêm Điền Mới - Mixue Diêm Điền Mới (68 Phạm Ngũ Lão)" rel="home">
                            <img width="200" height="90" src="wp-content/uploads/2023/07/logo_mixue.webp" class="header_logo header-logo" alt="Mixue Diêm Điền Mới" />
                            <img width="200" height="90" src="wp-content/uploads/2023/07/logo_mixue.webp" class="header-logo-dark" alt="Mixue Diêm Điền Mới" />
                        </a>
                    </div>
                    <!-- Mobile Left Elements -->
                    <div class="flex-col show-for-medium flex-left">
                        <ul class="mobile-nav nav nav-left">
                            <li class="nav-icon has-icon">
                                <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
                                    <i class="icon-menu"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Left Elements -->
                    <div class="flex-col hide-for-medium flex-left flex-grow">
                        <ul class="header-nav header-nav-main nav nav-left nav-size-large nav-uppercase">
                            <li id="menu-item-273" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-273 active menu-item-design-default">
                                <a href="index.php?action=home" aria-current="page" class="nav-top-link">TRANG CHỦ</a>
                            </li>
                            <li id="menu-item-272" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-272 menu-item-design-default">
                                <a href="index.php?action=menu" class="nav-top-link">MENU</a>
                            </li>
                            <li id="menu-item-232" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-232 menu-item-design-default">
                                <a href="index.php?action=quangcao" class="nav-top-link">GIỚI THIỆU</a>
                            </li>
                            <li id="menu-item-256" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-256 menu-item-design-default">
                                <a href="tin-tuc/index.html" class="nav-top-link">TIN TỨC</a>
                            </li>
                            <li class="header-search-form search-form html relative has-icon">
                                <div class="header-search-form-wrapper">
                                    <div class="searchform-wrapper ux-search-box relative is-normal">
                                        <form role="search" method="get" class="searchform" action="https://mixuediemdien.com/">
                                            <div class="flex-row relative">
                                                <div class="flex-col">
                                                    <button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                                                        <i class="icon-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="live-search-results text-left z-top"></div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Right Elements -->
                    <div class="nav-item">
                        <a href="index.php?action=dangky" class="nav-link">ĐĂNG KÝ</a>
                    </div>
                    <div class="nav-item" style="margin-top: 0px;">
                        <?php if (isset($_SESSION['makh'])) : ?>
                            <a href="index.php?action=dangnhap&act=dangxuat" class="nav-link">ĐĂNG XUẤT</a>
                        <?php else : ?>
                            <a href="index.php?action=dangnhap" class="nav-link">ĐĂNG NHẬP</a>
                        <?php endif; ?>
                    </div>
                    <div class="flex-col hide-for-medium flex-right">
                        <ul class="header-nav header-nav-main nav nav-right nav-size-large nav-uppercase">
                            <li class="cart-item has-icon has-dropdown">
                                <a href="index.php?action=cart" title="Giỏ hàng" class="header-cart-link is-small">
                                    <span class="header-cart-title">
                                        Giỏ hàng /
                                        <span class="cart-price">
                                            <span class="woocommerce-Price-amount amount">
                                                <bdi><?php echo $totalItems; ?> sản phẩm</bdi>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <a href="index.php?action=cart" title="Giỏ hàng" class="header-cart-link is-small">
                                    <span class="cart-icon image-icon">
                                        <strong><?php echo $totalItems; ?></strong>
                                    </span>
                                </a>
                                <ul class="nav-dropdown nav-dropdown-default">
                                    <li class="html widget_shopping_cart">
                                        <div class="widget_shopping_cart_content">
                                            <?php if ($totalItems > 0) : ?>
                                                <ul class="cart-items">
                                                    <?php foreach ($cartItems as $item) : ?>
                                                        <li class="cart-item">
                                                        <h5 class="card-title"><?php echo $item['name']; ?></h5>
                                                            <img width="100" height="100" src="<?php echo './Content/imagetourdien/' . $item['hinh']; ?>" alt="">
                                                                <span class="cart-item-name"><?php echo $item['name']; ?></span>
                                                                <span class="cart-item-quantity">x <?php echo $item['soluong']; ?></span>
                                                                <p> Tổng Giá: <?php echo '$' . $item['total']; ?></p>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <a href="index.php?action=cart" class="button view-cart">Xem giỏ hàng</a>
                                            <?php else : ?>
                                                <p class="empty-cart">Giỏ hàng trống</p>
                                            <?php endif; ?>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-icon has-icon">
                                <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
                                    <i class="icon-menu"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
