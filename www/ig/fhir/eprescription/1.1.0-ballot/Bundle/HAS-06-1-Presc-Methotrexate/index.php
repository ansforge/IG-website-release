<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/eprescription/1.1.0-ballot/Bundle-HAS-06-1-Presc-Methotrexate.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/eprescription/1.1.0-ballot/Bundle-HAS-06-1-Presc-Methotrexate.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/eprescription/1.1.0-ballot/Bundle-HAS-06-1-Presc-Methotrexate.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/eprescription/1.1.0-ballot/Bundle-HAS-06-1-Presc-Methotrexate.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/eprescription/1.1.0-ballot/Bundle-HAS-06-1-Presc-Methotrexate.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/eprescription/1.1.0-ballot/Bundle-HAS-06-1-Presc-Methotrexate.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/eprescription/1.1.0-ballot/Bundle-HAS-06-1-Presc-Methotrexate.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
