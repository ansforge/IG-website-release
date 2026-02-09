<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/nde/3.0.0-ballot/CapabilityStatement-NdE-GestionnaireDeNotifications.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/nde/3.0.0-ballot/CapabilityStatement-NdE-GestionnaireDeNotifications.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/nde/3.0.0-ballot/CapabilityStatement-NdE-GestionnaireDeNotifications.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/nde/3.0.0-ballot/CapabilityStatement-NdE-GestionnaireDeNotifications.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/nde/3.0.0-ballot/CapabilityStatement-NdE-GestionnaireDeNotifications.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/nde/3.0.0-ballot/CapabilityStatement-NdE-GestionnaireDeNotifications.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/nde/3.0.0-ballot/CapabilityStatement-NdE-GestionnaireDeNotifications.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
