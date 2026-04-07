# CDA - FR DICOM Examen imagerie - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - FR DICOM Examen imagerie**

## Logical Model: CDA - FR DICOM Examen imagerie 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-dicom-examen-imagerie | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRCDADICOMExamenImagerie |

 
Entrée FR-DICOM-Examen-imagerie: DICOM Part 20 - Study Act. Cette entrée contient les informations DICOM d’un examen d’imagerie réalisé sur un patient. L’examen est composé d’une ou de plusieurs séries d’images médicales. 

**Utilisations:**

* Ce Profil de modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-dicom-examen-imagerie)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-dicom-examen-imagerie.csv), [Excel](StructureDefinition-fr-cda-dicom-examen-imagerie.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-dicom-examen-imagerie",
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
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-namespace",
    "valueUri" : "urn:hl7-org:v3"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-name",
    "valueString" : "act"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-dicom-examen-imagerie",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCDADICOMExamenImagerie",
  "title" : "CDA - FR DICOM Examen imagerie",
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
  "description" : "Entrée FR-DICOM-Examen-imagerie: DICOM Part 20 - Study Act. Cette entrée contient les informations DICOM d’un examen d’imagerie réalisé sur un patient. L’examen est composé d'une ou de plusieurs séries d’images médicales.",
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
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/Act",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/Act",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Act",
      "path" : "Act"
    },
    {
      "id" : "Act.templateId",
      "path" : "Act.templateId",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "root"
        }],
        "rules" : "open"
      },
      "min" : 2,
      "max" : "2"
    },
    {
      "id" : "Act.templateId:frDicomExamenImagerie",
      "path" : "Act.templateId",
      "sliceName" : "frDicomExamenImagerie",
      "short" : "Conformité FR-DICOM-Examen-imagerie (CI-SIS)",
      "definition" : "Conformité FR-DICOM-Examen-imagerie (CI-SIS)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Act.templateId:frDicomExamenImagerie.root",
      "path" : "Act.templateId.root",
      "min" : 1,
      "patternString" : "1.2.250.1.213.1.1.3.155"
    },
    {
      "id" : "Act.templateId:FRCDADICOMExamenimagerie",
      "path" : "Act.templateId",
      "sliceName" : "FRCDADICOMExamenimagerie",
      "short" : "Conformité Study Act (DICOM Part 20)",
      "definition" : "Conformité Study Act (DICOM Part 20)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Act.templateId:FRCDADICOMExamenimagerie.root",
      "path" : "Act.templateId.root",
      "min" : 1,
      "patternString" : "1.2.840.10008.9.16"
    },
    {
      "id" : "Act.classCode",
      "path" : "Act.classCode",
      "mustSupport" : true
    },
    {
      "id" : "Act.moodCode",
      "path" : "Act.moodCode",
      "mustSupport" : true
    },
    {
      "id" : "Act.id",
      "path" : "Act.id",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1
    },
    {
      "id" : "Act.code",
      "path" : "Act.code",
      "short" : "Code de l'acte",
      "definition" : "Code de l'acte",
      "mustSupport" : true
    },
    {
      "id" : "Act.code.code",
      "path" : "Act.code.code",
      "patternCode" : "113014"
    },
    {
      "id" : "Act.code.codeSystem",
      "path" : "Act.code.codeSystem",
      "patternString" : "1.2.840.10008.2.16.4"
    },
    {
      "id" : "Act.code.codeSystemName",
      "path" : "Act.code.codeSystemName",
      "patternString" : "DCM"
    },
    {
      "id" : "Act.code.displayName",
      "path" : "Act.code.displayName",
      "patternString" : "Examen"
    },
    {
      "id" : "Act.text",
      "path" : "Act.text",
      "short" : "Partie narrative de l'entrée",
      "definition" : "Partie narrative de l'entrée",
      "mustSupport" : true
    },
    {
      "id" : "Act.effectiveTime",
      "path" : "Act.effectiveTime",
      "short" : "Date de l'acte",
      "definition" : "Date de l'acte",
      "mustSupport" : true
    },
    {
      "id" : "Act.entryRelationship",
      "path" : "Act.entryRelationship",
      "short" : "Série d'images médicales de l'examen d'imagerie",
      "definition" : "Série d'images médicales de l'examen d'imagerie",
      "mustSupport" : true
    },
    {
      "id" : "Act.entryRelationship.typeCode",
      "path" : "Act.entryRelationship.typeCode",
      "patternCode" : "COMP"
    },
    {
      "id" : "Act.entryRelationship.act",
      "path" : "Act.entryRelationship.act",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Act",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-dicom-serie-imagerie"]
      }]
    }]
  }
}

```
