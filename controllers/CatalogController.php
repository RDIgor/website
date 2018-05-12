<?php



class CatalogController
{

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList(); 
        
        $latestProducts = array();
        $latestProducts = Products::getLatestProducts(9);
        
        require_once(ROOT . '/views/catalog/index.php');

        return true;
    }
    public function actionSearch()
    {
        $categories = Category::getCategoriesList();
        
        $productsSearch = Products::getProductsBySearch($_SESSION['SEARCH']);
        
        

        require_once(ROOT . '/views/catalog/search.php');
        
        return true;
    }
    public function actionCategory($categoryId,$page = 1)
    {
       
        
        $categories = array();
        $categories = Category::getCategoriesList();
        
        
        $latestProducts = array();
        $latestProducts = Products::getProductsListByCategory($categoryId,$page);
        
        
        $total = Products::getTotalProductsInCategory($categoryId);
        $pagination = new Pagination($total,$page, Products::SHOW_BY_DEFAULT,'page-');
        
        
        require_once (ROOT.'/views/catalog/category.php');
        
        return true;
    }
}
