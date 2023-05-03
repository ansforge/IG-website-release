<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.0.1/StructureDefinition-mesures-observation-head-circumference.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.0.1/StructureDefinition-mesures-observation-head-circumference.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.0.1/StructureDefinition-mesures-observation-head-circumference.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.0.1/StructureDefinition-mesures-observation-head-circumference.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.0.1/StructureDefinition-mesures-observation-head-circumference.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.0.1/StructureDefinition-mesures-observation-head-circumference.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.0.1/StructureDefinition-mesures-observation-head-circumference.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
