# DiagnosticReport - FR Diagnostic Report Imaging Document - FR Document Core (FHIR) v0.1.0-ballot

## Profil de ressource: DiagnosticReport - FR Diagnostic Report Imaging Document 

**Utilisations:**

* Référence ce Profil: [Procedure - FR Procedure Document](StructureDefinition-fr-procedure-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-diagnostic-report-imaging-document.json)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau des éléments clés](#tabs-key) 
*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [FRDiagnosticReportDocument](StructureDefinition-fr-diagnostic-report-document.md) 

#### Bindings terminologiques (différentiel)

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [FRDiagnosticReportDocument](StructureDefinition-fr-diagnostic-report-document.md) 

 **Vue des éléments clés** 

#### Bindings terminologiques

#### Contraintes

 **Vue différentielle** 

Cette structure est dérivée de [FRDiagnosticReportDocument](StructureDefinition-fr-diagnostic-report-document.md) 

#### Bindings terminologiques (différentiel)

 **Vue d'ensembleView** 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [FRDiagnosticReportDocument](StructureDefinition-fr-diagnostic-report-document.md) 

 

Autres représentations du profil : [CSV](../StructureDefinition-fr-diagnostic-report-imaging-document.csv), [Excel](../StructureDefinition-fr-diagnostic-report-imaging-document.xlsx), [Schematron](../StructureDefinition-fr-diagnostic-report-imaging-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-diagnostic-report-imaging-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-diagnostic-report-imaging-document",
  "version" : "0.1.0-ballot",
  "name" : "FRDiagnosticReportImagingDocument",
  "title" : "DiagnosticReport - FR Diagnostic Report Imaging Document",
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
  "description" : "Le profil FRDiagnosticReportImagingDocument est dédié aux comptes rendus d’imagerie.\nCe document représente le rapport d’un examen d’imagerie. Il constitue la ressource principale qui fait référence à l’ensemble des données produites lors de l’examen d’imagerie.",
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
      "short" : "Composition du rapport d'imagerie"
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
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-comparison-studies-extension|0.1.0-ballot"]
      }]
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
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-history-extension|0.1.0-ballot"]
      }]
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
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-imaging-procedure-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.extension:finding",
      "path" : "DiagnosticReport.extension",
      "sliceName" : "finding",
      "short" : "Résultats et observations cliniques de l'examen d'imagerie",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-finding-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.extension:conclusion",
      "path" : "DiagnosticReport.extension",
      "sliceName" : "conclusion",
      "short" : "Conclusions cliniques et interprétations du rapport d'imagerie",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-conclusion-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.identifier",
      "path" : "DiagnosticReport.identifier",
      "short" : "Identifiant du compte-rendu d'imagerie"
    },
    {
      "id" : "DiagnosticReport.basedOn",
      "path" : "DiagnosticReport.basedOn",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "rules" : "open"
      }
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
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-service-request-imaging-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.basedOn:serviceRequestAccessionNumber.identifier",
      "path" : "DiagnosticReport.basedOn.identifier",
      "min" : 1,
      "type" : [{
        "code" : "Identifier",
        "profile" : ["http://hl7.eu/fhir/imaging/StructureDefinition/AccessionNumberIdentifierEuImaging|1.0.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.status",
      "path" : "DiagnosticReport.status",
      "short" : "Statut du compte-rendu d'imagerie"
    },
    {
      "id" : "DiagnosticReport.category",
      "path" : "DiagnosticReport.category",
      "min" : 3
    },
    {
      "id" : "DiagnosticReport.category:diagnostic-service",
      "path" : "DiagnosticReport.category",
      "sliceName" : "diagnostic-service",
      "short" : "- **RAD** : Radiologie\n- **NMS** : Médecine nucléaire",
      "min" : 0,
      "max" : "1",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://hl7.org/fhir/ValueSet/diagnostic-service-sections|4.0.1"
      }
    },
    {
      "id" : "DiagnosticReport.category:imaging-report",
      "path" : "DiagnosticReport.category",
      "sliceName" : "imaging-report",
      "definition" : "définit la catégorie du rapport d'imagerie.",
      "min" : 1,
      "max" : "1",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "85430-7"
        }]
      }
    },
    {
      "id" : "DiagnosticReport.category:imaging",
      "path" : "DiagnosticReport.category",
      "sliceName" : "imaging",
      "definition" : "définit la catégorie de priorité du rapport",
      "min" : 1,
      "max" : "1",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.eu/fhir/health-data-api/CodeSystem/eehrxf-document-priority-category-cs",
          "code" : "Medical-Imaging"
        }]
      }
    },
    {
      "id" : "DiagnosticReport.code",
      "path" : "DiagnosticReport.code",
      "short" : "Type de document d'imagerie (CR d'imagerie médicale, CR de médecine nucléaire)",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://interop.esante.gouv.fr/ig/fhir/document-core/ValueSet/fr-value-set-imaging-report-type-document|0.1.0-ballot"
      }
    },
    {
      "id" : "DiagnosticReport.subject",
      "path" : "DiagnosticReport.subject",
      "short" : "Patient concerné par le compte-rendu d'imagerie"
    },
    {
      "id" : "DiagnosticReport.resultsInterpreter.extension:author",
      "path" : "DiagnosticReport.resultsInterpreter.extension",
      "sliceName" : "author",
      "short" : "Auteur du compte-rendu d'imagerie (Médecin - Radiologue)"
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
      "comment" : "Les résultats sont exprimés sous forme non codée dans notre cas d’usage. Le contenu narratif du résultat est porté dans une note"
    },
    {
      "id" : "DiagnosticReport.result:resultatActuel",
      "path" : "DiagnosticReport.result",
      "sliceName" : "resultatActuel",
      "short" : "Résultats actuels de l'examen d'imagerie",
      "comment" : "Si les résultats d'examen sont codés, ils sont référencés dans FRObservationResultDocument. Si les résultats d'examen sont exprimés sous forme non codée, ils sont portés dans une note de FRObservationResultDocument.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-observation-result-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.result:resultatAnterieur",
      "path" : "DiagnosticReport.result",
      "sliceName" : "resultatAnterieur",
      "short" : "Résultats antérieurs",
      "comment" : "Si les résultats d'examen sont codés, ils sont référencés dans FRObservationResultDocument. Si les résultats d'examen sont exprimés sous forme non codée, ils sont portés dans une note de FRObservationResultDocument.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-observation-result-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.imagingStudy",
      "path" : "DiagnosticReport.imagingStudy",
      "short" : "Acte d'imagerie associé au compte-rendu",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-imaging-study-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.conclusion",
      "path" : "DiagnosticReport.conclusion",
      "short" : "Conclusions cliniques et interprétations du rapport d’imagerie."
    }]
  }
}

```
