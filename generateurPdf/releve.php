<?php
require("HTTPPost.php");
$_GET['class']='GINF2';
if(isset($_GET['class'])&& isset($_GET['cne']))
{
    $doc = new DOMDocument();
    $doc->load('../fichiersXml/notes_'.$_GET['class'].'_apres.xml');
    $xpath = new DOMXPath($doc);
    $query="//notes/note[CNE=".$_GET['cne']."]";
    $entries = $xpath->query($query);
    if ($entries->length==0) {
       header('Location:../dashboard.php?error=cneinexistant');
       exit();
    } 
   $i=0;
   $result= new DOMDocument;
   while ( $node = $entries->item($i) ) {
       // import node
       $domNode = $result->importNode($node, true);
       // append node
       $result->appendChild($domNode);
       $i++;
   }

  $studentXml=$result->saveXML();
  $httppost=new HTTPPost();
 $pdfdata=$httppost->post_request("localhost","8087","C://xampp4/htdocs/Gestion_scolaire/fichiersXslFo/releve_notes_ing.fo",$studentXml);

    // save PDF output to a PDF file
    $myFile = $_GET['class']."_".$_GET['cne']."_releve.pdf";
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