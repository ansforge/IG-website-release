# Observation - FR Observation Laboratory Report Results Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: Observation - FR Observation Laboratory Report Results Document 

**Usages:**

* Refer to this Profile: [DiagnosticReport - FR Diagnostic Report BIO chapter Document](StructureDefinition-fr-diagnostic-report-bio-chapter-document.md), [DiagnosticReport - FR Diagnostic Report Document](StructureDefinition-fr-diagnostic-report-document.md) and [Observation - FR Observation Laboratory Report Results Document](StructureDefinition-fr-observation-laboratory-report-results-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-observation-laboratory-report-results-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-observation-laboratory-report-results-document.csv), [Excel](../StructureDefinition-fr-observation-laboratory-report-results-document.xlsx), [Schematron](../StructureDefinition-fr-observation-laboratory-report-results-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-observation-laboratory-report-results-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-observation-laboratory-report-results-document",
  "version" : "0.1.0-ballot",
  "name" : "FRObservationLaboratoryReportResultsDocument",
  "title" : "Observation - FR Observation Laboratory Report Results Document",
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
  "description" : "FRObservationLaboratoryReportResultsDocument décrit un résultat d’examen de biologie médicale.",
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
    "identity" : "sct-concept",
    "uri" : "http://snomed.info/conceptdomain",
    "name" : "SNOMED CT Concept Domain Binding"
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
    "identity" : "sct-attr",
    "uri" : "http://snomed.org/attributebinding",
    "name" : "SNOMED CT Attribute Binding"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Observation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Observation|4.0.1",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Observation",
      "path" : "Observation"
    },
    {
      "id" : "Observation.extension",
      "path" : "Observation.extension",
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
      "id" : "Observation.extension:author",
      "path" : "Observation.extension",
      "sliceName" : "author",
      "short" : "Auteur",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-actor-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.extension:author.extension:type",
      "path" : "Observation.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Observation.extension:author.extension:type.value[x]",
      "path" : "Observation.extension.extension.value[x]",
      "patternCode" : "AUT"
    },
    {
      "id" : "Observation.extension:author.extension:actor",
      "path" : "Observation.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Observation.extension:author.extension:actor.value[x]",
      "path" : "Observation.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.extension:validateurResultat",
      "path" : "Observation.extension",
      "sliceName" : "validateurResultat",
      "short" : "Validateur de résultats",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-actor-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.extension:validateurResultat.extension:type",
      "path" : "Observation.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Observation.extension:validateurResultat.extension:type.value[x]",
      "path" : "Observation.extension.extension.value[x]",
      "patternCode" : "PART"
    },
    {
      "id" : "Observation.extension:validateurResultat.extension:typeCode",
      "path" : "Observation.extension.extension",
      "sliceName" : "typeCode"
    },
    {
      "id" : "Observation.extension:validateurResultat.extension:typeCode.value[x]",
      "path" : "Observation.extension.extension.value[x]",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-participant-additionnel-resultat-cisis|20260928134053"
      }
    },
    {
      "id" : "Observation.extension:validateurResultat.extension:typeCode.value[x].coding.code",
      "path" : "Observation.extension.extension.value[x].coding.code",
      "patternCode" : "AUTHEN"
    },
    {
      "id" : "Observation.extension:validateurResultat.extension:actor",
      "path" : "Observation.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Observation.extension:validateurResultat.extension:actor.value[x]",
      "path" : "Observation.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.extension:responsableExamen",
      "path" : "Observation.extension",
      "sliceName" : "responsableExamen",
      "short" : "Responsable de l'évaluation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-actor-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.extension:responsableExamen.extension:type",
      "path" : "Observation.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Observation.extension:responsableExamen.extension:type.value[x]",
      "path" : "Observation.extension.extension.value[x]",
      "patternCode" : "PART"
    },
    {
      "id" : "Observation.extension:responsableExamen.extension:typeCode",
      "path" : "Observation.extension.extension",
      "sliceName" : "typeCode"
    },
    {
      "id" : "Observation.extension:responsableExamen.extension:typeCode.value[x].coding.code",
      "path" : "Observation.extension.extension.value[x].coding.code",
      "patternCode" : "RESP"
    },
    {
      "id" : "Observation.extension:responsableExamen.extension:actor",
      "path" : "Observation.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Observation.extension:responsableExamen.extension:actor.value[x]",
      "path" : "Observation.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.extension:dispositifAuto",
      "path" : "Observation.extension",
      "sliceName" : "dispositifAuto",
      "short" : "Dispositif automatique",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-actor-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.extension:dispositifAuto.extension:type",
      "path" : "Observation.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Observation.extension:dispositifAuto.extension:type.value[x]",
      "path" : "Observation.extension.extension.value[x]",
      "patternCode" : "PART"
    },
    {
      "id" : "Observation.extension:dispositifAuto.extension:typeCode",
      "path" : "Observation.extension.extension",
      "sliceName" : "typeCode"
    },
    {
      "id" : "Observation.extension:dispositifAuto.extension:typeCode.value[x]",
      "path" : "Observation.extension.extension.value[x]",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-participant-additionnel-resultat-cisis|20260928134053"
      }
    },
    {
      "id" : "Observation.extension:dispositifAuto.extension:typeCode.value[x].coding.code",
      "path" : "Observation.extension.extension.value[x].coding.code",
      "patternCode" : "DEV"
    },
    {
      "id" : "Observation.extension:dispositifAuto.extension:actor",
      "path" : "Observation.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Observation.extension:dispositifAuto.extension:actor.value[x]",
      "path" : "Observation.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Device|4.0.1"]
      }]
    },
    {
      "id" : "Observation.extension:supportingInfo",
      "path" : "Observation.extension",
      "sliceName" : "supportingInfo",
      "short" : "Résultats antérieurs",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/workflow-supportingInfo|5.4.0"]
      }]
    },
    {
      "id" : "Observation.status",
      "path" : "Observation.status",
      "short" : "Niveau de complétude :\n- 'final' si le résultat est présent\n- 'cancelled' dans le cas où l'élément d'examen n’a pu être et ne sera pas réalisé\n- 'registered' le résultat n'est pas encore disponible et est attendu"
    },
    {
      "id" : "Observation.code",
      "path" : "Observation.code",
      "short" : "Code d'identification de l'analyse ou de l'observation"
    },
    {
      "id" : "Observation.code.coding",
      "path" : "Observation.code.coding",
      "short" : "Code d'identification d'attente national ou code de portée locale"
    },
    {
      "id" : "Observation.code.text",
      "path" : "Observation.code.text",
      "short" : "Référence à l'expression verbale dans la partie visualisable du compte-rendu"
    },
    {
      "id" : "Observation.subject",
      "path" : "Observation.subject",
      "short" : "1. Si le spécimen provient du corps du patient :\n- subject = Référence vers FRPatientINSDocument\n- specimen = Référence vers FRSpecimenDocument\n- specimen.type contraint par le JDV jdv-specimen-type-cisis\n2. Si spécimen extérieur au patient :\n- subject = Référence vers FRPatientINSDocument\n- specimen = Référence vers FRSpecimenDocument\n- specimen.subject = Référence vers Substance\n  Dans Substance :\n    - substance.category depuis le JDV HL7 substance-category\n    - substance.code.coding / display / system",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-ins-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.effective[x]",
      "path" : "Observation.effective[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "short" : "Date et heure du résultat",
      "type" : [{
        "code" : "dateTime"
      },
      {
        "code" : "Period"
      }]
    },
    {
      "id" : "Observation.effective[x]:effectivePeriod",
      "path" : "Observation.effective[x]",
      "sliceName" : "effectivePeriod",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Period"
      }]
    },
    {
      "id" : "Observation.effective[x]:effectivePeriod.start",
      "path" : "Observation.effective[x].start",
      "short" : "Début de la période"
    },
    {
      "id" : "Observation.effective[x]:effectivePeriod.end",
      "path" : "Observation.effective[x].end",
      "short" : "Fin de la période"
    },
    {
      "id" : "Observation.performer",
      "path" : "Observation.performer",
      "short" : "Laboratoire exécutant",
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-organization-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.value[x]",
      "path" : "Observation.value[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "short" : "Valeur du résultat :\nLe type de valeur (value[x]) est choisi dynamiquement. \nLes autres attributs qui qualifient cette valeur (comme par exemple l'unité : unit) dépendent du type de donnée choisi. \nLes résultats qualitatifs codés peuvent le cas échéant être exprimés dans plusieurs systèmes de codage simultanément. \nDe même les résultats numériques peuvent être exprimés simultanément dans plusieurs unités."
    },
    {
      "id" : "Observation.value[x]:valueRange",
      "path" : "Observation.value[x]",
      "sliceName" : "valueRange",
      "short" : "Intervalles de référence",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Range"
      }]
    },
    {
      "id" : "Observation.interpretation",
      "path" : "Observation.interpretation",
      "short" : "Code d'interprétation",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-hl7-v3-ObservationInterpretation-cisis|20260928134052"
      }
    },
    {
      "id" : "Observation.note",
      "path" : "Observation.note",
      "short" : "Commentaires associés à l'observation"
    },
    {
      "id" : "Observation.method",
      "path" : "Observation.method",
      "short" : "Méthode ou technique employée"
    },
    {
      "id" : "Observation.specimen",
      "path" : "Observation.specimen",
      "short" : "Prélèvement",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-specimen-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.hasMember",
      "path" : "Observation.hasMember",
      "short" : "Lien vers batterie d’examens ou résultats d’examens cliniquement pertinents ou isolat microbiologique",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-observation-laboratory-report-results-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.derivedFrom",
      "path" : "Observation.derivedFrom",
      "short" : "Image illustrative",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-media-document|0.1.0-ballot"]
      }]
    }]
  }
}

```
