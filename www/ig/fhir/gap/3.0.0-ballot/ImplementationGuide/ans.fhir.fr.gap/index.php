<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/gap/3.0.0-ballot/ImplementationGuide-ans.fhir.fr.gap.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/gap/3.0.0-ballot/ImplementationGuide-ans.fhir.fr.gap.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/gap/3.0.0-ballot/ImplementationGuide-ans.fhir.fr.gap.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/gap/3.0.0-ballot/ImplementationGuide-ans.fhir.fr.gap.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/gap/3.0.0-ballot/ImplementationGuide-ans.fhir.fr.gap.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/gap/3.0.0-ballot/ImplementationGuide-ans.fhir.fr.gap.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/gap/3.0.0-ballot/ImplementationGuide-ans.fhir.fr.gap.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
