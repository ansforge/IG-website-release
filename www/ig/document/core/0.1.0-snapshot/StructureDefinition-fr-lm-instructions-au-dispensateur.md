# Modèle logique métier - FR LM Instructions au dispensateur - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Instructions au dispensateur**

## Logical Model: Modèle logique métier - FR LM Instructions au dispensateur 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-instructions-au-dispensateur | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRLMInstructionsAuDispensateur |

 
Instructions au dispensateur 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Prescription](StructureDefinition-fr-lm-prescription-entree.md) and [Modèle logique métier - FR LM Traitement Prescrit](StructureDefinition-fr-lm-traitement-prescrit.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-instructions-au-dispensateur)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-instructions-au-dispensateur.csv), [Excel](StructureDefinition-fr-lm-instructions-au-dispensateur.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-instructions-au-dispensateur",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-instructions-au-dispensateur",
  "version" : "0.1.0",
  "name" : "FRLMInstructionsAuDispensateur",
  "title" : "Modèle logique métier - FR LM Instructions au dispensateur",
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
  "description" : "Instructions au dispensateur",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-instructions-au-dispensateur",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-instructions-au-dispensateur",
      "path" : "fr-lm-instructions-au-dispensateur",
      "short" : "Modèle logique métier - FR LM Instructions au dispensateur",
      "definition" : "Instructions au dispensateur"
    },
    {
      "id" : "fr-lm-instructions-au-dispensateur.identifiant",
      "path" : "fr-lm-instructions-au-dispensateur.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-instructions-au-dispensateur.codeInstructionsDispensateurt",
      "path" : "fr-lm-instructions-au-dispensateur.codeInstructionsDispensateurt",
      "short" : "Code de l'entrée.",
      "definition" : "Code de l'entrée.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-instructions-au-dispensateur.descriptionInstructionsDispensateur",
      "path" : "fr-lm-instructions-au-dispensateur.descriptionInstructionsDispensateur",
      "short" : "Instructions au dispensateur sous forme textuelle",
      "definition" : "Instructions au dispensateur sous forme textuelle",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-instructions-au-dispensateur.statutInstructionsDispensateur",
      "path" : "fr-lm-instructions-au-dispensateur.statutInstructionsDispensateur",
      "short" : "Statut de l'entrée",
      "definition" : "Statut de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    }]
  }
}

```
