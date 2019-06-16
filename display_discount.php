<?php
// lấy dữ liệu từ form
$product_description = $_POST['product_description'];
$list_price = $_POST['list_price'];
$discount_percent = $_POST['discount_percent'];

//tính toán mức chiết khấu và giá sau chiết khấu
$discount = $list_price * $discount_percent * 0.01;
$discount_price = $list_price - $discount;

//áp dụng định dạng cho giá bán và tỉ lệ chiết khấu
$list_price_formatted = "$".number_format($list_price, 2);
$discount_percent_formatted = $discount_percent."%";
$discount_formatted = "$".number_format($discount, 2);
$discount_price_formatted = "$".number_format($discount_price, 2);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <style>
        #content{
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }

        h1{
            color: navy;
        }

        label{
            width: 10em;
            padding-right: 1em;
            float: left;
        }

        br{
            clear: left;
        }
    </style>
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <label>Product Description: </label>
    <span><?php echo $product_description; ?></span><br/>
    <label>Price: </label>
    <span><?php echo $list_price_formatted; ?></span><br/>
    <label>Standard Discount:</label>
    <span><?php echo $discount_percent_formatted; ?></span><br/>
    <label>Discount Amount: </label>
    <span><?php echo $discount_formatted?></span><br/>
    <label>Discount Price: </label>
    <span><?php echo $discount_price_formatted?></span><br/>
</div>
</body>
</html>