# MedicationAdministration - FR Medication Administration Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationAdministration - FR Medication Administration Document**

## Resource Profile: MedicationAdministration - FR Medication Administration Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-administration-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRMedicationAdministrationDocument |

 
* FRMedicationAdministrationDocument permert de décrire les modalités d’administration d’un médicament au patient.
* Il permet de décrire notamment le médicament, le mode d’administration, la quantité, la durée et la fréquence d’administration.
* Si le traitement est en attente d’administration c’est-à dire qu’il a été prescrit.
 

**Utilisations:**

* Référence ce Profil: [AdverseEvent - FR adverse event Document](StructureDefinition-fr-adverse-event-document.md), [MedicationDispense - FR Medication Dispense Document](StructureDefinition-fr-medication-dispense-document.md), [MedicationStatement - FR Medication Statement Document](StructureDefinition-fr-medication-statement-document.md), [Observation - FR Observation Radiation Exposure Document](StructureDefinition-fr-observation-radiation-exposure-document.md)... Show 2 more, [FR Patient History Extension](StructureDefinition-fr-patient-history-extension.md) and [Procedure - FR Procedure Imaging Document](StructureDefinition-fr-procedure-imaging-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-medication-administration-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-medication-administration-document.csv), [Excel](StructureDefinition-fr-medication-administration-document.xlsx), [Schematron](StructureDefinition-fr-medication-administration-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-medication-administration-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-administration-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRMedicationAdministrationDocument",
  "title" : "MedicationAdministration - FR Medication Administration Document",
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
  "description" : "\n - FRMedicationAdministrationDocument permert de décrire les modalités d'administration d'un médicament au patient.\n - Il permet de décrire notamment le médicament, le mode d'administration, la quantité, la durée et la fréquence d'administration.\n - Si le traitement est en attente d’administration c’est-à dire qu’il a été prescrit.",
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
  },
  {
    "identity" : "w3c.prov",
    "uri" : "http://www.w3.org/ns/prov",
    "name" : "W3C PROV"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "MedicationAdministration",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/MedicationAdministration",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "MedicationAdministration",
      "path" : "MedicationAdministration"
    },
    {
      "id" : "MedicationAdministration.extension",
      "path" : "MedicationAdministration.extension",
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
      "id" : "MedicationAdministration.extension:occurenceR5",
      "path" : "MedicationAdministration.extension",
      "sliceName" : "occurenceR5",
      "short" : "Fréquence d'administration",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/5.0/StructureDefinition/extension-MedicationAdministration.occurence%5Bx%5D"]
      }]
    },
    {
      "id" : "MedicationAdministration.extension:occurenceR5.value[x]",
      "path" : "MedicationAdministration.extension.value[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "MedicationAdministration.extension:occurenceR5.value[x]:valueTiming",
      "path" : "MedicationAdministration.extension.value[x]",
      "sliceName" : "valueTiming",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Timing"
      }]
    },
    {
      "id" : "MedicationAdministration.identifier",
      "path" : "MedicationAdministration.identifier",
      "short" : "Identifiant. L'entrée Traitement doit être identifiée de manière unique.",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "MedicationAdministration.status",
      "path" : "MedicationAdministration.status",
      "short" : "Statut",
      "patternCode" : "completed",
      "mustSupport" : true
    },
    {
      "id" : "MedicationAdministration.category",
      "path" : "MedicationAdministration.category",
      "short" : "Acte ou situation",
      "mustSupport" : true
    },
    {
      "id" : "MedicationAdministration.medication[x]",
      "path" : "MedicationAdministration.medication[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medications-combinaison-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationAdministration.effective[x]",
      "path" : "MedicationAdministration.effective[x]",
      "short" : "Durée du traitement",
      "type" : [{
        "code" : "Period"
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationAdministration.reasonReference",
      "path" : "MedicationAdministration.reasonReference",
      "short" : "Motif du traitement",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-condition-document",
        "http://hl7.org/fhir/StructureDefinition/Observation"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationAdministration.request",
      "path" : "MedicationAdministration.request",
      "short" : "Prescription",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-request-document"]
      }]
    },
    {
      "id" : "MedicationAdministration.note",
      "path" : "MedicationAdministration.note",
      "short" : "Permet de décrire les conditions préalables à l'utilisation du médicament.",
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "MedicationAdministration.dosage.extension",
      "path" : "MedicationAdministration.dosage.extension",
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
      "id" : "MedicationAdministration.dosage.extension:sequence",
      "path" : "MedicationAdministration.dosage.extension",
      "sliceName" : "sequence",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-administration-sequence-extension"]
      }]
    },
    {
      "id" : "MedicationAdministration.dosage.text",
      "path" : "MedicationAdministration.dosage.text",
      "short" : "Instruction au patient",
      "mustSupport" : true
    },
    {
      "id" : "MedicationAdministration.dosage.site",
      "path" : "MedicationAdministration.dosage.site",
      "short" : "Région anatomique d'administration",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-human-substance-administration-site-cisis"
      }
    },
    {
      "id" : "MedicationAdministration.dosage.route",
      "path" : "MedicationAdministration.dosage.route",
      "short" : "Voie d'administration",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "description" : "EDQM - Standard terms / classe ROA (0.4.0.127.0.16.1.1.2.1)",
        "valueSet" : "https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-edqm-document"
      }
    },
    {
      "id" : "MedicationAdministration.dosage.dose",
      "path" : "MedicationAdministration.dosage.dose",
      "short" : "Dose à administrer",
      "mustSupport" : true
    },
    {
      "id" : "MedicationAdministration.dosage.rate[x]",
      "path" : "MedicationAdministration.dosage.rate[x]",
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
      "id" : "MedicationAdministration.dosage.rate[x]:rateRatio",
      "path" : "MedicationAdministration.dosage.rate[x]",
      "sliceName" : "rateRatio",
      "short" : "doseMaximale",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Ratio"
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationAdministration.dosage.rate[x]:rateQuantity",
      "path" : "MedicationAdministration.dosage.rate[x]",
      "sliceName" : "rateQuantity",
      "short" : "rythme d'administration",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/SimpleQuantity"]
      }],
      "mustSupport" : true
    }]
  }
}

```
