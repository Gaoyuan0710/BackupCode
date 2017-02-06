<?php

define('CORPID', 'wx3606daa10a15c29c');
define('CORPSECRET', '1ixQ7O8tovSIJhmHzbLHw7dK0U8zCKCE_HDFsFpIaBKW3xLiQk_JYTGQjXPGGG3v');

$code = $_POST['code'];
$access_token = getAccessToken(CORPID, CORPSECRET);
$userInfo = getUserInfo($access_token, $code);

echo $userInfo;

function getAccessToken($corpId, $corpSecret) {
  $url = "https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid=${corpId}&corpsecret=${corpSecret}";

  $ret = get($url);
  $ret = json_decode($ret);

  if ($ret && $ret->access_token) {
    return $ret->access_token;
  }

  return false;
}

function getUserInfo($access_token, $code) {
  $url = "https://qyapi.weixin.qq.com/cgi-bin/user/getuserinfo?access_token=${access_token}&code=${code}";
  return get($url);
}

function get($url) {
  $opts = array (
    'http' => array (
    'method' => 'GET',
    'header'=> 'Content-type: application/x-www-form-urlencodedrn' . 'rn'
    )
  );

  $context = stream_context_create($opts);
  return file_get_contents($url, false, $context);
}
?>
