# Modèle logique métier - FR LM Observation Result - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Observation Result**

## Logical Model: Modèle logique métier - FR LM Observation Result 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation-result | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMObservationResult |

 
Résultat d’une observation médicale (résultat d’examen de laboratoire, d’imagerie, etc.) 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Resultats](StructureDefinition-fr-lm-resultats-entree.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-observation-result)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-observation-result.csv), [Excel](StructureDefinition-fr-lm-observation-result.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-observation-result",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation-result",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMObservationResult",
  "title" : "Modèle logique métier - FR LM Observation Result",
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
  "description" : "Résultat d'une observation médicale (résultat d'examen de laboratoire, d'imagerie, etc.)",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation-result",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-observation-result",
      "path" : "fr-lm-observation-result",
      "short" : "Modèle logique métier - FR LM Observation Result",
      "definition" : "Résultat d'une observation médicale (résultat d'examen de laboratoire, d'imagerie, etc.)"
    },
    {
      "id" : "fr-lm-observation-result.identifiant",
      "path" : "fr-lm-observation-result.identifiant",
      "short" : "Identifiant de l'observation",
      "definition" : "Identifiant de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-observation-result.code",
      "path" : "fr-lm-observation-result.code",
      "short" : "Code de l'observation",
      "definition" : "Code de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-observation-result.description",
      "path" : "fr-lm-observation-result.description",
      "short" : "Description narrative de l'observation",
      "definition" : "Description narrative de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-observation-result.statut",
      "path" : "fr-lm-observation-result.statut",
      "short" : "Statut de l'observation : completed",
      "definition" : "Statut de l'observation : completed",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-observation-result.date",
      "path" : "fr-lm-observation-result.date",
      "short" : "Date/heure de l'observation",
      "definition" : "Date/heure de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-observation-result.valeur",
      "path" : "fr-lm-observation-result.valeur",
      "short" : "Valeur observée",
      "definition" : "Valeur observée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-observation-result.interpretation",
      "path" : "fr-lm-observation-result.interpretation",
      "short" : "Interprétation de la valeur (normal, anormal, etc.)",
      "definition" : "Interprétation de la valeur (normal, anormal, etc.)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-observation-result.site",
      "path" : "fr-lm-observation-result.site",
      "short" : "Site de l'observation",
      "definition" : "Site de l'observation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-observation-result.auteur",
      "path" : "fr-lm-observation-result.auteur",
      "short" : "Auteur de l'observation",
      "definition" : "Auteur de l'observation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    },
    {
      "id" : "fr-lm-observation-result.intervalleReference",
      "path" : "fr-lm-observation-result.intervalleReference",
      "short" : "Intervalle de référence",
      "definition" : "Intervalle de référence",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Range"
      }]
    },
    {
      "id" : "fr-lm-observation-result.commentaires",
      "path" : "fr-lm-observation-result.commentaires",
      "short" : "entrée Commentaires",
      "definition" : "entrée Commentaires",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-commentaire-er"
      }]
    },
    {
      "id" : "fr-lm-observation-result.demandeExamen",
      "path" : "fr-lm-observation-result.demandeExamen",
      "short" : "Demande d'examen associée",
      "definition" : "Demande d'examen associée",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-demande-examen-ou-suivi"
      }]
    }]
  }
}

```
