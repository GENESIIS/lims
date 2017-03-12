<?php
//

$file = 'pdf.html';
$result = file_get_contents("printapply02.php");
echo $result; //view source now
file_put_contents($file, $result);



include("MPDF57/mpdf.php");
 
$mpdf=new mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0); 
 
$mpdf->SetDisplayMode('fullpage');
 
$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
 
$mpdf->WriteHTML(file_get_contents($file));
         
$mpdf->Output();
?>
