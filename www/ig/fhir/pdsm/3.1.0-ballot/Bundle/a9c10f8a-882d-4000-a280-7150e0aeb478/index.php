<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/pdsm/3.1.0-ballot/Bundle-a9c10f8a-882d-4000-a280-7150e0aeb478.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/pdsm/3.1.0-ballot/Bundle-a9c10f8a-882d-4000-a280-7150e0aeb478.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/pdsm/3.1.0-ballot/Bundle-a9c10f8a-882d-4000-a280-7150e0aeb478.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/pdsm/3.1.0-ballot/Bundle-a9c10f8a-882d-4000-a280-7150e0aeb478.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/pdsm/3.1.0-ballot/Bundle-a9c10f8a-882d-4000-a280-7150e0aeb478.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/pdsm/3.1.0-ballot/Bundle-a9c10f8a-882d-4000-a280-7150e0aeb478.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/pdsm/3.1.0-ballot/Bundle-a9c10f8a-882d-4000-a280-7150e0aeb478.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
