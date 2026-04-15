# CDA - FR DICOM Exposition patient - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - FR DICOM Exposition patient**

## Logical Model: CDA - FR DICOM Exposition patient 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-dicom-exposition-patient | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRCDADICOMExpositionPatient |

 
Entrée FR-DICOM-Exposition-patient: DICOM Part 20 - inclue dans l’entrée FR-DICOM-Exposition-aux-radiations. Cette entrée permet d’enregistrer l’identité du professionnel de santé ayant donné l’autorisation de l’exposition du patient aux rayonnements.Elle est obligatoire dans la norme DICOM Part 20. 

**Utilisations:**

* Ce Profil de modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-dicom-exposition-patient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-dicom-exposition-patient.csv), [Excel](StructureDefinition-fr-cda-dicom-exposition-patient.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-dicom-exposition-patient",
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
    "valueString" : "procedure"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-dicom-exposition-patient",
  "version" : "0.1.0-snapshot",
  "name" : "FRCDADICOMExpositionPatient",
  "title" : "CDA - FR DICOM Exposition patient",
  "status" : "draft",
  "date" : "2026-04-15T16:11:27+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Entrée FR-DICOM-Exposition-patient: DICOM Part 20 - inclue dans l'entrée FR-DICOM-Exposition-aux-radiations. Cette entrée permet d’enregistrer l'identité du professionnel de santé ayant donné l'autorisation de l'exposition du patient aux rayonnements.Elle est obligatoire dans la norme DICOM Part 20.",
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
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/Procedure",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/Procedure",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Procedure",
      "path" : "Procedure"
    },
    {
      "id" : "Procedure.templateId",
      "path" : "Procedure.templateId",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "root"
        }],
        "rules" : "open"
      },
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Procedure.templateId:frDicomExpositionPatient",
      "path" : "Procedure.templateId",
      "sliceName" : "frDicomExpositionPatient",
      "short" : "FR-DICOM-Exposition-patient (CI-SIS)",
      "definition" : "FR-DICOM-Exposition-patient (CI-SIS)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Procedure.templateId:frDicomExpositionPatient.root",
      "path" : "Procedure.templateId.root",
      "min" : 1,
      "patternString" : "1.2.250.1.213.1.1.3.165"
    },
    {
      "id" : "Procedure.classCode",
      "path" : "Procedure.classCode",
      "mustSupport" : true
    },
    {
      "id" : "Procedure.moodCode",
      "path" : "Procedure.moodCode",
      "patternCode" : "EVN",
      "mustSupport" : true
    },
    {
      "id" : "Procedure.code",
      "path" : "Procedure.code",
      "short" : "Code de l'entrée",
      "definition" : "Code de l'entrée",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Procedure.code.code",
      "path" : "Procedure.code.code",
      "patternCode" : "121290"
    },
    {
      "id" : "Procedure.code.codeSystem",
      "path" : "Procedure.code.codeSystem",
      "patternString" : "1.2.840.10008.2.16.4"
    },
    {
      "id" : "Procedure.code.codeSystemName",
      "path" : "Procedure.code.codeSystemName",
      "patternString" : "DCM"
    },
    {
      "id" : "Procedure.code.displayName",
      "path" : "Procedure.code.displayName",
      "patternString" : "Exposition du patient aux rayonnements ionisants"
    },
    {
      "id" : "Procedure.participant",
      "path" : "Procedure.participant",
      "short" : "Participant",
      "definition" : "Participant",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Participant2",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-participant-corps"]
      }]
    }]
  }
}

```
