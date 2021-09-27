
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>Dienthoaivui</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href={{ URL("/frontend/css/bootstrap.min.css") }} type="text/css">
    <link rel="stylesheet" href={{ URL("/frontend/css/font-awesome.min.css") }} type="text/css">
    <link rel="stylesheet" href={{ URL("/frontend/css/elegant-icons.css") }} type="text/css">
    <link rel="stylesheet" href={{ URL("/frontend/css/nice-select.css") }} type="text/css">
    <link rel="stylesheet" href={{ URL("/frontend/css/jquery-ui.min.css") }} type="text/css">
    <link rel="stylesheet" href={{ URL("/frontend/css/owl.carousel.min.css") }} type="text/css">
    <link rel="stylesheet" href={{ URL("/frontend/css/slicknav.min.css") }} type="text/css">
    <link rel="stylesheet" href={{ URL("/frontend/css/style.css") }} type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="ogani-master/img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./ogani-master/shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="header__top__left">
                            <img src="https://dienthoaihay.vn/images/config/logo-dth_1630379348.png" alt="logo" style="width:201px;height:46px;">

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header__top__right">

                            <div class="input-group rounded">
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                aria-describedby="search-addon" />
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="fa fa-search"></i>
                            </span>
                            </div>

                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="header__cart">
                                <ul>
                                    <li><a href="#"><i class="fa fa-phone" style="color:white"></i></a></li>
                                    <li><a href="#"><i class="fa fa-check-square" style="color:white"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart" style="color:white"></i></a></li>
                                    <a href="http://127.0.0.1:8000/product" style="margin-left: 50px;"><i class="fa fa-user"></i> Login</a>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero" style="margin-top:15px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="wrapper-product">
                            <div class="item item1">Iphone</div>
                            <div class="item item2">Ipad</div>
                            <div class="item item3">Apple Watch</div>
                            <div class="item item4">Xiaomi</div>
                            <div class="item item5">Samsung</div>
                            <div class="item item6">Realmi</div>
                            <div class="item item4">Vsmart</div>
                            <div class="item item5">Oppo</div>
                            <div class="item item6">Phụ kiện - Đồ chơi</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img alt="Vsmart chính hãng siêu rẻ" src="https://dienthoaihay.vn/images/slideshow/2021/09/19/compress/vsmart_1631876921_1632013582.jpg">
                    <div class="wrapper-content">
                    <div class="item content1"><p class="text-content">MTB học Online Galaxy Tab A8</p></div>
                    <div class="item content2"><p class="text-content">Phổ cập Vsmart Joy 4, Star 4, 5</p></div>
                    <div class="item content3"><p class="text-content">K40 Gaming sẵn Tiếng Việt</p></div>
                    <div class="item content4"><p class="text-content">Xiaomi Chính hãng Giá rẻ</p></div>
                    <div class="item content5"><p class="text-content">Vsmart chính hãng siêu rẻ</p></div>
                </div>
                </div>

                <div class="col-lg-3">
                    <div class = "banner-right">
                        <div class="banner1">
                            <img class="img-old img-responsive" alt="Banner phải slideshow 1" src="https://dienthoaihay.vn/images/banners/original/chuan_1630552293.jpg">
                        </div>
                        <div class="banner1">
                        <img class="img-old img-responsive" alt="Banner phải slideshow 3" src="https://dienthoaihay.vn/images/banners/original/k40_1631114243.jpg">
                        </div>
                        <div class="banner1">
                        <img class="img-old img-responsive" alt="Banner phải slideshow 2" src="https://dienthoaihay.vn/images/banners/original/tab-a8-2019_1632627349.png">
                        </div>
                    </div>
                <div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Backmid Section Start -->
    <section class="background-center">
     <img class="img-old img-responsive" alt="Dưới slideshow" src="https://dienthoaihay.vn/images/banners/original/bh-vip_1624009757.gif">
    </section>
    <!-- Backmid Section End -->

    <!-- Categories Section Begin -->
    <section class="categories" style="margin-top:15px">
        <div class="container">
            <div class="row">

                    <div class="col-lg-3">
                    <img  alt="Realme" src ="https://dienthoaihay.vn/images/products/cat/resized/hang3_1629782127.png">
                    </div>
                    <div class="col-lg-3">
                    <img  alt="Xiaomi" src ="https://dienthoaihay.vn/images/products/cat/resized/hang4_1629782113.png">
                    </div>
                    <div class="col-lg-3">
                    <img  alt="iPhone" src ="https://dienthoaihay.vn/images/products/cat/resized/hang1_1629782045.png">
                    </div>
                    <div class="col-lg-3">
                    <img  alt="Samsung" src ="https://dienthoaihay.vn/images/products/cat/resized/hang2_1629782097.png">
                    </div>

            </div>
        </div>
    </section>
    <!-- Categories Section End -->
