<?php

class ProductController {
    //put your code here
    public function actionView($id)
    {
        $categories = array();
        $categories = Category::getCategoriesList(); 
        
        $product = Products::getProductById($id);
        
        $model = Products::getModelsListById($product['model_id']);
        $productCategory = Category::getCategoryById($product['category_id']);
        
        if (isset($_POST['submit'])) {
            
            $value_count = $_POST['value_count'];
            $id = intval($id);
            
            if ($value_count > $product['avlaibility'])
            {
                require_once (ROOT.'/views/product/error.php');
                return true;
            }
            Cart::addProduct($id, $value_count);
            


        }
        require_once (ROOT.'/views/product/view.php');
        
        return true; 
    }
}
