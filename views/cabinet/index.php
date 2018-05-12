<?php include ROOT.'/views/layouts/header.php';?>


<section>
    <div class="container">
        <div class="row">
            
            <h1><font color="black">Кабинет пользователя</font></h1>
            
            <h3><font color="black">Привет, <?php echo $user['name'];?>!</font></h3>
            <ul>
                <li><a href ="/cabinet/edit">Редактировать данные</a></li>
                <p></p>
                <li><a href ="/cabinet/history">История покупок</a></li>
                <p></p>
            </ul>
        </div>
    </div>
</section>




















<?php include ROOT.'/views/layouts/footer.php';?>