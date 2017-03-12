<?php
//SHOW A DATABASE ON A PDF FILE
//CREATED BY: Carlos Vasquez S.
//E-MAIL: cvasquez@cvs.cl
//CVS TECNOLOGIA E INNOVACION
//SANTIAGO, CHILE

require('fpdf.php');

//Connect to your database
include("connection.php");

//Select the Products you want to show in your PDF file
//select regnum, fname, lname from memberfoot where regnum = '1'
$result=mysql_query("SELECT * FROM `memberfoot` WHERE `regnum`='10' ");
$number_of_products = mysql_numrows($result);

//Initialize the 3 columns and the total
$regnum = "";
$fname = "";
$lname = "";
//$total = 0;

//For each row, add the field to the corresponding column

$row = mysql_fetch_array($result);

$reg_num = $row['regnum'];
$reg_fname = $row['fname'];
$reg_lname = $row['lname'];


$column_num = $column_num.$reg_num."\n";
    $column_fname = $column_fname.$reg_fname."\n";
    $column_lname = $column_lname.$reg_lname."\n";

//while($row = mysql_fetch_array($result))
//{
   // $code = $row["Code"];
    //$name = substr($row["Name"],0,20);
    //$real_price = $row["Price"];
    //$price_to_show = number_format($row["Price"],',','.','.');

   // $column_code = $column_code.$code."\n";
   // $column_name = $column_name.$name."\n";
    //$column_price = $column_price.$price_to_show."\n";

    //Sum all the Prices (TOTAL)
   // $total = $total+$real_price;
//}
mysql_close();

//Convert the Total Price to a number with (.) for thousands, and (,) for decimals.
//$total = number_format($total,',','.','.');

//Create a new PDF file
$pdf=new FPDF();
$pdf->AddPage();

//Fields Name position
$Y_Fields_Name_position = 20;
//Table position, under Fields Name
$Y_Table_Position = 26;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(232,232,232);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(45);
$pdf->Cell(20,6,'CODE',1,0,'L',1);
$pdf->SetX(65);
$pdf->Cell(100,6,'NAME',1,0,'L',1);
$pdf->SetX(135);
$pdf->Cell(30,6,'PRICE',1,0,'R',1);
$pdf->Ln();

//Now show the 3 columns
$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(45);
$pdf->MultiCell(20,6,$column_num,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(65);
$pdf->MultiCell(100,6,$column_fname,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(135);
$pdf->MultiCell(30,6,$column_lname,1,'R');
$pdf->SetX(135);
$pdf->MultiCell(30,6,'$ '.$total,1,'R');

//Create lines (boxes) for each ROW (Product)
//If you don't use the following code, you don't create the lines separating each row
$i = 0;
$pdf->SetY($Y_Table_Position);
while ($i < $number_of_products)
{
    $pdf->SetX(45);
    $pdf->MultiCell(120,6,'',1);
    $i = $i +1;
}

$pdf->Output();
?>