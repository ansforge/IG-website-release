<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/ror/0.5.0/StructureDefinition-ror-contact-function-contact.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/ror/0.5.0/StructureDefinition-ror-contact-function-contact.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/ror/0.5.0/StructureDefinition-ror-contact-function-contact.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/ror/0.5.0/StructureDefinition-ror-contact-function-contact.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/ror/0.5.0/StructureDefinition-ror-contact-function-contact.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/ror/0.5.0/StructureDefinition-ror-contact-function-contact.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/ror/0.5.0/StructureDefinition-ror-contact-function-contact.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
