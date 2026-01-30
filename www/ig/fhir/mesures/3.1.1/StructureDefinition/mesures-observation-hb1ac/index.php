<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/StructureDefinition-mesures-observation-hb1ac.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/StructureDefinition-mesures-observation-hb1ac.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/StructureDefinition-mesures-observation-hb1ac.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/StructureDefinition-mesures-observation-hb1ac.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/StructureDefinition-mesures-observation-hb1ac.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/StructureDefinition-mesures-observation-hb1ac.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/StructureDefinition-mesures-observation-hb1ac.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
