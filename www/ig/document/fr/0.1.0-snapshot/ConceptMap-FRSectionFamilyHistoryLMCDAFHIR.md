# Mapping Métier/CDA/FHIR : Antécédents familiaux - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mapping Métier/CDA/FHIR : Antécédents familiaux**

## ConceptMap: Mapping Métier/CDA/FHIR : Antécédents familiaux 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/ConceptMap/FRSectionFamilyHistoryLMCDAFHIR | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*: |

 
Mapping des éléments du modèle métier FRLMAntecedentsFamiliaux vers la section CDA FRCDAAntecedentsFamiliaux, puis vers le profil FHIR FRCompositionDocument.section:FamilyHistory. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "FRSectionFamilyHistoryLMCDAFHIR",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/ConceptMap/FRSectionFamilyHistoryLMCDAFHIR",
  "version" : "0.1.0",
  "title" : "Mapping Métier/CDA/FHIR : \"Antécédents familiaux\"",
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
  "description" : "Mapping des éléments du modèle métier FRLMAntecedentsFamiliaux vers la section CDA FRCDAAntecedentsFamiliaux, puis vers le profil FHIR FRCompositionDocument.section:FamilyHistory.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "group" : [{
    "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-antecedents-familiaux",
    "target" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-antecedents-familiaux",
    "element" : [{
      "code" : "FRLMAntecedentsFamiliaux",
      "target" : [{
        "code" : "FRCDAAntecedentsFamiliaux",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMAntecedentsFamiliaux.codeSection",
      "target" : [{
        "code" : "FRCDAAntecedentsFamiliaux.code",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMAntecedentsFamiliaux.titreSection",
      "target" : [{
        "code" : "FRCDAAntecedentsFamiliaux.title",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMAntecedentsFamiliaux.blocNarratif",
      "target" : [{
        "code" : "FRCDAAntecedentsFamiliaux.text",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMAntecedentsFamiliaux.entree.antecedentsFamiliaux",
      "target" : [{
        "code" : "FRCDAAntecedentsFamiliaux.entry:FRCDAAntecedentsFamiliaux",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-antecedents-familiaux",
    "target" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-composition-document",
    "element" : [{
      "code" : "FRCDAAntecedentsFamiliaux",
      "target" : [{
        "code" : "FRCompositionDocument.section:FamilyHistory",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDAAntecedentsFamiliaux.code",
      "target" : [{
        "code" : "FRCompositionDocument.section:FamilyHistory.code",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDAAntecedentsFamiliaux.title",
      "target" : [{
        "code" : "FRCompositionDocument.section:FamilyHistory.title",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDAAntecedentsFamiliaux.text",
      "target" : [{
        "code" : "FRCompositionDocument.section:FamilyHistory.text",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDAAntecedentsFamiliaux.entry:FRCDAAntecedentsFamiliaux",
      "target" : [{
        "code" : "FRCompositionDocument.section:FamilyHistory.entry:FRFamilyMemberHistoryDocument",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
