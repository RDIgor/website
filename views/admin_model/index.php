<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li class="active">Управление Модели</li>
                </ol>
            </div>

            <a href="/admin/model/create" class="btn btn-default back"><i class="fa fa-plus"></i> Добавить Модель</a>
            
            <h4>Список Моделей</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID Модели</th>
                    <th>Название Модели</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($modelList as $model): ?>
                    <tr>
                        <td><?php echo $model['id']; ?></td>
                        <td><?php echo $model['model_name']; ?></td>
                        <td><a href="/admin/model/update/<?php echo $model['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/model/delete/<?php echo $model['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>