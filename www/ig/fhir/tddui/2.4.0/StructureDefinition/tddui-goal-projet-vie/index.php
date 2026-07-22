<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tddui/2.4.0/StructureDefinition-tddui-goal-projet-vie.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tddui/2.4.0/StructureDefinition-tddui-goal-projet-vie.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tddui/2.4.0/StructureDefinition-tddui-goal-projet-vie.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tddui/2.4.0/StructureDefinition-tddui-goal-projet-vie.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tddui/2.4.0/StructureDefinition-tddui-goal-projet-vie.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tddui/2.4.0/StructureDefinition-tddui-goal-projet-vie.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tddui/2.4.0/StructureDefinition-tddui-goal-projet-vie.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
