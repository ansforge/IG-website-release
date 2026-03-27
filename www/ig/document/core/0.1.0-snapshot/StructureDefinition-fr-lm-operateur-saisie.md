# Modèle logique métier - FR LM Opérateur de saisie - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Opérateur de saisie**

## Logical Model: Modèle logique métier - FR LM Opérateur de saisie 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-operateur-saisie | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMOperateurSaisie |

 
Opérateur de saisie de la totalité ou d’une partie du contenu du document. 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM En-tête document](StructureDefinition-fr-lm-entete-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-operateur-saisie)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-operateur-saisie.csv), [Excel](StructureDefinition-fr-lm-operateur-saisie.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-operateur-saisie",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-operateur-saisie",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMOperateurSaisie",
  "title" : "Modèle logique métier - FR LM Opérateur de saisie",
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
  "description" : "Opérateur de saisie de la totalité ou d'une partie du contenu du document.",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-operateur-saisie",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-operateur-saisie",
      "path" : "fr-lm-operateur-saisie",
      "short" : "Modèle logique métier - FR LM Opérateur de saisie",
      "definition" : "Opérateur de saisie de la totalité ou d'une partie du contenu du document.",
      "max" : "1"
    },
    {
      "id" : "fr-lm-operateur-saisie.dateSaisie",
      "path" : "fr-lm-operateur-saisie.dateSaisie",
      "short" : "Date de la saisie.",
      "definition" : "Date de la saisie.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-operateur-saisie.operateurSaisie",
      "path" : "fr-lm-operateur-saisie.operateurSaisie",
      "short" : "Opérateur de saisie",
      "definition" : "Opérateur de saisie",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-personne-structure"
      }]
    }]
  }
}

```
