<?php
require("HTTPPost.php");
$_GET['class']='GINF2';

if(isset($_GET['class']) && isset($_GET['periode']))
{
    $doc = new DOMDocument();
    $doc->load('../fichiersXml/emploidutemps_'.$_GET['class'].'_'.$_GET['periode'].'CC.xml');

  $emploiXml=$doc->saveXML();
  $httppost=new HTTPPost();
  $pdfdata=$httppost->post_request("localhost","8087","C://xampp4/htdocs/Gestion_scolaire/fichiersXslFo/emploidutemps.fo",$emploiXml);

    // save PDF output to a PDF file
    $myFile = $_GET['class']."emploidutemps.pdf";
    $fh = fopen($myFile, 'w') or die("can't open file");
    //fwrite($fh, $pdfdata);
    if (fwrite($fh, $pdfdata) === FALSE) {
        echo "Impossible d'écrire dans le fichier ($myFile)";
        exit;
    }
    fclose($fh);
   //Display PDF
    header('Content-type: application/pdf'); 
  
    header('Content-Disposition: inline; filename="' . $myFile . '"'); 
      
    header('Content-Transfer-Encoding: binary'); 
      
    header('Accept-Ranges: bytes'); 
      
    // Read the file 
    @readfile($myFile); 
    //DELETE PDF
 unlink($myFile);
    }
else{
    //redirect to dashboard
    header('Location:../dashboard.php');
}
?>