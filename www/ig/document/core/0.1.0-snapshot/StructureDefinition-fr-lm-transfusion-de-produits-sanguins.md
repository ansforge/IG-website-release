# Modèle logique métier - FR LM Transfusion de produits sanguins - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Transfusion de produits sanguins**

## Logical Model: Modèle logique métier - FR LM Transfusion de produits sanguins 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-transfusion-de-produits-sanguins | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMTransfusionDeProduitsSanguins |

 
Transfusion de produits sanguins 

**Utilisations:**

* Ce Modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-transfusion-de-produits-sanguins)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-transfusion-de-produits-sanguins.csv), [Excel](StructureDefinition-fr-lm-transfusion-de-produits-sanguins.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-transfusion-de-produits-sanguins",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-transfusion-de-produits-sanguins",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMTransfusionDeProduitsSanguins",
  "title" : "Modèle logique métier - FR LM Transfusion de produits sanguins",
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
  "description" : "Transfusion de produits sanguins",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-transfusion-de-produits-sanguins",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-transfusion-de-produits-sanguins",
      "path" : "fr-lm-transfusion-de-produits-sanguins",
      "short" : "Modèle logique métier - FR LM Transfusion de produits sanguins",
      "definition" : "Transfusion de produits sanguins"
    },
    {
      "id" : "fr-lm-transfusion-de-produits-sanguins.identifiant",
      "path" : "fr-lm-transfusion-de-produits-sanguins.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-transfusion-de-produits-sanguins.code",
      "path" : "fr-lm-transfusion-de-produits-sanguins.code",
      "short" : "Code de l'entrée",
      "definition" : "Code de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-transfusion-de-produits-sanguins.description",
      "path" : "fr-lm-transfusion-de-produits-sanguins.description",
      "short" : "Description narrative de l'entrée",
      "definition" : "Description narrative de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-transfusion-de-produits-sanguins.statut",
      "path" : "fr-lm-transfusion-de-produits-sanguins.statut",
      "short" : "Statut de l'entrée. Fixé à la valeur 'completed'",
      "definition" : "Statut de l'entrée. Fixé à la valeur 'completed'",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-transfusion-de-produits-sanguins.date",
      "path" : "fr-lm-transfusion-de-produits-sanguins.date",
      "short" : "Date de l'entrée",
      "definition" : "Date de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-transfusion-de-produits-sanguins.transfusionProduitSanguin",
      "path" : "fr-lm-transfusion-de-produits-sanguins.transfusionProduitSanguin",
      "short" : "Transfusion de produit sanguin",
      "definition" : "Transfusion de produit sanguin",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "boolean"
      }]
    },
    {
      "id" : "fr-lm-transfusion-de-produits-sanguins.auteur",
      "path" : "fr-lm-transfusion-de-produits-sanguins.auteur",
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
