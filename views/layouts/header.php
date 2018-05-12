<!DOCTYPE html>

<style>
    .my_class{
    background: #FFFFFF;
    color: #696763;
    font-family: 'Roboto', sans-serif;
    padding: 0;
    padding-right: 0;
    margin-top: 10px;
    }   
    .my_select{
       width: 60px;
       height: 35px;
       background-color: white;
    }
</style>
<?PHP const my_value = 2.04; ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Audi-Shop</title>
        <link href="../../template/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../../template/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../../template/css/prettyPhoto.css" rel="stylesheet" type="text/css">
        <link href="../../template/css/price-range.css" rel="stylesheet" type="text/css">
        <link href="../../template/css/animate.css" rel="stylesheet" type="text/css">
        <link href="../../template/css/main.css" rel="stylesheet" type="text/css">
        <link href="../../template/css/responsive.css" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="template/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../template/images/ico/apple-touch-icon-144-precomposed.png" >
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../template/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../template/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../../template/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->


    <body>
            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="/  "><img src="../../template/images/home/audi-logopng.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">                                    
                                    <li><a href="/cart">
                                            <i class="fa fa-shopping-cart"></i> Корзина
                                            <span id="cart-count">(<?php echo Cart::countItems();?>)</span>
                                        </a>
                                    </li>
                                    <?php if(User::isGuest()): ?>
                                     <li><a href="/user/login/"><i class="fa fa-lock"></i> Вход</a></li>
                                    
                                     <?php else: ?>
                                    <li><a href="/cabinet/"><i class="fa fa-user"></i> Аккаунт</a></li>
                                    <li><a href="/user/logout/"><i class="fa fa-unlock"></i> Выход</a></li> 
                                    
                                    <?php endif; ?>
                                    <li>
                                        <form action="/" method="post">
                                            <select name="coin" class = "my_select">
                                            <option disabled>Валюта</option>
                                            <?php if($_SESSION['coin']): ?>
                                                
                                            <option value="0">
                                                <p>US</p>
                                            </option>
                                            <option value="1" selected>
                                                <p>BYN</p>
                                            </option>
                                            <?php else: ?>
                                          
                                            <option value="0" selected>
                                                <p>US</p>
                                            </option>
                                            <option value="1">
                                                <p>BYN</p>
                                            </option>
                                            
                                            <?php endif; ?>
                                            </select>
                                            <input type="submit" name="submit" class="btn btn-default" value="Обновить"></p>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="/">Главная</a></li>
                                    <li class="dropdown"><a href="#">Автосалон<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="/catalog/">Каталог автомобилей</a></li>
                                            <li><a href="/cart/">Корзина</a></li> 
                                        </ul>
                                    </li> 
 
                                    <li><a href="/contacts/">Контакты</a></li>
                                    <li><a href="/search/">Поиск</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
            
        </header><!--/header-->
