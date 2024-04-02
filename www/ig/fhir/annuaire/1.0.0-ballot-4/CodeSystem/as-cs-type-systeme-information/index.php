<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/annuaire/1.0.0-ballot-4/CodeSystem-as-cs-type-systeme-information.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/annuaire/1.0.0-ballot-4/CodeSystem-as-cs-type-systeme-information.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/annuaire/1.0.0-ballot-4/CodeSystem-as-cs-type-systeme-information.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/annuaire/1.0.0-ballot-4/CodeSystem-as-cs-type-systeme-information.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/annuaire/1.0.0-ballot-4/CodeSystem-as-cs-type-systeme-information.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/annuaire/1.0.0-ballot-4/CodeSystem-as-cs-type-systeme-information.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/annuaire/1.0.0-ballot-4/CodeSystem-as-cs-type-systeme-information.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
