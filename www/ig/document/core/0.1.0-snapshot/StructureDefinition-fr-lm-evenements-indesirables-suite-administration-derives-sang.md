# Modèle logique métier - FR LM Evènements indésirables suite à l'administration de dérivés du sang - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Evènements indésirables suite à l'administration de dérivés du sang**

## Logical Model: Modèle logique métier - FR LM Evènements indésirables suite à l'administration de dérivés du sang 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-evenements-indesirables-suite-administration-derives-sang | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMEvenementsIndesirablesSuiteAdministrationDerivesSang |

 
Evènements indésirables suite à l’administration de dérivés du sang 

**Utilisations:**

* Ce Modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-evenements-indesirables-suite-administration-derives-sang)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-evenements-indesirables-suite-administration-derives-sang.csv), [Excel](StructureDefinition-fr-lm-evenements-indesirables-suite-administration-derives-sang.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-evenements-indesirables-suite-administration-derives-sang",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-evenements-indesirables-suite-administration-derives-sang",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMEvenementsIndesirablesSuiteAdministrationDerivesSang",
  "title" : "Modèle logique métier - FR LM Evènements indésirables suite à l'administration de dérivés du sang",
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
  "description" : "Evènements indésirables suite à l'administration de dérivés du sang",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-evenements-indesirables-suite-administration-derives-sang",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-evenements-indesirables-suite-administration-derives-sang",
      "path" : "fr-lm-evenements-indesirables-suite-administration-derives-sang",
      "short" : "Modèle logique métier - FR LM Evènements indésirables suite à l'administration de dérivés du sang",
      "definition" : "Evènements indésirables suite à l'administration de dérivés du sang"
    },
    {
      "id" : "fr-lm-evenements-indesirables-suite-administration-derives-sang.identifiant",
      "path" : "fr-lm-evenements-indesirables-suite-administration-derives-sang.identifiant",
      "short" : "Identifiant de l’observation",
      "definition" : "Identifiant de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-evenements-indesirables-suite-administration-derives-sang.code",
      "path" : "fr-lm-evenements-indesirables-suite-administration-derives-sang.code",
      "short" : "Code de l’observation",
      "definition" : "Code de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-evenements-indesirables-suite-administration-derives-sang.description",
      "path" : "fr-lm-evenements-indesirables-suite-administration-derives-sang.description",
      "short" : "Description narrative de l’observation",
      "definition" : "Description narrative de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-evenements-indesirables-suite-administration-derives-sang.statut",
      "path" : "fr-lm-evenements-indesirables-suite-administration-derives-sang.statut",
      "short" : "Statut de l’observation. Fixé à 'completed'",
      "definition" : "Statut de l’observation. Fixé à 'completed'",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-evenements-indesirables-suite-administration-derives-sang.date",
      "path" : "fr-lm-evenements-indesirables-suite-administration-derives-sang.date",
      "short" : "Date de l’observation",
      "definition" : "Date de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-evenements-indesirables-suite-administration-derives-sang.valeur",
      "path" : "fr-lm-evenements-indesirables-suite-administration-derives-sang.valeur",
      "short" : "Description sous forme textuelle des évènements indésirables survenus suite à l'administration de dérivés du sang.",
      "definition" : "Description sous forme textuelle des évènements indésirables survenus suite à l'administration de dérivés du sang.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-evenements-indesirables-suite-administration-derives-sang.auteur",
      "path" : "fr-lm-evenements-indesirables-suite-administration-derives-sang.auteur",
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
