# Modèle logique métier - FR LM Sujet - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Sujet**

## Logical Model: Modèle logique métier - FR LM Sujet 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-sujet | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMSujet |

 
Sujet 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Antécédents familiaux](StructureDefinition-fr-lm-antecedents-familiaux-entree.md) and [Modèle logique métier - FR LM Naissance](StructureDefinition-fr-lm-naissance.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-sujet)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-sujet.csv), [Excel](StructureDefinition-fr-lm-sujet.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-sujet",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-sujet",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMSujet",
  "title" : "Modèle logique métier - FR LM Sujet",
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
  "description" : "Sujet",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-sujet",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-sujet",
      "path" : "fr-lm-sujet",
      "short" : "Modèle logique métier - FR LM Sujet",
      "definition" : "Sujet"
    },
    {
      "id" : "fr-lm-sujet.lienPatient",
      "path" : "fr-lm-sujet.lienPatient",
      "short" : "Lien avec le patient",
      "definition" : "Lien avec le patient",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-sujet.adresse",
      "path" : "fr-lm-sujet.adresse",
      "short" : "Adresse",
      "definition" : "Adresse",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Address"
      }]
    },
    {
      "id" : "fr-lm-sujet.telecom",
      "path" : "fr-lm-sujet.telecom",
      "short" : "Télécom",
      "definition" : "Télécom",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "ContactPoint"
      }]
    },
    {
      "id" : "fr-lm-sujet.sujet",
      "path" : "fr-lm-sujet.sujet",
      "short" : "Sujet",
      "definition" : "Sujet",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "fr-lm-sujet.sujet.identifiants",
      "path" : "fr-lm-sujet.sujet.identifiants",
      "short" : "Identifiants du sujet",
      "definition" : "Identifiants du sujet",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-sujet.sujet.nomPrenom",
      "path" : "fr-lm-sujet.sujet.nomPrenom",
      "short" : "Nom et prénom",
      "definition" : "Nom et prénom",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-sujet.sujet.nomPrenom.nom",
      "path" : "fr-lm-sujet.sujet.nomPrenom.nom",
      "short" : "Nom",
      "definition" : "Nom",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-sujet.sujet.nomPrenom.prenom",
      "path" : "fr-lm-sujet.sujet.nomPrenom.prenom",
      "short" : "Prénom",
      "definition" : "Prénom",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-sujet.sujet.nomPrenom.civilite",
      "path" : "fr-lm-sujet.sujet.nomPrenom.civilite",
      "short" : "Civilité",
      "definition" : "Civilité",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-sujet.sujet.nomPrenom.titre",
      "path" : "fr-lm-sujet.sujet.nomPrenom.titre",
      "short" : "Titre",
      "definition" : "Titre",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-sujet.sujet.sexeSujet",
      "path" : "fr-lm-sujet.sujet.sexeSujet",
      "short" : "Sexe du sujet",
      "definition" : "Sexe du sujet",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-sujet.sujet.dateNaissanceSujet",
      "path" : "fr-lm-sujet.sujet.dateNaissanceSujet",
      "short" : "Date de naissance du sujet",
      "definition" : "Date de naissance du sujet",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-sujet.sujet.sujetDecede",
      "path" : "fr-lm-sujet.sujet.sujetDecede",
      "short" : "Sujet décédé",
      "definition" : "Sujet décédé",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "boolean"
      }]
    },
    {
      "id" : "fr-lm-sujet.sujet.dateHeureDeces",
      "path" : "fr-lm-sujet.sujet.dateHeureDeces",
      "short" : "Date et heure du décès",
      "definition" : "Date et heure du décès",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-sujet.sujet.naissanceMultiple",
      "path" : "fr-lm-sujet.sujet.naissanceMultiple",
      "short" : "Sujet né d’une naissance multiple",
      "definition" : "Sujet né d’une naissance multiple",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "boolean"
      }]
    },
    {
      "id" : "fr-lm-sujet.sujet.rangNaissance",
      "path" : "fr-lm-sujet.sujet.rangNaissance",
      "short" : "Rang de naissance (en cas de naissances multiples)",
      "definition" : "Rang de naissance (en cas de naissances multiples)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
