# Modèle logique métier - FR LM Groupe de questionnaires d'évalutation - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Groupe de questionnaires d'évalutation**

## Logical Model: Modèle logique métier - FR LM Groupe de questionnaires d'évalutation 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-group-de-questionnaires-devaluation | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMGroupDeQuestionnairesDevaluation |

 
Groupe de questionnaires d’évalutation 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Fonctions physiques](StructureDefinition-fr-lm-fonctions-physiques.md) and [Modèle logique métier - FR LM Statut fonctionnel](StructureDefinition-fr-lm-statut-fonctionnel.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-group-de-questionnaires-devaluation)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-group-de-questionnaires-devaluation.csv), [Excel](StructureDefinition-fr-lm-group-de-questionnaires-devaluation.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-group-de-questionnaires-devaluation",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-group-de-questionnaires-devaluation",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMGroupDeQuestionnairesDevaluation",
  "title" : "Modèle logique métier - FR LM Groupe de questionnaires d'évalutation",
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
  "description" : "Groupe de questionnaires d'évalutation",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-group-de-questionnaires-devaluation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-group-de-questionnaires-devaluation",
      "path" : "fr-lm-group-de-questionnaires-devaluation",
      "short" : "Modèle logique métier - FR LM Groupe de questionnaires d'évalutation",
      "definition" : "Groupe de questionnaires d'évalutation"
    },
    {
      "id" : "fr-lm-group-de-questionnaires-devaluation.identifiant",
      "path" : "fr-lm-group-de-questionnaires-devaluation.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-group-de-questionnaires-devaluation.code",
      "path" : "fr-lm-group-de-questionnaires-devaluation.code",
      "short" : "Code de l'entrée",
      "definition" : "Code de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-group-de-questionnaires-devaluation.statut",
      "path" : "fr-lm-group-de-questionnaires-devaluation.statut",
      "short" : "Statut de l'entrée",
      "definition" : "Statut de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-group-de-questionnaires-devaluation.horodatage",
      "path" : "fr-lm-group-de-questionnaires-devaluation.horodatage",
      "short" : "Horodatage de l'entrée",
      "definition" : "Horodatage de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-group-de-questionnaires-devaluation.evaluation",
      "path" : "fr-lm-group-de-questionnaires-devaluation.evaluation",
      "short" : "Évaluation",
      "definition" : "Évaluation",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-evaluation"
      }]
    }]
  }
}

```
