<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <a href="/admin">Админпанель</a>
                    <p></p>
                    <a href="/admin/model">Управление Модели</a>
                </ol>
            </div>


            <h4>Редактировать Модель #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">
                        <p>Название модели клиента</p>
                        <input type="text" name="model_name" placeholder="" value="<?php echo $model['model_name']; ?>">
                        <br>
                        <br>
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>