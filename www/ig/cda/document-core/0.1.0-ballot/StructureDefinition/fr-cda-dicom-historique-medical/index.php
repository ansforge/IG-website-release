<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/cda/document-core/0.1.0-ballot/StructureDefinition-fr-cda-dicom-historique-medical.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/cda/document-core/0.1.0-ballot/StructureDefinition-fr-cda-dicom-historique-medical.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/cda/document-core/0.1.0-ballot/StructureDefinition-fr-cda-dicom-historique-medical.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/cda/document-core/0.1.0-ballot/StructureDefinition-fr-cda-dicom-historique-medical.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/cda/document-core/0.1.0-ballot/StructureDefinition-fr-cda-dicom-historique-medical.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://interop.esante.gouv.fr/ig/cda/document-core/0.1.0-ballot/StructureDefinition-fr-cda-dicom-historique-medical.html');
else 
  Redirect('https://interop.esante.gouv.fr/ig/cda/document-core/0.1.0-ballot/StructureDefinition-fr-cda-dicom-historique-medical.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
