<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/pdsm/3.0.0/SearchParameter-PDSm-PractitionerRole-family-ex.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/pdsm/3.0.0/SearchParameter-PDSm-PractitionerRole-family-ex.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/pdsm/3.0.0/SearchParameter-PDSm-PractitionerRole-family-ex.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/pdsm/3.0.0/SearchParameter-PDSm-PractitionerRole-family-ex.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/pdsm/3.0.0/SearchParameter-PDSm-PractitionerRole-family-ex.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/pdsm/3.0.0/SearchParameter-PDSm-PractitionerRole-family-ex.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/pdsm/3.0.0/SearchParameter-PDSm-PractitionerRole-family-ex.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
