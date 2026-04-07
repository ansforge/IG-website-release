# Modèle logique métier - FR LM Modalité d'entrée - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Modalité d'entrée**

## Logical Model: Modèle logique métier - FR LM Modalité d'entrée 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-modalite-entree | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMModaliteEntree |

 
Modalité d’entrée 

**Utilisations:**

* Ce Modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-modalite-entree)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-modalite-entree.csv), [Excel](StructureDefinition-fr-lm-modalite-entree.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-modalite-entree",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-modalite-entree",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMModaliteEntree",
  "title" : "Modèle logique métier - FR LM Modalité d'entrée",
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
  "description" : "Modalité d'entrée",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-modalite-entree",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-modalite-entree",
      "path" : "fr-lm-modalite-entree",
      "short" : "Modèle logique métier - FR LM Modalité d'entrée",
      "definition" : "Modalité d'entrée"
    },
    {
      "id" : "fr-lm-modalite-entree.identifiant",
      "path" : "fr-lm-modalite-entree.identifiant",
      "short" : "Identifiant de l’observation",
      "definition" : "Identifiant de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-modalite-entree.code",
      "path" : "fr-lm-modalite-entree.code",
      "short" : "Code de l’observation",
      "definition" : "Code de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-modalite-entree.description",
      "path" : "fr-lm-modalite-entree.description",
      "short" : "Description narrative de l’observation",
      "definition" : "Description narrative de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-modalite-entree.statut",
      "path" : "fr-lm-modalite-entree.statut",
      "short" : "Statut de l’observation. Fixé à la valeur 'completed'",
      "definition" : "Statut de l’observation. Fixé à la valeur 'completed'",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-modalite-entree.date",
      "path" : "fr-lm-modalite-entree.date",
      "short" : "Date de l’observation",
      "definition" : "Date de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-modalite-entree.modaliteEntree",
      "path" : "fr-lm-modalite-entree.modaliteEntree",
      "short" : "Modalité d'entrée",
      "definition" : "Modalité d'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "description" : "jdv-modalite-entree-cisis (1.2.250.1.213.1.1.5.73)"
      }
    },
    {
      "id" : "fr-lm-modalite-entree.auteur",
      "path" : "fr-lm-modalite-entree.auteur",
      "short" : "Auteur",
      "definition" : "Auteur",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    }]
  }
}

```
