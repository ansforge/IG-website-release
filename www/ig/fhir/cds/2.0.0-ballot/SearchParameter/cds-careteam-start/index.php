<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cds/2.0.0-ballot/SearchParameter-cds-careteam-start.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cds/2.0.0-ballot/SearchParameter-cds-careteam-start.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cds/2.0.0-ballot/SearchParameter-cds-careteam-start.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cds/2.0.0-ballot/SearchParameter-cds-careteam-start.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cds/2.0.0-ballot/SearchParameter-cds-careteam-start.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cds/2.0.0-ballot/SearchParameter-cds-careteam-start.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cds/2.0.0-ballot/SearchParameter-cds-careteam-start.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
