<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <a href="/admin">Админпанель</a>
                    <p></p>
                    <a href="/admin/user">Управление Пользователи</a>
                </ol>
            </div>


            <h4>Редактировать Пользователя #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Имя</p>
                        <input type="text" name="userName" placeholder="" value="<?php echo $user['name']; ?>">

                        <p>Страна</p>
                        <input type="text" name="userCountry" placeholder="" value="<?php echo $user['country']; ?>">
                        <p>Email</p>
                        <input type="text" name="userEmail" placeholder="" value="<?php echo $user['email']; ?>">
                        <p>Пароль</p>
                        <input type="text" name="userPassword" placeholder="" value="<?php echo $user['password']; ?>">

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