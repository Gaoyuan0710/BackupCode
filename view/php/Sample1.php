<?php

include_once "WXBizMsgCrypt.php";

// 假设企业号在公众平台上设置的参数如下
$encodingAesKey = "uVMQacQcM8w5RyWsOZhmSHHHPQLxsNeKQCuXBMOpjpR";
$token = "MOfjMSe2KsS0W";
$corpId = "wx3606daa10a15c29c";

$sVerifyMsgSig =$_GET["msg_signature"]; 
$sVerifyTimeStamp =$_GET["timestamp"]; 
$sVerifyNonce = $_GET["nonce"];
$sVerifyEchoStr = $_GET["echostr"];
   
// 需要返回的明文
$sEchoStr = "";

$wxcpt = new WXBizMsgCrypt($token, $encodingAesKey, $corpId);
$errCode = $wxcpt->VerifyURL($sVerifyMsgSig, $sVerifyTimeStamp, $sVerifyNonce, $sVerifyEchoStr, $sEchoStr);
if ($errCode == 0) {
    echo $sEchoStr;
	//echo 'sssss';
	// 验证URL成功，将sEchoStr返回
    HttpUtils.SetResponce($sEchoStr);
} else {
    echo 'ssasas';
	print("ERR: " . $errCode . "\n\n");
}

