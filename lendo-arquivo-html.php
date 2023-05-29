<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

// Load HTML content
// $dompdf->loadHtml('<h1>Welcome to niceshipest.com</h1>');

// Load html file
$html = file_get_contents("html/index_pdf.html");
$dompdf->loadHtml($html);
$dompdf->add_info('Title', 'Your meta title');
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
// título aqui: niceshipest
$dompdf->stream("niceshipest", array("Attachment" => 0));
