# Modèle logique métier - FR LM Administration produit de sante - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Administration produit de sante**

## Logical Model: Modèle logique métier - FR LM Administration produit de sante 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-administration-produit-de-sante | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMAdministrationProduitDeSante |

 
Administration produit de sante 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Acte d'imagerie](StructureDefinition-fr-lm-acte-imagerie.md), [Modèle logique métier - FR LM Exposition aux radiations](StructureDefinition-fr-lm-exposition-radiations.md) and [Modèle logique métier - FR LM Informations Cliniques](StructureDefinition-fr-lm-informations-cliniques.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-administration-produit-de-sante)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-administration-produit-de-sante.csv), [Excel](StructureDefinition-fr-lm-administration-produit-de-sante.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-administration-produit-de-sante",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-administration-produit-de-sante",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMAdministrationProduitDeSante",
  "title" : "Modèle logique métier - FR LM Administration produit de sante",
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
  "description" : "Administration produit de sante",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-administration-produit-de-sante",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-administration-produit-de-sante",
      "path" : "fr-lm-administration-produit-de-sante",
      "short" : "Modèle logique métier - FR LM Administration produit de sante",
      "definition" : "Administration produit de sante"
    },
    {
      "id" : "fr-lm-administration-produit-de-sante.identifiant",
      "path" : "fr-lm-administration-produit-de-sante.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-administration-produit-de-sante.description",
      "path" : "fr-lm-administration-produit-de-sante.description",
      "short" : "Partie narrative de l'entrée",
      "definition" : "Partie narrative de l'entrée",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-administration-produit-de-sante.statut",
      "path" : "fr-lm-administration-produit-de-sante.statut",
      "short" : "Statut de l'entrée",
      "definition" : "Statut de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-administration-produit-de-sante.voieAdministration",
      "path" : "fr-lm-administration-produit-de-sante.voieAdministration",
      "short" : "Voie d'administration",
      "definition" : "Voie d'administration",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "description" : "EDQM (0.4.0.127.0.16.1.1.2.1)"
      }
    },
    {
      "id" : "fr-lm-administration-produit-de-sante.dose",
      "path" : "fr-lm-administration-produit-de-sante.dose",
      "short" : "Dose à administrer",
      "definition" : "Dose à administrer",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity"
      }]
    },
    {
      "id" : "fr-lm-administration-produit-de-sante.rythme",
      "path" : "fr-lm-administration-produit-de-sante.rythme",
      "short" : "Rythme d'administration",
      "definition" : "Rythme d'administration",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Range"
      }]
    },
    {
      "id" : "fr-lm-administration-produit-de-sante.medicament",
      "path" : "fr-lm-administration-produit-de-sante.medicament",
      "short" : "Médicament",
      "definition" : "Médicament",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-administration-produit-de-sante.medicament.produit",
      "path" : "fr-lm-administration-produit-de-sante.medicament.produit",
      "short" : "Produit de santé",
      "definition" : "Produit de santé",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-administration-produit-de-sante.medicament.produit.codeProduit",
      "path" : "fr-lm-administration-produit-de-sante.medicament.produit.codeProduit",
      "short" : "Code du produit",
      "definition" : "Code du produit",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "description" : "UCD (1.2.250.1.213.2.61) + code ATC"
      }
    },
    {
      "id" : "fr-lm-administration-produit-de-sante.medicament.produit.codeProduit.autreCodification",
      "path" : "fr-lm-administration-produit-de-sante.medicament.produit.codeProduit.autreCodification",
      "short" : "Autre(s) codification(s)",
      "definition" : "Autre(s) codification(s)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "description" : "ATC (2.16.840.1.113883.6.73) or CIS (1.2.250.1.213.2.3.1) or MV (1.2.250.1.213.2.59)"
      }
    },
    {
      "id" : "fr-lm-administration-produit-de-sante.medicament.produit.nomMarque",
      "path" : "fr-lm-administration-produit-de-sante.medicament.produit.nomMarque",
      "short" : "Nom de marque du produit",
      "definition" : "Nom de marque du produit",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-administration-produit-de-sante.medicament.produit.numeroLot",
      "path" : "fr-lm-administration-produit-de-sante.medicament.produit.numeroLot",
      "short" : "Numéro de lot",
      "definition" : "Numéro de lot",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
