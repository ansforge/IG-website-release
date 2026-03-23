# Mapping FRLMCriticite -> FRCDACriticite -> FRAllergyIntoleranceDocument.criticality - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mapping FRLMCriticite -> FRCDACriticite -> FRAllergyIntoleranceDocument.criticality**

## ConceptMap: Mapping FRLMCriticite -> FRCDACriticite -> FRAllergyIntoleranceDocument.criticality 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/ConceptMap/FRCriticiteLMCDAFHIR | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*: |

 
Mapping des éléments du modele metier FRLMCriticite vers le profil CDA FRCDACriticite, puis vers le profil FHIR FRAllergyIntoleranceDocument.criticality. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "FRCriticiteLMCDAFHIR",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/ConceptMap/FRCriticiteLMCDAFHIR",
  "version" : "0.1.0-snapsnot",
  "title" : "Mapping Metier/CDA/FHIR : \"Criticite\"",
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
  "description" : "Mapping des éléments du modele metier FRLMCriticite vers le profil CDA FRCDACriticite, puis vers le profil FHIR FRAllergyIntoleranceDocument.criticality.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "group" : [{
    "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-criticite",
    "target" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-criticite",
    "element" : [{
      "code" : "FRLMCriticite",
      "target" : [{
        "code" : "FRCDACriticite",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMCriticite.identifiant",
      "target" : [{
        "code" : "FRCDACriticite.id",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMCriticite.code",
      "target" : [{
        "code" : "FRCDACriticite.code",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMCriticite.statut",
      "target" : [{
        "code" : "FRCDACriticite.statusCode",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMCriticite.date",
      "target" : [{
        "code" : "FRCDACriticite.effectiveTime",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMCriticite.descriptionNarrative",
      "target" : [{
        "code" : "FRCDACriticite.text",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMCriticite.valeur",
      "target" : [{
        "code" : "FRCDACriticite.value",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-criticite",
    "target" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-allergy-intolerance-document",
    "element" : [{
      "code" : "FRCDACriticite.value",
      "target" : [{
        "code" : "FRAllergyIntoleranceDocument.criticality",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