<section class="category">
<div class="container">
    <div class="layout">
    <div class="layout-item">
        <div class="brand-phone">
        <p style="color: white;text-align: center;">Sản phẩm bán chạy</p>
        </div>
    </div>

        <div class="layout-item-brand">
            <div class="brand-phone">
                <img alt="iPhone" width="" height="20.27px" src="https://dienthoaihay.vn/images/products/cat/resized/hang1_1629782045.png">
            </div>
        </div>

        <div class="layout-item-brand">
            <div class="brand-phone">
            <img alt="Xiaomi" width="" height="" src="https://dienthoaihay.vn/images/products/cat/resized/hang4_1629782113.png">
            </div>
        </div>
        <div class="layout-item-brand">
        <div class="brand-phone">
        <img alt="Samsung" width="" height="" src="https://dienthoaihay.vn/images/products/cat/resized/hang2_1629782097.png">
        </div>
        </div>
        <div class="layout-item-brand">
        <div class="brand-phone">
        <img alt="Realme" width="" height="" src="https://dienthoaihay.vn/images/products/cat/resized/hang3_1629782127.png">
        </div>
        </div>
        <div class="layout-item-price">
        <div class="brand-phone">
        <p style="color: black;text-align: center;">Dưới 3 triệu</p>
        </div>
        </div>
        <div class="layout-item-price">
        <div class="brand-phone">
        <p style="color: black;text-align: center;">3- 5 triệu</p>
        </div>
        </div>
        <div class="layout-item-price">
        <div class="brand-phone">
        <p style="color: black;text-align: center;">5 - 7 triệu</p>
        </div>
        </div>
        <div class="layout-item-price">
        <div class="brand-phone">
        <p style="color: black;text-align: center;">7 - 10 triệu</p>
        </div>
        </div>
        </div>

    </div>

