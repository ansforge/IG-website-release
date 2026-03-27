# DiagnosticReport - FR Diagnostic Report Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DiagnosticReport - FR Diagnostic Report Document**

## Resource Profile: DiagnosticReport - FR Diagnostic Report Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-diagnostic-report-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRDiagnosticReportDocument |

 
FRDiagnosticReportDocument est un profil permettant de regrouper les types des résultats classés par type d’examens (BIO, IMG, etc…). 

**Utilisations:**

* Ce Profil n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-diagnostic-report-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-diagnostic-report-document.csv), [Excel](StructureDefinition-fr-diagnostic-report-document.xlsx), [Schematron](StructureDefinition-fr-diagnostic-report-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-diagnostic-report-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-diagnostic-report-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRDiagnosticReportDocument",
  "title" : "DiagnosticReport - FR Diagnostic Report Document",
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
  "description" : "FRDiagnosticReportDocument est un profil permettant de regrouper les types des résultats classés par type d’examens (BIO, IMG, etc…).",
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
      "id" : "DiagnosticReport.identifier",
      "path" : "DiagnosticReport.identifier",
      "short" : "Identifiant",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.status",
      "path" : "DiagnosticReport.status",
      "short" : "Statut",
      "patternCode" : "final",
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.code",
      "path" : "DiagnosticReport.code",
      "short" : "Type de résultat",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-result-type-document"
      }
    },
    {
      "id" : "DiagnosticReport.effective[x]",
      "path" : "DiagnosticReport.effective[x]",
      "short" : "Date",
      "min" : 1,
      "type" : [{
        "code" : "dateTime"
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.performer",
      "path" : "DiagnosticReport.performer",
      "short" : "Exécutant",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitioner-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-organization-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.performer.extension",
      "path" : "DiagnosticReport.performer.extension",
      "min" : 1
    },
    {
      "id" : "DiagnosticReport.performer.extension:performerFunction",
      "path" : "DiagnosticReport.performer.extension",
      "sliceName" : "performerFunction",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/event-performerFunction"]
      }]
    },
    {
      "id" : "DiagnosticReport.performer.extension:performerFunction.value[x].coding.code",
      "path" : "DiagnosticReport.performer.extension.value[x].coding.code",
      "patternCode" : "PPRF"
    },
    {
      "id" : "DiagnosticReport.resultsInterpreter",
      "path" : "DiagnosticReport.resultsInterpreter",
      "short" : "Auteur",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitioner-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-organization-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.resultsInterpreter.extension",
      "path" : "DiagnosticReport.resultsInterpreter.extension",
      "min" : 1
    },
    {
      "id" : "DiagnosticReport.resultsInterpreter.extension:performerFunction",
      "path" : "DiagnosticReport.resultsInterpreter.extension",
      "sliceName" : "performerFunction",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/event-performerFunction"]
      }]
    },
    {
      "id" : "DiagnosticReport.resultsInterpreter.extension:performerFunction.value[x].coding.code",
      "path" : "DiagnosticReport.resultsInterpreter.extension.value[x].coding.code",
      "patternCode" : "AUT"
    },
    {
      "id" : "DiagnosticReport.result",
      "path" : "DiagnosticReport.result",
      "short" : "Resultat",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-result-document"]
      }],
      "mustSupport" : true
    }]
  }
}

```
