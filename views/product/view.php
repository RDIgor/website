<?php include ROOT.'/views/layouts/header.php';?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <div class="left-sidebar">
                            <h2>Каталог</h2>
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
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="product-details"><!--product-details-->
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="view-product">
                                        <img src="<?php echo Products::getImage($product['id']); ?>" alt="" />
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="product-information"><!--/product-information-->
                                        <img src="../../template/images/product-details/Q5.jpg" class="newarrival" alt="" />
                                        <h2><?php echo $product['name'] ?></h2>
                                        <p>Код товара: <?php echo $product['code'] ?></p>
                                        <span>
                                            <form action="#" method="post">
                                                 <?php if($_SESSION['coin']): ?>
                                                <h2><font color="red">BYN <?php echo (doubleval($product['price'])*my_value) ?></font></h2>
                                                <?php else: ?>
                                                 <h2><font color="red">US <?php echo $product['price'] ?></font></h2>
                                                <?php endif; ?>
                                            <label>Количество:</label>
                                            <input type="text" value="1" name="value_count"/>
                                            <button type="submit" name="submit" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                В корзину
                                            </button>
                                            </form>
                                        </span>
                                        <p><b><font size="4px" color="red">Наличие:</b> <?php echo $product['avlaibility'] ?></font></p>
                                        <?php if ($product['is_new']): ?>
                                        <p><b>Состояние:</b> Новое</p>
                                        <?php else: ?>
                                        <p><b>Состояние:</b> Не новое</p>
                                        <?php endif; ?>
                                        <p><b>Производитель: </b> <?php echo $product['brand']; ?></p>
                                       
                                        <p><b>Модель: </b> <?php echo $model[0]['model_name']; ?></p>
                                         <p><b>Тип Кузова: </b> <?php echo $productCategory['name']; ?></p>
                                        
                                    </div><!--/product-information-->
                                </div>
                            </div>
                            <div class="row">                                
                                <div class="col-sm-12">
                                    <h5>Описание товара</h5>
                                    <?php echo $product['description'] ?>
                                </div>
                            </div>
                        </div><!--/product-details-->

                    </div>
                </div>
            </div>
        </section>

<?php include ROOT.'/views/layouts/footer.php';?>
