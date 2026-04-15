# Modèle logique métier - FR LM Problèmes actifs - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Problèmes actifs**

## Logical Model: Modèle logique métier - FR LM Problèmes actifs 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-problemes-actifs | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRLMProblemesActifs |

 
Section Problèmes actifs 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-problemes-actifs)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-problemes-actifs.csv), [Excel](StructureDefinition-fr-lm-problemes-actifs.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-problemes-actifs",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-problemes-actifs",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMProblemesActifs",
  "title" : "Modèle logique métier - FR LM Problèmes actifs",
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
  "description" : "Section Problèmes actifs",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-problemes-actifs",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-problemes-actifs",
      "path" : "fr-lm-problemes-actifs",
      "short" : "Modèle logique métier - FR LM Problèmes actifs",
      "definition" : "Section Problèmes actifs"
    },
    {
      "id" : "fr-lm-problemes-actifs.titreSection",
      "path" : "fr-lm-problemes-actifs.titreSection",
      "min" : 1
    },
    {
      "id" : "fr-lm-problemes-actifs.sousSection",
      "path" : "fr-lm-problemes-actifs.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-problemes-actifs.entree",
      "path" : "fr-lm-problemes-actifs.entree",
      "min" : 1
    },
    {
      "id" : "fr-lm-problemes-actifs.entree.problemes",
      "path" : "fr-lm-problemes-actifs.entree.problemes",
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
