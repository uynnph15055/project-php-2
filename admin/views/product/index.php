<div class="container mt-4 warper" style="height: 550px ;">
    <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex justify-content-between align-items-center col-6">
            <h3>Quản lý sản phẩm</h3>
            <div class="col-3">
                <a href="index.php?url=product" class="btn btn-warning">Tất cả</a>
            </div>
        </div>
        <a href="?url=product-form-add" class="btn btn-success">
            Thêm sản phẩm
        </a>
    </div>
    <div class="row  my-3">
        <div class="col-6">
            <form class="input-group" action="index.php?url=search-product" method="POST">
                <input type="text" class="form-control" name="key_word" placeholder="Tìm kiếm sản phẩm">
                <button class="btn btn-success" type="submit" id="button-addon2"><i
                        class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <?php  if(isset($key_word)){ ?>
        <?php  } ?>
        <div class="col-6">
            <form action="index.php?url=search-product-cate" method="POST">
                <div class="input-group">
                    <select class="form-control" name="cate">
                        <option value="" selected hidden>Danh mục</option>
                        <?php  foreach($cate as $item){ ?>
                        <option value="<?=$item['dm_id']?>"><?= $item['dm_name'] ?></option>
                        <?php  } ?>
                    </select>
                    <button class="btn btn-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
    </div>

    <?php if(count($product) > 0){ ?>
    <table class="table mt-3">
        <thead class="table-light">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Giá</th>
                <th scope="col">Giá giảm</th>
                <th scope="col">SL</th>
                <th scope="col text-center" width="80px">CMTT</th>
                <th scope="col text-center" width="80px">Sửa</th>
                <th scope="col text-center" width="80px">Xoá</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                    $index = 1; foreach($product as $item){  ?>
            <tr>
                <td><?= $index++?></td>
                <td><?=$item['sp_name']?></td>
                <td><img width="100px" src="../upload/<?=$item['sp_image']?>" alt=""></td>
                <td><?=number_format($item['sp_price'],0,",",".")?>đ</td>
                <td><?=number_format($item['sp_sale'],0,",",".")?>đ</td>
                <td><?=$item['sp_quantity']?></td>
                <td>
                    <a href="index.php?url=product-cmtt&id=<?=$item['sp_id']?>" class="btn btn-dark"><i
                            class="fa-solid fa-eye"></i></a>
                </td>
                <td>
                    <a href="index.php?url=product-edit&id=<?=$item['sp_id']?>" class="btn btn-warning">Sửa</a>
                </td>
                <td>
                    <a onclick="return confirm('Bạn có muốn xoá danh mục này ?')"
                        href="index.php?url=product-delete&id=<?=$item['sp_id']?>" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php }else{ ?>
    <h3 class="text-center">Không tìm thấy kết quả nào !!!</h3>
    <?php } ?>
</div>