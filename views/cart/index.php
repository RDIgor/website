<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Корзина</h2>
                    
                    <?php if ($productsInCart): ?>
                        <p>Товары в корзине:</p>
                        <table class="table-bordered table-striped table">
                            <tr>
                                <th>Код товара</th>
                                <th>Название</th>
                                <?php if ($_SESSION['coin']): ?>
                                <th>Стоимость,BYN</th>
                                <?php else:?>
                                   <th>Стоимость,$</th>
                                <?php endif;?>
      
                                
                                <th>Количество</th>
                                <th>Доступно</th>
                                <th>Удалить</th>
                            </tr>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?php echo $product['code'];?></td>
                                    <td>
                                        <a href="/product/<?php echo $product['id'];?>">
                                            <?php echo $product['name'];?>
                                        </a>
                                    </td>
                                    <?php if ($_SESSION['coin']): ?>
                                    <td><?php echo (doubleval($product['price'])*my_value)?></td>
                                    <?php else:?>
                                    <td><?php echo $product['price']; ?></td>
                                    <?php endif; ?>
                                    <td><?php echo $productsInCart[$product['id']];?></td>  
                                    <td><?php echo $product['avlaibility'];?></td>
                                    <td>
                                        <a class="btn btn-default checkout" href="/cart/delete/<?php echo $product['id'];?>">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td> 
                                    
                                </tr>
                            <?php endforeach; ?>
                                <tr>
                                    <td colspan="3">Общая стоимость:</td>
                                    <td></td>
                                    <td></td>
                                    <?php if ($_SESSION['coin']): ?>
                                    <td><?php echo (doubleval($totalPrice)*my_value);?> BYN</td>
                                    <?php else:?>
                                    <td><?php echo $totalPrice;?>$</td>
                                    <?php endif; ?>
                                    
                                    
                                </tr>
                            
                        </table>
                        <?php if (!$error): ?>
                        <a class="btn btn-default checkout" href="/cart/checkout"><i class="fa fa-shopping-cart"></i> Оформить заказ</a>
                        
                       <?php else: ?>
                        <p><font size='5px' color='red'>Выбранное количество товаров превышает общее количество товаров</font></p>
                       <?php endif; ?>
                        
                        
                    <?php else: ?>
                        <p>Корзина пуста</p>
                        
                        <a class="btn btn-default checkout" href="/"><i class="fa fa-shopping-cart"></i> Вернуться к покупкам</a>
                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>