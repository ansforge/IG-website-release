# Modèle logique métier - FR LM Demande d'examen ou de suivi - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Demande d'examen ou de suivi**

## Logical Model: Modèle logique métier - FR LM Demande d'examen ou de suivi 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-demande-examen-ou-suivi | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMDemandeExamenOuSuivi |

 
Demande d’examen ou de suivi / Objectif à atteindre 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Observation Result](StructureDefinition-fr-lm-observation-result.md) and [Modèle logique métier - FR LM Plan de soins](StructureDefinition-fr-lm-plan-soins.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-demande-examen-ou-suivi)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-demande-examen-ou-suivi.csv), [Excel](StructureDefinition-fr-lm-demande-examen-ou-suivi.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-demande-examen-ou-suivi",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-demande-examen-ou-suivi",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMDemandeExamenOuSuivi",
  "title" : "Modèle logique métier - FR LM Demande d'examen ou de suivi",
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
  "description" : "Demande d'examen ou de suivi / Objectif à atteindre",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-demande-examen-ou-suivi",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-demande-examen-ou-suivi",
      "path" : "fr-lm-demande-examen-ou-suivi",
      "short" : "Modèle logique métier - FR LM Demande d'examen ou de suivi",
      "definition" : "Demande d'examen ou de suivi / Objectif à atteindre"
    },
    {
      "id" : "fr-lm-demande-examen-ou-suivi.identifiant",
      "path" : "fr-lm-demande-examen-ou-suivi.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-demande-examen-ou-suivi.typeDemande",
      "path" : "fr-lm-demande-examen-ou-suivi.typeDemande",
      "short" : "Type de la demande",
      "definition" : "Type de la demande",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-demande-examen-ou-suivi.description",
      "path" : "fr-lm-demande-examen-ou-suivi.description",
      "short" : "Description narrative de l'entrée",
      "definition" : "Description narrative de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-demande-examen-ou-suivi.statutDemande",
      "path" : "fr-lm-demande-examen-ou-suivi.statutDemande",
      "short" : "Statut de la demande",
      "definition" : "Statut de la demande",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-demande-examen-ou-suivi.date",
      "path" : "fr-lm-demande-examen-ou-suivi.date",
      "short" : "Date prévisionnelle de l'examen, du suivi, de l'objectif",
      "definition" : "Date prévisionnelle de l'examen, du suivi, de l'objectif",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-demande-examen-ou-suivi.resultat",
      "path" : "fr-lm-demande-examen-ou-suivi.resultat",
      "short" : "Résultat de la demande",
      "definition" : "Résultat de la demande",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-demande-examen-ou-suivi.interpretation",
      "path" : "fr-lm-demande-examen-ou-suivi.interpretation",
      "short" : "Interprétation",
      "definition" : "Interprétation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-demande-examen-ou-suivi.methode",
      "path" : "fr-lm-demande-examen-ou-suivi.methode",
      "short" : "Méthode",
      "definition" : "Méthode",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-demande-examen-ou-suivi.cible",
      "path" : "fr-lm-demande-examen-ou-suivi.cible",
      "short" : "Cible",
      "definition" : "Cible",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-demande-examen-ou-suivi.auteur",
      "path" : "fr-lm-demande-examen-ou-suivi.auteur",
      "short" : "Auteur de la demande",
      "definition" : "Auteur de la demande",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    }]
  }
}

```
