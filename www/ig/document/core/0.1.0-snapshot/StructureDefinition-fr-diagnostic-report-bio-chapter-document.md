# DiagnosticReport - FR Diagnostic Report BIO chapter Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DiagnosticReport - FR Diagnostic Report BIO chapter Document**

## Resource Profile: DiagnosticReport - FR Diagnostic Report BIO chapter Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-diagnostic-report-bio-chapter-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRDiagnosticReportBIOChapterDocument |

 
FRDiagnosticReportBIOChapterDocument utilisé pour représenter un CR de biologie 

**Utilisations:**

* Ce Profil n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-diagnostic-report-bio-chapter-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-diagnostic-report-bio-chapter-document.csv), [Excel](StructureDefinition-fr-diagnostic-report-bio-chapter-document.xlsx), [Schematron](StructureDefinition-fr-diagnostic-report-bio-chapter-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-diagnostic-report-bio-chapter-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-diagnostic-report-bio-chapter-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRDiagnosticReportBIOChapterDocument",
  "title" : "DiagnosticReport - FR Diagnostic Report BIO chapter Document",
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
  "description" : "FRDiagnosticReportBIOChapterDocument utilisé pour représenter un CR de biologie",
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
      "id" : "DiagnosticReport.status",
      "path" : "DiagnosticReport.status",
      "short" : "Statut du rapport de BIO (final, partial ...)",
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.category",
      "path" : "DiagnosticReport.category",
      "short" : "Codes des chapitres de CR BIO",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.code",
      "path" : "DiagnosticReport.code",
      "short" : "Type de document",
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.subject",
      "path" : "DiagnosticReport.subject",
      "short" : "Sujet concerné",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-ins-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.encounter",
      "path" : "DiagnosticReport.encounter",
      "short" : "L’événement de soins auquel se rapporte ce compte rendu de laboratoire (moment où l’examen a été prescrit).",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-encounter-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.effective[x]",
      "path" : "DiagnosticReport.effective[x]",
      "short" : "Date et heure de création du document",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.performer",
      "path" : "DiagnosticReport.performer",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.performer.extension",
      "path" : "DiagnosticReport.performer.extension",
      "min" : 1
    },
    {
      "id" : "DiagnosticReport.performer.extension:author",
      "path" : "DiagnosticReport.performer.extension",
      "sliceName" : "author",
      "short" : "Auteur du compte-rendu de BIO (Médecin - Biologie médicale)",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }]
    },
    {
      "id" : "DiagnosticReport.performer.extension:author.extension:type",
      "path" : "DiagnosticReport.performer.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "DiagnosticReport.performer.extension:author.extension:type.value[x]",
      "path" : "DiagnosticReport.performer.extension.extension.value[x]",
      "patternCode" : "AUT"
    },
    {
      "id" : "DiagnosticReport.performer.extension:author.extension:actor",
      "path" : "DiagnosticReport.performer.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "DiagnosticReport.performer.extension:author.extension:actor.value[x]",
      "path" : "DiagnosticReport.performer.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }]
    },
    {
      "id" : "DiagnosticReport.resultsInterpreter",
      "path" : "DiagnosticReport.resultsInterpreter",
      "short" : "Interpréteur de résultat primaire",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.specimen",
      "path" : "DiagnosticReport.specimen",
      "short" : "Échantillons sur lesquels repose ce compte rendu.",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-specimen-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.result",
      "path" : "DiagnosticReport.result",
      "short" : "Résultats",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-laboratory-report-results-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.conclusion",
      "path" : "DiagnosticReport.conclusion",
      "short" : "Si le CR de BIO ne comporte pas de sous-chapitres (les commentaires seront dans les sous-chapitres).",
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.presentedForm",
      "path" : "DiagnosticReport.presentedForm",
      "short" : "Copie du document",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    }]
  }
}

```
