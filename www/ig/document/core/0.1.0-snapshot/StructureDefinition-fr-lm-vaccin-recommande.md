# Modèle logique métier - FR LM Vaccin recommandé - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Vaccin recommandé**

## Logical Model: Modèle logique métier - FR LM Vaccin recommandé 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-vaccin-recommande | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMVaccinRecommande |

 
Vaccin recommandé 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Plan de soins](StructureDefinition-fr-lm-plan-soins.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-vaccin-recommande)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-vaccin-recommande.csv), [Excel](StructureDefinition-fr-lm-vaccin-recommande.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-vaccin-recommande",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-vaccin-recommande",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMVaccinRecommande",
  "title" : "Modèle logique métier - FR LM Vaccin recommandé",
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
  "description" : "Vaccin recommandé",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-vaccin-recommande",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-vaccin-recommande",
      "path" : "fr-lm-vaccin-recommande",
      "short" : "Modèle logique métier - FR LM Vaccin recommandé",
      "definition" : "Vaccin recommandé"
    },
    {
      "id" : "fr-lm-vaccin-recommande.identifiantVaccinRecommande",
      "path" : "fr-lm-vaccin-recommande.identifiantVaccinRecommande",
      "short" : "Identifiant de l’entrée",
      "definition" : "Identifiant de l’entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-vaccin-recommande.codeVaccinRecommande",
      "path" : "fr-lm-vaccin-recommande.codeVaccinRecommande",
      "short" : "Type d'acte : vaccination",
      "definition" : "Type d'acte : vaccination",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-vaccin-recommande.descriptionNarrativeVaccinRecommande",
      "path" : "fr-lm-vaccin-recommande.descriptionNarrativeVaccinRecommande",
      "short" : "Partie narrative de l’entrée",
      "definition" : "Partie narrative de l’entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-vaccin-recommande.statutVaccinRecommande",
      "path" : "fr-lm-vaccin-recommande.statutVaccinRecommande",
      "short" : "Statut de l’entrée",
      "definition" : "Statut de l’entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-vaccin-recommande.periodeVaccination",
      "path" : "fr-lm-vaccin-recommande.periodeVaccination",
      "short" : "Période de vaccination souhaitable",
      "definition" : "Période de vaccination souhaitable",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-vaccin-recommande.voieAdministration",
      "path" : "fr-lm-vaccin-recommande.voieAdministration",
      "short" : "Voie d’administration",
      "definition" : "Voie d’administration",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-vaccin-recommande.regionAnatomique",
      "path" : "fr-lm-vaccin-recommande.regionAnatomique",
      "short" : "Région anatomique d'administration",
      "definition" : "Région anatomique d'administration",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "description" : "SNOMED CT (2.16.840.1.113883.6.96)"
      }
    },
    {
      "id" : "fr-lm-vaccin-recommande.doseAdministree",
      "path" : "fr-lm-vaccin-recommande.doseAdministree",
      "short" : "Dose administrée",
      "definition" : "Dose administrée",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity"
      }]
    },
    {
      "id" : "fr-lm-vaccin-recommande.vaccin",
      "path" : "fr-lm-vaccin-recommande.vaccin",
      "short" : "Vaccin",
      "definition" : "Vaccin",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-produit-sante"
      }]
    },
    {
      "id" : "fr-lm-vaccin-recommande.prescription",
      "path" : "fr-lm-vaccin-recommande.prescription",
      "short" : "Référence de la prescription",
      "definition" : "Référence de la prescription",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prescription-entree"
      }]
    },
    {
      "id" : "fr-lm-vaccin-recommande.rangVaccination",
      "path" : "fr-lm-vaccin-recommande.rangVaccination",
      "short" : "Rang de la vaccination",
      "definition" : "Rang de la vaccination",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-rang-vaccination"
      }]
    },
    {
      "id" : "fr-lm-vaccin-recommande.commentaire",
      "path" : "fr-lm-vaccin-recommande.commentaire",
      "short" : "Commentaire",
      "definition" : "Commentaire",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-commentaire-er"
      }]
    }]
  }
}

```
