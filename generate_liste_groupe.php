<?php


   $arrayClass=array("AP1","AP2","G3EI1","G3EI2","G3EI3","GIL1","GIL2","GIL3",
"GINF1","GINF2","GINF3","GSEA1","GSEA2","GSEA3","GSTR1","GSTR2","GSTR3");
foreach($arrayClass as $key=>$class)
{
   
    $doc = new DOMDocument();
    $doc->load('fichiersXml/students_'.$class.'.xml');
    $numberOfElement=$doc->getElementsByTagName('student')->length;
    $root=$doc->documentElement;
    for($i=0;$i<($numberOfElement/24);$i++)
    {
    $xpath = new DOMXPath($doc);
    $query='//students/student[position()>'.(($i)*24).' and  not(position() >('.(($i+1)*24).'))]';
    $entries = $xpath->query($query);
    $y=0;
   $result= new DOMDocument();
  $root=$result->appendChild($result->importNode($doc->documentElement));
 while ( $node = $entries->item($y) ) {
    // import node
       $domNode = $result->importNode($node, true);
       // append node
       
       $root->appendChild($domNode);
       $y++;
   }
  
  $result->save('fichiersXml/listeGroupesXml/liste_'.$class.'_Gr'.($i+1).'.xml');
    }
}
header('Location: dashboard.php');

?>