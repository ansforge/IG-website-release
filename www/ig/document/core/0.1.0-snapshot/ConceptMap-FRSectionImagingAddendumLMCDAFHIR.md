# Mapping FRLMAddendum → FRCDAdicomAddendum → FRCompositionDocument.section:Addendum - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mapping FRLMAddendum → FRCDAdicomAddendum → FRCompositionDocument.section:Addendum**

## ConceptMap: Mapping FRLMAddendum → FRCDAdicomAddendum → FRCompositionDocument.section:Addendum 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/ConceptMap/FRSectionImagingAddendumLMCDAFHIR | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*: |

 
Mapping des éléments du modèle métier FRLMAddendum vers la section CDA FRCDADicomAddendum puis vers le profil FHIR FRCompositionDocument.section:Addendum. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "FRSectionImagingAddendumLMCDAFHIR",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/ConceptMap/FRSectionImagingAddendumLMCDAFHIR",
  "version" : "0.1.0-snapshot",
  "title" : "Mapping Métier/CDA/FHIR : \"Addendum\"",
  "status" : "draft",
  "date" : "2026-04-15T16:11:27+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Mapping des éléments du modèle métier FRLMAddendum vers la section CDA FRCDADicomAddendum puis vers le profil FHIR FRCompositionDocument.section:Addendum.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "group" : [{
    "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-addendum",
    "target" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-dicom-addendum",
    "element" : [{
      "code" : "FRLMAddendum",
      "target" : [{
        "code" : "FRCDADicomAddendum",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMAddendum.codeSection",
      "target" : [{
        "code" : "FRCDADicomAddendum.code",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMAddendum.titreSection",
      "target" : [{
        "code" : "FRCDADicomAddendum.title",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMAddendum.blocNarratif",
      "target" : [{
        "code" : "FRCDADicomAddendum.text",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMAddendum.auteur",
      "target" : [{
        "code" : "FRCDADicomAddendum.author",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-dicom-addendum",
    "target" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-composition-document",
    "element" : [{
      "code" : "FRCDADicomAddendum",
      "target" : [{
        "code" : "FRCompositionDocument.section:Addendum",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDADicomAddendum.code",
      "target" : [{
        "code" : "FRCompositionDocument.section:Addendum.code",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDADicomAddendum.title",
      "target" : [{
        "code" : "FRCompositionDocument.section:Addendum.title",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDADicomAddendum.text",
      "target" : [{
        "code" : "FRCompositionDocument.section:Addendum.text",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDADicomAddendum.author",
      "target" : [{
        "code" : "FRCompositionDocument.section:Addendum.author",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
