<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.5.0/ValueSet-JDV-J30-TemporaliteAccueil-ROR.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.5.0/ValueSet-JDV-J30-TemporaliteAccueil-ROR.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.5.0/ValueSet-JDV-J30-TemporaliteAccueil-ROR.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.5.0/ValueSet-JDV-J30-TemporaliteAccueil-ROR.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.5.0/ValueSet-JDV-J30-TemporaliteAccueil-ROR.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.5.0/ValueSet-JDV-J30-TemporaliteAccueil-ROR.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.5.0/ValueSet-JDV-J30-TemporaliteAccueil-ROR.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
