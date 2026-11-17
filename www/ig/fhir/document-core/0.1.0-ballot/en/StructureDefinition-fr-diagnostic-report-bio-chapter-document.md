# DiagnosticReport - FR Diagnostic Report BIO chapter Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: DiagnosticReport - FR Diagnostic Report BIO chapter Document 

**Usages:**

* Refer to this Profile: [Procedure - FR Procedure Document](StructureDefinition-fr-procedure-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-diagnostic-report-bio-chapter-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-diagnostic-report-bio-chapter-document.csv), [Excel](../StructureDefinition-fr-diagnostic-report-bio-chapter-document.xlsx), [Schematron](../StructureDefinition-fr-diagnostic-report-bio-chapter-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-diagnostic-report-bio-chapter-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-diagnostic-report-bio-chapter-document",
  "version" : "0.1.0-ballot",
  "name" : "FRDiagnosticReportBIOChapterDocument",
  "title" : "DiagnosticReport - FR Diagnostic Report BIO chapter Document",
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
  "description" : "FRDiagnosticReportBIOChapterDocument utilisé pour représenter un CR de biologie",
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DiagnosticReport",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-diagnostic-report-document|0.1.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "DiagnosticReport",
      "path" : "DiagnosticReport"
    },
    {
      "id" : "DiagnosticReport.extension:composition",
      "path" : "DiagnosticReport.extension",
      "sliceName" : "composition",
      "short" : "Composition du rapport de biologie"
    },
    {
      "id" : "DiagnosticReport.basedOn",
      "path" : "DiagnosticReport.basedOn",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-service-request-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.status",
      "path" : "DiagnosticReport.status",
      "short" : "Statut du rapport de BIO (final, partial ...)"
    },
    {
      "id" : "DiagnosticReport.category",
      "path" : "DiagnosticReport.category",
      "min" : 2
    },
    {
      "id" : "DiagnosticReport.category:typeResultat",
      "path" : "DiagnosticReport.category",
      "sliceName" : "typeResultat",
      "short" : "Type de résultat de biologie",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "26436-6",
          "display" : "Biologie polyvalente"
        }]
      }
    },
    {
      "id" : "DiagnosticReport.category:chapitreBIO",
      "path" : "DiagnosticReport.category",
      "sliceName" : "chapitreBIO",
      "short" : "Codes des chapitres du compte-rendu de BIO",
      "definition" : "Le code du chapitre doit être issu du jeu de valeurs Circuit de la biologie (https://smt.esante.gouv.fr/terminologie-jeu-de-valeurs-circuit-de-la-biologie/) onglet ‘2.Chapitres LOINC’ et contenant les codes et libellés traduits en français pour la biologie.",
      "min" : 1,
      "max" : "*"
    },
    {
      "id" : "DiagnosticReport.code",
      "path" : "DiagnosticReport.code",
      "short" : "Type de document",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "11502-2",
          "display" : "CR d'examens biologiques"
        }]
      }
    },
    {
      "id" : "DiagnosticReport.effective[x]",
      "path" : "DiagnosticReport.effective[x]",
      "short" : "Date et heure de création du document"
    },
    {
      "id" : "DiagnosticReport.resultsInterpreter",
      "path" : "DiagnosticReport.resultsInterpreter",
      "short" : "Interpréteur de résultat primaire"
    },
    {
      "id" : "DiagnosticReport.result",
      "path" : "DiagnosticReport.result",
      "short" : "Résultats d'examen de biologie",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-observation-laboratory-report-results-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.conclusion",
      "path" : "DiagnosticReport.conclusion",
      "short" : "Si le CR de BIO ne comporte pas de sous-chapitres (les commentaires seront dans les sous-chapitres)."
    }]
  }
}

```
