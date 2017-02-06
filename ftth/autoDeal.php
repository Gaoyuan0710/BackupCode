<?php

define ("HOST_NAME", "");
define ("MYSQL_USER", "");
define ("MYSQL_PASSWD", "");
define ("MYSQL_DB", "");


require 'lib/PHPMailer/PHPMailerAutoload.php';
include 'lib/PHPExecl/PHPExcel.php';
include 'lib/PHPExecl/PHPExcel/Writer/Excel2007.php';

function sendMail() {
	$mail = new PHPMailer;
	$mail->SMTPDebug = 3;                               // Enable verbose debug output
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.exmail.qq.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'gaoyuan@xiyoulinux.org';                 // SMTP username
	$mail->Password = 'Yancygao0710';                           // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                    // TCP port to connect to

    $mail->CharSet = "utf-8";
	$mail->setFrom('gaoyuan@xiyoulinux.org', 'Mailer');
	$mail->addAddress('18853712978@139.com', 'Yancygao');     // Add a recipient
	$mail->addAddress('13963724999@139.com', '13963724999');     // Add a recipient

	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->AddAttachment('./file/2015030423.xls', "邹城移动FTTH扩容上报表附件.xls");
	$mail->Subject = '邹城移动FTTH扩容上报表';
	$mail->Body    = '请您查收';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
    	echo 'Message could not be sent.';
    	echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
    	echo 'Message has been sent';
	}
}

function getData() {
    $mysqliObj = new mysqli(HOST_NAME, MYSQL_USER, MYSQL_PASSWD, MYSQL_DB);
    $mysqliObj->query("SET NAMES utf8");

    if (mysqli_connect_errno()) {
        mylog("connect error" . mysqli_connect_error());
        exit();
    }

    $sql = "select * from `FtthExpansion`";

    $result_array = array();
    $result_data = array();
    if ($result = $mysqliObj->query($sql)) {
        while ($row = $result->fetch_object()) {
            $result_array['ID'] = $row->ID;
            $result_array['District'] = $row->District;
            $result_array['Street'] = $row->Street;
            $result_array['Road'] = $row->Road;
            $result_array['Neighbourhood'] = $row->Neighbourhood;
            $result_array['Address'] = $row->Address;
            $result_array['Installers'] = $row->Installers;
            $result_array['Describe'] = $row->Describe;
            $result_array['Flag'] = $row->Flag;
            $result_array['ReportPerson'] = $row->ReportPerson;
            $result_array['ReportTime'] = $row->ReportTime;
            $result_array['FinishTime'] = $row->FinishTime;
            $result_array['Priority'] = $row->Priority;
            $result_array['AuthorizedPersion'] = $row->AuthorizedPersion;
            $result_array['Remarks'] = $row->Remarks;
            $result_array['Reserve'] = $row->Reserve;
            array_push($result_data, $result_array);
        }
    }
    //var_dump($result_data);
    return ($result_data);
}

