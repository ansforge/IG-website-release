<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/hl7v2/trans-cda-mss/1.1.2/ImplementationGuide-ans.hl7v2.fr.trans-cda-mss.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/hl7v2/trans-cda-mss/1.1.2/ImplementationGuide-ans.hl7v2.fr.trans-cda-mss.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/hl7v2/trans-cda-mss/1.1.2/ImplementationGuide-ans.hl7v2.fr.trans-cda-mss.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/hl7v2/trans-cda-mss/1.1.2/ImplementationGuide-ans.hl7v2.fr.trans-cda-mss.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/hl7v2/trans-cda-mss/1.1.2/ImplementationGuide-ans.hl7v2.fr.trans-cda-mss.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/hl7v2/trans-cda-mss/1.1.2/index.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/hl7v2/trans-cda-mss/1.1.2/ImplementationGuide-ans.hl7v2.fr.trans-cda-mss.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
