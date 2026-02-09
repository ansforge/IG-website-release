<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tde/2.0.0-ballot/StructureDefinition-TDEBundleResultatReponseRechercheTraces.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tde/2.0.0-ballot/StructureDefinition-TDEBundleResultatReponseRechercheTraces.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tde/2.0.0-ballot/StructureDefinition-TDEBundleResultatReponseRechercheTraces.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tde/2.0.0-ballot/StructureDefinition-TDEBundleResultatReponseRechercheTraces.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tde/2.0.0-ballot/StructureDefinition-TDEBundleResultatReponseRechercheTraces.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tde/2.0.0-ballot/StructureDefinition-TDEBundleResultatReponseRechercheTraces.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/fhir/tde/2.0.0-ballot/StructureDefinition-TDEBundleResultatReponseRechercheTraces.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
