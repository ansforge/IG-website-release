# FR Patient INS Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: FR Patient INS Document 

**Usages:**

* Use this Profile: [FR Bundle Document](StructureDefinition-fr-bundle-document.md)
* Refer to this Profile: [FR Actor Extension](StructureDefinition-fr-actor-extension.md), [AllergyIntolerance - FR Allergy and intolerance Document](StructureDefinition-fr-allergy-intolerance-document.md), [FR Composition Document](StructureDefinition-fr-composition-document.md), [Condition - FR Condition Document](StructureDefinition-fr-condition-document.md)... Show 15 more, [DiagnosticReport - FR Diagnostic Report Document](StructureDefinition-fr-diagnostic-report-document.md), [Encounter - FR Encounter Document](StructureDefinition-fr-encounter-document.md), [FamilyMemberHistory - FR Family Member History Document](StructureDefinition-fr-family-member-history-document.md), [Immunization - FR Immunization Document](StructureDefinition-fr-immunization-document.md), [Media - FR Media Document](StructureDefinition-fr-media-document.md), [MedicationRequest - FR Medication Request Document](StructureDefinition-fr-medication-request-document.md), [Observation - FR Observation Contra Indications Document](StructureDefinition-fr-observation-contra-indications-document.md), [Observation - FR Observation Laboratory Report Results Document](StructureDefinition-fr-observation-laboratory-report-results-document.md), [Observation - FR Observation Pregnancy Document](StructureDefinition-fr-observation-pregnancy-document.md), [Observation - FR Observation Radiation Exposure Document](StructureDefinition-fr-observation-radiation-exposure-document.md), [Observation - FR Observation Result Document](StructureDefinition-fr-observation-result-document.md), [Observation - FR Observation Vital Signs Document](StructureDefinition-fr-observation-vital-signs-document.md), [Observation - FR Observation Vital Signs Panel Document](StructureDefinition-fr-observation-vital-signs-panel-document.md), [Observation - FR Observation Work Related Accident Document](StructureDefinition-fr-observation-work-related-accident-document.md) and [Procedure - FR Procedure Document](StructureDefinition-fr-procedure-document.md)
* Examples for this Profile: [Patient/ba499de3-aeae-43c3-82cb-0ba2718cfa41](Patient-ba499de3-aeae-43c3-82cb-0ba2718cfa41.md) and [Patient/ba499de3-aeae-43c3-82cb-0ba2718cfa55](Patient-ba499de3-aeae-43c3-82cb-0ba2718cfa55.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-patient-ins-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-patient-ins-document.csv), [Excel](../StructureDefinition-fr-patient-ins-document.xlsx), [Schematron](../StructureDefinition-fr-patient-ins-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-patient-ins-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-ins-document",
  "version" : "0.1.0-ballot",
  "name" : "FRPatientINSDocument",
  "title" : "FR Patient INS Document",
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
  "description" : "Ce profil représente le patient concerné par le document.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "cda",
    "uri" : "http://hl7.org/v3/cda",
    "name" : "CDA (R2)"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "loinc",
    "uri" : "http://loinc.org",
    "name" : "LOINC code for the element"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-patient-ins|3.0.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Patient.contact.relationship:role",
      "path" : "Patient.contact.relationship",
      "sliceName" : "role",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-role-informateur-cisis|20260928134051"
      }
    },
    {
      "id" : "Patient.contact.relationship:role.coding.system",
      "path" : "Patient.contact.relationship.coding.system",
      "patternUri" : "http://terminology.hl7.org/CodeSystem/v3-RoleClass"
    },
    {
      "id" : "Patient.contact.relationship:relationType",
      "path" : "Patient.contact.relationship",
      "sliceName" : "relationType",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J11-RelationPatient-CISIS/FHIR/JDV-J11-RelationPatient-CISIS|20200424120000"
      }
    },
    {
      "id" : "Patient.contact.relationship:relationType.coding.system",
      "path" : "Patient.contact.relationship.coding.system",
      "patternUri" : "https://mos.esante.gouv.fr/NOS/TRE_R216-HL7RoleCode/FHIR/TRE-R216-HL7RoleCode"
    },
    {
      "id" : "Patient.contact.name",
      "path" : "Patient.contact.name",
      "min" : 1,
      "type" : [{
        "code" : "HumanName",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-human-name-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Patient.generalPractitioner",
      "path" : "Patient.generalPractitioner",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitioner-document|0.1.0-ballot"]
      }]
    }]
  }
}

```
