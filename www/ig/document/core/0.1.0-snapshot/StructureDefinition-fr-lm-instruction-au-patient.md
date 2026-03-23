# Modèle logique métier - FR LM Instruction au patient - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Instruction au patient**

## Logical Model: Modèle logique métier - FR LM Instruction au patient 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-instruction-au-patient | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMInstructionAuPatient |

 
Instruction au patient 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Instructions au patient](StructureDefinition-fr-lm-instructions-patient.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-instruction-au-patient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-instruction-au-patient.csv), [Excel](StructureDefinition-fr-lm-instruction-au-patient.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-instruction-au-patient",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-instruction-au-patient",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMInstructionAuPatient",
  "title" : "Modèle logique métier - FR LM Instruction au patient",
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
  "description" : "Instruction au patient",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-instruction-au-patient",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-instruction-au-patient",
      "path" : "fr-lm-instruction-au-patient",
      "short" : "Modèle logique métier - FR LM Instruction au patient",
      "definition" : "Instruction au patient"
    },
    {
      "id" : "fr-lm-instruction-au-patient.identifiant",
      "path" : "fr-lm-instruction-au-patient.identifiant",
      "short" : "Identifiant de l'observation",
      "definition" : "Identifiant de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-instruction-au-patient.codeInstructionPatient",
      "path" : "fr-lm-instruction-au-patient.codeInstructionPatient",
      "short" : "Code de l'observation",
      "definition" : "Code de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-instruction-au-patient.descriptionInstructionPatient",
      "path" : "fr-lm-instruction-au-patient.descriptionInstructionPatient",
      "short" : "Instruction au patient",
      "definition" : "Instruction au patient",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-instruction-au-patient.statutInstructionPatient",
      "path" : "fr-lm-instruction-au-patient.statutInstructionPatient",
      "short" : "Statut de l'observation",
      "definition" : "Statut de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-instruction-au-patient.horodatageinstructionPatient",
      "path" : "fr-lm-instruction-au-patient.horodatageinstructionPatient",
      "short" : "Horodatage de l’entrée",
      "definition" : "Horodatage de l’entrée",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-instruction-au-patient.valeurInstructionPatient",
      "path" : "fr-lm-instruction-au-patient.valeurInstructionPatient",
      "short" : "Instruction au patient sous forme codée",
      "definition" : "Instruction au patient sous forme codée",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    }]
  }
}

```
