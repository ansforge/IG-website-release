<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.2-ballot/DocumentReference-id-exemple-sdo-document-reference-np.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.2-ballot/DocumentReference-id-exemple-sdo-document-reference-np.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.2-ballot/DocumentReference-id-exemple-sdo-document-reference-np.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.2-ballot/DocumentReference-id-exemple-sdo-document-reference-np.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.2-ballot/DocumentReference-id-exemple-sdo-document-reference-np.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.2-ballot/DocumentReference-id-exemple-sdo-document-reference-np.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/sdo/4.0.2-ballot/DocumentReference-id-exemple-sdo-document-reference-np.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
