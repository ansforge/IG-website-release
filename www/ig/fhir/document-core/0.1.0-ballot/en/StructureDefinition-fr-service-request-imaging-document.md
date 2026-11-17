# ServiceRequest - FR Service Request Imaging Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: ServiceRequest - FR Service Request Imaging Document 

**Usages:**

* Refer to this Profile: [DiagnosticReport - FR Diagnostic Report Imaging Document](StructureDefinition-fr-diagnostic-report-imaging-document.md), [ImagingStudy - FR Imaging study Document](StructureDefinition-fr-imaging-study-document.md), [Observation - FR Observation Radiation Exposure Document](StructureDefinition-fr-observation-radiation-exposure-document.md) and [Observation - FR Observation Result Document](StructureDefinition-fr-observation-result-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-service-request-imaging-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-service-request-imaging-document.csv), [Excel](../StructureDefinition-fr-service-request-imaging-document.xlsx), [Schematron](../StructureDefinition-fr-service-request-imaging-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-service-request-imaging-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-service-request-imaging-document",
  "version" : "0.1.0-ballot",
  "name" : "FRServiceRequestImagingDocument",
  "title" : "ServiceRequest - FR Service Request Imaging Document",
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
  "description" : "FRServiceRequestImagingDocument profil spécifique permet de porter des demandes d'examens d'imagerie.",
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
    "identity" : "quick",
    "uri" : "http://siframework.org/cqf",
    "name" : "Quality Improvement and Clinical Knowledge (QUICK)"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "ServiceRequest",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-service-request-document|0.1.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "ServiceRequest",
      "path" : "ServiceRequest"
    },
    {
      "id" : "ServiceRequest.extension",
      "path" : "ServiceRequest.extension",
      "min" : 1
    },
    {
      "id" : "ServiceRequest.extension:reason",
      "path" : "ServiceRequest.extension",
      "sliceName" : "reason",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/5.0/StructureDefinition/extension-ServiceRequest.reason|0.1.0"]
      }]
    },
    {
      "id" : "ServiceRequest.extension:reason/finaliteExamen",
      "path" : "ServiceRequest.extension",
      "sliceName" : "reason/finaliteExamen",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "ServiceRequest.extension:reason/finaliteExamen.extension",
      "path" : "ServiceRequest.extension.extension",
      "min" : 2
    },
    {
      "id" : "ServiceRequest.extension:reason/finaliteExamen.extension:concept",
      "path" : "ServiceRequest.extension.extension",
      "sliceName" : "concept",
      "min" : 1
    },
    {
      "id" : "ServiceRequest.extension:reason/finaliteExamen.extension:concept.extension",
      "path" : "ServiceRequest.extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "ServiceRequest.extension:reason/finaliteExamen.extension:concept.value[x]",
      "path" : "ServiceRequest.extension.extension.value[x]",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://interop.esante.gouv.fr/ig/fhir/document-core/CodeSystem/fr-cs-note-type",
          "code" : "finaliteExamen",
          "display" : "Finalité de l'examen"
        }]
      }
    },
    {
      "id" : "ServiceRequest.extension:reason/finaliteExamen.extension:concept.value[x].text",
      "path" : "ServiceRequest.extension.extension.value[x].text",
      "min" : 1
    },
    {
      "id" : "ServiceRequest.extension:reason/justificationDemande",
      "path" : "ServiceRequest.extension",
      "sliceName" : "reason/justificationDemande",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "ServiceRequest.extension:reason/justificationDemande.extension",
      "path" : "ServiceRequest.extension.extension",
      "min" : 2
    },
    {
      "id" : "ServiceRequest.extension:reason/justificationDemande.extension:concept",
      "path" : "ServiceRequest.extension.extension",
      "sliceName" : "concept",
      "min" : 1
    },
    {
      "id" : "ServiceRequest.extension:reason/justificationDemande.extension:concept.extension",
      "path" : "ServiceRequest.extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "ServiceRequest.extension:reason/justificationDemande.extension:concept.value[x]",
      "path" : "ServiceRequest.extension.extension.value[x]",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://interop.esante.gouv.fr/ig/fhir/document-core/CodeSystem/fr-cs-note-type",
          "code" : "justificationDemande",
          "display" : "Justification de la demande"
        }]
      }
    },
    {
      "id" : "ServiceRequest.extension:reason/justificationDemande.extension:concept.value[x].text",
      "path" : "ServiceRequest.extension.extension.value[x].text",
      "min" : 1
    },
    {
      "id" : "ServiceRequest.category",
      "path" : "ServiceRequest.category",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "ServiceRequest.category:imagerie",
      "path" : "ServiceRequest.category",
      "sliceName" : "imagerie",
      "short" : "Catégorie de la demande d'examen d'imagerie",
      "min" : 1,
      "max" : "1",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "363679005"
        }]
      }
    },
    {
      "id" : "ServiceRequest.code",
      "path" : "ServiceRequest.code",
      "short" : "Examen d'imagerie prescrit",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-code-document-imagerie-cisis|20260928134049"
      }
    },
    {
      "id" : "ServiceRequest.supportingInfo.extension:codeableConcept",
      "path" : "ServiceRequest.supportingInfo.extension",
      "sliceName" : "codeableConcept",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/5.0/StructureDefinition/extension-ServiceRequest.supportingInfo|0.1.0"]
      }]
    }]
  }
}

```
