<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/gap/3.0.0/Schedule-example.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/gap/3.0.0/Schedule-example.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/gap/3.0.0/Schedule-example.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/gap/3.0.0/Schedule-example.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/gap/3.0.0/Schedule-example.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/gap/3.0.0/Schedule-example.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/gap/3.0.0/Schedule-example.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
