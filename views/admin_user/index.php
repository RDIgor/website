<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li class="active">Управление Пользователи</li>
                </ol>
            </div>
 
            <h4>Список Пользователей</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID</th>
                    <th>Имя пльзователя</th>
                    <th>Страна</th>
                    <th>email</th>
                    <th>пароль</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($userList as $user): ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['country']; ?></td>
                        <td><?php echo $user['email']; ?></td>  
                         <td><?php echo $user['password']; ?></td>  
                        <td><a href="/admin/user/update/<?php echo $user['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/user/delete/<?php echo $user['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>