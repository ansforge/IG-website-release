# Modèle logique métier - FR LM Transfert du patient - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Transfert du patient**

## Logical Model: Modèle logique métier - FR LM Transfert du patient 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-transfert-du-patient | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMTransfertDuPatient |

 
Transfert du patient 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Résultats d'événements](StructureDefinition-fr-lm-resultats-evenements.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-transfert-du-patient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-transfert-du-patient.csv), [Excel](StructureDefinition-fr-lm-transfert-du-patient.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-transfert-du-patient",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-transfert-du-patient",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMTransfertDuPatient",
  "title" : "Modèle logique métier - FR LM Transfert du patient",
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
  "description" : "Transfert du patient",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-transfert-du-patient",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-transfert-du-patient",
      "path" : "fr-lm-transfert-du-patient",
      "short" : "Modèle logique métier - FR LM Transfert du patient",
      "definition" : "Transfert du patient"
    },
    {
      "id" : "fr-lm-transfert-du-patient.identifiant",
      "path" : "fr-lm-transfert-du-patient.identifiant",
      "short" : "Identifiant de l’entrée",
      "definition" : "Identifiant de l’entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-transfert-du-patient.code",
      "path" : "fr-lm-transfert-du-patient.code",
      "short" : "Code de l’entrée",
      "definition" : "Code de l’entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-transfert-du-patient.description",
      "path" : "fr-lm-transfert-du-patient.description",
      "short" : "Texte décrivant le transfert",
      "definition" : "Texte décrivant le transfert",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-transfert-du-patient.statut",
      "path" : "fr-lm-transfert-du-patient.statut",
      "short" : "Statut du transfert",
      "definition" : "Statut du transfert",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-transfert-du-patient.dateTransfert",
      "path" : "fr-lm-transfert-du-patient.dateTransfert",
      "short" : "Date du transfert",
      "definition" : "Date du transfert",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-transfert-du-patient.destination",
      "path" : "fr-lm-transfert-du-patient.destination",
      "short" : "Destination",
      "definition" : "Destination",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-participant-corps"
      }]
    }]
  }
}

```
