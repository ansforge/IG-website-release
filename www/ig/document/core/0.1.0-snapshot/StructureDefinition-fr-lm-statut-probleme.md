# Modèle logique métier - FR LM Statut du problème - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Statut du problème**

## Logical Model: Modèle logique métier - FR LM Statut du problème 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-statut-probleme | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMStatutProbleme |

 
Statut du problème. 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Problème](StructureDefinition-fr-lm-probleme.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-statut-probleme)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-statut-probleme.csv), [Excel](StructureDefinition-fr-lm-statut-probleme.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-statut-probleme",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-statut-probleme",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMStatutProbleme",
  "title" : "Modèle logique métier - FR LM Statut du problème",
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
  "description" : "Statut du problème.",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-statut-probleme",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-statut-probleme",
      "path" : "fr-lm-statut-probleme",
      "short" : "Modèle logique métier - FR LM Statut du problème",
      "definition" : "Statut du problème."
    },
    {
      "id" : "fr-lm-statut-probleme.codeStatutProbleme",
      "path" : "fr-lm-statut-probleme.codeStatutProbleme",
      "short" : "Code de l'entrée",
      "definition" : "Code de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-statut-probleme.descriptionNarrative",
      "path" : "fr-lm-statut-probleme.descriptionNarrative",
      "short" : "Description narrative de l'entrée",
      "definition" : "Description narrative de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-statut-probleme.statutEntree",
      "path" : "fr-lm-statut-probleme.statutEntree",
      "short" : "Statut de l'entrée. Fixé à la valeur 'completed'",
      "definition" : "Statut de l'entrée. Fixé à la valeur 'completed'",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-statut-probleme.statutProbleme",
      "path" : "fr-lm-statut-probleme.statutProbleme",
      "short" : "Valeur",
      "definition" : "Valeur",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    }]
  }
}

```
