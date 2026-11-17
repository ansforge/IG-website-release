# ImagingStudy - FR Imaging study Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: ImagingStudy - FR Imaging study Document 

**Usages:**

* Refer to this Profile: [FR Comparison Studies Extension](StructureDefinition-fr-comparison-studies-extension.md), [DiagnosticReport - FR Diagnostic Report Imaging Document](StructureDefinition-fr-diagnostic-report-imaging-document.md) and [Observation - FR Observation Radiation Exposure Document](StructureDefinition-fr-observation-radiation-exposure-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-imaging-study-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-imaging-study-document.csv), [Excel](../StructureDefinition-fr-imaging-study-document.xlsx), [Schematron](../StructureDefinition-fr-imaging-study-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-imaging-study-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-imaging-study-document",
  "version" : "0.1.0-ballot",
  "name" : "FRImagingStudyDocument",
  "title" : "ImagingStudy - FR Imaging study Document",
  "status" : "draft",
  "date" : "2026-11-17T16:56:12+00:00",
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
      "display" : "France (la)"
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ImagingStudy|4.0.1",
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
      "min" : 1
    },
    {
      "id" : "ImagingStudy.identifier:studyInstanceUid",
      "path" : "ImagingStudy.identifier",
      "sliceName" : "studyInstanceUid",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Identifier",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-study-instance-uid-identifier-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "ImagingStudy.modality",
      "path" : "ImagingStudy.modality",
      "short" : "Modalité d'acquisition de l'acte d'imagerie",
      "min" : 1,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-modalite-acquisition-cisis|20260420150250"
      }
    },
    {
      "id" : "ImagingStudy.started",
      "path" : "ImagingStudy.started",
      "short" : "Date de l'acte"
    },
    {
      "id" : "ImagingStudy.basedOn",
      "path" : "ImagingStudy.basedOn",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "rules" : "open"
      }
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
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-service-request-imaging-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "ImagingStudy.basedOn:serviceRequestAccessionNumber.identifier",
      "path" : "ImagingStudy.basedOn.identifier",
      "min" : 1,
      "type" : [{
        "code" : "Identifier",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-study-instance-uid-identifier-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "ImagingStudy.numberOfSeries",
      "path" : "ImagingStudy.numberOfSeries",
      "short" : "Nombre de séries"
    },
    {
      "id" : "ImagingStudy.procedureReference",
      "path" : "ImagingStudy.procedureReference",
      "short" : "Technique d'imagerie",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-procedure-imaging-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "ImagingStudy.reasonCode",
      "path" : "ImagingStudy.reasonCode",
      "short" : "Objectifs de référence de l'imagerie",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-imagerie-objectif-reference-cisis|20260928134050"
      }
    },
    {
      "id" : "ImagingStudy.series",
      "path" : "ImagingStudy.series",
      "short" : "Séries d'examen",
      "min" : 1,
      "max" : "1"
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
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-modalite-acquisition-cisis|20260420150250"
      }
    },
    {
      "id" : "ImagingStudy.series.endpoint",
      "path" : "ImagingStudy.series.endpoint",
      "short" : "Référence WADO",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-endpoint-wado-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "ImagingStudy.series.bodySite",
      "path" : "ImagingStudy.series.bodySite",
      "short" : "Localisation anatomique en SNOMED CT",
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://hl7.org/fhir/ValueSet/body-site|4.0.1"
      }
    },
    {
      "id" : "ImagingStudy.series.laterality",
      "path" : "ImagingStudy.series.laterality",
      "short" : "modificateur topographique",
      "min" : 1,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-modificateur-topographique-cisis|20260928134049"
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
      "min" : 1
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
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-number-of-frames-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "ImagingStudy.series.instance.sopClass",
      "path" : "ImagingStudy.series.instance.sopClass",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-sop-class-cisis|20260928134049"
      }
    }]
  }
}

```
