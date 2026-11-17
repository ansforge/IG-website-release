# FR Practitioner Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: FR Practitioner Document 

**Usages:**

* Refer to this Profile: [DiagnosticReport - FR Diagnostic Report Document](StructureDefinition-fr-diagnostic-report-document.md), [MedicationRequest - FR Medication Request Document](StructureDefinition-fr-medication-request-document.md), [FR Patient INS Document](StructureDefinition-fr-patient-ins-document.md), [FR PractitionerRole Document](StructureDefinition-fr-practitionerRole-document.md) and [Specimen - FR Specimen Document](StructureDefinition-fr-specimen-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-practitioner-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-practitioner-document.csv), [Excel](../StructureDefinition-fr-practitioner-document.xlsx), [Schematron](../StructureDefinition-fr-practitioner-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-practitioner-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitioner-document",
  "version" : "0.1.0-ballot",
  "name" : "FRPractitionerDocument",
  "title" : "FR Practitioner Document",
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
  "description" : "Ce profil permet de décrire un professionnel de santé dans le cadre d'un document médical",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
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
    "identity" : "servd",
    "uri" : "http://www.omg.org/spec/ServD/1.0/",
    "name" : "ServD"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Practitioner",
  "baseDefinition" : "https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-practitioner|3.0.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Practitioner",
      "path" : "Practitioner"
    },
    {
      "id" : "Practitioner.identifier",
      "path" : "Practitioner.identifier",
      "min" : 1
    },
    {
      "id" : "Practitioner.name",
      "path" : "Practitioner.name",
      "max" : "1",
      "type" : [{
        "code" : "HumanName",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-human-name-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Practitioner.name.family",
      "path" : "Practitioner.name.family",
      "min" : 1
    },
    {
      "id" : "Practitioner.name.given",
      "path" : "Practitioner.name.given",
      "max" : "1"
    },
    {
      "id" : "Practitioner.qualification:role",
      "path" : "Practitioner.qualification",
      "sliceName" : "role",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Practitioner.qualification:role.code.coding",
      "path" : "Practitioner.qualification.code.coding",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://interop.esante.gouv.fr/ig/fhir/document-core/ValueSet/fr-doc-vs-role-prise-charge|0.1.0-ballot"
      }
    }]
  }
}

```
