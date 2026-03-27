# Modèle logique métier - FR LM Examen Imagerie - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Examen Imagerie**

## Logical Model: Modèle logique métier - FR LM Examen Imagerie 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-examen-imagerie | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMExamenImagerie |

 
DICOM Examen Imagerie 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Object Catalog](StructureDefinition-fr-lm-object-catalog.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-examen-imagerie)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-examen-imagerie.csv), [Excel](StructureDefinition-fr-lm-examen-imagerie.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-examen-imagerie",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-examen-imagerie",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMExamenImagerie",
  "title" : "Modèle logique métier - FR LM Examen Imagerie",
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
  "description" : "DICOM Examen Imagerie",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-examen-imagerie",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-examen-imagerie",
      "path" : "fr-lm-examen-imagerie",
      "short" : "Modèle logique métier - FR LM Examen Imagerie",
      "definition" : "DICOM Examen Imagerie"
    },
    {
      "id" : "fr-lm-examen-imagerie.uuidInstanceExamen",
      "path" : "fr-lm-examen-imagerie.uuidInstanceExamen",
      "short" : "UUID instance examen",
      "definition" : "UUID instance examen",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-examen-imagerie.codeActe",
      "path" : "fr-lm-examen-imagerie.codeActe",
      "short" : "Code de l'acte",
      "definition" : "Code de l'acte",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-examen-imagerie.description",
      "path" : "fr-lm-examen-imagerie.description",
      "short" : "Partie narrative de l'entrée",
      "definition" : "Partie narrative de l'entrée",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-examen-imagerie.dateActe",
      "path" : "fr-lm-examen-imagerie.dateActe",
      "short" : "Date de l'acte",
      "definition" : "Date de l'acte",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-examen-imagerie.serieImagerie",
      "path" : "fr-lm-examen-imagerie.serieImagerie",
      "short" : "Serie-imagerie",
      "definition" : "Serie-imagerie",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-serie-imagerie"
      }]
    },
    {
      "id" : "fr-lm-examen-imagerie.objectifsReferences",
      "path" : "fr-lm-examen-imagerie.objectifsReferences",
      "short" : "Objectifs de reference",
      "definition" : "Objectifs de reference",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "description" : "jdv-imagerie-objectif-reference-cisis (1.2.250.1.213.1.1.5.672)"
      }
    }]
  }
}

```
