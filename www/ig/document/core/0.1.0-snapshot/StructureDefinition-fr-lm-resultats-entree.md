# Modèle logique métier - FR LM Resultats - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Resultats**

## Logical Model: Modèle logique métier - FR LM Resultats 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats-entree | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMResultatsEntry |

 
Resultats 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Résultats](StructureDefinition-fr-lm-resultats.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-resultats-entree)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-resultats-entree.csv), [Excel](StructureDefinition-fr-lm-resultats-entree.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-resultats-entree",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats-entree",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMResultatsEntry",
  "title" : "Modèle logique métier - FR LM Resultats",
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
  "description" : "Resultats",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats-entree",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-resultats-entree",
      "path" : "fr-lm-resultats-entree",
      "short" : "Modèle logique métier - FR LM Resultats",
      "definition" : "Resultats"
    },
    {
      "id" : "fr-lm-resultats-entree.identifiant",
      "path" : "fr-lm-resultats-entree.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-resultats-entree.code",
      "path" : "fr-lm-resultats-entree.code",
      "short" : "Code de l'entrée. Élément observé",
      "definition" : "Code de l'entrée. Élément observé",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-resultats-entree.statut",
      "path" : "fr-lm-resultats-entree.statut",
      "short" : "Statut de l'entrée",
      "definition" : "Statut de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-resultats-entree.date",
      "path" : "fr-lm-resultats-entree.date",
      "short" : "Date de l'entrée",
      "definition" : "Date de l'entrée",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-resultats-entree.executant",
      "path" : "fr-lm-resultats-entree.executant",
      "short" : "Exécutant",
      "definition" : "Exécutant",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-laboratoire-executant"
      }]
    },
    {
      "id" : "fr-lm-resultats-entree.auteur",
      "path" : "fr-lm-resultats-entree.auteur",
      "short" : "Auteur",
      "definition" : "Auteur",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    },
    {
      "id" : "fr-lm-resultats-entree.resultat",
      "path" : "fr-lm-resultats-entree.resultat",
      "short" : "Resultat",
      "definition" : "Resultat",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation-result"
      }]
    }]
  }
}

```
