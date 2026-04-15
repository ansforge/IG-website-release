# ServiceRequest - FR Service Request Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ServiceRequest - FR Service Request Document**

## Resource Profile: ServiceRequest - FR Service Request Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-service-request-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRServiceRequestDocument |

 
FRServiceRequestDocument profil permet de porter des demandes d’examens (analyses biologiques, évaluations, étude d’imagerie, etc…) ou de suivis particuliers à programmer dans le cadre d’un plan de soins. 

**Utilisations:**

* Référence ce Profil: [DiagnosticReport - FR Diagnostic Report Imaging Document](StructureDefinition-fr-diagnostic-report-imaging-document.md), [ImagingStudy - FR Imaging study Document](StructureDefinition-fr-imaging-study-document.md), [Observation - FR Observation Radiation Exposure Document](StructureDefinition-fr-observation-radiation-exposure-document.md), [Observation - FR Observation Result Document](StructureDefinition-fr-observation-result-document.md) and [Procedure - FR Procedure Imaging Document](StructureDefinition-fr-procedure-imaging-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-service-request-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-service-request-document.csv), [Excel](StructureDefinition-fr-service-request-document.xlsx), [Schematron](StructureDefinition-fr-service-request-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-service-request-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-service-request-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRServiceRequestDocument",
  "title" : "ServiceRequest - FR Service Request Document",
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
  "description" : "FRServiceRequestDocument profil permet de porter des demandes d'examens (analyses biologiques, évaluations, étude d'imagerie, etc…) ou de suivis particuliers à programmer dans le cadre d'un plan de soins.",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ServiceRequest",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "ServiceRequest",
      "path" : "ServiceRequest"
    },
    {
      "id" : "ServiceRequest.extension",
      "path" : "ServiceRequest.extension",
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
      "id" : "ServiceRequest.extension:interpretation",
      "path" : "ServiceRequest.extension",
      "sliceName" : "interpretation",
      "short" : "Interprétation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-interpretation-extension"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "ServiceRequest.extension:method",
      "path" : "ServiceRequest.extension",
      "sliceName" : "method",
      "short" : "Méthode",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-method-extension"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "ServiceRequest.identifier",
      "path" : "ServiceRequest.identifier",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "type"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "ServiceRequest.identifier:accessionNumber",
      "path" : "ServiceRequest.identifier",
      "sliceName" : "accessionNumber",
      "short" : "Accession Number de la demande d’examen d’imagerie",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Identifier",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-accession-number-identifier-document"]
      }]
    },
    {
      "id" : "ServiceRequest.intent",
      "path" : "ServiceRequest.intent",
      "short" : "Si la demande fait partie d'un plan de soins : 'INT = order'\nSi la demande est une proposition : 'PRP = proposal'\nSi la demande est un objectif à atteindre : 'GOL = plan'",
      "mustSupport" : true
    },
    {
      "id" : "ServiceRequest.category",
      "path" : "ServiceRequest.category",
      "short" : "Catégorie de la demande",
      "min" : 1
    },
    {
      "id" : "ServiceRequest.code",
      "path" : "ServiceRequest.code",
      "short" : "Type de la demande",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "ServiceRequest.code.coding",
      "path" : "ServiceRequest.code.coding",
      "short" : "Type de la demande : Si aucun code n'est trouvé dans des terminologies existantes, utiliser le code : GEN-092.04.20 'Autre demande d’examen ou de suivi'"
    },
    {
      "id" : "ServiceRequest.orderDetail",
      "path" : "ServiceRequest.orderDetail",
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "ServiceRequest.orderDetail.coding",
      "path" : "ServiceRequest.orderDetail.coding",
      "short" : "Résultat de la demande"
    },
    {
      "id" : "ServiceRequest.occurrence[x]",
      "path" : "ServiceRequest.occurrence[x]",
      "short" : "Date prévisionnelle de l'examen, du suivi, de l'objectif",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "ServiceRequest.requester",
      "path" : "ServiceRequest.requester",
      "mustSupport" : true
    },
    {
      "id" : "ServiceRequest.requester.extension:author",
      "path" : "ServiceRequest.requester.extension",
      "sliceName" : "author",
      "short" : "Auteur de la demande",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }]
    },
    {
      "id" : "ServiceRequest.requester.extension:author.extension:type",
      "path" : "ServiceRequest.requester.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "ServiceRequest.requester.extension:author.extension:type.value[x]",
      "path" : "ServiceRequest.requester.extension.extension.value[x]",
      "patternCode" : "AUT"
    },
    {
      "id" : "ServiceRequest.bodySite",
      "path" : "ServiceRequest.bodySite",
      "short" : "Cible",
      "mustSupport" : true
    },
    {
      "id" : "ServiceRequest.note",
      "path" : "ServiceRequest.note",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "text"
        }],
        "rules" : "open"
      },
      "short" : "Justification de la demande d’examen / Finalité de l'examen",
      "min" : 2
    },
    {
      "id" : "ServiceRequest.note:finaliteExamen",
      "path" : "ServiceRequest.note",
      "sliceName" : "finaliteExamen",
      "short" : "Finalité de l’examen demandé",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "ServiceRequest.note:finaliteExamen.text",
      "path" : "ServiceRequest.note.text",
      "short" : "Finalité de l’examen"
    },
    {
      "id" : "ServiceRequest.note:justificationDemande",
      "path" : "ServiceRequest.note",
      "sliceName" : "justificationDemande",
      "short" : "Justification de la demande d’examen",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "ServiceRequest.note:justificationDemande.text",
      "path" : "ServiceRequest.note.text",
      "short" : "Justification de la demande d'examen"
    }]
  }
}

```
