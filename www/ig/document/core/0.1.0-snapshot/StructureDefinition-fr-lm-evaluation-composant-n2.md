# Modèle logique métier - FR LM Evaluation Composant N2 - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Evaluation Composant N2**

## Logical Model: Modèle logique métier - FR LM Evaluation Composant N2 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-evaluation-composant-n2 | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMEvaluationComposantN2 |

 
Evaluation Composant N2 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Evaluation Composant](StructureDefinition-fr-lm-evaluation-composant.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-evaluation-composant-n2)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-evaluation-composant-n2.csv), [Excel](StructureDefinition-fr-lm-evaluation-composant-n2.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-evaluation-composant-n2",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-evaluation-composant-n2",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMEvaluationComposantN2",
  "title" : "Modèle logique métier - FR LM Evaluation Composant N2",
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
  "description" : "Evaluation Composant N2",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-evaluation-composant-n2",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-evaluation-composant-n2",
      "path" : "fr-lm-evaluation-composant-n2",
      "short" : "Modèle logique métier - FR LM Evaluation Composant N2",
      "definition" : "Evaluation Composant N2"
    },
    {
      "id" : "fr-lm-evaluation-composant-n2.identifiant",
      "path" : "fr-lm-evaluation-composant-n2.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-evaluation-composant-n2.codeEvaluation",
      "path" : "fr-lm-evaluation-composant-n2.codeEvaluation",
      "short" : "Code de l'évaluation",
      "definition" : "Code de l'évaluation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-evaluation-composant-n2.description",
      "path" : "fr-lm-evaluation-composant-n2.description",
      "short" : "Description narrative",
      "definition" : "Description narrative",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-evaluation-composant-n2.statut",
      "path" : "fr-lm-evaluation-composant-n2.statut",
      "short" : "Statut de l'entrée",
      "definition" : "Statut de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }],
      "patternCode" : "completed"
    },
    {
      "id" : "fr-lm-evaluation-composant-n2.horodatage",
      "path" : "fr-lm-evaluation-composant-n2.horodatage",
      "short" : "Horodatage de l'entrée",
      "definition" : "Horodatage de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-evaluation-composant-n2.resultat",
      "path" : "fr-lm-evaluation-composant-n2.resultat",
      "short" : "Résultat de l'évaluation",
      "definition" : "Résultat de l'évaluation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-evaluation-composant-n2.interpretation",
      "path" : "fr-lm-evaluation-composant-n2.interpretation",
      "short" : "Interprétation",
      "definition" : "Interprétation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-evaluation-composant-n2.commentaire",
      "path" : "fr-lm-evaluation-composant-n2.commentaire",
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
