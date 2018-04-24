<?php


$array = array(
    'Autodevice' => array(//1
        'Vello' => array(//2
          'Velobike' => array(
            '(Tovar) Extreme' => 10,
            '(Tovar) Author' =>4,
        ),
        'Samokat' => 12,
    ),
    'Auto' => array(//1
        'Opel' => array(//2
            '(Tovar) Vivaro' => 5,
        ),
        '(Tovar) Honda' => 10,
        '(Tovar) Audi' => 11,   
    ),
    '(Tovar) Accessuary' => 7,
    ),
    'Photo' => array(
        '(Tovar) Camera' => 6,
        '(Tovar) VideoCamera' =>3,
    ),
    '(Tovar) Other' => 3, //1
);

$s = 0;
function sum($array, $level = 0)
{
    static $count;
    static $items;
    if (is_array($array))
    {
        $level++;
        foreach($array as $element)
        {
            sum($element,$level);
        }
    }
    else{
        $count++;
        $items+=$array;
    }
    
    return array('count' => $count, 'items' => $items);
}

$result = sum($array);

echo '<pre>';
print_r($result);
echo '</pre>';