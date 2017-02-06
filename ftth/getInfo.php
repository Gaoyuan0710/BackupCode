<?php

define ("HOST_NAME", "");
define ("MYSQL_USER", "");
define ("MYSQL_PASSWD", "");
define ("MYSQL_DB", "");

function mylog($text) {
    file_put_contents("./log/log.txt", $text . "\r\n\r\n", FILE_APPEND);
}
function getSystemInfo($address, $neighbourhood) {
    $address_array = explode(" ", $address);
    $mysqliObj = new mysqli(HOST_NAME, MYSQL_USER, MYSQL_PASSWD, MYSQL_DB);
    $mysqliObj->query("SET NAMES utf8");

    if (mysqli_connect_errno()) {
        mylog("connect error" . mysqli_connect_error());
        exit();
    }
    
    //$sql = "SELECT * FROM `FtthPos` LIMIT 0, 1 ";
    $sql = "SELECT * FROM `FtthPos` WHERE `District` LIKE '%" . $address_array[0] . "%' AND `Street` LIKE '%" . $address_array[1] . "%' AND `Road` LIKE '%". $address_array[2]."%' AND `Neighbourhood` LIKE '%" . $neighbourhood . "%' LIMIT 0, 30 ";
    $system_info = array();
    if ($result = $mysqliObj->query($sql)) {
        while($row = $result->fetch_object()) {
            $system_info['PosNumber'] = $row->PosNumber;
            $system_info['UserNumber'] = $row->UserNumber;
            $system_info['PosPortNumber'] = $row->PosPortNumber;
            $system_info['RoomNumber'] = $row->RoomNumber;
            $system_info['ZeroNumber'] = $row->ZeroNumber;
            $system_info['HighData'] = $row->HighData;
        }
    }
    if (count($system_info) == 0) {
        array_push($system_info, "无");
        return json_encode($system_info, JSON_UNESCAPED_UNICODE);
    }
    return json_encode($system_info, JSON_UNESCAPED_UNICODE);

   
}
function getNeighbourhoodInfo($address) {
    $address_array = explode(" ", $address);
    $mysqliObj = new mysqli(HOST_NAME, MYSQL_USER, MYSQL_PASSWD, MYSQL_DB);
    $mysqliObj->query("SET NAMES utf8");

    if (mysqli_connect_errno()) {
        mylog("connect error" . mysqli_connect_error());
        exit();
    }
    
    //$sql = "SELECT * FROM `FtthPos` LIMIT 0, 3 ";
    $sql = "SELECT * FROM `FtthPos` WHERE `District` LIKE '%" . $address_array[0] . "%' AND `Street` LIKE '%" . $address_array[1] . "%' AND `Road` LIKE '%". $address_array[2] . "%' LIMIT 0, 30 ";
    //$sql = "SELECT * FROM `FtthPos` WHERE `City` LIKE '%济宁%' AND `District` LIKE '%邹城%' AND `Street` LIKE '%唐村镇%' AND `Road` LIKE '%秦官村%' LIMIT 0, 30 ";
    $neighbourhoodName = array();

    //echo $sql;
    if ($result = $mysqliObj->query($sql)) {
        while($row = $result->fetch_object()) {
            mylog($row->Neighbourhood);

      //      echo $row->Neighbourhood;
            array_push($neighbourhoodName, $row->Neighbourhood);
        }
    }
    if (count($neighbourhoodName) == 0) {
        array_push($neighbourhoodName, "无");
        return json_encode($neighbourhoodName, JSON_UNESCAPED_UNICODE);
    }
    return json_encode($neighbourhoodName, JSON_UNESCAPED_UNICODE);

}

    $address = '';
    $operator_type = $_POST['type'];

   if ($operator_type == "getNeighbourhood") {
       $address = $_POST['address'];
       echo getNeighbourhoodInfo($address);
   }
   else if ($operator_type == "getSystemInfo") {
       $address = $_POST['address'];
       $neighbourhood = $_POST['neighbourhood'];
     echo getSystemInfo($address, $neighbourhood);
   }
?>
