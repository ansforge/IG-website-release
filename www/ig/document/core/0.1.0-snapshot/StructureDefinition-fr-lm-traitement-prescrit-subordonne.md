# Modèle logique métier - FR LM Traitement Prescrit Subordonnee - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Traitement Prescrit Subordonnee**

## Logical Model: Modèle logique métier - FR LM Traitement Prescrit Subordonnee 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-traitement-prescrit-subordonne | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMTraitementPrescritSubordonne |

 
Traitement prescrit subordonne 

**Utilisations:**

* Ce Modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-traitement-prescrit-subordonne)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-traitement-prescrit-subordonne.csv), [Excel](StructureDefinition-fr-lm-traitement-prescrit-subordonne.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-traitement-prescrit-subordonne",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-traitement-prescrit-subordonne",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMTraitementPrescritSubordonne",
  "title" : "Modèle logique métier - FR LM Traitement Prescrit Subordonnee",
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
  "description" : "Traitement prescrit subordonne",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-traitement-prescrit-subordonne",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-traitement-prescrit-subordonne",
      "path" : "fr-lm-traitement-prescrit-subordonne",
      "short" : "Modèle logique métier - FR LM Traitement Prescrit Subordonnee",
      "definition" : "Traitement prescrit subordonne"
    },
    {
      "id" : "fr-lm-traitement-prescrit-subordonne.identifiant",
      "path" : "fr-lm-traitement-prescrit-subordonne.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit-subordonne.description",
      "path" : "fr-lm-traitement-prescrit-subordonne.description",
      "short" : "Partie narrative de l’entrée",
      "definition" : "Partie narrative de l’entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit-subordonne.status",
      "path" : "fr-lm-traitement-prescrit-subordonne.status",
      "short" : "Statut de l’entrée",
      "definition" : "Statut de l’entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit-subordonne.frequenceAdministration",
      "path" : "fr-lm-traitement-prescrit-subordonne.frequenceAdministration",
      "short" : "Fréquence d'administration",
      "definition" : "Fréquence d'administration",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit-subordonne.dose",
      "path" : "fr-lm-traitement-prescrit-subordonne.dose",
      "short" : "Dose à administrer",
      "definition" : "Dose à administrer",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit-subordonne.rythmeAdministration[x]",
      "path" : "fr-lm-traitement-prescrit-subordonne.rythmeAdministration[x]",
      "short" : "Rythme d'administration",
      "definition" : "Rythme d'administration",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Ratio"
      },
      {
        "code" : "Quantity"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit-subordonne.produitSante",
      "path" : "fr-lm-traitement-prescrit-subordonne.produitSante",
      "short" : "Produit de santé",
      "definition" : "Produit de santé",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-produit-sante"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit-subordonne.precondition",
      "path" : "fr-lm-traitement-prescrit-subordonne.precondition",
      "short" : "Précondition à l'utilisation du médicament",
      "definition" : "Précondition à l'utilisation du médicament",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Base"
      }]
    }]
  }
}

```
