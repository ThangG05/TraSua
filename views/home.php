<?php
    $listProducts = $ProductModel->select_products_limit(8);

    $listProductBanChay = $ProductModel->select_products_limit_banchay(8);

    $listCategories = $CategoryModel->select_categories_limit(8);

    $product_limit_3 = $ProductModel->select_products_limit(3);
    $product_order_by = $ProductModel->select_products_order_by(3, 'ASC');
?>

<!-- Banner Section Begin -->
<section class="container my-3 p-0">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="border-radius: 10px;">
                    <div class="carousel-item active">
                        <img class="img-fluid" src="upload/banner/banne-trasua.jpg" alt="Image">

                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="upload/banner/banne-trasua-2.png" alt="Image">

                    </div>

                </div>
                <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-prev-icon mb-n2"></span>
                    </div>
                </a>
                <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-next-icon mb-n2"></span>
                    </div>
                </a>

            </div>
        </div>
        <!-- <div class="col-lg-4">
                <div class="product-offer" >
                    <img class="img-fluid"src="upload/banner_quanao_main4.png" alt="">
                    
                </div>
                <div class="product-offer">
                    <img class="img-fluid" src="upload/banner_quanao_main5.png" alt="">
                    
                </div>
            </div> -->
    </div>



</section>
<!-- Banner Section End -->




<style>
/* Category Section Styles */
.web-banh-cate-section {
    background: linear-gradient(135deg, #006f3c 0%, #00552dff 100%);
    border-radius: 20px;
    padding: 50px 30px;
    /* box-shadow: 0 15px 40px rgba(220, 38, 38, 0.3); */
    position: relative;
    overflow: hidden;
}

.web-banh-cate-section::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
    animation: web-banh-rotate 20s linear infinite;
}

