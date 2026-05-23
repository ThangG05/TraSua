<div style="border: 1px solid #0A68FF;"></div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="/"><img style="width: 100px;" src="/upload/logo/logo-phuclong.png" alt="Phúc Long Logo"></a>
                    </div>
                    <p>Chào mừng bạn đến với cửa hàng trà sữa Phúc Long tươi ngon từng ly trà</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6>ĐƯỜNG DẪN</h6>
                    <ul>
                        <li><a href="#">Về chúng tôi</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">Liên hệ</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6>TÀI KHOẢN</h6>
                    <ul>
                        <li><a href="#">Tài khoản của tôi</a></li>
                        <li><a href="#">Theo dõi đơn hàng</a></li>
                        <li><a href="#">Thủ tục thanh toán</a></li>
                        <li><a href="#">Danh sách yêu thích</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <h6>BẢN TIN</h6>
                    <form action="#">
                        <input type="text" placeholder="Email">
                        <button type="submit" style="background-color: red;" class="site-btn">Theo dõi</button>
                    </form>
                    <div class="footer__payment">
                        <a href="#"><img src="/public/img/payment/payment-1.png" alt=""></a>
                        <a href="#"><img src="/public/img/payment/payment-2.png" alt=""></a>
                        <a href="#"><img src="/public/img/payment/payment-3.png" alt=""></a>
                        <a href="#"><img src="/public/img/payment/payment-4.png" alt=""></a>
                        <a href="#"><img src="/public/img/payment/payment-5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright__text">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Thiết kế và phát triển bởi <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Lập trình viên</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form action="tim-kiem" method="get" class="search-model-form">
            <input type="search" name="query" id="search-input" placeholder="TÌM KIẾM.....">
        </form>
    </div>
</div>
<script src="/public/js/jquery-3.3.1.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script> <script src="/public/js/jquery.magnific-popup.min.js"></script>
<script src="/public/js/jquery-ui.min.js"></script>
<script src="/public/js/mixitup.min.js"></script>
<script src="/public/js/jquery.countdown.min.js"></script>
<script src="/public/js/jquery.slicknav.js"></script>
<script src="/public/js/owl.carousel.min.js"></script>
<script src="/public/js/jquery.nicescroll.min.js"></script>
<script src="/public/js/dm.js"></script>
<script src="/public/js/main.js"></script>

<script>
$(document).ready(function() {
    $("#toastr-success-top-right").on("click", function() {
        toastr.success("1 sản phẩm đã thêm vào giỏ", "Thành công", {
            closeButton: true,
            progressBar: true,
            positionClass: "toast-top-right",
            timeOut: "5000"
        });
    });
});
</script>

</body>
</html>