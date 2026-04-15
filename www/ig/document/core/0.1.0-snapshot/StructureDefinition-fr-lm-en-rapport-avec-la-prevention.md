# Modèle logique métier - FR LM En rapport avec la prevention - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM En rapport avec la prevention**

## Logical Model: Modèle logique métier - FR LM En rapport avec la prevention 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-en-rapport-avec-la-prevention | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRLMEnRapportAvecLaPrevention |

 
En rapport avec la prevention 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Traitement Prescrit](StructureDefinition-fr-lm-traitement-prescrit.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-en-rapport-avec-la-prevention)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-en-rapport-avec-la-prevention.csv), [Excel](StructureDefinition-fr-lm-en-rapport-avec-la-prevention.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-en-rapport-avec-la-prevention",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-en-rapport-avec-la-prevention",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMEnRapportAvecLaPrevention",
  "title" : "Modèle logique métier - FR LM En rapport avec la prevention",
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
  "description" : "En rapport avec la prevention",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-en-rapport-avec-la-prevention",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-en-rapport-avec-la-prevention",
      "path" : "fr-lm-en-rapport-avec-la-prevention",
      "short" : "Modèle logique métier - FR LM En rapport avec la prevention",
      "definition" : "En rapport avec la prevention"
    },
    {
      "id" : "fr-lm-en-rapport-avec-la-prevention.identifiant",
      "path" : "fr-lm-en-rapport-avec-la-prevention.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-en-rapport-avec-la-prevention.code",
      "path" : "fr-lm-en-rapport-avec-la-prevention.code",
      "short" : "Catégorie de l'entrée",
      "definition" : "Catégorie de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-en-rapport-avec-la-prevention.description",
      "path" : "fr-lm-en-rapport-avec-la-prevention.description",
      "short" : "Description narrative",
      "definition" : "Description narrative",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-en-rapport-avec-la-prevention.statut",
      "path" : "fr-lm-en-rapport-avec-la-prevention.statut",
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
      "id" : "fr-lm-en-rapport-avec-la-prevention.horodatage",
      "path" : "fr-lm-en-rapport-avec-la-prevention.horodatage",
      "short" : "Horodatage de l'entrée",
      "definition" : "Horodatage de l'entrée",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-en-rapport-avec-la-prevention.resultat",
      "path" : "fr-lm-en-rapport-avec-la-prevention.resultat",
      "short" : "Résultat de l'observation",
      "definition" : "Résultat de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-en-rapport-avec-la-prevention.auteur",
      "path" : "fr-lm-en-rapport-avec-la-prevention.auteur",
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
