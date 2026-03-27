# DiagnosticReport - FR Diagnostic Report Imaging Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DiagnosticReport - FR Diagnostic Report Imaging Document**

## Resource Profile: DiagnosticReport - FR Diagnostic Report Imaging Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-diagnostic-report-imaging-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRDiagnosticReportImagingDocument |

 
Le profil FRDiagnosticReportImagingDocument est dédié aux comptes rendus d’imagerie. Ce document représente le rapport d’un examen d’imagerie. Il constitue la ressource principale qui fait référence à l’ensemble des données produites lors de l’examen d’imagerie. 

**Utilisations:**

* Référence ce Profil: [Procedure - FR Procedure Imaging Document](StructureDefinition-fr-procedure-imaging-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-diagnostic-report-imaging-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-diagnostic-report-imaging-document.csv), [Excel](StructureDefinition-fr-diagnostic-report-imaging-document.xlsx), [Schematron](StructureDefinition-fr-diagnostic-report-imaging-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-diagnostic-report-imaging-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-diagnostic-report-imaging-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRDiagnosticReportImagingDocument",
  "title" : "DiagnosticReport - FR Diagnostic Report Imaging Document",
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
  "description" : "Le profil FRDiagnosticReportImagingDocument est dédié aux comptes rendus d’imagerie.\nCe document représente le rapport d’un examen d’imagerie. Il constitue la ressource principale qui fait référence à l’ensemble des données produites lors de l’examen d’imagerie.",
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DiagnosticReport",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/DiagnosticReport",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "DiagnosticReport",
      "path" : "DiagnosticReport"
    },
    {
      "id" : "DiagnosticReport.extension",
      "path" : "DiagnosticReport.extension",
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
      "id" : "DiagnosticReport.extension:comparaison",
      "path" : "DiagnosticReport.extension",
      "sliceName" : "comparaison",
      "short" : "Comparaisons avec des résultats antérieurs",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-comparison-studies-extension"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.extension:historiqueMedical",
      "path" : "DiagnosticReport.extension",
      "sliceName" : "historiqueMedical",
      "short" : "Historique médical du patient pertinent pour l'examen d'imagerie",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-history-extension"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.extension:procedure",
      "path" : "DiagnosticReport.extension",
      "sliceName" : "procedure",
      "short" : "Technique d'imagerie",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-imaging-procedure-extension"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.identifier",
      "path" : "DiagnosticReport.identifier",
      "short" : "identifiant du compte-rendu d'imagerie",
      "min" : 1
    },
    {
      "id" : "DiagnosticReport.basedOn",
      "path" : "DiagnosticReport.basedOn",
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
      "id" : "DiagnosticReport.basedOn:serviceRequestAccessionNumber",
      "path" : "DiagnosticReport.basedOn",
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
      "id" : "DiagnosticReport.status",
      "path" : "DiagnosticReport.status",
      "short" : "Statut du compte-rendu d'imagerie"
    },
    {
      "id" : "DiagnosticReport.code",
      "path" : "DiagnosticReport.code",
      "short" : "Type de document d'imagerie",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-code-document-imagerie-cisis"
      }
    },
    {
      "id" : "DiagnosticReport.subject",
      "path" : "DiagnosticReport.subject",
      "short" : "Patient concerné par le compte-rendu d'imagerie",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-ins-document"]
      }]
    },
    {
      "id" : "DiagnosticReport.performer",
      "path" : "DiagnosticReport.performer",
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
      "id" : "DiagnosticReport.performer:organization",
      "path" : "DiagnosticReport.performer",
      "sliceName" : "organization",
      "short" : "Organization productrice du CR d'imagerie",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-organization-document"]
      }]
    },
    {
      "id" : "DiagnosticReport.resultsInterpreter",
      "path" : "DiagnosticReport.resultsInterpreter",
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.resultsInterpreter.extension",
      "path" : "DiagnosticReport.resultsInterpreter.extension",
      "min" : 1
    },
    {
      "id" : "DiagnosticReport.resultsInterpreter.extension:author",
      "path" : "DiagnosticReport.resultsInterpreter.extension",
      "sliceName" : "author",
      "short" : "Auteur du compte-rendu d'imagerie (Médecin - Radiologue)",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }]
    },
    {
      "id" : "DiagnosticReport.resultsInterpreter.extension:author.extension:type",
      "path" : "DiagnosticReport.resultsInterpreter.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "DiagnosticReport.resultsInterpreter.extension:author.extension:type.value[x]",
      "path" : "DiagnosticReport.resultsInterpreter.extension.extension.value[x]",
      "patternCode" : "AUT"
    },
    {
      "id" : "DiagnosticReport.resultsInterpreter.extension:author.extension:actor",
      "path" : "DiagnosticReport.resultsInterpreter.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "DiagnosticReport.resultsInterpreter.extension:author.extension:actor.value[x]",
      "path" : "DiagnosticReport.resultsInterpreter.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }]
    },
    {
      "id" : "DiagnosticReport.result",
      "path" : "DiagnosticReport.result",
      "slicing" : {
        "discriminator" : [{
          "type" : "pattern",
          "path" : "reference"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "short" : "Résultats d'examen (actuels ou antérieurs)",
      "comment" : "Les résultats sont exprimés sous forme non codée dans notre cas d’usage. Le contenu narratif du résultat est porté dans une note",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-result-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.result:resultatActuel",
      "path" : "DiagnosticReport.result",
      "sliceName" : "resultatActuel",
      "short" : "Résultats actuels de l'examen d'imagerie",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "DiagnosticReport.result:resultatAnterieur",
      "path" : "DiagnosticReport.result",
      "sliceName" : "resultatAnterieur",
      "short" : "Résultats antérieurs",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "DiagnosticReport.imagingStudy",
      "path" : "DiagnosticReport.imagingStudy",
      "short" : "Acte d'imagerie associé au compte-rendu",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-imaging-study-document"]
      }]
    },
    {
      "id" : "DiagnosticReport.conclusion",
      "path" : "DiagnosticReport.conclusion",
      "short" : "Conclusions cliniques et interprétations du rapport d’imagerie.",
      "mustSupport" : true
    }]
  }
}

```
