# MedicationDispense - FR Medication Dispense Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationDispense - FR Medication Dispense Document**

## Resource Profile: MedicationDispense - FR Medication Dispense Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-dispense-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRMedicationDispenseDocument |

 
FRMedicationDispenseDocument permet de décrire un traitement dispensé avec notamment le médicament dispensé, la quantité et la référence de la prescription. 

**Utilisations:**

* Ce Profil n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-medication-dispense-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-medication-dispense-document.csv), [Excel](StructureDefinition-fr-medication-dispense-document.xlsx), [Schematron](StructureDefinition-fr-medication-dispense-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-medication-dispense-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-dispense-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRMedicationDispenseDocument",
  "title" : "MedicationDispense - FR Medication Dispense Document",
  "status" : "draft",
  "date" : "2026-03-23T13:48:54+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "FRMedicationDispenseDocument permet de décrire un traitement dispensé avec notamment le médicament dispensé, la quantité et la référence de la prescription.",
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
    "identity" : "rx-dispense-rmim",
    "uri" : "http://www.hl7.org/v3/PORX_RM020070UV",
    "name" : "V3 Pharmacy Dispense RMIM"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "MedicationDispense",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/MedicationDispense",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "MedicationDispense",
      "path" : "MedicationDispense"
    },
    {
      "id" : "MedicationDispense.identifier",
      "path" : "MedicationDispense.identifier",
      "short" : "Identifiant",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "MedicationDispense.medication[x]",
      "path" : "MedicationDispense.medication[x]",
      "short" : "Médicament délivré",
      "type" : [{
        "code" : "CodeableConcept"
      },
      {
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationDispense.supportingInformation",
      "path" : "MedicationDispense.supportingInformation",
      "short" : "Posologie",
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-administration-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationDispense.authorizingPrescription",
      "path" : "MedicationDispense.authorizingPrescription",
      "short" : "Référence de la prescription",
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-request-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "MedicationDispense.type",
      "path" : "MedicationDispense.type",
      "short" : "Complétude de la dispensation",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "MedicationDispense.type.coding",
      "path" : "MedicationDispense.type.coding",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-completude-dispensation-cisis"
      }
    },
    {
      "id" : "MedicationDispense.quantity",
      "path" : "MedicationDispense.quantity",
      "short" : "Quantité : Unité issue de EDQM Packaging / classe CON (Récipient)",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "MedicationDispense.quantity.unit",
      "path" : "MedicationDispense.quantity.unit",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-edqm-document"
      }
    },
    {
      "id" : "MedicationDispense.dosageInstruction.text",
      "path" : "MedicationDispense.dosageInstruction.text",
      "short" : "Instructions au dispensateur",
      "mustSupport" : true
    },
    {
      "id" : "MedicationDispense.dosageInstruction.additionalInstruction",
      "path" : "MedicationDispense.dosageInstruction.additionalInstruction",
      "short" : "Instruction au patient sous forme codée",
      "mustSupport" : true
    },
    {
      "id" : "MedicationDispense.dosageInstruction.patientInstruction",
      "path" : "MedicationDispense.dosageInstruction.patientInstruction",
      "short" : "Instructions au patient",
      "mustSupport" : true
    },
    {
      "id" : "MedicationDispense.substitution",
      "path" : "MedicationDispense.substitution",
      "short" : "Acte de substitution",
      "mustSupport" : true
    },
    {
      "id" : "MedicationDispense.substitution.type",
      "path" : "MedicationDispense.substitution.type",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "code" : "G",
          "display" : "Substitution autorisée par un produit générique"
        }]
      },
      "mustSupport" : true
    }]
  }
}

```
