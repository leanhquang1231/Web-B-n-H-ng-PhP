


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script type="text/javascript">
    function chonsize(a) {
        document.getElementById("size").value = a;
    }
    <script>
function addToCart() {
    var mahh = '<?php echo $mahh; ?>'; // Replace with your PHP variable for product ID
    var soluong = document.getElementById('quantity_65a797d6aa593').value;
    var dongia = '<?php echo $dongia; ?>'; // Replace with your PHP variable for product price

    $.ajax({
        url: 'index.php?action=cart&act=cart_action',
        method: 'POST',
        data: { mahh: mahh, soluong: soluong, dongia: dongia },
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                alert('Product added to cart successfully!');
                window.location.href = 'index.php?action=cart';
            }
        }
    });
}

function increaseQuantity() {
    var quantityInput = document.getElementById('quantity_65a797d6aa593');
    var currentValue = parseInt(quantityInput.value);
    quantityInput.value = currentValue + 1;
}

function decreaseQuantity() {
    var quantityInput = document.getElementById('quantity_65a797d6aa593');
    var currentValue = parseInt(quantityInput.value);
    if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
    }
}
</script>

</script>
<main id="main" class="">
    <div class="shop-container">
        <div class="container">
            <div class="woocommerce-notices-wrapper"></div>
        </div>
        <div id="product-668" class="product type-product post-668 status-publish first instock product_cat-do-an-vat has-post-thumbnail shipping-taxable purchasable product-type-simple">

            <div class="product-container">
                <form id="productForm" action="index.php?action=cart&act=cart_action" method="post">
                    <div class="product-main">
                        <div class="row content-row mb-0">
                            <div class="product-gallery col large-6">
                                <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 1;">
                                    <div class="badge-container is-larger absolute left top z-1">
                                    </div>
                                    <div class="image-tools absolute top show-on-hover right z-3">
                                    </div>
                                    <?php
                                    if (isset($_GET['mahh'])) {
                                        $id = $_GET['mahh'];
                                        $hh = new hanghoa();
                                        $sp = $hh->getHangHoaId($id);
                                        $tenhh = $sp['tenhh'];
                                        // $mota = $sp['mota'];
                                        $dongia = $sp['dongia'];
                                        $hinh = $hh->getHangHoaHinh($id);
                                        //$set = $hinh->fetch();
                                    }
                                    ?>
                                    <figure class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half flickity-enabled" data-flickity-options="{
                &quot;cellAlign&quot;: &quot;center&quot;,
                &quot;wrapAround&quot;: true,
                &quot;autoPlay&quot;: false,
                &quot;prevNextButtons&quot;:true,
                &quot;adaptiveHeight&quot;: true,
                &quot;imagesLoaded&quot;: true,
                &quot;lazyLoad&quot;: 1,
                &quot;dragThreshold&quot; : 15,
                &quot;pageDots&quot;: false,
                &quot;rightToLeft&quot;: false       }" tabindex="0">


                                        <div class="flickity-viewport" style="height: 510px; touch-action: pan-y;">
                                            <div class="flickity-slider" style="left: 0px; transform: translateX(0%);">
                                                <div class="woocommerce-product-gallery__image slide first is-selected" style="position: absolute; left: 0%;"><a href="../../wp-content/uploads/2023/07/Khoai-tay-chien.jpg">
                                                        <input type="text" hidden name="mahh" value="<?php echo $id?>">
                                                       
                                                        <img width="510" height="510" src="<?php echo './Content/imagetourdien/' . $hinh[0]; ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="flickity-button flickity-prev-next-button previous" type="button" disabled="" aria-label="Previous"><svg class="flickity-button-icon" viewBox="0 0 100 100">
                                                <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path>
                                            </svg>
                                        </button>
                                        <button class="flickity-button flickity-prev-next-button next" type="button" disabled="" aria-label="Next"><svg class="flickity-button-icon" viewBox="0 0 100 100">
                                                <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow" transform="translate(100, 100) rotate(180) "></path>
                                            </svg>
                                        </button>
                                    </figure>
                                    <div class="image-tools absolute bottom left z-3">
                                        <a href="#product-zoom" class="zoom-button button is-outline circle icon tooltip hide-for-small tooltipstered">
                                            <i class="icon-expand"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info summary col-fit col entry-summary product-summary">
                                <nav class="woocommerce-breadcrumb breadcrumbs uppercase"><a href="../WebAo/index.html">Trang chủ</a> <span class="divider">/</span> <a href="../../nsp/do-an-vat/index.html">Đồ Ăn Vặt</a></nav>
                                <h1 class="product-title product_title entry-title">
                                    <?php echo $tenhh; ?>
                                </h1>
