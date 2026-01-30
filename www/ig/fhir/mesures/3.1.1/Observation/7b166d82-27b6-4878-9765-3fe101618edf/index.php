<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/Observation-7b166d82-27b6-4878-9765-3fe101618edf.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/Observation-7b166d82-27b6-4878-9765-3fe101618edf.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/Observation-7b166d82-27b6-4878-9765-3fe101618edf.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/Observation-7b166d82-27b6-4878-9765-3fe101618edf.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/Observation-7b166d82-27b6-4878-9765-3fe101618edf.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/Observation-7b166d82-27b6-4878-9765-3fe101618edf.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/mesures/3.1.1/Observation-7b166d82-27b6-4878-9765-3fe101618edf.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
