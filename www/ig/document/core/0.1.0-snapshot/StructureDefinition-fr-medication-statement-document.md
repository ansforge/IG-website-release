# MedicationStatement - FR Medication Statement Document - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationStatement - FR Medication Statement Document**

## Resource Profile: MedicationStatement - FR Medication Statement Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-statement-document | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRMedicationStatementDocument |

 
* FRMedicationStatementDocument permet de décrire les modalités d’administration d’un médicament au patient.
* Il permet de décrire notamment le médicament, le mode d’administration, la quantité, la durée et la fréquence d’administration.
* Si le traitement a déjà été administré ou si information rapporté par le patient ou si aucun traitement.
 

**Utilisations:**

* Ce Profil n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-medication-statement-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-medication-statement-document.csv), [Excel](StructureDefinition-fr-medication-statement-document.xlsx), [Schematron](StructureDefinition-fr-medication-statement-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-medication-statement-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-statement-document",
  "version" : "0.1.0-snapsnot",
  "name" : "FRMedicationStatementDocument",
  "title" : "MedicationStatement - FR Medication Statement Document",
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
  "description" : "\n - FRMedicationStatementDocument permet de décrire les modalités d'administration d'un médicament au patient.\n - Il permet de décrire notamment le médicament, le mode d'administration, la quantité, la durée et la fréquence d'administration.\n - Si le traitement a déjà été administré ou si information rapporté par le patient ou si aucun traitement.",
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
  "type" : "MedicationStatement",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/MedicationStatement",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "MedicationStatement",
      "path" : "MedicationStatement"
    },
    {
      "id" : "MedicationStatement.identifier",
      "path" : "MedicationStatement.identifier",
      "short" : "Identifiant. L'entrée Traitement doit être identifiée de manière unique.",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.basedOn",
      "path" : "MedicationStatement.basedOn",
      "short" : "Prescription",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-request-document"]
      }]
    },
    {
      "id" : "MedicationStatement.partOf",
      "path" : "MedicationStatement.partOf",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-administration-document"]
      }]
    },
    {
      "id" : "MedicationStatement.status",
      "path" : "MedicationStatement.status",
      "short" : "Statut",
      "patternCode" : "completed",
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.category",
      "path" : "MedicationStatement.category",
      "short" : "Acte ou situation",
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.medication[x]",
      "path" : "MedicationStatement.medication[x]",
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
      "id" : "MedicationStatement.effective[x]",
      "path" : "MedicationStatement.effective[x]",
      "short" : "Durée du traitement",
      "type" : [{
        "code" : "Period"
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.reasonReference",
      "path" : "MedicationStatement.reasonReference",
      "short" : "Motif du traitement",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-condition-document",
        "http://hl7.org/fhir/StructureDefinition/Observation"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.note",
      "path" : "MedicationStatement.note",
      "short" : "Permet de décrire les conditions préalables à l'utilisation du médicament.",
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.dosage",
      "path" : "MedicationStatement.dosage",
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.dosage.sequence",
      "path" : "MedicationStatement.dosage.sequence",
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.dosage.additionalInstruction",
      "path" : "MedicationStatement.dosage.additionalInstruction",
      "short" : "Instructions au patient",
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.dosage.additionalInstruction.text",
      "path" : "MedicationStatement.dosage.additionalInstruction.text",
      "short" : "Instruction au patient",
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.dosage.timing",
      "path" : "MedicationStatement.dosage.timing",
      "short" : "Fréquence d'administration",
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.dosage.asNeeded[x]",
      "path" : "MedicationStatement.dosage.asNeeded[x]",
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.dosage.site",
      "path" : "MedicationStatement.dosage.site",
      "short" : "Région anatomique d'administration",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-human-substance-administration-site-cisis"
      }
    },
    {
      "id" : "MedicationStatement.dosage.route",
      "path" : "MedicationStatement.dosage.route",
      "short" : "Voie d'administration",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "description" : "EDQM - Standard terms / classe ROA (0.4.0.127.0.16.1.1.2.1)",
        "valueSet" : "https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-edqm-document"
      }
    },
    {
      "id" : "MedicationStatement.dosage.doseAndRate",
      "path" : "MedicationStatement.dosage.doseAndRate",
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.dosage.doseAndRate.dose[x]",
      "path" : "MedicationStatement.dosage.doseAndRate.dose[x]",
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
      "id" : "MedicationStatement.dosage.doseAndRate.dose[x]:doseQuantity",
      "path" : "MedicationStatement.dosage.doseAndRate.dose[x]",
      "sliceName" : "doseQuantity",
      "short" : "Dose déclarée",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/SimpleQuantity"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.dosage.doseAndRate.rate[x]",
      "path" : "MedicationStatement.dosage.doseAndRate.rate[x]",
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
      "id" : "MedicationStatement.dosage.doseAndRate.rate[x]:rateQuantity",
      "path" : "MedicationStatement.dosage.doseAndRate.rate[x]",
      "sliceName" : "rateQuantity",
      "short" : "rythme d'administration",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/SimpleQuantity"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationStatement.dosage.maxDosePerPeriod",
      "path" : "MedicationStatement.dosage.maxDosePerPeriod",
      "short" : "dose maximale",
      "mustSupport" : true
    }]
  }
}

```
