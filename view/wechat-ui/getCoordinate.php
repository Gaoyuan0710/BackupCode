<?php


define ("HOST_NAME", "192.168.0.5");
define ("MYSQL_USER", "root");
define ("MYSQL_PASSWD", "eric");
define ("MYSQL_DB", "Yancygao");

function mylog($text) {
    file_put_contents("./log/log.txt", $text."\r\n\r\n", FILE_APPEND);
}
function getInfo($address, $street_name) {
    $address_array = explode(" ", $address);
    $mysqliObj = new mysqli(HOST_NAME, MYSQL_USER, MYSQL_PASSWD, MYSQL_DB);
    $mysqliObj->query("SET NAMES utf8");

    if (mysqli_connect_errno()) {
        mylog("connect error" . mysqli_connect_error());
        exit();
    }
    $sql = "SELECT * FROM `BroadbandCoverage` WHERE `CountyName` LIKE '" . $address_array[0] . "' AND `AreaName` LIKE '" . $address_array[1] . "' AND `StreetName` LIKE '" . $address_array[2] . "' AND `DistrictName` LIKE '" . $street_name . "'";
    //$sql = "SELECT * FROM `BroadbandCoverage` WHERE `CountyName` LIKE '邹城市' AND `AreaName` LIKE '岗山街道办事处' AND `StreetName` LIKE '太平东路'";
    //
    //echo $sql;
    $coordinate_data = array();
    if ($result = $mysqliObj->query($sql)) {
        while ($row = $result->fetch_object()) {
            mylog($row->DistrictName);
            $coordinate_data["Longitude"] = $row->Longitude;
            $coordinate_data["Latitude"] = $row->Latitude;

            //array_push($coordinate_data, $row->Longitude);
            //array_push($coordinate_data, $row->Latitude);
           // $street_name .= $row->DistrictName;
        }
    }
    if (count($street_name) == 0) {
        array_push($street_name, "无");
        return json_encode($coordinate_data, JSON_UNESCAPED_UNICODE);
    }
    return json_encode($coordinate_data, JSON_UNESCAPED_UNICODE);
}

    //$name = "邹城市 千泉街道办事处 东门里大街";
    //$street_name = "东门里大街沿街商铺";
    $name = $_POST['address'];
    $street_name = $_POST['street'];
    //mylog($name);
    //mylog($street_name);
    echo getInfo($name, $street_name);
?>
