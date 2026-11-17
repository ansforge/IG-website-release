# CarePlan - FR Care Plan Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: CarePlan - FR Care Plan Document 

**Usages:**

* Refer to this Profile: [MedicationRequest - FR Medication Request Document](StructureDefinition-fr-medication-request-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-care-plan-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-care-plan-document.csv), [Excel](../StructureDefinition-fr-care-plan-document.xlsx), [Schematron](../StructureDefinition-fr-care-plan-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-care-plan-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-care-plan-document",
  "version" : "0.1.0-ballot",
  "name" : "FRCarePlanDocument",
  "title" : "CarePlan - FR Care Plan Document",
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
  "description" : "FRCarePlanDocument est un profil permettant d’enregistrer une référence à un traitement dans un plan de traitement.",
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
  "type" : "CarePlan",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/CarePlan|4.0.1",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "CarePlan",
      "path" : "CarePlan"
    },
    {
      "id" : "CarePlan.identifier",
      "path" : "CarePlan.identifier",
      "short" : "Identifiant de la ligne de traitement dans un plan de traitement."
    },
    {
      "id" : "CarePlan.category",
      "path" : "CarePlan.category",
      "short" : "Code indiquant que la référence est une ligne de traitement dans un plan de traitement.",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "CarePlan.category.coding",
      "path" : "CarePlan.category.coding",
      "min" : 1,
      "max" : "1",
      "patternCoding" : {
        "system" : "urn:oid:1.3.6.1.4.1.19376.1.9.2.2",
        "code" : "MTPItem",
        "display" : "Ligne dans un plan de traitement"
      }
    },
    {
      "id" : "CarePlan.activity.reference",
      "path" : "CarePlan.activity.reference",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-medication-request-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "CarePlan.activity.detail.product[x]",
      "path" : "CarePlan.activity.detail.product[x]",
      "short" : "Produit de santé",
      "type" : [{
        "code" : "CodeableConcept"
      },
      {
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-medication-document|0.1.0-ballot"]
      }]
    }]
  }
}

```
