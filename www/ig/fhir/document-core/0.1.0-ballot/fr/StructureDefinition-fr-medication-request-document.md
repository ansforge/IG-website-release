# MedicationRequest - FR Medication Request Document - FR Document Core (FHIR) v0.1.0-ballot

## Profil de ressource: MedicationRequest - FR Medication Request Document 

**Utilisations:**

* Référence ce Profil: [CarePlan - FR Care Plan Document](StructureDefinition-fr-care-plan-document.md), [Immunization - FR Immunization Document](StructureDefinition-fr-immunization-document.md), [ImmunizationRecommendation - FR Immunization Recommendation Document](StructureDefinition-fr-immunization-recommendation-document.md), [MedicationAdministration - FR Medication Administration Document](StructureDefinition-fr-medication-administration-document.md)... Show 3 more, [MedicationDispense - FR Medication Dispense Document](StructureDefinition-fr-medication-dispense-document.md), [MedicationRequest - FR Medication Request Document](StructureDefinition-fr-medication-request-document.md) and [MedicationStatement - FR Medication Statement Document](StructureDefinition-fr-medication-statement-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-medication-request-document.json)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau des éléments clés](#tabs-key) 
*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [FRCoreMedicationRequestProfile](https://hl7.fr/ig/fhir/core/3.0.0-ballot/StructureDefinition-fr-core-medication-request.html) 

#### Bindings terminologiques (différentiel)

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [FRCoreMedicationRequestProfile](https://hl7.fr/ig/fhir/core/3.0.0-ballot/StructureDefinition-fr-core-medication-request.html) 

 **Vue des éléments clés** 

#### Bindings terminologiques

#### Contraintes

 **Vue différentielle** 

Cette structure est dérivée de [FRCoreMedicationRequestProfile](https://hl7.fr/ig/fhir/core/3.0.0-ballot/StructureDefinition-fr-core-medication-request.html) 

#### Bindings terminologiques (différentiel)

 **Vue d'ensembleView** 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [FRCoreMedicationRequestProfile](https://hl7.fr/ig/fhir/core/3.0.0-ballot/StructureDefinition-fr-core-medication-request.html) 

 

Autres représentations du profil : [CSV](../StructureDefinition-fr-medication-request-document.csv), [Excel](../StructureDefinition-fr-medication-request-document.xlsx), [Schematron](../StructureDefinition-fr-medication-request-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-medication-request-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-medication-request-document",
  "version" : "0.1.0-ballot",
  "name" : "FRMedicationRequestDocument",
  "title" : "MedicationRequest - FR Medication Request Document",
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
  "description" : "FRMedicationRequestDocument permet de décrire un traitement prescrit avec notamment le médicament, le mode d’administration, la quantité, la durée et la fréquence d'administration.",
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
  "type" : "MedicationRequest",
  "baseDefinition" : "https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-medication-request|3.0.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "MedicationRequest",
      "path" : "MedicationRequest"
    },
    {
      "id" : "MedicationRequest.status",
      "path" : "MedicationRequest.status",
      "patternCode" : "completed"
    },
    {
      "id" : "MedicationRequest.intent",
      "path" : "MedicationRequest.intent",
      "patternCode" : "order"
    },
    {
      "id" : "MedicationRequest.medication[x]",
      "path" : "MedicationRequest.medication[x]",
      "type" : [{
        "code" : "CodeableConcept"
      },
      {
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-medication-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "MedicationRequest.subject",
      "path" : "MedicationRequest.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-ins-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "MedicationRequest.encounter",
      "path" : "MedicationRequest.encounter",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-encounter-care-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "MedicationRequest.requester",
      "path" : "MedicationRequest.requester",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitioner-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "MedicationRequest.reasonReference",
      "path" : "MedicationRequest.reasonReference",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Observation|4.0.1",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-condition-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-observation-prevention-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-observation-ald-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-observation-work-related-accident-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "MedicationRequest.basedOn",
      "path" : "MedicationRequest.basedOn",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-medication-request-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-care-plan-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-service-request-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-immunization-recommendation-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "MedicationRequest.dosageInstruction.doseAndRate.dose[x]:doseRange",
      "path" : "MedicationRequest.dosageInstruction.doseAndRate.dose[x]",
      "sliceName" : "doseRange",
      "type" : [{
        "code" : "Range"
      }]
    },
    {
      "id" : "MedicationRequest.dosageInstruction.doseAndRate.dose[x]:doseRange.low",
      "path" : "MedicationRequest.dosageInstruction.doseAndRate.dose[x].low",
      "min" : 1
    },
    {
      "id" : "MedicationRequest.dosageInstruction.doseAndRate.dose[x]:doseRange.high",
      "path" : "MedicationRequest.dosageInstruction.doseAndRate.dose[x].high",
      "min" : 1
    },
    {
      "id" : "MedicationRequest.dosageInstruction.doseAndRate.rate[x]:rateRange",
      "path" : "MedicationRequest.dosageInstruction.doseAndRate.rate[x]",
      "sliceName" : "rateRange",
      "type" : [{
        "code" : "Range"
      }]
    },
    {
      "id" : "MedicationRequest.dosageInstruction.doseAndRate.rate[x]:rateRange.low",
      "path" : "MedicationRequest.dosageInstruction.doseAndRate.rate[x].low",
      "min" : 1
    },
    {
      "id" : "MedicationRequest.dosageInstruction.doseAndRate.rate[x]:rateRange.high",
      "path" : "MedicationRequest.dosageInstruction.doseAndRate.rate[x].high",
      "min" : 1
    },
    {
      "id" : "MedicationRequest.dosageInstruction.maxDosePerPeriod.numerator",
      "path" : "MedicationRequest.dosageInstruction.maxDosePerPeriod.numerator",
      "min" : 1
    },
    {
      "id" : "MedicationRequest.dosageInstruction.maxDosePerPeriod.denominator",
      "path" : "MedicationRequest.dosageInstruction.maxDosePerPeriod.denominator",
      "min" : 1
    },
    {
      "id" : "MedicationRequest.substitution",
      "path" : "MedicationRequest.substitution",
      "min" : 1
    },
    {
      "id" : "MedicationRequest.substitution.reason",
      "path" : "MedicationRequest.substitution.reason",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-substitution-medicament-prescripteur-cisis|20260928134049"
      }
    }]
  }
}

```
