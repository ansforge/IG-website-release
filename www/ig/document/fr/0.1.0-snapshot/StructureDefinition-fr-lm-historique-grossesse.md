# Modèle logique métier - FR LM Historique de la grossesse - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Historique de la grossesse**

## Logical Model: Modèle logique métier - FR LM Historique de la grossesse 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-historique-grossesse | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRLMHistoriqueGrossesse |

 
Historique de la grossesse 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Antécédents obstétricaux](StructureDefinition-fr-lm-historique-des-grossesses.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-historique-grossesse)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-historique-grossesse.csv), [Excel](StructureDefinition-fr-lm-historique-grossesse.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-historique-grossesse",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-historique-grossesse",
  "version" : "0.1.0",
  "name" : "FRLMHistoriqueGrossesse",
  "title" : "Modèle logique métier - FR LM Historique de la grossesse",
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
  "description" : "Historique de la grossesse",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-historique-grossesse",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-historique-grossesse",
      "path" : "fr-lm-historique-grossesse",
      "short" : "Modèle logique métier - FR LM Historique de la grossesse",
      "definition" : "Historique de la grossesse"
    },
    {
      "id" : "fr-lm-historique-grossesse.identifiant",
      "path" : "fr-lm-historique-grossesse.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-historique-grossesse.code",
      "path" : "fr-lm-historique-grossesse.code",
      "short" : "Code de l'entrée",
      "definition" : "Code de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-historique-grossesse.statut",
      "path" : "fr-lm-historique-grossesse.statut",
      "short" : "Statut de l’entrée",
      "definition" : "Statut de l’entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "patternCodeableConcept" : {
        "coding" : [{
          "code" : "completed"
        }]
      }
    },
    {
      "id" : "fr-lm-historique-grossesse.periodeGrossesse",
      "path" : "fr-lm-historique-grossesse.periodeGrossesse",
      "short" : "Période de la grossesse",
      "definition" : "Période de la grossesse",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-historique-grossesse.choice[x]",
      "path" : "fr-lm-historique-grossesse.choice[x]",
      "short" : "L'entrée Historique de la grossesse contient :\n  • soit les informations relatives à une naissance (une ou plusieurs entrée FR-Naissance),  \n  • soit les informations relatives à la grossesse  (une ou plusieurs entrée FR-Observation-sur-la-grossesse)",
      "definition" : "L'entrée Historique de la grossesse contient :\n  • soit les informations relatives à une naissance (une ou plusieurs entrée FR-Naissance),  \n  • soit les informations relatives à la grossesse  (une ou plusieurs entrée FR-Observation-sur-la-grossesse)",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-naissance"
      },
      {
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation-grossesse"
      }]
    }]
  }
}

```
