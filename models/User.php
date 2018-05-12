<?php

class User
{

    /**
     * Регистрация пользователя 
     * @param type $name
     * @param type $email
     * @param type $password
     * @return type
     */   
    public static function checkPhone($phone)
    {
        if (preg_match("/^[0-9]{10,20}$/",$phone)) {
            return true;
        }
        return false;
    }
    
    public static function register($name, $email,$country,$password)
    {

        $db = Db::getConnection();

        $sql = 'INSERT INTO user_purchaser (name, email,country, password) '
                . 'VALUES (:name, :email,:country, :password)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':country', $country, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();
    }

    /**
     * Редактирование данных пользователя
     * @param string $name
     * @param string $password
     */
    public static function edit($id, $name,$country, $password)
    {
        $db = Db::getConnection();
        
        $sql = "UPDATE user_purchaser 
            SET name = :name, password = :password, country=:country
            WHERE id = :id";
        
        $result = $db->prepare($sql);                                  
        $result->bindParam(':id', $id, PDO::PARAM_INT);       
        $result->bindParam(':name', $name, PDO::PARAM_STR);    
        $result->bindParam(':password', $password, PDO::PARAM_STR); 
        $result->bindParam(':country', $country, PDO::PARAM_STR); 
        
        return $result->execute();
    }

    /**
     * Проверяем существует ли пользователь с заданными $email и $password
     * @param string $email
     * @param string $password
     * @return mixed : ingeger user id or false
     */
    public static function checkUserData($email, $password)
    {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM user_purchaser WHERE email = :email AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();

        $user = $result->fetch();
        if ($user) {
            return $user['id'];
        }

        return false;
    }

    /**
     * Запоминаем пользователя
     * @param string $email
     * @param string $password
     */
    public static function auth($userId)
    {
        
        $_SESSION['user'] = $userId;

    }

    public static function checkLogged()
    {
        
        // Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /user/login");
    }

    public static function isGuest()
    {
        
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

    /**
     * Проверяет имя: не меньше, чем 2 символа
     */
    public static function checkName($name)
    {
        if (preg_match("/^[a-zA-Zа-яА-ЯёЁ]{2,20}/u",$name)) {
            return true;
        }
        
        return false;
    }
    public static function checkSearch($name)
    {
        if (preg_match("/^[a-zA-Zа-яА-ЯёЁ0-9]{1,20}$/u",$name)){
            return true;
        }
        return false;
    }

    /**
     * Проверяет имя: не меньше, чем 6 символов
     */
    public static function checkPassword($password)
    {
        if (preg_match("/^[a-zA-Zа-яА-ЯёЁ0-9]{6,20}$/u",$password)) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет email
     */
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public static function checkEmailExists($email)
    {

        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM user_purchaser WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;
    }

    /**
     * Returns user by id
     * @param integer $id
     */
    public static function getUserById($id)
    {
        if ($id) {
            $db = Db::getConnection();
            $sql = 'SELECT * FROM user_purchaser WHERE id = :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);

            // Указываем, что хотим получить данные в виде массива
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();


            return $result->fetch();
        }
    }
    
    public static function getUserLists()
    {
       {
            $db = Db::getConnection();
            $sql = 'SELECT * FROM user_purchaser';

            $result = $db->query($sql);
         
            $userList = array();
            $i = 0;
            while ($row = $result->fetch()) {
              $userList[$i]['id'] = $row['id'];
              $userList[$i]['name'] = $row['name'];
              $userList[$i]['country'] = $row['country'];
             $userList[$i]['email'] = $row['email'];
             $userList[$i]['password'] = $row['password'];
             $userList[$i]['role'] = $row['role'];
             $i++;
         }
            return $userList;

        }
    }

}
