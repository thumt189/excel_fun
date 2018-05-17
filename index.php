<?php

require './lib/PHPExcel/PHPExcel.php';

$file = "D:\kpi.xlsx";
$objReader = PHPExcel_IOFactory::createReaderForFile($file);
$objReader->setLoadSheetsOnly('Sheet1');
$listWorksheets = $objReader->listWorkSheetNames($file);
$objExcel = $objReader->load($file);
$sheetData = $objExcel->getActiveSheet()->toArray('null', true, true, true);
print_r($sheetData);
?>