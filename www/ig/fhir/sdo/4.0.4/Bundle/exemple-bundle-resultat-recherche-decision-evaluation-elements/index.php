<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.4/Bundle-exemple-bundle-resultat-recherche-decision-evaluation-elements.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.4/Bundle-exemple-bundle-resultat-recherche-decision-evaluation-elements.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.4/Bundle-exemple-bundle-resultat-recherche-decision-evaluation-elements.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.4/Bundle-exemple-bundle-resultat-recherche-decision-evaluation-elements.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.4/Bundle-exemple-bundle-resultat-recherche-decision-evaluation-elements.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.4/Bundle-exemple-bundle-resultat-recherche-decision-evaluation-elements.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.4/Bundle-exemple-bundle-resultat-recherche-decision-evaluation-elements.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
