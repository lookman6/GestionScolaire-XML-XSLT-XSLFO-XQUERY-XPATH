<?php
require("HTTPPost.php");
//$_GET['class']='GINF2';
if(isset($_GET['class']))
{
    $doc = new DOMDocument();
    $doc->load('../fichiersXml/students_'.$_GET['class'].'.xml');
   
//die();
  $studentsXml=$doc->saveXML();
  $httppost=new HTTPPost();
 $pdfdata=$httppost->post_request("localhost","8087","C://xampp4/htdocs/Gestion_scolaire/fichiersXslFo/listeGroupe.fo",$studentsXml);

    // save PDF output to a PDF file
    $myFile = $_GET['class']."_liste.pdf";
    $fh = fopen($myFile, 'w') or die("can't open file");
    //fwrite($fh, $pdfdata);
    if (fwrite($fh, $pdfdata) === FALSE) {
        echo "Impossible d'écrire dans le fichier ($myFile)";
        exit;
    }
    fclose($fh);
   //Display PDF
    header('Content-Type: application/pdf'); 
  
    header('Content-Disposition: inline; filename="' . $myFile . '"'); 
      
    header('Content-Transfer-Encoding: binary'); 
      
    header('Accept-Ranges: bytes'); 
      
    // Read the file 
    readfile($myFile); 
    //DELETE PDF
    unlink($myFile);
}
else{
    //die();
    //redirect to dashboard
    header('Location:../dashboard.php');
}
?>