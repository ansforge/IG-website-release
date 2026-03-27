# Modèle logique métier - FR LM Signe vital observé - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Signe vital observé**

## Logical Model: Modèle logique métier - FR LM Signe vital observé 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-signe-vital-observe | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMSigneVitalObserve |

 
Signe vital observé 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Signe vital](StructureDefinition-fr-lm-signe-vital.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-signe-vital-observe)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-signe-vital-observe.csv), [Excel](StructureDefinition-fr-lm-signe-vital-observe.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-signe-vital-observe",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-signe-vital-observe",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMSigneVitalObserve",
  "title" : "Modèle logique métier - FR LM Signe vital observé",
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
  "description" : "Signe vital observé",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-signe-vital-observe",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-signe-vital-observe",
      "path" : "fr-lm-signe-vital-observe",
      "short" : "Modèle logique métier - FR LM Signe vital observé",
      "definition" : "Signe vital observé"
    },
    {
      "id" : "fr-lm-signe-vital-observe.identifiant",
      "path" : "fr-lm-signe-vital-observe.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-signe-vital-observe.code",
      "path" : "fr-lm-signe-vital-observe.code",
      "short" : "Code de l'entrée. Signe vital observé",
      "definition" : "Code de l'entrée. Signe vital observé",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-signe-vital-observe.description",
      "path" : "fr-lm-signe-vital-observe.description",
      "short" : "Description narrative",
      "definition" : "Description narrative",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-signe-vital-observe.statut",
      "path" : "fr-lm-signe-vital-observe.statut",
      "short" : "Statut de l'entrée",
      "definition" : "Statut de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-signe-vital-observe.date",
      "path" : "fr-lm-signe-vital-observe.date",
      "short" : "Date de l'observation",
      "definition" : "Date de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-signe-vital-observe.observationEffectuee",
      "path" : "fr-lm-signe-vital-observe.observationEffectuee",
      "short" : "Observation effectuée",
      "definition" : "Observation effectuée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Quantity"
      }]
    },
    {
      "id" : "fr-lm-signe-vital-observe.interpretation",
      "path" : "fr-lm-signe-vital-observe.interpretation",
      "short" : "Interprétation",
      "definition" : "Interprétation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-signe-vital-observe.methodeUtilisee",
      "path" : "fr-lm-signe-vital-observe.methodeUtilisee",
      "short" : "Méthode utilisée pour l'observation",
      "definition" : "Méthode utilisée pour l'observation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-signe-vital-observe.siteObservation",
      "path" : "fr-lm-signe-vital-observe.siteObservation",
      "short" : "Site de l'observation",
      "definition" : "Site de l'observation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-signe-vital-observe.auteur",
      "path" : "fr-lm-signe-vital-observe.auteur",
      "short" : "Auteur",
      "definition" : "Auteur",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    }]
  }
}

```
