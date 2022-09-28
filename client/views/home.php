<link rel="stylesheet" href="./../assets/Css/Home.css">
<div class="banner">
    <img class="w-100" src="https://theme.hstatic.net/1000409762/1000752712/14/slideshow_2.jpg?v=10" alt="">
    <div class="banner-sub_box  padding-container">
        <div class="banner-sub_img-box">
            <img class="w-100 h-100 "
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHs7OsnVT6x9iButRu0vQSYpPduxbYvL-SgQ&usqp=CAU"
                alt="">
        </div>
        <div class="banner-sub_img-box">
            <img class="w-100 h-100 "
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTz2C42dNn5C8YQ017fuWtsrP8Vofp3yUnFw&usqp=CAU"
                alt="">
        </div>
        <div class="banner-sub_img-box">
            <img class="w-100 h-100 "
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRa02xpSPRyVb93rXm0jd9yQrZwH7LF_0jVOw&usqp=CAU"
                alt="">
        </div>
    </div>
</div>
<div class="content">
    <h3 class="header-footer-title commom-title text-center">
        Sản phẩm mới nhất
    </h3>
    <p class="text-center color-text">Cập nhật những sản phẩm mới nhật</p>
    <div class="product-list_box padding-container">
        <?php foreach ($products as $item) { ?>
        <div class="product-item">
            <div class="product-item_img-box">
                <img style="height:250px;" class="w-100"
                    src="./../upload/<?=$item["sp_image"]?>" alt="">
                <div class="product-item_percent"><?=ceil(($item["sp_price"] - $item["sp_sale"]) * 100/$item["sp_price"])?>%</div>
                <div class="product-item_icon">
                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                </div>
            </div>
            <p class="product-item_name"><a href=""><?=$item["sp_name"]?></a></p>
            <div class="product-item_price-wraper">
                <div class="product-price-main">
                <?=number_format($item['sp_price'],0,",",".")?>đ
                </div>
                <div class="product-price_sale">
                <?=number_format($item['sp_sale'],0,",",".")?>đ
                </div>
            </div>
        </div>
        <?php  } ?>
    </div>

    <div class="category_image-box padding-container">
        <div class="category_image-above-box ">
            <div class="category_image-above-left">
                <div class="category_image-item-box">
                    <img src="https://theme.hstatic.net/1000409762/1000752712/14/img_banner_center_1.jpg?v=10"
                        alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Sản phẩm mới nhất</div>
                    </div>
                </div>
                <div class="category_image-item-box" style="margin-top: 25px">
                    <img src="https://theme.hstatic.net/1000409762/1000752712/14/img_banner_center_2.jpg?v=10"
                        alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Sản phẩm mới nhất</div>
                    </div>
                </div>
            </div>
            <div class="category_image-above-right">
                <div class="category_image-item-box">
                    <img src="https://theme.hstatic.net/1000409762/1000752712/14/img_banner_center_3.jpg?v=10"
                        alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Hello World</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="category_image-down-box">
            <div class="category_image-item-box">
                <img src="https://theme.hstatic.net/1000409762/1000752712/14/img_collection_info_1.jpg?v=10"
                    alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text">Sản phẩm mới nhất</div>
                </div>
            </div>
            <div class="category_image-item-box">
                <img src="https://theme.hstatic.net/1000409762/1000752712/14/img_collection_info_2.jpg?v=10"
                    alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text">Sản phẩm mới nhất</div>
                </div>
            </div>
            <div class="category_image-item-box">
                <img src="https://theme.hstatic.net/1000409762/1000752712/14/img_collection_info_4.jpg?v=10"
                    alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text">Sản phẩm mới nhất</div>
                </div>
            </div>
            <div class="category_image-item-box">
                <img src="https://theme.hstatic.net/1000409762/1000752712/14/img_collection_info_3.jpg?v=10"
                    alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text">Sản phẩm mới nhất</div>
                </div>
            </div>
        </div>
    </div>
</div>