</div>
</section>
    <!-- Featured Section Begin -->
    <section class="featured spad" style ="margin-top:-40px">
        <div class="container">
            <div class="row featured__filter">
            @foreach ($products as $key => $product)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('storage').'/'.$product->image }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6 class="name-phone">{{$product->name}}</h6>
                            <h5>{{$product->price}}</h5>
                            <div style="background-color: orange;"><p>{{$product->description}}</p>
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad" style="margin-top:-50px ;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="layout-item">
                        <div class="brand-review">
                            <p style="color: white;text-align: center;">REVIEWER NÓI GÌ VỀ DIENTHOAHAY.VN</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:15px">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                        <img alt="Reviewer Dương Dê" src="https://dienthoaihay.vn/images/testimonials/2021/09/01/large/duong_1630483388.jpg">
                        </div>
                        <div class="blog__item__text">
                            <div class="reviewer">
                            <strong>Reviewer Duong De</strong>
                            </div>
                            <p>Mình thấy duy nhất Dienthoaihay.vn tặng gói bảo hành cả nguồn, màn hình, vân tay cho khách mua Xiaomi/ Realme, giúp các bạn mua mặt hàng này yên tâm tuyệt đối về chất lượng mà vẫn tiết kiệm chi phí. Rất uy tín và chuyên nghiệp!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                        <img alt="Reviewer Người Lạ" src="https://dienthoaihay.vn/images/testimonials/2021/09/01/large/la_1630483869.jpg">
                        </div>
                        <div class="blog__item__text">
                            <div class="reviewer">
                            <strong>Reviewer Nguoi La</strong>
                            </div>
                            <p>Dienthoaihay.vn là địa chỉ yên tâm tuyệt đối của mình mỗi khi cần mua điện thoại cho mình hoặc anh chị em bạn bè người thân. Gì cũng có, gì cũng rẻ, chất lượng và bảo hành đúng như cam kết!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                        <img alt="Reviewer Dương Dê" src="https://dienthoaihay.vn/images/testimonials/2021/09/01/large/duong_1630483388.jpg">
                        </div>
                        <div class="blog__item__text">
                            <div class="reviewer">
                            <strong>Reviewer Duong De</strong>
                            </div>
                            <p>Mình thấy duy nhất Dienthoaihay.vn tặng gói bảo hành cả nguồn, màn hình, vân tay cho khách mua Xiaomi/ Realme, giúp các bạn mua mặt hàng này yên tâm tuyệt đối về chất lượng mà vẫn tiết kiệm chi phí. Rất uy tín và chuyên nghiệp!</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                        <img alt="Reviewer Vũ Hay Ho (NextGen)" src="https://dienthoaihay.vn/images/testimonials/2021/09/01/large/vu_1630483582.jpg">
                        </div>
                        <div class="blog__item__text">
                            <div class="reviewer">
                            <strong>Reviewer Duong De</strong>
                            </div>
                            <p>Dienthoaihay.vn là địa chỉ yên tâm tuyệt đối của mình mỗi khi cần mua điện thoại cho mình hoặc anh chị em bạn bè người thân. Gì cũng có, gì cũng rẻ, chất lượng và bảo hành đúng như cam kết!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad" style="margin-top:-50px">
        <div class="container">
            <div class="background-end">
                <div class="row"  >
                    <div class="col-lg-3">
                        <div class="footer__about" style="margin-left:30px; margin-top: 25px;  ">
                            <strong>Ve chung toi</strong>
                            <ul>
                                <li><a href="#">Tin tuc</a></li>
                                <li><a href="#">Gioi thieu</a></li>
                                <li><a href="#">Tuyen dung</a></li>
                                <li><a href="#">He thong dai ly</a></li>
                                <li><a href="#">Chinh sach tich diem</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 ">
                        <div class="footer__about" style="margin-left:20px; margin-top: 25px;  ">
                        <strong>Ho tro khach hang</strong>
                            <ul>
                                <li><a href="#">Chinh sach quy dinh chung</a></li>
                                <li><a href="#">Chinh sach van chuyen</a></li>
                                <li><a href="#">Chinh sach bao hanh</a></li>
                                <li><a href="#">Chinh sach doi tra</a></li>
                                <li><a href="#">Huong dan mua hang online</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer__about" style="margin-left: 100px; margin-top: 25px;">

                        <strong >He thong cua hang</strong>

                            <ul>
                            <div class="wrap-list-address" >
                                <div>
                                    <div class="addr">
                                        - <span>Cơ sở 1:</span>
                                        <a href="https://www.google.com/maps/place/215+Gi%C3%A1p+Nh%E1%BA%A5t,+Nh%C3%A2n+Ch%C3%ADnh,+Thanh+Xu%C3%A2n,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@21.0072602,105.8126112,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ac9cfa0dedd3:0x8c334b242260f53f!8m2!3d21.0072552!4d105.8147999" title="Cơ sở 1" target="_blank" >
                                            Số 215 Giáp Nhất, Nhân Chính, Thanh Xuân, Hà Nội				</a>
                                    </div>
                                    <div class="phone">
                                        <span>Hotline:</span>
                                        <a href="tel:0818.215.215" title="Hotline:0818.215.215 ">
                                            0818.215.215				</a>
                                    </div>
                                </div>
                                <div>
                                    <div class="addr">
                                        - <span>Cơ sở 2:</span>
                                        <a href="https://www.google.com/maps/place/208+P.+X%C3%A3+%C4%90%C3%A0n,+Ph%C6%B0%C6%A1ng+Li%C3%AAn,+%C4%90%E1%BB%91ng+%C4%90a,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@21.0118437,105.8346246,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ab86e249573d:0x54ddddcd79b98502!8m2!3d21.0118387!4d105.8368133" title="Cơ sở 2" target="_blank" >
                                         208 Xã Đàn, Đống Đa, Hà Nội</a>
                                    </div>
                                    <div class="phone">
                                        <span>Hotline:</span>
                                        <a href="tel:0815.208.208" title="Hotline:0815.208.208 ">
                                            0815.208.208				</a>
                                    </div>
                                </div>
                            </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row"  >

                    <div class="col-lg-6">
                        <div class="footer__about" style="margin-left:30px; margin-top: 20px;  ">
                            <strong>Phuong thuc thanh toan</strong>
                            <div>
                                <img style="width:50px;height:30px" class="lazy after-lazy" alt="" src="https://dienthoaihay.vn/images/partners/2019/05/24/resized/maestro-png-4_1558685755.jpg" style="display: inline;">
                                <img style="width:50px;height:30px;margin-left:5px" class="lazy after-lazy" alt="" src="https://dienthoaihay.vn/images/partners/2019/05/24/resized/paypal-logo_1558685779.jpg" style="display: inline;">
                                <img style="width:50px;height:30px;margin-left:5px" class="lazy after-lazy" alt="" src="https://dienthoaihay.vn/images/partners/2019/05/24/resized/untitled-1_1558685765.jpg" style="display: inline;">
                                <img style="width:50px;height:30px;margin-left:5px" class="lazy after-lazy" alt="" src="https://dienthoaihay.vn/images/partners/2019/05/24/resized/kisspng-visa-mastercard-payment-american-express-credit-ca-visa-passport-5b478305164d445193852115314132530914_1558685787.jpg" style="display: inline;">
                            </div>
                            <br></br>
                            <strong>Hinh thuc van chuyen</strong>

                            <div>
                                <img style="width:50px;height:30px" class="lazy after-lazy" alt="" src="https://dienthoaihay.vn/images/partners/2021/08/24/resized/giaohang_1629813393.jpg" style="display: inline;">
                            </div>
                            <br></br>
                            <img style="width:150px;height:60px" class="lazy dtb after-lazy" alt="Đã thông báo" title="Đã thông báo" src="https://dienthoaihay.vn/images/config/dathongbao_1558687262_1593009279.png" style="display: inline;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer__about" style="margin-left: 120px; margin-top: 20px;">



                        <span style="vertical-align: bottom; width: 320px; height: 178px;"><iframe name="f29f40c89ec5f74" width="320px" height="178px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.10/plugins/page.php?adapt_container_width=true&amp;app_id=140517186551584&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfaa001981e353c%26domain%3Ddienthoaihay.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fdienthoaihay.vn%252Ff27a2342902d37c%26relation%3Dparent.parent&amp;container_width=448&amp;height=178&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fdienthoaihay.vn&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=320" style="border: none; visibility: visible; width: 320px; height: 178px;" class=""></iframe></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src={{ URL("/frontend/js/jquery-3.3.1.min.js") }}></script>
    <script src={{ URL("/frontend/js/bootstrap.min.js") }}></script>
    <script src={{ URL("/frontend/js/jquery.nice-select.min.js") }}></script>
    <script src={{ URL("/frontend/js/jquery-ui.min.js") }}></script>
    <script src={{ URL("/frontend/js/jquery.slicknav.js") }}></script>
    <script src={{ URL("/frontend/js/mixitup.min.js") }}></script>
    <script src={{ URL("/frontend/js/owl.carousel.min.js") }}></script>
    <script src={{ URL("/frontend/js/main.js") }}></script>



</body>

</html>
