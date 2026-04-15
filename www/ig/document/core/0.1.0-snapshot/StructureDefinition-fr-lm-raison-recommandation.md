# Modèle logique métier - FR LM Raison de la recommandation - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Raison de la recommandation**

## Logical Model: Modèle logique métier - FR LM Raison de la recommandation 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-raison-recommandation | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRLMRaisonRecommandation |

 
Section Raison de la recommandation 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-raison-recommandation)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-raison-recommandation.csv), [Excel](StructureDefinition-fr-lm-raison-recommandation.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-raison-recommandation",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-raison-recommandation",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMRaisonRecommandation",
  "title" : "Modèle logique métier - FR LM Raison de la recommandation",
  "status" : "draft",
  "date" : "2026-04-15T16:11:27+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Section Raison de la recommandation",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-raison-recommandation",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-raison-recommandation",
      "path" : "fr-lm-raison-recommandation",
      "short" : "Modèle logique métier - FR LM Raison de la recommandation",
      "definition" : "Section Raison de la recommandation"
    },
    {
      "id" : "fr-lm-raison-recommandation.sousSection",
      "path" : "fr-lm-raison-recommandation.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-raison-recommandation.entree",
      "path" : "fr-lm-raison-recommandation.entree",
      "min" : 1
    },
    {
      "id" : "fr-lm-raison-recommandation.entree.observation",
      "path" : "fr-lm-raison-recommandation.entree.observation",
      "short" : "Entrée Simple observation",
      "definition" : "Entrée Simple observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation"
      }]
    },
    {
      "id" : "fr-lm-raison-recommandation.entree.problemes",
      "path" : "fr-lm-raison-recommandation.entree.problemes",
      "short" : "Entrée Problème",
      "definition" : "Entrée Problème",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-probleme"
      }]
    }]
  }
}

```