//
                                <div class="is-divider small"></div>
                                <ul class="next-prev-thumbs is-small show-for-medium">
                                    <li class="prod-dropdown has-dropdown">
                                        <a href="../thach-hut/index.html" rel="next" class="button icon is-outline circle">
                                            <i class="icon-angle-left"></i> </a>
                                        <div class="nav-dropdown">
                                            <a title="Thạch hút" href="../thach-hut/index.html">
                                                <img width="100" height="100" src="../../wp-content/uploads/2023/07/Thach-hut-100x100.jpg" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image" alt="Thạch hút" decoding="async" loading="lazy" srcset="https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-100x100.jpg 100w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-400x400.jpg 400w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-800x800.jpg 800w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-280x280.jpg 280w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-768x768.jpg 768w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-1536x1536.jpg 1536w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-300x300.jpg 300w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-600x600.jpg 600w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut.jpg 2048w" sizes="(max-width: 100px) 100vw, 100px"></a>
                                        </div>
                                    </li>
                                    <li class="prod-dropdown has-dropdown">
                                        <a href="../hat-huong-duong/index.html" rel="next" class="button icon is-outline circle">
                                            <i class="icon-angle-right"></i> </a>
                                        <div class="nav-dropdown">
                                            <a title="Hạt hướng dương" href="../hat-huong-duong/index.html">
                                                <img width="100" height="100" src="" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image" alt="Hạt hướng dương" decoding="async" loading="lazy" srcset="https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-100x100.jpg 100w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-400x400.jpg 400w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-800x800.jpg 800w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-280x280.jpg 280w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-768x768.jpg 768w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-1536x1536.jpg 1536w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-300x300.jpg 300w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-600x600.jpg 600w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong.jpg 2048w" sizes="(max-width: 100px) 100vw, 100px"></a>
                                        </div>
                                    </li>
                                </ul> 
                                <div class="price-wrapper">
                                    <p class="price product-page-price ">
                                        <input type="hidden" name="dongia" value="<?php echo $dongia?>">
                                        <?php echo $dongia ?><span class="woocommerce-Price-currencySymbol">₫</span></bdi></span>
                                    </p>
                                </div>
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus button is-form"> <label class="screen-reader-text" for="quantity_65a797d6aa593">
                                    </label>
                                    <input type="number" id="quantity_65a797d6aa593" class="input-text qty text" step="1" min="1" max="" name="soluong" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
                                    <input type="button" value="+" class="plus button is-form">
                                </div>
                                <button type="submit" name="" value="668" class="single_add_to_cart_button button alt">Thêm vào giỏ hàng</button>
                                <p><strong><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-vivid-red-color">ĐẶT HÀNG NHANH LIÊN HỆ 0989.764.223</mark></strong></p>
                                <div class="product_meta">
                                    <span class="posted_in">Danh mục: <a href="../../nsp/do-an-vat/index.html" rel="tag">Đồ Ăn Vặt</a></span>
                                </div>
                                <div class="social-icons share-icons share-row relative"><a href="whatsapp://send?text=Khoai%20t%C3%A2y%20mixue - https://mixuediemdien.com/sp/khoai-tay-mixue/" data-action="share/whatsapp/share" class="icon button circle is-outline tooltip whatsapp show-for-medium tooltipstered"><i class="icon-whatsapp"></i></a><a href="http://www.facebook.com/sharer.php?u=https://mixuediemdien.com/sp/khoai-tay-mixue/" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip facebook tooltipstered"><i class="icon-facebook"></i></a><a href="http://twitter.com/share?url=https://mixuediemdien.com/sp/khoai-tay-mixue/" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip twitter tooltipstered"><i class="icon-twitter"></i></a><a href="mailto:enteryour@addresshere.com?subject=Khoai%20t%C3%A2y%20mixue&amp;body=Check%20this%20out:%20https://mixuediemdien.com/sp/khoai-tay-mixue/" rel="nofollow" class="icon button circle is-outline tooltip email tooltipstered"><i class="icon-envelop"></i></a><a href="http://pinterest.com/pin/create/button/?url=https://mixuediemdien.com/sp/khoai-tay-mixue/&amp;media=https://mixuediemdien.com/wp-content/uploads/2023/07/Khoai-tay-chien-800x800.jpg&amp;description=Khoai%20t%C3%A2y%20mixue" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip pinterest tooltipstered"><i class="icon-pinterest"></i></a><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://mixuediemdien.com/sp/khoai-tay-mixue/&amp;title=Khoai%20t%C3%A2y%20mixue" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip linkedin tooltipstered"><i class="icon-linkedin"></i></a></div>
                            </div>
                </form>

                <div id="product-sidebar" class="col large-2 hide-for-medium product-sidebar-small">
                    <div class="hide-for-off-canvas" style="width:100%">
                        <ul class="next-prev-thumbs is-small nav-right text-right">
                            <li class="prod-dropdown has-dropdown">
                                <a href="../thach-hut/index.html" rel="next" class="button icon is-outline circle">
                                    <i class="icon-angle-left"></i> </a>
                                <div class="nav-dropdown">
                                    <a title="Thạch hút" href="../thach-hut/index.html">
                                        <img width="100" height="100" src="../../wp-content/uploads/2023/07/Thach-hut-100x100.jpg" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image" alt="Thạch hút" decoding="async" loading="lazy" srcset="https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-100x100.jpg 100w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-400x400.jpg 400w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-800x800.jpg 800w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-280x280.jpg 280w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-768x768.jpg 768w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-1536x1536.jpg 1536w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-300x300.jpg 300w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-600x600.jpg 600w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut.jpg 2048w" sizes="(max-width: 100px) 100vw, 100px"></a>
                                </div>
                            </li>
                            <li class="prod-dropdown has-dropdown">
                                <a href="../hat-huong-duong/index.html" rel="next" class="button icon is-outline circle">
                                    <i class="icon-angle-right"></i> </a>
                                <div class="nav-dropdown">
                                    <a title="Hạt hướng dương" href="../hat-huong-duong/index.html">
                                        <img width="100" height="100" src="../../wp-content/uploads/2023/07/Hat-huong-duong-100x100.jpg" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image" alt="Hạt hướng dương" decoding="async" loading="lazy" srcset="https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-100x100.jpg 100w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-400x400.jpg 400w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-800x800.jpg 800w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-280x280.jpg 280w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-768x768.jpg 768w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-1536x1536.jpg 1536w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-300x300.jpg 300w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-600x600.jpg 600w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong.jpg 2048w" sizes="(max-width: 100px) 100vw, 100px"></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </form>

        <!--  -->
        <div class="product-footer">
            <div class="container">
                <div class="woocommerce-tabs wc-tabs-wrapper container tabbed-content">
                    <ul class="tabs wc-tabs product-tabs small-nav-collapse nav nav-uppercase nav-line nav-left" role="tablist">
                        <li class="reviews_tab active" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                            <a href="#tab-reviews">
                                Đánh giá (0) </a>
                        </li>
                    </ul>
                    <div class="tab-panels">
                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content active" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                            <div id="reviews" class="woocommerce-Reviews row">
                                <div id="comments" class="col large-12">
                                    <h3 class="woocommerce-Reviews-title normal">
                                        Đánh giá </h3>
                                    <p class="woocommerce-noreviews">Chưa có đánh giá nào.</p>
                                </div>
                                <div id="review_form_wrapper" class="large-12 col">
                                    <div id="review_form" class="col-inner">
                                        <div class="review-form-inner has-border">
                                            <p class="woocommerce-verification-required">Chỉ những khách hàng đã đăng nhập và mua sản phẩm này mới có thể đưa ra đánh giá.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="related related-products-wrapper product-section">
                    <h3  class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">Sản phẩm tương tự </h3>
                    <div class="row large-columns-4 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push flickity-enabled" data-flickity-options="{&quot;imagesLoaded&quot;: true, &quot;groupCells&quot;: &quot;100%&quot;, &quot;dragThreshold&quot; : 5, &quot;cellAlign&quot;: &quot;left&quot;,&quot;wrapAround&quot;: true,&quot;prevNextButtons&quot;: true,&quot;percentPosition&quot;: true,&quot;pageDots&quot;: false, &quot;rightToLeft&quot;: false, &quot;autoPlay&quot; : false}" tabindex="0">
                        <div class="flickity-viewport" style="height: 350.844px; touch-action: pan-y;">
                            <div class="flickity-slider" style="left: 0px; transform: translateX(-75%);">
                                <div class="product-small col has-hover product type-product post-673 status-publish instock product_cat-do-an-vat has-post-thumbnail shipping-taxable purchasable product-type-simple is-selected" style="position: absolute; left: 75%;">
                                    <div class="col-inner">
                                        <div class="badge-container absolute left top z-1">
                                        </div>
                                        <div class="product-small box ">
                                            <div class="box-image">
                                                <div class="image-fade_in_back">
                                                    <a href="../tra-tui-loc/index.html">
                                                        <img width="300" height="300" src="../../wp-content/uploads/2023/07/Tra-tui-loc-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Trà túi lọc" decoding="async" loading="lazy" srcset="https://mixuediemdien.com/wp-content/uploads/2023/07/Tra-tui-loc-300x300.jpg 300w, https://mixuediemdien.com/wp-content/uploads/2023/07/Tra-tui-loc-400x400.jpg 400w, https://mixuediemdien.com/wp-content/uploads/2023/07/Tra-tui-loc-800x800.jpg 800w, https://mixuediemdien.com/wp-content/uploads/2023/07/Tra-tui-loc-280x280.jpg 280w, https://mixuediemdien.com/wp-content/uploads/2023/07/Tra-tui-loc-768x768.jpg 768w, https://mixuediemdien.com/wp-content/uploads/2023/07/Tra-tui-loc-1536x1536.jpg 1536w, https://mixuediemdien.com/wp-content/uploads/2023/07/Tra-tui-loc-600x600.jpg 600w, https://mixuediemdien.com/wp-content/uploads/2023/07/Tra-tui-loc-100x100.jpg 100w, https://mixuediemdien.com/wp-content/uploads/2023/07/Tra-tui-loc.jpg 2048w" sizes="(max-width: 300px) 100vw, 300px"> </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover">
                                                </div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                </div>
                                                <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                    <a href="index645b.html?add-to-cart=673" data-quantity="1" class="add-to-cart-grid no-padding is-transparent product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="673" data-product_sku="" aria-label="Add to cart: “Trà túi lọc”" aria-describedby="" rel="nofollow">
                                                        <div class="cart-icon tooltip is-small tooltipstered"><strong>+</strong></div>
                                                    </a> <a class="quick-view quick-view-added" data-prod="673" href="#quick-view">Quick View</a>
                                                </div>
                                            </div>
                                            //
                                            <div class="box-text box-text-products">
                                                <div class="title-wrapper">
                                                    <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                        Đồ Ăn Vặt </p>
                                                    <p class="name product-title woocommerce-loop-product__title"><a href="../tra-tui-loc/index.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Trà túi lọc</a></p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi>40.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-small col has-hover product type-product post-666 status-publish instock product_cat-do-an-vat has-post-thumbnail shipping-taxable purchasable product-type-simple is-selected" style="position: absolute; left: 100%;">
                                    <div class="col-inner">
                                        <div class="badge-container absolute left top z-1">
                                        </div>
                                        <div class="product-small box ">
                                            <div class="box-image">
                                                <div class="image-fade_in_back">
                                                    <a href="../hat-huong-duong/index.html">
                                                        <img width="300" height="300" src="../../wp-content/uploads/2023/07/Hat-huong-duong-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Hạt hướng dương" decoding="async" loading="lazy" srcset="https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-300x300.jpg 300w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-400x400.jpg 400w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-800x800.jpg 800w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-280x280.jpg 280w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-768x768.jpg 768w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-1536x1536.jpg 1536w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-600x600.jpg 600w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong-100x100.jpg 100w, https://mixuediemdien.com/wp-content/uploads/2023/07/Hat-huong-duong.jpg 2048w" sizes="(max-width: 300px) 100vw, 300px"> </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover">
                                                </div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                </div>
                                                <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                    <a href="indexed64.html?add-to-cart=666" data-quantity="1" class="add-to-cart-grid no-padding is-transparent product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="666" data-product_sku="" aria-label="Add to cart: “Hạt hướng dương”" aria-describedby="" rel="nofollow">
                                                        <div class="cart-icon tooltip is-small tooltipstered"><strong>+</strong></div>
                                                    </a> <a class="quick-view quick-view-added" data-prod="666" href="#quick-view">Quick View</a>
                                                </div>
                                            </div>
                                            <div class="box-text box-text-products">
                                                <div class="title-wrapper">
                                                    <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                        Đồ Ăn Vặt </p>
                                                    <p class="name product-title woocommerce-loop-product__title"><a href="../hat-huong-duong/index.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Hạt hướng dương</a></p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi>10.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-small col has-hover product type-product post-670 status-publish last instock product_cat-do-an-vat has-post-thumbnail shipping-taxable purchasable product-type-simple is-selected" style="position: absolute; left: 125%;">
                                    <div class="col-inner">
                                        <div class="badge-container absolute left top z-1">
                                        </div>
                                        <div class="product-small box ">
                                            <div class="box-image">
                                                <div class="image-fade_in_back">
                                                    <a href="../thach-hut/index.html">
                                                        <img width="300" height="300" src="../../wp-content/uploads/2023/07/Thach-hut-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Thạch hút" decoding="async" loading="lazy" srcset="https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-300x300.jpg 300w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-400x400.jpg 400w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-800x800.jpg 800w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-280x280.jpg 280w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-768x768.jpg 768w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-1536x1536.jpg 1536w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-600x600.jpg 600w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut-100x100.jpg 100w, https://mixuediemdien.com/wp-content/uploads/2023/07/Thach-hut.jpg 2048w" sizes="(max-width: 300px) 100vw, 300px"> </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover">
                                                </div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                </div>
                                                <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                    <a href="indexc383.html?add-to-cart=670" data-quantity="1" class="add-to-cart-grid no-padding is-transparent product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="670" data-product_sku="" aria-label="Add to cart: “Thạch hút”" aria-describedby="" rel="nofollow">
                                                        <div class="cart-icon tooltip is-small tooltipstered"><strong>+</strong></div>
                                                    </a> <a class="quick-view quick-view-added" data-prod="670" href="#quick-view">Quick View</a>
                                                </div>
                                            </div>
                                            <div class="box-text box-text-products">
                                                <div class="title-wrapper">
                                                    <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                        Đồ Ăn Vặt </p>
                                                    <p class="name product-title woocommerce-loop-product__title"><a href="../thach-hut/index.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Thạch hút</a></p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi>12.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><button class="flickity-button flickity-prev-next-button previous" type="button" disabled="" aria-label="Previous"><svg class="flickity-button-icon" viewBox="0 0 100 100">
                                <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path>
                            </svg></button><button class="flickity-button flickity-prev-next-button next" type="button" disabled="" aria-label="Next"><svg class="flickity-button-icon" viewBox="0 0 100 100">
                                <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow" transform="translate(100, 100) rotate(180) "></path>
                            </svg></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div><!-- shop container -->
</main>
</body>
</html>