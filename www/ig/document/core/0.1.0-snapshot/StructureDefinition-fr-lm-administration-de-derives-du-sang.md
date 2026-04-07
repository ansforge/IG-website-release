# Modèle logique métier - FR LM Administration de dérivés du sang - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Administration de dérivés du sang**

## Logical Model: Modèle logique métier - FR LM Administration de dérivés du sang 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-administration-de-derives-du-sang | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMAdministrationDeDerivesDuSang |

 
Administration de dérivés du sang 

**Utilisations:**

* Ce Modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-administration-de-derives-du-sang)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-administration-de-derives-du-sang.csv), [Excel](StructureDefinition-fr-lm-administration-de-derives-du-sang.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-administration-de-derives-du-sang",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-administration-de-derives-du-sang",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMAdministrationDeDerivesDuSang",
  "title" : "Modèle logique métier - FR LM Administration de dérivés du sang",
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
  "description" : "Administration de dérivés du sang",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-administration-de-derives-du-sang",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-administration-de-derives-du-sang",
      "path" : "fr-lm-administration-de-derives-du-sang",
      "short" : "Modèle logique métier - FR LM Administration de dérivés du sang",
      "definition" : "Administration de dérivés du sang"
    },
    {
      "id" : "fr-lm-administration-de-derives-du-sang.identifiant",
      "path" : "fr-lm-administration-de-derives-du-sang.identifiant",
      "short" : "Identifiant de l’observation",
      "definition" : "Identifiant de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-administration-de-derives-du-sang.code",
      "path" : "fr-lm-administration-de-derives-du-sang.code",
      "short" : "Code de l’observation",
      "definition" : "Code de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-administration-de-derives-du-sang.description",
      "path" : "fr-lm-administration-de-derives-du-sang.description",
      "short" : "Description narrative de l’observation",
      "definition" : "Description narrative de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-administration-de-derives-du-sang.statut",
      "path" : "fr-lm-administration-de-derives-du-sang.statut",
      "short" : "Statut de l’observation. Fixé à 'completed'",
      "definition" : "Statut de l’observation. Fixé à 'completed'",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-administration-de-derives-du-sang.date",
      "path" : "fr-lm-administration-de-derives-du-sang.date",
      "short" : "Date de l’observation",
      "definition" : "Date de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-administration-de-derives-du-sang.valeur",
      "path" : "fr-lm-administration-de-derives-du-sang.valeur",
      "short" : "Administration de dérivés du sang",
      "definition" : "Administration de dérivés du sang",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "boolean"
      }]
    },
    {
      "id" : "fr-lm-administration-de-derives-du-sang.auteur",
      "path" : "fr-lm-administration-de-derives-du-sang.auteur",
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
