# Modèle logique métier - FR LM Recherche de micro organismes - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Recherche de micro organismes**

## Logical Model: Modèle logique métier - FR LM Recherche de micro organismes 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-recherche-de-micro-organismes | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMRechercheDeMicroOrganismes |

 
Recherche de micro organismes 

**Utilisations:**

* Ce Modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-recherche-de-micro-organismes)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-recherche-de-micro-organismes.csv), [Excel](StructureDefinition-fr-lm-recherche-de-micro-organismes.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-recherche-de-micro-organismes",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-recherche-de-micro-organismes",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMRechercheDeMicroOrganismes",
  "title" : "Modèle logique métier - FR LM Recherche de micro organismes",
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
  "description" : "Recherche de micro organismes",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-recherche-de-micro-organismes",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-recherche-de-micro-organismes",
      "path" : "fr-lm-recherche-de-micro-organismes",
      "short" : "Modèle logique métier - FR LM Recherche de micro organismes",
      "definition" : "Recherche de micro organismes"
    },
    {
      "id" : "fr-lm-recherche-de-micro-organismes.identifiant",
      "path" : "fr-lm-recherche-de-micro-organismes.identifiant",
      "short" : "Identifiant de l’observation",
      "definition" : "Identifiant de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-recherche-de-micro-organismes.code",
      "path" : "fr-lm-recherche-de-micro-organismes.code",
      "short" : "Code de l’observation",
      "definition" : "Code de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-recherche-de-micro-organismes.description",
      "path" : "fr-lm-recherche-de-micro-organismes.description",
      "short" : "Description narrative de l’observation",
      "definition" : "Description narrative de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-recherche-de-micro-organismes.statut",
      "path" : "fr-lm-recherche-de-micro-organismes.statut",
      "short" : "Statut de l’observation. Fixé à la valeur 'completed'",
      "definition" : "Statut de l’observation. Fixé à la valeur 'completed'",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-recherche-de-micro-organismes.date",
      "path" : "fr-lm-recherche-de-micro-organismes.date",
      "short" : "Date de l’observation",
      "definition" : "Date de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-recherche-de-micro-organismes.valeur",
      "path" : "fr-lm-recherche-de-micro-organismes.valeur",
      "short" : "Valeur de l’observation",
      "definition" : "Valeur de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "boolean"
      }]
    },
    {
      "id" : "fr-lm-recherche-de-micro-organismes.auteur",
      "path" : "fr-lm-recherche-de-micro-organismes.auteur",
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
