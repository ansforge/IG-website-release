# Observation - FR Observation Birth Event Document - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation - FR Observation Birth Event Document**

## Resource Profile: Observation - FR Observation Birth Event Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-birth-event-document | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRObservationBirthEventDocument |

 
FRObservationBirthEventDocument est un profil qui permet de rassembler les observations relatives à une naissance. 

**Utilisations:**

* Référence ce Profil: [Observation - FR Observation Pregnancy History Document](StructureDefinition-fr-observation-pregnancy-history-document.md) and [List - FR Pregnancy History Document](StructureDefinition-fr-pregnancy-history-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-observation-birth-event-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-observation-birth-event-document.csv), [Excel](StructureDefinition-fr-observation-birth-event-document.xlsx), [Schematron](StructureDefinition-fr-observation-birth-event-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-observation-birth-event-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-birth-event-document",
  "version" : "0.1.0-snapsnot",
  "name" : "FRObservationBirthEventDocument",
  "title" : "Observation - FR Observation Birth Event Document",
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
  "description" : "FRObservationBirthEventDocument est un profil qui permet de rassembler les observations relatives à une naissance.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
  {
    "identity" : "sct-concept",
    "uri" : "http://snomed.info/conceptdomain",
    "name" : "SNOMED CT Concept Domain Binding"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "sct-attr",
    "uri" : "http://snomed.org/attributebinding",
    "name" : "SNOMED CT Attribute Binding"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Observation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Observation",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Observation",
      "path" : "Observation"
    },
    {
      "id" : "Observation.status",
      "path" : "Observation.status",
      "short" : "Statut de l'observation",
      "patternCode" : "completed"
    },
    {
      "id" : "Observation.code",
      "path" : "Observation.code",
      "short" : "Code de l'observation",
      "mustSupport" : true
    },
    {
      "id" : "Observation.code.coding.system",
      "path" : "Observation.code.coding.system",
      "patternUri" : "http://snomed.info/sct"
    },
    {
      "id" : "Observation.code.coding.code",
      "path" : "Observation.code.coding.code",
      "patternCode" : "118215003"
    },
    {
      "id" : "Observation.code.coding.display",
      "path" : "Observation.code.coding.display",
      "patternString" : "observation sur l'accouchement"
    },
    {
      "id" : "Observation.focus",
      "path" : "Observation.focus",
      "short" : "Identification du nouveau né.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/RelatedPerson"]
      }],
      "constraint" : [{
        "key" : "child-relationship",
        "severity" : "error",
        "human" : "Le relationship de RelatedPerson doit être fixé à CHILD.",
        "expression" : "resolve().relationship.coding.where(code = 'CHILD').exists()",
        "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-birth-event-document"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.effective[x]",
      "path" : "Observation.effective[x]",
      "short" : "Période des observations.\n - Quand ce profil est utilisée dans FRObservationPregnancy, cette période doit correspondre à la période de la grossesse.",
      "min" : 1,
      "type" : [{
        "code" : "dateTime"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.value[x]",
      "path" : "Observation.value[x]",
      "max" : "0"
    },
    {
      "id" : "Observation.hasMember",
      "path" : "Observation.hasMember",
      "short" : "Observation sur la naissance.",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-pregnancy-document"]
      }],
      "mustSupport" : true
    }]
  }
}

```
