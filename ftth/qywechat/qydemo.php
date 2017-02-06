<?php
include "./qywechat.class.php";

$options = array(
        'token'=>'LVMc9rI3tJ98zVQT',	//填写应用接口的Token
        'encodingaeskey'=>'iRfVXxMlVu8BEzOn94pYHE2KK28hfUtqSoqmwglKOHF',//填写加密用的EncodingAESKey
        'appid'=>'wx3606daa10a15c29c',	//填写高级调用功能的appid
        'appsecret' => '1ixQ7O8tovSIJhmHzbLHw7dK0U8zCKCE_HDFsFpIaBKW3xLiQk_JYTGQjXPGGG3v',
        'debug'=>true,
        'logcallback'=>'log'

);

$weObj = new Wechat($options);
$access_token = $weObj->checkAuth($option['appid'],$option['appsecret'], $option['token']);
$ret=$weObj->valid();

if (!$ret) {
	var_dump($ret);
	exit;
}
$f = $weObj->getRev()->getRevFrom();
$t = $weObj->getRevType();
$d = $weObj->getRevData();
$weObj->text("你好！来自星星的：".$f."\n你发送的".$t."类型信息：\n原始信息如下：\n".var_export($d,true))->reply();
logg("-----------------------------------------");
?>
