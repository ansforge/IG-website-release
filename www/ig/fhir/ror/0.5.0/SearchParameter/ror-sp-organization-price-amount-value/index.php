<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/ror/0.5.0/SearchParameter-ror-sp-organization-price-amount-value.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/ror/0.5.0/SearchParameter-ror-sp-organization-price-amount-value.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/ror/0.5.0/SearchParameter-ror-sp-organization-price-amount-value.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/ror/0.5.0/SearchParameter-ror-sp-organization-price-amount-value.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/ror/0.5.0/SearchParameter-ror-sp-organization-price-amount-value.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/ror/0.5.0/SearchParameter-ror-sp-organization-price-amount-value.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/ror/0.5.0/SearchParameter-ror-sp-organization-price-amount-value.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
