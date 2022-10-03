<?php
session_start();
ob_start();
include('./../model/connect.php');
include('./../model/category.php');
include('./../model/product.php');
include('./../model/size.php');
include('./../model/order.php');
include('./../model/user.php');
include('./../helper/dd.php');
include('./../helper/baseUrl.php');
include('./../helper/route-menu-admin.php');

// -------------------------------------------
include('./views/layouts/header.php');
// isset : Kiểm tra xem biến đấy có tồn tại ko
// empty : Kiểm tra xem biến có null hoặc trống dữ liệu ''

if(isset($_GET['url'])){
    switch ($_GET['url']) {
         // Trang chính
        case 'trang-chinh':
            $chart = cateChart();
            include('./views/main.php');
            break;
        // Trang danh sách danh mục
        case 'category':
            
            $error= '';
            $cates = getCateAll();
            include('./views/category/index.php');
            break;
         // Thêm danh mục
        case 'category-add':
           $cates = getCateAll();
            if(empty($_POST['dm_name'])){
                $error = 'Error';
            }else{
                insertCate($_POST['dm_name']);
            }

           header("location:".BASE_ADMIN."category");
           break;
          // Xóa danh mục
        case 'category-delete':
            $cates = getCateAll();
            if(isset($_GET['id'])){
              
              deleteCate($_GET['id']);
            }else{
              echo 'Error';
              die;
            }
            header("location:".BASE_ADMIN."category");
            break;
        // Sửa danh mục
        case 'category-edit':
            $cates = getCateAll();
            if($_GET['id']){
               $cate = getFind($_GET['id']);
               header("location:".BASE_ADMIN."category");
            }else{
                echo 'ERROR';
                die;
            }
            break;
        // Trang lưu sửa
        case 'category-edit-save':
            $cates = getCateAll();
    
            if($_POST['cate_name'] && $_POST['id']){
                updateCate($_POST['cate_name'] ,$_POST['id']);
            }else{
                echo 'ERROR';
                die;
            }
            header("location:".BASE_ADMIN."category");
            break;
        // Trang sản phẩm
        case 'product':
            $product = getProductAll();
            include('./views/product/index.php');
        break;
        // Trang thêm sản phẩm
        case 'product-form-add':
            $size = getSizeAll();
            $cate = getCateAll();
            include('./views/product/form.php');
        break;
          // Lưu thêm sản phẩm
        case 'product-form-add-save':
            if(!empty($_POST)){
                if(!empty($_FILES)){
                    $fileName =  $_FILES["sp_image"]["name"];
                    move_uploaded_file( $_FILES["sp_image"]["tmp_name"]  ,'../upload/' .   $fileName );
                }
                $_POST['sp_image'] =$fileName;
                insertProduct($_POST);
            }
          
            header("location:".BASE_ADMIN."product");
        break;
        case 'product-delete':
            if(isset($_GET['id'])){
                deleteProduct($_GET['id']);
              }else{
                echo 'Error';
                die;
              }
              header("location:".BASE_ADMIN."product");
              break;
        break;
        case 'product-edit':
            $size = getSizeAll();
            $cate = getCateAll();
            if(isset($_GET['id'])){
                $product = getProductFind($_GET['id']);
                include('./views/product/edit.php');
              }else{
                echo 'Error';
                die;
              }
              break;
        break;
        case 'product-edit-save':
            if(!empty($_POST)){
                if(!empty($_FILES['sp_image']["name"])){
                    $fileName =  $_FILES["sp_image"]["name"];
                    move_uploaded_file( $_FILES["sp_image"]["tmp_name"]  ,'../upload/' .   $fileName );
                    $_POST['sp_image'] =$fileName;
                }
                $_POST['sp_image'] = $_POST['sp_image'];
                updateProduct($_POST , $_POST['sp_id']);
              }else{
                echo 'Error';
                die;
              }
              header("location:".BASE_ADMIN."product");
              break;
        break;
        // Quản lý thuộc tính
        case 'propertie':
            $size = getSizeAll();
            include('./views/propertie/index.php');
            break;
        // Lưu thuộc tính thuộc tính
        case 'propertie-add-save':
            insertSize($_POST);
            header("location:".BASE_ADMIN."propertie");
            break;
         // Lưu thuộc tính thuộc tính
        case 'propertie-delete':
            if(isset($_GET['id'])){
                deleteSize($_GET['id']);
              }else{
                echo 'Error';
                die;
              }
            header("location:".BASE_ADMIN."propertie");
            break;
           // Trang sửa thuộc tính
        case 'propertie-edit':
            if(isset($_GET['id'])){
                $propertie =  getFindCate($_GET['id']); 
                $size = getSizeAll();              
              }else{
                echo 'Error';
                die;
              }
              include('./views/propertie/index.php');
            break;
        case 'propertie-edit':
            if(isset($_GET['id'])){
                $propertie =  getFindCate($_GET['id']); 
                $size = getSizeAll();              
            }else{
                 echo 'Error';
                die;
        }
            include('./views/propertie/index.php');
            break;
         case 'propertie-edit-save':
            // dd($_POST);
            if(!empty($_POST)){
                updateSize($_POST);       
            }else{
                 echo 'Error';
                die;
            }
            header("location:".BASE_ADMIN."propertie");

            break; 
        case 'trang-chinh':
            include('./views/main.php');
            break;

        case 'account':
            $user = getAllUser();
    
            include('./views/account/index.php');
            break;

        case 'account-edit':
            $user = getUserId((int)$_GET['id']);
    
            include('./views/account/edit.php');
            break;


        case 'account-edit-save':
            updateUser($_POST);
            header("location:".BASE_ADMIN."account");
            break;

        case 'order':
            $order = orderAll();
            include('./views/order/index.php');
            break;

        case 'order-delete-save':
            if(isset($_GET['id'])){
                orderDelete($_GET['id']);
            }
            header("location:".BASE_ADMIN."order");
            break; 

        // Chi tiết hóa đơn
        case 'order-detail':
            if(isset($_GET['id'])){
               $order =  getOrderByID($_GET['id']);
               $orderDetail = getOrderDetailByID($_GET['id']);
               include('./views/order/detail.php');
            }
            break; 
        default:
            # code..
            break;
    }
}

include('./views/layouts/footer.php');

ob_end_flush();