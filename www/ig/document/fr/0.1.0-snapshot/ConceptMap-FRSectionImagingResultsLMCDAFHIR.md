# Mapping Métier/CDA/FHIR : Résultats d'imagerie - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mapping Métier/CDA/FHIR : Résultats d'imagerie**

## ConceptMap: Mapping Métier/CDA/FHIR : Résultats d'imagerie 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/ConceptMap/FRSectionImagingResultsLMCDAFHIR | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*: |

 
Mapping des éléments du modèle métier FRLMResultatsExamenImagerie vers la section CDA FRCDADICOMResultats puis vers le profil FHIR FRCompositionDocument.section:Findings. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "FRSectionImagingResultsLMCDAFHIR",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/ConceptMap/FRSectionImagingResultsLMCDAFHIR",
  "version" : "0.1.0",
  "title" : "Mapping Métier/CDA/FHIR : Résultats d'imagerie",
  "status" : "draft",
  "date" : "2026-03-13T22:56:29+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Mapping des éléments du modèle métier FRLMResultatsExamenImagerie vers la section CDA FRCDADICOMResultats puis vers le profil FHIR FRCompositionDocument.section:Findings.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "group" : [{
    "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats-examen-imagerie",
    "target" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-dicom-resultats",
    "element" : [{
      "code" : "FRLMResultatsExamenImagerie",
      "target" : [{
        "code" : "FRCDADICOMResultats",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMResultatsExamenImagerie.titreSection",
      "target" : [{
        "code" : "FRCDADICOMResultats.title",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMResultatsExamenImagerie.blocNarratif",
      "target" : [{
        "code" : "FRCDADICOMResultats.text",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-dicom-resultats",
    "target" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-composition-document",
    "element" : [{
      "code" : "FRCDADICOMResultats",
      "target" : [{
        "code" : "FRCompositionDocument.section:Findings",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDADICOMResultats.title",
      "target" : [{
        "code" : "FRCompositionDocument.section:Findings.title",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDADICOMResultats.text",
      "target" : [{
        "equivalence" : "unmatched"
      }]
    }]
  }]
}

```
