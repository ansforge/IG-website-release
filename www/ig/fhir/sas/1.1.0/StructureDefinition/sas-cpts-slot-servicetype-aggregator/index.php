<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sas/1.1.0/StructureDefinition-sas-cpts-slot-servicetype-aggregator.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sas/1.1.0/StructureDefinition-sas-cpts-slot-servicetype-aggregator.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sas/1.1.0/StructureDefinition-sas-cpts-slot-servicetype-aggregator.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sas/1.1.0/StructureDefinition-sas-cpts-slot-servicetype-aggregator.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sas/1.1.0/StructureDefinition-sas-cpts-slot-servicetype-aggregator.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sas/1.1.0/StructureDefinition-sas-cpts-slot-servicetype-aggregator.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sas/1.1.0/StructureDefinition-sas-cpts-slot-servicetype-aggregator.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
