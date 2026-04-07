# Modèle logique métier - FR LM Observation - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Observation**

## Logical Model: Modèle logique métier - FR LM Observation 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMObservation |

 
observation 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Acte](StructureDefinition-fr-lm-acte.md), [Modèle logique métier - FR LM Documents ajoutés](StructureDefinition-fr-lm-documents-ajoutes.md), [Modèle logique métier - FR LM Education du patient](StructureDefinition-fr-lm-education-patient.md), [Modèle logique métier - FR LM Exposition aux radiations](StructureDefinition-fr-lm-exposition-radiations.md)... Show 5 more, [Modèle logique métier - FR LM Informations Cliniques](StructureDefinition-fr-lm-informations-cliniques.md), [Modèle logique métier - FR LM Raison de la recommandation](StructureDefinition-fr-lm-raison-recommandation.md), [Modèle logique métier - FR LM Résultats d'événements](StructureDefinition-fr-lm-resultats-evenements.md), [Modèle logique métier - FR LM Résultats d'examens](StructureDefinition-fr-lm-resultats-examens.md) and [Modèle logique métier - FR LM Résultats de laboratoire de biologie de seconde intention](StructureDefinition-fr-lm-resultats-laboratoire-biologie-seconde-intention.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-observation)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-observation.csv), [Excel](StructureDefinition-fr-lm-observation.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-observation",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMObservation",
  "title" : "Modèle logique métier - FR LM Observation",
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
  "description" : "observation",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-observation",
      "path" : "fr-lm-observation",
      "short" : "Modèle logique métier - FR LM Observation",
      "definition" : "observation"
    },
    {
      "id" : "fr-lm-observation.observationIdentifiant",
      "path" : "fr-lm-observation.observationIdentifiant",
      "short" : "Identifiant de l'observation",
      "definition" : "Identifiant de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-observation.observationCode",
      "path" : "fr-lm-observation.observationCode",
      "short" : "Code de l'observation",
      "definition" : "Code de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-observation.observationDescription",
      "path" : "fr-lm-observation.observationDescription",
      "short" : "Description narrative de l'observation",
      "definition" : "Description narrative de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-observation.observationStatut",
      "path" : "fr-lm-observation.observationStatut",
      "short" : "Statut de l'observation",
      "definition" : "Statut de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-observation.observationDate",
      "path" : "fr-lm-observation.observationDate",
      "short" : "Date de l'observation",
      "definition" : "Date de l'observation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-observation.observationNombreRenouvellements",
      "path" : "fr-lm-observation.observationNombreRenouvellements",
      "short" : "Nombre de renouvellements possibles",
      "definition" : "Nombre de renouvellements possibles",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Range"
      }]
    },
    {
      "id" : "fr-lm-observation.observationResultat",
      "path" : "fr-lm-observation.observationResultat",
      "short" : "Valeur de l'observation",
      "definition" : "Valeur de l'observation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-observation.observationInterpretation",
      "path" : "fr-lm-observation.observationInterpretation",
      "short" : "Interprétation",
      "definition" : "Interprétation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-observation.observationMethode",
      "path" : "fr-lm-observation.observationMethode",
      "short" : "Méthode",
      "definition" : "Méthode",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-observation.observationLocalisationAnatomique",
      "path" : "fr-lm-observation.observationLocalisationAnatomique",
      "short" : "Localisation anatomique",
      "definition" : "Localisation anatomique",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "description" : "SNOMED CT (2.16.840.1.113883.6.96)"
      }
    },
    {
      "id" : "fr-lm-observation.observationAuteur",
      "path" : "fr-lm-observation.observationAuteur",
      "short" : "Auteur de l'observation",
      "definition" : "Auteur de l'observation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    }]
  }
}

```
