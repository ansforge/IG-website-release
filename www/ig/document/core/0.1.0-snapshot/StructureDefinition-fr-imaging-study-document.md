# ImagingStudy - FR Imaging study Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ImagingStudy - FR Imaging study Document**

## Resource Profile: ImagingStudy - FR Imaging study Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-imaging-study-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRImagingStudyDocument |

 
FRImagingStudyDocument (DICOM Part 20 - Study Act) contient les informations DICOM d’un examen d’imagerie réalisé sur un patient. L’examen est composé d’une ou de plusieurs séries d’images médicales. 

**Utilisations:**

* Référence ce Profil: [FR Comparison Studies Extension](StructureDefinition-fr-comparison-studies-extension.md), [DiagnosticReport - FR Diagnostic Report Imaging Document](StructureDefinition-fr-diagnostic-report-imaging-document.md) and [Observation - FR Observation Radiation Exposure Document](StructureDefinition-fr-observation-radiation-exposure-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-imaging-study-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-imaging-study-document.csv), [Excel](StructureDefinition-fr-imaging-study-document.xlsx), [Schematron](StructureDefinition-fr-imaging-study-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-imaging-study-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-imaging-study-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRImagingStudyDocument",
  "title" : "ImagingStudy - FR Imaging study Document",
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
  "description" : "FRImagingStudyDocument (DICOM Part 20 - Study Act) contient les informations DICOM d’un examen d’imagerie réalisé sur un patient.\nL’examen est composé d'une ou de plusieurs séries d’images médicales.",
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
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "dicom",
    "uri" : "http://nema.org/dicom",
    "name" : "DICOM Tag Mapping"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "ImagingStudy",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ImagingStudy",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "ImagingStudy",
      "path" : "ImagingStudy"
    },
    {
      "id" : "ImagingStudy.identifier",
      "path" : "ImagingStudy.identifier",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "system"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "short" : "Study Instance UUID",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "ImagingStudy.identifier:studyInstanceUid",
      "path" : "ImagingStudy.identifier",
      "sliceName" : "studyInstanceUid",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Identifier",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-study-instance-uid-identifier-document"]
      }]
    },
    {
      "id" : "ImagingStudy.modality",
      "path" : "ImagingStudy.modality",
      "short" : "Modalité d'acquisition de l'acte d'imagerie",
      "min" : 1,
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-modalite-acquisition-cisis"
      }
    },
    {
      "id" : "ImagingStudy.started",
      "path" : "ImagingStudy.started",
      "short" : "Date de l'acte",
      "mustSupport" : true
    },
    {
      "id" : "ImagingStudy.basedOn",
      "path" : "ImagingStudy.basedOn",
      "slicing" : {
        "discriminator" : [{
          "type" : "pattern",
          "path" : "$this"
        }],
        "rules" : "open"
      },
      "mustSupport" : true
    },
    {
      "id" : "ImagingStudy.basedOn:serviceRequestAccessionNumber",
      "path" : "ImagingStudy.basedOn",
      "sliceName" : "serviceRequestAccessionNumber",
      "short" : "Référence à la demande d'examen contenant l'Accession Number",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-service-request-document"]
      }]
    },
    {
      "id" : "ImagingStudy.procedureReference",
      "path" : "ImagingStudy.procedureReference",
      "short" : "Technique d'imagerie",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-procedure-imaging-document"]
      }]
    },
    {
      "id" : "ImagingStudy.reasonCode",
      "path" : "ImagingStudy.reasonCode",
      "short" : "Objectifs de référence de l'imagerie",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-imagerie-objectif-reference-cisis"
      }
    },
    {
      "id" : "ImagingStudy.series",
      "path" : "ImagingStudy.series",
      "short" : "Séries d'examen",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "ImagingStudy.series.uid",
      "path" : "ImagingStudy.series.uid",
      "short" : "DICOM Series Instance UID"
    },
    {
      "id" : "ImagingStudy.series.modality",
      "path" : "ImagingStudy.series.modality",
      "short" : "Modalité d'acquisition de la série d'acte",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-modalite-acquisition-cisis"
      }
    },
    {
      "id" : "ImagingStudy.series.endpoint",
      "path" : "ImagingStudy.series.endpoint",
      "short" : "Référence WADO",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-endpoint-wado-document"]
      }]
    },
    {
      "id" : "ImagingStudy.series.bodySite",
      "path" : "ImagingStudy.series.bodySite",
      "short" : "Localisation anatomique en SNOMED CT"
    },
    {
      "id" : "ImagingStudy.series.laterality",
      "path" : "ImagingStudy.series.laterality",
      "short" : "modificateur topographique",
      "min" : 1,
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-modificateur-topographique-cisis"
      }
    },
    {
      "id" : "ImagingStudy.series.started",
      "path" : "ImagingStudy.series.started",
      "short" : "Date de la série d'actes"
    },
    {
      "id" : "ImagingStudy.series.instance",
      "path" : "ImagingStudy.series.instance",
      "short" : "Url permettant d’accéder aux images sur la Drim box source",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "ImagingStudy.series.instance.extension",
      "path" : "ImagingStudy.series.instance.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "ImagingStudy.series.instance.extension:number-of-frames",
      "path" : "ImagingStudy.series.instance.extension",
      "sliceName" : "number-of-frames",
      "short" : "Nombre de cadres dans une instance d'image",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-number-of-frames-extension"]
      }]
    },
    {
      "id" : "ImagingStudy.series.instance.sopClass",
      "path" : "ImagingStudy.series.instance.sopClass",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-sop-class-cisis"
      }
    }]
  }
}

```
