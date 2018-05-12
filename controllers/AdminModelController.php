<?php

class AdminModelController extends AdminBase{
    //put your code here
    
    public function actionIndex()
    {
        self::checkAdmin();
        
        $modelList = Products::getModelsList();
        
        
        require_once(ROOT . '/views/admin_model/index.php');
        return true;
    }
    
    public function actionCreate()
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список категорий для выпадающего списка

        $modelsList = Products::getModelsList();
        
        
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['model_name'] = $_POST['model_name'];
            
            // Флаг ошибок в форме
            $errors = false;
            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['model_name']) || empty($options['model_name'])) {
                $errors[] = 'Заполните поля';
            }
            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = Products::createModel($options);
                echo 'Method Create';
                // Если запись добавлена
                if ($id) {
                    echo 'Add tovar';
                    // Проверим, загружалось ли через форму изображение
                        
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                    }
                };
                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /admin/model");
            }
        }
        // Подключаем вид
        require_once(ROOT . '/views/admin_model/create.php');
        return true;
    }
    
    
     public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем товар
            Products::deleteModelById($id);
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/model");
        }
        // Подключаем вид
        require_once(ROOT . '/views/admin_model/delete.php');
        return true;
    }
    
        public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем данные о конкретном заказе
        $model = Products::getModelById($id);
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $options['model_name'] = $_POST['model_name'];
            

            // Сохраняем изменения
            if (Products::updateModelById($id, $options)) {
                // Если запись сохранена
                // Проверим, загружалось ли через форму изображение
            }
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/model");
        }
        // Подключаем вид
        require_once(ROOT . '/views/admin_model/update.php');
        return true;
    }
}
