# Modèle logique métier - FR LM Evènements indésirables pendant l'hospitalisation - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Evènements indésirables pendant l'hospitalisation**

## Logical Model: Modèle logique métier - FR LM Evènements indésirables pendant l'hospitalisation 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-evenement-indesirable-pendant-hospitalisation | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMEvenementIndesirablePendantHospitalisation |

 
Evènements indésirables pendant l’hospitalisation 

**Utilisations:**

* Ce Modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-evenement-indesirable-pendant-hospitalisation)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-evenement-indesirable-pendant-hospitalisation.csv), [Excel](StructureDefinition-fr-lm-evenement-indesirable-pendant-hospitalisation.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-evenement-indesirable-pendant-hospitalisation",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-evenement-indesirable-pendant-hospitalisation",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMEvenementIndesirablePendantHospitalisation",
  "title" : "Modèle logique métier - FR LM Evènements indésirables pendant l'hospitalisation",
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
  "description" : "Evènements indésirables pendant l'hospitalisation",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-evenement-indesirable-pendant-hospitalisation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-evenement-indesirable-pendant-hospitalisation",
      "path" : "fr-lm-evenement-indesirable-pendant-hospitalisation",
      "short" : "Modèle logique métier - FR LM Evènements indésirables pendant l'hospitalisation",
      "definition" : "Evènements indésirables pendant l'hospitalisation"
    },
    {
      "id" : "fr-lm-evenement-indesirable-pendant-hospitalisation.identifiant",
      "path" : "fr-lm-evenement-indesirable-pendant-hospitalisation.identifiant",
      "short" : "Identifiant de l’observation",
      "definition" : "Identifiant de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-evenement-indesirable-pendant-hospitalisation.code",
      "path" : "fr-lm-evenement-indesirable-pendant-hospitalisation.code",
      "short" : "Code de l’observation",
      "definition" : "Code de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-evenement-indesirable-pendant-hospitalisation.description",
      "path" : "fr-lm-evenement-indesirable-pendant-hospitalisation.description",
      "short" : "Description narrative de l’observation",
      "definition" : "Description narrative de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-evenement-indesirable-pendant-hospitalisation.statut",
      "path" : "fr-lm-evenement-indesirable-pendant-hospitalisation.statut",
      "short" : "Statut de l’observation. Fixé à 'completed'",
      "definition" : "Statut de l’observation. Fixé à 'completed'",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-evenement-indesirable-pendant-hospitalisation.date",
      "path" : "fr-lm-evenement-indesirable-pendant-hospitalisation.date",
      "short" : "Date de l’observation",
      "definition" : "Date de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-evenement-indesirable-pendant-hospitalisation.valeur",
      "path" : "fr-lm-evenement-indesirable-pendant-hospitalisation.valeur",
      "short" : "Description sous forme textuelle des évènements indésirables survenus pendant l'hospitalisation.",
      "definition" : "Description sous forme textuelle des évènements indésirables survenus pendant l'hospitalisation.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-evenement-indesirable-pendant-hospitalisation.auteur",
      "path" : "fr-lm-evenement-indesirable-pendant-hospitalisation.auteur",
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
