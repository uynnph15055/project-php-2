<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/Css/base.css">
    <link rel="stylesheet" href="./assets/Css/cart.css">
    <link rel="stylesheet" href="./assets/Css/Cart.css">
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
                <!-- <div class="header-login  header-main_sub">
                    <p><i class="fa-solid icon fa-user"></i></p>
                    <div class="">
                        <span><a href="">Đăng nhập</a>/<a href="">Đăng ký</a></span>
                        <br>
                        <p>Tài khoản của tôi <i class="fa-solid fa-caret-down"></i>
                        </p>
                    </div>
                </div> -->
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
            <h3 class="title-page-name commom-title text-center">Giỏ hàng </h3>
            <p class="text-center color-text"> Giỏ hàng của bạn , hãy chọn những thứ mình muốn </p>
            <div class="cart-box">
                <div class="">
                    <table class="table">
                        <thead>
                            <th>STT</th>
                            <th>Tên</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Tổng tiền</th>
                            <th>Xoá</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="cart_name-box">
                                    <img class="cart_img"
                                        src="data:image/jpeg;base64,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"
                                        alt="">
                                    <div class="product_cart-info-rigth">
                                        <p class="product_name">okokokokokoko</p>
                                        <ul class="product_atribute-list">
                                            <li>Size M</li>
                                            <li>Size L</li>
                                            <li>Size S</li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <div class="number-input">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                            class="minus"><i class="fa-solid fa-minus"></i></button>
                                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                            class="plus"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                </td>
                                <td>10 0000d</td>
                                <td>100 0000d</td>
                                <td>
                                    <a href="" class="btn-delete-cart"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="cart_name-box">
                                    <img class="cart_img"
                                        src="data:image/jpeg;base64,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"
                                        alt="">
                                    <div class="product_cart-info-rigth">
                                        <p class="product_name">okokokokokoko</p>
                                        <ul class="product_atribute-list">
                                            <li>Size M</li>
                                            <li>Size L</li>
                                            <li>Size S</li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <div class="number-input">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                            class="minus"><i class="fa-solid fa-minus"></i></button>
                                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                            class="plus"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                </td>
                                <td>10 0000d</td>
                                <td>100 0000d</td>
                                <td>
                                    <a href="" class="btn-delete-cart"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="cart_name-box">
                                    <img class="cart_img"
                                        src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ8NDQ0NFREWFhURFRUYHSkgGBolGxUTITEtJSorLi4uFx8zODMsNygtMSsBCgoKDg0OFQ8PFS0dFR0tKysrKysrLSsrKy0tKy0uKy0yLSsuLS0rKystLS0tLS0tMi0tKy0tKystLS0rLS0rLf/AABEIALwBDAMBEQACEQEDEQH/xAAaAAEBAQEBAQEAAAAAAAAAAAAAAQIEAwUG/8QAORAAAgIBAQQGCAUCBwAAAAAAAAECEQMSBBMhUQUGMUFhcSIycoGRobHBI0JS0eEUMxVic5Ky8PH/xAAaAQEBAAMBAQAAAAAAAAAAAAAAAQIDBAUG/8QAMREBAAIBAwIEAwcEAwAAAAAAAAECEQMEMRIhE0FRcSJhkTJCgaGx0fAFUsHhFCMz/9oADAMBAAIRAxEAPwD30lRpIDWkDSiBpRA0ohF0hV0hF0gXSBrSA0gHECqJBpIgOJRUgCQGtIE0gNIDSMiUA0jIukZF0gTSBdIE0gZoojiBNIFUQQaQOJRCtaQNKIG1EDSiBdJMiqIyLpCKkBpIC0QVRAriAUQLQFoCUBVEC6QDiBNICgGkC6Qq6QGkIaQLpAy4gRxKI4kE0gKAtAcSgVWlEDaiMi6RkbUSCuIFSCGkKqiBrSENIGlEC0ASAlEFoZEoo0kAoAAoBQCgLQUoDSRMolFCgJQEcQJpAaQqaQi0By0gpSAqYGlQGk0BG0BU0BU0BdSA0pIC6kQTWgLqQQ1IA5oKmtANaKKsiILvEEXXHmFTeoCPIuYDeoILKgI8qKrayx5kE3sQJvkUN9EgPNEozv0AedAZWdAHnQR83fMqm9YDesYF3rAu9YwG8YwG9YDesBvWMC71jAb1jAm9ZQ3r5kwG8fMYDeMGHoseV9kJ/wC1mPVX1bI0dSfuz9GZLIu2Ml5xZcx6pOneOaz9GN4+ZWC7x8wG8fMBrYwGtlDWyBrYwLrYDWwGtgNbAaihZBGyiWAsBYHhYFsBYFsAAsBYFsBYCwFgLAWB7bJh3kqukuMnyRq1dToj5ura7ade2OIjl7ZOmti2bhrTa7d3HeTfv7Pizk+O/eXt10dPRjFY7uSfXXZ12Ytol4ucIfLiZeDJ1x8vpn/MN4+u+zfmwZ146oT/AGHgz6sc58/y/wBy949bOjp+tvY+1hi18mTotHEk1iecT/PZv/EuisnZmxxfjHJj+xlFtSPNqna6dvuR+E4/ZmUdkl/b2vD5SyRM417RzDRf+mxP2Jx+bllwfBp+MXcX5M6azExmHl6mnbTtNLcwFYAFAAAAAABbAEEKAADnAtgLAtgALYCwAAAAAWAA+f0xtLjBY061u5eyjm1O9/Z7/wDTa9GjNvOX5rLOvMyiF1LYeFszastaqIyybxIuE8SISWePMnTKTr0jzeuFzk/Rx5J+zCTHhyRvdOH6rofUsKjOLhKLfovtSfFGdYx2edu9SNS/iRHaf8O6zJylgVMCgLAAAKQCgAAEAo5gKAAALAtgLAAUAAAAAPz3S2b022+CVI5sZmX0mlNa6FYzxD41SySeiLl5di833G6KuDV16xPLrxdF5JetOMPBJzf2Muly23M+T3fRmGH9zJJ+coxT91WXDVOte3ZhrZYdmNS9q5f8mOqGcaOtby+qrpDT6kIR8o/tRjN/k3V2c/et/PyZXSOZv15L2aX2v5mM3lups9PzmZfX6CzObyam5NqLuTcn3978y0mZ5ad9pV05rFIxD65m4ACgAAGgAFIBQAACKFRzAAAAABQAAC2AAWAsCgfC6T6PxOcsjtd7inUXKxENviWxjLlWaMFSXlGP/eBlMxHLGlLXnFYzLwzbfJ8E6XKP7/sa5v6O2m0rH25z+jkllfHjXP8AlmPLqrikdu0Od7QrqKc5coqzOKTzPZz23dInpr8U/JtRyPtccfgvxJfsT4Y+ax49+cUj6z+z1xKuFt+Mq+xjM58nRp1mvNs+773V51KS5xv4NCjTv4iaRPpL7pseUAAKgKRVKggAACgQCgCZHMUAAAABQAAAAAAAJJ0m+SA/PdJ7apejB8L4y7vJc/oSbRHu6tLb21O89q+v7PlSlfgvm3zfMw57y9CtYrHTWMQ58+0KHi+RlWk29nPr7mul25t6PHFjnm9Kb04/Dv8ABLvNkzFOOXHp01d1ObTin8+rshFRVRWleHa/N95pmZnl6enpU04xSMLRGwiEh9vq9K8sv9N/VFry597/AOce79CbHlgACoDQAARVCAAAFAgBzUUKAUAAoACgQAAoAAA8trk1jm4umotpmNozEt23nGrWfm/I55uTuTbfNmuIw9q85cO159HBes18EbqUz3nh5273M6fw1+1Lw2TZ943KV6U+POT5Gy9umMRy4drt51rTa32Y5+b6L+nBJdiRzPciIiMRwxkyRirbosVmeGvU1aacZtOGVrlx/tx5yVyfkv3Mvhj5y1Vtq6nesdNfWefwj92oxS4K34ydtmMzlupTpjmZ933OrS/Eyex90K8tG9n4I936KjY8xaAukirQCgi0AoKukC6SImkqrpAaSCqIHIZIgAABQIBQIBQKBAAGcsdUZLnFr5EZVnFol+Ll2mt7mXBt+NucEu2Xorzv+TdpT2l5O/05nUpjme38+rthBRSiuxfN97NVpmZy9LT0406xWPJzbRtVPTDjLs8n9zZXTz3nhx7jexWejT72bwbPp9KfpZPHiofyS1/KvDPQ22J8TV73/T/f6Pa7NbsygH3urC9LK/8ALFfNlry497Pw1foDY85UwKQUAAIogNoABQAAABxGSAAAAAoEAoAABQIAA/HbdDTlyR5Tl9TU9rTnNYl5NK064q6fKxnyZ2pWZi08xw4ds2ntjH3v7I3Up5y8vebvnTpPvLew4NKU36z9XwXMmpbyhnsdviPFtHfy/d0mp6Lz3ltxgra7X2Rj5sy6fOXPOtmejTjM/lHvLUVXfqfe6pe5ElspWY+1OZfourC4ZX4wX1LVy72fs/i+6ZuARFaAoAgoACgLAoBMCgAOMyRAAAABQAAAAAAAAH5fp2GnPJ/qSl8jXPL1dtbOnHycHaiOnmJh8vBg1ZNL7E3q8kdVrYrl8/o6E31fDt5c/g+lKS7+H0Ryvdm0V54c2uWWWmLcYL1pd9G3pisZnlwTq33FujTnFfOXTGKS0xVRXYvu/E1zMzOZdtKV06xWsdhBlD9L1aj+FkfOdfBfyWrh3v2oh9gzcS2RVQFQFIAFAAVAUAAAAchkgAAAAAACgAAEAAAPg9ZcfHHPmnF+7/0ws79pbtMPiRZi7KziV0JNyS4ySTfgh1TjB4Va2m8cy+ftOZzemPZde0zopXpjMvH3W4nVt0U4/V24sahFRXvfN8zTa3VOXqaOlGlSKxz5+7VkbREH6vq9CtnvnOT+iMq8PO3c/wDZ+D6Rk5VSKikVQBBSi2QSwKgKgKBOICgOUyAgFAIAAAACgQCgQC0B83rBi1YG/wBEk/d2fcxl07a2L+78szF6EtriqfkThsj4q4lxbJs7jklf5Ozxb7H8LN175rHzeVtNvNda3V93/PH5Ow0vVwMCFR+w6GjWz4vFN/Fsyrw8rcznUl3FaSgNAAKQAKAAIC2BbAAAOQyEIAAooQAAAAAC2BALYHjtcFPHOD/NFr39xOWdLdNol+JfLkYPVzlYsMqziXpZi2dmbLANhJlmysJth+12BpYsa5Qj9DOHkaluq0y6dQYqmBoABSABQACgAFAJAaA4yggAAqAVQAQAAQABlsK8cmSgPm7dnlTSZYgfmM2KabakzLESsXvXizy/E5/IdNV/5Gr6l5P1P4Dpj0PH1f7lrJ+p/IdMeieNq/3SqxTf5pfEYj0TxNSfvS6dn2O2rbfmx2M2nmZfqtibUUvAwV3QkRHrGQG7A0gKQAKAAqAAANAAOMohUCKoAAAKgFAgFQIxIK8ckQOLaMVmSvn5Nl8C5MPCWyeAymGf6MuTAtj8Bkw9cexkyuHZg2Wu4kyr6mHHSMUl0QiRHrFAaSA0gNUQAKBQACgAAC2UcgAAAKgFWggAQFCowjLAjQGJIK8ZwA8ZYSq83hAf06CrHAvAZG44eQyPWGMg6IIiPaIRpAUDSAoAgtgAFgUCoAwJYRzFUoAAKiEVSgEGAAgUAgRloKxJAedBUoBpAukDSQG0gr0iRG0EaAtgNQGlICkACgAKBUAAlAcpQsAAAoEAFQAIihQCIBKCsMDDAlAArSAqQGkB6RINII0BQLQCgKBSAUUgAChZBWBylAAAAqAUVEoihUWiKgEKgwoBhgZaAlAKCqkEWgrUQjSINoDSAqAqAtgQCogpQAoFTAMggHMUCigQIqIqMoEAqBFGUAAEAywIBAAFAIDQVpERoEtIABpAUCkAAUUAAIBRpEH/2Q=="
                                        alt="">
                                    <div class="product_cart-info-rigth">
                                        <p class="product_name">okokokokokoko</p>
                                        <ul class="product_atribute-list">
                                            <li>Size M</li>
                                            <li>Size L</li>
                                            <li>Size S</li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <div class="number-input">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                            class="minus"><i class="fa-solid fa-minus"></i></button>
                                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                            class="plus"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                </td>
                                <td>10 0000d</td>
                                <td>100 0000d</td>
                                <td>
                                    <a href="" class="btn-delete-cart"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="cart_name-box">
                                    <img class="cart_img"
                                        src="data:image/jpeg;base64,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"
                                        alt="">
                                    <div class="product_cart-info-rigth">
                                        <p class="product_name">okokokokokoko</p>
                                        <ul class="product_atribute-list">
                                            <li>Size M</li>
                                            <li>Size L</li>
                                            <li>Size S</li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <div class="number-input">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                            class="minus"><i class="fa-solid fa-minus"></i></button>
                                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                            class="plus"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                </td>
                                <td>10 0000d</td>
                                <td>100 0000d</td>
                                <td>
    
                                    <a href="" class="btn-delete-cart"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn-table-footer">
                        <button class="btn-footer btn-continue-now"><a href=""><i class="fa-solid fa-arrow-left"></i> Tiếp tục mua hàng</a></button>
                        <button class="btn-footer btn-update-cart "><a href="">Cập nhật giỏ hàng</a></button>
                    </div>
                </div>
                <div class="total-money">
                    <h3 class="plus-cart">Cộng giỏ hàng</h3>
                    <div class="plus-cart-provisional">
                        <h4>Tạm tính</h4>
                        <h5>100000d</h5>
                    </div>
                    <div class="plus-cart-provisional">
                        <h3 class="total-name">Tổng tiền</h3>
                        <h4  class="total-price">100000d</h4>
                    </div>
                    <button href="" class="btn-check-out"><a href="">Tiền hành thanh toán</a></button>
                </div>
            </div>
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