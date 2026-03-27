# Modèle logique métier - FR LM Produit de santé - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Produit de santé**

## Logical Model: Modèle logique métier - FR LM Produit de santé 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-produit-sante | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMProduitSante |

 
Produit de santé 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Dose d'antigène](StructureDefinition-fr-lm-dose-antigene.md), [Modèle logique métier - FR LM Référence item prescription](StructureDefinition-fr-lm-reference-item-prescription.md), [Modèle logique métier - FR LM Traitement dispensé](StructureDefinition-fr-lm-traitement-dispense.md), [Modèle logique métier - FR LM Traitement Prescrit Subordonnee](StructureDefinition-fr-lm-traitement-prescrit-subordonne.md)... Show 5 more, [Modèle logique métier - FR LM Traitement Prescrit](StructureDefinition-fr-lm-traitement-prescrit.md), [Modèle logique métier - FR LM Traitement subordonné](StructureDefinition-fr-lm-traitement-subordonne.md), [Modèle logique métier - FR LM Traitement](StructureDefinition-fr-lm-traitement.md), [Modèle logique métier - FR LM Vaccin recommandé](StructureDefinition-fr-lm-vaccin-recommande.md) and [Modèle logique métier - FR LM Vaccination](StructureDefinition-fr-lm-vaccination.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-produit-sante)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-produit-sante.csv), [Excel](StructureDefinition-fr-lm-produit-sante.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-produit-sante",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-produit-sante",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMProduitSante",
  "title" : "Modèle logique métier - FR LM Produit de santé",
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
  "description" : "Produit de santé",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-produit-sante",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-produit-sante",
      "path" : "fr-lm-produit-sante",
      "short" : "Modèle logique métier - FR LM Produit de santé",
      "definition" : "Produit de santé"
    },
    {
      "id" : "fr-lm-produit-sante.medicament",
      "path" : "fr-lm-produit-sante.medicament",
      "short" : "Médicament",
      "definition" : "Médicament",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.codeProduit",
      "path" : "fr-lm-produit-sante.medicament.codeProduit",
      "short" : "Code du produit de santé",
      "definition" : "Code du produit de santé",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.nomProduit",
      "path" : "fr-lm-produit-sante.medicament.nomProduit",
      "short" : "Nom du produit (contenant aussi le dosage et la forme galénique)",
      "definition" : "Nom du produit (contenant aussi le dosage et la forme galénique)",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.formeGalenique",
      "path" : "fr-lm-produit-sante.medicament.formeGalenique",
      "short" : "Forme galénique du produit de santé",
      "definition" : "Forme galénique du produit de santé",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.numeroLot",
      "path" : "fr-lm-produit-sante.medicament.numeroLot",
      "short" : "Numéro de lot ",
      "definition" : "Numéro de lot ",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.dateExpiration",
      "path" : "fr-lm-produit-sante.medicament.dateExpiration",
      "short" : "Date d'expiration du produit",
      "definition" : "Date d'expiration du produit",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.conditionnement",
      "path" : "fr-lm-produit-sante.medicament.conditionnement",
      "short" : "Conditionnement",
      "definition" : "Conditionnement",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.equivalentGenerique",
      "path" : "fr-lm-produit-sante.medicament.equivalentGenerique",
      "short" : "Code de regroupement ATC",
      "definition" : "Code de regroupement ATC",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.substanceActive",
      "path" : "fr-lm-produit-sante.medicament.substanceActive",
      "short" : "Substance active",
      "definition" : "Substance active",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Base"
      }]
    }]
  }
}

```
