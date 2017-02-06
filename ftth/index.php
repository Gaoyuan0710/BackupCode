<?php
include "./qywechat/qywechat.class.php";
include "./autoDeal.php";

$options = array(
        'token'=>'LVMc9rI3tJ98zVQT',	//填写应用接口的Token
        'encodingaeskey'=>'iRfVXxMlVu8BEzOn94pYHE2KK28hfUtqSoqmwglKOHF',//填写加密用的EncodingAESKey
        'appid'=>'wx3606daa10a15c29c',	//填写高级调用功能的appid
        'appsecret' => '1ixQ7O8tovSIJhmHzbLHw7dK0U8zCKCE_HDFsFpIaBKW3xLiQk_JYTGQjXPGGG3v',
        'debug'=>true,
        'logcallback'=>'log'

);

$weObj = new Wechat($options);
$access_token = $weObj->checkAuth($options['appid'], $options['appsecret']);
echo $access_token;
$ret=$weObj->valid();
echo $ret;
if (!$access_token) {
    //mylog('index.php' . $access_token);
    file_put_contents('./log/log.txt', $access_token, FILE_APPEND);
}
if (!$ret) {
    //file_put_contents('./log/log.txt', $ret);
	exit;
}
$actionType = $weObj->getRev()->getRevType();

if ($actionType == 'event'){
    if ($weObj->getRevEvent()['key'] == 'unfinished_work') {

        $weObj->text($weObj->getRevEvent()['key'])->reply();//$weObj->text($access_token)->reply();
        //$weObj->text($access_token)->reply();
    }
    else if ($weObj->getRevEvent()['key'] == 'finished_work') {
        $weObj->text($weObj->getRevEvent()['key'])->reply();
    }
    else if ($weObj->getRevEvent()['key'] == 'all_work_queue') {
        if ($weObj->getRevFrom() == 'Yancygao' || $weObj->getRevFrom() == '13963724999') {
            $data = getData();
            makeExecl($data);
            sendMail();
            $weObj->text('您好' . $weObj->getRevFrom() . '邮件发给您了')->reply();
        }
        $weObj->text($weObj->getRevEvent()['key'])->reply();
    }
    else {
        $weObj->text('不支持的操作类型')->reply();
    }
    //$weObj->text(getRevEvent()['key'])->reply();
}
?>
