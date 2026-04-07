# Modèle logique métier - FR LM Serie imagerie - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Serie imagerie**

## Logical Model: Modèle logique métier - FR LM Serie imagerie 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-serie-imagerie | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMSerieImagerie |

 
Serie imagerie 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Examen Imagerie](StructureDefinition-fr-lm-examen-imagerie.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-serie-imagerie)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-serie-imagerie.csv), [Excel](StructureDefinition-fr-lm-serie-imagerie.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-serie-imagerie",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-serie-imagerie",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMSerieImagerie",
  "title" : "Modèle logique métier - FR LM Serie imagerie",
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
  "description" : "Serie imagerie",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-serie-imagerie",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-serie-imagerie",
      "path" : "fr-lm-serie-imagerie",
      "short" : "Modèle logique métier - FR LM Serie imagerie",
      "definition" : "Serie imagerie"
    },
    {
      "id" : "fr-lm-serie-imagerie.uuidSerie",
      "path" : "fr-lm-serie-imagerie.uuidSerie",
      "short" : "UUID serie",
      "definition" : "UUID serie",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-serie-imagerie.code",
      "path" : "fr-lm-serie-imagerie.code",
      "short" : "Code de l'entrée",
      "definition" : "Code de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-serie-imagerie.description",
      "path" : "fr-lm-serie-imagerie.description",
      "short" : "Partie narrative de l'entrée",
      "definition" : "Partie narrative de l'entrée",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-serie-imagerie.date",
      "path" : "fr-lm-serie-imagerie.date",
      "short" : "Date de la série d'actes",
      "definition" : "Date de la série d'actes",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-serie-imagerie.instanceSOP",
      "path" : "fr-lm-serie-imagerie.instanceSOP",
      "short" : "SOP instance",
      "definition" : "SOP instance",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-sop-instance"
      }]
    },
    {
      "id" : "fr-lm-serie-imagerie.referenceWado",
      "path" : "fr-lm-serie-imagerie.referenceWado",
      "short" : "Référence WADO",
      "definition" : "Référence WADO",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-serie-imagerie.referenceWado.iHEInvokeImage",
      "path" : "fr-lm-serie-imagerie.referenceWado.iHEInvokeImage",
      "short" : "IHE Invoke Image Display",
      "definition" : "IHE Invoke Image Display",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-serie-imagerie.referenceWado.typeMedia",
      "path" : "fr-lm-serie-imagerie.referenceWado.typeMedia",
      "short" : "Type de media",
      "definition" : "Type de media",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-serie-imagerie.referenceWado.reference",
      "path" : "fr-lm-serie-imagerie.referenceWado.reference",
      "short" : "Référence WADO",
      "definition" : "Référence WADO",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "uri"
      }]
    }]
  }
}

```
