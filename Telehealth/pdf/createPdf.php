<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

if($_GET){
    
    $page = $_GET['value'];
    $name = explode('.html', $page);
    $fileContent = file_get_contents('../'.$page);
    
    

    $dompdf->load_html($fileContent);

    $dompdf->set_option('isRemoteEnabled', TRUE);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();

    
    $dompdf->stream($name[0].".pdf");
}
?>

