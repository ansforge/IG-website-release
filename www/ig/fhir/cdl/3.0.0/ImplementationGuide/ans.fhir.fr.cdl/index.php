<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cdl/3.0.0/ImplementationGuide-ans.fhir.fr.cdl.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cdl/3.0.0/ImplementationGuide-ans.fhir.fr.cdl.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cdl/3.0.0/ImplementationGuide-ans.fhir.fr.cdl.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cdl/3.0.0/ImplementationGuide-ans.fhir.fr.cdl.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cdl/3.0.0/ImplementationGuide-ans.fhir.fr.cdl.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cdl/3.0.0/index.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/cdl/3.0.0/ImplementationGuide-ans.fhir.fr.cdl.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
