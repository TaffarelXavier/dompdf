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

// include autoloader
require_once 'vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

$output = $dompdf->output();

file_put_contents("dist/file.pdf", $output);
