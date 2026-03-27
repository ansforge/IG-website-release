# Mapping FRLMCRBIOSousChapitre → FRCDACRBIOSousChapitre → FRCompositionDocument.section:avec-sous-sections.section - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mapping FRLMCRBIOSousChapitre → FRCDACRBIOSousChapitre → FRCompositionDocument.section:avec-sous-sections.section**

## ConceptMap: Mapping FRLMCRBIOSousChapitre → FRCDACRBIOSousChapitre → FRCompositionDocument.section:avec-sous-sections.section 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/ConceptMap/FRSectionLaboratorySubChapterLMCDAFHIR | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*: |

 
Mapping des éléments du modèle métier FRLMCRBIOSousChapitre vers la section CDA FRCDACRBIOSousChapitre, puis vers le profil FHIR FRCompositionDocument.section:avec-sous-sections.section. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "FRSectionLaboratorySubChapterLMCDAFHIR",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/ConceptMap/FRSectionLaboratorySubChapterLMCDAFHIR",
  "version" : "0.1.0-snapshot",
  "title" : "Mapping Métier/CDA/FHIR : \"Sous-chapitre de BIO\"",
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
  "description" : "Mapping des éléments du modèle métier FRLMCRBIOSousChapitre vers la section CDA FRCDACRBIOSousChapitre, puis vers le profil FHIR FRCompositionDocument.section:avec-sous-sections.section.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "group" : [{
    "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-crbio-sous-chapitre",
    "target" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-crbio-sous-chapitre",
    "element" : [{
      "code" : "FRLMCRBIOSousChapitre",
      "target" : [{
        "code" : "FRCDACRBIOSousChapitre",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMCRBIOSousChapitre.codeSection",
      "target" : [{
        "code" : "FRCDACRBIOSousChapitre.code",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMCRBIOSousChapitre.blocNarratif",
      "target" : [{
        "code" : "FRCDACRBIOSousChapitre.text",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMCRBIOSousChapitre.titreSection",
      "target" : [{
        "code" : "FRCDACRBIOSousChapitre.title",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMCRBIOSousChapitre.entree.resultatsExamensBiologieMedicale",
      "target" : [{
        "code" : "FRCDACRBIOSousChapitre.entry:FRCDAResultatsExamensDeBiologieMedicale",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-crbio-sous-chapitre",
    "target" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-composition-document",
    "element" : [{
      "code" : "FRCDACRBIOSousChapitre",
      "target" : [{
        "code" : "FRCompositionDocument.section:avec-sous-sections.section",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDACRBIOSousChapitre.code",
      "target" : [{
        "code" : "FRCompositionDocument.section:avec-sous-sections.section.code",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDACRBIOSousChapitre.text",
      "target" : [{
        "code" : "FRCompositionDocument.section:avec-sous-sections.section.text",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDACRBIOSousChapitre.title",
      "target" : [{
        "code" : "FRCompositionDocument.section:avec-sous-sections.section.title",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDACRBIOSousChapitre.entry:FRCDAResultatsExamensDeBiologieMedicale",
      "target" : [{
        "code" : "FRCompositionDocument.section:avec-sous-sections.section:sans-sous-sections.entry:FRObservationLaboratoryReportResultsDocument",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
