<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminUserController
 *
 * @author igorb
 */
class AdminUserController extends AdminBase{
    //put your code here
    public function actionIndex()
    {
        self::checkAdmin();
        // Получаем список товаров
        $userList = User::getUserLists();
        // Подключаем вид

        require_once(ROOT . '/views/admin_user/index.php');
        return true;
    }
    public function actionUpdate($id)
    {
        self::checkAdmin();
        // Получаем данные о конкретном заказе
        $user = User::getUserById($id);
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена   
            // Получаем данные из формы
            $userName = $_POST['userName'];
            $userCountry = $_POST['userCountry'];
            $userEmail = $_POST['userEmail'];
            $userPassword = $_POST['userPassword'];
            // Сохраняем изменения
            User::edit($id, $userName, $userCountry, $userPassword);
            // Перенаправляем пользователя на страницу управлениями заказами
            header("Location: /admin/user/index");
        }
        // Подключаем вид
        require_once(ROOT . '/views/admin_user/update.php');
        return true;
    }
    public function actionDelete($id)
    {
        
        self::checkAdmin();
        // Обработка формы
        
        User::deleteUserById($id);
            // Перенаправляем пользователя на страницу управлениями товарами
        header("Location: /admin/user/index");

        return true;
    }
}
