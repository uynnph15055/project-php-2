<?php
session_start();
ob_start();
include('./../model/connect.php');
include('./../model/product.php');
include('./../model/user.php');
include('./../helper/baseUrl.php');
include('./../helper/dd.php');

if(isset($_GET['dang-ky'])){
    include('./views/register.php');
    die;
}else if (isset($_GET['dang-nhap'])){
    include('./views/login.php');
    die;
}else if(isset($_GET['logout'])){
        unset($_SESSION["user"]);
}

if(isset($_SESSION["user"])){
    $user =$_SESSION["user"];
}
include('./views/layouts/header.php');


if(isset($_GET['url'])){
    switch ($_GET['url']) {
        //  Lưu đăng ký
        case 'dang-ky-save':
            if(isset($_POST)){
                if(!empty($_FILES["kh_avatar"])){
                    $fileName =  $_FILES["kh_avatar"]["name"];
                    move_uploaded_file( $_FILES["kh_avatar"]["tmp_name"]  ,'../upload/' .   $fileName );
                }
                $_POST['kh_avatar'] = $fileName;
                $_POST['kh_password'] = password_hash( $_POST['kh_password']  , PASSWORD_DEFAULT);
                register($_POST);
                header("location:".BASE_CLIENT."?dang-nhap");
                die;
            }
            break;
          //  Lưu đăng ký
        case 'dang-nhap-save':
            if(isset($_POST)){
                if($_POST["email"] != '' && $_POST["password"] != ''){
                    for ($i=0; $i < count(getAllUser()); $i++) { 
                        if(trim(getAllUser()[$i]["kh_email"]) == trim($_POST["email"])){
                            if(password_verify($_POST["password"] , getAllUser()[$i]["kh_password"])){
                                $_SESSION["user"] = getAllUser()[$i];
                               if (getAllUser()[$i]["role"] == 1) {
                                header("location:".BASE_CLIENT."");
                               }else{
                                header("location:".BASE_ADMIN."trang-chinh");
                               }
                            }
                        }else{
                            header("location:".BASE_CLIENT."?dang-nhap");
                        }
                    }
                    
                }else{
                    header("location:".BASE_CLIENT."?dang-nhap");
                }
            }
            break;
        // Trang sản phẩm
        case 'san-pham':
            include('./views/product.php');
            break;
        // Trang liên hệ
         case 'lien-he':
            include('./views/contact.php');
            break;
        // Trang chi tiết sản phẩm
         case 'san_pham/chi-tiet':
            include('./views/product-detail.php');
            break;
        default:
            # code...
            break;
    }
}else{
    $products =  getProductAll();
    include('./views/home.php');
}


include('./views/layouts/footer.php');



ob_end_flush();