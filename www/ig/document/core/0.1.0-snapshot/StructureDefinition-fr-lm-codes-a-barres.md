# Modèle logique métier - FR LM Codes à barres - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Codes à barres**

## Logical Model: Modèle logique métier - FR LM Codes à barres 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-codes-a-barres | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRLMCodesAbarres |

 
Section Codes à barres 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-codes-a-barres)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-codes-a-barres.csv), [Excel](StructureDefinition-fr-lm-codes-a-barres.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-codes-a-barres",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-codes-a-barres",
  "version" : "0.1.0",
  "name" : "FRLMCodesAbarres",
  "title" : "Modèle logique métier - FR LM Codes à barres",
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
  "description" : "Section Codes à barres",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-codes-a-barres",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-codes-a-barres",
      "path" : "fr-lm-codes-a-barres",
      "short" : "Modèle logique métier - FR LM Codes à barres",
      "definition" : "Section Codes à barres"
    },
    {
      "id" : "fr-lm-codes-a-barres.sousSection",
      "path" : "fr-lm-codes-a-barres.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-codes-a-barres.entree.imageIllustrative",
      "path" : "fr-lm-codes-a-barres.entree.imageIllustrative",
      "short" : "Codes à barres : Entrée Image illustrative",
      "definition" : "Codes à barres : Entrée Image illustrative",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-image-illustrative"
      }]
    }]
  }
}

```
