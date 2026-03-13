# Modèle logique métier - FR LM Allergie ou Hypersensibilité - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Allergie ou Hypersensibilité**

## Logical Model: Modèle logique métier - FR LM Allergie ou Hypersensibilité 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-allergie-ou-hypersensibilite | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRLMAllergieOuHypersensibilite |

 
Allergie ou hypersensibilite 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Allergies et hypersensibilités](StructureDefinition-fr-lm-allergies-et-hypersensibilites.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-allergie-ou-hypersensibilite)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-allergie-ou-hypersensibilite.csv), [Excel](StructureDefinition-fr-lm-allergie-ou-hypersensibilite.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-allergie-ou-hypersensibilite",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-allergie-ou-hypersensibilite",
  "version" : "0.1.0",
  "name" : "FRLMAllergieOuHypersensibilite",
  "title" : "Modèle logique métier - FR LM Allergie ou Hypersensibilité",
  "status" : "draft",
  "date" : "2026-03-13T22:56:29+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Allergie ou hypersensibilite",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-allergie-ou-hypersensibilite",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-allergie-ou-hypersensibilite",
      "path" : "fr-lm-allergie-ou-hypersensibilite",
      "short" : "Modèle logique métier - FR LM Allergie ou Hypersensibilité",
      "definition" : "Allergie ou hypersensibilite"
    },
    {
      "id" : "fr-lm-allergie-ou-hypersensibilite.identifiant",
      "path" : "fr-lm-allergie-ou-hypersensibilite.identifiant",
      "short" : "Identifiant de l’entrée",
      "definition" : "Identifiant de l’entrée",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-allergie-ou-hypersensibilite.description",
      "path" : "fr-lm-allergie-ou-hypersensibilite.description",
      "short" : "Partie narrative de l’entrée",
      "definition" : "Partie narrative de l’entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-allergie-ou-hypersensibilite.type",
      "path" : "fr-lm-allergie-ou-hypersensibilite.type",
      "short" : "Type d'allergie / hypersensibilité non allergique / intolérance / idiosyncrasie",
      "definition" : "Type d'allergie / hypersensibilité non allergique / intolérance / idiosyncrasie",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-allergie-ou-hypersensibilite.statut",
      "path" : "fr-lm-allergie-ou-hypersensibilite.statut",
      "short" : "Statut de l’entrée",
      "definition" : "Statut de l’entrée",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }],
      "patternCode" : "completed"
    },
    {
      "id" : "fr-lm-allergie-ou-hypersensibilite.date",
      "path" : "fr-lm-allergie-ou-hypersensibilite.date",
      "short" : "Date de début",
      "definition" : "Date de début",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-allergie-ou-hypersensibilite.participant",
      "path" : "fr-lm-allergie-ou-hypersensibilite.participant",
      "short" : "Agent responsable",
      "definition" : "Agent responsable",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-participant-corps"
      }]
    },
    {
      "id" : "fr-lm-allergie-ou-hypersensibilite.probleme",
      "path" : "fr-lm-allergie-ou-hypersensibilite.probleme",
      "short" : "Réaction observée",
      "definition" : "Réaction observée",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-probleme"
      }]
    },
    {
      "id" : "fr-lm-allergie-ou-hypersensibilite.statutClique",
      "path" : "fr-lm-allergie-ou-hypersensibilite.statutClique",
      "short" : "Statut clinique de l'allergie",
      "definition" : "Statut clinique de l'allergie",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "description" : "HL7_allergyintolerance-clinical"
      }
    },
    {
      "id" : "fr-lm-allergie-ou-hypersensibilite.certitude",
      "path" : "fr-lm-allergie-ou-hypersensibilite.certitude",
      "short" : "Certitude",
      "definition" : "Certitude",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-certitude"
      }],
      "binding" : {
        "description" : "HL7_condition-ver-status"
      }
    },
    {
      "id" : "fr-lm-allergie-ou-hypersensibilite.criticite",
      "path" : "fr-lm-allergie-ou-hypersensibilite.criticite",
      "short" : "Criticité",
      "definition" : "Criticité",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-criticite"
      }],
      "binding" : {
        "description" : "HL7_allergy_intolerance_criticality"
      }
    }]
  }
}

```
