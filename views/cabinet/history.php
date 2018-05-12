<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Список покупок</h2>
                    
                 
                        <p></p>
                        <table class="table-bordered table-striped table">
                            <tr>
                                <th>Дата</th>
                                <th>Товары</th>
                                <th>Количество</th>
                            </tr>
                            
                                <?php foreach ($historyList as $single):?>
                            
                                <?php $productsQuantity = json_decode($single['products'], true); ?>
        
                                <?php $productsIds = array_keys($productsQuantity); ?>
                                
                                <?php $products = Products::getProdustsByIds($productsIds); ?>
                            
                                <tr>
                                    <td><?php echo $single['date'];?></td>
                                    
                                     
                                   
                                    <td>
                                       <?php foreach ($products as $product): ?>
                                        <?php echo $product['name'];?> ;
                                        <?php endforeach; ?>
                                        
                                    </td>
                                 
                                    <td>
                                         <?php foreach ($products as $product): ?>
                                                                              
                                        <?php echo $productsQuantity[$product['id']]; ?>;
                                        <?php endforeach; ?>
                                    </td>
                                        
                                  
                                </tr>
                                <?php endforeach; ?>
                        </table>
                        
                        
                        <a href='/cabinet/'>Назад</a>

                </div>

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>