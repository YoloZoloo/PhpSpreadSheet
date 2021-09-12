<?php
namespace PhpOffice;
include "autoload.php";
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;

if(!empty($_POST)){
    //header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    //Setting name
    $today = date("Ymd");
    $CntDisposition = "Content-Disposition: attachment;filename=\"";
    $CntDisposition = $CntDisposition . $today . "\"_chumonshosai.xlsx";
    header($CntDisposition);
    header('Cache-Control: max-age=0');


    $R1C1 = $_POST["R1C1"];
    $R1C2 = $_POST["R1C2"];
    $R1C3 = $_POST["R1C3"];
    $R2C1 = $_POST["R2C1"];
    $R2C2 = $_POST["R2C2"];
    $R2C3 = $_POST["R2C3"];
    $R3C1 = $_POST["R3C1"];
    $R3C2 = $_POST["R3C2"];
    $R3C3 = $_POST["R3C3"];
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    
    $sheet->setCellValue('A1', '');
    $sheet->setCellValue('A2', '');
    $sheet->setCellValue('A3', '');
    $sheet->setCellValue('B2', $R1C1);
    $sheet->setCellValue('B3', $R2C1);
    $sheet->setCellValue('B4', $R3C1);
    //$sheet->setCellValue('C2', $R1C2);
    $sheet->setCellValue('C3', $R2C2);
    $sheet->setCellValue('C4', $R2C2);
    $sheet->setCellValue('D2', $R1C3);
    $sheet->setCellValue('D3', $R2C3);
    $sheet->setCellValue('D4', $R3C3);


    $spreadsheet->getActiveSheet()->mergeCells("B2:C2");
    $spreadsheet
    ->getActiveSheet()
    ->getStyle("B2:C2")
    ->getBorders()
    ->getOutline()
    ->setBorderStyle(Border::BORDER_THIN)
    ->setColor(new Color('00000000'));

    //Saving 
    $writer = new Xlsx($spreadsheet);
    #$writer->save('hello world.xlsx');
    $writer->save('php://output');
}
else{
    echo "no data posted";
}

?>
