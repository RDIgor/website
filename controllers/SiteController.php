<?php


class SiteController
{

    public function actionIndex()
    {
        $valuta = array('1' => 'US', '0' => 'BYN');
        $default_valuta = 'BYN';
        $default_index = 0;
        if(!isset($_SESSION['coin']))
        {
            $_SESSION['coin'] = $default_index;
        }
        
        $categories = array();
        $categories = Category::getCategoriesList(); 
        
        $latestProducts = array();
        $latestProducts = Products::getLatestProducts(6);
        
        $sliderProducts = array();
        $sliderProducts = Products::getRecommendedProducts();
        
        
        if(isset($_POST['submit']))
        {
            $id = $_POST['coin'];
            
            $default_valuta = $valuta[$id];
            $_SESSION['coin'] = $id;
            $default_index = $id;
      
        }
        
        require_once(ROOT . '/views/site/index.php');

        return true;
    }
    public function actionSearch()
    {
        if(isset($_POST['enter']))
        {
            if(User::checkSearch($_POST['text']))
            {
            $_SESSION['SEARCH'] = $_POST['text'];    
             header("Location: /catalog/search");
            }
            else{
               $error = true;
            }
        }
        require_once (ROOT.'/views/site/search.php');
        return true;
    }
    public function actionContact() {
                
        $userEmail = '';
        $userText = '';
        $result = false;
        
        if (isset($_POST['submit'])) {
            
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];
    
            $errors = false;
                        
            // Валидация полей
            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }
            
            if ($errors == false) {
                $adminEmail = 'igor.zavistovich.98@mail.ru';
                $message = "Текст: {$userText}. От {$userEmail}";
                $subject = 'Тема письма';    
                //$result = mail($adminEmail, $subject, $message);
                $result = true;
            }

        }
        
        require_once(ROOT . '/views/site/contacts.php');
        
        return true;
    }
         

}
