<?php


define ("HOST_NAME", "192.168.0.5");
define ("MYSQL_USER", "root");
define ("MYSQL_PASSWD", "eric");
define ("MYSQL_DB", "Yancygao");

function mylog($text) {
    file_put_contents("./log/log.txt", $text."\r\n\r\n", FILE_APPEND);
}
function getInfo() {
    $mysqliObj = new mysqli(HOST_NAME, MYSQL_USER, MYSQL_PASSWD, MYSQL_DB);

    if (mysqli_connect_errno()) {
        mylog("connect error" . mysqli_connect_error());
        exit();
    }
    $sql = "SELECT * FROM `BroadbandCoveragePolygon`";
    //$sql = "SELECT * FROM `BroadbandCoverage` WHERE `CountyName` LIKE '邹城市' AND `AreaName` LIKE '岗山街道办事处' AND `StreetName` LIKE '太平东路'";
    //
    $range_data = array();
    
    $mysqliObj->query("SET NAME utf8");
//    $range_data_array = array();
//    $range_fttb_array = array();
//    $range_ftth_array = array();
//    $range_uncovered_array = array();

    $range_data_str = "[";
    $range_fttb_str = "[";
    $range_ftth_str = "[";
    $range_uncovered_str = "[";
    
    if ($result = $mysqliObj->query($sql)) {
        while ($row = $result->fetch_object()) {
          //        if ($row->RangeArea) {
          //        array_push($range_data_array, $row->RangeArea);
          //        //$range_data_str .= $row->RangeArea;
          //        //$range_data_str .= ",";
          //  }

      //      if ($row->FTTB) {
      //          $range_fttb_str .= $row->FTTB;
      //          $range_fttb_str .= ",";
      //      }
      //      
      //      if ($row->FTTH) {
      //          $range_ftth_str .= $row->FTTH;
      //          $range_ftth_str .= ",";
      //      }

      //      if ($row->Uncovered) {
      //          $range_uncovered_str .= $row->Uncovered;
      //          $range_uncovered_str .= ",";
      //      }

    ////        array_push($range_data, $row->RangeArea);
      // 
            //mylog($row->RangeArea);
            //echo $row->RangeArea;
           if ($row->RangeArea) {
               $range_data_str .= $row->RangeArea;
               $range_data_str .= ",";
           }

           if ($row->FTTB) {
               $range_fttb_str .= $row->FTTB;
               $range_fttb_str .= ",";
           }
           
           if ($row->FTTH) {
               $range_ftth_str .= $row->FTTH;
               $range_ftth_str .= ",";
           }

           if ($row->Uncovered) {
               $range_uncovered_str .= $row->Uncovered;
               $range_uncovered_str .= ",";
           }

    ////        array_push($range_data, $row->RangeArea);
      //     // $street_name .= $row->DistrictName;
        }
       if (strlen($range_data_str) != 1 && substr($range_data_str, -1, 1) != "[") {
           $range_data_str = substr($range_data_str, 0, -1);
       }
       $range_data_str .= "]";  
     
       if (strlen($range_fttb_str) != 1 && substr($range_fttb_str, -1, 1) != "[") {
           $range_fttb_str = substr($range_fttb_str, 0, -1);
       }
       $range_fttb_str .= "]";

       if (strlen($range_ftth_str) != 1 && substr($range_ftth_str, -1, 1) != "[") {
           $range_ftth_str = substr($range_ftth_str, 0, -1);
       }
       $range_ftth_str .= "]";

       
       if (substr($range_uncovered_str, -1, 1) == "," && substr($range_uncovered_str, -1, 1) != "[") {
           $range_uncovered_str = substr($range_uncovered_str, 0, -1);
       }
       $range_uncovered_str .= "]";

    }
    $range_data['RangeArea'] = $range_data_str;
    $range_data['FTTB'] = $range_fttb_str;
    $range_data['FTTH'] = $range_ftth_str;
    $range_data['Uncovered'] = $range_uncovered_str;

    return json_encode($range_data, JSON_UNESCAPED_UNICODE);
}

//$name = $_POST['address'];
    echo getInfo();
    //echo getInfo();
?>
