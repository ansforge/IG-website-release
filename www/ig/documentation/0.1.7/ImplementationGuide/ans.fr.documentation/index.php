<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/documentation/0.1.7/ImplementationGuide-ans.fr.documentation.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/documentation/0.1.7/ImplementationGuide-ans.fr.documentation.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/documentation/0.1.7/ImplementationGuide-ans.fr.documentation.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/documentation/0.1.7/ImplementationGuide-ans.fr.documentation.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/documentation/0.1.7/ImplementationGuide-ans.fr.documentation.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/documentation/0.1.7/ImplementationGuide-ans.fr.documentation.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/documentation/0.1.7/ImplementationGuide-ans.fr.documentation.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
