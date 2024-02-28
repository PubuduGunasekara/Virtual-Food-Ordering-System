<?php
ob_start();
require_once('dailyReportTestDesign.php');
$template = ob_get_clean();
require_once "dompdf/autoload.inc.php";
use Dompdf\Dompdf;
$pdf = new Dompdf();
//$html = file_get_contents('dailyReportTestDesign.php');
$pdf->loadHtml($template);
$pdf->setPaper('A4','landscape');
$pdf->render();
//return $pdf->stream();
//$pdf->stream('svsv');
$pdf->stream('nsbm_food_daily_report'.date('Y-m-d').'.pdf',array("Attachment"=>0));
//$pdf->stream('nsbmFood.pdf',array("Attachment"=>1));
//file_put_contents('nsbm_food_daily_report'.date('Y-m-d').'.pdf',$pdf->output());
?>

