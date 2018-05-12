<?php include ROOT.'/views/layouts/header.php';?>
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
                            <h2 class="title text-center">Поиск автомобилей <font size="6px" color="red"><?php echo $_SESSION['SEARCH']; ?></font></h2>
                            
                            
                            <?php foreach ($productsSearch as $element): ?>
                            <?php $product = Products::getProductById($element['id']); ?>
                            
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
                                                    <font size="3px"><?php echo $product['name']; ?></font>
                                                </a>
                                            </p>
                                            
                                            <a href="/cart/add/<?php echo $product['id']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                        
                                        <?php if ($product['is_new']): ?>
                                            <img src="/../../template/images/home/new.png" class="new" alt=""/>
                                        <?php endif;?>
                                                                              
                                        
                                    </div>
                                </div>
                            </div>    
                            
                            <?php endforeach; ?>
                      
                        </div><!--features_items-->  
                
                    </div>
                </div>
            </div>
        </section>








<?php include ROOT.'/views/layouts/footer.php';?>