function makeExecl($datas) {
	date_default_timezone_set('PRC');
	//或者include 'PHPExcel/Writer/Excel5.php'; 用于输出.xls的
	// 创建一个excel
	$objPHPExcel = new PHPExcel();
	// Set document properties
	$objPHPExcel->getProperties()->setCreator("Phpmarker")->setLastModifiedBy("Phpmarker")->setTitle("Phpmarker")->setSubject("Phpmarker")->setDescription("Phpmarker")->setKeywords("Phpmarker")->setCategory("Phpmarker");
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', 'ID')->setCellValue('B1', '区县')->setCellValue('C1', '街道/乡镇')->setCellValue('D1', '路/村')->setCellValue('E1', '小区/村庄')->setCellValue('F1', '装机地址')->setCellValue('G1', '装机人员联系方式')->setCellValue('H1', '上报人员')->setCellValue('I1', '上报时间')->setCellValue('J1', '问题描述')->setCellValue('K1', '其它');
  
	// Rename worksheet
	$objPHPExcel->getActiveSheet()->setTitle('Simple');
  
	// Set active sheet index to the first sheet, so Excel opens this as the first sheet
	$objPHPExcel->setActiveSheetIndex(0);
	$objPHPExcel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(15);
	$objPHPExcel->getActiveSheet()->freezePane('A2');
	$i = 2;
	foreach($datas as $data){
    //	$objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $data[0])->getStyle('A'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $data['ID']);
    	$objPHPExcel->getActiveSheet()->setCellValue('B' . $i, $data['District']);
    	$objPHPExcel->getActiveSheet()->setCellValue('C' . $i, $data['Street']);
    	$objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $data['Road']);
    	$objPHPExcel->getActiveSheet()->setCellValue('E' . $i, $data['Neighbourhood']);
    	$objPHPExcel->getActiveSheet()->setCellValue('F' . $i, $data['Address']);
    	$objPHPExcel->getActiveSheet()->setCellValue('G' . $i, $data['Installers']);
    	$objPHPExcel->getActiveSheet()->setCellValue('H' . $i, $data['ReportPerson']);
    	$objPHPExcel->getActiveSheet()->setCellValue('I' . $i, $data['ReportTime']);
    	$objPHPExcel->getActiveSheet()->setCellValue('J' . $i, $data['Describe']);
    	$objPHPExcel->getActiveSheet()->setCellValue('K' . $i, $data['Reserve']);
    //	$objPHPExcel->getActiveSheet()->setCellValue('C' . $i, $data[2]);
    //	$objPHPExcel->getActiveSheet()->setCellValueExplicit('D'. $i, $data[3],PHPExcel_Cell_DataType::TYPE_STRING);
    //	$objPHPExcel->getActiveSheet()->getStyle('D' . $i)->getNumberFormat()->setFormatCode("@");
 
 	// 设置文本格式
    //	$objPHPExcel->getActiveSheet()->setCellValueExplicit('E'. $i, $data[4],PHPExcel_Cell_DataType::TYPE_STRING);
     //	$objPHPExcel->getActiveSheet()->getStyle('E' . $i)->getAlignment()->setWrapText(true);
     	$i++ ;
	}
	$objActSheet = $objPHPExcel->getActiveSheet();
    
	// 设置CELL填充颜色
	$cell_fill = array(
  	'A1',
  	'B1',
 	'C1',
 	'D1',
  	'E1',
  	'F1',
  	'G1',
  	'H1',
    'I1',
    'J1',
    'K1',
	);
	foreach($cell_fill as $cell_fill_val){
 		$cellstyle = $objActSheet->getStyle($cell_fill_val);
 		// background
 		// $cellstyle->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('fafa00');
 		// set align
 		$cellstyle->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT)->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
 		// font
 		$cellstyle->getFont()->setSize(12)->setBold(true);
 		// border
 		$cellstyle->getBorders()->getTop()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN)->getColor()->setARGB('FFFF0000');
 		$cellstyle->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN)->getColor()->setARGB('FFFF0000');
 		$cellstyle->getBorders()->getLeft()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN)->getColor()->setARGB('FFFF0000');
 		$cellstyle->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN)->getColor()->setARGB('FFFF0000');
	}
 
	$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(30);
 
	$objActSheet->getColumnDimension('A')->setWidth(18.5);
	$objActSheet->getColumnDimension('B')->setWidth(23.5);
	$objActSheet->getColumnDimension('C')->setWidth(12);
	$objActSheet->getColumnDimension('D')->setWidth(12);
	$objActSheet->getColumnDimension('E')->setWidth(12);

	$filename = '2015030423';
	ob_end_clean();//清除缓冲区,避免乱码 
	//header('Content-Type: application/vnd.ms-excel');
	//header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
	//header('Cache-Control: max-age=0');
	//// If you're serving to IE 9, then the following may be needed
	//header('Cache-Control: max-age=1');
	//// If you're serving to IE over SSL, then the following may be needed
	//header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	//header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
	//header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
	//header('Pragma: public'); // HTTP/1.0
	$objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
	//$objWriter->save('php://output');
	//chmod('./file/', 0777);
	$objWriter->save('./file/'. $filename . '.xls');
}
    #$data = getData();
    #makeExecl($data);
    #sendMail();
	//getData();
?>
