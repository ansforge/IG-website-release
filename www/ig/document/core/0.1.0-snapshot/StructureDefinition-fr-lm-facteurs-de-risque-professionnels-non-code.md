# Modèle logique métier - FR LM Facteurs de risque professionnels non code - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Facteurs de risque professionnels non code**

## Logical Model: Modèle logique métier - FR LM Facteurs de risque professionnels non code 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-facteurs-de-risque-professionnels-non-code | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMFacteursDeRisqueProfessionnelsNonCode |

 
Section Facteurs de risque professionnels non code 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-facteurs-de-risque-professionnels-non-code)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-facteurs-de-risque-professionnels-non-code.csv), [Excel](StructureDefinition-fr-lm-facteurs-de-risque-professionnels-non-code.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-facteurs-de-risque-professionnels-non-code",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-facteurs-de-risque-professionnels-non-code",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMFacteursDeRisqueProfessionnelsNonCode",
  "title" : "Modèle logique métier - FR LM Facteurs de risque professionnels non code",
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
  "description" : "Section Facteurs de risque professionnels non code",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-facteurs-de-risque-professionnels-non-code",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-facteurs-de-risque-professionnels-non-code",
      "path" : "fr-lm-facteurs-de-risque-professionnels-non-code",
      "short" : "Modèle logique métier - FR LM Facteurs de risque professionnels non code",
      "definition" : "Section Facteurs de risque professionnels non code"
    },
    {
      "id" : "fr-lm-facteurs-de-risque-professionnels-non-code.sousSection",
      "path" : "fr-lm-facteurs-de-risque-professionnels-non-code.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-facteurs-de-risque-professionnels-non-code.entree",
      "path" : "fr-lm-facteurs-de-risque-professionnels-non-code.entree",
      "max" : "0"
    }]
  }
}

```
