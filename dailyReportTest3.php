<?php
ob_start();
require_once('dailyReportTestDesign.php');
$template = ob_get_clean();
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$pdf = new Dompdf();



$pdf -> loadHtml($template);
$pdf -> setPaper('A4','landscape');
$pdf -> render();
$pdf -> stream('rgsrh',array('Attachment'=>0));


?>