<?php
$html = "<table border='1' width='100%' style='border-collapse: collapse;'>
        <tr>
            <th>Username</th><th>Email</th>
        </tr>
        <tr>
            <td>yssyogesh</td>
            <td>yogesh@makitweb.com</td>
        </tr>
        <tr>
            <td>sonarika</td>
            <td>sonarika@makitweb.com</td>
        </tr>
        <tr>
            <td>vishal</td>
            <td>vishal@makitweb.com</td>
        </tr>
        </table>";
$filename = "newpdffile";

// include autoloader
require 'vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

$canvas = $dompdf->get_canvas();
$canvas->page_text(0, 0, "{PAGE_NUM} of {PAGE_COUNT}", null, 10, array(0, 0, 0));

// Output the generated PDF to Browser
$dompdf->stream($filename, array("Attachment" => FALSE));
