# Modèle logique métier - FR LM Statut clinique du patient - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Statut clinique du patient**

## Logical Model: Modèle logique métier - FR LM Statut clinique du patient 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-statut-clinique-patient | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMStatutCliniquePatient |

 
Statut clinique du patient 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Problème](StructureDefinition-fr-lm-probleme.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-statut-clinique-patient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-statut-clinique-patient.csv), [Excel](StructureDefinition-fr-lm-statut-clinique-patient.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-statut-clinique-patient",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-statut-clinique-patient",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMStatutCliniquePatient",
  "title" : "Modèle logique métier - FR LM Statut clinique du patient",
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
  "description" : "Statut clinique du patient",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-statut-clinique-patient",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-statut-clinique-patient",
      "path" : "fr-lm-statut-clinique-patient",
      "short" : "Modèle logique métier - FR LM Statut clinique du patient",
      "definition" : "Statut clinique du patient"
    },
    {
      "id" : "fr-lm-statut-clinique-patient.codeStatutCliniquePatient",
      "path" : "fr-lm-statut-clinique-patient.codeStatutCliniquePatient",
      "short" : "Code de l'entrée",
      "definition" : "Code de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-statut-clinique-patient.descriptionNarrative",
      "path" : "fr-lm-statut-clinique-patient.descriptionNarrative",
      "short" : "Description narrative de l'entrée",
      "definition" : "Description narrative de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-statut-clinique-patient.statutEntree",
      "path" : "fr-lm-statut-clinique-patient.statutEntree",
      "short" : "Statut de l'entrée. Fixé à la valeur 'completed'",
      "definition" : "Statut de l'entrée. Fixé à la valeur 'completed'",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-statut-clinique-patient.statutCliniquePatient",
      "path" : "fr-lm-statut-clinique-patient.statutCliniquePatient",
      "short" : "Statut clinique du patient",
      "definition" : "Statut clinique du patient",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    }]
  }
}

```
