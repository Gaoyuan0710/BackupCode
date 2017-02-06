<?php
include_once "WXBizMsgCrypt.php";
$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.urldecode($_SERVER['QUERY_STRING']);
$Url_data=Url_Get($url);



//file_put_contents('./logwechat.txt',"1". "sss" . "sss");

$corpId = "wx3606daa10a15c29c";
$token = "XGLTVW4owEN7PlUSVsF";
$encodingAesKey = "P6kGkWLLvvit6q9mwp0vHsG8ebsLCXR4KWxGIUeGhpb";
$sVerifyMsgSig = $_GET["msg_signature"];
$sVerifyTimeStamp = $_GET["timestamp"];
$sVerifyNonce = $_GET["nonce"];
$sVerifyEchoStr = $Url_data["echostr"];


$wxcpt = new WXBizMsgCrypt($token, $encodingAesKey, $corpId);

$errCode = $wxcpt->VerifyURL($sVerifyMsgSig, $sVerifyTimeStamp, $sVerifyNonce, $sVerifyEchoStr, $sEchoStr);


if ($errCode == 0) {
	print($sEchoStr);
} else {
	print($errCode);
}



function Url_Get($str){
    $data = array();
	$cs_str=explode('?',$str);
    $parameter = explode('&',end($cs_str));
    foreach($parameter as $val){
		if(count(explode("msg_signature",$val))>1){
			$data["msg_signature"] = str_replace("msg_signature=","",$val);
		}
		if(count(explode("timestamp",$val))>1){
			$data["timestamp"] = str_replace("timestamp=","",$val);
		}
		if(count(explode("nonce",$val))>1){
			$data["nonce"] = str_replace("nonce=","",$val);
		}
		if(count(explode("echostr",$val))>1){
			$data["echostr"] = str_replace("echostr=","",$val);
		}      
    }
    return $data;
}
?>
