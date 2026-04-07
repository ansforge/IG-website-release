# Modèle logique métier - FR LM Rang de la vaccination - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Rang de la vaccination**

## Logical Model: Modèle logique métier - FR LM Rang de la vaccination 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-rang-vaccination | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMRangVaccination |

 
Rang de la vaccination 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Vaccin recommandé](StructureDefinition-fr-lm-vaccin-recommande.md) and [Modèle logique métier - FR LM Vaccination](StructureDefinition-fr-lm-vaccination.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-rang-vaccination)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-rang-vaccination.csv), [Excel](StructureDefinition-fr-lm-rang-vaccination.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-rang-vaccination",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-rang-vaccination",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMRangVaccination",
  "title" : "Modèle logique métier - FR LM Rang de la vaccination",
  "status" : "draft",
  "date" : "2026-04-07T08:54:42+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Rang de la vaccination ",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-rang-vaccination",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-rang-vaccination",
      "path" : "fr-lm-rang-vaccination",
      "short" : "Modèle logique métier - FR LM Rang de la vaccination",
      "definition" : "Rang de la vaccination "
    },
    {
      "id" : "fr-lm-rang-vaccination.identifiantRangVaccination",
      "path" : "fr-lm-rang-vaccination.identifiantRangVaccination",
      "short" : "Identifiant de l’entrée",
      "definition" : "Identifiant de l’entrée",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-rang-vaccination.codeRangVaccination",
      "path" : "fr-lm-rang-vaccination.codeRangVaccination",
      "short" : "Code de l'entrée",
      "definition" : "Code de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-rang-vaccination.derivationRangVaccination",
      "path" : "fr-lm-rang-vaccination.derivationRangVaccination",
      "short" : "derivation.",
      "definition" : "derivation.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-rang-vaccination.descriptionRangVaccination",
      "path" : "fr-lm-rang-vaccination.descriptionRangVaccination",
      "short" : "Partie narrative de l’entrée",
      "definition" : "Partie narrative de l’entrée",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-rang-vaccination.statutRangVaccination",
      "path" : "fr-lm-rang-vaccination.statutRangVaccination",
      "short" : "Statut de l’entrée",
      "definition" : "Statut de l’entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-rang-vaccination.dateRangVaccination",
      "path" : "fr-lm-rang-vaccination.dateRangVaccination",
      "short" : "Date de l’observation",
      "definition" : "Date de l’observation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-rang-vaccination.prioriteRangVaccination",
      "path" : "fr-lm-rang-vaccination.prioriteRangVaccination",
      "short" : "Priorité",
      "definition" : "Priorité",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-rang-vaccination.nombreRenouvellements",
      "path" : "fr-lm-rang-vaccination.nombreRenouvellements",
      "short" : "Nombre de renouvellements possibles",
      "definition" : "Nombre de renouvellements possibles",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Range"
      }]
    },
    {
      "id" : "fr-lm-rang-vaccination.languageRangVaccination",
      "path" : "fr-lm-rang-vaccination.languageRangVaccination",
      "short" : "Language",
      "definition" : "Language",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-rang-vaccination.rangVaccination",
      "path" : "fr-lm-rang-vaccination.rangVaccination",
      "short" : "Rang de la vaccination",
      "definition" : "Rang de la vaccination",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "integer"
      }]
    }]
  }
}

```
