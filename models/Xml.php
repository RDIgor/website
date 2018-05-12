<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Xml
 *
 * @author igorb
 */
class Xml {
    
    public static function writeXmlCars()
    {
        $xml = xmlwriter_open_memory();
        xmlwriter_set_indent($xml,1);
        $res = xmlwriter_set_indent_string($xml,' ');
        
        xmlwriter_start_document($xml,'1.0','UTF-8');
        
        xmlwriter_start_element($xml,'Cars');
        $products = Products::getProductsList();
        foreach ($products as $product)
        {
            xmlwriter_start_element($xml,'Car');
            xmlwriter_start_element($xml,'id');
            xmlwriter_text($xml,$product['id']);
            xmlwriter_end_element($xml);
            xmlwriter_start_element($xml,'name');
            xmlwriter_text($xml,$product['name']);
            xmlwriter_end_element($xml);
           xmlwriter_start_element($xml,'code');
            xmlwriter_text($xml,$product['code']);
            xmlwriter_end_element($xml);
            
            xmlwriter_start_element($xml,'price');
            xmlwriter_text($xml,$product['price']);
            xmlwriter_end_element($xml);
            
            xmlwriter_end_element($xml);
        }
       xmlwriter_end_element($xml);
       
       xmlwriter_end_document($xml);
       
             $file  =  xmlwriter_output_memory($xml);
       
     
       $dom_xml = new DOMDocument();
       $dom_xml->loadXML($file);
       
       $path = "C:/wamp64/www/xml/Cars.xml";
       
       $dom_xml->save($path);
    }
    public static function writeXmlModels()
    {
        $xml = xmlwriter_open_memory();
        xmlwriter_set_indent($xml,1);
        $res = xmlwriter_set_indent_string($xml,' ');
        
        xmlwriter_start_document($xml,'1.0','UTF-8');
        
 
       $models = Products::getModelsList();
       xmlwriter_start_element($xml,'Models');
       
       foreach ($models as $model)
       {
           xmlwriter_start_element($xml,'Model');
           
            xmlwriter_start_element($xml,'id');
            xmlwriter_text($xml,$model['id']);
            xmlwriter_end_element($xml);
            
            xmlwriter_start_element($xml,'model_name');
            xmlwriter_text($xml,$model['model_name']);
            xmlwriter_end_element($xml);
            
            xmlwriter_end_element($xml);
       }
       
       xmlwriter_end_element($xml);
       xmlwriter_end_document($xml);
       
       
       $file  =  xmlwriter_output_memory($xml);
       
      
       $dom_xml = new DOMDocument();
       $dom_xml->loadXML($file);
       
       $path = "C:/wamp64/www/xml/models.xml";
       
     
    }
     public static function writeXmlCarcase()
    {
        $xml = xmlwriter_open_memory();
        xmlwriter_set_indent($xml,1);
        $res = xmlwriter_set_indent_string($xml,' ');
        
        xmlwriter_start_document($xml,'1.0','UTF-8');
        
 
       $categories= Category::getCategoriesList();
       xmlwriter_start_element($xml,'Categories');
       
       foreach ($categories as $category)
       {
           xmlwriter_start_element($xml,'Category');
           
            xmlwriter_start_element($xml,'id');
            xmlwriter_text($xml,$category['id']);
            xmlwriter_end_element($xml);
            
            xmlwriter_start_element($xml,'name');
            xmlwriter_text($xml,$category['name']);
            xmlwriter_end_element($xml);
            
            xmlwriter_start_element($xml,'sort_order');
            xmlwriter_text($xml,$category['sort_order']);
            xmlwriter_end_element($xml);
            
            xmlwriter_start_element($xml,'status');
            xmlwriter_text($xml,$category['status']);
            xmlwriter_end_element($xml);
            
            xmlwriter_end_element($xml);
       }
       
       xmlwriter_end_element($xml);
       xmlwriter_end_document($xml);
       
       
       $file  =  xmlwriter_output_memory($xml);
       
      
       $dom_xml = new DOMDocument();
       $dom_xml->loadXML($file);
       
       $path = "C:/wamp64/www/xml/carcase.xml";
       
     
    }
    
    public static function writeXmlOrders()
    {
        $xml = xmlwriter_open_memory();
        xmlwriter_set_indent($xml,1);
        $res = xmlwriter_set_indent_string($xml,' ');
        
        xmlwriter_start_document($xml,'1.0','UTF-8');
        
 
       $orders = Order::getOrdersList();
       xmlwriter_start_element($xml,'Orders');
       
       foreach ($orders as $order)
       {
           xmlwriter_start_element($xml,'Order');
           
            xmlwriter_start_element($xml,'id');
            xmlwriter_text($xml,$order['id']);
            xmlwriter_end_element($xml);
            
            xmlwriter_start_element($xml,'user_name');
            xmlwriter_text($xml,$order['user_name']);
            xmlwriter_end_element($xml);
            
            xmlwriter_start_element($xml,'user_phone');
            xmlwriter_text($xml,$order['user_phone']);
            xmlwriter_end_element($xml);
            
            xmlwriter_start_element($xml,'user_country');
            xmlwriter_text($xml,$order['user_country']);
            xmlwriter_end_element($xml);
            
            xmlwriter_start_element($xml,'date');
            xmlwriter_text($xml,$order['date']);
            xmlwriter_end_element($xml);
            
            xmlwriter_start_element($xml,'status');
            xmlwriter_text($xml,$order['status']);
            xmlwriter_end_element($xml);
            
            xmlwriter_end_element($xml);
       }
       
       xmlwriter_end_element($xml);
       xmlwriter_end_document($xml);
       
       
       $file  =  xmlwriter_output_memory($xml);
       
      
       $dom_xml = new DOMDocument();
       $dom_xml->loadXML($file);
       
       $path = "C:/wamp64/www/xml/orders.xml";
       
  
    }
    
        public static function writeXmlUsers()
    {
        $xml = xmlwriter_open_memory();
        xmlwriter_set_indent($xml,1);
        $res = xmlwriter_set_indent_string($xml,' ');
        
        xmlwriter_start_document($xml,'1.0','UTF-8');
        
 
       $users = User::getUserLists();
       xmlwriter_start_element($xml,'Users');
       
       foreach ($users as $user)
       {
           xmlwriter_start_element($xml,'Order');
           
            xmlwriter_start_element($xml,'id');
            xmlwriter_text($xml,$user['id']);
            xmlwriter_end_element($xml);
            
            xmlwriter_start_element($xml,'name');
            xmlwriter_text($xml,$user['name']);
            xmlwriter_end_element($xml);
            
            xmlwriter_start_element($xml,'country');
            xmlwriter_text($xml,$user['country']);
            xmlwriter_end_element($xml);
            
            xmlwriter_start_element($xml,'email');
            xmlwriter_text($xml,$user['email']);
            xmlwriter_end_element($xml);
            
            
            xmlwriter_start_element($xml,'password');
            xmlwriter_text($xml,$user['password']);
            xmlwriter_end_element($xml);
            
                        xmlwriter_start_element($xml,'role');
            xmlwriter_text($xml,$user['role']);
            xmlwriter_end_element($xml);
            
            xmlwriter_end_element($xml);
       }
       
       xmlwriter_end_element($xml);
       xmlwriter_end_document($xml);
       
       
       $file  =  xmlwriter_output_memory($xml);
       
      
       $dom_xml = new DOMDocument();
       $dom_xml->loadXML($file);
       
       $path = "C:/wamp64/www/xml/users.xml";
       
       
    }
}
