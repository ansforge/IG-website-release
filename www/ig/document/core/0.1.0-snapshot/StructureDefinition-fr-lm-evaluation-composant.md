# Modèle logique métier - FR LM Evaluation Composant - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Evaluation Composant**

## Logical Model: Modèle logique métier - FR LM Evaluation Composant 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-evaluation-composant | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRLMEvaluationComposant |

 
Evaluation Composant 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Evaluation](StructureDefinition-fr-lm-evaluation.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-evaluation-composant)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-evaluation-composant.csv), [Excel](StructureDefinition-fr-lm-evaluation-composant.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-evaluation-composant",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-evaluation-composant",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMEvaluationComposant",
  "title" : "Modèle logique métier - FR LM Evaluation Composant",
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
  "description" : "Evaluation Composant",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-evaluation-composant",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-evaluation-composant",
      "path" : "fr-lm-evaluation-composant",
      "short" : "Modèle logique métier - FR LM Evaluation Composant",
      "definition" : "Evaluation Composant"
    },
    {
      "id" : "fr-lm-evaluation-composant.identifiant",
      "path" : "fr-lm-evaluation-composant.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-evaluation-composant.codeEvaluation",
      "path" : "fr-lm-evaluation-composant.codeEvaluation",
      "short" : "Code de l'évaluation",
      "definition" : "Code de l'évaluation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-evaluation-composant.description",
      "path" : "fr-lm-evaluation-composant.description",
      "short" : "Description narrative",
      "definition" : "Description narrative",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-evaluation-composant.statut",
      "path" : "fr-lm-evaluation-composant.statut",
      "short" : "Statut de l'entrée",
      "definition" : "Statut de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-evaluation-composant.horodatage",
      "path" : "fr-lm-evaluation-composant.horodatage",
      "short" : "Horodatage de l'entrée",
      "definition" : "Horodatage de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-evaluation-composant.resultat",
      "path" : "fr-lm-evaluation-composant.resultat",
      "short" : "Résultat de l'évaluation",
      "definition" : "Résultat de l'évaluation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-evaluation-composant.interpretation",
      "path" : "fr-lm-evaluation-composant.interpretation",
      "short" : "Interprétation",
      "definition" : "Interprétation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-evaluation-composant.composantEvaluation",
      "path" : "fr-lm-evaluation-composant.composantEvaluation",
      "short" : "Sous-composant de l'évaluation",
      "definition" : "Sous-composant de l'évaluation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-evaluation-composant-n2"
      }]
    },
    {
      "id" : "fr-lm-evaluation-composant.commentaire",
      "path" : "fr-lm-evaluation-composant.commentaire",
      "short" : "Commentaire",
      "definition" : "Commentaire",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-commentaire-er"
      }]
    }]
  }
}

```
