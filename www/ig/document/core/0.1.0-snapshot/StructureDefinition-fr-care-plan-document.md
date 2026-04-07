# CarePlan - FR Care Plan Document - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CarePlan - FR Care Plan Document**

## Resource Profile: CarePlan - FR Care Plan Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-care-plan-document | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRCarePlanDocument |

 
FRCarePlanDocument est un profil permettant d’enregistrer une référence à un traitement dans un plan de traitement. 

**Utilisations:**

* Ce Profil n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-care-plan-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-care-plan-document.csv), [Excel](StructureDefinition-fr-care-plan-document.xlsx), [Schematron](StructureDefinition-fr-care-plan-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-care-plan-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-care-plan-document",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCarePlanDocument",
  "title" : "CarePlan - FR Care Plan Document",
  "status" : "draft",
  "date" : "2026-04-07T08:54:42+00:00",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/CarePlan",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "CarePlan",
      "path" : "CarePlan"
    },
    {
      "id" : "CarePlan.identifier",
      "path" : "CarePlan.identifier",
      "short" : "Identifiant de la ligne de traitement dans un plan de traitement.",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "CarePlan.category",
      "path" : "CarePlan.category",
      "short" : "Code indiquant que la référence est une ligne de traitement dans un plan de traitement.",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "CarePlan.category.coding",
      "path" : "CarePlan.category.coding",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "CarePlan.category.coding.system",
      "path" : "CarePlan.category.coding.system",
      "patternUri" : "urn:1.3.6.1.4.1.19376.1.9.2.2"
    },
    {
      "id" : "CarePlan.category.coding.code",
      "path" : "CarePlan.category.coding.code",
      "patternCode" : "IHEPharmacyItemTypeList"
    },
    {
      "id" : "CarePlan.category.coding.display",
      "path" : "CarePlan.category.coding.display",
      "patternString" : "Ligne dans un plan de traitement"
    },
    {
      "id" : "CarePlan.author",
      "path" : "CarePlan.author",
      "mustSupport" : true
    },
    {
      "id" : "CarePlan.activity.reference",
      "path" : "CarePlan.activity.reference",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-request-document"]
      }],
      "mustSupport" : true
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
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medications-combinaison-document"]
      }],
      "mustSupport" : true
    }]
  }
}

```
