<?php

require 'autoload.php';
use Knp\Snappy\Pdf;
$snappy = new Pdf('wkhtmltopdf.exe');

$ID = $_GET['id'];
$web1 = 'http://www.whitireia.ac.nz';
$web2 = 'http://moodle.whitireia.ac.nz';
$web3 = 'https://results.whitireia.ac.nz';

switch ($ID) {
    case 1:		// Download the streamed PDF
		header('Content-Type: application/pdf');
		header('Content-Disposition: attachment; filename="file.pdf"');
		echo $snappy->getOutput($web1);
		break;
    case 2:		// Merge multiple sources
		header('Content-Type: application/pdf');
		header('Content-Disposition: attachment; filename="file.pdf"');
		echo $snappy->getOutput(array($web2,$web3));
        break;
    case 3:		// Generate a PDF from HTML tag
		$snappy->generateFromHtml('<h1>Hello PDF</h1><p>.</p>', 'download/file.pdf');
        break;
}

?>

