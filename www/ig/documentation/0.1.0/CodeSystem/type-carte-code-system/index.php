<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/documentation/0.1.0/CodeSystem-type-carte-code-system.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/documentation/0.1.0/CodeSystem-type-carte-code-system.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/documentation/0.1.0/CodeSystem-type-carte-code-system.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/documentation/0.1.0/CodeSystem-type-carte-code-system.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/documentation/0.1.0/CodeSystem-type-carte-code-system.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/documentation/0.1.0/CodeSystem-type-carte-code-system.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/documentation/0.1.0/CodeSystem-type-carte-code-system.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
