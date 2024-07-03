<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sas/1.0.0-ballot/HealthcareService-ExampleHealthcareServiceCPTS.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sas/1.0.0-ballot/HealthcareService-ExampleHealthcareServiceCPTS.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sas/1.0.0-ballot/HealthcareService-ExampleHealthcareServiceCPTS.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sas/1.0.0-ballot/HealthcareService-ExampleHealthcareServiceCPTS.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sas/1.0.0-ballot/HealthcareService-ExampleHealthcareServiceCPTS.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sas/1.0.0-ballot/HealthcareService-ExampleHealthcareServiceCPTS.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sas/1.0.0-ballot/HealthcareService-ExampleHealthcareServiceCPTS.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
