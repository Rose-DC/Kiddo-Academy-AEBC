<?php
require ("fpdf.php");
include "db_connect.php";
$sect=$_POST['txtsect'];

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('images/logo.png',35,10,150,30);
    // Arial bold 10
    $this->SetFont('Arial','',8);
    // Set placement
    $this->SetXY(111,25);
    // Contact Details
    $this->Cell(10,10,"2/F GA Tower, # 83 EDSA, Mandaluyong City 1550, Philippines",0,0,'C');
    $this->Ln(3);// Line break
    $this->SetX(111);
    $this->Cell(10,10,"Telephone Nos.: 576-4171/0905-5529605",0,0,'C');
    $this->Ln(3);// Line break
    $this->SetX(111);
    $this->Cell(10,10,"E-mail: kiddo_academy@yahoo.com",0,0,'C');
    $this->Ln(3);// Line break
    $this->SetX(111);
    $this->Cell(10,10,"Website: www.kiddoacademy.com",0,0,'C');

    $this->SetXY(100,55);
    $this->SetFont('Arial','B',15);
    $this->Cell(10,10,"CLASS RANKING",0,0,'C');

    $this->Ln(15);// Line break
    $this->SetFont('Arial','',8);
    $this->Cell(20,5,"Rank",1,0,'C');
    $this->Cell(50,5,"Student Number",1,0,'C');
    $this->Cell(95,5,"Student Name",1,0,'C');
    $this->Cell(30,5,"Average",1,0,'C');


}



 // function Content()

// Page footer
function Footer()
{
   // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

	$pdf = new PDF();
	$pdf -> AliasNbPages();
	$pdf -> AddPage("P","Letter",0);
    //$pdf -> SetFont('Arial','',8);

    $query = mysqli_query($con, "select * from tblschoolyear where tblSchoolYrActive='ACTIVE' and tblSchoolYearFlag=1");
    $row=mysqli_fetch_array($query);
    $syid=$row['tblSchoolYrId'];
    $x=1;
    $query=mysqli_query($con, "select avg(ga.tblGenAverage) as average,concat(si.tblStudInfoLname, ', ', si.tblStudInfoFname, ' ', si.tblStudInfoMname) as studentname, s.tblStudentId from tblgradeave ga, tblstudent s, tblstudentinfo si where si.tblStudInfo_tblStudentId=s.tblStudentId and ga.tblGenAve_tblStudentId=s.tblStudentId and s.tblStudent_tblSectionId='$sect' and ga.tblGenAveFlag=1 and ga.tblGenAve_tblSchoolYrId='$syid' group by s.tblStudentId");
    while($row=mysqli_fetch_array($query)):
        
        $pdf->Ln(5);
        $pdf->Cell(20, 5, $x, 1, 0);
        $pdf->Cell(50,5,$row['tblStudentId'],1,0);
        $pdf->Cell(95,5,$row['studentname'],1,0);
        $pdf->Cell(30,5,$row['average'],1,0);
        $x++;
    endwhile;

	$pdf -> Output();


?>