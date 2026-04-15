# CDA - FR Statut clinique du patient - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - FR Statut clinique du patient**

## Logical Model: CDA - FR Statut clinique du patient 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-statut-clinique-du-patient | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRCDAStatutCliniqueDuPatient |

 
Entrée FR-Statut-clinique-du-patient: IHE-PCC - Health-Status-Observation. L’entrée Statut clinique du patient permet de donner une évaluation de l’état clinique du patient. L’entrée Statut clinique du patient est un élément observation qui est inséré dans un autre élément à l’aide d’un lien entryRelationship. 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - FR Probleme](StructureDefinition-fr-cda-probleme.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-statut-clinique-du-patient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-statut-clinique-du-patient.csv), [Excel](StructureDefinition-fr-cda-statut-clinique-du-patient.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-statut-clinique-du-patient",
  "extension" : [{
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-target",
    "_valueBoolean" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
        "valueCode" : "not-applicable"
      }]
    }
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-namespace",
    "valueUri" : "urn:hl7-org:v3"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-name",
    "valueString" : "observation"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-statut-clinique-du-patient",
  "version" : "0.1.0-snapshot",
  "name" : "FRCDAStatutCliniqueDuPatient",
  "title" : "CDA - FR Statut clinique du patient",
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
  "description" : "Entrée FR-Statut-clinique-du-patient: IHE-PCC - Health-Status-Observation. L'entrée Statut clinique du patient permet de donner une évaluation de l'état clinique du patient. L'entrée Statut clinique du patient est un élément observation qui est inséré dans un autre élément à l'aide d'un lien entryRelationship.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "logical",
  "abstract" : false,
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/Observation",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/Observation",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Observation.templateId",
      "path" : "Observation.templateId",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "root"
        }],
        "rules" : "open"
      },
      "min" : 3,
      "max" : "3"
    },
    {
      "id" : "Observation.templateId:ccdProblemHealthStatusObservation",
      "path" : "Observation.templateId",
      "sliceName" : "ccdProblemHealthStatusObservation",
      "short" : "Conformité Problem healthstatus observation (CCD)",
      "definition" : "Conformité Problem healthstatus observation (CCD)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Observation.templateId:ccdProblemHealthStatusObservation.root",
      "path" : "Observation.templateId.root",
      "min" : 1,
      "patternString" : "2.16.840.1.113883.10.20.1.51"
    },
    {
      "id" : "Observation.templateId:iheHealthStatusObservation",
      "path" : "Observation.templateId",
      "sliceName" : "iheHealthStatusObservation",
      "short" : "Conformité Health Status Observation (IHE PCC)",
      "definition" : "Conformité Health Status Observation (IHE PCC)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Observation.templateId:iheHealthStatusObservation.root",
      "path" : "Observation.templateId.root",
      "min" : 1,
      "patternString" : "1.3.6.1.4.1.19376.1.5.3.1.4.1.2"
    },
    {
      "id" : "Observation.templateId:frStatutCliniqueDuPatient",
      "path" : "Observation.templateId",
      "sliceName" : "frStatutCliniqueDuPatient",
      "short" : "Conformité FR-Statut-clinique-du-patient (CI-SIS)",
      "definition" : "Conformité FR-Statut-clinique-du-patient (CI-SIS)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Observation.templateId:frStatutCliniqueDuPatient.root",
      "path" : "Observation.templateId.root",
      "min" : 1,
      "patternString" : "1.2.250.1.213.1.1.3.31"
    },
    {
      "id" : "Observation.classCode",
      "path" : "Observation.classCode",
      "patternCode" : "OBS",
      "mustSupport" : true
    },
    {
      "id" : "Observation.moodCode",
      "path" : "Observation.moodCode",
      "patternCode" : "EVN",
      "mustSupport" : true
    },
    {
      "id" : "Observation.code",
      "path" : "Observation.code",
      "short" : "Code de l’entrée",
      "definition" : "Code de l’entrée",
      "mustSupport" : true
    },
    {
      "id" : "Observation.code.code",
      "path" : "Observation.code.code",
      "patternCode" : "11323-3"
    },
    {
      "id" : "Observation.code.codeSystem",
      "path" : "Observation.code.codeSystem",
      "patternString" : "2.16.840.1.113883.6.1"
    },
    {
      "id" : "Observation.code.codeSystemName",
      "path" : "Observation.code.codeSystemName",
      "patternString" : "LOINC"
    },
    {
      "id" : "Observation.code.displayName",
      "path" : "Observation.code.displayName",
      "patternString" : "Statut clinique du patient"
    },
    {
      "id" : "Observation.text",
      "path" : "Observation.text",
      "short" : "Description narrative",
      "definition" : "Description narrative",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Observation.text.reference",
      "path" : "Observation.text.reference",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Observation.statusCode",
      "path" : "Observation.statusCode",
      "short" : "Statut de l’entrée",
      "definition" : "Statut de l’entrée",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Observation.statusCode.code",
      "path" : "Observation.statusCode.code",
      "patternCode" : "completed"
    },
    {
      "id" : "Observation.value",
      "path" : "Observation.value",
      "short" : "Statut clinique du patient",
      "definition" : "Statut clinique du patient",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/CE"
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-health-status-code-cisis"
      }
    }]
  }
}

```
