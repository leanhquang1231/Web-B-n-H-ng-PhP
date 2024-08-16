<?php
//b1: xac dinh co bao nhieu san pham, select count(*)
$hh = new hanghoa();
$count = $hh->getHangHoaAll()->rowCount(); //14
//b2: limit
$limit = 9;
//b3: tinh ra co bao nhieu trang
$trang = new page();
$page = $trang->findPage($count, $limit); //2 trang
//b4: tinh ra start
$start = $trang->findStart($limit); // 8
//b5: tao bien chua trang hien tai
$current_page = isset($_GET['page']) ? $_GET['page'] : 1
?>
<main id="main" class="">
    <div id="content" role="main" class="content-area">
        <div class="slider-wrapper relative" id="slider-1390950112" style="background-color:rgb(0, 0, 0);">
            <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal" data-flickity-options='{
            "cellAlign": "center",
            "imagesLoaded": true,
            "lazyLoad": 1,
            "freeScroll": false,
            "wrapAround": true,
            "autoPlay": 6000,
            "pauseAutoPlayOnHover" : true,
            "prevNextButtons": true,
            "contain" : true,
            "adaptiveHeight" : true,
            "dragThreshold" : 10,
            "percentPosition": true,
            "pageDots": true,
            "rightToLeft": false,
            "draggable": true,
            "selectedAttraction": 0.1,
            "parallax" : 0,
            "friction": 0.6        }'>
                <div class="banner has-hover" id="banner-1814771633">
                    <div class="banner-inner fill">
                        <div class="banner-bg fill">
                            <div class="bg fill bg-fill "></div>
                        </div>
                        <div class="banner-layers container">
                            <div class="fill banner-link"></div>
                        </div>
                    </div>
                    <style>
                        #banner-1814771633 {
                            padding-top: 35%;
                        }

                        #banner-1814771633 .bg.bg-loaded {
                            background-image: url(wp-content/uploads/2024/01/Banner-mixue-chuc-mung-nam-moi-1400x533.jpg);
                        }

                        @media (min-width: 550px) {
                            #banner-1814771633 {
                                padding-top: 35%;
                            }
                        }

                        @media (min-width: 850px) {
                            #banner-1814771633 {
                                padding-top: 35%;
                            }
                        }
                    </style>
                </div>
                <div class="banner has-hover" id="banner-1459502570">
                    <div class="banner-inner fill">
                        <div class="banner-bg fill">
                            <div class="bg fill bg-fill "></div>
                        </div>
                        <div class="banner-layers container">
                            <div class="fill banner-link"></div>
                        </div>
                    </div>
                    <style>
                        #banner-1459502570 {
                            padding-top: 35%;
                        }

                        #banner-1459502570 .bg.bg-loaded {
                            background-image: url(wp-content/uploads/2024/01/Banner-Mixue.jpg);
                        }

                        #banner-1459502570 .bg {
                            background-position: 51% 39%;
                        }

                        @media (min-width: 550px) {
                            #banner-1459502570 {
                                padding-top: 35%;
                            }
                        }
                    </style>
                </div>
                <div class="banner has-hover" id="banner-326978467">
                    <div class="banner-inner fill">
                        <div class="banner-bg fill">
                            <div class="bg fill bg-fill "></div>
                        </div>
                        <div class="banner-layers container">
                            <div class="fill banner-link"></div>
                        </div>
                    </div>
                    <style>
                        #banner-326978467 {
                            padding-top: 35%;
                        }

                        #banner-326978467 .bg.bg-loaded {
                            background-image: url(wp-content/uploads/2023/08/Mam-Xoi-Mixue-Banner-1400x521.png);
                        }

                        @media (min-width: 550px) {
                            #banner-326978467 {
                                padding-top: 35%;
                            }
                        }

                        @media (min-width: 850px) {
                            #banner-326978467 {
                                padding-top: 35%;
                            }
                        }
                    </style>
                </div>
            </div>
            <div class="loading-spin dark large centered"></div>
        </div>
        <<section class="section" id="section_1418150447">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            <div class="section-content relative">
                <div class="row large-columns-4 medium-columns-3 small-columns-2 row-small ">
                    <?php
                    $hh = new hanghoa();
                    $result = $hh->getHangHoaAllPage($start, $limit);
                    while ($set = $result->fetch()) :
                    ?>
                        <div class="product-small col has-hover product type-product post-683 status-publish first instock product_cat-kem has-post-thumbnail shipping-taxable purchasable product-type-simple">
                            <div class="col-inner">
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a href="index.php?action=sanpham&act=sanphamchitiet&mahh=<?php echo $set['mahh'] ?>">
                                                <img fetchpriority="high" decoding="async" width="300" height="300" src="content/imagetourdien/<?php echo $set['hinh']; ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Sữa kem lắc mâm xôi" sizes="(max-width: 300px) 100vw, 300px" />
                                                <h4><?php echo $set['tenhh'] ?></h4>
                                                <h5>
                                                    <?php echo $set['dongia'] ?>
                                                </h5>
                                            </a>
                                        </div>
                                        <!-- <div class="image-tools is-small top right show-on-hover"></div> -->
                                        <!-- <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div> -->
                                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            <a href="index32bd.html?add-to-cart=683" data-quantity="1" class="add-to-cart-grid no-padding is-transparent product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="683" data-product_sku="" aria-label="Add to cart: &ldquo;Sữa Kem Lắc Mâm Xôi&rdquo;" aria-describedby="" rel="nofollow">
                                                <div class="cart-icon tooltip is-small" title="Thêm vào giỏ hàng">
                                                    <strong>+</strong>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="row">
                    <div class="col-md-6 div col-md-offset-3 text-center">
                        <ul class="pagination">
                            <?php
                            if ($current_page > 1 && $page > 1) {
                                echo '<li><a href="/WEBAO/index.php?action=home&page=' . ($current_page - 1) . '">Prev</a></li>';
                            }

                            for ($i = 1; $i <= $page; $i++) : ?>
                                <li><a href="/WEBAO/index.php?action=home&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                            <?php endfor;

                            if ($current_page < $page && $page > 1) {
                                echo '<li><a href="/WEBAO/index.php?action=home&page=' . ($current_page + 1) . '">Next</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>









                <div class="container section-title-container">
                    <h3 class="section-title section-title-center">
                        <b></b>
                        <span class="section-title-main" style="color:rgb(255, 0, 0);">MENU MIXUE</span>
                        <b></b>
                    </h3>
                </div>
                <div class="row large-columns-4 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                    <div class="product-category col">
                        <div class="col-inner">
                            <a aria-label="Visit product category Kem" href="nsp/kem/index.html">
                                <div class="box box-category has-hover box-overlay dark box-text-middle ">
                                    <div class="box-image">
                                        <div class="image-cover" style="padding-top:113%;">
                                            <img loading="lazy" decoding="async" src="wp-content/uploads/2023/07/Hong-Tra-Kem-300x300.jpg" alt="Kem" width="300" height="300" />
                                            <div class="overlay" style="background-color: rgba(0, 0, 0, 0.16)"></div>
                                        </div>
                                    </div>
                                    <div class="box-text text-center">
                                        <div class="box-text-inner">
                                            <h5 class="uppercase header-title">Kem </h5>
                                            <p class="is-xsmall uppercase count show-on-hover hover-reveal reveal-small">14 Sản phẩm </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="product-category col">
                        <div class="col-inner">
                            <a aria-label="Visit product category Trà Hoa Quả" href="nsp/tra-hoa-qua/index.html">
                                <div class="box box-category has-hover box-overlay dark box-text-middle ">
                                    <div class="box-image">
                                        <div class="image-cover" style="padding-top:113%;">
                                            <img loading="lazy" decoding="async" src="wp-content/uploads/2023/07/Hong-Tra-Chanh-300x300.jpg" alt="Trà Hoa Quả" width="300" height="300" />
                                            <div class="overlay" style="background-color: rgba(0, 0, 0, 0.16)"></div>
                                        </div>
                                    </div>
                                    <div class="box-text text-center">
                                        <div class="box-text-inner">
                                            <h5 class="uppercase header-title">Trà Hoa Quả </h5>
                                            <p class="is-xsmall uppercase count show-on-hover hover-reveal reveal-small">10 Sản phẩm </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="product-category col">
                        <div class="col-inner">
                            <a aria-label="Visit product category Trà Sữa" href="nsp/tra-sua/index.html">
                                <div class="box box-category has-hover box-overlay dark box-text-middle ">
                                    <div class="box-image">
                                        <div class="image-cover" style="padding-top:113%;">
                                            <img loading="lazy" decoding="async" src="wp-content/uploads/2023/07/Tra-Sua-Ba-Vuong-300x300.jpg" alt="Trà Sữa" width="300" height="300" />
                                            <div class="overlay" style="background-color: rgba(0, 0, 0, 0.16)"></div>
                                        </div>
                                    </div>
                                    <div class="box-text text-center">
                                        <div class="box-text-inner">
                                            <h5 class="uppercase header-title">Trà Sữa </h5>
                                            <p class="is-xsmall uppercase count show-on-hover hover-reveal reveal-small">8 Sản phẩm </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="product-category col">
                        <div class="col-inner">
                            <a aria-label="Visit product category Đồ Lưu Niệm" href="nsp/do-luu-niem/index.html">
                                <div class="box box-category has-hover box-overlay dark box-text-middle ">
                                    <div class="box-image">
                                        <div class="image-cover" style="padding-top:113%;">
                                            <img loading="lazy" decoding="async" src="wp-content/uploads/2023/07/Coc-Nhua-Hinh-Tuyet-Vuong-Mau-Hong-300x300.jpg" alt="Đồ Lưu Niệm" width="300" height="300" />
                                            <div class="overlay" style="background-color: rgba(0, 0, 0, 0.16)"></div>
                                        </div>
                                    </div>
                                    <div class="box-text text-center">
                                        <div class="box-text-inner">
                                            <h5 class="uppercase header-title">Đồ Lưu Niệm </h5>
                                            <p class="is-xsmall uppercase count show-on-hover hover-reveal reveal-small">11 Sản phẩm </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container section-title-container">
                    <h3 class="section-title section-title-center">
                        <b></b>
                        <span class="section-title-main" style="color:rgb(255, 0, 0);">TIN MỚI</span>
                        <b></b>
                    </h3>
                </div>
                <div class="row large-columns-4 medium-columns-3 small-columns-1 has-shadow row-box-shadow-1 slider row-slider slider-nav-reveal" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                    <div class="col post-item">
                        <div class="col-inner">
                            <a href="menu-mixue-cap-nhat-moi-nhat/index.html" class="plain">
                                <div class="box box-overlay dark box-text-bottom box-blog-post has-hover">
                                    <div class="box-image">
                                        <div class="image-cover" style="padding-top:300px;">
                                            <img loading="lazy" decoding="async" width="711" height="400" src="wp-content/uploads/2024/01/Menu-mixue-cap-nhat-moi-nhat-13-01-2024-711x400.png" class="attachment-medium size-medium wp-post-image" alt="Menu mixue cập nhật mới nhất 13-01-2024" srcset="https://mixuediemdien.com/wp-content/uploads/2024/01/Menu-mixue-cap-nhat-moi-nhat-13-01-2024-711x400.png 711w, https://mixuediemdien.com/wp-content/uploads/2024/01/Menu-mixue-cap-nhat-moi-nhat-13-01-2024-768x432.png 768w, https://mixuediemdien.com/wp-content/uploads/2024/01/Menu-mixue-cap-nhat-moi-nhat-13-01-2024-600x337.png 600w, https://mixuediemdien.com/wp-content/uploads/2024/01/Menu-mixue-cap-nhat-moi-nhat-13-01-2024.png 1366w" sizes="(max-width: 711px) 100vw, 711px" />
                                            <div class="overlay" style="background-color: rgba(0,0,0,.25)"></div>
                                        </div>
                                    </div>
                                    <div class="box-text text-center">
                                        <div class="box-text-inner blog-post-inner">
                                            <h5 class="post-title is-large uppercase">Menu Mixue cập nhật mới nhất (13/01/2024)</h5>
                                            <div class="is-divider"></div>
                                            <p class="from_the_blog_excerpt ">Menu Mixue cập nhật mới nhất ngày 13/01/2024. Để đặt hàng các bạn có thể [...] </p>
                                        </div>
                                    </div>
                                    <div class="badge absolute top post-date badge-square">
                                        <div class="badge-inner">
                                            <span class="post-date-day">07</span>
                                            <br>
                                            <span class="post-date-month is-xsmall">Th1</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col post-item">
                        <div class="col-inner">
                            <a href="mixue-menu-cap-nhat-moi-nhat/index.html" class="plain">
                                <div class="box box-overlay dark box-text-bottom box-blog-post has-hover">
                                    <div class="box-image">
                                        <div class="image-cover" style="padding-top:300px;">
                                            <img loading="lazy" decoding="async" width="707" height="400" src="wp-content/uploads/2023/08/Mixue-Menu-cap-nhat-moi-nhat--707x400.jpg" class="attachment-medium size-medium wp-post-image" alt="Mixue Menu cập nhật mới nhất" srcset="https://mixuediemdien.com/wp-content/uploads/2023/08/Mixue-Menu-cap-nhat-moi-nhat--707x400.jpg 707w, https://mixuediemdien.com/wp-content/uploads/2023/08/Mixue-Menu-cap-nhat-moi-nhat--768x434.jpg 768w, https://mixuediemdien.com/wp-content/uploads/2023/08/Mixue-Menu-cap-nhat-moi-nhat--600x339.jpg 600w, https://mixuediemdien.com/wp-content/uploads/2023/08/Mixue-Menu-cap-nhat-moi-nhat-.jpg 1280w" sizes="(max-width: 707px) 100vw, 707px" />
                                            <div class="overlay" style="background-color: rgba(0,0,0,.25)"></div>
                                        </div>
                                    </div>
                                    <div class="box-text text-center">
                                        <div class="box-text-inner blog-post-inner">
                                            <h5 class="post-title is-large uppercase">Mixue menu cập nhật mới nhất (27/08/2023)</h5>
                                            <div class="is-divider"></div>
                                            <p class="from_the_blog_excerpt ">Dưới đây là Mixue menu mới cập nhật (27/08/2023). Mời các bạn tham khảo như [...] </p>
                                        </div>
                                    </div>
                                    <div class="badge absolute top post-date badge-square">
                                        <div class="badge-inner">
                                            <span class="post-date-day">27</span>
                                            <br>
                                            <span class="post-date-month is-xsmall">Th8</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col post-item">
                        <div class="col-inner">
                            <a href="top-5-mon-ban-nhat-dinh-phai-thu-khi-den-mixue-diem-dien-moi/index.html" class="plain">
                                <div class="box box-overlay dark box-text-bottom box-blog-post has-hover">
                                    <div class="box-image">
                                        <div class="image-cover" style="padding-top:300px;">
                                            <img loading="lazy" decoding="async" width="533" height="400" src="wp-content/uploads/2023/07/Top-5-mon-ban-nhat-dinh-phai-thu-khi-den-Mixue-Diem-Dien-Moi-533x400.jpg" class="attachment-medium size-medium wp-post-image" alt="Top 5 món bạn nhất định phải thử khi đến Mixue Diêm Điền Mới" srcset="https://mixuediemdien.com/wp-content/uploads/2023/07/Top-5-mon-ban-nhat-dinh-phai-thu-khi-den-Mixue-Diem-Dien-Moi-533x400.jpg 533w, https://mixuediemdien.com/wp-content/uploads/2023/07/Top-5-mon-ban-nhat-dinh-phai-thu-khi-den-Mixue-Diem-Dien-Moi-1067x800.jpg 1067w, https://mixuediemdien.com/wp-content/uploads/2023/07/Top-5-mon-ban-nhat-dinh-phai-thu-khi-den-Mixue-Diem-Dien-Moi-768x576.jpg 768w, https://mixuediemdien.com/wp-content/uploads/2023/07/Top-5-mon-ban-nhat-dinh-phai-thu-khi-den-Mixue-Diem-Dien-Moi-1536x1152.jpg 1536w, https://mixuediemdien.com/wp-content/uploads/2023/07/Top-5-mon-ban-nhat-dinh-phai-thu-khi-den-Mixue-Diem-Dien-Moi-2048x1536.jpg 2048w, https://mixuediemdien.com/wp-content/uploads/2023/07/Top-5-mon-ban-nhat-dinh-phai-thu-khi-den-Mixue-Diem-Dien-Moi-600x450.jpg 600w" sizes="(max-width: 533px) 100vw, 533px" />
                                            <div class="overlay" style="background-color: rgba(0,0,0,.25)"></div>
                                        </div>
                                    </div>
                                    <div class="box-text text-center">
                                        <div class="box-text-inner blog-post-inner">
                                            <h5 class="post-title is-large uppercase">Top 5 món bạn nhất định phải thử khi đến Mixue Diêm Điền Mới</h5>
                                            <div class="is-divider"></div>
                                            <p class="from_the_blog_excerpt ">Mixue là một thương hiệu kem, trà sữa và trà hoa quả được giới trẻ [...] </p>
                                        </div>
                                    </div>
                                    <div class="badge absolute top post-date badge-square">
                                        <div class="badge-inner">
                                            <span class="post-date-day">29</span>
                                            <br>
                                            <span class="post-date-month is-xsmall">Th7</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col post-item">
                        <div class="col-inner">
                            <a href="mixue-diem-dien-moi-mang-su-khac-biet-toi-que-huong-5-tan/index.html" class="plain">
                                <div class="box box-overlay dark box-text-bottom box-blog-post has-hover">
                                    <div class="box-image">
                                        <div class="image-cover" style="padding-top:300px;">
                                            <img loading="lazy" decoding="async" width="711" height="400" src="wp-content/uploads/2023/07/Mixue-thuong-co-khong-gian-decor-rat-dep-va-phu-hop-de-chup-anh-song-ao-711x400.jpg" class="attachment-medium size-medium wp-post-image" alt="" srcset="https://mixuediemdien.com/wp-content/uploads/2023/07/Mixue-thuong-co-khong-gian-decor-rat-dep-va-phu-hop-de-chup-anh-song-ao-711x400.jpg 711w, https://mixuediemdien.com/wp-content/uploads/2023/07/Mixue-thuong-co-khong-gian-decor-rat-dep-va-phu-hop-de-chup-anh-song-ao-1400x788.jpg 1400w, https://mixuediemdien.com/wp-content/uploads/2023/07/Mixue-thuong-co-khong-gian-decor-rat-dep-va-phu-hop-de-chup-anh-song-ao-768x432.jpg 768w, https://mixuediemdien.com/wp-content/uploads/2023/07/Mixue-thuong-co-khong-gian-decor-rat-dep-va-phu-hop-de-chup-anh-song-ao-1536x864.jpg 1536w, https://mixuediemdien.com/wp-content/uploads/2023/07/Mixue-thuong-co-khong-gian-decor-rat-dep-va-phu-hop-de-chup-anh-song-ao-2048x1152.jpg 2048w, https://mixuediemdien.com/wp-content/uploads/2023/07/Mixue-thuong-co-khong-gian-decor-rat-dep-va-phu-hop-de-chup-anh-song-ao-600x338.jpg 600w" sizes="(max-width: 711px) 100vw, 711px" />
                                            <div class="overlay" style="background-color: rgba(0,0,0,.25)"></div>
                                        </div>
                                    </div>
                                    <div class="box-text text-center">
                                        <div class="box-text-inner blog-post-inner">
                                            <h5 class="post-title is-large uppercase">Mixue Diêm Điền Mới &#8211;Mang sự khác biệt tới Quê Hương 5 Tấn</h5>
                                            <div class="is-divider"></div>
                                            <p class="from_the_blog_excerpt ">Mixue Diêm Điền Mới thuộc chuỗi cửa hàng nhượng quyền chính thức của Mixue Việt [...] </p>
                                        </div>
                                    </div>
                                    <div class="badge absolute top post-date badge-square">
                                        <div class="badge-inner">
                                            <span class="post-date-day">19</span>
                                            <br>
                                            <span class="post-date-month is-xsmall">Th7</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col post-item">
                        <div class="col-inner">
                            <a href="loi-bai-hat-mixue-tieng-trung-tieng-anh-va-tieng-viet/index.html" class="plain">
                                <div class="box box-overlay dark box-text-bottom box-blog-post has-hover">
                                    <div class="box-image">
                                        <div class="image-cover" style="padding-top:300px;">
                                            <img loading="lazy" decoding="async" width="711" height="400" src="wp-content/uploads/2023/07/Loi-bai-hat-Mixue-Tieng-Trung-%e2%80%93-Tieng-Anh-va-Tieng-Viet-711x400.jpg" class="attachment-medium size-medium wp-post-image" alt="Lời bài hát Mixue Tiếng Trung – Tiếng Anh và Tiếng Việt" srcset="https://mixuediemdien.com/wp-content/uploads/2023/07/Loi-bai-hat-Mixue-Tieng-Trung-–-Tieng-Anh-va-Tieng-Viet-711x400.jpg 711w, https://mixuediemdien.com/wp-content/uploads/2023/07/Loi-bai-hat-Mixue-Tieng-Trung-–-Tieng-Anh-va-Tieng-Viet-768x432.jpg 768w, https://mixuediemdien.com/wp-content/uploads/2023/07/Loi-bai-hat-Mixue-Tieng-Trung-–-Tieng-Anh-va-Tieng-Viet-600x338.jpg 600w, https://mixuediemdien.com/wp-content/uploads/2023/07/Loi-bai-hat-Mixue-Tieng-Trung-–-Tieng-Anh-va-Tieng-Viet.jpg 1280w" sizes="(max-width: 711px) 100vw, 711px" />
                                            <div class="overlay" style="background-color: rgba(0,0,0,.25)"></div>
                                        </div>
                                    </div>
                                    <div class="box-text text-center">
                                        <div class="box-text-inner blog-post-inner">
                                            <h5 class="post-title is-large uppercase">Lời bài hát Mixue Tiếng Trung, Tiếng Anh và Tiếng Việt</h5>
                                            <div class="is-divider"></div>
                                            <p class="from_the_blog_excerpt ">Bài hát của Mixue đang làm mưa làm gió trên các mạng xã hội thời [...] </p>
                                        </div>
                                    </div>
                                    <div class="badge absolute top post-date badge-square">
                                        <div class="badge-inner">
                                            <span class="post-date-day">17</span>
                                            <br>
                                            <span class="post-date-month is-xsmall">Th7</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col post-item">
                        <div class="col-inner">
                            <a href="menu-mixue-co-gi-dac-biet-khien-gioi-tre-phai-san-lung/index.html" class="plain">
                                <div class="box box-overlay dark box-text-bottom box-blog-post has-hover">
                                    <div class="box-image">
                                        <div class="image-cover" style="padding-top:300px;">
                                            <img loading="lazy" decoding="async" width="711" height="400" src="wp-content/uploads/2023/07/menu-mixue-711x400.jpg" class="attachment-medium size-medium wp-post-image" alt="Thực Đơn Của Mixue Diêm Điền" srcset="https://mixuediemdien.com/wp-content/uploads/2023/07/menu-mixue-711x400.jpg 711w, https://mixuediemdien.com/wp-content/uploads/2023/07/menu-mixue-1400x788.jpg 1400w, https://mixuediemdien.com/wp-content/uploads/2023/07/menu-mixue-768x432.jpg 768w, https://mixuediemdien.com/wp-content/uploads/2023/07/menu-mixue-1536x864.jpg 1536w, https://mixuediemdien.com/wp-content/uploads/2023/07/menu-mixue-600x338.jpg 600w, https://mixuediemdien.com/wp-content/uploads/2023/07/menu-mixue.jpg 1920w" sizes="(max-width: 711px) 100vw, 711px" />
                                            <div class="overlay" style="background-color: rgba(0,0,0,.25)"></div>
                                        </div>
                                    </div>
                                    <div class="box-text text-center">
                                        <div class="box-text-inner blog-post-inner">
                                            <h5 class="post-title is-large uppercase">Menu Mixue có gì đặc biệt khiến giới trẻ phải săn lùng</h5>
                                            <div class="is-divider"></div>
                                            <p class="from_the_blog_excerpt ">Các cửa hàng Mixue với 2 màu chủ đạo đỏ và trắng xuất hiện hàng [...] </p>
                                        </div>
                                    </div>
                                    <div class="badge absolute top post-date badge-square">
                                        <div class="badge-inner">
                                            <span class="post-date-day">11</span>
                                            <br>
                                            <span class="post-date-month is-xsmall">Th7</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #section_1418150447 {
                    padding-top: 60px;
                    padding-bottom: 60px;
                    background-color: rgb(255, 255, 255);
                }
            </style>
            </section>
    </div>
</main>