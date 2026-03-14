# Modèle logique métier - FR LM Instructions au patient - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Instructions au patient**

## Logical Model: Modèle logique métier - FR LM Instructions au patient 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-instructions-patient | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRLMInstructionsPatient |

 
Instructions au patient 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Traitement dispensé](StructureDefinition-fr-lm-traitement-dispense.md), [Modèle logique métier - FR LM Traitement Prescrit](StructureDefinition-fr-lm-traitement-prescrit.md) and [Modèle logique métier - FR LM Traitement](StructureDefinition-fr-lm-traitement.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-instructions-patient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-instructions-patient.csv), [Excel](StructureDefinition-fr-lm-instructions-patient.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-instructions-patient",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-instructions-patient",
  "version" : "0.1.0",
  "name" : "FRLMInstructionsPatient",
  "title" : "Modèle logique métier - FR LM Instructions au patient",
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
  "description" : "Instructions au patient",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "kind" : "logical",
  "abstract" : false,
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-instructions-patient",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-instructions-patient",
      "path" : "fr-lm-instructions-patient",
      "short" : "Modèle logique métier - FR LM Instructions au patient",
      "definition" : "Instructions au patient"
    },
    {
      "id" : "fr-lm-instructions-patient.identifiant",
      "path" : "fr-lm-instructions-patient.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-instructions-patient.codeInstructionsPatient",
      "path" : "fr-lm-instructions-patient.codeInstructionsPatient",
      "short" : "Code de l'entrée",
      "definition" : "Code de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-instructions-patient.descriptionInstructionsPatient",
      "path" : "fr-lm-instructions-patient.descriptionInstructionsPatient",
      "short" : "Instructions au patient",
      "definition" : "Instructions au patient",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-instructions-patient.statutInstructionsPatient",
      "path" : "fr-lm-instructions-patient.statutInstructionsPatient",
      "short" : "Statut de l'entrée",
      "definition" : "Statut de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-instructions-patient.instructionPatient",
      "path" : "fr-lm-instructions-patient.instructionPatient",
      "short" : "Instruction au patient sous forme codée",
      "definition" : "Instruction au patient sous forme codée",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-instruction-au-patient"
      }]
    }]
  }
}

```
