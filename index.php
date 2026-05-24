<?php
// Tắt cảnh báo Notice/Warning để giữ giao diện sạch sẽ trên môi trường Render Docker
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

$BASE_HOST = (
    (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    ? "https"
    : "http"
) . "://" . $_SERVER['HTTP_HOST'];

ob_start();
session_start();

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
define('URL_MOMO', $BASE_HOST . '/Nhom18_K26/DUAN_TRASUA/cam-on');
define('URL_ORDER', $BASE_HOST . '/Nhom18_K26/DUAN_TRASUA/don-hang');

// 1. Nhúng phần đầu trang (Thẻ <head> chứa toàn bộ link thư viện CSS chuẩn)
require_once "components/head.php";

// 2. Nhúng phần thanh công cụ điều hướng & Menu (Bản PC + Canvas Mobile)
require_once "components/header.php";

// 3. Khối Router điều hướng hiển thị nội dung phần thân trang (Body)
if(!isset($_GET['url'])) {
    require_once "views/home.php";
} else {
    switch ($_GET['url']) {
        case 'trang-chu':
            require_once "views/home.php";
            break;
        case 'cua-hang':
            require_once "views/shop.php";
            break;
        case 'chitietsanpham':
            require_once "views/productdetail.php";
            break;
        case 'danh-muc-san-pham':
            require_once "views/shop-by-category.php";
            break;    
        case 'lien-he':    
            require_once "views/contact.php";
            break;
        case 'gio-hang':    
            require_once "views/cart.php";
            break;
        case 'thanh-toan':    
            require_once "views/checkout.php";
            break;  
        case 'thanh-toan-2':    
            require_once "views/checkout-address.php";
            break; 
        case 'thanh-toan-momo':    
            require_once "views/checkout/checkout_momo.php";
            break;
        case 'thanh-toan-momo-address':    
            require_once "views/checkout/momo-address.php";
            break;
        case 'thanh-toan-momo-address-2':    
            require_once "views/checkout/momo-address-2.php";
            break;
        case 'thanh-toan-dia-chi2':    
            require_once "views/thanh-toan-dia-chi.php";
            break; 
        case 'remove-address':    
            require_once "views/remove-address.php";
            break; 
        case 'cam-on':    
            require_once "views/thanks.php";
            break; 
        case 'don-hang':    
            require_once "views/my-order.php";
            break;       
        case 'chi-tiet-don-hang':    
            require_once "views/my-orderdetails.php";
            break; 
        // Bộ điều hướng User Account
        case 'dang-nhap':    
            require_once "views/user/login.php";
            break; 
        case 'dang-ky':    
            require_once "views/user/register.php";
            break;  
        case 'dang-xuat':    
            unset($_SESSION['user']);
            header("Location: index.php");
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
        default:
            require_once "views/not-page.php";
            break;
    }
}

// 4. Nhúng Mini Cart Dropdown (Được bọc an toàn, không phá vỡ layout)
require_once "components/minicart.php";

// 5. Khép màn bằng Footer chứa toàn bộ thông tin bản quyền và file Javascript bổ trợ
require_once "components/footer.php";

ob_end_flush();
?>