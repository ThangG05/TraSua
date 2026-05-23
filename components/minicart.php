<?php
// Luôn khởi tạo trước giá trị mặc định cho khách chưa đăng nhập
$count_carts = 0;
$list_minicarts = []; 

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

<div class="header__right__auth">
    <ul class="header__right__widget">
        <li>
            <a href="index.php?url=gio-hang" class="search-switch">
                <span class="icon_bag_alt"></span>
                <div class="tip"><?=$count_carts?></div>
            </a>
            
            <div class="cart-dropdown" style="position: absolute; right: 0; top: 30px; width: 320px; background: #fff; box-shadow: 0px 15px 50px rgba(0,0,0,0.15); padding: 20px; z-index: 99; display: none; border-radius: 4px;">
                <h5 style="font-size: 16px; font-weight: 600; margin-bottom: 15px; border-bottom: 1px solid #f2f2f2; padding-bottom: 10px;">Giỏ hàng của bạn</h5>
                
                <ul style="max-height: 240px; overflow-y: auto; margin-bottom: 15px; padding-left: 0; list-style: none;">
                    <?php 
                    $totalPayment = 0;
                    if (!empty($list_minicarts)) {
                        foreach ($list_minicarts as $value) {
                            extract($value);
                            $totalPrice = ($product_price * $product_quantity);
                            $totalPayment += $totalPrice;
                    ?>
                    <li style="display: flex; margin-bottom: 15px; align-items: center;">
                        <img src="/upload/<?=$product_image?>" alt="" style="width: 50px; height: 50px; object-fit: cover; border: 1px solid #f2f2f2; margin-right: 12px;">
                        <div style="flex: 1;">
                            <h6 style="font-size: 13px; font-weight: 600; color: #111; margin-bottom: 4px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; max-width: 180px;"><?=$product_name?></h6>
                            <span style="font-size: 12px; color: #ca1515; font-weight: 600;"><?=number_format($product_price)?>₫</span>
                            <span style="font-size: 12px; color: #666;"> x <?=$product_quantity?></span>
                        </div>
                    </li>
                    <?php 
                        }
                    } else {
                        echo '<li style="text-align: center; color: #888; padding: 20px 0; font-size: 13px;">Giỏ hàng trống trơn</li>';
                    }
                    ?>
                </ul>
                
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px; border-top: 1px solid #f2f2f2; padding-top: 10px;">
                    <span style="font-size: 14px; color: #111; font-weight: 600;">Tổng phụ:</span>
                    <span style="font-size: 15px; color: #ca1515; font-weight: 700;"><?=number_format($totalPayment)?>₫</span>
                </div>
                
                <div style="display: flex; gap: 10px;">
                    <a href="index.php?url=gio-hang" class="primary-btn" style="flex: 1; text-align: center; padding: 8px 0; font-size: 12px; background: #111; color: #fff; font-weight: 600; text-transform: uppercase;">Xem giỏ</a>
                    <a href="index.php?url=thanh-toan" class="primary-btn" style="flex: 1; text-align: center; padding: 8px 0; font-size: 12px; background: #ca1515; color: #fff; font-weight: 600; text-transform: uppercase;">Thanh toán</a>
                </div>
            </div>
        </li>
    </ul>
</div>

<style>
    .header__right__widget li:hover .cart-dropdown {
        display: block !important;
    }
</style>