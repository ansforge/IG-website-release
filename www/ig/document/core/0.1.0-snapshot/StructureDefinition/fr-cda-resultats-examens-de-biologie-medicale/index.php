<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/document/core/0.1.0-snapshot/StructureDefinition-fr-cda-resultats-examens-de-biologie-medicale.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/document/core/0.1.0-snapshot/StructureDefinition-fr-cda-resultats-examens-de-biologie-medicale.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/document/core/0.1.0-snapshot/StructureDefinition-fr-cda-resultats-examens-de-biologie-medicale.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/document/core/0.1.0-snapshot/StructureDefinition-fr-cda-resultats-examens-de-biologie-medicale.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/document/core/0.1.0-snapshot/StructureDefinition-fr-cda-resultats-examens-de-biologie-medicale.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/document/core/0.1.0-snapshot/StructureDefinition-fr-cda-resultats-examens-de-biologie-medicale.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/document/core/0.1.0-snapshot/StructureDefinition-fr-cda-resultats-examens-de-biologie-medicale.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
