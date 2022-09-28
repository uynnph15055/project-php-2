<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../assets/Css/base.css">
    <link rel="stylesheet" href="./../assets/Css/cart-header.css">
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
                    <!-- <div class="product-result-search">
                        <div class="product-search-item">
                            <img  class="product-search-item-img w-100" src="https://product.hstatic.net/1000409762/product/sp1-1_8b56d5f805744ca98b24545ae72d3cb4_master.jpg" alt="">
                            <div class="product-search-item-name">
                                Ghế phòng khách Arctander
                            </div>
                            <h4 class="product-search-item-price">799,000₫
                            </h4>
                        </div>
                        <div class="product-search-item">
                            <img  class="product-search-item-img w-100" src="https://product.hstatic.net/1000409762/product/sp1-1_8b56d5f805744ca98b24545ae72d3cb4_master.jpg" alt="">
                            <div class="product-search-item-name">
                                Ghế phòng khách Arctander
                            </div>
                            <h4 class="product-search-item-price">799,000₫
                            </h4>
                        </div>
                        <div class="product-search-item">
                            <img  class="product-search-item-img w-100" src="https://product.hstatic.net/1000409762/product/sp1-1_8b56d5f805744ca98b24545ae72d3cb4_master.jpg" alt="">
                            <div class="product-search-item-name">
                                Ghế phòng khách Arctander
                            </div>
                            <h4 class="product-search-item-price">799,000₫
                            </h4>
                        </div>
                        <div class="product-search-item">
                            <img  class="product-search-item-img w-100" src="https://product.hstatic.net/1000409762/product/sp1-1_8b56d5f805744ca98b24545ae72d3cb4_master.jpg" alt="">
                            <div class="product-search-item-name">
                                Ghế phòng khách Arctander
                            </div>
                            <h4 class="product-search-item-price">799,000₫
                            </h4>
                        </div>
                        <div class="product-search-item">
                            <img  class="product-search-item-img w-100" src="https://product.hstatic.net/1000409762/product/sp1-1_8b56d5f805744ca98b24545ae72d3cb4_master.jpg" alt="">
                            <div class="product-search-item-name">
                                Ghế phòng khách Arctander
                            </div>
                            <h4 class="product-search-item-price">799,000₫
                            </h4>
                        </div>
                        <div class="product-search-item">
                            <img  class="product-search-item-img w-100" src="https://product.hstatic.net/1000409762/product/sp1-1_8b56d5f805744ca98b24545ae72d3cb4_master.jpg" alt="">
                            <div class="product-search-item-name">
                                Ghế phòng khách Arctander
                            </div>
                            <h4 class="product-search-item-price">799,000₫
                            </h4>
                        </div>
                    </div> -->
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

                <?php if(isset($user)){ ?>
                    <div class="header-login  header-main_sub">
                    <p> <td><img width="30px" style="height:30px;border-radius:30px;margin-right:10px" src="../upload/<?=$user['kh_avatar']?>"  alt=""></td></p>
                    <div class="">
                        <p lass="name_user" style="font-weight: bold;cursor: pointer;"><?=$user['kh_name']?> </p>
                        <a href="?logout">Đăng xuất</a>
                    </div>
                </div>
                <?php }else{ ?>
                <div class="header-login  header-main_sub">
                    <p><i class="fa-solid icon fa-user"></i></p>
                    <div class="">
                        <span>   <a href="?dang-nhap">Đăng nhập</a>/ <a href="?dang-ky">Đăng ký</a> </span>
                     
                        <br>
                        <p>Tài khoản của tôi <i class="fa-solid fa-caret-down"></i>
                        </p>
                    </div>
                </div>
                <?php } ?>
                <div  class="header-cart header-main_sub" onclick="openCart()" >
                    <div class="header-icon-cart">
                        <p><i class="fa-solid icon fa-cart-shopping"></i></p>
                        <span>0</span>
                    </div>
                    <div class="">
                        <p>Giỏ hàng
                        </p>
                    </div>
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
            <div class="header-menu padding-container">
                <ul class="header-menu_list">
                    <li class="header-menu-item"><a href="index.php" class="header-menu-item-link">Trang chủ </a></li>
                    <li class="header-menu-item"><a href="index.php?url=" class="header-menu-item-link">Giới thiệu</a>
                    </li>
                    <li class="header-menu-item"><a href="index.php?url=san-pham" class="header-menu-item-link">Sản phẩm
                            <i class="fa-solid fa-caret-down"></i></a></li>
                    <li class="header-menu-item"><a href="" class="header-menu-item-link">Product View <i
                                class="fa-solid fa-caret-down"></i></a></li>
                    <li class="header-menu-item"><a href="index.php?url=lien-he" class="header-menu-item-link">Liên
                            hệ</a></li>
                </ul>
            </div>
        </header>
         
        <script src="./../assets/js/list-cart.js"></script>
    