<?php

define ("HOST_NAME", "192.168.0.2");
define ("MYSQL_USER", "root");
define ("MYSQL_PASSWD", "eric");
define ("MYSQL_DB", "Yancygao");

function mylog($text) {
    file_put_contents("./log/log.txt", $text . "\r\n\r\n", FILE_APPEND);
}

function getData() {
    $mysqliObj = new mysqli(HOST_NAME, MYSQL_USER, MYSQL_PASSWD, MYSQL_DB);
    $mysqliObj->query("SET NAMES utf8");

    if (mysqli_connect_errno()) {
        mylog("connect error" . mysqli_connect_error());
        exit();
    }

    $sql = "select * from `FtthExpansion` limit 0,1";

    $result_array = array();
    if ($result = $mysqliObj->query($sql)) {
        while ($row = $result->fetch_object()) {
            $result_array['ID'] = $row->ID;
            $result_array['District'] = $row->Distric;
            $result_array['Street'] = $row->Street;
            $result_array['Road'] = $row->Road;
            $result_array['Neighbourhood'] = $row->Neighbourhood;
            $result_array['Address'] = $row->Address;
            $result_array['Installers'] = $row->Installers;
            $result_array['Describe'] = $row->Describe;
            $result_array['Flag'] = $row->Flag;
            $result_array['ReportPersion'] = $row->ReportPersion;
            $result_array['ReportTime'] = $row->ReportTime;
            $result_array['FinishTime'] = $row->FinishTime;
            $result_array['Priority'] = $row->Priority;
            $result_array['AuthorizedPersion'] = $row->AuthorizedPersion;
            $result_array['Remarks'] = $row->Remarks;
            $result_array['Reserve'] = $row->Reserve;
        }
    }
    var_dump($result_array);
}

function makeExecl($data) {
    $execlObj = new PHPExcel();

}
    getData();
?>
