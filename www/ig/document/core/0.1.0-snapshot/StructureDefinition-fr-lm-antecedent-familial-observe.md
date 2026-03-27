# Modèle logique métier - FR LM Antécédent familial observé - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Antécédent familial observé**

## Logical Model: Modèle logique métier - FR LM Antécédent familial observé 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-antecedent-familial-observe | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMAntecedentFamilialObserve |

 
Antécédent familial 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Antécédents familiaux](StructureDefinition-fr-lm-antecedents-familiaux-entree.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-antecedent-familial-observe)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-antecedent-familial-observe.csv), [Excel](StructureDefinition-fr-lm-antecedent-familial-observe.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-antecedent-familial-observe",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-antecedent-familial-observe",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMAntecedentFamilialObserve",
  "title" : "Modèle logique métier - FR LM Antécédent familial observé",
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
  "description" : "Antécédent familial",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-antecedent-familial-observe",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-antecedent-familial-observe",
      "path" : "fr-lm-antecedent-familial-observe",
      "short" : "Modèle logique métier - FR LM Antécédent familial observé",
      "definition" : "Antécédent familial"
    },
    {
      "id" : "fr-lm-antecedent-familial-observe.identifiant",
      "path" : "fr-lm-antecedent-familial-observe.identifiant",
      "short" : "Identifiant de l'observation",
      "definition" : "Identifiant de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-antecedent-familial-observe.code",
      "path" : "fr-lm-antecedent-familial-observe.code",
      "short" : "Code de l'observation",
      "definition" : "Code de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-antecedent-familial-observe.descriptionNarrative",
      "path" : "fr-lm-antecedent-familial-observe.descriptionNarrative",
      "short" : "Description narrative de l'observation",
      "definition" : "Description narrative de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-antecedent-familial-observe.statut",
      "path" : "fr-lm-antecedent-familial-observe.statut",
      "short" : "Statut de l'observation",
      "definition" : "Statut de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-antecedent-familial-observe.horodatage",
      "path" : "fr-lm-antecedent-familial-observe.horodatage",
      "short" : "Horodatage de l'entrée",
      "definition" : "Horodatage de l'entrée",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "time"
      }]
    },
    {
      "id" : "fr-lm-antecedent-familial-observe.resultat",
      "path" : "fr-lm-antecedent-familial-observe.resultat",
      "short" : "Résultat de l'observation effectuée",
      "definition" : "Résultat de l'observation effectuée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-antecedent-familial-observe.interpretation",
      "path" : "fr-lm-antecedent-familial-observe.interpretation",
      "short" : "Interprétation",
      "definition" : "Interprétation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-antecedent-familial-observe.methode",
      "path" : "fr-lm-antecedent-familial-observe.methode",
      "short" : "\tMéthode utilisée",
      "definition" : "\tMéthode utilisée",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-antecedent-familial-observe.site",
      "path" : "fr-lm-antecedent-familial-observe.site",
      "short" : "Site",
      "definition" : "Site",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-antecedent-familial-observe.auteur",
      "path" : "fr-lm-antecedent-familial-observe.auteur",
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
