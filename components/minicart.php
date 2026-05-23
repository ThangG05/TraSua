<?php
// FIX LỖI: Luôn khởi tạo trước giá trị mặc định cho khách chưa đăng nhập
$count_carts = 0;
$list_minicarts = []; // Khởi tạo mảng rỗng để vòng lặp foreach không bị lỗi sập web

if(isset($_SESSION['user'])) {
    $user_id = $_SESSION['user']['id'];
    
    // Kiểm tra và lấy danh sách mini cart
    $mini_cart_data = $CartModel->select_mini_carts($user_id, 5);
    if (is_array($mini_cart_data)) {
        $list_minicarts = $mini_cart_data;
    }
    
    // Kiểm tra và đếm tổng số lượng
    $count_cart_data = $CartModel->count_cart($user_id);
    if ($count_cart_data) {
        $count_carts = count($count_cart_data);
    }
}
?>

<div class="shopping-cart">
    <div class="shopping-cart-header">
        <div class="row">
            <div class="col-4">
                <div id="close-minicart">
                    <i class="fa fa-close cart-icon"></i>
                </div>
            </div>
            <div class="col-8">
                <div style="font-size: 25px;" class="float-right">
                    <i class="fa fa-shopping-cart cart-icon"></i><span class="badge"><?=$count_carts?></span>
                </div>
            </div>
        </div>
    </div> <ul class="row pt-2 mini-cart">
        <?php 
        $totalPayment = 0;
        
        // Vòng lặp chỉ chạy khi có sản phẩm, không lo báo lỗi Warning foreach nữa
        if (!empty($list_minicarts)) {
            foreach ($list_minicarts as $value) {
                extract($value);
                $totalPrice = ($product_price * $product_quantity);
                $totalPayment += $totalPrice;
        ?>
        <li class="col-xl-12 col-md-4">
            <figure class="itemside mb-3">
                <a href="#" class="aside"><img src="/upload/<?=$product_image?>" class="img-sm border" alt=""></a>
                <figcaption class="info align-self-center">
                    <a href="#" style="height: 47px;" class="text-truncate-2 text-dark title"><?=$product_name?></a>
                    <span class="text-primary"><?=number_format($product_price)?>đ </span> <span class="text-dark">x<?=$product_quantity?></span>
                </figcaption>
            </figure>
        </li>
        <?php 
            }
        } else {
            // Hiển thị dòng thông báo nếu giỏ hàng trống
            echo '<li class="col-xl-12 text-center text-muted py-3">Giỏ hàng trống</li>';
        }
        ?>
        
        <li class="col-xl-12 col-md-4">
            <div class="text-center text-dark"><?=$count_carts?> sản phẩm thêm vào giỏ</div>
        </li>
    </ul>
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="text-center">
                <span class="text-dark font-weight-bolder">Tổng số phụ:</span>
                <span class="text-danger font-weight-bolder"><?=number_format($totalPayment)?>₫</span>
            </div>
        </div>
    </div>
    <hr style="margin-bottom: -15px;">

    <div class="row">
        <div class="col-6">
            <a href="index.php?url=gio-hang" class="button">Xem giỏ hàng</a>
        </div>
        <div class="col-6">
            <a href="index.php?url=thanh-toan" class="button btn-outline-primary">Thanh toán</a>
        </div>
    </div>
</div>