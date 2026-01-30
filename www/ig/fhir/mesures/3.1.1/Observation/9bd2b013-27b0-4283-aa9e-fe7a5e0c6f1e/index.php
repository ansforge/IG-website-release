<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/Observation-9bd2b013-27b0-4283-aa9e-fe7a5e0c6f1e.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/Observation-9bd2b013-27b0-4283-aa9e-fe7a5e0c6f1e.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/Observation-9bd2b013-27b0-4283-aa9e-fe7a5e0c6f1e.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/Observation-9bd2b013-27b0-4283-aa9e-fe7a5e0c6f1e.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/Observation-9bd2b013-27b0-4283-aa9e-fe7a5e0c6f1e.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/Observation-9bd2b013-27b0-4283-aa9e-fe7a5e0c6f1e.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/Observation-9bd2b013-27b0-4283-aa9e-fe7a5e0c6f1e.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
