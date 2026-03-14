# Modèle logique métier - FR LM Antécédents familiaux - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Antécédents familiaux**

## Logical Model: Modèle logique métier - FR LM Antécédents familiaux 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-antecedents-familiaux-entree | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRLMAntecedentsFamiliauxEntree |

 
Antécédents familiaux 

**Utilisations:**

* Ce Modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-antecedents-familiaux-entree)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-antecedents-familiaux-entree.csv), [Excel](StructureDefinition-fr-lm-antecedents-familiaux-entree.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-antecedents-familiaux-entree",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-antecedents-familiaux-entree",
  "version" : "0.1.0",
  "name" : "FRLMAntecedentsFamiliauxEntree",
  "title" : "Modèle logique métier - FR LM Antécédents familiaux",
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
  "description" : "Antécédents familiaux",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-antecedents-familiaux-entree",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-antecedents-familiaux-entree",
      "path" : "fr-lm-antecedents-familiaux-entree",
      "short" : "Modèle logique métier - FR LM Antécédents familiaux",
      "definition" : "Antécédents familiaux"
    },
    {
      "id" : "fr-lm-antecedents-familiaux-entree.statut",
      "path" : "fr-lm-antecedents-familiaux-entree.statut",
      "short" : "Statut de l’entrée",
      "definition" : "Statut de l’entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }],
      "patternCode" : "completed"
    },
    {
      "id" : "fr-lm-antecedents-familiaux-entree.identificationParent",
      "path" : "fr-lm-antecedents-familiaux-entree.identificationParent",
      "short" : "Identification du parent",
      "definition" : "Identification du parent",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-sujet"
      }]
    },
    {
      "id" : "fr-lm-antecedents-familiaux-entree.participant",
      "path" : "fr-lm-antecedents-familiaux-entree.participant",
      "short" : "Lien avec un autre sujet",
      "definition" : "Lien avec un autre sujet",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-antecedents-familiaux-entree.antecedentFamilialObserve",
      "path" : "fr-lm-antecedents-familiaux-entree.antecedentFamilialObserve",
      "short" : "Antécédent familial observé",
      "definition" : "Antécédent familial observé",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-antecedent-familial-observe"
      }]
    }]
  }
}

```
