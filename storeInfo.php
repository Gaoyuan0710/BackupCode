<?php

define ("HOST_NAME", "127.0.0.1");
define ("MYSQL_USER", "root");
define ("MYSQL_PASSWD", "eric");
define ("MYSQL_DB", "Yancygao");

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

  mylog("21");
  $weObj = new Wechat($options);

  $access_token = $weObj->checkAuth($options['appid'], $options['appsecret']);

  mylog('access_token' . $access_token);

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

function store_info() {
  $mysqlObj = new mysqli(HOST_NAME, MYSQL_USER, MYSQL_PASSWD, MYSQL_DB);
  $mysqlObj->query("SET NAMES utf8");

  if (mysqli_connect_errno()) {
    mylog("connect error" . mysqli_connect_errno());
    exit();
  }

  $sql = "INSERT INTO `Yancygao`.`FtthExpansion` (`ID`, `District`, `Street`, `Road`, `Neighbourhood`, `Address`, `Installers`, `Describe`, `Flag`, `ReportPerson`, `ReportTime`, `FinishTime`, `Priority`, `AuthorizedPerson`, `Remarks`, `Reserve`) VALUES (NULL, '邹城市', '千泉街道办事处', '西关大街', '西关小学家属院', '1-1-1', '110', '端口满', '未完成', '姐姐', CURRENT_TIMESTAMP, NULL, '0', 'null', 'null', 'null');";
  if ($mysqlObj->query($sql) == TRUE) {
    echo "Successful";
  }
  else{
    echo $sql;
    echo "Error";
  }
  $mysqlObj->close();
}

$code = $_POST['code'];
//$code = "325f3f3c5ba27cdb0e4d7b8ac33763f3";
mylog($code);
//mylog(getUserID($code));
echo getUserID($code);
//store_info(" ");
?>
