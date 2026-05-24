<?php
// Tắt cảnh báo Notice/Warning để giữ giao diện sạch sẽ trên môi trường Render Docker
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

$BASE_HOST = (
    (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    ? "https"
    : "http"
) . "://" . $_SERVER['HTTP_HOST'];

ob_start();
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Import hệ thống Models quản trị dữ liệu
require_once "models/pdo_library.php";
require_once "models/BaseModel.php";
require_once "models/ProductModel.php";
require_once "models/CategoryModel.php";
require_once "models/CustomerModel.php";
require_once "models/CommentModel.php";
require_once "models/CartModel.php";
require_once "models/OrderModel.php";
require_once "models/PostModel.php";
require_once "models/AddressModel.php";

define('BASE_URL', 'index.php?url=');
define('URL_MOMO', $BASE_HOST . '/cam-on');
define('URL_ORDER', $BASE_HOST . '/don-hang');

// Khởi tạo các class Model để tránh lỗi call to a member function trên view
$ProductModel = new ProductModel();
$CategoryModel = new CategoryModel();
$CartModel = new CartModel();

// 1. Nhúng phần đầu trang (Thẻ <head> chứa toàn bộ link thư viện CSS chuẩn)
require_once "components/head.php";

// 2. Nhúng Header (Menu điều hướng, Logo và Giỏ hàng)
require_once "components/header.php";

// BỘ ĐIỀU HƯỚNG ROUTER AN TOÀN
if (isset($_GET['url']) && !empty($_GET['url'])) {
    $url = rtrim($_GET['url'], '/');
} else {
    $url = '/';
}

switch ($url) {
    case '/':
    case 'trang-chu':
        require_once "views/home.php";
        break;
    case 'cua-hang':
        require_once "views/product/shop.php";
        break;
    case 'danh-muc-san-pham':
        require_once "views/product/product-by-category.php";
        break;
    case 'chitietsanpham':
        require_once "views/product/product-details.php";
        break;
        
    // Bộ điều hướng Giỏ hàng / Thanh toán
    case 'gio-hang':
        require_once "views/cart/cart.php";
        break;
    case 'thanh-toan':
        require_once "views/cart/checkout.php";
        break;
    case 'cam-on':
        require_once "views/cart/thanks.php";
        break;
    case 'don-hang':
        require_once "views/cart/order.php";
        break;
    case 'chi-tiet-don-hang':
        require_once "views/cart/order-details.php";
        break;
        
    // Bộ điều hướng Tài khoản / Thành viên
    case 'dang-nhap':
        require_once "views/user/login.php";
        break;
    case 'dang-ky':
        require_once "views/user/register.php";
        break;
    case 'dang-xuat':
        require_once "views/user/logout.php";
        break;
    case 'thong-tin-tai-khoan':    
        require_once "views/user/user-infor.php";
        break;  
    case 'ho-so':    
        require_once "views/user/edit-profile.php";
        break; 
    case 'them-dia-chi':    
        require_once "views/user/add-address.php";
        break;
    case 'doi-mat-khau':    
        require_once "views/user/change-password.php";
        break;
    case 'quen-mat-khau':    
        require_once "views/user/forgot-password.php";
        break;
    case 'khoi-phuc-mat-khau':    
        require_once "views/user/password-recovery.php";
        break;
        
    // Bộ điều hướng Tin tức / Blog
    case 'bai-viet':    
        require_once "views/blog/blogs.php";
        break;    
    case 'chi-tiet-bai-viet':    
        require_once "views/blog/blog-details.php";
        break;    
    case 'danh-muc-bai-viet':    
        require_once "views/blog/blog-by-category.php";
        break;
    case 'tim-kiem':    
        require_once "views/search.php";
        break;    
    case 'lien-he':    
        require_once "views/contact.php";
        break; 
    default:
        require_once "views/not-page.php";
        break;
}

// 4. Nhúng phần chân trang (Footer chứa toàn bộ script JS)
require_once "components/footer.php";

ob_end_flush();
?>