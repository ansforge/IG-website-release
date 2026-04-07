# Modèle logique métier - FR LM Modalité de sortie - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Modalité de sortie**

## Logical Model: Modèle logique métier - FR LM Modalité de sortie 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-modalite-sortie | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMModaliteSortie |

 
Modalité de sortie 

**Utilisations:**

* Ce Modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-modalite-sortie)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-modalite-sortie.csv), [Excel](StructureDefinition-fr-lm-modalite-sortie.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-modalite-sortie",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-modalite-sortie",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMModaliteSortie",
  "title" : "Modèle logique métier - FR LM Modalité de sortie",
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
  "description" : "Modalité de sortie",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-modalite-sortie",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-modalite-sortie",
      "path" : "fr-lm-modalite-sortie",
      "short" : "Modèle logique métier - FR LM Modalité de sortie",
      "definition" : "Modalité de sortie"
    },
    {
      "id" : "fr-lm-modalite-sortie.identifiant",
      "path" : "fr-lm-modalite-sortie.identifiant",
      "short" : "Identifiant de l’observation",
      "definition" : "Identifiant de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-modalite-sortie.code",
      "path" : "fr-lm-modalite-sortie.code",
      "short" : "Code de l’observation",
      "definition" : "Code de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-modalite-sortie.description",
      "path" : "fr-lm-modalite-sortie.description",
      "short" : "Description narrative de l’observation",
      "definition" : "Description narrative de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-modalite-sortie.statut",
      "path" : "fr-lm-modalite-sortie.statut",
      "short" : "Statut de l’observation. Fixé à la valeur 'completed'",
      "definition" : "Statut de l’observation. Fixé à la valeur 'completed'",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-modalite-sortie.date",
      "path" : "fr-lm-modalite-sortie.date",
      "short" : "Date de l’observation",
      "definition" : "Date de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-modalite-sortie.modaliteSortie",
      "path" : "fr-lm-modalite-sortie.modaliteSortie",
      "short" : "Modalité d'entrée",
      "definition" : "Modalité d'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "description" : "jdv-modalite-sortie-CISIS (1.2.250.1.213.1.1.5.74) ou autre JDV spécifique à un volet"
      }
    },
    {
      "id" : "fr-lm-modalite-sortie.auteur",
      "path" : "fr-lm-modalite-sortie.auteur",
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
