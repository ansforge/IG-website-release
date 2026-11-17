# Condition - FR Condition Document - FR Document Core (FHIR) v0.1.0-ballot

## Profil de ressource: Condition - FR Condition Document 

**Utilisations:**

* Référence ce Profil: [AdverseEvent - FR adverse event Document](StructureDefinition-fr-adverse-event-document.md), [DeviceRequest - FR Device request Document](StructureDefinition-fr-device-request-document.md), [DeviceUseStatement - FR Device Use Statement Document](StructureDefinition-fr-device-use-statement-document.md), [Immunization - FR Immunization Document](StructureDefinition-fr-immunization-document.md)... Show 5 more, [MedicationAdministration - FR Medication Administration Document](StructureDefinition-fr-medication-administration-document.md), [MedicationRequest - FR Medication Request Document](StructureDefinition-fr-medication-request-document.md), [MedicationStatement - FR Medication Statement Document](StructureDefinition-fr-medication-statement-document.md), [FR Patient History Extension](StructureDefinition-fr-patient-history-extension.md) and [Procedure - FR Procedure Document](StructureDefinition-fr-procedure-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-condition-document.json)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau des éléments clés](#tabs-key) 
*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [FRCoreConditionProfile](https://hl7.fr/ig/fhir/core/3.0.0-ballot/StructureDefinition-fr-core-condition.html) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [FRCoreConditionProfile](https://hl7.fr/ig/fhir/core/3.0.0-ballot/StructureDefinition-fr-core-condition.html) 

 **Vue des éléments clés** 

#### Bindings terminologiques

#### Contraintes

 **Vue différentielle** 

Cette structure est dérivée de [FRCoreConditionProfile](https://hl7.fr/ig/fhir/core/3.0.0-ballot/StructureDefinition-fr-core-condition.html) 

 **Vue d'ensembleView** 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [FRCoreConditionProfile](https://hl7.fr/ig/fhir/core/3.0.0-ballot/StructureDefinition-fr-core-condition.html) 

 

Autres représentations du profil : [CSV](../StructureDefinition-fr-condition-document.csv), [Excel](../StructureDefinition-fr-condition-document.xlsx), [Schematron](../StructureDefinition-fr-condition-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-condition-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-condition-document",
  "version" : "0.1.0-ballot",
  "name" : "FRConditionDocument",
  "title" : "Condition - FR Condition Document",
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
  "description" : "FRConditionDocument est un profil utilisé pour décrire un problème du patient (une pathologie par exemple).",
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
  "type" : "Condition",
  "baseDefinition" : "https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-condition|3.0.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Condition",
      "path" : "Condition"
    },
    {
      "id" : "Condition.extension:author",
      "path" : "Condition.extension",
      "sliceName" : "author",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-actor-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Condition.extension:author.extension:type",
      "path" : "Condition.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Condition.extension:author.extension:type.value[x]",
      "path" : "Condition.extension.extension.value[x]",
      "patternCode" : "AUT"
    },
    {
      "id" : "Condition.extension:author.extension:actor",
      "path" : "Condition.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Condition.extension:author.extension:actor.value[x]",
      "path" : "Condition.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Condition.category",
      "path" : "Condition.category",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Condition.subject",
      "path" : "Condition.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-ins-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Condition.evidence.detail",
      "path" : "Condition.evidence.detail",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-document-reference-document|0.1.0-ballot"]
      }]
    }]
  }
}

```
