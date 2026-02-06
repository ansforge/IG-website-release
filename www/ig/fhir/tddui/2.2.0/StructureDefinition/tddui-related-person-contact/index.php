<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tddui/2.2.0/StructureDefinition-tddui-related-person-contact.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tddui/2.2.0/StructureDefinition-tddui-related-person-contact.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tddui/2.2.0/StructureDefinition-tddui-related-person-contact.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tddui/2.2.0/StructureDefinition-tddui-related-person-contact.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tddui/2.2.0/StructureDefinition-tddui-related-person-contact.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tddui/2.2.0/StructureDefinition-tddui-related-person-contact.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tddui/2.2.0/StructureDefinition-tddui-related-person-contact.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
