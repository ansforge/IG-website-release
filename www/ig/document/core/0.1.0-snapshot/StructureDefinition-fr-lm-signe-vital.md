# Modèle logique métier - FR LM Signe vital - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Signe vital**

## Logical Model: Modèle logique métier - FR LM Signe vital 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-signe-vital | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMSigneVital |

 
Signe vital 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Signes vitaux](StructureDefinition-fr-lm-signes-vitaux.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-signe-vital)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-signe-vital.csv), [Excel](StructureDefinition-fr-lm-signe-vital.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-signe-vital",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-signe-vital",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMSigneVital",
  "title" : "Modèle logique métier - FR LM Signe vital",
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
  "description" : "Signe vital",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-signe-vital",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-signe-vital",
      "path" : "fr-lm-signe-vital",
      "short" : "Modèle logique métier - FR LM Signe vital",
      "definition" : "Signe vital"
    },
    {
      "id" : "fr-lm-signe-vital.identifiant",
      "path" : "fr-lm-signe-vital.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-signe-vital.code",
      "path" : "fr-lm-signe-vital.code",
      "short" : "Code de l'entrée. Élément observé",
      "definition" : "Code de l'entrée. Élément observé",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-signe-vital.statut",
      "path" : "fr-lm-signe-vital.statut",
      "short" : "Statut de l'entrée",
      "definition" : "Statut de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-signe-vital.date",
      "path" : "fr-lm-signe-vital.date",
      "short" : "Date de l'entrée",
      "definition" : "Date de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-signe-vital.auteur",
      "path" : "fr-lm-signe-vital.auteur",
      "short" : "Auteur",
      "definition" : "Auteur",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    },
    {
      "id" : "fr-lm-signe-vital.signeVital",
      "path" : "fr-lm-signe-vital.signeVital",
      "short" : "Signe vital observé",
      "definition" : "Signe vital observé",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-signe-vital-observe"
      }]
    }]
  }
}

```
