<?php
    include __DIR__ . '\controller\sanpham.php';
    $sanpham = new SanPham();

    $listSP = $sanpham->getAllSp();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webshark | Sản Phẩm</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/3143/3143643.png" type="image/x-icon">
    <!-- CSS only -->
    <link rel="stylesheet" href="/assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/sanpham.css">
</head>

<body>
    <!-- thanh đầu -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="navbar">
        <div class="container">
            <!-- các chữ trong thanh đầu -->
            <a href="./index.html" class="navbar-brand">
                <!-- logo -->
                <i class="fas fa-shopping-basket"></i> Đô Ngân
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.html">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./sanpham.html">sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./lienhe.html">liên hệ</a>
                    </li>
                </ul>
                <!-- icons -->
                <a href="#" data-bs-toggle="modal" data-bs-target="#search-modal"
                    class="btn btn-brand ms-lg-3 navbar-button" id="search-btn">
                    <i class='fas fa-search'></i></a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#cart-modal"
                    class="btn btn-brand ms-lg-3 navbar-button" id="cart-btn">
                    <i class='fas fa-shopping-cart'></i></a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#login-modal"
                    class="btn btn-brand ms-lg-3 navbar-button" id="login-btn">
                    <i class='fas fa-user'></i></a>
            </div>

        </div>
    </nav>
     <!-- Banner Quảng cáo -->
    <section class="banner py-2">
        <div class="container text-white py-5">
            <div class="row py-3" id="banner-title">
                <div class="col-lg-6">
                    <h1 class="font-weight-bold py-3" id="banner-brand">Giò Chả Webshark - Phú Cường</h1>
                    <h6 id="banner-slogan">Giò chả số 1 Miền Bắc</h6>
                </div>
            </div>
        </div>
    <!-- sản phẩm -->
    <section id="products">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-5 m-auto text-center">
                    <h1>các sản phẩm</h1>
                    <div class="underline m-3 mx-auto text-center "></div>
                </div>
            </div>
            <div class="row">
                <?php
                foreach ($listSP as $index => $item) {
                ?>
                
                <div class="col-lg-3 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                    <div class="card border-0 product-card" data-id="<?= $item['id'] ?? '' ?>">
                        <div class="card-image">
                            <img class="card img-fluid product-img" src="<?= $item['image'] ?? '' ?>">
                        </div>
                        <div class="card-body">
                            <h5 ><b class="product-name"><?= $item['name'] ?? '' ?></b> </h5>
                            <div class="d-flex flex-row my-2 product-price">
                                <div class="text-muted price" data-price="<?= $item['price'] ?? '' ?>" ><?= $item['price'] ?? '' ?> VND/KG</div>
                                <div class="ml-auto">
                                    <button class="border rounded sign addProduct"><span class="fa fa-plus"
                                            id="orange"></span></button>
                                    <span class="px-sm-1 soluong">1</span>
                                    <button class="border rounded sign subProduct"><span class="fa fa-minus"
                                            id="orange"></span></button>
                                </div>
                            </div>
                            <div class="product-btn">
                                <button class="btn rounded my-2 btn-add-cart">Mua Ngay</button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                }
                ?>
    </section>
    <!-- Footer - chân trang -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-about">
                        <h6>Thông tin liên hệ</h6>
                        <ul>
                            <li>Địa chỉ: Hương Gia, Phú Cường, Sóc Sơn - Hà Nội</li>
                            <li>SĐT: 0339722743</li>
                            <li>Email: tandot636@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mx-auto">
                    <div class="footer-widget">
                        <h6>Webshark</h6>
                        <ul>
                            <li><a href="./index.html">Trang chủ</a></li>
                            <li><a href="./sanpham.html">Sản Phẩm</a></li>
                            <li><a href="./tintuc.html">Tin Tức</a></li>
                            <li><a href="./lienhe.html">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer-widget">
                        <h6>Liên Hệ</h6>
                        <p>Nhận thông tin cập nhật qua email về sản phẩm mới nhất của chúng tôi và các ưu đãi đặc biệt.
                        </p>
                        <form action="#">
                            <input type="text" placeholder="Nhập email của bạn...">
                            <button type="submit" class="site-btn">Send</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer-copyright">
                        <div class="footer-copyright-text">
                            <p>Liện hệ với
                                <a href="https://www.facebook.com/profile.php?id=100017334426579" target="_blank">Trần
                                    Đô</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- pop-up modal -->
    <div class="modal fade" id="search-modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content search-form">
                <div class="modal-body search-body">
                    <div class="container-fluid">
                        <input type="search" placeholder="Tìm kiếm ...">
                        <label for="search-box" class="fas fa-search"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart -giỏ hàng -->
    <!-- tabindex : càng lớn càng ở đầu -->
    <div class="modal fade" id="cart-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content cart-form">
                <div class="modal-body cart-body">
                    <div class="shopping-cart">
                        
                    </div>
                    <div>
                       <div>
                            <b style="font-size: 2.5rem;">total:</b>
                            <b class="total"></b>
                            <b style="font-size: 2.5rem;">VNĐ</b>
                       </div> 
                        <a href="./thanhtoan.php" class="btn-modal mx-auto">Thanh Toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login -->
    <div class="modal fade" id="login-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content login-form">
                <div class="modal-body login-body">
                    <div class="login-form">
                        <h3>ĐĂNG NHẬP</h3>
                        <input type="email" placeholder="Email của bạn" class="box">
                        <input type="password" placeholder="Mật khẩu" class="box">
                        <p>Quên mật khẩu <a href="#">Nhấn vào đây</a></p>
                        <p>Chưa có tài khoản ? <a href="#">Đăng ký</a></p>
                        <input type="submit" value="Đăng Nhập" class="btn-modal">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- JavaScript -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/app.js"></script>
    <script>
    $(".product-btn").on('click', function(){
        let _this = $(this);
        event.preventDefault();
        Swal.fire(
            'Bạn đã mua hàng thành công!',
        ).then(function (result) {
            if (result.isConfirmed) {
                console.log($(this));
                _this.closest('form').submit();   
            }
        });
    })</script>
</body>
</html>