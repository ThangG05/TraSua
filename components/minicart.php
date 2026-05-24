<?php
$count_carts = 0;
$list_minicarts = []; 

if(isset($_SESSION['user'])) {
    $user_id = $_SESSION['user']['id'];
    $mini_cart_data = $CartModel->select_mini_carts($user_id, 5);
    if (is_array($mini_cart_data)) {
        $list_minicarts = $mini_cart_data;
    }
    $count_cart_data = $CartModel->count_cart($user_id);
    if ($count_cart_data) {
        $count_carts = count($count_cart_data);
    }
}
?>

<div class="minicart-wrapper-fixed" style="display: none;">
    <div class="cart-dropdown">
        <ul class="minicart-list-items">
            <?php 
            $totalPayment = 0;
            if(!empty($list_minicarts)) {
                foreach($list_minicarts as $item) {
                    $totalPayment += $item['price'] * $item['quantity'];
            ?>
                <li>
                    <div class="custom-cart-item">
                        <span><?=$item['name']?></span>
                        <span>x<?=$item['quantity']?></span>
                    </div>
                </li>
            <?php 
                }
            } else {
                echo '<li style="text-align: center; color: #888; padding: 20px 0;">Giỏ hàng trống trơn</li>';
            }
            ?>
        </ul>
        <div class="minicart-total">
            <span>Tổng phụ:</span>
            <span><?=number_format($totalPayment)?>₫</span>
        </div>
    </div>
</div>