<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/mos/0.1.0-ballot/ValueSet-relation-vs.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/mos/0.1.0-ballot/ValueSet-relation-vs.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/mos/0.1.0-ballot/ValueSet-relation-vs.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/mos/0.1.0-ballot/ValueSet-relation-vs.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/mos/0.1.0-ballot/ValueSet-relation-vs.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/mos/0.1.0-ballot/ValueSet-relation-vs.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/mos/0.1.0-ballot/ValueSet-relation-vs.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
