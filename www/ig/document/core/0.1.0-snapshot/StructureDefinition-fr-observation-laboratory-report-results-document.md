# Observation - FR Observation Laboratory Report Results Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation - FR Observation Laboratory Report Results Document**

## Resource Profile: Observation - FR Observation Laboratory Report Results Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-laboratory-report-results-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRObservationLaboratoryReportResultsDocument |

 
FRObservationLaboratoryReportResultsDocument décrit un résultat d’examen de biologie médicale. 

**Utilisations:**

* Référence ce Profil: [DiagnosticReport - FR Diagnostic Report BIO chapter Document](StructureDefinition-fr-diagnostic-report-bio-chapter-document.md) and [Observation - FR Observation Laboratory Report Results Document](StructureDefinition-fr-observation-laboratory-report-results-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-observation-laboratory-report-results-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-observation-laboratory-report-results-document.csv), [Excel](StructureDefinition-fr-observation-laboratory-report-results-document.xlsx), [Schematron](StructureDefinition-fr-observation-laboratory-report-results-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-observation-laboratory-report-results-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-laboratory-report-results-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRObservationLaboratoryReportResultsDocument",
  "title" : "Observation - FR Observation Laboratory Report Results Document",
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
  "description" : "FRObservationLaboratoryReportResultsDocument décrit un résultat d’examen de biologie médicale.",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Observation",
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
      "id" : "Observation.extension:supportingInfo",
      "path" : "Observation.extension",
      "sliceName" : "supportingInfo",
      "short" : "Résultats antérieurs",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/workflow-supportingInfo"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.status",
      "path" : "Observation.status",
      "short" : "Niveau de complétude :\n- 'final' si le résultat est présent\n- 'cancelled' dans le cas où l'élément d'examen n’a pu être et ne sera pas réalisé",
      "mustSupport" : true
    },
    {
      "id" : "Observation.category",
      "path" : "Observation.category",
      "short" : "Code du chapitre",
      "mustSupport" : true
    },
    {
      "id" : "Observation.code",
      "path" : "Observation.code",
      "short" : "Code d'identification de l'analyse ou de l'observation",
      "mustSupport" : true
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
      "short" : "1. Si le spécimen provient du corps du patient :\n- subject = Référence vers FRPatientINSDocument\n- specimen = Référence vers FRSpecimenDocument\n- specimen.type contraint par le JDV jdv-specimen-type-cisis\n\n2. Si spécimen extérieur au patient :\n- subject = Référence vers FRPatientINSDocument\n- specimen = Référence vers FRSpecimenDocument\n- specimen.subject = Référence vers Substance\n  Dans Substance :\n    - substance.category depuis le JDV HL7 substance-category\n    - substance.code.coding / display / system",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-ins-document"]
      }],
      "mustSupport" : true
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
      }],
      "mustSupport" : true
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
      "mustSupport" : true
    },
    {
      "id" : "Observation.performer.extension:laboratoireExecutant",
      "path" : "Observation.performer.extension",
      "sliceName" : "laboratoireExecutant",
      "short" : "Laboratoire exécutant",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.performer.extension:laboratoireExecutant.extension:type",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Observation.performer.extension:laboratoireExecutant.extension:type.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "patternCode" : "PRF"
    },
    {
      "id" : "Observation.performer.extension:laboratoireExecutant.extension:typeCode",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "typeCode"
    },
    {
      "id" : "Observation.performer.extension:laboratoireExecutant.extension:typeCode.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-participant-additionnel-resultat-cisis"
      }
    },
    {
      "id" : "Observation.performer.extension:laboratoireExecutant.extension:actor",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Observation.performer.extension:laboratoireExecutant.extension:actor.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-organization-document"]
      }]
    },
    {
      "id" : "Observation.performer.extension:auteur",
      "path" : "Observation.performer.extension",
      "sliceName" : "auteur",
      "short" : "Auteur",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.performer.extension:auteur.extension:type",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Observation.performer.extension:auteur.extension:type.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "patternCode" : "AUT"
    },
    {
      "id" : "Observation.performer.extension:auteur.extension:actor",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Observation.performer.extension:auteur.extension:actor.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }]
    },
    {
      "id" : "Observation.performer.extension:validateurResultat",
      "path" : "Observation.performer.extension",
      "sliceName" : "validateurResultat",
      "short" : "Validateur de résultats",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.performer.extension:validateurResultat.extension:type",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Observation.performer.extension:validateurResultat.extension:type.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "patternCode" : "PART"
    },
    {
      "id" : "Observation.performer.extension:validateurResultat.extension:typeCode",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "typeCode"
    },
    {
      "id" : "Observation.performer.extension:validateurResultat.extension:typeCode.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-participant-additionnel-resultat-cisis"
      }
    },
    {
      "id" : "Observation.performer.extension:validateurResultat.extension:typeCode.value[x].coding.code",
      "path" : "Observation.performer.extension.extension.value[x].coding.code",
      "patternCode" : "AUTHEN"
    },
    {
      "id" : "Observation.performer.extension:validateurResultat.extension:actor",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Observation.performer.extension:validateurResultat.extension:actor.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }]
    },
    {
      "id" : "Observation.performer.extension:responsableExamen",
      "path" : "Observation.performer.extension",
      "sliceName" : "responsableExamen",
      "short" : "Responsable de l'évaluation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.performer.extension:responsableExamen.extension:type",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Observation.performer.extension:responsableExamen.extension:type.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "patternCode" : "PART"
    },
    {
      "id" : "Observation.performer.extension:responsableExamen.extension:typeCode",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "typeCode"
    },
    {
      "id" : "Observation.performer.extension:responsableExamen.extension:typeCode.value[x].coding.code",
      "path" : "Observation.performer.extension.extension.value[x].coding.code",
      "patternCode" : "RESP"
    },
    {
      "id" : "Observation.performer.extension:responsableExamen.extension:actor",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Observation.performer.extension:responsableExamen.extension:actor.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }]
    },
    {
      "id" : "Observation.performer.extension:dispositifAuto",
      "path" : "Observation.performer.extension",
      "sliceName" : "dispositifAuto",
      "short" : "Dispositif automatique",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.performer.extension:dispositifAuto.extension:type",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Observation.performer.extension:dispositifAuto.extension:type.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "patternCode" : "PART"
    },
    {
      "id" : "Observation.performer.extension:dispositifAuto.extension:typeCode",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "typeCode"
    },
    {
      "id" : "Observation.performer.extension:dispositifAuto.extension:typeCode.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-participant-additionnel-resultat-cisis"
      }
    },
    {
      "id" : "Observation.performer.extension:dispositifAuto.extension:typeCode.value[x].coding.code",
      "path" : "Observation.performer.extension.extension.value[x].coding.code",
      "patternCode" : "DEV"
    },
    {
      "id" : "Observation.performer.extension:dispositifAuto.extension:actor",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Observation.performer.extension:dispositifAuto.extension:actor.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Device"]
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
      "short" : "Valeur du résultat :\nLe type de valeur (value[x]) est choisi dynamiquement. \nLes autres attributs qui qualifient cette valeur (comme par exemple l'unité : unit) dépendent du type de donnée choisi. \nLes résultats qualitatifs codés peuvent le cas échéant être exprimés dans plusieurs systèmes de codage simultanément. \nDe même les résultats numériques peuvent être exprimés simultanément dans plusieurs unités.",
      "mustSupport" : true
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
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.value[x]:valueRange.low",
      "path" : "Observation.value[x].low",
      "mustSupport" : true
    },
    {
      "id" : "Observation.value[x]:valueRange.high",
      "path" : "Observation.value[x].high",
      "mustSupport" : true
    },
    {
      "id" : "Observation.interpretation",
      "path" : "Observation.interpretation",
      "short" : "Code d'interprétation",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-hl7-v3-ObservationInterpretation-cisis"
      }
    },
    {
      "id" : "Observation.note",
      "path" : "Observation.note",
      "short" : "Commentaires associés à l'observation",
      "mustSupport" : true
    },
    {
      "id" : "Observation.method",
      "path" : "Observation.method",
      "short" : "Méthode ou technique employée",
      "mustSupport" : true
    },
    {
      "id" : "Observation.specimen",
      "path" : "Observation.specimen",
      "short" : "Prélèvement",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-specimen-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.hasMember",
      "path" : "Observation.hasMember",
      "short" : "Lien vers batterie d’examens ou résultats d’examens cliniquement pertinents ou isolat microbiologique",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-laboratory-report-results-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.derivedFrom",
      "path" : "Observation.derivedFrom",
      "short" : "Image illustrative",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-media-document"]
      }],
      "mustSupport" : true
    }]
  }
}

```
