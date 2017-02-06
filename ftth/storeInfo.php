<?php

define ("HOST_NAME", "");
define ("MYSQL_USER", "");
define ("MYSQL_PASSWD", "");
define ("MYSQL_DB", "");

include "./qywechat/qywechat.class.php";

function getUserID($code) {
  $options = array(
    'token'=>'LVMc9rI3tJ98zVQT',//填写应用接口的Token
    'encodingaeskey'=>'iRfVXxMlVu8BEzOn94pYHE2KK28hfUtqSoqmwglKOHF',//填写加密用的EncodingAESKey
    'appid'=>'wx3606daa10a15c29c',//填写高级调用功能的appid
    'appsecret' => '1ixQ7O8tovSIJhmHzbLHw7dK0U8zCKCE_HDFsFpIaBKW3xLiQk_JYTGQjXPGGG3v',
    'debug'=>true,
    'logcallback'=>'log',
      //'agentid' => '7'
  );

  $weObj = new Wechat($options);

  $access_token = $weObj->checkAuth($options['appid'], $options['appsecret']);

  //return $access_token;
  $json_str = $weObj->getUserId($code);
//  var_dump($json_str);
  if (!$json_str) {
    file_put_contents('./log/log.txt', $ret);
    exit;
  }
//
    $userId = $json_str['UserId'];
//
//  return $json_str;
    return $userId;
}

function mylog($text) {
  file_put_contents("./log/log.txt", $text . "\r\n\r\n", FILE_APPEND);
}

function store_info($find_address, $address, $room_address, $operator_number, $extend_type, $userId, $extra_data) {
  $mysqlObj = new mysqli(HOST_NAME, MYSQL_USER, MYSQL_PASSWD, MYSQL_DB);
  $mysqlObj->query("SET NAMES utf8");

  if (mysqli_connect_errno()) {
    mylog("connect error" . mysqli_connect_errno());
    exit();
  }

  $address_array = explode(" ", $find_address);

  //$sql = "INSERT INTO `Yancygao`.`FtthExpansion` (`ID`, `District`, `Street`, `Road`, `Neighbourhood`, `Address`, `Installers`, `Describe`, `Flag`, `ReportPerson`, `ReportTime`, `FinishTime`, `Priority`, `AuthorizedPerson`, `Remarks`, `Reserve`) VALUES (NULL, '邹城市', '千泉街道办事处', '西关大街', '西关小学家属院', '1-1-1', '110', '端口满', '未完成', '姐姐', CURRENT_TIMESTAMP, NULL, '0', 'null', 'null', 'null');";
  $sql = "INSERT INTO `Yancygao`.`FtthExpansion` (`ID`, `District`, `Street`, `Road`, `Neighbourhood`, `Address`, `Installers`, `Describe`, `Flag`, `ReportPerson`, `ReportTime`, `FinishTime`, `Priority`, `AuthorizedPerson`, `Remarks`, `Reserve`) VALUES (NULL, '" . $address_array[0] . "','" . $address_array[1] . "','" . $address_array[2] . "','" .  $address. "','" .  $room_address . "','" . $operator_number . "','".  $extend_type . "'," . "'未完成'" . ",'".  $userId . "', CURRENT_TIMESTAMP, NULL, '0', 'null', 'null', '" . $extra_data . "');";
  if ($mysqlObj->query($sql) == TRUE) {
      echo $sql;
    echo "Successful";
  }
  else{
    echo $sql;
    echo "Error";
  }
  $mysqlObj->close();
}

$find_address = $_POST['find_address'];
$address = $_POST['address'];
$room_address = $_POST['room_address'];
$operator = $_POST['operator'];
$extend_type = $_POST['extend_type'];
$code = $_POST['code'];
$state = $_POST['state'];
$extra_data = $_POST['extra_data'];
//$code = "325f3f3c5ba27cdb0e4d7b8ac33763f3";
mylog($code);
//mylog(getUserID($code));
//$userId = getUserID($code);
//$code = "325f3f3c5ba27cdb0e4d7b8ac33763f3";

$userId = getUserID($code);
store_info($find_address, $address, $room_address, $operator, $extend_type, $userId, $extra_data);
?>
