# Modèle logique métier - FR LM Accident transfusionnel - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Accident transfusionnel**

## Logical Model: Modèle logique métier - FR LM Accident transfusionnel 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-accidents-transfusionnels | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMAccidentsTransfusionnels |

 
Accident transfusionnel 

**Utilisations:**

* Ce Modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-accidents-transfusionnels)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-accidents-transfusionnels.csv), [Excel](StructureDefinition-fr-lm-accidents-transfusionnels.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-accidents-transfusionnels",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-accidents-transfusionnels",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMAccidentsTransfusionnels",
  "title" : "Modèle logique métier - FR LM Accident transfusionnel",
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
  "description" : "Accident transfusionnel",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-accidents-transfusionnels",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-accidents-transfusionnels",
      "path" : "fr-lm-accidents-transfusionnels",
      "short" : "Modèle logique métier - FR LM Accident transfusionnel",
      "definition" : "Accident transfusionnel"
    },
    {
      "id" : "fr-lm-accidents-transfusionnels.identifiant",
      "path" : "fr-lm-accidents-transfusionnels.identifiant",
      "short" : "Identifiant de l’observation",
      "definition" : "Identifiant de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-accidents-transfusionnels.code",
      "path" : "fr-lm-accidents-transfusionnels.code",
      "short" : "Code de l’observation",
      "definition" : "Code de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-accidents-transfusionnels.description",
      "path" : "fr-lm-accidents-transfusionnels.description",
      "short" : "Description narrative de l’observation",
      "definition" : "Description narrative de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-accidents-transfusionnels.statut",
      "path" : "fr-lm-accidents-transfusionnels.statut",
      "short" : "Statut de l’observation. Fixé à 'completed'",
      "definition" : "Statut de l’observation. Fixé à 'completed'",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-accidents-transfusionnels.date",
      "path" : "fr-lm-accidents-transfusionnels.date",
      "short" : "Date de l’observation",
      "definition" : "Date de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-accidents-transfusionnels.valeur",
      "path" : "fr-lm-accidents-transfusionnels.valeur",
      "short" : "Description sous forme textuelle de l'accident transfusionnel",
      "definition" : "Description sous forme textuelle de l'accident transfusionnel",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-accidents-transfusionnels.auteur",
      "path" : "fr-lm-accidents-transfusionnels.auteur",
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
