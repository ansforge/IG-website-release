# Modèle logique métier - FR LM Fonctions physiques - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Fonctions physiques**

## Logical Model: Modèle logique métier - FR LM Fonctions physiques 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-fonctions-physiques | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMFonctionsPhysiques |

 
Section Fonctions physiques 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-fonctions-physiques)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-fonctions-physiques.csv), [Excel](StructureDefinition-fr-lm-fonctions-physiques.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-fonctions-physiques",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-fonctions-physiques",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMFonctionsPhysiques",
  "title" : "Modèle logique métier - FR LM Fonctions physiques",
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
  "description" : "Section Fonctions physiques",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-fonctions-physiques",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-fonctions-physiques",
      "path" : "fr-lm-fonctions-physiques",
      "short" : "Modèle logique métier - FR LM Fonctions physiques",
      "definition" : "Section Fonctions physiques"
    },
    {
      "id" : "fr-lm-fonctions-physiques.sousSection",
      "path" : "fr-lm-fonctions-physiques.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-fonctions-physiques.entree.groupeQuestionnairesEvaluation",
      "path" : "fr-lm-fonctions-physiques.entree.groupeQuestionnairesEvaluation",
      "short" : "Groupe de questionnaires d'évalutation",
      "definition" : "Groupe de questionnaires d'évalutation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-group-de-questionnaires-devaluation"
      }]
    },
    {
      "id" : "fr-lm-fonctions-physiques.entree.evalutation",
      "path" : "fr-lm-fonctions-physiques.entree.evalutation",
      "short" : "Entrée Evalutation",
      "definition" : "Entrée Evalutation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-evaluation"
      }]
    }]
  }
}

```
