    <?php
    $act="product";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];// thuc don vn

    }
    switch($act) {
        case 'product':
            include_once './View/product.php';
            break;
        case 'shop1':
            include_once './View/product.php';
            break;
        case 'shop2':
            include_once './View/product.php';
            break;
        case 'shop3':
            include_once './View/product.php';
            break;
        case 'shop4':
            include_once './View/product.php';
            break;  
        case 'productinfor':
            include_once './View/productinfor.php';
            break;                 
    }


    ?>