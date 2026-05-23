<body>

    <style>
    .arrow_expand {
        color: black;
    }

    .arrow_expand:hover {
        color: white;
    }

    .product__item.sale .product__item__text .product__price {
        color: #c41e3a;
    }

    .product__details__price {
        color: #c41e3a;
    }
    </style>
    
    <?php
    // FIX LỖI: Luôn khởi tạo biến giỏ hàng bằng 0 để nếu khách vãng lai chưa đăng nhập không bị lỗi Warning
    $count_carts = 0; 
    
    if(isset($_SESSION['user'])) {
        $user_id = $_SESSION['user']['id'];
        // Kiểm tra chắc chắn xem hàm đếm giỏ hàng có trả về dữ liệu không
        $cart_data = $CartModel->count_cart($user_id);
        if ($cart_data) {
            $count_carts = count($cart_data);
        }
    }
    ?>

    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                    <div class="tip">2</div>
                </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                    <div class="tip">2</div>
                </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="/index.php"><img src="/upload/logo/logo-phuclong.png" alt="Phúc Long"></a>
        </div>
        <div id="mobile-menu-wrap"></div>

        <?php if(isset($_SESSION['user'])) { ?>
        <div class="offcanvas__auth acount">
            <a href="index.php?url=thong-tin-tai-khoan">
                <img src="/upload/<?=$_SESSION['user']['image']?>" alt=""><?=$_SESSION['user']['username']?>
            </a>
        </div>
        <?php 
            } else {
        ?>
        <div class="offcanvas__auth">
            <a href="index.php?url=dang-nhap">Đăng nhập</a>
            <a href="index.php?url=dang-ky">Đăng ký</a>
        </div>
        <?php 
            } 
        ?>

    </div>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="index.php"><img style="max-height: 40px;" src="/upload/logo/logo-phuclong.png" alt="Phúc Long"></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="index.php">TRANG CHỦ</a></li>
                            <li><a href="index.php?url=cua-hang">Cửa hàng</a></li>
                            <li><a href="index.php?url=cua-hang">Menu</a></li>
                            <li><a href="index.php?url=bai-viet">Bài viết</a></li>
                            <li><a href="index.php?url=lien-he">LIÊN HỆ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">

                        <?php if(isset($_SESSION['user'])) { ?>
                        <div class="header__right__auth acount">
                            <a href="index.php?url=thong-tin-tai-khoan">
                                <img src="/upload/<?=$_SESSION['user']['image']?>" alt=""><?=$_SESSION['user']['username']?>
                            </a>
                        </div>
                        <?php 
                        } else {
                        ?>
                        <div class="header__right__auth">
                            <a href="index.php?url=dang-nhap">Đăng nhập</a>
                        </div>
                        <?php 
                        } 
                        ?>

                        <?php if(isset($_SESSION['user'])) {?>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a id="cart-mini" href="#"><span class="icon_bag_alt"></span>
                                    <div class="tip"><?=$count_carts?></div>
                                </a></li>
                        </ul>
                        <?php } else { ?>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a onclick="alert('Vui lòng đăng nhập để sử dụng chức năng')" id="cart-mini" href="index.php?url=dang-nhap"><span class="icon_bag_alt"></span>
                                    <div class="tip">0</div>
                                </a></li>
                        </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    ```

