# Modèle logique métier - FR LM SOP Instance - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM SOP Instance**

## Logical Model: Modèle logique métier - FR LM SOP Instance 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-sop-instance | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMSOPInstance |

 
SOP Instance 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Serie imagerie](StructureDefinition-fr-lm-serie-imagerie.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-sop-instance)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-sop-instance.csv), [Excel](StructureDefinition-fr-lm-sop-instance.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-sop-instance",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-sop-instance",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMSOPInstance",
  "title" : "Modèle logique métier - FR LM SOP Instance",
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
  "description" : "SOP Instance",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-sop-instance",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-sop-instance",
      "path" : "fr-lm-sop-instance",
      "short" : "Modèle logique métier - FR LM SOP Instance",
      "definition" : "SOP Instance"
    },
    {
      "id" : "fr-lm-sop-instance.uuidSOPInstance",
      "path" : "fr-lm-sop-instance.uuidSOPInstance",
      "short" : "UUID SOP instance",
      "definition" : "UUID SOP instance",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-sop-instance.classeSOP",
      "path" : "fr-lm-sop-instance.classeSOP",
      "short" : "Classe SOP",
      "definition" : "Classe SOP",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "description" : "JDV-SOPClass_CISIS (1.2.250.1.213.1.1.5.689)"
      }
    },
    {
      "id" : "fr-lm-sop-instance.description",
      "path" : "fr-lm-sop-instance.description",
      "short" : "Partie narrative de l'observation",
      "definition" : "Partie narrative de l'observation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-sop-instance.statut",
      "path" : "fr-lm-sop-instance.statut",
      "short" : "status de l'observation",
      "definition" : "status de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-sop-instance.date",
      "path" : "fr-lm-sop-instance.date",
      "short" : "Date de l'observation",
      "definition" : "Date de l'observation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-sop-instance.nombreCadresReferences",
      "path" : "fr-lm-sop-instance.nombreCadresReferences",
      "short" : "Nombres de cadres référencés",
      "definition" : "Nombres de cadres référencés",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "integer"
      }]
    }]
  }
}

```
