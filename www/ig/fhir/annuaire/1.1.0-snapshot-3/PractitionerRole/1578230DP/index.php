<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/annuaire/1.1.0-snapshot-3/PractitionerRole-1578230DP.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/annuaire/1.1.0-snapshot-3/PractitionerRole-1578230DP.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/annuaire/1.1.0-snapshot-3/PractitionerRole-1578230DP.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/annuaire/1.1.0-snapshot-3/PractitionerRole-1578230DP.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/annuaire/1.1.0-snapshot-3/PractitionerRole-1578230DP.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/annuaire/1.1.0-snapshot-3/PractitionerRole-1578230DP.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/annuaire/1.1.0-snapshot-3/PractitionerRole-1578230DP.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
