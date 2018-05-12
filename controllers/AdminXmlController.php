<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminXmlController
 *
 * @author igorb
 */
class AdminXmlController extends AdminBase{
    //put your code here
    
    public function actionIndex()
    {
   
       Xml::writeXmlCars();
       Xml::writeXmlModels();
       Xml::writeXmlCarcase();
       Xml::writeXmlOrders();
       Xml::writeXmlUsers();
       
 
       require_once(ROOT . '/views/admin_xml/index.php');
       return true;
    }
}
