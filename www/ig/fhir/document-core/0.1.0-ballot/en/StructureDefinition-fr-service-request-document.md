# ServiceRequest - FR Service Request Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: ServiceRequest - FR Service Request Document 

**Usages:**

* Derived from this Profile: [ServiceRequest - FR Service Request Imaging Document](StructureDefinition-fr-service-request-imaging-document.md)
* Refer to this Profile: [DiagnosticReport - FR Diagnostic Report BIO chapter Document](StructureDefinition-fr-diagnostic-report-bio-chapter-document.md) and [MedicationRequest - FR Medication Request Document](StructureDefinition-fr-medication-request-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-service-request-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-service-request-document.csv), [Excel](../StructureDefinition-fr-service-request-document.xlsx), [Schematron](../StructureDefinition-fr-service-request-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-service-request-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-service-request-document",
  "version" : "0.1.0-ballot",
  "name" : "FRServiceRequestDocument",
  "title" : "ServiceRequest - FR Service Request Document",
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
  "description" : "FRServiceRequestDocument profil permet de porter des demandes d'examens (analyses biologiques, évaluations, étude d'imagerie, etc…) ou de suivis particuliers à programmer dans le cadre d'un plan de soins.",
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
  "baseDefinition" : "https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-service-request|3.0.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "ServiceRequest",
      "path" : "ServiceRequest",
      "constraint" : [{
        "key" : "fr-invariant-intent",
        "severity" : "error",
        "human" : "L'intention doit être order, plan ou proposal.",
        "expression" : "intent = 'order' or intent = 'plan' or intent = 'proposal'",
        "source" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-service-request-document|0.1.0-ballot"
      }]
    },
    {
      "id" : "ServiceRequest.extension:author",
      "path" : "ServiceRequest.extension",
      "sliceName" : "author",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-actor-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "ServiceRequest.extension:author.extension:type",
      "path" : "ServiceRequest.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "ServiceRequest.extension:author.extension:type.value[x]",
      "path" : "ServiceRequest.extension.extension.value[x]",
      "patternCode" : "AUT"
    }]
  }
}

```
