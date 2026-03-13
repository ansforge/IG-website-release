# Modèle logique métier - FR LM Traitement - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Traitement**

## Logical Model: Modèle logique métier - FR LM Traitement 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-traitement | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRLMTraitement |

 
Traitement 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md), [Modèle logique métier - FR LM Effet indesirable](StructureDefinition-fr-lm-effet-indesirable.md), [Modèle logique métier - FR LM Plan de soins](StructureDefinition-fr-lm-plan-soins.md), [Modèle logique métier - FR LM Traitement dispensé](StructureDefinition-fr-lm-traitement-dispense.md)... Show 3 more, [Modèle logique métier - FR LM Traitements à la sortie](StructureDefinition-fr-lm-traitement-sortie.md), [Modèle logique métier - FR LM Traitements administrés](StructureDefinition-fr-lm-traitements-administres.md) and [Modèle logique métier - FR LM Traitements](StructureDefinition-fr-lm-traitements.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-traitement)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-traitement.csv), [Excel](StructureDefinition-fr-lm-traitement.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-traitement",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-traitement",
  "version" : "0.1.0",
  "name" : "FRLMTraitement",
  "title" : "Modèle logique métier - FR LM Traitement",
  "status" : "draft",
  "date" : "2026-03-13T22:56:29+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Traitement",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "kind" : "logical",
  "abstract" : false,
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-traitement",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-traitement",
      "path" : "fr-lm-traitement",
      "short" : "Modèle logique métier - FR LM Traitement",
      "definition" : "Traitement"
    },
    {
      "id" : "fr-lm-traitement.identifiant",
      "path" : "fr-lm-traitement.identifiant",
      "short" : "Identifiant de l'entrée. L'entrée Traitement doit être identifiée de manière unique",
      "definition" : "Identifiant de l'entrée. L'entrée Traitement doit être identifiée de manière unique",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-traitement.code",
      "path" : "fr-lm-traitement.code",
      "short" : "Acte ou situation",
      "definition" : "Acte ou situation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-traitement.note",
      "path" : "fr-lm-traitement.note",
      "short" : "Partie narrative de l’entrée",
      "definition" : "Partie narrative de l’entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-traitement.status",
      "path" : "fr-lm-traitement.status",
      "short" : "Statut de l’entrée",
      "definition" : "Statut de l’entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-traitement.occurancePeriod",
      "path" : "fr-lm-traitement.occurancePeriod",
      "short" : "Durée du traitement",
      "definition" : "Durée du traitement",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-traitement.occuranceDateTim",
      "path" : "fr-lm-traitement.occuranceDateTim",
      "short" : "Fréquence d'administration",
      "definition" : "Fréquence d'administration",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Period"
      }]
    },
    {
      "id" : "fr-lm-traitement.dosage",
      "path" : "fr-lm-traitement.dosage",
      "short" : "Dosage",
      "definition" : "Dosage",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }],
      "binding" : {
        "description" : "SNOMED CT (2.16.840.1.113883.6.96)"
      }
    },
    {
      "id" : "fr-lm-traitement.dosage.route",
      "path" : "fr-lm-traitement.dosage.route",
      "short" : "Voie d'administration",
      "definition" : "Voie d'administration",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-traitement.dosage.site",
      "path" : "fr-lm-traitement.dosage.site",
      "short" : "Région anatomique d'administration",
      "definition" : "Région anatomique d'administration",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-traitement.dosage.dose",
      "path" : "fr-lm-traitement.dosage.dose",
      "short" : "Dose à administrer",
      "definition" : "Dose à administrer",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity"
      }]
    },
    {
      "id" : "fr-lm-traitement.dosage.rate[x]",
      "path" : "fr-lm-traitement.dosage.rate[x]",
      "short" : "Rythme d'administration",
      "definition" : "Rythme d'administration",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Ratio"
      },
      {
        "code" : "Quantity"
      }]
    },
    {
      "id" : "fr-lm-traitement.dosage.doseMaximale",
      "path" : "fr-lm-traitement.dosage.doseMaximale",
      "short" : "Dose maximale",
      "definition" : "Dose maximale",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Ratio"
      }]
    },
    {
      "id" : "fr-lm-traitement.medicament",
      "path" : "fr-lm-traitement.medicament",
      "short" : "Médicament",
      "definition" : "Médicament",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-produit-sante"
      }]
    },
    {
      "id" : "fr-lm-traitement.reason",
      "path" : "fr-lm-traitement.reason",
      "short" : "Motif du traitement",
      "definition" : "Motif du traitement",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-reference-interne"
      }]
    },
    {
      "id" : "fr-lm-traitement.prescription",
      "path" : "fr-lm-traitement.prescription",
      "short" : "Prescription",
      "definition" : "Prescription",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prescription-entree"
      }]
    },
    {
      "id" : "fr-lm-traitement.subordinateTreatment",
      "path" : "fr-lm-traitement.subordinateTreatment",
      "short" : "Traitement subordonné",
      "definition" : "Traitement subordonné",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-traitement-subordonne"
      }]
    },
    {
      "id" : "fr-lm-traitement.instructionsPatient",
      "path" : "fr-lm-traitement.instructionsPatient",
      "short" : "Instruction au patient",
      "definition" : "Instruction au patient",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-instructions-patient"
      }]
    },
    {
      "id" : "fr-lm-traitement.precondition",
      "path" : "fr-lm-traitement.precondition",
      "short" : "Précondition",
      "definition" : "Précondition",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    }]
  }
}

```
