# MedicationRequest - FR Medication Request Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationRequest - FR Medication Request Document**

## Resource Profile: MedicationRequest - FR Medication Request Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-request-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRMedicationRequestDocument |

 
FRMedicationRequestDocument permet de décrire un traitement prescrit avec notamment le médicament, le mode d’administration, la quantité, la durée et la fréquence d’administration. 

**Utilisations:**

* Référence ce Profil: [CarePlan - FR Care Plan Document](StructureDefinition-fr-care-plan-document.md), [Immunization - FR Immunization Document](StructureDefinition-fr-immunization-document.md), [ImmunizationRecommendation - FR Immunization Recommendation Document](StructureDefinition-fr-immunization-recommendation-document.md), [MedicationAdministration - FR Medication Administration Document](StructureDefinition-fr-medication-administration-document.md)... Show 3 more, [MedicationDispense - FR Medication Dispense Document](StructureDefinition-fr-medication-dispense-document.md), [MedicationRequest - FR Medication Request Document](StructureDefinition-fr-medication-request-document.md) and [MedicationStatement - FR Medication Statement Document](StructureDefinition-fr-medication-statement-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-medication-request-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-medication-request-document.csv), [Excel](StructureDefinition-fr-medication-request-document.xlsx), [Schematron](StructureDefinition-fr-medication-request-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-medication-request-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-request-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRMedicationRequestDocument",
  "title" : "MedicationRequest - FR Medication Request Document",
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
  "description" : "FRMedicationRequestDocument permet de décrire un traitement prescrit avec notamment le médicament, le mode d’administration, la quantité, la durée et la fréquence d'administration.",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/MedicationRequest",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "MedicationRequest",
      "path" : "MedicationRequest"
    },
    {
      "id" : "MedicationRequest.extension",
      "path" : "MedicationRequest.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "MedicationRequest.extension:author",
      "path" : "MedicationRequest.extension",
      "sliceName" : "author",
      "short" : "Auteur du document Prescription",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.extension:author.extension:type",
      "path" : "MedicationRequest.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "MedicationRequest.extension:author.extension:type.value[x]",
      "path" : "MedicationRequest.extension.extension.value[x]",
      "patternCode" : "AUT"
    },
    {
      "id" : "MedicationRequest.extension:author.extension:actor",
      "path" : "MedicationRequest.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "MedicationRequest.extension:author.extension:actor.value[x]",
      "path" : "MedicationRequest.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }]
    },
    {
      "id" : "MedicationRequest.extension:horsAMM",
      "path" : "MedicationRequest.extension",
      "sliceName" : "horsAMM",
      "short" : "Hors Autorisation de mise sur le marché",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-request-out-of-nomenclature-extension"]
      }]
    },
    {
      "id" : "MedicationRequest.extension:notCovered",
      "path" : "MedicationRequest.extension",
      "sliceName" : "notCovered",
      "short" : "Traitement prescrit n'est remboursable / remboursable",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-not-covered-extension"]
      }]
    },
    {
      "id" : "MedicationRequest.identifier",
      "path" : "MedicationRequest.identifier",
      "short" : "Identifiant prescription",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.status",
      "path" : "MedicationRequest.status",
      "short" : "Statut",
      "patternCode" : "completed",
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.intent",
      "path" : "MedicationRequest.intent",
      "patternCode" : "order"
    },
    {
      "id" : "MedicationRequest.medication[x]",
      "path" : "MedicationRequest.medication[x]",
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
    },
    {
      "id" : "MedicationRequest.authoredOn",
      "path" : "MedicationRequest.authoredOn",
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.requester",
      "path" : "MedicationRequest.requester",
      "short" : "Prescripteur",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.reasonReference",
      "path" : "MedicationRequest.reasonReference",
      "slicing" : {
        "discriminator" : [{
          "type" : "pattern",
          "path" : "display"
        }],
        "rules" : "open"
      },
      "short" : "Motif du traitement",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-condition-document",
        "http://hl7.org/fhir/StructureDefinition/Observation"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.reasonReference:ald",
      "path" : "MedicationRequest.reasonReference",
      "sliceName" : "ald",
      "short" : "En rapport avec une Affection Longue Durée (ALD).",
      "definition" : "S'il s'agit d'une Affection Longue Durée (ALD) il faut préciser le problème",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-condition-document"]
      }]
    },
    {
      "id" : "MedicationRequest.reasonReference:accidentTravail",
      "path" : "MedicationRequest.reasonReference",
      "sliceName" : "accidentTravail",
      "short" : "En rapport avec accident travail",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-work-related-accident-document"]
      }]
    },
    {
      "id" : "MedicationRequest.reasonReference:prevention",
      "path" : "MedicationRequest.reasonReference",
      "sliceName" : "prevention",
      "short" : "En rapport avec la prévention",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-condition-document"]
      }]
    },
    {
      "id" : "MedicationRequest.instantiatesUri",
      "path" : "MedicationRequest.instantiatesUri",
      "short" : "Référence de la prescription"
    },
    {
      "id" : "MedicationRequest.basedOn",
      "path" : "MedicationRequest.basedOn",
      "short" : "Référence à un item du plan de traitement. Une copie du plan de traitement médicamenteux.",
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-request-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dosageInstruction.sequence",
      "path" : "MedicationRequest.dosageInstruction.sequence",
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dosageInstruction.additionalInstruction",
      "path" : "MedicationRequest.dosageInstruction.additionalInstruction",
      "slicing" : {
        "discriminator" : [{
          "type" : "pattern",
          "path" : "$this"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "MedicationRequest.dosageInstruction.additionalInstruction:instructionsPatient",
      "path" : "MedicationRequest.dosageInstruction.additionalInstruction",
      "sliceName" : "instructionsPatient",
      "short" : "Instruction au patient",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dosageInstruction.additionalInstruction:instructionsPatient.coding",
      "path" : "MedicationRequest.dosageInstruction.additionalInstruction.coding",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "MedicationRequest.dosageInstruction.additionalInstruction:instructionsPatient.coding.system",
      "path" : "MedicationRequest.dosageInstruction.additionalInstruction.coding.system",
      "patternUri" : "http://terminology.hl7.org/CodeSystem/v3-ActCode"
    },
    {
      "id" : "MedicationRequest.dosageInstruction.additionalInstruction:instructionsPatient.coding.code",
      "path" : "MedicationRequest.dosageInstruction.additionalInstruction.coding.code",
      "patternCode" : "PINSTRUCT"
    },
    {
      "id" : "MedicationRequest.dosageInstruction.additionalInstruction:precondition",
      "path" : "MedicationRequest.dosageInstruction.additionalInstruction",
      "sliceName" : "precondition",
      "short" : "Condition préalable à l'utilisation du médicament",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "MedicationRequest.dosageInstruction.additionalInstruction:precondition.text",
      "path" : "MedicationRequest.dosageInstruction.additionalInstruction.text",
      "patternString" : "Permet de décrire les conditions préalables à l'utilisation du médicament."
    },
    {
      "id" : "MedicationRequest.dosageInstruction.timing",
      "path" : "MedicationRequest.dosageInstruction.timing",
      "short" : "Durée du traitement et fréquence d'administration.",
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dosageInstruction.timing.repeat",
      "path" : "MedicationRequest.dosageInstruction.timing.repeat",
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dosageInstruction.timing.repeat.bounds[x]",
      "path" : "MedicationRequest.dosageInstruction.timing.repeat.bounds[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "MedicationRequest.dosageInstruction.timing.repeat.bounds[x]:boundsPeriod",
      "path" : "MedicationRequest.dosageInstruction.timing.repeat.bounds[x]",
      "sliceName" : "boundsPeriod",
      "short" : "Durée du traitement",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Period"
      }]
    },
    {
      "id" : "MedicationRequest.dosageInstruction.timing.repeat.bounds[x]:boundsPeriod.start",
      "path" : "MedicationRequest.dosageInstruction.timing.repeat.bounds[x].start",
      "short" : "Date de début du traitement"
    },
    {
      "id" : "MedicationRequest.dosageInstruction.timing.repeat.bounds[x]:boundsPeriod.end",
      "path" : "MedicationRequest.dosageInstruction.timing.repeat.bounds[x].end",
      "short" : "Date de fin du traitement"
    },
    {
      "id" : "MedicationRequest.dosageInstruction.timing.repeat.frequency",
      "path" : "MedicationRequest.dosageInstruction.timing.repeat.frequency",
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dosageInstruction.timing.repeat.period",
      "path" : "MedicationRequest.dosageInstruction.timing.repeat.period",
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dosageInstruction.timing.repeat.periodUnit",
      "path" : "MedicationRequest.dosageInstruction.timing.repeat.periodUnit",
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dosageInstruction.timing.repeat.when",
      "path" : "MedicationRequest.dosageInstruction.timing.repeat.when",
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dosageInstruction.timing.repeat.offset",
      "path" : "MedicationRequest.dosageInstruction.timing.repeat.offset",
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dosageInstruction.asNeeded[x]",
      "path" : "MedicationRequest.dosageInstruction.asNeeded[x]",
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dosageInstruction.site",
      "path" : "MedicationRequest.dosageInstruction.site",
      "short" : "Région anatomique d'administration",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-human-substance-administration-site-cisis"
      }
    },
    {
      "id" : "MedicationRequest.dosageInstruction.route",
      "path" : "MedicationRequest.dosageInstruction.route",
      "short" : "Voie d'administration",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-edqm-document"
      }
    },
    {
      "id" : "MedicationRequest.dosageInstruction.doseAndRate.dose[x]",
      "path" : "MedicationRequest.dosageInstruction.doseAndRate.dose[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "MedicationRequest.dosageInstruction.doseAndRate.dose[x]:doseRange",
      "path" : "MedicationRequest.dosageInstruction.doseAndRate.dose[x]",
      "sliceName" : "doseRange",
      "short" : "Dose à administrer",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Range"
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dosageInstruction.doseAndRate.dose[x]:doseRange.low",
      "path" : "MedicationRequest.dosageInstruction.doseAndRate.dose[x].low",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dosageInstruction.doseAndRate.dose[x]:doseRange.high",
      "path" : "MedicationRequest.dosageInstruction.doseAndRate.dose[x].high",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dosageInstruction.doseAndRate.rate[x]",
      "path" : "MedicationRequest.dosageInstruction.doseAndRate.rate[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "MedicationRequest.dosageInstruction.doseAndRate.rate[x]:rateRange",
      "path" : "MedicationRequest.dosageInstruction.doseAndRate.rate[x]",
      "sliceName" : "rateRange",
      "short" : "Rythme d'administration",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Range"
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dosageInstruction.doseAndRate.rate[x]:rateRange.low",
      "path" : "MedicationRequest.dosageInstruction.doseAndRate.rate[x].low",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dosageInstruction.doseAndRate.rate[x]:rateRange.high",
      "path" : "MedicationRequest.dosageInstruction.doseAndRate.rate[x].high",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dosageInstruction.maxDosePerPeriod",
      "path" : "MedicationRequest.dosageInstruction.maxDosePerPeriod",
      "short" : "Dose maximale",
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dosageInstruction.maxDosePerPeriod.numerator",
      "path" : "MedicationRequest.dosageInstruction.maxDosePerPeriod.numerator",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dosageInstruction.maxDosePerPeriod.denominator",
      "path" : "MedicationRequest.dosageInstruction.maxDosePerPeriod.denominator",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dispenseRequest",
      "path" : "MedicationRequest.dispenseRequest",
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dispenseRequest.extension",
      "path" : "MedicationRequest.dispenseRequest.extension",
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
      "id" : "MedicationRequest.dispenseRequest.extension:dispenserInstructionR5",
      "path" : "MedicationRequest.dispenseRequest.extension",
      "sliceName" : "dispenserInstructionR5",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/5.0/StructureDefinition/extension-MedicationRequest.dispenseRequest.dispenserInstruction"]
      }]
    },
    {
      "id" : "MedicationRequest.dispenseRequest.extension:dispenserInstructionR5.value[x]",
      "path" : "MedicationRequest.dispenseRequest.extension.value[x]",
      "short" : "instructions au dispensateur",
      "min" : 1
    },
    {
      "id" : "MedicationRequest.dispenseRequest.validityPeriod",
      "path" : "MedicationRequest.dispenseRequest.validityPeriod",
      "short" : "Période de renouvellement",
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dispenseRequest.numberOfRepeatsAllowed",
      "path" : "MedicationRequest.dispenseRequest.numberOfRepeatsAllowed",
      "short" : "Nombre de renouvellement(s) possible(s)",
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.dispenseRequest.quantity",
      "path" : "MedicationRequest.dispenseRequest.quantity",
      "short" : "Quantité à dispenser",
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.substitution",
      "path" : "MedicationRequest.substitution",
      "short" : "Autorisation de substitution",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.substitution.allowed[x]",
      "path" : "MedicationRequest.substitution.allowed[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "mustSupport" : true
    },
    {
      "id" : "MedicationRequest.substitution.allowed[x]:allowedCodeableConcept",
      "path" : "MedicationRequest.substitution.allowed[x]",
      "sliceName" : "allowedCodeableConcept",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-hl7-v3-ActSubstanceAdminSubstitutionCode-cisis"
      }
    }]
  }
}

```