@keyframes web-banh-rotate {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

.web-banh-section-title {
    text-align: center;
    margin-bottom: 40px;
    position: relative;
    z-index: 1;
}

.web-banh-section-title h4 {
    color: #ffffff;
    font-size: 28px;
    font-weight: 700;
    margin: 0;
    text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3);
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.web-banh-cate-item {
    position: relative;
    z-index: 1;
    transition: all 0.3s ease;
}

.web-banh-cate-card {
    background: #ffffff;
    border-radius: 25px;
    padding: 30px 20px;
    text-align: center;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    height: 100%;
    min-height: 180px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    border: 3px solid transparent;
}

.web-banh-cate-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(220, 38, 38, 0.1) 0%, rgba(153, 27, 27, 0.1) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.web-banh-cate-card:hover::before {
    opacity: 1;
}

.web-banh-cate-card:hover {
    transform: translateY(-15px) scale(1.08);
    box-shadow: 0 20px 45px #014f2bff;
    border-color: #014f2bff;
}

.web-banh-cate-img-wrapper {
    width: 90px;
    height: 90px;
    margin: 0 auto 20px;
    position: relative;
    z-index: 1;
    background: linear-gradient(135deg, #fee2e2, #fecaca);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px;
}

.web-banh-cate-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: transform 0.4s ease;
}

.web-banh-cate-card:hover .web-banh-cate-img-wrapper img {
    transform: scale(1.15) rotate(5deg);
}

.web-banh-cate-name {
    color: #1f2937;
    font-size: 17px;
    font-weight: 700;
    text-decoration: none;
    transition: color 0.3s ease;
    position: relative;
    z-index: 1;
    display: block;
    line-height: 1.4;
}

.web-banh-cate-card:hover .web-banh-cate-name {
    color: #dc2626;
}

.web-banh-cate-name::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 50%;
    transform: translateX(-50%) scaleX(0);
    width: 60%;
    height: 3px;
    background: linear-gradient(90deg, #dc2626, #991b1b);
    border-radius: 2px;
    transition: transform 0.3s ease;
}

.web-banh-cate-card:hover .web-banh-cate-name::after {
    transform: translateX(-50%) scaleX(1);
}

/* Responsive adjustments */
@media (max-width: 1199px) {
    .web-banh-cate-section {
        padding: 40px 25px;
    }

    .web-banh-section-title h4 {
        font-size: 32px;
    }

    .web-banh-cate-img-wrapper {
        width: 80px;
        height: 80px;
        padding: 12px;
    }

    .web-banh-cate-card {
        min-height: 160px;
        padding: 25px 15px;
    }
}

@media (max-width: 991px) {
    .web-banh-section-title h4 {
        font-size: 28px;
    }

    .web-banh-cate-img-wrapper {
        width: 75px;
        height: 75px;
        padding: 10px;
    }

    .web-banh-cate-name {
        font-size: 16px;
    }
}

@media (max-width: 768px) {
    .web-banh-cate-section {
        padding: 35px 20px;
        border-radius: 15px;
    }

    .web-banh-section-title h4 {
        font-size: 26px;
        letter-spacing: 1px;
    }

    .web-banh-cate-img-wrapper {
        width: 70px;
        height: 70px;
        padding: 10px;
        margin-bottom: 15px;
    }

    .web-banh-cate-name {
        font-size: 15px;
    }

    .web-banh-cate-card {
        min-height: 150px;
        padding: 20px 12px;
        border-radius: 20px;
    }

    .web-banh-cate-card:hover {
        transform: translateY(-10px) scale(1.05);
    }
}

@media (max-width: 576px) {
    .web-banh-cate-section {
        padding: 30px 15px;
    }

    .web-banh-section-title {
        margin-bottom: 30px;
    }

    .web-banh-section-title h4 {
        font-size: 22px;
    }

    .web-banh-cate-img-wrapper {
        width: 65px;
        height: 65px;
        padding: 8px;
    }

    .web-banh-cate-name {
        font-size: 14px;
    }

    .web-banh-cate-card {
        min-height: 140px;
        padding: 18px 10px;
    }
}

@media (max-width: 400px) {
    .web-banh-section-title h4 {
        font-size: 20px;
    }

    .web-banh-cate-img-wrapper {
        width: 60px;
        height: 60px;
    }

    .web-banh-cate-name {
        font-size: 13px;
    }

    .web-banh-cate-card {
        min-height: 130px;
    }
}
</style>

<section class="product spad" style="background-color: #F4F4F9; margin-bottom: 20px;">

    <!-- CATER -->
    <section class="container web-banh-cate-section">

        <div class="web-banh-section-title pt-2">
            <h4>Danh mục sản phẩm</h4>
        </div>

        <div class="row g-3 mb-4 mt-2 pb-4">
            <?php foreach ($listCategories as $value) {
                extract($value);
                $link = 'index.php?url=danh-muc-san-pham&id=' .$category_id;
            ?>
            <div class="col-lg-2 col-md-3 col-sm-6 web-banh-cate-item">
                <a href="<?=$link?>" style="text-decoration: none;">
                    <div class="web-banh-cate-card">
                        <div class="web-banh-cate-img-wrapper">
                            <img src="upload/<?=$image?>" alt="<?=$name?>">
                        </div>
                        <div class="web-banh-cate-name"><?=$name?></div>
                    </div>
                </a>
            </div>

            <?php
            }
            ?>
        </div>
    </section>
    <!-- CATE END-->


    <style>
    /* Container chính */
    .tra-sua-container {
        max-width: 1200px;
        margin: 0 auto;
        background-color: #ffffff;
        border-radius: 10px;
        padding: 40px 20px;
    }

    /* Title section */
    .tra-sua-section-title {
        text-align: center;
        margin-bottom: 40px;
    }

    .tra-sua-section-title h4 {
        font-size: 28px;
        font-weight: 700;
        color: #2d5f3f;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Product grid */
    .tra-sua-product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 25px;
        margin-bottom: 40px;
    }

    /* Product card */
    .tra-sua-product-card {
        background: #f8f9fa;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
        position: relative;
        cursor: pointer;
    }

    .tra-sua-product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    /* Best seller badge */
    .tra-sua-badge-bestseller {
        position: absolute;
        top: 0;
        left: 0;
        background: #c41e3a;
        color: white;
        padding: 8px 20px;
        font-size: 13px;
        font-weight: 600;
        z-index: 3;
        border-radius: 15px 0 15px 0;
        text-transform: uppercase;
    }

    /* Discount badge */
    .tra-sua-badge-discount {
        position: absolute;
        top: 12px;
        right: 12px;
        background: #ff4444;
        color: white;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 700;
        z-index: 3;
    }

    /* Product image container */
    .tra-sua-product-image {
        position: relative;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f8f9fa;
        overflow: hidden;
        padding: 20px;
    }

    .tra-sua-product-image img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        transition: transform 0.3s ease;
    }

    .tra-sua-product-card:hover .tra-sua-product-image img {
        transform: scale(1.08);
    }

    /* Product hover actions */
    .tra-sua-product-actions {
        position: absolute;
        bottom: -60px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        gap: 12px;
        padding: 15px;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.15), transparent);
        transition: bottom 0.3s ease;
        z-index: 2;
    }

    .tra-sua-product-card:hover .tra-sua-product-actions {
        bottom: 0;
    }

    .tra-sua-action-btn {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: white;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
    }

    .tra-sua-action-btn:hover {
        background: #2d5f3f;
        transform: scale(1.15);
    }

    .tra-sua-action-btn:hover i {
        color: white;
    }

    .tra-sua-action-btn i {
        font-size: 16px;
        color: #333;
        transition: color 0.3s ease;
    }

    /* Product info */
    .tra-sua-product-info {
        padding: 20px;
        text-align: center;
    }

    .tra-sua-product-name {
        font-size: 16px;
        font-weight: 600;
        color: #333;
        margin-bottom: 12px;
        min-height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        line-height: 1.4;
    }

    .tra-sua-product-name a {
        color: #333;
        text-decoration: none;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .tra-sua-product-name a:hover {
        color: #2d5f3f;
    }

    /* Rating */
    .tra-sua-rating {
        margin-bottom: 12px;
    }

    .tra-sua-rating i {
        color: #ffc107;
        font-size: 14px;
        margin: 0 2px;
    }

    /* Price */
    .tra-sua-price-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    .tra-sua-price-current {
        font-size: 22px;
        font-weight: 700;
        color: #c41e3a;
    }

    .tra-sua-price-original {
        font-size: 16px;
        color: #999;
        text-decoration: line-through;
    }

    /* Add to cart button */
    .tra-sua-add-cart-btn {
        width: 100%;
        padding: 12px 24px;
        background: #2d5f3f;
        color: white;
        border: none;
        border-radius: 25px;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .tra-sua-add-cart-btn:hover {
        background: #1e4029;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(45, 95, 63, 0.3);
    }

    .tra-sua-add-cart-btn i {
        font-size: 16px;
    }

    /* View all button */
    .tra-sua-view-all {
        text-align: center;
        margin-top: 20px;
    }

    .tra-sua-btn-view-all {
        padding: 14px 50px;
        background: white;
        color: #2d5f3f;
        border: 2px solid #2d5f3f;
        border-radius: 30px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .tra-sua-btn-view-all:hover {
        background: #2d5f3f;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(45, 95, 63, 0.3);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .tra-sua-product-grid {
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }

        .tra-sua-section-title h4 {
            font-size: 22px;
        }

        .tra-sua-product-image {
            height: 240px;
        }
    }

    @media (max-width: 480px) {
        .tra-sua-product-grid {
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            gap: 15px;
        }

        .tra-sua-section-title h4 {
            font-size: 18px;
        }

        .tra-sua-product-image {
            height: 200px;
        }

        .tra-sua-product-info {
            padding: 15px;
        }
    }
    </style>


    <div class="tra-sua-container mt-5">
        <div class="tra-sua-section-title">
            <h4>Sản phẩm mới</h4>
        </div>

        <div class="tra-sua-product-grid">
            <?php foreach ($listProducts as $product) {
                extract($product);
                $discount_percentage = $ProductModel->discount_percentage($price, $sale_price);
            ?>

            <div class="tra-sua-product-card">
                <!-- Badge giảm giá -->
                <?php if($discount_percentage > 0) { ?>
                <div class="tra-sua-badge-discount">-<?=$discount_percentage?></div>
                <?php } ?>

                <!-- Hình ảnh sản phẩm -->
                <div class="tra-sua-product-image">
                    <img src="upload/<?=$image?>" alt="<?=$name?>">

                    <!-- Actions khi hover -->
                    <div class="tra-sua-product-actions">
                        <!-- <button class="" onclick="window.open('upload/<?=$image?>', '_blank')">
                            <i class="fas fa-expand"></i>
                        </button> -->
                        <a href="upload/tra-olong-dau.png" class="image-popup tra-sua-action-btn"><span
                                class="arrow_expand"></span></a>
                        <a href="index.php?url=chitietsanpham&id_sp=<?=$product_id?>&id_dm=<?=$category_id?>"
                            class="tra-sua-action-btn">
                            <i class="fas fa-search"></i>
                        </a>
                        <?php if(isset($_SESSION['user'])) {?>
                        <form action="index.php?url=gio-hang" method="post" style="display: inline;">
                            <input value="<?=$product_id?>" type="hidden" name="product_id">
                            <input value="<?=$_SESSION['user']['id']?>" type="hidden" name="user_id">
                            <input value="<?=$name?>" type="hidden" name="name">
                            <input value="<?=$image?>" type="hidden" name="image">
                            <input value="<?=$sale_price?>" type="hidden" name="price">
                            <input value="1" type="hidden" name="product_quantity">
                            <button type="submit" name="add_to_cart" class="tra-sua-action-btn">
                                <i class="fas fa-shopping-bag"></i>
                            </button>
                        </form>
                        <?php } else { ?>
                        <button class="tra-sua-action-btn"
                            onclick="alert('Vui lòng đăng nhập để thực hiện chức năng'); window.location.href='dang-nhap';">
                            <i class="fas fa-shopping-bag"></i>
                        </button>
                        <?php } ?>
                    </div>
                </div>

                <!-- Thông tin sản phẩm -->
                <div class="tra-sua-product-info">
                    <div class="tra-sua-product-name">
                        <a href="index.php?url=chitietsanpham&id_sp=<?=$product_id?>&id_dm=<?=$category_id?>">
                            <?=$name?>
                        </a>
                    </div>

                    <div class="tra-sua-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <div class="tra-sua-price-wrapper">
                        <span class="tra-sua-price-current"><?=number_format($sale_price)?>₫</span>
                        <?php if($price > $sale_price) { ?>
                        <span class="tra-sua-price-original"><?=number_format($price)?>đ</span>
                        <?php } ?>
                    </div>

                    <?php if(isset($_SESSION['user'])) {?>
                    <form action="index.php?url=gio-hang" method="post">
                        <input value="<?=$product_id?>" type="hidden" name="product_id">
                        <input value="<?=$_SESSION['user']['id']?>" type="hidden" name="user_id">
                        <input value="<?=$name?>" type="hidden" name="name">
                        <input value="<?=$image?>" type="hidden" name="image">
                        <input value="<?=$sale_price?>" type="hidden" name="price">
                        <input value="1" type="hidden" name="product_quantity">
                        <button type="submit" name="add_to_cart" class="tra-sua-add-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                            Đặt mua
                        </button>
                    </form>
                    <?php } else { ?>
                    <button class="tra-sua-add-cart-btn"
                        onclick="alert('Vui lòng đăng nhập để thực hiện chức năng'); window.location.href='dang-nhap';">
                        <i class="fas fa-shopping-cart"></i>
                        Đặt mua
                    </button>
                    <?php } ?>
                </div>
            </div>

            <?php } ?>
        </div>

        <div class="tra-sua-view-all">
            <a href="index.php?url=cua-hang" class="tra-sua-btn-view-all">Xem tất cả</a>
        </div>
    </div>



    <div class="tra-sua-container">
        <div class="tra-sua-section-title">
            <h4>Sản bán chạy</h4>
        </div>

        <div class="tra-sua-product-grid">
            <?php foreach ($listProductBanChay as $product) {
                extract($product);
                $discount_percentage = $ProductModel->discount_percentage($price, $sale_price);
            ?>

            <div class="tra-sua-product-card">
                <!-- Badge giảm giá -->
                <?php if($discount_percentage > 0) { ?>
                <div class="tra-sua-badge-discount">-<?=$discount_percentage?></div>
                <?php } ?>

                <!-- Hình ảnh sản phẩm -->
                <div class="tra-sua-product-image">
                    <img src="upload/<?=$image?>" alt="<?=$name?>">

                    <!-- Actions khi hover -->
                    <div class="tra-sua-product-actions">
                        <!-- <button class="" onclick="window.open('upload/<?=$image?>', '_blank')">
                            <i class="fas fa-expand"></i>
                        </button> -->
                        <a href="upload/tra-olong-dau.png" class="image-popup tra-sua-action-btn"><span
                                class="arrow_expand"></span></a>
                        <a href="index.php?url=chitietsanpham&id_sp=<?=$product_id?>&id_dm=<?=$category_id?>"
                            class="tra-sua-action-btn">
                            <i class="fas fa-search"></i>
                        </a>
                        <?php if(isset($_SESSION['user'])) {?>
                        <form action="index.php?url=gio-hang" method="post" style="display: inline;">
                            <input value="<?=$product_id?>" type="hidden" name="product_id">
                            <input value="<?=$_SESSION['user']['id']?>" type="hidden" name="user_id">
                            <input value="<?=$name?>" type="hidden" name="name">
                            <input value="<?=$image?>" type="hidden" name="image">
                            <input value="<?=$sale_price?>" type="hidden" name="price">
                            <input value="1" type="hidden" name="product_quantity">
                            <button type="submit" name="add_to_cart" class="tra-sua-action-btn">
                                <i class="fas fa-shopping-bag"></i>
                            </button>
                        </form>
                        <?php } else { ?>
                        <button class="tra-sua-action-btn"
                            onclick="alert('Vui lòng đăng nhập để thực hiện chức năng'); window.location.href='dang-nhap';">
                            <i class="fas fa-shopping-bag"></i>
                        </button>
                        <?php } ?>
                    </div>
                </div>

                <!-- Thông tin sản phẩm -->
                <div class="tra-sua-product-info">
                    <div class="tra-sua-product-name">
                        <a href="index.php?url=chitietsanpham&id_sp=<?=$product_id?>&id_dm=<?=$category_id?>">
                            <?=$name?>
                        </a>
                    </div>

                    <div class="tra-sua-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <div class="tra-sua-price-wrapper">
                        <span class="tra-sua-price-current"><?=number_format($sale_price)?>₫</span>
                        <?php if($price > $sale_price) { ?>
                        <span class="tra-sua-price-original"><?=number_format($price)?>đ</span>
                        <?php } ?>
                    </div>

                    <?php if(isset($_SESSION['user'])) {?>
                    <form action="index.php?url=gio-hang" method="post">
                        <input value="<?=$product_id?>" type="hidden" name="product_id">
                        <input value="<?=$_SESSION['user']['id']?>" type="hidden" name="user_id">
                        <input value="<?=$name?>" type="hidden" name="name">
                        <input value="<?=$image?>" type="hidden" name="image">
                        <input value="<?=$sale_price?>" type="hidden" name="price">
                        <input value="1" type="hidden" name="product_quantity">
                        <button type="submit" name="add_to_cart" class="tra-sua-add-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                            Đặt mua
                        </button>
                    </form>
                    <?php } else { ?>
                    <button class="tra-sua-add-cart-btn"
                        onclick="alert('Vui lòng đăng nhập để thực hiện chức năng'); window.location.href='dang-nhap';">
                        <i class="fas fa-shopping-cart"></i>
                        Đặt mua
                    </button>
                    <?php } ?>
                </div>
            </div>

            <?php } ?>
        </div>

        <div class="tra-sua-view-all">
            <a href="index.php?url=cua-hang" class="tra-sua-btn-view-all">Xem tất cả</a>
        </div>
    </div>














</section>




<style>
.noi-that-section-title {
    text-align: center;
    margin-bottom: 50px;
    font-size: 32px;
    font-weight: 700;
    text-transform: uppercase;
}

.noi-that-image-large {
    height: 100%;
}

.noi-that-image-large img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 8px;
}

.noi-that-image-grid {
    display: flex;
    flex-direction: column;
    gap: 20px;
    height: 100%;
}

.noi-that-image-grid img {
    width: 100%;
    flex: 1;
    object-fit: cover;
    border-radius: 8px;
}

.noi-that-feature-box {
    display: flex;
    align-items: flex-start;
    margin-bottom: 40px;
}

.noi-that-feature-icon {
    flex-shrink: 0;
    width: 82px;
    height: 82px;
    margin-right: 20px;
}

.noi-that-feature-icon img {
    width: 100%;
    height: 100%;
}

.noi-that-feature-content h3 {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 10px;
    text-transform: uppercase;
}

.noi-that-feature-content p {
    font-size: 15px;
    line-height: 1.6;
    margin: 0;
    color: #666;
}

.noi-that-features-container {
    padding-left: 30px;
}

@media (max-width: 991px) {

    .noi-that-image-large,
    .noi-that-image-grid {
        margin-bottom: 30px;
    }

    .noi-that-image-large {
        height: 400px;
    }

    .noi-that-image-grid img {
        height: 250px;
    }

    .noi-that-features-container {
        padding-left: 0;
    }
}
</style>



<div class="container mt-5 p-0" style="border-radius: 10px;">
    <img style="width: 100%; border-radius: 10px;" src="upload/banner/banne-trasua.jpg" alt="">
</div>




<!-- Trend Section Begin -->
<section class="trend spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Xu hướng</h4>
                    </div>
                    <?php
                        foreach ($product_limit_3 as $value) {
                            extract($value);
                        
                    ?>
                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <a href="chitietsanpham&id_sp=<?=$product_id?>&id_dm=<?=$category_id?>"><img
                                    src="upload/<?=$image?>" style="width: 90px;" alt=""></a>
                        </div>
                        <div class="trend__item__text">
                            <h6>
                                <a href="chitietsanpham&id_sp=<?=$product_id?>&id_dm=<?=$category_id?>"
                                    class="text-dark"><?=$name?></a>
                            </h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price"><?=number_format($sale_price)?>₫</div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>BÁN CHẠY</h4>
                    </div>
                    <?php
                        foreach ($product_order_by as $value) {
                            extract($value);
                        
                    ?>
                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <a href="chitietsanpham&id_sp=<?=$product_id?>&id_dm=<?=$category_id?>"><img
                                    src="upload/<?=$image?>" style="width: 90px;" alt=""></a>
                        </div>
                        <div class="trend__item__text">
                            <h6>
                                <a href="chitietsanpham&id_sp=<?=$product_id?>&id_dm=<?=$category_id?>"
                                    class="text-dark"><?=$name?></a>
                            </h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price"><?=number_format($sale_price)?>₫</div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Hot sale</h4>
                    </div>
                    <?php
                        foreach ($product_limit_3 as $value) {
                            extract($value);
                        
                    ?>
                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <a href="chitietsanpham&id_sp=<?=$product_id?>&id_dm=<?=$category_id?>"><img
                                    src="upload/<?=$image?>" style="width: 90px;" alt=""></a>
                        </div>
                        <div class="trend__item__text">
                            <h6>
                                <a href="chitietsanpham&id_sp=<?=$product_id?>&id_dm=<?=$category_id?>"
                                    class="text-dark"><?=$name?></a>
                            </h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price"><?=number_format($sale_price)?>₫</div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trend Section End -->

<!-- Discount Section Begin -->
<!-- <section class="discount">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="discount__pic">
                    <img src="upload/banner/banner-nho-2.png" alt="Hình ảnh">
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="discount__text" style="height: 396px;">
                    <div class="discount__text__title">
                        <span>Siêu giảm giá</span>
                        <h2 style="color: red;">11 - 11</h2>
                        <h5 style="color: red;"><span>Sale</span> 20%</h5>
                    </div>
                    <div class="discount__countdown" id="countdown-time">
                        <div class="countdown__item">
                            <span>05</span>
                            <p>Ngày</p>
                        </div>
                        <div class="countdown__item">
                            <span>18</span>
                            <p>Giờ</p>
                        </div>
                        <div class="countdown__item">
                            <span>46</span>
                            <p>Phút</p>
                        </div>
                        <div class="countdown__item">
                            <span>05</span>
                            <p>Giây</p>
                        </div>
                    </div>
                    <a href="#">Mua ngay</a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Discount Section End -->

<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        <div class="row">
            <style>
            .services__item i {
                color: black;

            }
            </style>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-car"></i>
                    <h6>Miễn phí vận chuyển</h6>
                    <p>Đơn hàng trên 400.000đ</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-money"></i>
                    <h6>Đảm bảo hoàn tiền</h6>
                    <p>Nếu sản phẩm có vấn đề</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-support"></i>
                    <h6>Hỗ trợ trực tuyến 24/7</h6>
                    <p>Hỗ trợ chuyên dụng</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-headphones"></i>
                    <h6>Thanh toán an toàn</h6>
                    <p>Thanh toán an toàn 100%</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->