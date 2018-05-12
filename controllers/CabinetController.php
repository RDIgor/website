<?php


class CabinetController {
    
    public function actionIndex()
    {
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();
        
        //echo $userId;
        
        // Получаем информацию о пользователе из БД
       $user = User::getUserById($userId);
                
       require_once(ROOT . '/views/cabinet/index.php');

        return true;
    }  
    public function actionHistory()
    {
        $userId = User::checkLogged();
        
        $historyList = Order::getHistoryById($userId);
        
        
        require_once (ROOT.'/views/cabinet/history.php');
        return true;
    }
    public function actionEdit()
    {
        $userId = User::checkLogged();
        
        $user = User::getUserById($userId);
        
        $name = $user['name'];
        $password = $user['password'];
        $country = $user['country'];
        
        $result = false;
        
        if (isset($_POST['submit'])) {
            
             $name = $_POST['name'];
            $password = $_POST['password'];
            $country = $_POST['country'];
        
                
                $errors = false;
            if (!User::checkName($name)) {
                $errors[] = 'Неправильный имя';
            }
            if(!User::checkName($country))
            {
                $errors[] = 'Неправильная страна';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            
            
            if ($errors == false) {
                $result = User::edit($userId, $name,$country, $password);
            }
            
        }
        
        require_once (ROOT.'/views/cabinet/edit.php');
        
        return true;
            
            
    }
}
