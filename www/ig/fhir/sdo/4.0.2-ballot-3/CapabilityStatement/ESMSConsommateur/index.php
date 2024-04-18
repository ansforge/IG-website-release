<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.2-ballot-3/CapabilityStatement-ESMSConsommateur.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.2-ballot-3/CapabilityStatement-ESMSConsommateur.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.2-ballot-3/CapabilityStatement-ESMSConsommateur.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.2-ballot-3/CapabilityStatement-ESMSConsommateur.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.2-ballot-3/CapabilityStatement-ESMSConsommateur.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.2-ballot-3/CapabilityStatement-ESMSConsommateur.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.2-ballot-3/CapabilityStatement-ESMSConsommateur.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
