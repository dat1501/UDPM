<?php
    include __DIR__ . '\controller\thanhtoan.php';
    
    if ($_REQUEST) {
        $thanhToan = new ThanhToan($_REQUEST);
        $result =  $thanhToan->main();
    }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<title>Ba đời nhà chủ tịch bán giò</title>
<link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/3143/3143643.png" type="image/x-icon">
<!-- CSS only -->
<link rel="stylesheet" href="/assets/bootstrap/owl.carousel.min.css">
<!--Slider owlcarousel -->
<link rel="stylesheet" href="/assets/bootstrap/owl.theme.default.css">
<link rel="stylesheet" href="/assets/bootstrap/bootstrap.min.css">
<!--Bootstrap -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" href="./assets/css/thanhtoan.css">
<script type = "text/javascript" src="./controller/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8/dist/sweetalert2.all.min.js"></script>
    <style type="text/css">
        #button {
            padding: 1em;
            background-color: #1560bd;
            color: #ffffff;
            border-radius: 0.2em;
            border-style: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top" id="navbar">
    <div class="container">
        <!-- các chữ trong thanh đầu -->
        <a href="./index.html" class="navbar-brand">
            <!-- logo -->
            <i class="fas fa-shopping-basket"></i> webshark
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
                class="btn btn-brand ms-lg-3 navbar-button">
                <i class='fas fa-search'></i></a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#cart-modal"
                class="btn btn-brand ms-lg-3 navbar-button">
                <i class='fas fa-shopping-cart'></i></a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#login-modal"
                class="btn btn-brand ms-lg-3 navbar-button">
                <i class='fas fa-user'></i></a>
        </div>
      </nav>
 <div class="container mt-5" >
  <h1 class="mx-auto text-center" style="font-size: 250%; ;">Nhập thông tin người mua hàng</h1>
  <div class="mt-4 row " style="text-align: -webkit-center; font-size: 150%;">
    <form name="form1" method="post" action="#">
      <div class="col-sm-8 align-self-center" >
        <div class="form-inline form-group row row-cols-1 row-cols-2 mt-3">
          <label class="col-sm-3 fw-bold col-12">
            Tên Người Mua:
          </label>
          <div class="col-sm-8 col-12">
            <input class="form-control" type="text" name="Hoten" id="Hoten" placeholder="Nhập Họ Tên">
          </div>
        </div>
        <div class="form-inline form-group row row-cols-1 row-cols-2 mt-3">
          <label class="col-sm-3 fw-bold col-12">
            Email
          </label>
          <div class="col-sm-8 col-12">
            <input class="form-control" type="text" name="Email" id="Email" placeholder="Nhập Email....">
          </div>
        </div>
        <div class="form-inline form-group row row-cols-1 row-cols-2 mt-3">
          <label class="col-sm-3 fw-bold col-12">
            Số Điện Thoại
          </label>
          <div class="col-sm-8 col-12">
          <input class="form-control col" type="text" name="dienthoai" id="dienthoai" placeholder="Nhập Số Điện Thoại" minlength="10" maxlength="10">
          </div>
        </div>
        <div class="form-inline form-group row row-cols-1 row-cols-2 mt-3">
          <label class="col-sm-3 fw-bold col-12">
            Địa Chỉ
          </label>
          <div class="col-sm-8 col-12">
          <input class="form-control col" type="text" name="diachi" id="diachi" placeholder="Nhập Địa Chỉ">
          </div>
        </div>
        <div class="col-sm-12 mt-3 flex">
            <div class="d-inline"><button  class="btn btn-succes" id="button">Đồng ý</button></div>
            <div class="d-inline"><a href="index.html" class="btn btn-danger">Về Trang Chủ</a></div>
        </div>
      </div>
      <div class="col-sm-2"></div>

      <div class="show-sp">
      </div>
    </form>
  </div>
</div>
    <!--footer chân trang-->
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
<!-- Footer Section End -->

<!-- pop-up modal -->
<!-- hiệu ứng fade -->
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
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/slide.js"></script>
<script src="/assets/js/owl.carousel.js"></script>
</body>
</html>
<!-- <script language="javascript">
$(document).ready(function(e) {
    $("#tNgaynhan").datetimepicker();
});
</script> -->
<script type="text/javascript">
  //var re= new RegExp();
  var re = /^0[1-9]\d{8,9}$/;
  
  function kt(text, idDivbaoloi, er) {
      v = text.value;
      divbaoloi = document.getElementById(idDivbaoloi);
      if (v == "") {
          divbaoloi.innerHTML = "Bạn chưa nhập" + er;
          text.focus();
          return false;
      } else {
          divbaoloi.innerHTML = "";
          return true;
      }
  }
  
  function Kiemtra() {
      hoten = document.getElementById("Hoten");
      phone = document.getElementById("dienthoai");
      diachi = document.getElementById("diachi");
      if (!kt(hoten, "divht", " họ tên. VD: Nguyễn Văn A") || !kt(phone, "divphone", " Số điện thoại. VD: 0123456789)") ||
          !kt(diachi, "divdiachi", " địa chỉ giao sản phẩm. ")) return false;
      else if (re.test(phone.value) == flase) {
          document.getElementById(divphone).innerHTML = "Sai số điện thoại. VD: 0123456789.";
          return flase;
      } else
          return true;
  }
    $("#button").on('click', function(){
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
    })
    
    $(document).ready(function() {
        loadSP();
    })

    function loadSP () {
        let product = '';
        let cartCurrent = JSON.parse(localStorage.getItem('carts'));
        cartCurrent.forEach((item, index) => {
            product +=  `<div class="product">
            <input type="hidden" name="sp[${item.id}][name]" value="${item.name}">
            <input type="hidden" name="sp[${item.id}][id]" value="${item.id}">
            <input type="hidden" name="sp[${item.id}][price]" value="${item.price}">
            <input type="hidden" name="sp[${item.id}][soluong]" value="${item.soluong}">
            </div>`;
        });
        $('.show-sp').html(product);
    }

    var  resultPay = <?= $result ?? null ?>
    resetCart();
    function resetCart(){
        console.log('before')
        if (resultPay) {
            console.log('inside if')
        localStorage.setItem('carts', JSON.stringify([]));
        console.log(localStorage.getItem('carts'));
        }
    }
    

</script>