<?php
$menu=[
    "trang chủ","sản phẩm","về chúng tôi","liên hệ"
];
$img1=[
    "img"=>"imghome/image 1.png",
    "banner"=>"imghome/1528 1.png"
];
$products=[
    $products1=[
        "img"=>"ass/imghome/image 1 (1).png",
        "product"=>"Product 1",
        "des"=>"description 1",
        "price"=>"$100"
    ],
$products2=[
        "img"=>"ass/imghome/image 1 (1).png",
        "product"=>"Product 1",
        "des"=>"description 1",
        "price"=>"$100"
],
$products3=[
        "img"=>"ass/imghome/image 1 (1).png",
        "product"=>"Product 1",
        "des"=>"description 1",
        "price"=>"$100"
],
$products4=[
        "img"=>"ass/imghome/image 1 (1).png",
        "product"=>"Product 1",
        "des"=>"description 1",
        "price"=>"$100"
],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul{
            display: flex;
        }
        li{
            list-style: none;
            padding: 5px 10px;
        }   
        .boxgrid1{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }
        .login{
            text-align: left;
    line-height: 64px;
        }
        .dn,.dk{
            border:1px solid  #0066B2;
            background:white;
            color: #0066B2;
        }
        .p1{
            text-align: center;
            font-family: 'Inter';
font-style: normal;
font-weight: 700;
font-size: 36px;
        }
    </style>
</head>
<body>
    <div class="boxgrid1">
    <div class="logo"><img src="<?php echo $img1["img"]?>" alt=""></div>
    
    <div class="menu"><ul>
        <?php
        foreach ($menu as $mn):?>
        <li><a><?php echo $mn?></a></li> 
        <?php endforeach
        ?>
    </ul>
    </div>
    <div class="login">
        <button class="dn">dang nhap</button>
        <button class="dk">dang ky</button>
    </div>
    </div>
    <div class="banner"><img style="width:1255px;" src="<?php echo $img1["banner"]?>" alt=""></div>
    <p class="p1">Our Products</p>
    <div class="boxgrid2">
        <?php foreach ($products as $p):?>
            <div class="boxcon">
                <img src="<?php echo $p[$products1["img"]]?>" alt="">
            </div>
            <div class="boxcon">
                <img src="<?php echo $p[$products2["img"]]?>" alt="">
            </div>
            <div class="boxcon">
                <img src="<?php echo $p[$products3["img"]]?>" alt="">
            </div>
            <div class="boxcon">
                <img src="<?php echo $p[$products4["img"]]?>" alt="">
            </div>
        <?php endforeach ?>
    </div>
</body>
</html>