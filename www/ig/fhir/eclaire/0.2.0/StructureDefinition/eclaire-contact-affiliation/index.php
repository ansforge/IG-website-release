<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/eclaire/0.2.0/StructureDefinition-eclaire-contact-affiliation.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/eclaire/0.2.0/StructureDefinition-eclaire-contact-affiliation.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/eclaire/0.2.0/StructureDefinition-eclaire-contact-affiliation.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/eclaire/0.2.0/StructureDefinition-eclaire-contact-affiliation.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/eclaire/0.2.0/StructureDefinition-eclaire-contact-affiliation.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/eclaire/0.2.0/StructureDefinition-eclaire-contact-affiliation.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/eclaire/0.2.0/StructureDefinition-eclaire-contact-affiliation.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
