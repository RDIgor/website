<?php include ROOT.'/views/layouts/header.php';?>

<style>
    .col-sm-4{
        width:33.33333333333333%;
        margin-left: 0;
    }
    .productinfo img{
        max-width: 255px;
        max-height: 170px;
    }
</style>


        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Тип кузова</h2>
                            <div class="panel-group category-products">
                                <?php foreach ($categories as $categoryItem):?>
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/category/<?php echo $categoryItem['id'];?>">
                                            <?php echo $categoryItem['name'];?>
                                            </a></h4>
                                    </div>
                                </div>
                                <?php   endforeach; ?>
                             
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Последние автомобили</h2>
                            
                            <?php foreach ($latestProducts as $product): ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?php echo Products::getImage($product['id']); ?>" alt="" />
                                           <?php if($_SESSION['coin']): ?>
                                                 <h2><font color="red">BYN <?php echo (doubleval($product['price'])*my_value); ?></font></h2>
                                                <?php else: ?>
                                                 <h2><font color="red">US <?php echo $product['price']; ?></font></h2>
                                                <?php endif; ?>
                                            <p>
                                                <a href="/product/<?php echo $product['id'];?>" >
                                                    <?php echo $product['name']; ?>
                                                </a>
                                            </p>
                                            
                                            <a href="cart/add/<?php echo $product['id']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                        
                                        <?php if ($product['is_new']): ?>
                                            <img src="../../template/images/home/new.png" class="new" alt=""/>
                                        <?php endif;?>

                                    </div>
                                </div>
                            </div>    
                            <?php endforeach; ?>
                            
                    </div><!--features_items-->

                    <div class="recommended_items"><!--recommended_items-->
                        <h2 class="title text-center">Рекомендуемые автомобили</h2>
                    
                        <div class="cycle-slideshow" 
                            data-cycle-fx=carousel
                            data-cycle-timeout=5000
                            data-cycle-carousel-visible=3
                            data-cycle-carousel-fluid=true
                            data-cycle-slides="div.item"
                            data-cycle-prev="#prev"
                            data-cycle-next="#next"
                            >                        
                                <?php foreach ($sliderProducts as $sliderItem): ?>
                                <div class="item">
                                    <div class="product-image-wrapper">
                                         <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="<?php echo Products::getImage($sliderItem['id']); ?>" alt="" />
                                                <?php if($_SESSION['coin']): ?>
                                                <h2><font color="red">BYN <?php echo (doubleval($sliderItem['price'])*my_value) ?></font></h2>
                                                <?php else: ?>
                                                <h2><font color="red">US <?php echo $sliderItem['price'] ?></font> </h2>
                                                <?php endif; ?>
                                                <a href="/product/<?php echo $sliderItem['id']; ?>">
                                                    <?php echo $sliderItem['name']; ?>
                                                </a>
                                                <br/><br/>
                                                <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $sliderItem['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                            </div>
                                            <?php if ($sliderItem['is_new']): ?>
                                                <img src="../../template/images/home/new.png" class="new" alt="" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                        </div>

                    <a class="left recommended-item-control" id="prev" href="#recommended-item-carousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                        
                    <a class="right recommended-item-control" id="next"  href="#recommended-item-carousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>      
            </div><!--/recommended_items-->

        </div>
    </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>