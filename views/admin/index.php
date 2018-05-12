<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            
            <br/>
            
            <h4>Hello, администратор!</h4>
            
            <br/>
            
            <p>Список возможностей:</p>
            
            <br/>
            
            <ul >
                <li><a href="/admin/model">Управление Модели</a></li>
                <p></p>
                <li><a href="/admin/product">Управление Автомобили</a></li>
                <p></p>
                <li><a href="/admin/category">Управление Типы кузова</a></li>
                  <p></p>
                <li><a href="/admin/order">Управление Заказы</a></li>
                  <p></p>
                <li><a href="/admin/xml">Экспорт в ХML</a></li>
                  <p></p>
            </ul>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>
