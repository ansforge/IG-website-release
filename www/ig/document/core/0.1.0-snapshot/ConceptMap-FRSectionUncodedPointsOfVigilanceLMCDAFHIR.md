# Mapping FRLMPointsDeVigilancesNonCode → FRCDAPointsDeVigilancesNonCode → FRCompositionDocument.section:uncodedPointsOfVigilance - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mapping FRLMPointsDeVigilancesNonCode → FRCDAPointsDeVigilancesNonCode → FRCompositionDocument.section:uncodedPointsOfVigilance**

## ConceptMap: Mapping FRLMPointsDeVigilancesNonCode → FRCDAPointsDeVigilancesNonCode → FRCompositionDocument.section:uncodedPointsOfVigilance 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/ConceptMap/FRSectionUncodedPointsOfVigilanceLMCDAFHIR | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*: |

 
Mapping des éléments du modèle métier FRLMPointsDeVigilancesNonCode vers la section CDA FRCDAPointsDeVigilancesNonCode, puis vers la section FHIR FRCompositionDocument.section:uncodedPointsOfVigilance. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "FRSectionUncodedPointsOfVigilanceLMCDAFHIR",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/ConceptMap/FRSectionUncodedPointsOfVigilanceLMCDAFHIR",
  "version" : "0.1.0-snapsnot",
  "title" : "Mapping Métier/CDA/FHIR : \"Points de vigilance (non-codés)\"",
  "status" : "draft",
  "date" : "2026-03-23T13:48:54+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Mapping des éléments du modèle métier FRLMPointsDeVigilancesNonCode vers la section CDA FRCDAPointsDeVigilancesNonCode, puis vers la section FHIR FRCompositionDocument.section:uncodedPointsOfVigilance.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "group" : [{
    "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-points-de-vigilances-non-code",
    "target" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-points-de-vigilances-non-code",
    "element" : [{
      "code" : "FRLMPointsDeVigilancesNonCode",
      "target" : [{
        "code" : "FRCDAPointsDeVigilancesNonCode",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMPointsDeVigilancesNonCode.codeSection",
      "target" : [{
        "code" : "FRCDAPointsDeVigilancesNonCode.code",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMPointsDeVigilancesNonCode.titreSection",
      "target" : [{
        "code" : "FRCDAPointsDeVigilancesNonCode.title",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMPointsDeVigilancesNonCode.blocNarratif",
      "target" : [{
        "code" : "FRCDAPointsDeVigilancesNonCode.text",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-points-de-vigilances-non-code",
    "target" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-composition-document",
    "element" : [{
      "code" : "FRCDAPointsDeVigilancesNonCode",
      "target" : [{
        "code" : "FRCompositionDocument.section:uncodedPointsOfVigilance",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDAPointsDeVigilancesNonCode.code",
      "target" : [{
        "code" : "FRCompositionDocument.section:uncodedPointsOfVigilance.code",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDAPointsDeVigilancesNonCode.title",
      "target" : [{
        "code" : "FRCompositionDocument.section:uncodedPointsOfVigilance.title",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDAPointsDeVigilancesNonCode.text",
      "target" : [{
        "code" : "FRCompositionDocument.section:uncodedPointsOfVigilance.text",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
