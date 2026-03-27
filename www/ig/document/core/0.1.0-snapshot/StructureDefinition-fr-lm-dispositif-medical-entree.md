# Modèle logique métier - FR LM Dispositif médical - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Dispositif médical**

## Logical Model: Modèle logique métier - FR LM Dispositif médical 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispositif-medical-entree | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMDispositifMedicalEntree |

 
Dispositif médical 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Acte](StructureDefinition-fr-lm-acte.md), [Modèle logique métier - FR LM Dispositifs medicaux](StructureDefinition-fr-lm-dispositifs-medicaux.md), [Modèle logique métier - FR LM Informations Cliniques](StructureDefinition-fr-lm-informations-cliniques.md) and [Modèle logique métier - FR LM Prescription de dispositifs médicaux](StructureDefinition-fr-lm-prescription-dispositifs-medicaux.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-dispositif-medical-entree)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-dispositif-medical-entree.csv), [Excel](StructureDefinition-fr-lm-dispositif-medical-entree.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-dispositif-medical-entree",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispositif-medical-entree",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMDispositifMedicalEntree",
  "title" : "Modèle logique métier - FR LM Dispositif médical",
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
  "description" : "Dispositif médical",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispositif-medical-entree",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-dispositif-medical-entree",
      "path" : "fr-lm-dispositif-medical-entree",
      "short" : "Modèle logique métier - FR LM Dispositif médical",
      "definition" : "Dispositif médical"
    },
    {
      "id" : "fr-lm-dispositif-medical-entree.identifiant",
      "path" : "fr-lm-dispositif-medical-entree.identifiant",
      "short" : "Identifiant de l'observation",
      "definition" : "Identifiant de l'observation",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-dispositif-medical-entree.description",
      "path" : "fr-lm-dispositif-medical-entree.description",
      "short" : "Partie narrative de l'observation",
      "definition" : "Partie narrative de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-dispositif-medical-entree.statut",
      "path" : "fr-lm-dispositif-medical-entree.statut",
      "short" : "Statut de l'observation",
      "definition" : "Statut de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-dispositif-medical-entree.date",
      "path" : "fr-lm-dispositif-medical-entree.date",
      "short" : "Date d'utilisation ou de présence chez le patient",
      "definition" : "Date d'utilisation ou de présence chez le patient",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-dispositif-medical-entree.renouvellement",
      "path" : "fr-lm-dispositif-medical-entree.renouvellement",
      "short" : "Nombre de renouvellement(s) possible(s)",
      "definition" : "Nombre de renouvellement(s) possible(s)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Range"
      }]
    },
    {
      "id" : "fr-lm-dispositif-medical-entree.quantite",
      "path" : "fr-lm-dispositif-medical-entree.quantite",
      "short" : "Quantité",
      "definition" : "Quantité",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity"
      }]
    },
    {
      "id" : "fr-lm-dispositif-medical-entree.duree",
      "path" : "fr-lm-dispositif-medical-entree.duree",
      "short" : "Durée d'utilisation",
      "definition" : "Durée d'utilisation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-dispositif-medical-entree.performer",
      "path" : "fr-lm-dispositif-medical-entree.performer",
      "short" : "Dispensateur",
      "definition" : "Dispensateur",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-personne-structure"
      }]
    },
    {
      "id" : "fr-lm-dispositif-medical-entree.auteur",
      "path" : "fr-lm-dispositif-medical-entree.auteur",
      "short" : "Prescripteur",
      "definition" : "Prescripteur",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    },
    {
      "id" : "fr-lm-dispositif-medical-entree.dispositifMedical",
      "path" : "fr-lm-dispositif-medical-entree.dispositifMedical",
      "short" : "Dispositif médical",
      "definition" : "Dispositif médical",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispositif-medical"
      }]
    },
    {
      "id" : "fr-lm-dispositif-medical-entree.affectionLongueDuree",
      "path" : "fr-lm-dispositif-medical-entree.affectionLongueDuree",
      "short" : "Entrée En rapport avec une Affection Longue Durée (ALD)",
      "definition" : "Entrée En rapport avec une Affection Longue Durée (ALD)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-dispositif-medical-entree.accidentTravail",
      "path" : "fr-lm-dispositif-medical-entree.accidentTravail",
      "short" : "Entrée En rapport avec accident travail",
      "definition" : "Entrée En rapport avec accident travail",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-dispositif-medical-entree.prevention",
      "path" : "fr-lm-dispositif-medical-entree.prevention",
      "short" : "Entrée En rapport avec la prevention",
      "definition" : "Entrée En rapport avec la prevention",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-dispositif-medical-entree.nonRemboursable",
      "path" : "fr-lm-dispositif-medical-entree.nonRemboursable",
      "short" : "Entrée Non remboursable",
      "definition" : "Entrée Non remboursable",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    }]
  }
}

```
