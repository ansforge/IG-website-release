# Modèle logique métier - FR LM Résultats d'examens - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Résultats d'examens**

## Logical Model: Modèle logique métier - FR LM Résultats d'examens 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats-examens | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMResultatsExamens |

 
Section Résultats d’examens 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-resultats-examens)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-resultats-examens.csv), [Excel](StructureDefinition-fr-lm-resultats-examens.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-resultats-examens",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats-examens",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMResultatsExamens",
  "title" : "Modèle logique métier - FR LM Résultats d'examens",
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
  "description" : "Section Résultats d'examens",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats-examens",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-resultats-examens",
      "path" : "fr-lm-resultats-examens",
      "short" : "Modèle logique métier - FR LM Résultats d'examens",
      "definition" : "Section Résultats d'examens"
    },
    {
      "id" : "fr-lm-resultats-examens.sousSection",
      "path" : "fr-lm-resultats-examens.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-resultats-examens.entree.actes",
      "path" : "fr-lm-resultats-examens.entree.actes",
      "short" : "Entrée Acte",
      "definition" : "Entrée Acte",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-acte"
      }]
    },
    {
      "id" : "fr-lm-resultats-examens.entree.referencesExternes",
      "path" : "fr-lm-resultats-examens.entree.referencesExternes",
      "short" : "Entrée Références externes",
      "definition" : "Entrée Références externes",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-references-externes"
      }]
    },
    {
      "id" : "fr-lm-resultats-examens.entree.observation",
      "path" : "fr-lm-resultats-examens.entree.observation",
      "short" : "Entrée Simple observation",
      "definition" : "Entrée Simple observation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation"
      }]
    }]
  }
}

```
