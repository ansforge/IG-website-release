# Modèle logique métier - FR LM Evaluation - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Evaluation**

## Logical Model: Modèle logique métier - FR LM Evaluation 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-evaluation | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMEvaluation |

 
Evaluation 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Fonctions physiques](StructureDefinition-fr-lm-fonctions-physiques.md) and [Modèle logique métier - FR LM Groupe de questionnaires d'évalutation](StructureDefinition-fr-lm-group-de-questionnaires-devaluation.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-evaluation)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-evaluation.csv), [Excel](StructureDefinition-fr-lm-evaluation.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-evaluation",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-evaluation",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMEvaluation",
  "title" : "Modèle logique métier - FR LM Evaluation",
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
  "description" : "Evaluation",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-evaluation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-evaluation",
      "path" : "fr-lm-evaluation",
      "short" : "Modèle logique métier - FR LM Evaluation",
      "definition" : "Evaluation"
    },
    {
      "id" : "fr-lm-evaluation.identifiant",
      "path" : "fr-lm-evaluation.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-evaluation.typeEvaluation",
      "path" : "fr-lm-evaluation.typeEvaluation",
      "short" : "Code de l'entrée. Type d'évaluation",
      "definition" : "Code de l'entrée. Type d'évaluation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-evaluation.description",
      "path" : "fr-lm-evaluation.description",
      "short" : "Description narrative",
      "definition" : "Description narrative",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-evaluation.statut",
      "path" : "fr-lm-evaluation.statut",
      "short" : "Statut de l'entrée",
      "definition" : "Statut de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-evaluation.date",
      "path" : "fr-lm-evaluation.date",
      "short" : "Date",
      "definition" : "Date",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-evaluation.valeur",
      "path" : "fr-lm-evaluation.valeur",
      "short" : "Valeur de l'évaluation",
      "definition" : "Valeur de l'évaluation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-evaluation.interpretation",
      "path" : "fr-lm-evaluation.interpretation",
      "short" : "Interprétation",
      "definition" : "Interprétation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-evaluation.evaluateur",
      "path" : "fr-lm-evaluation.evaluateur",
      "short" : "Evaluateur",
      "definition" : "Evaluateur",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-personne-structure"
      }]
    },
    {
      "id" : "fr-lm-evaluation.auteurEvaluation",
      "path" : "fr-lm-evaluation.auteurEvaluation",
      "short" : "Auteur de l'évaluation",
      "definition" : "Auteur de l'évaluation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    },
    {
      "id" : "fr-lm-evaluation.responsableEvaluation",
      "path" : "fr-lm-evaluation.responsableEvaluation",
      "short" : "Responsable de l'évaluation",
      "definition" : "Responsable de l'évaluation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-personne-structure"
      }]
    },
    {
      "id" : "fr-lm-evaluation.evaluationComposant",
      "path" : "fr-lm-evaluation.evaluationComposant",
      "short" : "Composants de l'évaluation",
      "definition" : "Composants de l'évaluation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-evaluation-composant"
      }]
    },
    {
      "id" : "fr-lm-evaluation.statutEvaluation",
      "path" : "fr-lm-evaluation.statutEvaluation",
      "short" : "Statut de l’évaluation",
      "definition" : "Statut de l’évaluation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-statut"
      }]
    },
    {
      "id" : "fr-lm-evaluation.commentaire",
      "path" : "fr-lm-evaluation.commentaire",
      "short" : "Commentaire",
      "definition" : "Commentaire",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-commentaire-er"
      }]
    },
    {
      "id" : "fr-lm-evaluation.referenceInterne",
      "path" : "fr-lm-evaluation.referenceInterne",
      "short" : "Reference Interne",
      "definition" : "Reference Interne",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-reference-interne"
      }]
    }]
  }
}

```
