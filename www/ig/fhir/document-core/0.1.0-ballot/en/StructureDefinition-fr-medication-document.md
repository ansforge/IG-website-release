# Medication - FR Medication Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: Medication - FR Medication Document 

**Usages:**

* Refer to this Profile: [CarePlan - FR Care Plan Document](StructureDefinition-fr-care-plan-document.md), [MedicationAdministration - FR Medication Administration Document](StructureDefinition-fr-medication-administration-document.md), [MedicationDispense - FR Medication Dispense Document](StructureDefinition-fr-medication-dispense-document.md), [Medication - FR Medication Document](StructureDefinition-fr-medication-document.md)... Show 2 more, [MedicationRequest - FR Medication Request Document](StructureDefinition-fr-medication-request-document.md) and [MedicationStatement - FR Medication Statement Document](StructureDefinition-fr-medication-statement-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-medication-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-medication-document.csv), [Excel](../StructureDefinition-fr-medication-document.xlsx), [Schematron](../StructureDefinition-fr-medication-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-medication-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-medication-document",
  "version" : "0.1.0-ballot",
  "name" : "FRMedicationDocument",
  "title" : "Medication - FR Medication Document",
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
  "description" : "FRMedicationDocument permet de décrire un médicament ou un vaccin.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "script10.6",
    "uri" : "http://ncpdp.org/SCRIPT10_6",
    "name" : "Mapping to NCPDP SCRIPT 10.6"
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
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Medication",
  "baseDefinition" : "https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-medication|3.0.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Medication",
      "path" : "Medication"
    },
    {
      "id" : "Medication.extension",
      "path" : "Medication.extension",
      "min" : 1
    },
    {
      "id" : "Medication.extension:productName",
      "path" : "Medication.extension",
      "sliceName" : "productName",
      "min" : 1
    },
    {
      "id" : "Medication.form",
      "path" : "Medication.form",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://interop.esante.gouv.fr/ig/fhir/document-core/ValueSet/fr-vs-edqm-form-document|0.1.0-ballot"
      }
    },
    {
      "id" : "Medication.ingredient.item[x]:itemReference",
      "path" : "Medication.ingredient.item[x]",
      "sliceName" : "itemReference",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-medication-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Medication.ingredient.strength.numerator",
      "path" : "Medication.ingredient.strength.numerator",
      "min" : 1
    },
    {
      "id" : "Medication.ingredient.strength.denominator",
      "path" : "Medication.ingredient.strength.denominator",
      "min" : 1
    }]
  }
}

```
