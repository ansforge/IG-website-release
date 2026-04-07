# Mapping FRLMDispensationMedicaments → FRCDADispensationMedicaments → FRMedicationDispenseDocument - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mapping FRLMDispensationMedicaments → FRCDADispensationMedicaments → FRMedicationDispenseDocument**

## ConceptMap: Mapping FRLMDispensationMedicaments → FRCDADispensationMedicaments → FRMedicationDispenseDocument 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/ConceptMap/FRSectionMedicationDispenseLMCDAFHIR | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*: |

 
Mapping des éléments du modèle métier FRLMDispensationMedicaments vers la section CDA FRCDADispensationMedicaments, puis vers la section FHIR FRCompositionDocument.section:medication-dispense. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "FRSectionMedicationDispenseLMCDAFHIR",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/ConceptMap/FRSectionMedicationDispenseLMCDAFHIR",
  "version" : "0.1.0-snapsnot",
  "title" : "Mapping Métier/CDA/FHIR : \"Dispensation de médicaments\"",
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
  "description" : "Mapping des éléments du modèle métier FRLMDispensationMedicaments vers la section CDA FRCDADispensationMedicaments, puis vers la section FHIR FRCompositionDocument.section:medication-dispense.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "group" : [{
    "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispensation-medicaments",
    "target" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-dispensation-medicaments",
    "element" : [{
      "code" : "FRLMDispensationMedicaments",
      "target" : [{
        "code" : "FRCDADispensationMedicaments",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMDispensationMedicaments.codeSection",
      "target" : [{
        "code" : "FRCDADispensationMedicaments.code",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMDispensationMedicaments.blocNarratif",
      "target" : [{
        "code" : "FRCDADispensationMedicaments.text",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMDispensationMedicaments.titreSection",
      "target" : [{
        "code" : "FRCDADispensationMedicaments.title",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMDispensationMedicaments.entree.traitementDispense",
      "target" : [{
        "code" : "FRCDADispensationMedicaments.entry.FRCDATraitementDispense",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-dispensation-medicaments",
    "target" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-composition-document",
    "element" : [{
      "code" : "FRCDADispensationMedicaments",
      "target" : [{
        "code" : "FRCompositionDocument.section:medication-dispense",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDADispensationMedicaments.code",
      "target" : [{
        "code" : "FRCompositionDocument.section:medication-dispense.code",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDADispensationMedicaments.text",
      "target" : [{
        "code" : "FRCompositionDocument.section:medication-dispense.text",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDADispensationMedicaments.title",
      "target" : [{
        "code" : "FRCompositionDocument.section:medication-dispense.title",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRCDADispensationMedicaments.entry.FRCDATraitementDispense",
      "target" : [{
        "code" : "FRCompositionDocument.section:medication-dispense.entry:FRMedicationDispenseDocument",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
