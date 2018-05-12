
<?php include ROOT.'/views/layouts/header.php';?>

<section
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4 padding-right">
                        
                        <?php if(isset($error)): ?>
                        
                        <p>Неправильно введены символы</p>
                        
                        <?php endif; ?>
                        
                        <?php if(isset($_SESSION['SEARCH'])) :?>
                            <?php $value_text = $_SESSION['SEARCH']; ?>
                        <?php else: ?>
                            <?php $value_text = ""; ?>
                        <?php endif; ?>
                        
                        <div class="signup-form">
                            <h2>Поиск Автомобиля</h2>
                            <form action="#" method="post">
      
                                <input type="text" name="text" placeholder ="Предыддущий: <?php echo $value_text; ?>" required/>
                                <button type="submit" name="enter" class="btn btn-default" >Поиск</button>
                                </br>
                       
                            </form>
                        </div>
       
                          <br/>
                          <br/>
                    </div>
                </div>
            </div>
</section>
<?php include ROOT.'/views/layouts/footer.php';?>