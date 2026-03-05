<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tdmi/3.0.0-ballot/StructureDefinition-dmi-marquage-ce.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tdmi/3.0.0-ballot/StructureDefinition-dmi-marquage-ce.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tdmi/3.0.0-ballot/StructureDefinition-dmi-marquage-ce.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tdmi/3.0.0-ballot/StructureDefinition-dmi-marquage-ce.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tdmi/3.0.0-ballot/StructureDefinition-dmi-marquage-ce.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tdmi/3.0.0-ballot/StructureDefinition-dmi-marquage-ce.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tdmi/3.0.0-ballot/StructureDefinition-dmi-marquage-ce.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
