# Modèle logique métier - FR LM Rencontre - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Rencontre**

## Logical Model: Modèle logique métier - FR LM Rencontre 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-rencontre | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRLMRencontre |

 
Rencontre 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Acte](StructureDefinition-fr-lm-acte.md) and [Modèle logique métier - FR LM Plan de soins](StructureDefinition-fr-lm-plan-soins.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-rencontre)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-rencontre.csv), [Excel](StructureDefinition-fr-lm-rencontre.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-rencontre",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-rencontre",
  "version" : "0.1.0",
  "name" : "FRLMRencontre",
  "title" : "Modèle logique métier - FR LM Rencontre",
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
  "description" : "Rencontre",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-rencontre",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-rencontre",
      "path" : "fr-lm-rencontre",
      "short" : "Modèle logique métier - FR LM Rencontre",
      "definition" : "Rencontre"
    },
    {
      "id" : "fr-lm-rencontre.identifiant",
      "path" : "fr-lm-rencontre.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-rencontre.typeRencontre",
      "path" : "fr-lm-rencontre.typeRencontre",
      "short" : "Type de rencontre",
      "definition" : "Type de rencontre",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-rencontre.description",
      "path" : "fr-lm-rencontre.description",
      "short" : "Description narrative",
      "definition" : "Description narrative",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-rencontre.dateRencontre",
      "path" : "fr-lm-rencontre.dateRencontre",
      "short" : "Date de la rencontre",
      "definition" : "Date de la rencontre",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-rencontre.confirmationRencontre",
      "path" : "fr-lm-rencontre.confirmationRencontre",
      "short" : "Confirmation attendue",
      "definition" : "Confirmation attendue",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-rencontre.executant",
      "path" : "fr-lm-rencontre.executant",
      "short" : "Exécutant",
      "definition" : "Exécutant",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-personne-structure"
      }]
    },
    {
      "id" : "fr-lm-rencontre.auteur",
      "path" : "fr-lm-rencontre.auteur",
      "short" : "Auteur",
      "definition" : "Auteur",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    },
    {
      "id" : "fr-lm-rencontre.informateur",
      "path" : "fr-lm-rencontre.informateur",
      "short" : "Informateur",
      "definition" : "Informateur",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-informateur"
      }]
    },
    {
      "id" : "fr-lm-rencontre.participant",
      "path" : "fr-lm-rencontre.participant",
      "short" : "Lieu d'exécution (PersonneStructure)",
      "definition" : "Lieu d'exécution (PersonneStructure)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-participant-corps"
      }]
    },
    {
      "id" : "fr-lm-rencontre.autreParticipant",
      "path" : "fr-lm-rencontre.autreParticipant",
      "short" : "Participant (utilisable dans le corps du document uniquement)",
      "definition" : "Participant (utilisable dans le corps du document uniquement)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-participant-corps"
      }]
    }]
  }
}

```
