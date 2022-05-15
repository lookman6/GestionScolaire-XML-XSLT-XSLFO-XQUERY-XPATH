<?php
require("HTTPPost.php");
$_GET['class']='GINF2';
if(isset($_GET['class']))
{
    $doc = new DOMDocument();
    $doc->load('../fichiersXml/notes_'.$_GET['class'].'_apres.xml');
  

  $studentsXml=$doc->saveXML();
  $httppost=new HTTPPost();
 $pdfdata=$httppost->post_request("localhost","8087","C://xampp4/htdocs/Gestion_scolaire/fichiersXslFo/releve_classe_moy.fo",$studentsXml);
 //"C://xampp4/htdocs/Gestion_scolaire/fichiersXslFo/releve_classe_moy.fo"
    // save PDF output to a PDF file
    $myFile = $_GET['class']."_procesverbal.pdf";
    $fh = fopen($myFile, 'w') or die("can't open file");
    //fwrite($fh, $pdfdata);
    if (fwrite($fh, $pdfdata) === FALSE) {
        echo "Impossible d'écrire dans le fichier ($myFile)";
        exit;
    }
     //echo "L'écriture de ($pdfdata) dans le fichier ($myFile) a réussi";

    fclose($fh);
    //die();
   //Display PDF
    //header('Content-Type: application/force-download'); 
    header('Content-Type: application/pdf');
    //header("Content-Type: application/pdf"); 
    //header('Content-Transfer-Encoding: Binary');
   // $kirby->response()->code(200)->type('application/pdf');
    //echo '<p>Bonjour le monde</p>'; 
//die();
  
    header('Content-Disposition: inline; filename="' . $myFile . '"'); 
      
    header('Content-Transfer-Encoding: binary'); 
      
    header('Accept-Ranges: bytes'); 
      /*---------------------------------------------*/

      /*--------------------------------------------*/
    // Read the file 
   readfile($myFile); 
   // readfile('problematic.pdf'); 
    //DELETE PDF
    unlink($myFile);
    }
else{
    //redirect to dashboard
    header('Location:../dashboard.php');
}
?>