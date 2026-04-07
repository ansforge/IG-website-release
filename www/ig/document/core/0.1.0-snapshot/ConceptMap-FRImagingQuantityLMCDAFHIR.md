# Mapping Métier/CDA/FHIR : Quantité d'exposition aux radiations - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mapping Métier/CDA/FHIR : Quantité d'exposition aux radiations**

## ConceptMap: Mapping Métier/CDA/FHIR : Quantité d'exposition aux radiations 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/ConceptMap/FRImagingQuantityLMCDAFHIR | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*: |

 
Mapping des éléments du modèle métier FRLMQuantiteExposition vers l’entrée CDA FRCDADICOMQuantite puis vers le composant FHIR FRObservationRadiationExposureDocument.component. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "FRImagingQuantityLMCDAFHIR",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/ConceptMap/FRImagingQuantityLMCDAFHIR",
  "version" : "0.1.0-snapsnot",
  "title" : "Mapping Métier/CDA/FHIR : Quantité d'exposition aux radiations",
  "status" : "draft",
  "date" : "2026-04-07T08:54:42+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Mapping des éléments du modèle métier FRLMQuantiteExposition vers l'entrée CDA FRCDADICOMQuantite puis vers le composant FHIR FRObservationRadiationExposureDocument.component.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "group" : [{
    "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-quantite-exposition",
    "target" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-dicom-quantite",
    "element" : [{
      "code" : "FRLMQuantiteExposition",
      "target" : [{
        "code" : "FRCDADICOMQuantite",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMQuantiteExposition.code",
      "target" : [{
        "code" : "FRCDADICOMQuantite.code",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMQuantiteExposition.valeur",
      "target" : [{
        "code" : "FRCDADICOMQuantite.value",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMQuantiteExposition.lateralite",
      "target" : [{
        "code" : "FRCDADICOMQuantite.targetSiteCode",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMQuantiteExposition.lateralite.topographique",
      "target" : [{
        "code" : "FRCDADICOMQuantite.targetSiteCode.qualifier",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMQuantiteExposition.lateralite.topographique.valeur",
      "target" : [{
        "code" : "FRCDADICOMQuantite.targetSiteCode.qualifier.value",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-dicom-quantite",
    "target" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-radiation-exposure-document",
    "element" : [{
      "code" : "FRCDADICOMQuantite",
      "target" : [{
        "code" : "FRObservationRadiationExposureDocument.component",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDADICOMQuantite.code",
      "target" : [{
        "code" : "FRCompositionDocument.section:radiationExposure.FRObservationRadiationExposureDocument.component.code",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDADICOMQuantite.value",
      "target" : [{
        "code" : "FRCompositionDocument.section:radiationExposure.FRObservationRadiationExposureDocument.component.valueQuantity",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDADICOMQuantite.targetSiteCode",
      "target" : [{
        "code" : "FRCompositionDocument.section:radiationExposure.FRObservationRadiationExposureDocument.bodySite",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDADICOMQuantite.targetSiteCode.qualifier",
      "target" : [{
        "code" : "FRCompositionDocument.section:radiationExposure.FRObservationRadiationExposureDocument.bodySite.extension:precisionTopographique",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDADICOMQuantite.targetSiteCode.qualifier.value",
      "target" : [{
        "code" : "FRCompositionDocument.section:radiationExposure.FRObservationRadiationExposureDocument.bodySite.extension:precisionTopographique.locationQualifier",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
