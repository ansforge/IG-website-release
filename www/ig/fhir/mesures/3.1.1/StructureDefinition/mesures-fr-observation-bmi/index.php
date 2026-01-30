<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/StructureDefinition-mesures-fr-observation-bmi.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/StructureDefinition-mesures-fr-observation-bmi.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/StructureDefinition-mesures-fr-observation-bmi.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/StructureDefinition-mesures-fr-observation-bmi.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/StructureDefinition-mesures-fr-observation-bmi.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/StructureDefinition-mesures-fr-observation-bmi.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/StructureDefinition-mesures-fr-observation-bmi.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
