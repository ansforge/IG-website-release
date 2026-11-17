# DiagnosticReport - FR Diagnostic Report Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: DiagnosticReport - FR Diagnostic Report Document 

**Usages:**

* Derived from this Profile: [DiagnosticReport - FR Diagnostic Report BIO chapter Document](StructureDefinition-fr-diagnostic-report-bio-chapter-document.md) and [DiagnosticReport - FR Diagnostic Report Imaging Document](StructureDefinition-fr-diagnostic-report-imaging-document.md)
* Refer to this Profile: [FR Composition Document](StructureDefinition-fr-composition-document.md) and [Procedure - FR Procedure Document](StructureDefinition-fr-procedure-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-diagnostic-report-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-diagnostic-report-document.csv), [Excel](../StructureDefinition-fr-diagnostic-report-document.xlsx), [Schematron](../StructureDefinition-fr-diagnostic-report-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-diagnostic-report-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-diagnostic-report-document",
  "version" : "0.1.0-ballot",
  "name" : "FRDiagnosticReportDocument",
  "title" : "DiagnosticReport - FR Diagnostic Report Document",
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
  "description" : "FRDiagnosticReportDocument est un profil permettant de regrouper les types des résultats classés par type d’examens (BIO, IMG, etc…).",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/DiagnosticReport|4.0.1",
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
      },
      "min" : 1
    },
    {
      "id" : "DiagnosticReport.extension:composition",
      "path" : "DiagnosticReport.extension",
      "sliceName" : "composition",
      "short" : "Composition",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-composition-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.identifier",
      "path" : "DiagnosticReport.identifier",
      "short" : "Identifiant"
    },
    {
      "id" : "DiagnosticReport.status",
      "path" : "DiagnosticReport.status",
      "short" : "Statut",
      "patternCode" : "final"
    },
    {
      "id" : "DiagnosticReport.category",
      "path" : "DiagnosticReport.category",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "$this"
        }],
        "rules" : "open"
      },
      "short" : "Type de résultat",
      "min" : 1
    },
    {
      "id" : "DiagnosticReport.category:typeResultat",
      "path" : "DiagnosticReport.category",
      "sliceName" : "typeResultat",
      "short" : "Types de résultats",
      "min" : 1,
      "max" : "1",
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-resultat-type-cisis|20260928134051"
      }
    },
    {
      "id" : "DiagnosticReport.code",
      "path" : "DiagnosticReport.code",
      "short" : "Code du résultat"
    },
    {
      "id" : "DiagnosticReport.subject",
      "path" : "DiagnosticReport.subject",
      "short" : "Sujet concerné",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-ins-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.encounter",
      "path" : "DiagnosticReport.encounter",
      "short" : "L’événement de soins auquel se rapporte ce compte rendu de laboratoire (moment où l’examen a été prescrit).",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-encounter-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.effective[x]",
      "path" : "DiagnosticReport.effective[x]",
      "short" : "Date",
      "min" : 1,
      "type" : [{
        "code" : "dateTime"
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
      "short" : "Exécutant",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitioner-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-organization-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.performer:organization",
      "path" : "DiagnosticReport.performer",
      "sliceName" : "organization",
      "short" : "Organization productrice du CR",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-organization-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.resultsInterpreter",
      "path" : "DiagnosticReport.resultsInterpreter",
      "short" : "Auteur",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitioner-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-organization-document|0.1.0-ballot"]
      }]
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
      "short" : "Auteur du compte-rendu (Médecin - Radiologue - Biologiste ...)",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-actor-extension|0.1.0-ballot"]
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
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.specimen",
      "path" : "DiagnosticReport.specimen",
      "short" : "Échantillons sur lesquels repose ce compte rendu.",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-specimen-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.result",
      "path" : "DiagnosticReport.result",
      "short" : "Résultat",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-observation-result-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-observation-laboratory-report-results-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.media",
      "path" : "DiagnosticReport.media",
      "short" : "Images clés associées à ce rapport"
    },
    {
      "id" : "DiagnosticReport.media.link",
      "path" : "DiagnosticReport.media.link",
      "short" : "Lien vers les images clés",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-media-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.conclusion",
      "path" : "DiagnosticReport.conclusion",
      "short" : "Conclusions cliniques et interprétations du rapport."
    },
    {
      "id" : "DiagnosticReport.presentedForm",
      "path" : "DiagnosticReport.presentedForm",
      "short" : "Copie du document",
      "min" : 1,
      "max" : "1"
    }]
  }
}

```
