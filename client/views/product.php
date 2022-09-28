<link rel="stylesheet" href="./../assets/Css/Product.css">
<div class="banner">
    <img class="w-100" style="height: 300px;object-fit: cover"
        src="https://bizweb.dktcdn.net/100/180/515/themes/683553/assets/slider_5.png?1663218776960" alt="">
</div>
<style>
.product-list_box {
    display: grid;
    margin-top: 30px;
    grid-template-columns: repeat(5, 1fr);
    grid-gap: 10px;
}
</style>

<div class="content padding-container">
    <header class="header-content-box">
        <div class="icon-open-filer-all" onclick="openNav()">
            <i class="fa-solid fa-arrow-down-short-wide"></i>
            Filter
        </div>
        <div class="title-box text-center">
            <h3 class="commom-title">Tất cả sản phẩm</h3>
        </div>
        <div class="selected-box">
            <select class="select" name="" id="">
                <option value="">Mới nhất</option>
                <option value="">Gần đây</option>
                <option value="">Bán chạy nhất</option>
            </select>
        </div>
    </header>
    <div id="myNav" class="overlay">

        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!-- Overlay content -->
        <div class="overlay-content">
            <button class="accordion">Loai hinh sản phẩm</button>
            <div class="panel">
                <ul>
                    <li><a href=""><i class="fa-solid fa-caret-right"></i> Tất cả sản phẩm</a></li>
                    <li><a href=""><i class="fa-solid fa-caret-right"></i> Sản phẩm khuyến mãi</a></li>
                    <li><a href=""><i class="fa-solid fa-caret-right"></i> Sản phẩm nổi bật</a></li>
                </ul>
            </div>

            <button class="accordion">Thương hiệu</button>
            <div class="panel">
                <ul>
                    <li><a href=""><i class="fa-solid fa-registered"></i> Tất cả sản phẩm</a></li>
                    <li><a href=""><i class="fa-solid fa-registered"></i> Sản phẩm khuyến mãi</a></li>
                    <li><a href=""><i class="fa-solid fa-registered"></i> Sản phẩm nổi bật</a></li>
                </ul>
            </div>

            <button class="accordion">GIÁ SẢN PHẨM</button>
            <div class="panel">
                <ul>
                    <li><a href=""><i class="fa-solid fa-dollar-sign"></i> Dưới 500,000₫</a></li>
                    <li><a href=""><i class="fa-solid fa-dollar-sign"></i> 500,000₫ - 1,000,000₫</a></li>
                    <li><a href=""><i class="fa-solid fa-dollar-sign"></i> 1,000,000₫ - 1,500,000₫</a></li>
                    <li><a href=""><i class="fa-solid fa-dollar-sign"></i> 2,000,000₫ - 5,000,000₫</a></li>
                    <li><a href=""><i class="fa-solid fa-dollar-sign"></i> Trên 5,000,000₫</a></li>
                </ul>
            </div>
            <button class="accordion">MÀU SẮC</button>
            <div class="panel">
                <ul class="filter-list-color">
                    <li><a class="color-blue" href=""></a></li>
                    <li><a class="color-red" href=""></a></li>
                    <li><a class="color-pink" href=""></a></li>
                    <li><a class="color-gray" href=""></a></li>
                    <li><a class="color-orange" href=""></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-list_box ">
    <?php foreach ($products as $item) { ?>
        <div class="product-item">
            <div class="product-item_img-box">
                <img class="w-100"
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

</div>


<script src="./../assets/js/filter-product.js">
</script>