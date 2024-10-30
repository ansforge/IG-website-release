<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cdl/3.0.0-ballot/Patient-0d920958-b596-4b91-af67-9bafc707820b.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cdl/3.0.0-ballot/Patient-0d920958-b596-4b91-af67-9bafc707820b.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cdl/3.0.0-ballot/Patient-0d920958-b596-4b91-af67-9bafc707820b.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cdl/3.0.0-ballot/Patient-0d920958-b596-4b91-af67-9bafc707820b.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cdl/3.0.0-ballot/Patient-0d920958-b596-4b91-af67-9bafc707820b.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cdl/3.0.0-ballot/Patient-0d920958-b596-4b91-af67-9bafc707820b.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cdl/3.0.0-ballot/Patient-0d920958-b596-4b91-af67-9bafc707820b.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
