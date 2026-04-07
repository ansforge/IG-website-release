# CDA - FR Certitude - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - FR Certitude**

## Logical Model: CDA - FR Certitude 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-certitude | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRCDACertitude |

 
Entrée FR-Certitude: Cette entrée permet de fournir la certitude d’une observation (problème ou allergie/hypersensibilité). Elle est utilisée exclusivement dans un lien entryRelationship grâce auquel elle est liée à l’élément qu’elle qualifie. 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - FR Allergie ou hypersensibilite](StructureDefinition-fr-cda-allergie-ou-hypersensibilite.md) and [CDA - FR Probleme](StructureDefinition-fr-cda-probleme.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-certitude)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-certitude.csv), [Excel](StructureDefinition-fr-cda-certitude.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-certitude",
  "extension" : [{
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-target",
    "_valueBoolean" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
        "valueCode" : "not-applicable"
      }]
    }
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-namespace",
    "valueUri" : "urn:hl7-org:v3"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-name",
    "valueString" : "observation"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-certitude",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCDACertitude",
  "title" : "CDA - FR Certitude",
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
  "description" : "Entrée FR-Certitude: Cette entrée permet de fournir la certitude d'une observation (problème ou allergie/hypersensibilité). Elle est utilisée exclusivement dans un lien entryRelationship grâce auquel elle est liée à l’élément qu’elle qualifie.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "logical",
  "abstract" : false,
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/Observation",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/Observation",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Observation.templateId",
      "path" : "Observation.templateId",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "root"
        }],
        "rules" : "open"
      },
      "min" : 3,
      "max" : "3"
    },
    {
      "id" : "Observation.templateId:iheSimpleObservation",
      "path" : "Observation.templateId",
      "sliceName" : "iheSimpleObservation",
      "short" : "Conformité Simple Observation (IHE-PCC)",
      "definition" : "Conformité Simple Observation (IHE-PCC)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Observation.templateId:iheSimpleObservation.root",
      "path" : "Observation.templateId.root",
      "min" : 1,
      "patternString" : "1.3.6.1.4.1.19376.1.5.3.1.4.13"
    },
    {
      "id" : "Observation.templateId:frSimpleObservation",
      "path" : "Observation.templateId",
      "sliceName" : "frSimpleObservation",
      "short" : "Conformité FR-Simple-observation (CI-SIS)",
      "definition" : "Conformité FR-Simple-observation (CI-SIS)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Observation.templateId:frSimpleObservation.root",
      "path" : "Observation.templateId.root",
      "min" : 1,
      "patternString" : "1.2.250.1.213.1.1.3.48"
    },
    {
      "id" : "Observation.templateId:frCertitude",
      "path" : "Observation.templateId",
      "sliceName" : "frCertitude",
      "short" : "Conformité FR-Certitude (CI-SIS)",
      "definition" : "Conformité FR-Certitude (CI-SIS)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Observation.templateId:frCertitude.root",
      "path" : "Observation.templateId.root",
      "min" : 1,
      "patternString" : "1.2.250.1.213.1.1.3.171"
    },
    {
      "id" : "Observation.classCode",
      "path" : "Observation.classCode",
      "patternCode" : "OBS",
      "mustSupport" : true
    },
    {
      "id" : "Observation.moodCode",
      "path" : "Observation.moodCode",
      "patternCode" : "EVN",
      "mustSupport" : true
    },
    {
      "id" : "Observation.id",
      "path" : "Observation.id",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Observation.code",
      "path" : "Observation.code",
      "short" : "Code de l'observation",
      "definition" : "Code de l'observation",
      "mustSupport" : true
    },
    {
      "id" : "Observation.code.code",
      "path" : "Observation.code.code",
      "patternCode" : "66455-7"
    },
    {
      "id" : "Observation.code.codeSystem",
      "path" : "Observation.code.codeSystem",
      "patternString" : "2.16.840.1.113883.6.1"
    },
    {
      "id" : "Observation.code.codeSystemName",
      "path" : "Observation.code.codeSystemName",
      "patternString" : "LOINC"
    },
    {
      "id" : "Observation.code.displayName",
      "path" : "Observation.code.displayName",
      "patternString" : "Certitude"
    },
    {
      "id" : "Observation.text",
      "path" : "Observation.text",
      "short" : "Description narrative de l'observation",
      "definition" : "Description narrative de l'observation",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Observation.text.reference",
      "path" : "Observation.text.reference",
      "min" : 1
    },
    {
      "id" : "Observation.statusCode",
      "path" : "Observation.statusCode",
      "short" : "Statut de l'observation",
      "definition" : "Statut de l'observation",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Observation.statusCode.code",
      "path" : "Observation.statusCode.code",
      "patternCode" : "completed"
    },
    {
      "id" : "Observation.effectiveTime",
      "path" : "Observation.effectiveTime",
      "short" : "Date de l'observation",
      "definition" : "Date de l'observation",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Observation.value",
      "path" : "Observation.value",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/CD"
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-hl7-condition-ver-status-cisis"
      }
    }]
  }
}

```
