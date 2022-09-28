<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/Css/base.css">
    <link rel="stylesheet" href="./assets/Css/cart.css">
    <link rel="stylesheet" href="./assets/Css/Pay.css">
    <link rel="stylesheet" href="./assets/Css/dropdown.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0"
        nonce="vWDw95v7"></script>

</head>

<body>
    <div id="fb-root"></div>
    <div class="container">
        <header class="header">
            <div class="header-top">
                <p>Trang mua hàng nội thất trực tuyến chính hãng!</p>
            </div>
            <div class="header-main padding-container">
                <div class="header-main_log">
                    <span>Urban Home</span>
                </div>
                <form action="" class="header-search_form-box">
                    <input class="header-search_form-input" type="text" placeholder="Tìm kiếm sản phẩm">
                    <button class="header-search_btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <div class="header-phone header-main_sub">
                    <p><i class="fa-solid icon fa-square-phone"></i></p>
                    <div class="">
                        <span>Hotline:</span>
                        <br>
                        <p>1900.636.099
                        </p>
                    </div>
                </div>
                <div class="header-login   dropdown">
                    <div onclick="dropdown()" class="header-main_sub dropbtn">
                        <img class="header-info-user-img"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYmkp9a2rrD1Sskb9HLt5mDaTt4QaIs8CcBg&usqp=CAU"
                            alt="">
                        <div class="header-info-user-name" style="margin-left: 15px;">
                            <p>Nguyen Ngoc Uy</p>
                        </div>
                    </div>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="#">Thông tin</a>
                        <a href="#">Hoá đơn</a>
                        <a href="#">Đăng xuất</a>
                    </div>
                </div>

                <div onclick="openNav()" class="header-cart header-main_sub">
                    <div class="header-icon-cart">
                        <p><i class="fa-solid icon fa-cart-shopping"></i></p>
                        <span>0</span>
                    </div>
                    <div class="">
                        <p>Giỏ hàng
                        </p>
                    </div>
                </div>
                <div id="mySidenav" class="sidenav cart-list-info">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="" style="padding: 0px 20px ;border-top:1px solid #ccc;">
                        <h4 style="margin-top: 10px;">Tổng số : 10</h4>
                        <div class="cart-list-item">
                            <img class="cart-list-item-img "
                                src="https://product.hstatic.net/1000409762/product/sp11-2_d58d2329380c41f1885a093a5cf2f27c_large.jpg"
                                alt="">
                            <div class="">
                                <p class="cart-list-item-name">Ghế sofa giường kéo Roots</p>
                                <p class="cart-list-item-price">890,000₫ <span>(4)</span></p>
                            </div>
                            <a href="" class="btn-cart-delete"><i class="fa-solid fa-trash-can"></i></a>
                        </div>
                        <div class="cart-list-item">
                            <img class="cart-list-item-img "
                                src="https://product.hstatic.net/1000409762/product/sp11-2_d58d2329380c41f1885a093a5cf2f27c_large.jpg"
                                alt="">
                            <div class="">
                                <p class="cart-list-item-name">Ghế sofa giường kéo Roots</p>
                                <p class="cart-list-item-price">890,000₫ <span>(4)</span></p>
                            </div>
                            <a href="" class="btn-cart-delete"><i class="fa-solid fa-trash-can"></i></a>
                        </div>
                        <div class="cart-list-item">
                            <img class="cart-list-item-img "
                                src="https://product.hstatic.net/1000409762/product/sp11-2_d58d2329380c41f1885a093a5cf2f27c_large.jpg"
                                alt="">
                            <div class="">
                                <p class="cart-list-item-name">Ghế sofa giường kéo Roots</p>
                                <p class="cart-list-item-price">890,000₫ <span>(4)</span></p>
                            </div>
                            <a href="" class="btn-cart-delete"><i class="fa-solid fa-trash-can"></i></a>
                        </div>
                        <div class="cart-list-item">
                            <img class="cart-list-item-img "
                                src="https://product.hstatic.net/1000409762/product/sp11-2_d58d2329380c41f1885a093a5cf2f27c_large.jpg"
                                alt="">
                            <div class="">
                                <p class="cart-list-item-name">Ghế sofa giường kéo Roots</p>
                                <p class="cart-list-item-price">890,000₫ <span>(4)</span></p>
                            </div>
                            <a href="" class="btn-cart-delete"><i class="fa-solid fa-trash-can"></i></a>
                        </div>
                        <button class="cart-list-view">Xem giỏ hàng </button>
                    </div>
                </div>
            </div>
            <div class="header-menu padding-container">
                <ul class="header-menu_list">
                    <li class="header-menu-item"><a href="" class="header-menu-item-link">Trang chủ </a></li>
                    <li class="header-menu-item"><a href="" class="header-menu-item-link">Giới thiệu</a></li>
                    <li class="header-menu-item"><a href="" class="header-menu-item-link">Sản phẩm <i
                                class="fa-solid fa-caret-down"></i></a></li>
                    <li class="header-menu-item"><a href="" class="header-menu-item-link">Product View <i
                                class="fa-solid fa-caret-down"></i></a></li>
                    <li class="header-menu-item"><a href="" class="header-menu-item-link">Liên hệ</a></li>
                </ul>
            </div>
        </header>

        <div class="content padding-container text-center">
            <h3 class="title-page-name commom-title text-center">Thanh toán</h3>
            <p class="text-center color-text"> Giỏ hàng của bạn , hãy chọn những thứ mình muốn </p>
            <form class="cart-box">
                <div class="">
                    <h4 class="title-form">Điền thông tin của bạn</h4>
                    <input type="text" class="input-contact" placeholder="Tên của bạn ">
                    <input type="text" class="input-contact" placeholder="Email của bạn">
                    <div class="form-grid-input">
                        <input type="text" class="input-contact" placeholder="Địa chỉ của bạn ">
                        <input type="text" class="input-contact" placeholder="Số điện thoại của bạn">
                    </div>
                    <textarea class="input-contact-textarea" placeholder="Nội dung" name=""></textarea>
                </div>
                <div class="total-money">
                    <div class="order-box">
                        <h4 class="title-form-order">Đơn hàng</h4>
                        <h3 class="plus-cart">Sản phẩm</h3>
                        <div class="plus-cart-provisional">
                            <h4>Giày Nike Jordan University Blue (5)</h4>
                            <h5>100000d</h5>
                        </div>
                        <div class="plus-cart-provisional">
                            <h3 class="total-name" style="color: #8E0007">Tổng tiền</h3>
                            <h4 class="total-price">100000d</h4>
                        </div>
                        <p class="order-note">Sau khi quý khách đặt hàng. Chúng tôi sẽ gửi thông tin đơn hàng qua Email và gọi điện xác nhận đơn hàng. Sau đó sẽ tiến hành vận chuyển hàng. Quý khách thanh toán khi nhận được hàng</p>
                        <button href="" class="btn-check-out">Tiền hành thanh toán</button>
                    </div>
                </div>
            </form>
        </div>


        <footer class="footer">
            <header class="header-footer">
                <h3 class="commom-title text-center">
                    HÃY LIÊN HỆ VỚI CHÚNG TÔI!
                </h3>
                <p class="text-center color-text">Luôn sẵn sáng hỗ trợ và tư vấn cho bạn để có sản phẩm tốt nhất.</p>
                <div class="header-footer-form-box text-center">
                    <input placeholder="Tìm kiếm sản phẩm" class="header-footer-form-input" type="text">
                    <button class="header-footer-form-btn">Gửi</button>
                </div>
            </header>
            <div class="footer-intro-box padding-container">
                <div class="footer-intro-item">
                    <img src="https://theme.hstatic.net/1000409762/1000752712/14/policy_icon_1.png?v=10" alt="">
                    <div class="footer-intro-item-info">
                        <p>Giao hàng nhanh chóng.</p>

                        <span>Miễn phí với đơn hàng trên 3 triệu.</span>
                    </div>
                </div>
                <div class="footer-intro-item">
                    <img src="https://theme.hstatic.net/1000409762/1000752712/14/policy_icon_1.png?v=10" alt="">
                    <div class="footer-intro-item-info">
                        <p>Giao hàng nhanh chóng.</p>

                        <span>Miễn phí với đơn hàng trên 3 triệu.</span>
                    </div>
                </div>
                <div class="footer-intro-item">
                    <img src="https://theme.hstatic.net/1000409762/1000752712/14/policy_icon_1.png?v=10" alt="">
                    <div class="footer-intro-item-info">
                        <p>Giao hàng nhanh chóng.</p>

                        <span>Miễn phí với đơn hàng trên 3 triệu.</span>
                    </div>
                </div>
            </div>
            <div class="header-footer_main padding-container">
                <div class="header-footer_description">
                    <h4 class="title-header color-primary">Giới thiệu</h4>
                    <p class="color-text" style="text-align:justify ;">Trang mua sắm trực tuyến nội thất mang phong cách
                        việt, giúp bạn cập nhập và nắm bắt xu hướng mới</p>
                    <img src="https://theme.hstatic.net/1000409762/1000752712/14/logo_bct.png?v=10" alt="">
                </div>
                <div class="header-footer_contact">
                    <h4 class="title-header color-primary">Liên kết</h4>
                    <ul class="header-contact_list">
                        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> Tìm kiếm</li>
                        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> Giới thiệu</li>
                        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> Chính sách đổi trả</li>
                        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> Điều khoản dịch vụ</li>
                    </ul>
                </div>
                <div class="header-description color-primary">
                    <h4 class="title-header">Thông tin liên hệ</h4>
                    <ul class="header-contact_list">
                        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> Tầng 4, tòa nhà Flemington, số
                            182, đường Lê Đại Hành, phường 15, quận 11, Tp. Hồ Chí Minh.</li>
                        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> 1900.636.099</li>
                        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> 1900.636.099</li>
                        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> hi@haravan.com</li>
                    </ul>
                </div>
                <div class="header-description color-primary">
                    <h4 class="title-header">Fanpage</h4>
                    <div class="fb-page"
                        data-href="https://www.facebook.com/Hoa-qu&#x1ea3;-T&#x1ea5;n-T&#xe0;i-107752811511572/"
                        data-tabs="timeline" data-width="250" data-height="150" data-small-header="false"
                        data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false">
                        <blockquote cite="https://www.facebook.com/Hoa-qu&#x1ea3;-T&#x1ea5;n-T&#xe0;i-107752811511572/"
                            class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/Hoa-qu&#x1ea3;-T&#x1ea5;n-T&#xe0;i-107752811511572/">Hoa
                                quả Tấn Tài</a></blockquote>
                    </div>
                </div>
            </div>
            <div class="footer-end">
                <p class="color-text text-center">Copyright © 2022 Urban Home. Powered by Haravan</p>
            </div>
        </footer>

        <div class="list-contact-icon-box">
            <ul class="list-contact-icon">
                <li class="bg-phone"><i class="fa-solid fa-phone"></i></li>
                <li class="bg-facebook"><i class="fa-brands fa-facebook-f"></i></li>
                <li class="bg-youtobe"><i class="fa-brands fa-youtube"></i></li>
                <li class="bg-twiter"><i class="fa-brands fa-twitter"></i></li>
            </ul>
        </div>
    </div>
    <div id="backTop">
        <i class="fa-solid fa-caret-up"></i>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="./assets/js/tab-slider.js"></script>
    <script src="./assets/js/tab-component.js"></script>
    <script src="./assets/js/list-cart.js"></script>
    <script src="./assets/js/click-dropdown.js"></script>
    <script src="./assets/js/back-top.js"></script>

</body>

</html>