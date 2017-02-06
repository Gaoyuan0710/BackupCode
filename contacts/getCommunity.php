<?php


define ("HOST_NAME", "121.42.144.117");
define ("MYSQL_USER", "root");
define ("MYSQL_PASSWD", "jk213");
define ("MYSQL_DB", "Yancygao");

function mylog($text) {
    file_put_contents("./log/log.txt", $text."\r\n\r\n", FILE_APPEND);
}
function getInfo($address) {
    $address_array = explode(" ", $address);
    $mysqliObj = new mysqli(HOST_NAME, MYSQL_USER, MYSQL_PASSWD, MYSQL_DB);
    
    if (mysqli_connect_errno()) {
        mtlog("connect error" . mysqli_connect_error());
        exit();
    }
    $sql = "SELECT * FROM `BroadbandCoverage` WHERE `CountyName` LIKE '" . $address_array[0] . "' AND `AreaName` LIKE '" . $address_array[1] . "' AND `StreetName` LIKE '" . $address_array[2] ."'";
    //$sql = "SELECT * FROM `BroadbandCoverage` WHERE `CountyName` LIKE '邹城市' AND `AreaName` LIKE '岗山街道办事处' AND `StreetName` LIKE '太平东路'";
    //
    $street_name = array();
    if ($result = $mysqliObj->query($sql)) {
        while ($row = $result->fetch_object()) {
            mylog($row->DistrictName);
            array_push($street_name, $row->DistrictName);
           // $street_name .= $row->DistrictName;
        }
    }
    if (count($street_name) == 0) {
        array_push($street_name, "无");
        return json_encode($street_name, JSON_UNESCAPED_UNICODE);
    }
    return json_encode($street_name, JSON_UNESCAPED_UNICODE);
}

    $name = $_POST['address'];
    echo getInfo($name);
?>
