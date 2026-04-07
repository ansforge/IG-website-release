# Medication - FR Medication Document - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medication - FR Medication Document**

## Resource Profile: Medication - FR Medication Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-document | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRMedicationDocument |

 
FRMedicationDocument permet de décrire un médicament ou un vaccin. 

**Utilisations:**

* Référence ce Profil: [CarePlan - FR Care Plan Document](StructureDefinition-fr-care-plan-document.md), [MedicationAdministration - FR Medication Administration Document](StructureDefinition-fr-medication-administration-document.md), [MedicationDispense - FR Medication Dispense Document](StructureDefinition-fr-medication-dispense-document.md), [MedicationRequest - FR Medication Request Document](StructureDefinition-fr-medication-request-document.md)... Show 2 more, [MedicationStatement - FR Medication Statement Document](StructureDefinition-fr-medication-statement-document.md) and [Medication - FR Medications Combinaison Document](StructureDefinition-fr-medications-combinaison-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-medication-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-medication-document.csv), [Excel](StructureDefinition-fr-medication-document.xlsx), [Schematron](StructureDefinition-fr-medication-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-medication-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-document",
  "version" : "0.1.0-snapsnot",
  "name" : "FRMedicationDocument",
  "title" : "Medication - FR Medication Document",
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
  "description" : "FRMedicationDocument permet de décrire un médicament ou un vaccin.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Medication",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Medication",
      "path" : "Medication"
    },
    {
      "id" : "Medication.extension",
      "path" : "Medication.extension",
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
      "id" : "Medication.extension:productName",
      "path" : "Medication.extension",
      "sliceName" : "productName",
      "short" : "Nom de marque du produit.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://profiles.ihe.net/PHARM/MPD/StructureDefinition/ihe-ext-medication-productname"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Medication.extension:classification",
      "path" : "Medication.extension",
      "sliceName" : "classification",
      "short" : "Équivalent générique (Code de regroupement ATC) et le Conditionnement (Code du produit de santé conditionné (CIP)).",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://profiles.ihe.net/PHARM/MPD/StructureDefinition/ihe-ext-medication-classification"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Medication.extension:conditionnement",
      "path" : "Medication.extension",
      "sliceName" : "conditionnement",
      "short" : "Présentation / conditionnement.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://profiles.ihe.net/PHARM/MPD/StructureDefinition/ihe-ext-medication-characteristic"]
      }]
    },
    {
      "id" : "Medication.code",
      "path" : "Medication.code",
      "short" : "Code du produit de santé",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Medication.code.coding",
      "path" : "Medication.code.coding",
      "short" : "Autres codifications (CIP, UCD, ATC, MV)",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-medication-translation-document"
      }
    },
    {
      "id" : "Medication.form",
      "path" : "Medication.form",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-edqm-document"
      }
    },
    {
      "id" : "Medication.ingredient",
      "path" : "Medication.ingredient",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "$this"
        }],
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Medication.ingredient:doseAntigene",
      "path" : "Medication.ingredient",
      "sliceName" : "doseAntigene",
      "short" : "Dose antigène",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Medication.ingredient:doseAntigene.strength",
      "path" : "Medication.ingredient.strength",
      "short" : "Quantité de la dose antigène",
      "mustSupport" : true
    },
    {
      "id" : "Medication.ingredient:substanceActive",
      "path" : "Medication.ingredient",
      "sliceName" : "substanceActive",
      "short" : "Substance active",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Medication.ingredient:substanceActive.item[x]",
      "path" : "Medication.ingredient.item[x]",
      "short" : "Code SMS de la substance active",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/terminologie-sms?vs"
      }
    },
    {
      "id" : "Medication.ingredient:substanceActive.item[x].text",
      "path" : "Medication.ingredient.item[x].text",
      "short" : "Nom de la substance",
      "mustSupport" : true
    },
    {
      "id" : "Medication.ingredient:substanceActive.strength",
      "path" : "Medication.ingredient.strength",
      "short" : "Dosage",
      "mustSupport" : true
    },
    {
      "id" : "Medication.ingredient:substanceActive.strength.numerator",
      "path" : "Medication.ingredient.strength.numerator",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Medication.ingredient:substanceActive.strength.denominator",
      "path" : "Medication.ingredient.strength.denominator",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Medication.batch.lotNumber",
      "path" : "Medication.batch.lotNumber",
      "short" : "Numéro de lot",
      "mustSupport" : true
    },
    {
      "id" : "Medication.batch.expirationDate",
      "path" : "Medication.batch.expirationDate",
      "short" : "Date d'expiration du produit",
      "mustSupport" : true
    }]
  }
}

```
