<?php
    array = array(
            'a'=>array('a1','a2','a3','a4'),
            'b'=>array('b1','b2','b3','b4'),
        );
    $name=$_GET['name'];

    $str='<select name="server" >';
    foreach($array[$name] as $key=>$value)
    {
        $str.='<option value="'.$key.'">'.$value.'</option>';
    }
    $str.='</select>';
        echo $str; 
?>

