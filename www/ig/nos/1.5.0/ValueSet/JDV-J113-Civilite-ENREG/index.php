<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.5.0/ValueSet-JDV-J113-Civilite-ENREG.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.5.0/ValueSet-JDV-J113-Civilite-ENREG.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.5.0/ValueSet-JDV-J113-Civilite-ENREG.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.5.0/ValueSet-JDV-J113-Civilite-ENREG.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.5.0/ValueSet-JDV-J113-Civilite-ENREG.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.5.0/ValueSet-JDV-J113-Civilite-ENREG.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/nos/1.5.0/ValueSet-JDV-J113-Civilite-ENREG.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
